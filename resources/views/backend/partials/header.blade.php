<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ backend_base_path('/') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">{!! config('yeelight.backend.logo-mini', config('yeelight.backend.name')) !!}</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">{!! config('yeelight.backend.logo', config('yeelight.backend.name')) !!}</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>


        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{ backend_user()->avatar }}" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ backend_user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ backend_user()->avatar }}" class="img-circle" alt="User Image">

                            <p>
                                {{ backend_user()->name }}
                                <small>创建于 {{ backend_user()->created_at }}</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ backend_base_path('auth/setting') }}" class="btn btn-default btn-flat">{{ trans('backend.setting') }}</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ backend_base_path('auth/logout') }}" class="btn btn-default btn-flat">{{ trans('backend.logout') }}</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                {{--<li>--}}
                    {{--<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>--}}
                {{--</li>--}}
            </ul>
        </div>
    </nav>
</header>