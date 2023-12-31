<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-text mx-3">{{ __('Homepage') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Dashboard') }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <span>{{ __('User Management') }}</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}"
                    href="{{ route('admin.roles.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Roles') }}</a>
                <a class="collapse-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}"
                    href="{{ route('admin.users.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Users') }}</a>
            </div>
        </div>
    </li>

    <!-- country -->
    <li class="nav-item {{ request()->is('admin/countries') || request()->is('admin/countries') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.countries.index') }}">
            <i class="fas fa-cogs"></i>
            <span>{{ __('Country') }}</span></a>
    </li>

    <!-- season -->
    <li class="nav-item {{ request()->is('admin/seasons') || request()->is('admin/seasons') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.seasons.index') }}">
            <i class="fas fa-cogs"></i>
            <span>{{ __('Season') }}</span></a>
    </li>

    <!-- team -->
    <li class="nav-item {{ request()->is('admin/teams') || request()->is('admin/teams') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.teams.index') }}">
            <i class="fas fa-cogs"></i>
            <span>{{ __('Team') }}</span></a>
    </li>

    <!-- Teacher -->
    <li class="nav-item {{ request()->is('admin/teachers') || request()->is('admin/teachers') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.teachers.index') }}">
            <i class="fas fa-cogs"></i>
            <span>{{ __('Teacher') }}</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/salaries') || request()->is('admin/salaries') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.salaries.index') }}">
            <i class="fas fa-cogs"></i>
            <span>{{ __('Salary') }}</span></a>
    </li>


</ul>