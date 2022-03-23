@extends('layout.app')

@section('content')
 <div class="container mt-5"  >
    <!-- Filter -->
    <div class="row p-2 justify-content-center align-items-center mb-3" style = "border:1px solid rgba(0,0,0,0.2); border-radius:4px; border-style:dashed;">
        <h6>{{__('Filter')}}</h6>
        <div class = "col-12 col-sm-6 col-md-3 ">
            <label class = "">{{__('status')}}</label>
            <select id = "status-choice">
                <option value = 0 selected>{{__('All')}}</option>
                @foreach($status as $row)
                    @if($row->value !="draft")
                    <option value= {{$row->id}}> {{trans($row->value)}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class = "col-12 col-sm-6 col-md-3 ">
            <label class = "">{{__('Category')}}</label>
            <select id = "category-choice" multiple>
                <option value = 0 selected>{{__('All')}}</option>
                @foreach($categories as $category)
                    <option value= {{$category->id}}> {{$category->value}}</option>
                @endforeach
            </select>
        </div>
        <div class = "col-12 col-sm-6 col-md-4 mb-3">
            <div class="input-group input-group-outline">
                <label class = "form-label">{{__('Keywords')}}</label>
                <input class="form-control " id = "keywords">
            </div>
        </div>
        <div class = "col-12 col-sm-6 col-md-2">
            <a class = "btn btn-success">{{__('Apply')}}</a>
        </div>

    </div>
    <!-- items -->
    <div class = "project-list">

    </div>


</div>
@endsection

@section('page_js')

<script src = "{{asset('js/sale-list.js')}}"></script>

<script>
    $(document).ready(function(){
        SaleList.init();
    });
</script>

@endsection
