<!-- NAVBAR-->
<nav class="navbar navbar-expand-lg   py-3 header">
    <div class="container">
      <a href="index.php" class="navbar-brand">
        <!-- Logo Image -->
        <img src="{{asset('frontend/assets/images/logo.png')}}" width="45" alt="" class="d-inline-block align-middle mr-2">
        <!-- Logo Text -->
        <span class="text-uppercase font-weight-bold">RVSC</span>
      </a>
  
      <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
       <span class="navbar-toggler-icon">   
      <i class="fa fa-bars" style="color:#FF4136; font-size:28px;"></i>
  </span>
      </button>
  
      <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ Request::is('home*') || '' ? 'active' : '' }}"> <a href="/home" class="nav-link">Home <span class="sr-only">(current)</span></a></li>
          <li class="nav-item {{ Request::is('about') ? 'active' : '' }}"> <a href="/about" class="nav-link">About</a></li>
          {{--  <li class="nav-item dropdown ">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEPARTMENTS</a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a href="/">Teaching</a></li>
            <li role="separator" class="divider"></li>
            <li class="nav-item"><a href="/">Non-Teaching</a></li>
            <li role="separator" class="divider"></li>
            <li class="nav-item"><a href="/">Heads of Department</a></li>
          </ul>
        </li>  --}}
          <li class="nav-item {{ Request::is('accommodation') ? 'active' : '' }}"><a href="/accommodation" class="nav-link">Accomodation</a></li>
          <li class="nav-item {{ Request::is('sports') ? 'active' : '' }}"><a href="/sports" class="nav-link">Sports</a></li>
          <li class="nav-item {{ Request::is('gallery') ? 'active' : '' }}"><a href="/gallery" class="nav-link">Gallery</a></li>
          <li class="nav-item {{ Request::is('management') ? 'active' : '' }}"><a href="/management" class="nav-link">Management</a></li>
          <li class="nav-item {{ Request::is('membership*') ? 'active' : '' }}"><a href="/membership" class="nav-link">Membership</a></li>
          <li class="nav-item {{ Request::is('updates') ? 'active' : '' }}"><a href="/updates" class="nav-link">Updates</a></li>
          <li class="nav-item {{ Request::is('career') ? 'active' : '' }}"><a href="/career" class="nav-link">Jobs</a></li>
          <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}"><a href="/contact" class="nav-link">Contact Us</a></li>
          <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>