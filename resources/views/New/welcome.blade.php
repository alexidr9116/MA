@extends('layouts.application')
@section('title')
Welcome
@endsection
@section('body')
<main id = "top">
<section class="top_fv_section">
    <picture class="top_fv_img">
        <source media="(min-width:769px)" srcset="{{asset('/assets/img/top/mv_bg.jpg')}}">
        <source media="(max-width:768px)" srcset="{{asset('assets/img/top/mv_bg.jpg')}}">
        <img src="{{asset('/assets/img/top/mv_bg.jpg')}}" alt="">
    </picture>
    <div class="top_fv_info">
        <div class="container">
        <div class="top_fv_info_inner">
            <div class="info_wrap">
            <div class="fv_main_area">
                <div class="pc">
                <div class="grid_area">
                    <div class="column_left">
                    <div class="fv_title">
                        <p>サイト売買プラットフォー厶「ラッコM&A」</p>
                        <h2>売却手数料<span>無料</span></h2>
                    </div>
                    </div>
                    <div class="column_right">
                    <figure class="fv_rank_img">
                        <img src="{{asset('/assets/img/top/rank_img.png')}}" alt="">
                    </figure>
                    </div>
                </div>
                </div>
                <div class="sp">
                <div class="fv_title">
                    <h2>売却手数料<span>無料</span></h2>
                    <figure class="fv_rank_img">
                    <img src="{{asset('/assets/img/top/rank_img.png')}}" alt="">
                    </figure>
                </div>
                </div>
            </div>
            <div class="fv_feature_list_container">
                <div class="row justify_center">
                <div class="col_md_4 col_12">
                    <div class="fv_feature_item">
                    <div class="fv_feature_item_inner">
                        <div class="item_title">
                        <h3>サクサク取引</h3>
                        </div>
                        <div class="item_content">
                        <div class="m_text">自動査定・GA連携 契約書自動生成<small>(毛子契約/DocuSign)</small>サイト移行代行</div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col_md_4 col_12">
                    <div class="fv_feature_item">
                    <div class="fv_feature_item_inner">
                        <div class="item_title">
                        <h3>安心取引</h3>
                        </div>
                        <div class="item_content">
                        <div class="m_text">エスクローサービス 無料弁護士相談 本人產認対応</div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col_md_4 col_12">
                    <div class="fv_feature_item">
                    <div class="fv_feature_item_inner">
                        <div class="item_title">
                        <h3>独自集客</h3>
                        </div>
                        <div class="item_content">
                        <div class="m_text">2021年サイト売買成約数N0.1<small>(2021/7歸点)</small>ラッコキーワード等の ラッコWEBサービスと連携</div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <ul class="site_action_btn_nav">
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
        </div>
    </div>
    </section>

    <div class="bg_wheat">
    <section class="section top_about_section pb_30 pb_sp_10">
        <div class="container">
        <div class="section_title">
            <h2 class="xm_title">ラッコM&Aについて</h2>
        </div>
        <div class="secton_content">
            <div class="c_about_info_container">
            <div class="c_about_item">
                <div class="flex_area">
                <div class="column_left">
                    <figure class="c_about_item_img">
                    <img src="{{asset('/assets/img/top/about.jpg')}}" alt="">
                    </figure>
                </div>
                <div class="column_right">
                    <div class="c_about_item_info">
                    <p class="m_text">ラッコM&Aは、Webサイトの売買を簡単に取引できるプラットフォームを提供することで、Webサイトの売買を身近なものにし、Webサイトの資産価値向上を目指して運営しています。<br><br>ラッコM&Aは売却手数料完全無料。売主の負担を無くすことで売却のハードルを大きく下げます。無料弁護士相談や契約書（弁護士監修）の自動生成機能をご利用いただくことで、安心してお取引いただけます。さらにストレスなくお取引いただけるよう、取引のプロセスを可能な限りシステム化することで、サイト売買にかかる時間を最大限短縮しています。</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    
    <section class="section top_project_list_section pb_40 pb_sp_20">
        <div class="container">
        <div class="section_title">
            <h2 class="xm_title">案件情報</h2>
        </div>
        <div class="secton_content">
            <div class="c_project_list_container">
            <div class="tabs">
                <ul class="tabs_list">
                <li class="col_4"><a class="active" href="#tab1">新着</a></li>
                <li class="col_4"><a href="#tab2">おすすめ</a></li>
                <li class="col_4"><a href="#tab3">値下げ</a></li>
                </ul>
                <div id="tab1" class="tab active">
                <div class="tab_content">
                    <div class="c_project_list">
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
                </div>
                <div id="tab2" class="tab">
                <div class="tab_content">
                    <div class="c_project_list">
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
                </div>
                <div id="tab3" class="tab">
                <div class="tab_content">
                    <div class="c_project_list">
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="c_project_item">
                        <div class="grid_area">
                        <div class="column_left">
                            <figure class="c_project_item_img">
                            <canvas width="235" height="235" radar-chart-labels="1" radar-chart-sale="1" radar-chart-profit="1" radar-chart-profit-rate="7" radar-chart-pv="4" radar-chart-uu="5" radar-chart-page="6" radar-chart-followers="4" radar-chart-members="4" class="project_list_canvases" style="display: block;"></canvas>
                            </figure>
                        </div>
                        <div class="column_right">
                            <div class="c_project_item_info">
                            <div class="info_wrap">
                                <div class="item_title">
                                <h3 class="mx_text fw_500">300記事以上！芸能系中心のトレンド雑記ブログ直近６カ月平均１８万円以上の実績！</h3>
                                </div>
                                <div class="item_content">
                                <div class="info_spec_info_container">
                                    <div class="info_spec_item">
                                    <div class="flex_area">
                                        <div class="column">
                                        <p class="m_text">閲覧数 : 20</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text">交渉申込数 : -</p>
                                        </div>
                                        <div class="column">
                                        <p class="m_text"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="pc">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="sp">
                                    <table class="spec_info_table m_text">
                                    <tr>
                                        <th>希望売却価格</th>
                                        <td>3,000,000円</td>
                                    </tr>
                                    <tr>
                                        <th>売上</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>営業利益</th>
                                        <td>136,403円</td>
                                    </tr>
                                    <tr>
                                        <th>PV</th>
                                        <td>232,442</td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <ul class="tag_list">
                                    <li class="possible">サイト移行代行可能</li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
                </div>

            </div>
            <div class="btn_wrap mt_40 mt_sp_30">
                <a href="" class="btn bgleft mx_auto">
                <span>売出案件一覧を見る</span>
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
    </section>

    <section class="section top_reason_section">
        <div class="container">
        <div class="section_title">
            <h2 class="xm_title">テキストテキを選ぶ理由</h2>
        </div>
        <div class="secton_content">
            <div class="c_reason_list_container">
            <div class="c_reason_list">
                <div class="c_reason_item">
                <figure class="c_reason_item_img">
                    <img src="{{asset('/assets/img/top/reason_01.jpg')}}" alt="">
                </figure>
                <div class="c_reason_item_info">
                    <div class="info_wrap">
                    <div class="item_title">
                        <h3>高い集客力</h3>
                    </div>
                    <div class="item_content">
                        <p class="m_text"><span class="color_blue">ラッコWEBサービスで</span>はサイトM&A以外にも、Webサイト運営にまつわる様々なサービスを運営しています。長きにわたってご支持いただいているサービスもあり、76,036人以上のラッコユーザーを抱えています。特にアフィリエイターの皆様のご利用が多いため、アフィリエイトサイトの売買に最適です。<br>また、案件情報は<span class="color_blue">ラッコキーワード</span>などでレコメンド表示され、幅広い層にアプローチできます。</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="c_reason_item">
                <figure class="c_reason_item_img">
                    <img src="{{asset('/assets/img/top/reason_01.jpg')}}" alt="">
                </figure>
                <div class="c_reason_item_info">
                    <div class="info_wrap">
                    <div class="item_title">
                        <h3>売却手数料無料</h3>
                    </div>
                    <div class="item_content">
                        <p class="m_text">売主は完全無料でラッコM&Aをご利用いただけます。売主は手数料に躊躇することなくサイト売却（アカウント・アプリ売却）を行うことができ、買主は売却手数料無料により集まった、<span class="color_blue">豊富な売り案件から</span>購入したいものを探すことができます。<br>独占掲載等の売主に不利な条件も無く、売却手数料無料でご利用いただけます！</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="c_reason_item">
                <figure class="c_reason_item_img">
                    <img src="{{asset('/assets/img/top/reason_01.jpg')}}" alt="">
                </figure>
                <div class="c_reason_item_info">
                    <div class="info_wrap">
                    <div class="item_title">
                        <h3>スムーズな取引で取引時間を最小化！</h3>
                    </div>
                    <div class="item_content">
                        <p class="m_text"><span class="color_blue">瞬時に結果が出るサイト査定</span>、GoogleAnalytics連携を使ったアクセスデータの自動取得、取引ステータスが明確で今やるべきことがすぐわかるマイページ、契約書の自動生成、電子契約自動連携、エスクロー自動着金確認、WEBサイトのリアルタイム譲渡など、可能な限りシステム化しています。そのため、運営側の都合で取引が滞ることがなく、スムーズに取引を進行できます。</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="c_reason_item">
                <figure class="c_reason_item_img">
                    <img src="{{asset('/assets/img/top/reason_01.jpg')}}" alt="">
                </figure>
                <div class="c_reason_item_info">
                    <div class="info_wrap">
                    <div class="item_title">
                        <h3>安心のリーガルサポート</h3>
                    </div>
                    <div class="item_content">
                        <p class="m_text">ラッコM&Aと契約している弁護士にチャットで相談することができます。また、弁護士監修の事業譲渡契約書、秘密保持契約書を自動生成することができます。（もちろん雛型を自由に編集することもできます）電子契約にも自動対応しており、スムーズに契約を締結できる仕組みになっています。ここまでのリーガルサポートを無料で受けられるのはラッコM&Aだけ！</p>
                    </div>
                    </div>
                </div>
                </div>

            </div>

            </div>
        </div>
        </div>
    </section>
    </div>

    <section class="section top_feature_section pt_70 pb_50 pt_sp_50 pb_sp_20">
    <div class="container">
        <div class="section_title">
        <h2 class="xm_title">テキストテキの特徴</h2>
        </div>
        <div class="secton_content">
        <div class="c_feature_info_container">
            <div class="c_feature_info_list">
            <div class="c_feature_text_item">
                <div class="flex_area">
                <div class="col_5">
                    <div class="x_text">売主料金</div>
                </div>
                <div class="col_7">
                    <div class="x_text color_orange text_center fw_500">無料</div>
                </div>
                </div>
            </div>
            <div class="c_feature_text_item">
                <div class="flex_area">
                <div class="col_5">
                    <div class="x_text">買主料金</div>
                </div>
                <div class="col_7">
                    <div class="x_text fw_500">成約額の5％（最低55,000円/税込）</div>
                </div>
                </div>
            </div>
            <div class="c_feature_text_item">
                <div class="flex_area">
                <div class="col_5">
                    <div class="x_text">リーガルサポート</div>
                </div>
                <div class="col_7">
                    <div class="x_text fw_500">契約書自動生成（ひな型のみの提供も可）<br>弁護士無料チャット相談（契約書作成時）<br>電子契約サービス自動連携（DocuSign）</div>
                </div>
                </div>
            </div>
            <div class="c_feature_text_item">
                <div class="flex_area">
                <div class="col_5">
                    <div class="x_text">エスクローサービス</div>
                </div>
                <div class="col_7">
                    <div class="x_text color_blue fw_500 text_center">自動着金確認</div>
                </div>
                </div>
            </div>
            <div class="c_feature_text_item">
                <div class="flex_area">
                <div class="col_5">
                    <div class="x_text">集客力</div>
                </div>
                <div class="col_7">
                    <div class="x_text fw_500">ラッコID会員基盤<br><span class="color_blue">国内最大のキーワードツール</span>でのレコメンド表示<br>多機能WEBツール<span class="color_blue">「ラッコツールズ」</span>での案件情報表示</div>
                </div>
                </div>
            </div>
            <div class="c_feature_text_item">
                <div class="flex_area">
                <div class="col_5">
                    <div class="x_text">WEBサイト<br class="sp">リアルタイム譲渡</div>
                </div>
                <div class="col_7">
                    <div class="x_text fw_500">ラッコインフラ（ラッコドメイン＋ラッコサーバー構成のWEBサイト管理）ならシステム連携でサイト即時譲渡が可能</div>
                </div>
                </div>
            </div>
            <div class="c_feature_text_item">
                <div class="flex_area">
                <div class="col_5">
                    <div class="x_text">サイト移行代行</div>
                </div>
                <div class="col_7">
                    <div class="x_text fw_500 color_blue text_center">16,500円（税込）～</div>
                </div>
                </div>
            </div>

            </div>
        </div>
        <ul class="site_action_btn_nav mt_50 mt_sp_40 mx_auto">
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

    <section class="section top_usage_fee_section">
    <div class="container">
        <div class="section_title mb_70 mb_sp_45">
        <h2 class="xm_title">ラッコM&Aの利用料金</h2>
        </div>
        <div class="secton_content">
        <div class="content_in">
            <div class="usage_fee_info_container">
            <div class="usage_fee_info_list">
                <div class="usage_fee_item">
                <figure class="usage_fee_item_img">
                    <img src="{{asset('/assets/img/top/usage_fee_img.png')}}" alt="">
                </figure>
                <div class="usage_fee_item_title">
                    <h3 class="x_text text_center fw_500">売主</h3>
                </div>
                <div class="usage_fee_item_info">
                    <div class="info_wrap">
                    <p class="xm_title pb_3 pb_sp_5 text_center color_red">無料</p>
                    </div>
                </div>
                </div>
                <div class="usage_fee_item">
                <figure class="usage_fee_item_img">
                    <img src="{{asset('/assets/img/top/usage_fee_img.png')}}" alt="">
                </figure>
                <div class="usage_fee_item_title">
                    <h3 class="x_text text_center fw_500">買主</h3>
                </div>
                <div class="usage_fee_item_info">
                    <div class="info_wrap">
                    <p class="x_text fw_500 text_center">成約金額の<span class="color_red fs_31 line_10">5%</span><br>最低利用料金55,000円（税込）</p>
                    </div>
                </div>
                </div>

            </div>
            <div class="m_text mt_45 mt_sp_30">【計算例1】成約金額130万円（税込）　成約金額1,300,000円×利用料率5%＝利用料金65,000円（税込）<br>【計算例2】成約金額30万円（税込）　最低利用料金55,000円（税込）<br>※サイト移行代行（オプション）：<span class="color_blue">16,500円（税込）～</span></div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <section class="section top_free_sevice_section bg_wheat pt_70 pt_sp_50 pb_80 pb_sp_60">
    <div class="s_container">
        <div class="section_title mb_55 mb_sp_30">
        <h2 class="xm_title">無料弁護士サポート<br class="sp">サービス</h2>
        </div>
        <div class="secton_content">
        <div class="m_text">専属弁護士によるリーガルサポートを無料でご利用いただけます。<br>事業譲渡契約書（売買契約書）締結時に、担当の弁護士へチャットで連絡することができるようになります。契約に関しての不明点や心配事があれば、ぜひご活用ください。<br>ご相談例：「こんな条件を追加したい、なんて書けばいいですか？」「このリスクはこの条項でカバーできていますか？」</div>
        </div>
    </div>
    </section>

    <div class="bg_light_brown">
    <section class="section top_escrow_sevice_section pt_70 pt_sp_50 pb_20">
        <div class="s_container">
        <div class="section_title mb_55 mb_sp_30">
            <h2 class="xm_title">無料弁護士サポート<br class="sp">サービス</h2>
        </div>
        <div class="secton_description mb_35">
            <div class="m_text">売買代金はサイト移行・アカウント・アプリの引渡し開始前に、ラッコM&Aに送金していただきます。引渡し、検収完了後にラッコM&Aから売主に売買代金を送金します。譲渡が売主の責任によって完了しない、検収期間中に契約に反する事象が発覚した場合は、売買は停止され売買代金は買主に100％返金されます。ラッコM&Aのエスクローサービスをご利用いただくことにより、安心してお取引を行っていただけます。<br>またラッコM&Aの着金確認は自動化されており、スピード感をもってお取引を進めていただけます！</div>
        </div>
        <div class="section_content">
            <picture class="escrow_service_step_img">
            <source media="(min-width:769px)" srcset="{{asset('/assets/img/top/service_step.svg')}}">
            <source media="(max-width:768px)" srcset="{{asset('/assets/img/top/service_step_sp.svg')}}">
            <img src="{{asset('/assets/img/top/service_step.svg')}}" alt="">
            </picture>
        </div>
        </div>
    </section>
    <section class="section top_service_bank_section">
        <div class="s_container">
        <div class="section_title mb_55 mb_sp_40">
            <h2 class="xm_title">サイト移行代行</h2>
        </div>
        <div class="secton_content">
            <div class="m_text text_center mb_40">サイト移行代行可能 案件なら売買に伴うサイト移行をラッコM&Aが代行することもできます。<br>ご依頼いただいた方に代わり、相手方とやり取りしながら移行実務を進めます。<br>「サイト売買してみたいけどサイト移行が不安」という方も安心してお取引いただけます。</div>
            <div class="service_bank_info_container">
            <div class="service_bank_list">
                <div class="service_bank_item">
                <div class="item_title">
                    <h3 class="m_text text_center">移行先がラッコインフラの場合</h3>
                </div>
                <div class="item_content bg_light_blue">
                    <p class="xm_title fs_30 fs_sp_24 color_blue text_center">16,500円（税込）</p>
                </div>
                </div>
                <div class="service_bank_item">
                <div class="item_title">
                    <h3 class="m_text text_center">移行先がラッコインフラ以外の場合</h3>
                </div>
                <div class="item_content bg_light_orange">
                    <p class="xm_title fs_30 fs_sp_24 color_orange text_center">33,000円（税込）</p>
                </div>
                </div>
            </div>
            </div>
            <div class="btn_wrap mt_40 mt_sp_30">
            <a href="" class="btn blue_btn bgleft mx_auto">
                <span>もっと見る</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="27.895" height="28.032" viewBox="0 0 27.895 28.032">
                <g id="Group_29" data-name="Group 29" transform="translate(-418.431 -663.168)">
                    <path id="Path_223" data-name="Path 223" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(62 -22)" fill="#fff" opacity="0.3"></path>
                    <path id="Path_224" data-name="Path 224" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(69 -22)" fill="#fff" opacity="0.7"></path>
                    <path id="Path_225" data-name="Path 225" d="M356.431,685.168h2.914l11.016,14.016L359.346,713.2h-2.914l11.016-14.016Z" transform="translate(75.965 -22)" fill="#fff"></path>
                </g>
                </svg>
            </a>
            </div>

        </div>
        </div>
    </section>
    </div>

    <section class="section top_operator_info_section">
    <div class="s_container">
        <div class="section_title white mb_0">
        <h2 class="xm_title">運営者情報</h2>
        </div>
    </div>
    </section>

    <section class="section top_operator_detail_section pt_60 pt_sp_30">
    <div class="s_container">
        <div class="secton_description mb_80 mb_sp_45">
        <div class="m_text text_center sp_text_left">ラッコM&Aを運営するラッコ株式会社は、WEBで情報発信するすべての人に、便利で役立つサービスを提供しています。<br>ドメイン取得からWEBコンテンツ制作・システム開発に便利なツールを提供。<br>成長したWEBサイトやWEBサービスを手軽に売買できる場所として、ラッコM&Aを運営しています。</div>
        </div>
        <div class="secton_content">
        <div class="operator_detail_info_container">
            <div class="info_text_list">
            <div class="info_text_item">
                <div class="column">
                <p class="m_text color_blue fw_500">社名</p>
                </div>
                <div class="column">
                <p class="m_text">ラッコ株式会社（英語表記：Rakko, Inc.）</p>
                </div>
            </div>
            <div class="info_text_item">
                <div class="column">
                <p class="m_text color_blue fw_500">公式サイト</p>
                </div>
                <div class="column">
                <p class="m_text">https://sample.inc/</p>
                </div>
            </div>
            <div class="info_text_item">
                <div class="column">
                <p class="m_text color_blue fw_500">代表取締役</p>
                </div>
                <div class="column">
                <p class="m_text">坂谷泰翔</p>
                </div>
            </div>
            <div class="info_text_item">
                <div class="column">
                <p class="m_text color_blue fw_500">本社</p>
                </div>
                <div class="column">
                <p class="m_text">東京都渋谷区道玄坂1丁目19番12号 道玄坂今井ビル4F</p>
                </div>
            </div>
            <div class="info_text_item">
                <div class="column">
                <p class="m_text color_blue fw_500">資本金</p>
                </div>
                <div class="column">
                <p class="m_text">2,100万円</p>
                </div>
            </div>
            <div class="info_text_item">
                <div class="column">
                <p class="m_text color_blue fw_500">設立</p>
                </div>
                <div class="column">
                <p class="m_text">2015年11月</p>
                </div>
            </div>
            <div class="info_text_item">
                <div class="column">
                <p class="m_text color_blue fw_500">事業内容</p>
                </div>
                <div class="column">
                <p class="m_text">サイト売買プラットフォームの運営<br>マーケティングリサーチツールの提供<br>インターネットインフラ事業</p>
                </div>
            </div>
            <div class="info_text_item">
                <div class="column">
                <p class="m_text color_blue fw_500">資格・認可</p>
                </div>
                <div class="column">
                <p class="m_text"><span class="color_blue">JPRS指定事業者</span><br>一般第二種電気通信事業者 総務省届出番号：<span class="color_blue">A-29-15747</span></p>
                </div>
            </div>

            </div>
        </div>
        <ul class="site_action_btn_nav mt_90 mt_sp_45 mx_auto">
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