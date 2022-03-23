<header id="header">
    <div class="container">
    <div class="header_wrapper">
        <h1 class="logo" class="scrollto">
        <a href="/">
            <figure class="logo_img">
            <img src="{{asset('/assets/img/common/logo.svg')}}" alt="Sky">
            </figure>
        </a>
        </h1>
        <div class="nav_menu_container">
        @if(Auth::user())
        <ul class="user_action_menu">
            
            <li class="drop_down">
            <a href="#" class="action_btn notice_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                <g id="Group_167" data-name="Group 167" transform="translate(-959 40)">
                    <circle id="Ellipse_22" data-name="Ellipse 22" cx="20" cy="20" r="20" transform="translate(959 -40)" fill="#fff"/>
                    <path id="Icon_awesome-bell" data-name="Icon awesome-bell" d="M13.179,30.124a3.765,3.765,0,0,0,3.764-3.766H9.416A3.765,3.765,0,0,0,13.179,30.124Zm12.673-8.808c-1.137-1.221-3.264-3.059-3.264-9.078a9.291,9.291,0,0,0-7.528-9.129V1.883a1.882,1.882,0,1,0-3.763,0V3.109A9.291,9.291,0,0,0,3.77,12.238c0,6.019-2.127,7.856-3.264,9.078A1.838,1.838,0,0,0,0,22.593a1.884,1.884,0,0,0,1.889,1.883H24.47a1.884,1.884,0,0,0,1.889-1.883,1.837,1.837,0,0,0-.507-1.277Z" transform="translate(966 -35)" fill="#b9b9b9"/>
                </g>
                </svg>
            </a>
            <div class="drop_menu notice_drop">
                <ul>
                <li>
                    <a href="#">
                    <p class="title">気になるボタン/リスト実装のお知らせ</p>
                    <p class="date"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <p class="title">気になるボタン/リスト実装のお知らせ</p>
                    <p class="date"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <p class="title">気になるボタン/リスト実装のお知らせ</p>
                    <p class="date"><span class="notice_text">新着</span>公開日 : 2022/01/05</p>
                    </a>
                </li>
                <li class="viewmore">
                    <a href="#" class="btn bgleft">
                    <span>もっと見る</span>
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
            </li>

            <li class="drop_down">
            <a href="#" class="action_btn app_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                <g id="Group_3" data-name="Group 3" transform="translate(-1320 -10)">
                    <circle id="Ellipse_2" data-name="Ellipse 2" cx="20" cy="20" r="20" transform="translate(1320 10)" fill="#ececec"/>
                    <g id="Group_2" data-name="Group 2" transform="translate(0.023 -1.977)">
                    <circle id="Ellipse_1" data-name="Ellipse 1" cx="2" cy="2" r="2" transform="translate(1330.977 22.977)" fill="#1e1e1e"/>
                    <circle id="Ellipse_7" data-name="Ellipse 7" cx="2" cy="2" r="2" transform="translate(1330.977 29.977)" fill="#1e1e1e"/>
                    <circle id="Ellipse_10" data-name="Ellipse 10" cx="2" cy="2" r="2" transform="translate(1330.977 36.977)" fill="#1e1e1e"/>
                    <circle id="Ellipse_3" data-name="Ellipse 3" cx="2" cy="2" r="2" transform="translate(1337.977 22.977)" fill="#1e1e1e"/>
                    <circle id="Ellipse_6" data-name="Ellipse 6" cx="2" cy="2" r="2" transform="translate(1337.977 29.977)" fill="#1e1e1e"/>
                    <circle id="Ellipse_9" data-name="Ellipse 9" cx="2" cy="2" r="2" transform="translate(1337.977 36.977)" fill="#1e1e1e"/>
                    <circle id="Ellipse_4" data-name="Ellipse 4" cx="2" cy="2" r="2" transform="translate(1344.977 22.977)" fill="#1e1e1e"/>
                    <circle id="Ellipse_5" data-name="Ellipse 5" cx="2" cy="2" r="2" transform="translate(1344.977 29.977)" fill="#1e1e1e"/>
                    <circle id="Ellipse_8" data-name="Ellipse 8" cx="2" cy="2" r="2" transform="translate(1344.977 36.977)" fill="#1e1e1e"/>
                    </g>
                </g>
                </svg>
            </a>
            <div class="drop_menu app_drop">
                <ul>
                <li>
                    <a href="{{route('profile.register')}}">
                    <p class="title">プロファイルの設定</p>
                    <p class="text">ユーザーは、サイトのM＆Aに必要なプロファイル情報を入力できます。</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <p class="title">パスワードを変更する</p>
                    <p class="text">セキュリティのためにパスワードを変更することをお勧めします。</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <p class="title">私のプロジェクトリスト</p>
                    <p class="text">登録済みのウェブサイトと購入したウェブサイトを自分で表示する</p>
                    </a>
                </li>

                </ul>
            </div>
            </li>
        </ul>
        @endif
        <ul class="user_sign_menu">
        @if(Auth::user())
            <li>
            <a href="{{route('site.list')}}" class="login_btn">
              
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <path id="Path_1" data-name="Path 1" d="M14.5,2A12.5,12.5,0,1,0,27,14.5,12.514,12.514,0,0,0,14.5,2Zm7.6,19.713a8.48,8.48,0,0,0-15.2.008A10.367,10.367,0,0,1,4,14.5a10.5,10.5,0,0,1,21,0,10.368,10.368,0,0,1-2.9,7.213ZM14.5,7A4.5,4.5,0,1,0,19,11.5,4.5,4.5,0,0,0,14.5,7Z" transform="translate(-2 -2)" fill="#fff"/>
                </svg>
                <span>私のページ</span>
            </a>
            </li>
            @endif
            @if(Auth::guest())
            <li>
            <a href="{{route('login')}}" class="login_btn">
              
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <path id="Path_1" data-name="Path 1" d="M14.5,2A12.5,12.5,0,1,0,27,14.5,12.514,12.514,0,0,0,14.5,2Zm7.6,19.713a8.48,8.48,0,0,0-15.2.008A10.367,10.367,0,0,1,4,14.5a10.5,10.5,0,0,1,21,0,10.368,10.368,0,0,1-2.9,7.213ZM14.5,7A4.5,4.5,0,1,0,19,11.5,4.5,4.5,0,0,0,14.5,7Z" transform="translate(-2 -2)" fill="#fff"/>
                </svg>
                <span>ログイン</span>
            </a>
            </li>
            <li>
            <a href="{{route('register')}}" class="register_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="27.265" height="20.778" viewBox="0 0 27.265 20.778">
                <path id="Icon_awesome-sign-out-alt" data-name="Icon awesome-sign-out-alt" d="M26.887,15.806,17.8,24.9a1.3,1.3,0,0,1-2.218-.92V18.782H8.223a1.3,1.3,0,0,1-1.3-1.3V12.29a1.3,1.3,0,0,1,1.3-1.3h7.358V5.8a1.3,1.3,0,0,1,2.218-.92l9.089,9.089A1.309,1.309,0,0,1,26.887,15.806Zm-16.5,8.818V22.461a.651.651,0,0,0-.649-.649H5.194A1.729,1.729,0,0,1,3.462,20.08V9.693A1.729,1.729,0,0,1,5.194,7.962H9.738a.651.651,0,0,0,.649-.649V5.149A.651.651,0,0,0,9.738,4.5H5.194A5.2,5.2,0,0,0,0,9.693V20.08a5.2,5.2,0,0,0,5.194,5.194H9.738A.651.651,0,0,0,10.387,24.625Z" transform="translate(0 -4.499)" fill="#fff"/>
                </svg>
                <span>新規登録</span>
            </a>
            </li>
            @endif
            @if(Auth::user())
            <form method="POST" action="{{ route('logout') }}">
                @csrf
            <li>
            
            <button type = "submit" style ="border:0; padding:0px">
              <a class="logout_btn" href = "#">
                <svg xmlns="http://www.w3.org/2000/svg" width="27.265" height="20.778" viewBox="0 0 27.265 20.778">
                <path id="Icon_awesome-sign-out-alt" data-name="Icon awesome-sign-out-alt" d="M26.887,15.806,17.8,24.9a1.3,1.3,0,0,1-2.218-.92V18.782H8.223a1.3,1.3,0,0,1-1.3-1.3V12.29a1.3,1.3,0,0,1,1.3-1.3h7.358V5.8a1.3,1.3,0,0,1,2.218-.92l9.089,9.089A1.309,1.309,0,0,1,26.887,15.806Zm-16.5,8.818V22.461a.651.651,0,0,0-.649-.649H5.194A1.729,1.729,0,0,1,3.462,20.08V9.693A1.729,1.729,0,0,1,5.194,7.962H9.738a.651.651,0,0,0,.649-.649V5.149A.651.651,0,0,0,9.738,4.5H5.194A5.2,5.2,0,0,0,0,9.693V20.08a5.2,5.2,0,0,0,5.194,5.194H9.738A.651.651,0,0,0,10.387,24.625Z" transform="translate(0 -4.499)" fill="#fff"/>
                </svg>
                <span>ログアウト</span>
              </a>
            </button>
              
            </li>
           
          </form>
            @endif
        </ul>
        
        </div>
    </div>
    </div>
