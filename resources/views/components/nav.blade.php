<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper" class="bg-dark">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top"><img src="./img/logo.png" class="img-fluid"/></a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#recent_ads">Services</a>
        </li>

        {{-- PROVERAVA DA LI IMA SESIJA I NA OSNOVU TOGA SETUJE --}}
        @if(auth()->check())
          <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="{{asset('user_profile')}}">Go to your dashboard</a>
          </li>
          @else
          <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="#sign">Sign up/Sign in</a>
          </li>
        @endif

        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#contact">Contact</a>
        </li>
      </ul>
    </nav>