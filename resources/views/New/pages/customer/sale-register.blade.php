@extends('layouts.application')
@section('title')
Login
@endsection
@section('body')

<main id="registeration">

<section class="p_common_section">
  <div class="s_container">
    <div class="section_title">
      <h2 class="xm_title">売却案件登録</h2>
    </div>
    <div class="secton_content">
      <div class="p_price_text_box mb_40 mb_sp_30">
        <p class="mx_text"><span>売却手数料:</span><span class="price">0円</span></p>
      </div>
      <div class="btn_wrap mb_60 mb_sp_35">
        <a href="#" class="btn bgleft mx_auto">
          <span>売却案件を登録</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
            <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
              <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"/>
              <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"/>
              <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"/>
            </g>
          </svg>
        </a>
      </div>
      <div class="m_text mb_40 mb_sp_30">1営業日以内（通常1～3時間以内）にラッコM&Aが登録情報の確認を行います。<br>内容に問題が無ければ掲載が開始されます。<br><br>WEBサイトリアルタイム譲渡対応で成約率向上！ <br>※約75％の買主はサイト移行に障壁を感じており、リアルタイム譲渡対応であることが購入決定要因になると回答されています。<br><br>サイト移行作業に不安がある方はサイト移行代行サービスの利用をご検討ください。<br>「アカウントの登録」「代理人による登録」「秘密保持契約の利用」は本人確認必須です。（案件登録と合わせて本人確認手続きを行うこともできます）</div>
      <div class="p_fee_info_container">
        <div class="info_title">
          <h3 class="mx_text color_orange fw_500">売却手数料: </h3>
        </div>
        <div class="info_content">
          <ul class="text_list m_text mb_40 mb_sp_30">
            <li>アダルトコンテンツを含むもの</li>
            <li>広告のみを集客手段としているもの</li>
            <li>法令または公序良俗に違反する内容を含むもの（著作権侵害等を含む）</li>
            <li>第三者を誹謗中傷する、名誉毀損あるいは侮辱と評価されうるもの</li>
            <li>第三者の財産、プライバシー、肖像権等を侵害すると評価されうるもの</li>
            <li>宗教・政治活動・政治的主張を含むもの</li>
            <li>反社会的内容を含むもの</li>
            <li>情報の販売を目的とするもの</li>
            <li>案件情報に虚偽や明らかな誤りが認められるもの</li>
            <li>相場から著しく乖離している場合</li>
            <li>事業の継続運営に必要な資産が譲渡されない場合</li>
            <li>そのほか当社が不適切と判断したもの</li>
          </ul>
          <div class="m_text">※利用規約に基づき、本サービスにおける案件の掲載は売主が実在していること、権利能力および行為能力を有していること、当該取引の権限を有していること、売買対象サイトの情報の正確性、最新性及び適法性につき、如何なる保証も行うものではありません。</div>
        </div>
      </div>
      <ul class="site_action_btn_nav mt_80 mt_sp_45 mx_auto">
        <li>
          <a href="" class="btn bgleft action_btn free">
            <span>手数料無料でサイトを売りたい<br><small>（売却サイト登録）</small></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
              <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
                <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"/>
                <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"/>
                <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"/>
              </g>
            </svg>
          </a>
        </li>
        <li>
          <a href="" class="btn bgleft action_btn paid">
            <span>サイトを買いたい<br><small>（案件一覧を見る）</small></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
              <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
                <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"/>
                <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"/>
                <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"/>
              </g>
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>

</main>
@endsection