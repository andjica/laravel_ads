


@if(auth()->check())
   @include('components.development.sidebar')
   
    <div class="col-lg-9">

   <header class="jumbotron my-4 m-4 bg-white">
        <h1 class="display-4 text-info"> IederWatWils - Bedrijf promotie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="{{asset('./img/comp.jpeg')}}" class="img-fluid" alt="img autos, iederwatwils">
        <p class="lead text-white p-3 bg-danger rounded my-3">
          Kan uw bedrijf een boost gebruiken, of heeft uw bedrijf extra mankracht nodig?
          <b>IederWatWils</b> kan het voor u leveren. Maak een doeltreffende en aantrekkelijke advertentie
          via IederWatWils met de mooiste foto's en zalfgemaakte video's en uw bedrijf is binnen no time weer waar het 
          geweest is, en zelfs verder!!
        <b class="text-white"> 
            Heeft u nog geen account?? Registreer dan snel en gratis:
          </b>
            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
   
    </div>
    


</div>
@else
	<div class="col-lg-12">
	<header class="jumbotron my-4 m-4 bg-white">
        <h1 class="display-4 text-info"> IederWatWils - Voertuigen Advertentie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="{{asset('./img/comp.jpeg')}}" class="img-fluid" alt="img autos, iederwatwils">
        <p class="lead text-white p-3 bg-danger rounded my-3">
          Kan uw bedrijf een boost gebruiken, of heeft uw bedrijf extra mankracht nodig?
          <b>IederWatWils</b> kan het voor u leveren. Maak een doeltreffende en aantrekkelijke advertentie
          via IederWatWils met de mooiste foto's en zalfgemaakte video's en uw bedrijf is binnen no time weer waar het 
          geweest is, en zelfs verder!!
        <b class="text-white"> 
            Heeft u nog geen account?? Registreer dan snel en gratis:
          </b>
            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
     </div>
@endif