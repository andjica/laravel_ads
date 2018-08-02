


@if(auth()->check())
   
@include('components.development.sidebar')
    <div class="col-lg-9">

	<header class="jumbotron my-4 m-4 gb-light">
        <h1 class="display-4 text-primary">Welkom bij Onroerende goederen - Advertentie</h1>
        <a class="btn btn-primary btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Meer te weten komen</a>
        <br>
        <img src="{{asset('./img/house1.jpg')}}" class="img-fluid" alt="houses iederwatwils advertentie">
        <p class="lead text-primary p-3 rounded my-3">
       
        Als jij je huis nog niet hebt verkocht dan is IederWatWils waar je moet zijn. Maak een advertentie! Toon uw huis die u wilt verkopen met veel foto's, video's. 
        Zodat u uw huis op een gemakkelijke manier kan verkopen!
            Maak van uw huis een droomhuis voor anderen, of koop uw droomhuis van een ander.
            Via de mooiste zelfgemaakte video's bij <b>IederWatWils</b>
            laat u zien dat wonen een genot kan zijn. Met uw koop of verkoop
            maakt u uw zelf of andere mensen blij en gelukkig. <b>IederWatWils, ONROEREND GOED IS OOK ECHT GOED!!</b>
            <b>Klik hier om te registreren: </b>
        </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Aanmelden</a>
      </header>
  
    


	</div>
@else
	<div class="col-lg-12">
	<header class="jumbotron my-4 m-4 gb-light">
        <h1 class="display-4 text-primary">IederWatWils - Huis Advertentie</h1>
        <a class="btn btn-primary btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Meer te weten komen</a>
        <br>
        <img src="{{asset('./img/house1.jpg')}}" class="img-fluid" alt="houses iederwatwils advertentie">
        <p class="lead text-primary p-3  rounded my-3">
            Maak van uw huis een droomhuis voor anderen, of koop uw droomhuis van een ander.
            Via de mooiste zelfgemaakte video's bij <b>IederWatWils</b>
            laat u zien dat wonen een genot kan zijn. Met uw koop of verkoop
            maakt u uwzelf of andere mensen blij en gelukkig. <b>IederWatWils, ONROEREND GOED IS OOK ECHT GOED!!</b>

        <b>Klik hier om te registreren: </b>
        </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Aanmelden</a>
      </header>
     </div>
@endif