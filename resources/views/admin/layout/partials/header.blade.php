  <!-- Navbar -->

  <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
      id="layout-navbar">
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
          <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="ti ti-menu-2 ti-sm"></i>
          </a>
      </div>

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
          <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                      <div class="avatar ">
                          <img src="{{ asset('admin-assets') }}/img/avatars/main.png" alt
                              class="h-auto rounded-circle" />
                      </div>
                  </a>
                  {{-- User Menue --}}
                  <ul class="dropdown-menu dropdown-menu-end">
                      <li>
                          <a class="dropdown-item" href="#">
                              <div class="d-flex">
                                  <div class="flex-shrink-0 me-3">
                                      <div class="avatar ">
                                          <img src="{{ asset('admin-assets') }}/img/avatars/main.png" alt
                                              class="h-auto rounded-circle" />
                                      </div>
                                  </div>
                                  <div class="flex-grow-1">
                                      <span class="fw-medium d-block">John Doe</span>
                                      <small class="text-muted">Admin</small>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <div class="dropdown-divider"></div>
                      </li>
                      <li>
                          <a class="dropdown-item" href="#">
                              <i class="ti ti-user-check me-2 ti-sm"></i>
                              <span class="align-middle">My Profile</span>
                          </a>
                      </li>
                      <li>
                          <a class="dropdown-item" href="#">
                              <i class="ti ti-settings me-2 ti-sm"></i>
                              <span class="align-middle">Settings</span>
                          </a>
                      </li>

                      <li>
                          <div class="dropdown-divider"></div>
                      </li>
                      <x-admin.layout.header.user-logout-dropdown-menu-item :link="route('admin.dashboard')" />
                  </ul>
              </li>
              <!--/ User -->
          </ul>
      </div>
  </nav>

  <!-- / Navbar -->