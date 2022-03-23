@extends('layout.app')
@section('content')
<div class="container mt-5" style="max-width: 700px;">
    <div class="row">
        <div class="col-md-8 mx-auto text-center">

            <h4>Change Your Profile</h4>
        </div>
    </div>
    <form id = "fileUploadForm" method="POST" action="{{ route('account.profile') }}" enctype="multipart/form-data">
        @csrf
        <div class="row mb-1 mt-5">
            <div class="row ">

                <div class="col-9 col-md-6 mb-4">
                    <label class="ms-0">{{__('Avatar')}}*</label>

                    <input id = "file" name="file" type="file" class="form-control " style = "border:1px solid rgba(0,0,0,0.2);">

                </div>
                <div class = "col-3 col-md-1 mt-3">
                    @if(Auth::user()->avatar)
                        <a href = "#" class = "avatar avatar-lg rounded-circle " style = "width:60px; height:60px;">
                            <img alt =""  src='/uploads/{{Auth::user()->avatar}}' class = "w-100 h-100"></img>
                        </a>
                    @endif
                </div>
            </div>
            <div class="col-sm-6   mb-4">
                <label class="ms-0">First Name*</label>
                <div class="input-group input-group-outline">
                    <input class="form-control" name = "firstName" id = "firstName" value='{{Auth::user()->firstName}}'>
                </div>
            </div>
            <div class="col-sm-6   mb-4">
                <label class="ms-0">LastName* </label>
                <div class="input-group input-group-outline">
                    <input class="form-control " name = "lastName"  value='{{Auth::user()->lastName}}' id = "lastName">
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 col-sm-6 mb-4">
                <label class="ms-0">Gender*</label>
                <select class="form-control " name="gender" id="gender">
                    <option value="male" {{(Auth::user()->gender =="male"?"selected":"")}}> {{__("Male")}}</option>
                    <option value="female" {{(Auth::user()->gender =="female"?"selected":"")}}>{{__("Female")}}</option>
                </select>
            </div>
            <div class="col-12 col-sm-6 mb-4">
                <label class="ms-0">Date of birth*</label>
                <div class="input-group input-group-static">
                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    <input class="form-control datepicker" placeholder="Please select date" type="text" id = "birthday" name = "birthday" value='{{Auth::user()->birthday}}'>
                </div>

            </div>
        </div>

        <div class="row   ">

            <div class="col-12 mb-4 text-center">
                <button type = "submit" class="btn btn-primary">Save profile</button>

            </div>

        </div>
    </form>

</div>

@endsection
@section('plugin_js')
<script src = "{{asset('assets/js/core/jquery.form.min.js')}}"></script>
<script type = "text/javascript">
    $(document).ready(function(){
        new Choices($("#gender")[0], {
            searchEnabled: false
        });
        flatpickr('.datepicker', {
            dateFormat: "Y-m-d"
        });

        $('#fileUploadForm').ajaxForm({
            beforeSend: function () {
                console.log($("#file").val());
                if($("#firstName").val().trim()=="" || $("#lastName").val().trim()=="" || $("#birthday").val().trim()==""){
                    toastr.error("Fill All fields before sending","Error");
                    return false;
                }
            },
            uploadProgress: function (event, position, total, percentComplete) {
                var percentage = percentComplete;
                $('.progress .progress-bar').css("width", percentage+'%', function() {
                    return $(this).attr("aria-valuenow", percentage) + "%";
                })
            },
            complete: function (xhr) {
                toastr.success("Your Profile was saved","Success");

            }
        });
    })

</script>
@endsection
