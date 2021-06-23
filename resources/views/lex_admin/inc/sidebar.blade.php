<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">7</span><span class="text-primary">blex</span>
                            </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="{{route('admin-index')}}">
                        <img src="{{asset('lex_admin/assets/media/icons/logo.svg')}}" alt="logo 7lex">
                        <span class="font-size-xl text-dual-primary-dark">7</span><span class="font-size-xl text-primary">lex</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- New Account -->
        <div class="content-side content-side-full bg-body-light">
            <a href="{{route('admin-lawyers.create')}}" type="button" class="btn btn-sm btn-block btn-hero btn-alt-primary" data-toggle="click-ripple">
                <i class="fa fa-user-plus mr-5"></i> New Lawyer
            </a>
        </div>
        <!-- END New Account -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a class="active" href="{{route('admin-lawyers.index')}}"><i class="si si-list"></i><span class="sidebar-mini-hide">Lawyers
{{--                            <span class="badge badge-pill badge-primary ml-5">3</span>--}}
                        </span></a>
                </li>
{{--                --}}
{{--                <li class="nav-main-heading"><span class="sidebar-mini-visible">PR</span><span class="sidebar-mini-hidden">Projects</span></li>--}}
{{--                <li>--}}
{{--                    <a href=""><i class="si si-docs"></i><span class="sidebar-mini-hide">Manage</span></a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href=""><i class="si si-users"></i><span class="sidebar-mini-hide">Clients</span></a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href=""><i class="si si-energy"></i><span class="sidebar-mini-hide">Team</span></a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href=""><i class="si si-wallet"></i><span class="sidebar-mini-hide">Payments</span></a>--}}
{{--                </li>--}}
{{--                <li class="nav-main-heading"><span class="sidebar-mini-visible">ST</span><span class="sidebar-mini-hidden">Settings</span></li>--}}
{{--                <li>--}}
{{--                    <a href=""><i class="si si-fire"></i><span class="sidebar-mini-hide">Security</span></a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href=""><i class="si si-pencil"></i><span class="sidebar-mini-hide">Profile</span></a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href=""><i class="si si-flag"></i><span class="sidebar-mini-hide">Notifications</span></a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href=""><i class="si si-lock"></i><span class="sidebar-mini-hide">Password Update</span></a>--}}
{{--                </li>--}}
{{--                <li class="nav-main-heading"><span class="sidebar-mini-visible">HP</span><span class="sidebar-mini-hidden">Help</span></li>--}}
{{--                <li>--}}
{{--                    <a href=""><i class="si si-notebook"></i><span class="sidebar-mini-hide">Knowledge Base</span></a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href=""><i class="si si-envelope"></i><span class="sidebar-mini-hide">Contact Us</span></a>--}}
{{--                </li>--}}
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>
