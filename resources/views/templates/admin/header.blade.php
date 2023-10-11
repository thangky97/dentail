<nav class="navbar ms-navbar">
    <div class="ms-aside-toggler ms-toggler ps-0" data-bs-target="#ms-side-nav" data-bs-toggle="slideLeft">
      <span class="ms-toggler-bar bg-white"></span>
      <span class="ms-toggler-bar bg-white"></span>
      <span class="ms-toggler-bar bg-white"></span>
    </div>
    <div class="docfind-logo d-none d-xl-block">
      <a class="sigma_logo" href="../index.html">
        <img src="{{ asset('admin/assets/img/docfind-logo.png') }}" alt="logo">
      </a>
    </div>
    <div class="logo-sn logo-sm ms-d-block-sm">
      <a class="ps-0 ms-0 text-center navbar-brand me-0" href="index.html"><img src="{{ asset('admin/assets/img/medboard-logo-84x41.png') }}" alt="logo"> </a>
    </div>
    <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
      <li class="ms-nav-item ms-nav-user dropdown">
        <a href="#" id="userDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-end" src="{{ asset('admin/assets/img/dashboard/doctor-3.jpg') }}" alt="people"> </a>
        <ul class="dropdown-menu dropdown-menu-end user-dropdown" aria-labelledby="userDropdown">
          <li class="dropdown-menu-header">
            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Dr Samuel Deo</span></h6>
          </li>
          <li class="dropdown-divider"></li>
          <li class="ms-dropdown-list">
            <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-user me-2"></i> Profile</span> </a>
            <a class="media fs-14 p-2" href="pages/apps/email.html"> <span><i class="flaticon-mail me-2"></i> Inbox</span> <span class="badge rounded-pill badge-info">3</span> </a>
            <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear me-2"></i> Account Settings</span> </a>
          </li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-menu-footer">
            <a class="media fs-14 p-2" href="pages/prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security me-2"></i> Lock</span> </a>
          </li>
          <li class="dropdown-menu-footer">
            <a class="media fs-14 p-2" href="pages/prebuilt-pages/default-login.html"> <span><i class="flaticon-shut-down me-2"></i> Logout</span> </a>
          </li>
        </ul>
      </li>
    </ul>
    <div class="ms-toggler ms-d-block-sm pe-0 ms-nav-toggler" data-bs-toggle="slideDown" data-bs-target="#ms-nav-options">
      <span class="ms-toggler-bar bg-white"></span>
      <span class="ms-toggler-bar bg-white"></span>
      <span class="ms-toggler-bar bg-white"></span>
    </div>
  </nav>