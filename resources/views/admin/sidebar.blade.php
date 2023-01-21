<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
      <a class="navbar-brand brand-logo-mini" href="{{route('home')}}">Home</a>
    </div>
    <ul class="nav">
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('addDoctor')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Add Doctor</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('showAppointments')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Appointments</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{route('showDoctors')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Edit Doctors</span>
        </a>
      </li>
    </ul>
  </nav>