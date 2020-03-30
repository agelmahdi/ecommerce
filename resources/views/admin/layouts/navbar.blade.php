<body class="hold-transition sidebar-mini layout-fixed">

@include('admin.layouts.menu')
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('design/AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{AdminHelperAuth()->user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{aurl()}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                {{ trans('admin.dashboard') }}
                            </p>
                        </a>
                        <ul class="nav nav-treeview " style="{{ active_menu('admin')[1] }}">
                            <li class="nav-item">
                                @if(active_menu('dashboard')[0])
                                    <a href="{{ aurl('settings') }}" class="nav-link active">
                                        @else<a href="{{ aurl('settings') }}" class="nav-link ">@endif
                                            <i class="nav-icon fas fa-user"></i>
                                            <p>{{ trans('admin.settings') }}</p>
                                        </a>
                                    </a>
                            </li>

                        </ul>
                    </li>
                    @if(active_menu('admin')[0])
                        <li class="nav-item has-treeview menu-open" >
                    @else
                        <li class="nav-item has-treeview " >
                    @endif

                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                {{ trans('admin.admin') }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview " style="{{ active_menu('admin')[1] }}">
                            <li class="nav-item">
                                @if(active_menu('admin')[0])
                                    <a href="{{ aurl('admin') }}" class="nav-link active">
                                        @else<a href="{{ aurl('admin') }}" class="nav-link ">@endif
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>{{ trans('admin.admin') }}</p>
                                </a>
                                    </a>
                            </li>

                        </ul>
                    </li>
                        @if(active_menu('users')[0])
                            <li class="nav-item has-treeview menu-open" >

                            @else
                            <li class="nav-item has-treeview " >
                            @endif


                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                {{ trans('admin.users') }}
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                @if(active_menu('users')[1])
                                    <a href="{{ aurl('users') }}" class="nav-link active">

                                    @else
                                            <a href="{{ aurl('users') }}" class="nav-link ">

                                            @endif
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>{{ trans('admin.users') }}</p>
                                </a>
                                    </a>
                            </li>

                        </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        @if(active_menu('user')[1])
                                            <a href="{{ aurl('users') }}?level=user" class="nav-link active">

                                                @else
                                                    <a href="{{ aurl('users') }}?level=user" class="nav-link ">

                                                        @endif
                                                        <i class="nav-icon fas fa-user"></i>
                                                        <p>{{ trans('admin.user') }}</p>
                                                    </a>
                                            </a>
                                    </li>

                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        @if(active_menu('vendor')[1])
                                            <a href="{{ aurl('users') }}?level=vendor" class="nav-link active">

                                                @else
                                                    <a href="{{ aurl('users') }}?level=vendor" class="nav-link ">

                                                        @endif
                                                        <i class="nav-icon fas fa-user"></i>
                                                        <p>{{ trans('admin.vendor') }}</p>
                                                    </a>
                                            </a>
                                    </li>

                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        @if(active_menu('company')[1])
                                            <a href="{{ aurl('users') }}?level=company" class="nav-link active">

                                                @else
                                                    <a href="{{ aurl('users') }}?level=company" class="nav-link ">

                                                        @endif
                                                        <i class="nav-icon fas fa-user"></i>
                                                        <p>{{ trans('admin.company') }}</p>
                                                    </a>
                                            </a>
                                    </li>

                                </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

