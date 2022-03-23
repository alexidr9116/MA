@extends('layouts.application')
@section('title')
Login
@endsection
@section('body')

<main id="project">

<div class="bg_wheat">
  <section class="p_common_section">
    <div class="container">
      <div class="section_title">
        <h2 class="xm_title">案件一覧</h2>
      </div>
      <div class="secton_content">
        <div class="c_project_list_container">
          <div class="tabs">
            <ul class="tabs_list">
              <li class="col_3"><a class="active" href="#tab1">新着</a></li>
              <li class="col_3"><a href="#tab2">おすすめ</a></li>
              <li class="col_3"><a href="#tab3">値下げ</a></li>
              <li class="col_3"><a href="#tab4">新着順</a></li>
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
            <div id="tab4" class="tab">
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
          <div class="p_wp_pagination pt_50 pt_sp_30">
            <div class="wp-pagenavi" role="navigation">
              <span class="pages"></span>
              <a class="first" href="https://www.yui-maru.net/blog/">« 先頭</a>
              <a class="previouspostslink" rel="prev" href="#">«</a>
              <span aria-current="page" class="current">1</span>
              <a class="page smaller" title="Page 3" href="https://www.yui-maru.net/blog/page/3/">2</a>
              <a class="page smaller" title="Page 4" href="https://www.yui-maru.net/blog/page/4/">3</a>
              <a class="page larger" title="Page 6" href="https://www.yui-maru.net/blog/page/6/">4</a>
              <a class="page larger" title="Page 7" href="https://www.yui-maru.net/blog/page/7/">5</a>
              <a class="nextpostslink" rel="next" href="https://www.yui-maru.net/blog/page/6/">»</a>
              <a class="last" href="https://www.yui-maru.net/blog/page/27/">最後 »</a>
            </div>
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
  
</div>

</main>

    @endsection