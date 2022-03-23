@extends('layouts.application')
@section('title')
Login
@endsection
@section('body')
<main id="sign">
 <!-- Session Status -->

 

<!-- Validation Errors -->

    <section class="p_common_section">
    <div class="s_container">
        <div class="secton_content">
        <div class="sign_form_container">
            <form action="{{route('login')}}" method="post">
            @csrf
            <div class="sign_form">
                <div class="sign_form_inner">
                <div class="user_avator">
                    <img src="{{asset('/assets/img/common/user_avator.png')}}" alt="">
                </div>
                <div class="sign_input_wrap">
                    <div class="form_input_item">
                    <label class="input_label">EMAIL</label>
                    <div class="input_wrap">
                        <input type="email" name="email" id="email">
                    </div>
                    </div>
                    <div class="form_input_item">
                    <label class="input_label">PASSWORD</label>
                    <div class="input_wrap">
                        <input type="password" name="password" id="password">
                    </div>
                    </div>
                </div>
                
                                        
                @if ($errors->any())
                    <div  class = "color_red mb_35">
                        <div class="font-medium " >
                            {{ __('Whoops! Something went wrong.') }}
                        </div>

                        <ul class="mt-3 list-disc list-inside text-sm ">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               
                <div class="sign_btn_wrap">
                    <button type="submit" class="sign_btn">
                    <span>ログイン</span>
                    </button>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
    </section>

</main>
@endsection