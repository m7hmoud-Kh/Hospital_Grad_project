<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <!-- logo -->
    <div class="text-left navbar-brand-wrapper">
      <a class="navbar-brand brand-logo" href="index.html">
        <img src="{{asset('backend/images/logo-dark.png')}}" alt="" ></a>
      <a class="navbar-brand brand-logo-mini" href="index.html">
        <img src="{{asset('backend/images/logo-icon-dark.png')}}" alt=""></a>
    </div>
    <!-- Top bar left -->
    <ul class="nav navbar-nav mr-auto">
      <li class="nav-item">
        <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
      </li>

    </ul>
    <!-- top bar right -->
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item fullscreen">
        <a id="btnFullscreen" href="#" class="nav-link" ><i class="ti-fullscreen"></i></a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <i class="ti-bell"></i>
          <span class="badge badge-danger notification-status"> </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
          <div class="dropdown-header notifications">
            <strong>Notifications</strong>
            <span class="badge badge-pill badge-warning">05</span>
          </div>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">New registered user <small class="float-right text-muted time">Just now</small> </a>
          <a href="#" class="dropdown-item">New invoice received <small class="float-right text-muted time">22 mins</small> </a>
          <a href="#" class="dropdown-item">Server error report<small class="float-right text-muted time">7 hrs</small> </a>
          <a href="#" class="dropdown-item">Database report<small class="float-right text-muted time">1 days</small> </a>
          <a href="#" class="dropdown-item">Order confirmation<small class="float-right text-muted time">2 days</small> </a>
        </div>
      </li>

      <li class="nav-item dropdown mr-30">
        <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            @role('head_of_hospital')
                <img src="{{ asset('backend/images/profile-avatar.jpg') }}" alt="avatar">
            @else
                <img src="{{asset('Doctor_image/'.Auth()->user()->image)}}" alt="avatar">
            @endrole

        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header">
            <div class="media">
              <div class="media-body">
                <h5 class="mt-0 mb-0">{{Auth()->user()->name}}</h5>
                <span>{{Auth()->user()->email}}</span>
                <br>
                @role('head_of_hospital')
                    <span>Head of Hospital</span>
                @else
                    <span>Doctor</span>
                @endrole
              </div>
            </div>
          </div>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('profile')}}">
            <i class="text-warning ti-user"></i>Profile
            </a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <i class="text-danger ti-unlock"></i>Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>


        </div>
      </li>
    </ul>
  </nav>


