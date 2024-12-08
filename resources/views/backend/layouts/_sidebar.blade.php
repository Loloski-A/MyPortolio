        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
                    <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>
                </ul> <!--end::Start Navbar Links-->
                <!--begin::End Navbar Links-->
                <ul class="navbar-nav ms-auto">
                    <!--begin::Fullscreen Toggle-->
                    <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle-->
                     <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="{{ url('public/backend/dist/assets/img/user2.jpg')}}" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">Lolo Adan</span> </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <!--begin::User Image-->
                            <li class="user-header text-bg-primary"> <img src="{{ url('public/backend/dist/assets/img/user2.jpg')}}" class="rounded-circle shadow" alt="User Image">
                                <p>
                                    Lolo Adan - Web Developer
                                    <small>Member since Nov. 2024</small>
                                </p>
                            </li> <!--end::User Image-->
                            <!--begin::Menu Body-->
                            <li class="user-body">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-4 text-center"> <a href="#">Followers</a> </div>
                                    <div class="col-4 text-center"> <a href="#">Sales</a> </div>
                                    <div class="col-4 text-center"> <a href="#">Friends</a> </div>
                                </div> <!--end::Row-->
                            </li> <!--end::Menu Body-->
                            <!--begin::Menu Footer-->
                            <li class="user-footer">
                                 <a href="#" class="btn btn-default btn-flat">Profile</a>
                                 <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                            </li> <!--end::Menu Footer-->
                        </ul>
                    </li> <!--end::User Menu Dropdown-->
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header-->
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <!--begin::Sidebar Brand-->
            <div class="sidebar-brand">
                <!--begin::Brand Link--> <a href="./index.html" class="brand-link">
                <!--begin::Brand Image--> <img src="{{ url('public/backend/dist/assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow"> <!--end::Brand Image-->
                <!--begin::Brand Text--> <span class="brand-text fw-light">Admin</span> <!--end::Brand Text--> </a> <!--end::Brand Link-->
            </div><!--end::Sidebar Brand-->
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('admin/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/home')}}" class="nav-link @if(Request::segment(2) == 'home') active @endif">
                                <i class="bi bi-house-fill"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/about')}}" class="nav-link @if(Request::segment(2) == 'about') active @endif">
                                <i class="bi bi-info-circle-fill"></i>
                                <p>
                                    About
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/skills')}}" class="nav-link @if(Request::segment(2) == 'skills') active @endif">
                                <i class="bi bi-tools"></i>
                                <p>
                                    Skills
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/work')}}" class="nav-link @if(Request::segment(2) == 'work') active @endif">
                                <i class="bi bi-briefcase-fill"></i>
                                <p>
                                    Work
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/services')}}" class="nav-link @if(Request::segment(2) == 'services') active @endif">
                                <i class="bi bi-gear-fill"></i>
                                <p>
                                    Services
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/contact')}}" class="nav-link @if(Request::segment(2) == 'contact') active @endif">
                                <i class="bi bi-telephone-inbound-fill"></i>
                                <p>
                                    Contact
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('logout')}}" class="nav-link @if(Request::segment(2) == 'logout') active @endif">
                                <i class="bi bi-box-arrow-right"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>

                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar-->
