@extends('layouts.application')
@section('title')
Register
@endsection
@section('body')
    <main id="sign">

<section class="p_common_section">
  <div class="s_container">
    <div class="secton_content">
      <div class="sign_form_container">
        <form method="POST" action="{{ route('register') }}">
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
                <div class="form_input_item">
                    <label class="input_label">PASSWORD</label>
                    <div class="input_wrap">
                        <input type="password" name="password_confirmation" id="password_confirmation">
                    </div>
                </div>
              </div>
              <div class="sign_btn_wrap">
                <button type="submit" class="sign_btn">
                  <span>登録</span>
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