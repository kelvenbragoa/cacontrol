<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('dashboard')}}" class="nav-link">{{ __('template.dashboard') }}</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell"></i>
          <span class="badge badge-warning navbar-badge">0</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">0 {{ __('template.notifications') }}</span>
          <div class="dropdown-divider"></div>
          {{-- <a href="#" class="dropdown-item">
            <i class="fa fa-bell"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a> --}}
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">{{ __('template.see_all_notifications') }}</a>
        </div>
      </li>
    </ul>
  </nav>