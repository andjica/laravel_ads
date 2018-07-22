


@if(auth()->check())
   @include('components.development.sidebar')
   
    <div class="col-lg-9">

   <header class="jumbotron my-4 m-4" style="background-color:#68A5BD;">
        <h1 class="display-4 text-white"> IederWatWils - Voertuigen Advertentie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/car1.jpeg" class="img-fluid" alt="img autos, iederwatwils">
        <p class="lead text-white p-3 bg-danger rounded my-3">
        Auto, Motor, Scooter, Camper, Tractor, of wat dan ook, met een mooie
        uitgebreide advertentie bij <b>IEDERWATWILS</b> verkoopt u uw voertuig supersnel en
        met de meeste winst. Laat vee1 mooie fotoʼs, en een zelfgemaakte video zien dat verkoopt! 
        <b class="text-white"> 
            Heeft u nog geen account?? Registreer dan snel en gratis
          </b>
            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
   
    </div>
    


</div>
@else
	<div class="col-lg-12">
	<header class="jumbotron my-4 m-4" style="background-color:#68A5BD;">
        <h1 class="display-4 text-white"> IederWatWils - Voertuigen Advertentie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/car1.jpeg" class="img-fluid" alt="img autos, iederwatwils">
        <p class="lead text-white p-3 bg-danger rounded my-3">
        Auto, Motor, Scooter, Camper, Tractor, of wat dan ook, met een mooie
        uitgebreide advertentie bij <b>IEDERWATWILS</b> verkoopt u uw voertuig supersnel en
        met de meeste winst. Laat vee1 mooie fotoʼs, en een zelfgemaakte video zien dat verkoopt! 
        <b class="text-white"> 
            Heeft u nog geen account?? Registreer dan snel en gratis
          </b>
            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
     </div>
@endif