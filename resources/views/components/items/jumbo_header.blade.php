


@if(auth()->check())
	@include('components.development.sidebar')
    <div class="col-lg-9">

   <header class="jumbotron my-4 bg-light m-4">
        <h1 class="display-4 text-info">IederWatwils - TweedeHands Advertentie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Meer te weten komen</a>
        <br>

        <img src="{{asset('./img/sec1.jpeg')}}" class="img-fluid" alt="tweede hands iederwatwils advertientie">
        <p class="lead text-white p-3 bg-secondary rounded my-3">

          U bent uw spulletjes zat, maar gunt het een 2e kans?, u hebt teveel en wilt iets minder?
          Via IEDERWATWILS profiteert u van de beste winst, en maakt andere mensen blij met uw eerdere aankoop. Een mooie win win situatie!    
          <b class="text-white">Registreer en meld je aan:</b>       
          </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Aanmelden</a>

      </header>
  
    </div>
    



@else
	<div class="col-lg-12">
<header class="jumbotron my-4 bg-light m-4">
        <h1 class="display-4 text-info">IederWatwils - TweedeHands</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Meer te weten komen</a>
        <br>
        <img src="./img/sec1.jpeg" class="img-fluid" alt="tweede hands iederwatwils advertientie">
        <p class="lead text-white p-3 bg-secondary rounded my-3">

           
          Laat de apparatuur die u niet gebruikt op uw telefoon zien aan kleding, 
          schoenen, uitrusting, fietsen, oude rackets, horloges, accessoires .. IderWatWils beperkt u niet en geeft u de mogelijkheid om alles 
          wat u wilt van mobiele telefoons toe te voegen aan kleding die u niet draagt. 
            <b class="text-white">Registreer en meld je aan:</b>       
          </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Aanmelden</a>
      </header>
   </div>
@endif