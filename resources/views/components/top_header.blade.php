

<nav class="navbar navbar-light bg-light static-top">
      <div class="container">
 <a href="{{asset('/')}}" class="btn btn-secondary"><b>&copy;IederWatWils  2018. All Rights Reserved.</b></a>
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="{{asset('/development')}}">Ontwikkeling</a>
          </li>
          <li class="list-inline-item">
            <a href="{{asset('/recruitment')}}">Werving</a>
          </li>
          <li class="list-inline-item">
            <a href="{{asset('/items')}}">Tweedehands</a>
          </li>
          <li class="list-inline-item">
            <a href="{{asset('/houses')}}">Onroerend goed</a>
          </li>
          <li class="list-inline-item">
            <a href="{{asset('/cars')}}">Voertuigen</a>
          </li>
          <li class="list-inline-item">
            <a href="{{asset('/company')}}">Bedrijfspromotie</a>
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