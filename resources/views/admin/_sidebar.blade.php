<!-- sidebar menu area start -->
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{route('admin_home')}}"><img src="{{asset('assets')}}/admin/assets/images/icon/logo.png" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li><a href="{{route('admin_category')}}"><i class="ti-menu"></i> <span>Category</span></a></li>
                    <li><a href="{{route('admin_content')}}"><i class="ti-map-alt"></i> <span>Content</span></a></li>
                    <li><a href="{{route('admin_message')}}"><i class="ti-comment-alt"></i> <span>Contact Message</span></a></li>
                    <li><a href="{{route('admin_setting')}}"><i class="ti-settings"></i> <span>Setting</span></a></li>
                    <li><a href="{{route('admin_comment')}}"><i class="ti-settings"></i> <span>Comments</span></a></li>
                    <li><a href="{{route('admin_faq')}}"><i class="fa fa-question-circle"></i> <span>Faq</span></a></li>
                    <li><a href="{{route('admin_users')}}"><i class="fa fa-users"></i> <span>Users</span></a></li>
                    <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> <span>Log Out</span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->
