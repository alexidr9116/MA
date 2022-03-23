@extends('layouts.application')
@section('title')
Login
@endsection
@section('body')

<main id="flow">

<section class="p_common_section">
  <div class="section_title">
    <h2 class="xm_title">サイト購入の流れ</h2>
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
                      <h3>案件検索</h3>
                    </div>
                    <div class="item_content">
                      <p class="m_text">案件一覧から買いたい案件を探しましょう！<br>条件で絞り込みつつ、目的に沿った案件を探していただけます。人気の案件はすぐ成約してしまうため、新着/値下げ... ... ...</p>
                    </div>
                    <div class="btn_wrap">
                      <a href="#" class="btn btn_sm bgleft blue_btn max_width_362">
                        <span>案件一覧・新着/値下げ案件情報の受信はこちら</span>
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
                      <h3>交渉申し込み</h3>
                    </div>
                    <div class="item_content">
                      <p class="m_text">買いたい案件の詳細ページから交渉申込みをします。交渉を申込むと、買主の名前・会社情報・申込時のメッセージ等が売主に開示され、売主から交渉申込みが承認されると、サイトURL等の詳細情報が開示されます。</p>
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
                      <p class="m_text">売主が交渉を承認した後、チャット機能を活用して売主と条件交渉を行います。お互いに誠実で速やかな対応を心がけましょう。特に数値に対するエビデンスは正確に求めて、納得のいく情報収集を行ってください。交渉がまとまったら、売主への購入提案をします。売主は受け取った提案の中から売却先を決定します。</p>
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
                      <p class="m_text">購入が決定したら契約書に盛り込む内容を確定させます。<br>売主がフォームに入力し、買主に確認依頼を送信します。内容を変更したい場合は、売主にチャットで要望を伝えましょう。内容を承認すると、弁護士監修の事業譲渡契約書（売買契約書）が自動生成されます。</p>
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
                      <p class="m_text">売買代金のやり取りはラッコM&Aが提供するエスクローサービスをご利用いただきます。<br>契約締結後、買主からラッコM&Aに送金⇒サイト移行・検収開始⇒検収完了報告⇒ラッコM&Aから売主に売買代金を送金という流れです。</p>
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
                      <h3>サイト移行</h3>
                    </div>
                    <div class="item_content">
                      <p class="m_text">売主からサイトデータ（コンテンツ）とドメインを引継ぎ、サイトの引っ越しを行います。1GBまでの容量でしたらラッコM&Aのチャット上でデータの受け渡しが可能です。具体的な作業内容にお困りの場合は、ラッコM&Aスタッフが都度サポートいたします。</p>
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
                      <h3>検収</h3>
                    </div>
                    <div class="item_content">
                      <p class="m_text">サイト移行が完了した後は、検収を行います。譲渡物の過不足や、事前情報と相違がないかなどを確認してください。<br>問題なければマイページから検収完了報告処理を行ってください。</p>
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
                      <p class="m_text">検収完了報告をもってすべての取引は完了です。<br>検収完了報告後、ラッコM&Aがお預かりしていた売買代金を、3営業日以内に売主指定の銀行口座に送金します。</p>
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