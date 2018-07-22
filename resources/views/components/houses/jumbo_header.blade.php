


@if(auth()->check())
    <div class="row">
    @include('components.development.sidebar')
    <div class="col-lg-9">

<header class="jumbotron my-4 m-4 gb-light">
        <h1 class="display-4 text-primary">Welcome to Houses ADS</h1>
        <a class="btn btn-primary btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/house1.jpg" class="img-fluid" alt="img recruitment, iederwatwils">
        <p class="lead text-light p-3 bg-primary rounded my-3">
            Maak van uw huis een droomhuis voor anderen, of koop uw droomhuis van een ander.
            Via de mooiste zelfgemaakte video's bij <b>IederWatWils</b>
            laat u zien dat wonen een genot kad zijn. Met uw koop of verkoop
            maakt u uzelf of andere mensen blij en gelukkig. <b>IederWatWils, ONROEREND GOED IS OOK ECHT GOED!!</b>

        <b>Klik hier om te registreren: </b>
        </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
      <hr>
    


</div>
@else
<header class="jumbotron my-4 m-4 gb-light">
        <h1 class="display-4 text-primary">IederWatWils - Huis Advertentie</h1>
        <a class="btn btn-primary btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/house1.jpg" class="img-fluid" alt="img recruitment, iederwatwils">
        <p class="lead text-light p-3 bg-primary rounded my-3">
            Maak van uw huis een droomhuis voor anderen, of koop uw droomhuis van een ander.
            Via de mooiste zelfgemaakte video's bij <b>IederWatWils</b>
            laat u zien dat wonen een genot kad zijn. Met uw koop of verkoop
            maakt u uzelf of andere mensen blij en gelukkig. <b>IederWatWils, ONROEREND GOED IS OOK ECHT GOED!!</b>

        <b>Klik hier om te registreren: </b>
        </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
      <hr>
@endif