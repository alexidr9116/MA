@extends('layout.app')
@section('banner')
<header>
    <div class="page-header min-vh-100 page-banner" loading="lazy">

        <div class="d-flex px-5 w-100 flex-column" style = "max-width:900px;">
            <div class="row col-12 text-center mb-5">

                    <div class = "d-none d-sm-block col-12 col-sm-9" >
                        <p style = "font-size:25px;">サイト売買プラットフォー厶「ラッコM&amp;A」</p>
                        <h1>売却手数料<span style = "color:chocolate"> 無料</span></h1>
                    </div>
                    <div class = "col-12 col-sm-3">

                        <h1 class = "d-sm-none">売却手数料<span style = "color:chocolate"> 無料</span></h1>
                        <img src="{{asset('assets/img/rank_img.png')}}" alt="">
                    </div>
            </div>
            <div class = "row">
                <div class="col-11 col-md-4 mb-3">
                    <div class="fv_feature_item">
                        <div class="fv_feature_item_inner">
                            <div class="item_title">
                            <span>サクサク取引</span>
                            </div>
                            <div class="item_content">
                            <div class="m_text">自動査定・GA連携 契約書自動生成<small>(毛子契約/DocuSign)</small>サイト移行代行</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-11 col-md-4 mb-3">
                    <div class="fv_feature_item">
                    <div class="fv_feature_item_inner">
                        <div class="item_title">
                        <span>安心取引</span>
                        </div>
                        <div class="item_content">
                        <div class="m_text">エスクローサービス 無料弁護士相談 本人產認対応</div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class = "col-11 col-md-4 mb-3">
                <div class="fv_feature_item">
                    <div class="fv_feature_item_inner">
                        <div class="item_title">
                        <span>独自集客</span>
                        </div>
                        <div class="item_content">
                            <div class="m_text">2021年サイト売買成約数N0.1<small>(2021/7歸点)</small>ラッコキーワード等の ラッコWEBサービスと連携</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>
@endsection
@section('content')
 <div class="w-100 mt-5 p-5"  >

    <!-- items -->
    <div class = "project-list">

    </div>
</div>


@endsection

@section('page_js')

<script src = "{{asset('js/home.js')}}"></script>

<script>
    $(document).ready(function(){
        DomainLayoutHome.init();
    });
</script>

@endsection
