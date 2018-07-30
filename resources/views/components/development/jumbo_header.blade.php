


@if(auth()->check())

   @include('components.development.sidebar')
    <div class="col-lg-9">

   <header class="jumbotron my-4 bg-light m-4">
        <h1 class="display-4 text-info"> IederWatWils - Ontwikkelingen Advertenties</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Meer te weten komen</a>
        <br>
        <img src="{{asset('./img/dev1.jpeg')}}" class="img-fluid" alt="development iederwatwils advertentie">
        <p class="lead text-white p-3 bg-danger rounded my-3"> Stel uw website in, toon uw android en iOS-app, 
        toon elke app die u en uw werk presenteert. 
        Plaats uw advertentie gratis en veilig met 5 
        afbeeldingen en een beschrijving van uw app of website! 
        <b>Als u uw account nog niet heeft gemaakt, doet u het 
        zeer snel en gratis om uw advertentie te laten zien:</b>

            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Aanmelden</a>
      </header>
     
    </div>
    

@else
<div class="col-lg-12">
<header class="jumbotron my-4 bg-light m-4">
        <h1 class="display-4 text-info"> IederWatWils - Ontwikkelingen Advertenties</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Meer te weten komen</a>
        <br>
        <img src="{{asset('./img/dev1.jpeg')}}" class="img-fluid" alt="development iederwatwils advertentie">
        <p class="lead text-white p-3 bg-danger rounded my-3">Stel uw website in, toon uw android en iOS-app, 
        toon elke app die u en uw werk presenteert. 
        Plaats uw advertentie gratis en veilig met 5 
        afbeeldingen en een beschrijving van uw app! 
        <b>Als u uw account nog niet heeft gemaakt, doet u het 
        zeer snel en gratis om uw advertentie te laten zien:</b>

            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Aanmelden</a>
      </header>
    
  </div>
     
@endif


