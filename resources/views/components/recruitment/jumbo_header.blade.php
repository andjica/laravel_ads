


@if(auth()->check())
@include('components.development.sidebar')
    <div class="col-lg-9">

  <header class="jumbotron my-4 bg-muted m-4">
        <h1 class="display-4 text-info">IederWatWils - Werving Advertentie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Meer te weten komen</a>
        <br>
        <img src="{{asset('./img/rec1.jpeg')}}" class="img-fluid" alt="werving iederwatwils advertentie">
        <p class="lead text-white p-3 bg-secondary rounded my-3">
        Op zoek naar een nieuwe baan?, uw oude werksituatie is niet meer wat u wenst?
        Via een mooie uitgebreide advertentie bij IEDERWATWILS komt u wellicht in een nieuw werkomgeving terecht?!!
        <b class="text-info">Als u uw account nog 
        niet hebt gemaakt, doet u het zeer snel en gratis om uw advertentie te laten zien:</b>
        </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Aanmelden</a> 
      </header>

    </div>
    



@else
	<div class="col-lg-12">
	<header class="jumbotron my-4 bg-muted m-4">
        <h1 class="display-4 text-info">IederWatWils - Werving Advertentie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Meer te weten komen</a>
        <br>
        <img src="{{asset('./img/rec1.jpeg')}}" class="img-fluid" alt="werving iederwatwils advertentie">
        <p class="lead text-white p-3 bg-secondary rounded my-3">
        Op zoek naar een nieuwe baan?, uw oude werksituatie is niet meer wat u wenst?
        Via een mooie uitgebreide advertentie bij IEDERWATWILS komt u wellicht in een nieuw werkomgeving terecht?!! <b class="text-info">Als u uw account nog 
        niet hebt gemaakt, doet u het zeer snel en gratis om uw advertentie te laten zien:</b>
        </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Aanmelden</a>
      </header>
 </div>
@endif