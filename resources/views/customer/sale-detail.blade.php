@extends('layout.app')
@section('content')
 <div class="container mt-5"  style = "max-width:700px;">
        <div class="row">
            <form>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="col-lg-12 mx-auto ">

                    <div class="position-relative border-radius-xl overflow-hidden shadow-lg mb-7 p-4">
                        <div class="container border-bottom">
                            <div class="row justify-space-between py-2">
                                <div class="col-md-5 me-auto">
                                    <p class="lead text-dark pt-1 mb-0">{{__('Domain Information')}}</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="nav-wrapper position-relative end-0">
                                        <ul class="nav nav-pills nav-fill flex-row p-1" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#basic-section" role="tab" aria-selected="true">
                                                    <i class="fas fa-sign-in text-sm me-2"></i> {{__('Basic')}}
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#details-section" role="tab" aria-selected="false">
                                                    <i class="fas fa-sign-out text-sm me-2"></i> {{__('Details')}}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content tab-space  mt-3">
                            <div class="tab-pane active" id="basic-section">
                            <div class="row mb-1 mt-5">

                                <div class="col-12 col-sm-6  mb-4">
                                    <label class="ms-0">{{__('Sure Name')}}*</label>
                                    <div>
                                        <h6>{{$domain->surename}}</h6>
                                    </div>

                                </div>
                                <div class="col-12 col-sm-6  mb-4">
                                    <label class="ms-0">{{__('Name')}}* </label>
                                    <div>
                                        <h6>{{$domain->name}}</h6>
                                    </div>
                                </div>
                                </div>

                                <div class="row ">

                                    <div class="col-12  col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Type')}}*</label>
                                        <div>
                                            <h6>{{$domain->userType}}</h6>
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12  mb-4">
                                        <label class="ms-0">{{__('Company Name')}}*</label>
                                        <div>
                                            <h6>{{$domain->company}}</h6>
                                        </div>

                                    </div>
                                </div>


                                <div class="row   ">

                                    <div class="col-12 col-sm-6 mb-4">
                                    <label class="ms-0">{{__('Phone Number')}}*</label>
                                    <div>
                                            <h6>{{$domain->mobile}}</h6>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Email')}}*</label>
                                        <div>
                                            <h6>{{$domain->email}}</h6>
                                        </div>

                                    </div>
                                </div>
                                <div class="row   ">

                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Country')}}*</label>
                                        <select disabled class="form-control " name="country-choice" id="country-choice">
                                        @foreach($countries as $country)
                                            <option value= {{$country->id}} {{($country->id) ==($domain->country) ?"selected":""}}> {{$country->value}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('State')}}*</label>

                                        <div>
                                            <h6>{{$domain->state}}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row   ">

                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('zip/code')}}*</label>
                                        <div>
                                            <h6>{{$domain->zip}}</h6>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('City')}}*</label>
                                        <div>
                                            <h6>{{$domain->city}}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-12 mb-4">
                                        <label class="ms-0">{{__('Address')}}*</label>
                                        <div>
                                            <h6>{{$domain->address}}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-12 mb-4">
                                        <label class="ms-0">{{__('Description')}}*</label>
                                        <div>
                                            <p>{{$domain->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="details-section">
                                <div class="row mt-5">
                                    <div class = "col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Web site type')}}*</label>
                                        <select class="form-control " disabled name="type-choice" id="type-choice">
                                        @foreach($types as $type)
                                            <option value= {{$type->id}} {{($type->selected) ==$domain->webType ?"selected":""}}> {{$type->value}}</option>

                                        @endforeach

                                        </select>
                                    </div>
                                    <div class = "col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Category')}}*</label>
                                        <select class="form-control " disabled name="category-choice" id="category-choice" multiple>
                                        @foreach($categories as $category)
                                            <option value= {{$category->id}} {{(array_search($category->id,explode(",",$domain->category))>0)?"selected":""}}> {{$category->value}}</option>

                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row ">

                                    <div class="col-12 mb-4">

                                        <label class="ms-0">{{__('Project Title')}}*</label>
                                        <div>
                                            <h6>{{$domain->title}}</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="row ">

                                    <div class="col-12 mb-4">

                                        <label class="ms-0">{{__('Domain Name')}}*</label>
                                        <div>
                                            <h6>{{$domain->domain}}</h6>
                                        </div>
                                    </div>

                                </div>
                                <div class="row ">
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Revenue model')}}*</label>
                                        <select class="form-control "disabled name="revenue-choice" id="revenue-choice">
                                        @foreach($revenues as $revenue)
                                            <option value= {{$revenue->id}} {{($revenue->selected) ==$domain->revenue ?"selected":""}}> {{$revenue->value}}</option>

                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Responsive?')}}*</label>
                                        <div class="form-check form-switch d-flex align-items-center mb-3">
                                            <input class="form-check-input" {{$domain->responsive=="on"?"checked":""}} type="checkbox" id="responsive">
                                            <label class="form-check-label mb-0 ms-3" for="responsive">{{__('Yes')}}, {{__('No')}}</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row ">
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Operation Start time')}}*</label>
                                        <div>
                                            <h6>{{$domain->operationStart}}</h6>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Reason for sale')}}*</label>
                                        <select class="form-control " disabled name="reason-choice" id="reason-choice">
                                        @foreach($reasons as $reason)
                                            <option value= {{$reason->id}} {{($reason->selected) ==$domain->reason ?"selected":""}}> {{$reason->value}}</option>

                                        @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="row ">

                                    <div class="col-12 mb-4 border-bottom">

                                        <label class="ms-0">{{__('Balance of Payments')}}*</label>

                                    </div>

                                </div>
                                <!-- balance of payment -->
                                <div class="row ">

                                    <div class="col-12 col-sm-6 mb-4">

                                        <label class="ms-0">{{__('Desired Sale price')}}*</label>
                                        <div>
                                            <h6>{{$domain->desired}} <span class = "mt-2 ms-1">円</span></h6>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 mb-4">

                                        <label class="ms-0">{{__('PV')}}/{{__('month')}}*</label>
                                        <div>
                                            <h6>{{$domain->pv}} <span class = "mt-2 ms-1">円</span></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">

                                    <div class="col-12 col-sm-6 mb-4">

                                        <label class="ms-0">{{__('Sales')}}/{{__('month')}}*</label>
                                        <div>
                                            <h6>{{$domain->sale}} <span class = "mt-2 ms-1">円</span></h6>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 mb-4">

                                        <label class="ms-0">{{__('Cost')}}/{{__('month')}}*</label>
                                        <div>
                                            <h6>{{$domain->cost}} <span class = "mt-2 ms-1">円</span></h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class ="d-flex justify-content-end">
                            <a href = "#" class = "btn btn-outline-success me-2">{{__('Request Selling')}}</a>
                            <a href = "{{route('chat')}}" class = "btn btn-success">{{__('Contact Seller')}}</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('page_js')


<script>
    $(document).ready(function(){
        new Choices($("#category-choice")[0], {
        });
    });
</script>

@endsection
