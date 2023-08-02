<!-- sidebar.blade.php -->

<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show" style="background-color: #a0c4e3; color: #8B4513;">
<div class="c-sidebar-brand d-md-down-none" style="color: #000000; font-family: 'Comic Sans MS', cursive;">
        <a class="c-sidebar-brand-full h4" href="#">
            <i class="fa-fw fas fa-user-circle fa-inverse" style="font-size: 30px;"></i>
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item">
        <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link" style="color: #000000; font-family: 'Comic Sans MS', cursive;">
            <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt" style="color: #003366;"></i>
            {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#" style="color: #000000; font-family: 'Comic Sans MS', cursive;">
                <i class="fa-fw fas fa-users c-sidebar-nav-icon" style="color: #003366;"></i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                    <li class="c-sidebar-nav-dropdown">
                        <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}" style="color: #000000;">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon" style="color: #003366;"></i>
                            {{ trans('cruds.permission.title') }}
                       </a>
                    </li>
                    @endcan
                    @can('role_access')
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}" style="color: #000000;">
                        <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon" style="color: #003366;"></i>
                        <span style="color: #000000;">{{ trans('cruds.role.title') }}</span>
                        </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}" style="color: #000000;">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon"style="color: #003366;"></i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('sample_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/books*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#" style="color: #000000; font-family: 'Comic Sans MS', cursive;">
                    <i class="fa-fw fas fa-crown c-sidebar-nav-icon" style="color: #003366;"></i>
                    {{ trans('cruds.sample.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('book_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.books.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/books") || request()->is("admin/books/*") ? "c-active" : "" }}" style="color: #000000;">
                                <i class="fa-fw fas fa-book c-sidebar-nav-icon" style="color: #003366;"></i>
                                {{ trans('cruds.book.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('uas_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/produks*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#" style="color: #000000; font-family: 'Comic Sans MS', cursive;">
                    <i class="fa-fw fas fa-pen-square c-sidebar-nav-icon"  style="color: #003366;"></i>
                    {{ trans('cruds.uas.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('produk_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.produks.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/produks") || request()->is("admin/produks/*") ? "c-active" : "" }}" style="color: #000000;">
                                <i class="fa-fw fas fa-shopping-bag c-sidebar-nav-icon"  style="color: #003366;"></i>
                                {{ trans('cruds.produk.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}" style="color: #000000;">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon" style="color: #003366;"></i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" style="color: #000000;">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt" style="color: #003366;"></i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
