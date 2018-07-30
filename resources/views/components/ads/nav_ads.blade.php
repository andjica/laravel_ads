<!-- Navigation -->
<a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top">Iederwatwils menu</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="{{asset('/')}}">Home</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="{{asset('/development')}}">Ontwikkeling</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="{{asset('/recruitment')}}">Werving</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="{{asset('/items')}}">Tweedehands</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="{{asset('/houses')}}">Onroerend goed</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="{{asset('/cars')}}"> Voertuigen</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="{{asset('/company')}}">Bedrijfspromotie</a>
        </li>
        {{-- PROVERAVA DA LI IMA SESIJA I NA OSNOVU TOGA SETUJE --}}
        @if(auth()->check())
          <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="{{asset('user_profile')}}">Ga naar je dashboard </a>
          </li>
          @else
          <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="{{asset('/login')}}">Aanmelden/Login</a>
          </li>
        @endif
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="{{asset('/accounttypes')}}">Zie account PRO</a>
        </li>
        
      </ul>
    </nav>