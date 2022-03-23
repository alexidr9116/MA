@extends('layouts.application')
@section('title')
Login
@endsection
@section('body')

<main id="flow">

<section class="p_common_section">
  <div class="section_title">
    <h2 class="xm_title">サイト売却の流れ</h2>
  </div>
  <div class="secton_content">
    <div class="p_flow_list_container">
      <div class="p_flow_list">
        <div class="p_flow_item">
          <div class="container">
            <div class="flex_area">
              <div class="column_left">
                <div class="p_flow_item_step">
                  <picture class="p_flow_item_step_img">
                    <source media="(min-width:769px)" srcset="./assets/img/common/flow_icon.svg">
                    <source media="(max-width:768px)" srcset="./assets/img/common/flow_icon_sp.svg">
                    <img src="./assets/img/common/flow_icon.svg" alt="">
                  </picture>
                </div>
              </div>
              <div class="column_right">
                <div class="p_flow_item_info">
                  <div class="info_wrap">
                    <div class="item_title">
                      <h3>サイト自動査定（任意）</h3>
                    </div>
                    <div class="item_content">
                      <p class="m_text">売却したいサイトを簡単・スピーディーに査定できます。必要項目を入力するとすぐに査定結果が出ます。売却金額の目安を知るために、売却金額アップ施策を検討するために、お気軽にお試しください。</p>
                    </div>
                    <div class="btn_wrap">
                      <a href="#" class="btn btn_sm bgleft blue_btn">
                        <span>サイト自動査定はこちら</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
                          <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
                            <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"/>
                            <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"/>
                            <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"/>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p_flow_item">
          <div class="container">
            <div class="flex_area">
              <div class="column_left">
                <div class="p_flow_item_step">
                  <picture class="p_flow_item_step_img">
                    <source media="(min-width:769px)" srcset="./assets/img/common/flow_icon.svg">
                    <source media="(max-width:768px)" srcset="./assets/img/common/flow_icon_sp.svg">
                    <img src="./assets/img/common/flow_icon.svg" alt="">
                  </picture>
                </div>
              </div>
              <div class="column_right">
                <div class="p_flow_item_info">
                  <div class="info_wrap">
                    <div class="item_title">
                      <h3>売却サイト登録</h3>
                    </div>
                    <div class="item_content">
                      <p class="m_text">サイト情報はできるだけ細かいところまで入力することをおすすめします。案件の信頼性アップに繋がります。特にアクセスデータはGoogleAnalytics連携を使用するとエビデンスの偽装ができないため、買主からの信頼感が高まります。</p>
                    </div>
                    <div class="btn_wrap">
                      <a href="#" class="btn btn_sm bgleft blue_btn">
                        <span>サイト自動査定はこちら</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
                          <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
                            <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"/>
                            <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"/>
                            <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"/>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p_flow_item">
          <div class="container">
            <div class="flex_area">
              <div class="column_left">
                <div class="p_flow_item_step">
                  <picture class="p_flow_item_step_img">
                    <source media="(min-width:769px)" srcset="./assets/img/common/flow_icon.svg">
                    <source media="(max-width:768px)" srcset="./assets/img/common/flow_icon_sp.svg">
                    <img src="./assets/img/common/flow_icon.svg" alt="">
                  </picture>
                </div>
              </div>
              <div class="column_right">
                <div class="p_flow_item_info">
                  <div class="info_wrap">
                    <div class="item_title">
                      <h3>売買交渉</h3>
                    </div>
                    <div class="item_content">
                      <p class="m_text">買主から交渉申込みが届いたら、その買主と交渉するか判断をします。チャット機能を活用して買主と条件交渉を行います。交渉がまとまると、買主が購入提案をします。受け取った提案の中から売却先を決定しましょう。</p>
                    </div>
                    <div class="btn_wrap">
                      <a href="#" class="btn btn_sm bgleft blue_btn">
                        <span>サイト自動査定はこちら</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
                          <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
                            <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"/>
                            <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"/>
                            <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"/>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p_flow_item">
          <div class="container">
            <div class="flex_area">
              <div class="column_left">
                <div class="p_flow_item_step">
                  <picture class="p_flow_item_step_img">
                    <source media="(min-width:769px)" srcset="./assets/img/common/flow_icon.svg">
                    <source media="(max-width:768px)" srcset="./assets/img/common/flow_icon_sp.svg">
                    <img src="./assets/img/common/flow_icon.svg" alt="">
                  </picture>
                </div>
              </div>
              <div class="column_right">
                <div class="p_flow_item_info">
                  <div class="info_wrap">
                    <div class="item_title">
                      <h3>事業譲渡契約</h3>
                    </div>
                    <div class="item_content">
                      <p class="m_text">売却が決定したら契約書に盛り込む内容を確定させます。フォームに沿って入力、買主と合意することで、弁護士監修の事業譲渡契約書（売買契約書）が自動生成されます。契約書の内容が買主に承認されると電子契約の手続きが... ... ...</p>
                    </div>
                    <div class="btn_wrap">
                      <a href="#" class="btn btn_sm bgleft blue_btn">
                        <span>サイト自動査定はこちら</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
                          <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
                            <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"/>
                            <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"/>
                            <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"/>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p_flow_item">
          <div class="container">
            <div class="flex_area">
              <div class="column_left">
                <div class="p_flow_item_step">
                  <picture class="p_flow_item_step_img">
                    <source media="(min-width:769px)" srcset="./assets/img/common/flow_icon.svg">
                    <source media="(max-width:768px)" srcset="./assets/img/common/flow_icon_sp.svg">
                    <img src="./assets/img/common/flow_icon.svg" alt="">
                  </picture>
                </div>
              </div>
              <div class="column_right">
                <div class="p_flow_item_info">
                  <div class="info_wrap">
                    <div class="item_title">
                      <h3>エスクローサービス</h3>
                    </div>
                    <div class="item_content">
                      <p class="m_text">売買代金のやり取りはラッコM&Aが提供するエスクローサービスをご利用いただきます。契約締結後、買主からラッコM&Aに送金⇒サイト移行・検収開始⇒検収完了報告⇒ラッコM&Aから売主に売買代金を送金という流れです。</p>
                    </div>
                    <div class="btn_wrap">
                      <a href="#" class="btn btn_sm bgleft blue_btn">
                        <span>サイト自動査定はこちら</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
                          <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
                            <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"/>
                            <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"/>
                            <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"/>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p_flow_item">
          <div class="container">
            <div class="flex_area">
              <div class="column_left">
                <div class="p_flow_item_step">
                  <picture class="p_flow_item_step_img">
                    <source media="(min-width:769px)" srcset="./assets/img/common/flow_icon.svg">
                    <source media="(max-width:768px)" srcset="./assets/img/common/flow_icon_sp.svg">
                    <img src="./assets/img/common/flow_icon.svg" alt="">
                  </picture>
                </div>
              </div>
              <div class="column_right">
                <div class="p_flow_item_info">
                  <div class="info_wrap">
                    <div class="item_title">
                      <h3>サイト移行・検収</h3>
                    </div>
                    <div class="item_content">
                      <p class="m_text">買主へサイトデータ（コンテンツ）やドメインを引き渡し、サイトの引っ越しを行います。1GBまでの容量でしたらラッコM&Aのチャット上でデータの受け渡しが可能です。具体的な作業内容にお困りの場合は、ラッコM&Aスタッフが... ... ...</p>
                    </div>
                    <div class="btn_wrap">
                      <a href="#" class="btn btn_sm bgleft blue_btn">
                        <span>サイト自動査定はこちら</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
                          <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
                            <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"/>
                            <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"/>
                            <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"/>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p_flow_item">
          <div class="container">
            <div class="flex_area">
              <div class="column_left">
                <div class="p_flow_item_step">
                  <picture class="p_flow_item_step_img">
                    <source media="(min-width:769px)" srcset="./assets/img/common/flow_icon.svg">
                    <source media="(max-width:768px)" srcset="./assets/img/common/flow_icon_sp.svg">
                    <img src="./assets/img/common/flow_icon.svg" alt="">
                  </picture>
                </div>
              </div>
              <div class="column_right">
                <div class="p_flow_item_info">
                  <div class="info_wrap">
                    <div class="item_title">
                      <h3>取引完了</h3>
                    </div>
                    <div class="item_content">
                      <p class="m_text">買主の検収完了報告をもってすべての取引は完了です。検収完了報告後、ラッコM&Aが買主からお預かりしていた売買代金を、3営業日以内に売主指定の銀行口座に送金します。</p>
                    </div>
                    <div class="btn_wrap">
                      <a href="#" class="btn btn_sm bgleft blue_btn">
                        <span>サイト自動査定はこちら</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
                          <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
                            <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"/>
                            <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"/>
                            <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"/>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="btn_wrap mt_80 mt_sp_45">
      <a href="#" class="btn bgleft mx_auto">
        <span>サイトを買いたい<br><small>（案件一覧を見る）</small></span>
        <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
          <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
            <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"/>
            <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"/>
            <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"/>
          </g>
        </svg>
      </a>
    </div>
  </div>
</section>

</main>



    @endsection