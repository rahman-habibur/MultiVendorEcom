<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{asset('backend/admin')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Admin</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title">All Brand</div>
                    </a>
                    <ul>

                        <li> <a href="{{ route('brand.all') }}"><i class="bx bx-right-arrow-alt"></i>All Brand</a>
                        </li>
                        
                        <li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Add Brand</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.logout') }}">
                        <div class="parent-icon"><i class="bx bx-log-out-circle"></i>
                        </div>
                        <div class="menu-title">Logout</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>