</header>
<div id="mobile_nav">
      <div class="nav_header">
        <div class="container">
          <div class="logo" class="scrollto">
            <a href="#">
              <figure class="logo_img">
                <img src="{{asset('/assets/img/common/logo.svg')}}" alt="サラヤヱスビーエス株式会社様">
              </figure>
            </a>
          </div>
        </div>
      </div>
      <div class="nav_body">
        <div class="container">
          <nav class="mobile_nav_container">
            <ul class="mobile_nav_menu">
              <li><a href="#" class="active">トップページ</a></li>
              <li><a href="{{route('site.list')}}">案件一覧ページ</a></li>
              <li><a href="{{route('purchase.flow')}}">購入の流れ</a></li>
              <li><a href="#">売却案件登録</a></li>
              <li><a href="{{route('sale.flow')}}">売却の流れ</a></li>
              <li><a href="#">ご利用料金</a></li>
              <li><a href="#">エスクローサービス</a></li>
              <li><a href="#">サイト移行代行</a></li>
              <li><a href="#">運営者情報</a></li>
              <li><a href="#">サポート</a></li>
            </ul>
            <ul class="social_nav_menu">
              <li>
                <a href="#">
                  <img src="{{asset('/assets/img/common/help_icon_black.svg')}}" alt="">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="{{asset('/assets/img/common/twiter_icon_black.svg')}}" alt="">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="{{asset('/assets/img/common/mail_icon_black.svg')}}" alt="">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="./assets/img/common/chatwork_icon_black.svg" alt="">
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>