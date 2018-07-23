<div class="col-lg-3">
         
          <div class="list-group my-4">
          <a href="#"><img class="card-img-top" src="./img/service1.jpeg" alt="Iederwatwils img"></a>
          </div>
       
          
            <h5 class="card-header text-danger">Your Dashboard</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="{{asset('/make_ads')}}">Plaats uw advertentie</a>
                    </li>
                    <li>
                      <a href="{{asset('/user_ads')}}">Bekijk uw advertentie</a>
                    </li>
                    <li>
                      <a href="#">Manipulationg picture</a>
                    </li>
                    <li>
                      <a href="{{asset('/user_profile')}}">Uw profiel</a>
                    </li>
                    @if(auth()->check())
                    <li>
                      <a href="{{asset('/logout')}}" class="btn btn-danger btn-sm">Logout</a>
                    </li>
                    @endif
                  </ul>
                 
              </div>
      
            </div>
           
          </div>
          <h5 class="card-header text-danger">Categorie</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a href="{{asset('/development')}}">Development</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{asset('/recruitment')}}">Recruitment</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{asset('/items')}}">Second Hands</a>
                    </li>
                   
                    <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{asset('/cars')}}" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Voertuigen
              </a>
              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="portfolio-1-col.html">Auto's</a>
                <a class="dropdown-item" href="portfolio-2-col.html">Vaartuigen</a>  
              </div>
            </li>
                    <li class="nav-item">
                      <a href="{{asset('/houses')}}">Houses</a>
                    </li>
                  
                  </ul>
                 
              </div>
      
            </div>
            <img src="./img/logo.png" class="img-fluid">
          </div>
</div>




