<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{route('userdashboard')}}" class="sidebar-brand">
            Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">User Dashboard</li>
            <li class="nav-item {{ active_class(['/']) }}">
                <a href="{{ route('userdashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            {{-- job atrribute start --}}
            <li class="nav-item {{ active_class(['user/job/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#jobAttributes" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Job </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['job/*']) }}" id="jobAttributes">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('job.index') }}" class="nav-link {{ active_class(['user/job']) }}">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('job.create') }}" class="nav-link {{ active_class(['user/job/create']) }}">Create Job</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- job atrribute end --}}
            {{-- Company atrribute start --}}
            <li class="nav-item {{ active_class(['email/*']) }}">
                <a class="nav-link" data-bs-toggle="collapse" href="#companyAttributes" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Company </span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse {{ show_class(['email/*']) }}" id="companyAttributes">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('company.index') }}" class="nav-link {{ active_class(['email/inbox']) }}">All Company</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('company.create') }}" class="nav-link {{ active_class(['email/inbox']) }}">Create Company</a>
                        </li>
                        {{-- <li class="nav-item">
          <a href="{{ route('company.create') }}" class="nav-link {{ active_class(['email/inbox']) }}">Update Company</a>
            </li> --}}
        </ul>
    </div>
    </li>
    {{-- Company atrribute end --}}
    <li class="nav-item ">
        <a href="{{route('user.settings')}}" class="nav-link">
            <i class="link-icon" data-feather="settings"></i>
            <span class="link-title">Settings</span>
        </a>
    </li>
    </ul>
    </div>
</nav>
<nav class="settings-sidebar">
    <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
            <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Sidebar:</h6>
        <div class="mb-3 pb-3 border-bottom">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
                    Light
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
                    Dark
                </label>
            </div>
        </div>
        <div class="theme-wrapper">
            <h6 class="text-muted mb-2">Light Version:</h6>
            <a class="theme-item active" href="https://www.nobleui.com/laravel/template/demo1/">
                <img src="{{ url('/adminassets/images/screenshots/light.jpg') }}" alt="light version">
            </a>
            <h6 class="text-muted mb-2">Dark Version:</h6>
            <a class="theme-item" href="https://www.nobleui.com/laravel/template/demo2/">
                <img src="{{ url('/adminassets/images/screenshots/dark.jpg') }}" alt="light version">
            </a>
        </div>
    </div>
</nav>
