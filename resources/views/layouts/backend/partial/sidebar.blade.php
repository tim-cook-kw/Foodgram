    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
            <img src="{{asset(Auth::user()->image)}}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                <div class="email">{{Auth::user()->email}}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li  class="{{ Request::is('profile') ? 'active' : '' }}"><a href="{{route('profile.index')}}"><i class="material-icons">person</i>Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li >
                            <a href="logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                {{-- <li class="{{ Request::is('admin') ? 'active' : '' }}">
                    <a href="{{route('admin.index')}}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                </li> --}}
                <li class="{{ Request::is('usermanagement') ? 'active' : '' }}">
                    <a href="{{route('usermanagement.index')}}">
                        <i class="material-icons">person</i>
                        <span>User Management</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>Master Data</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ Request::is('category') ? 'active' : '' }}">
                            <a href="{{route('category.index')}}">
                                <span>Category</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('roles') ? 'active' : '' }}">
                            <a href="{{route('roles.index')}}">
                                <span>Roles</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::is('article') ? 'active' : '' }}">
                    <a href="{{route('article.index')}}">
                        <i class="material-icons">book</i>
                        <span>Article</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2019 <a href="javascript:void(0);">Admin-Foodgram</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
