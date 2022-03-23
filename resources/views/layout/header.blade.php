

    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand" href="/" rel="tooltip" title="" data-placement="bottom">
                <img src='{{asset("/custom/images/logo.svg")}}' width='120px' height='26px'>
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 " id="navigation">
                <ul class="navbar-nav navbar-nav-hover w-100 fs-4">
                    <li class="nav-item dropdown dropdown-hover mx-2 ms-lg-5">
                        <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages5" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('Sale')}}
                        </a>
                        <div class="dropdown-menu ms-n3 dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages5">
                            <div class="d-none d-lg-block">
                                <a href="../sections/events.html" class="dropdown-item border-radius-md">
                                    <span>Popular</span>
                                </a>
                                <a href="../sections/events.html" class="dropdown-item border-radius-md">
                                    <span>Latest</span>
                                </a>
                                <a href="../sections/events.html" class="dropdown-item border-radius-md">
                                    <span>Featured</span>
                                </a>
                            </div>
                            <div class="d-lg-none">

                                <a href="../sections/events.html" class="dropdown-item border-radius-md">
                                    <span>Popular</span>
                                </a>
                                <a href="../sections/events.html" class="dropdown-item border-radius-md">
                                    <span>Latest</span>
                                </a>
                                <a href="../sections/events.html" class="dropdown-item border-radius-md">
                                    <span>Featured</span>
                                </a>

                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2 ">
                        <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages5" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('Buy')}}
                        </a>
                        <div class="dropdown-menu ms-n3 dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages5">
                            <div class="d-none d-lg-block">
                                <a href="../sections/events.html" class="dropdown-item border-radius-md">
                                    <span>Popular</span>
                                </a>
                                <a href="../sections/events.html" class="dropdown-item border-radius-md">
                                    <span>Latest</span>
                                </a>
                                <a href="../sections/events.html" class="dropdown-item border-radius-md">
                                    <span>Featured</span>
                                </a>
                            </div>
                            <div class="d-lg-none">

                                <a href="../sections/events.html" class="dropdown-item border-radius-md">
                                    <span>Popular</span>
                                </a>
                                <a href="../sections/events.html" class="dropdown-item border-radius-md">
                                    <span>Latest</span>
                                </a>
                                <a href="../sections/events.html" class="dropdown-item border-radius-md">
                                    <span>Featured</span>
                                </a>

                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex  cursor-pointer align-items-center" id="dropdownMenuPages5" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                        </a>
                        <div class="dropdown-menu ms-n3 dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages5">
                            <div class="d-none d-lg-block">
                                <a href="../sections/manage-event.html" class="dropdown-item border-radius-md">
                                    <span>Manage Events</span>
                                </a>
                                <a href="../sections/ticket-history.html" class="dropdown-item border-radius-md">
                                    <span>Ticket History</span>
                                </a>
                                <a href="../sections/profile.html" class="dropdown-item border-radius-md">
                                    <span>Profile</span>
                                </a>
                                <a href="../sections/chage-password.html" class="dropdown-item border-radius-md">
                                    <span>Change Password</span>
                                </a>
                                <a href="#" class="dropdown-item border-radius-md">
                                    <span>Log out</span>
                                </a>
                            </div>
                            <div class="d-lg-none">

                                <a href="../sections/manage-event.html" class="dropdown-item border-radius-md">
                                    <span>Manage Events</span>
                                </a>
                                <a href="../sections/ticket-history.html" class="dropdown-item border-radius-md">
                                    <span>Ticket History</span>
                                </a>
                                <a href="../sections/profile.html" class="dropdown-item border-radius-md">
                                    <span>Profile</span>
                                </a>
                                <a href="../sections/change-password.html" class="dropdown-item border-radius-md">
                                    <span>Change Password</span>
                                </a>
                                <a href="#" class="dropdown-item border-radius-md">
                                    <span>Log out</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="ms-auto d-none d-lg-block">&nbsp;</li>
                    <li class="nav-item mx-2 ms-lg-0">
                        <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="login_signup" href="../sections/seach.html">

                            <i class="fas fa-search me-2 text-md"></i> Search
                        </a>
                    </li>
                    <li class="nav-item mx-2 ">
                        <a class="nav-link ps-2 d-flex  cursor-pointer align-items-center" id="login_signup" href="../sections/authenticate.html">
                            <i class="fas fa-desktop me-2 text-md"></i> login/signup
                        </a>
                    </li>
                    <li class="nav-item my-auto ms-3 ms-lg-0">
                        <a href="{{route('sale.register')}}" class="btn btn-md  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">{{__('Sale Register')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@yield('banner')
