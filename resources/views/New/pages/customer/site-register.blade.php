@extends('layouts.application')
@section('title')
Login
@endsection
@section('body')
<main id="registeration">

      <section class="p_common_section">
        <div class="s_container">
          <div class="section_title">
            <h2 class="xm_title">売却サイト登録</h2>
          </div>
          <div class="secton_content">
            <div class="p_register_form_container">
              <form action="" method="post">
                <div class="p_register_form">
                  <div class="form_input_wrap">
                    <div class="form_input_item">
                      <div class="label_wrap">
                        <p class="label_text">お名前<span class="required">必須</span></p>
                      </div>
                      <div class="input_wrap">
                        <div class="form_row">
                          <div class="form_col">
                            <div class="input_item">
                              <input type="text" name="last_name" id="last_name" placeholder="姓">
                            </div>
                          </div>
                          <div class="form_col">
                            <div class="input_item">
                              <input type="text" name="first_name" id="first_name" placeholder="名">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form_input_item">
                      <div class="label_wrap">
                        <p class="label_text">企業形態<span class="required">必須</span></p>
                      </div>
                      <div class="input_wrap">
                        <div class="form_row">
                          <div class="form_col">
                            <div class="input_item">
                              <div class="radio_group">
                                <label class="radio_container">個人
                                  <input type="radio" checked="checked" name="radio">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="radio_container">法人
                                  <input type="radio" name="radio">
                                  <span class="checkmark"></span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form_input_item">
                      <div class="label_wrap">
                        <p class="label_text">国名<span class="required">必須</span></p>
                      </div>
                      <div class="input_wrap">
                        <div class="form_row">
                          <div class="form_col">
                            <div class="input_item">
                              <select name="country" id="country">
                                <option value="日本">日本</option>
                                <option value="日本">日本</option>
                                <option value="日本">日本</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form_input_item">
                      <div class="label_wrap">
                        <p class="label_text">郵便番号<span class="required">必須</span></p>
                      </div>
                      <div class="input_wrap">
                        <div class="form_row">
                          <div class="form_col">
                            <div class="input_item">
                              <input type="text" name="postcode" id="postcode" placeholder="郵便番号">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form_input_item">
                      <div class="label_wrap">
                        <p class="label_text">都道府県<span class="required">必須</span></p>
                      </div>
                      <div class="input_wrap">
                        <div class="form_row">
                          <div class="form_col">
                            <div class="input_item">
                              <select name="prefecture" id="prefecture">
                                <option value="日本">都道府県</option>
                                <option value="日本">都道府県</option>
                                <option value="日本">都道府県</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form_input_item">
                      <div class="label_wrap">
                        <p class="label_text">市区町村<span class="required">必須</span></p>
                      </div>
                      <div class="input_wrap">
                        <div class="form_row">
                          <div class="form_col">
                            <div class="input_item">
                              <input type="text" name="city" id="city" placeholder="市区町村">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form_input_item">
                      <div class="label_wrap">
                        <p class="label_text">番地<span class="required">必須</span></p>
                      </div>
                      <div class="input_wrap">
                        <div class="input_item">
                          <input type="text" name="address" id="address" placeholder="番地">
                        </div>
                      </div>
                    </div>
                    <div class="form_input_item">
                      <div class="label_wrap">
                        <p class="label_text">その他住所</p>
                      </div>
                      <div class="input_wrap">
                        <div class="input_item">
                          <input type="text" name="other_address" id="other_address" placeholder="その他住所">
                        </div>
                      </div>
                    </div>
                    <div class="form_input_item">
                      <div class="label_wrap">
                        <p class="label_text">電話番号<span class="required">必須</span></p>
                      </div>
                      <div class="input_wrap">
                        <div class="form_row">
                          <div class="form_col">
                            <div class="input_item">
                              <input type="tel" name="tel" id="tel" placeholder="電話番号">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="form_submit_wrap">
                    <div class="confirm_term_item">
                      <label class="checkbox_container fs_16 fs_sp_14">利用規約に同意する
                        <input type="checkbox" name="confirm_term">
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="submit_btn_item">
                      <button type="submit" class="btn bgleft blue_btn submit_btn mx_auto">
                        <span>登録</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
                          <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
                            <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"/>
                            <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"/>
                            <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"/>
                          </g>
                        </svg>
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