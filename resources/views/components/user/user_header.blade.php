<nav class="navbar navbar-light bg-light static-top">
      <div class="container">

        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="{{asset('/development')}}">Ontwikkeling</a>
          </li>
          <li class="list-inline-item">
            <a href="{{asset('/recruitment')}}">Werving</a>
          </li>
          <li class="list-inline-item">
            <a href="{{asset('/items')}}">TweedeHands</a>
          </li>
          <li class="list-inline-item">
            <a href="{{asset('/houses')}}">Huizen / onroerend goed</a>
          </li>
          <li class="list-inline-item">
            <a href="{{asset('/cars')}}">Voertuigen</a>
          </li>
          <li class="list-inline-item">
            <a href="{{asset('/company')}}">Bedrijfspromotie</a>
          </li>
          <li class="list-inline-item">
            <a href="{{asset('/make_ads')}}">Plaats uw advertentie</a>
          </li>
            <li class="list-inline-item">
                <a href="{{asset('/user_ads')}}">Bekijk uw advertentie</a>
            </li class="list-inline-item">
            <li>
                <a href="{{asset('/user_profile')}}">Uw profiel</a>
            </li>
          @if(auth()->check())
          <li class="list-inline-item">
            <a href="{{asset('/logout')}}" class="btn btn-default">Logout</a>
          </li>
          @endif
          <li class="list-inline-item">
          
          <a href="mailto:info@iederwatwils.nl" class="btn btn-default">
          <i class="fa fa-envelope text-info" aria-hidden="true">info@iederwatwils.nl</i></a>


          </li>
        </ul>
      </div>
    </nav>