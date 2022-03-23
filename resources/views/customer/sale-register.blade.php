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
                                    <p class="lead text-dark pt-1 mb-0">{{__('Sale Information')}}</p>
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
                                    <div class="input-group input-group-outline">

                                        <input class="form-control" id = "surename">
                                    </div>

                                </div>
                                <div class="col-12 col-sm-6  mb-4">
                                    <label class="ms-0">{{__('Name')}}* </label>
                                    <div class="input-group input-group-outline">

                                        <input class="form-control " id = "name">
                                    </div>
                                </div>
                                </div>

                                <div class="row ">

                                    <div class="col-12  col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Type')}}*</label>
                                        <select class="form-control " name="group-choice" id="group-choice">

                                            <option value="person">{{__('Personal')}}</option>
                                            <option value="group">{{__('Group')}}</option>

                                        </select>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12  mb-4">
                                        <label class="ms-0">{{__('Company Name')}}*</label>
                                        <div class="input-group input-group-outline">

                                            <input class="form-control " id = "company">
                                        </div>

                                    </div>
                                </div>


                                <div class="row   ">

                                    <div class="col-12 col-sm-6 mb-4">
                                    <label class="ms-0">{{__('Phone Number')}}*</label>
                                        <div class="input-group input-group-outline">
                                            <input class="form-control " id = "mobile">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Email')}}*</label>
                                        <div class="input-group input-group-outline">

                                            <input class="form-control " type="email" id = "email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row   ">

                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Country')}}*</label>
                                        <select class="form-control " name="country-choice" id="country-choice">
                                        @foreach($countries as $country)
                                            <option value= {{$country->id}} {{($country->selected) ==1 ?"selected":""}}> {{$country->value}}</option>

                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('State')}}*</label>
                                        <div class="input-group input-group-outline">

                                            <input class="form-control " id = "state">
                                        </div>
                                    </div>
                                </div>
                                <div class="row   ">

                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('zip/code')}}*</label>
                                        <div class="input-group input-group-outline">

                                            <input class="form-control " id = "zip">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('City')}}*</label>
                                        <div class="input-group input-group-outline">

                                            <input class="form-control " id = "city">
                                        </div>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-12 mb-4">
                                        <label class="ms-0">{{__('Address')}}*</label>
                                        <div class="input-group input-group-outline">
                                            <input class="form-control " id = "address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row  ">
                                    <div class="col-12 mb-4">
                                        <label class="ms-0">{{__('Description')}}*</label>
                                        <div class="input-group input-group-outline">
                                            <textarea class="form-control " rows="5" value = "" id = "description" placeholder="{{__('Please input your description')}}">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="details-section">
                                <div class="row mt-5">
                                    <div class = "col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Web site type')}}*</label>
                                        <select class="form-control " name="type-choice" id="type-choice">
                                        @foreach($types as $type)
                                            <option value= {{$type->id}} {{($type->selected) ==1 ?"selected":""}}> {{$type->value}}</option>

                                        @endforeach

                                        </select>
                                    </div>
                                    <div class = "col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Category')}}*</label>
                                        <select class="form-control " name="category-choice" id="category-choice" multiple>
                                        @foreach($categories as $category)
                                            <option value= {{$category->id}} {{($category->selected) ==1 ?"selected":""}}> {{$category->value}}</option>

                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row ">

                                    <div class="col-12 mb-4">

                                        <label class="ms-0">{{__('Project Title')}}*</label>
                                        <div class="input-group input-group-outline">

                                            <input class="form-control " id = "title">
                                        </div>
                                    </div>

                                </div>
                                <div class="row ">

                                    <div class="col-12 mb-4">

                                        <label class="ms-0">{{__('Domain Name')}}*</label>
                                        <div class="input-group input-group-outline">

                                            <input class="form-control " id = "domain">
                                        </div>
                                    </div>

                                </div>
                                <div class="row ">
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Revenue model')}}*</label>
                                        <select class="form-control " name="revenue-choice" id="revenue-choice">
                                        @foreach($revenues as $revenue)
                                            <option value= {{$revenue->id}} {{($revenue->selected) ==1 ?"selected":""}}> {{$revenue->value}}</option>

                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Responsive?')}}*</label>
                                        <div class="form-check form-switch d-flex align-items-center mb-3">
                                            <input class="form-check-input" checked type="checkbox" id="responsive">
                                            <label class="form-check-label mb-0 ms-3" for="responsive">{{__('Yes')}}, {{__('No')}}</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row ">
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Operation Start time')}}*</label>
                                        <div class="input-group input-group-static">
                                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                            <input class="form-control datepicker" placeholder="Please select date" type="text" id = "operation-time">
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6 mb-4">
                                        <label class="ms-0">{{__('Reason for sale')}}*</label>
                                        <select class="form-control " name="reason-choice" id="reason-choice">
                                        @foreach($reasons as $reason)
                                            <option value= {{$reason->id}} {{($reason->selected) ==1 ?"selected":""}}> {{$reason->value}}</option>

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
                                        <div class="input-group input-group-outline">

                                            <input class="form-control " id = "desired_price" type = "number"><span class = "mt-2 ms-1">円</span>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 mb-4">

                                        <label class="ms-0">{{__('PV')}}/{{__('month')}}*</label>
                                        <div class="input-group input-group-outline">

                                            <input class="form-control " id = "pv_month" type = "number"><span class = "mt-2 ms-1">円</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">

                                    <div class="col-12 col-sm-6 mb-4">

                                        <label class="ms-0">{{__('Sales')}}/{{__('month')}}*</label>
                                        <div class="input-group input-group-outline">

                                            <input class="form-control " id = "sales_month_price" type = "number">
                                            <span class = "mt-2 ms-1">円</span>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 mb-4">

                                        <label class="ms-0">{{__('Cost')}}/{{__('month')}}*</label>
                                        <div class="input-group input-group-outline">
                                            <input class="form-control " id = "cost_month_price" type = "number">
                                            <span class = "mt-2 ms-1">円</span>
                                        </div>
                                    </div>
                                </div>
                                <div class = "d-flex justify-content-end">
                                    <a class = "btn  btn-primary save-btn" data-status = "draft">{{__('Save As Draft')}}</a>
                                    <a class = "btn  btn-outline-success save-btn ms-2" data-status = "pending">{{__('Save')}} & {{__('Publish')}}</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('page_js')

<script src = "{{asset('js/sale-register.js')}}"></script>

<script>
    $(document).ready(function(){
        SaleRegister.init();
    });
</script>

@endsection
