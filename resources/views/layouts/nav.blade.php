<!-- Navigation Bar-->
<header id="topnav">
  <div class="topbar-main">
    <div class="container-fluid">
      <!-- Logo container-->
      <div class="logo">
        <!-- Image Logo -->
        <a href="{{ route('home') }}" class="logo">
          <!-- <img src="assets/images/logo-sm.png" alt="" height="26" class="logo-small"> -->
          <!-- <img src="assets/images/logo.png" alt="" height="24" class="logo-large"> -->
          <small>Senon Insurance Adjusters &amp; Appraisers</small>
        </a>
      </div>
      <!-- End Logo container-->

      <div class="menu-extras topbar-custom">
        <ul class="list-unstyled topbar-right-menu float-right mb-0">
          <li class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle nav-link">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </li>
          <li>
            <!-- Notification -->
            <div class="notification-box">
              <ul class="list-inline mb-0">
                <li>
                  <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-bell-outline noti-icon"></i>
                  </a>
                  <div class="noti-dot">
                    <span class="dot"></span>
                    <span class="pulse"></span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- End Notification bar -->
          </li>
          <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="false" aria-expanded="false">
              <img src="{{ asset('images/profile.png') }}" alt="user" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="ti-user m-r-5"></i> Profile
              </a>

              <!-- item-->
              <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                <i class="ti-power-off m-r-5"></i> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        </ul>
      </div>
      <!-- end menu-extras -->

      <div class="clearfix"></div>
    </div> <!-- end container -->
  </div>
  <!-- end topbar-main -->

  <div class="navbar-custom">
    <div class="container-fluid">
      <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">
          <li class="has-submenu">
            <a href="/home"><i class="dripicons-device-desktop"></i> <span> Dashboard </span> </a>
          </li>
          <li class="has-submenu">
            <a href="#"><i class="dripicons-box"></i> <span> Assignment Received per Day </span> </a>
            <ul class="submenu megamenu">
              <li>
                <ul>
                  <li><a href="/newassignment">Add new</a></li>
                  <li><a href="/assignments">View lists</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End navigation menu -->
      </div> <!-- end #navigation -->
    </div> <!-- end container -->
  </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->