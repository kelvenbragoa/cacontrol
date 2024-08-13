<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{ asset('img/logo.ico') }}" alt="Cornelder" class="brand-image img-circle">
      <span class="brand-text font-weight-light">Cornelder - Access</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/logo.ico') }}" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Cornelder</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">{{ __('template.dashboard') }}</li>
          <li class="nav-item menu-open">
            <a href="{{route('dashboard')}}" class="nav-link {{ request()->routeIs('dashboard') ? 'active':'' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                {{ __('template.dashboard') }}
              </p>
            </a>
          </li>

          <li class="nav-header">{{ __('template.modules') }}</li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                {{ __('template.credentials') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-lock nav-icon"></i>
                  <p>{{ __('template.pending') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-check nav-icon"></i>
                  <p>{{ __('template.approved') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-cross nav-icon"></i>
                  <p>{{ __('template.denied') }}</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                {{ __('template.port_access') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>
                    {{ __('template.vehicles') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-plus nav-icon"></i>
                      <p>{{ __('template.new') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('template.list') }}</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>
                    {{ __('template.users') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-plus nav-icon"></i>
                      <p>{{ __('template.new') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fas fa-arrow-up nav-icon"></i>
                      <p>{{ __('template.import') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('template.list') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fas fa-address-card nav-icon"></i>
                      <p>{{ __('template.internal_card') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fas fa-address-card nav-icon"></i>
                      <p>{{ __('template.external_card') }}</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>
                    {{ __('template.dasso') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-plus nav-icon"></i>
                      <p>{{ __('template.induction') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('template.induced') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('template.denied') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('template.transactions') }}</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>



          <li class="nav-header">{{ __('template.cornelder') }}</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                {{ __('template.system') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-lock nav-icon"></i>
                  <p>{{ __('template.request') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-check nav-icon"></i>
                  <p>{{ __('template.approved') }}</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>
                {{ __('template.vehicles') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-tag nav-icon"></i>
                  <p>
                    {{ __('template.class') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fa fa-plus nav-icon"></i>
                      <p>{{ __('template.new') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fa fa-list nav-icon"></i>
                      <p>{{ __('template.list') }}</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-tag nav-icon"></i>
                  <p>
                    {{ __('template.make') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="far fa-plus nav-icon"></i>
                      <p>{{ __('template.new') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('template.list') }}</p>
                    </a>
                  </li>
                </ul>
              </li>
            
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                {{ __('template.activities') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>{{ __('template.new') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>{{ __('template.list') }}</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-header">{{ __('template.departments') }}</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                {{ __('template.departments') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>{{ __('template.new') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>{{ __('template.list') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-clock nav-icon"></i>
                  <p>{{ __('template.pending_access') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fa fa-check-double nav-icon"></i>
                  <p>{{ __('template.completed_access') }}</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-header">{{ __('template.super_administrator') }}</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                {{ __('template.settings') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>
                    {{ __('template.roles') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('roles.create')}}" class="nav-link">
                      <i class="far fa-plus nav-icon"></i>
                      <p>{{ __('template.new') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('roles.index')}}" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('template.list') }}</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>
                    {{ __('template.permissions') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('permissions.create') }}" class="nav-link">
                      <i class="far fa-plus nav-icon"></i>
                      <p>{{ __('template.new') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('permissions.index') }}" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('template.list') }}</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>
                    {{ __('template.users') }}
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('users.create') }}" class="nav-link">
                      <i class="far fa-plus nav-icon"></i>
                      <p>{{ __('template.new') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link">
                      <i class="fas fa-list nav-icon"></i>
                      <p>{{ __('template.list') }}</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-header">{{ __('template.account_settings') }}</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                {{ __('template.profile') }}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-gear"></i>
              <p>
                {{ __('template.password') }}
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>