


@if(auth()->check())
    <div class="row">
    @include('components.development.sidebar')
    <div class="col-lg-9">

   <header class="jumbotron my-4 bg-dark m-4">
   <h1 class="display-4 text-info">IederWatWils - Requiter Advertentie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/rec1.jpeg" class="img-fluid" alt="img recruitment, iederwatwils">
        <p class="lead text-info">
          If you have not yet found a job, <b>Iederwatwils</b> allows you to place your ad in less than two minutes. Be creative, describe your knowledge whether it is in the field of IT, or in the field of food industry. Iederwatwils gives support to everyone to get hired.
           Change your status from an unemployed to an employee!
 
           <b class="text-white"> If you have not yet created your account, do it very quickly 
            and free to keep your ad on:</b>
            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
      <hr>
    </div>
    


</div>
@else
<header class="jumbotron my-4 bg-dark m-4">
        <h1 class="display-4 text-info">IederWatWils - Requiter Advertentie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/rec1.jpeg" class="img-fluid" alt="img recruitment, iederwatwils">
        <p class="lead text-white p-3 bg-secondary rounded my-3">
        Als je nog geen baan hebt gevonden, kun je met 
        Elkwatwils je advertentie in minder dan twee minuten plaatsen. 
        Wees creatief, beschrijf je kennis, of het nu op het gebied van IT 
        is of op het gebied van de voedingsmiddelenindustrie. Iederwatwils geeft 
        iedereen steun om te worden ingehuurd. Verander uw status van een werkloze 
        naar een werknemer! <b class="text-info">Als u uw account nog 
        niet hebt gemaakt, doet u het zeer snel en gratis om uw advertentie op te laten:</b>
 

            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
      <hr>
@endif