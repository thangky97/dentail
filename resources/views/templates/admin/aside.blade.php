<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="ps-0 ms-0 text-center" href="{{ route('route_BackEnd_Dashboard') }}"> <img src="{{ asset('admin/assets/img/medboard-logo-216x62.png') }}" alt="logo"> </a>
      <a href="{{ route('route_BackEnd_Dashboard') }}" class="text-center ms-logo-img-link"> <img src="{{ asset('admin/assets/img/dashboard/doctor-3.jpg') }}" alt="logo"></a>
      <h5 class="text-center text-white mt-2">Dr.Samuel</h5>
      <h6 class="text-center text-white mb-3">Admin</h6>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="{{ route('route_BackEnd_Dashboard') }}" data-bs-toggle="collapse" data-bs-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
      </li>
      <!-- /Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements">
          <span><i class="material-icons fs-16">filter_list</i>Người dùng</span>
        </a>
        <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-bs-parent="#side-nav-accordion">
          <li> <a href="{{ route('route_BackEnd_User_List') }}">Danh sách người dùng</a> </li>
          <li> <a href="pages/ui-basic/alerts.html">Tạo người dùng</a> </li>
        </ul>
      </li>
      <!-- /Basic UI Elements -->
      <!-- Advanced UI Elements -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#advanced-elements" aria-expanded="false" aria-controls="advanced-elements">
          <span><i class="material-icons fs-16">code</i>Advanced UI Elements</span>
        </a>
        <ul id="advanced-elements" class="collapse" aria-labelledby="advanced-elements" data-bs-parent="#side-nav-accordion">
          <li> <a href="pages/ui-advanced/draggables.html">Draggables</a> </li>
          <li> <a href="pages/ui-advanced/sliders.html">Sliders</a> </li>
          <li> <a href="pages/ui-advanced/modals.html">Modals</a> </li>
          <li> <a href="pages/ui-advanced/rating.html">Rating</a> </li>
          <li> <a href="pages/ui-advanced/tour.html">Tour</a> </li>
          <li> <a href="pages/ui-advanced/cropper.html">Cropper</a> </li>
          <li> <a href="pages/ui-advanced/range-slider.html">Range Slider</a> </li>
        </ul>
      </li>
      <!-- /Advanced UI Elements -->
      <li class="menu-item">
        <a href="pages/animation.html">
          <span><i class="material-icons fs-16">format_paint</i>Animations</span>
        </a>
      </li>
      <!-- Form Elements -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <span><i class="material-icons fs-16">input</i>Form Elements</span>
        </a>
        <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-bs-parent="#side-nav-accordion">
          <li> <a href="pages/form/form-elements.html">Form Elements</a> </li>
          <li> <a href="pages/form/form-layout.html">Form Layouts</a> </li>
          <li> <a href="pages/form/form-validation.html">Form Validation</a> </li>
          <li> <a href="pages/form/form-wizard.html">Form Wizard</a> </li>
        </ul>
      </li>
      <!-- /Form Elements -->
      <!-- Charts -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#charts" aria-expanded="false" aria-controls="charts">
          <span><i class="material-icons fs-16">equalizer</i>Charts</span>
        </a>
        <ul id="charts" class="collapse" aria-labelledby="charts" data-bs-parent="#side-nav-accordion">
          <li> <a href="pages/charts/chartjs.html">Chart JS</a> </li>
          <li> <a href="pages/charts/morris-charts.html">Morris Chart</a> </li>
        </ul>
      </li>
      <!-- /Charts -->
      <!-- Tables -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#tables" aria-expanded="false" aria-controls="tables">
          <span><i class="material-icons fs-16">tune</i>Tables</span>
        </a>
        <ul id="tables" class="collapse" aria-labelledby="tables" data-bs-parent="#side-nav-accordion">
          <li> <a href="pages/tables/basic-tables.html">Basic Tables</a> </li>
          <li> <a href="pages/tables/data-tables.html">Data tables</a> </li>
        </ul>
      </li>
      <!-- /Tables -->
      <!-- Popups -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#popups" aria-expanded="false" aria-controls="popups">
          <span><i class="material-icons fs-16">message</i>Popups</span>
        </a>
        <ul id="popups" class="collapse" aria-labelledby="popups" data-bs-parent="#side-nav-accordion">
          <li> <a href="pages/popups/sweet-alerts.html">Sweet Alerts</a> </li>
          <li> <a href="pages/popups/toast.html">Toast</a> </li>
        </ul>
      </li>
      <!-- /Popups -->
      <!-- Icons -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#icons" aria-expanded="false" aria-controls="icons">
          <span><i class="material-icons fs-16">border_color</i>Icons</span>
        </a>
        <ul id="icons" class="collapse" aria-labelledby="icons" data-bs-parent="#side-nav-accordion">
          <li> <a href="pages/icons/fontawesome.html">Fontawesome</a> </li>
          <li> <a href="pages/icons/flaticons.html">Flaticons</a> </li>
          <li> <a href="pages/icons/materialize.html">Materialize</a> </li>
        </ul>
      </li>
      <!-- /Icons -->
      <!-- Maps -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#maps" aria-expanded="false" aria-controls="maps">
          <span><i class="material-icons fs-16">map</i>Maps</span>
        </a>
        <ul id="maps" class="collapse" aria-labelledby="maps" data-bs-parent="#side-nav-accordion">
          <li> <a href="pages/maps/google-maps.html">Google Maps</a> </li>
          <li> <a href="pages/maps/vector-maps.html">Vector Maps</a> </li>
        </ul>
      </li>
      <!-- /Maps -->
      <!-- Pages -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#pages" aria-expanded="false" aria-controls="pages">
          <span><i class="material-icons fs-16">insert_drive_file</i>Pages</span>
        </a>
        <ul id="pages" class="collapse" aria-labelledby="pages" data-bs-parent="#side-nav-accordion">
          <li class="menu-item">
            <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#authentication" aria-expanded="false" aria-controls="authentication">Authentication</a>
            <ul id="authentication" class="collapse" aria-labelledby="authentication" data-bs-parent="#pages">
              <li> <a href="pages/prebuilt-pages/default-login.html">Default Login</a> </li>
              <li> <a href="pages/prebuilt-pages/modal-login.html">Modal Login</a> </li>
              <li> <a href="pages/prebuilt-pages/default-register.html">Default Registration</a> </li>
              <li> <a href="pages/prebuilt-pages/modal-register.html">Modal Registration</a> </li>
              <li> <a href="pages/prebuilt-pages/lock-screen.html">Lock Screen</a> </li>
            </ul>
          </li>
          <li> <a href="pages/prebuilt-pages/coming-soon.html">Coming Soon</a> </li>
          <li> <a href="pages/prebuilt-pages/error.html">Error Page</a> </li>
          <li class="menu-item"> <a href="pages/prebuilt-pages/faq.html"> FAQ </a> </li>
          <li class="menu-item"> <a href="pages/prebuilt-pages/portfolio.html"> Portfolio </a> </li>
          <li class="menu-item"> <a href="pages/prebuilt-pages/user-profile.html"> User Profile </a> </li>
          <li class="menu-item"> <a href="pages/prebuilt-pages/invoice.html"> Invoice </a> </li>
        </ul>
      </li>
      <!-- /Pages -->
      <!-- Apps -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-bs-toggle="collapse" data-bs-target="#apps" aria-expanded="false" aria-controls="apps">
          <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>
        </a>
        <ul id="apps" class="collapse" aria-labelledby="apps" data-bs-parent="#side-nav-accordion">
          <li> <a href="pages/apps/chat.html">Chat</a> </li>
          <li> <a href="pages/apps/email.html">Email</a> </li>
          <li> <a href="pages/apps/to-do-list.html">To-do List</a> </li>
        </ul>
      </li>
      <!-- /Apps -->
    </ul>
  </aside>
  <!-- Sidebar Right -->
  <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
    <div class="ms-aside-header">
      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
        <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-bs-toggle="tab"> Activity Log</a></li>
        <li role="presentation" class="fs-12"><a href="#recentPosts" aria-controls="recentPosts" role="tab" data-bs-toggle="tab"> Settings </a></li>
        <li><button type="button" class="close ms-toggler text-center" data-bs-target="#ms-recent-activity" data-bs-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
      </ul>
    </div>
    <div class="ms-aside-body">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
          <ul class="ms-activity-log">
            <li>
              <div class="ms-btn-icon btn-pill icon btn-light">
                <i class="flaticon-gear"></i>
              </div>
              <h6>Update 1.0.0 Pushed</h6>
              <span> <i class="material-icons">event</i>1 January, 2022</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-success">
                <i class="flaticon-tick-inside-circle"></i>
              </div>
              <h6>Profile Updated</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-warning">
                <i class="flaticon-alert-1"></i>
              </div>
              <h6>Your payment is due</h6>
              <span> <i class="material-icons">event</i>1 January, 2022</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-danger">
                <i class="flaticon-alert"></i>
              </div>
              <h6>Database Error</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-info">
                <i class="flaticon-information"></i>
              </div>
              <h6>Checkout what's Trending</h6>
              <span> <i class="material-icons">event</i>1 January, 2022</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-secondary">
                <i class="flaticon-diamond"></i>
              </div>
              <h6>Your Dashboard is ready</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
          </ul>
          <a href="#" class="btn btn-primary d-block"> View All </a>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="recentPosts">
          <h6>General Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Location Tracking</span>
            <label class="ms-switch float-end">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Notifications</span>
            <label class="ms-switch float-end">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Allow Popups</span>
            <label class="ms-switch float-end">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Log Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-end">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-end">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-end">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <h6>Advanced Settings</h6>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Enable Logging</span>
            <label class="ms-switch float-end">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Audit Logs</span>
            <label class="ms-switch float-end">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Error Logs</span>
            <label class="ms-switch float-end">
              <input type="checkbox" checked>
              <span class="ms-switch-slider round"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </aside>