


@if(auth()->check())
    <div class="row">
    @include('components.development.sidebar')
    <div class="col-lg-9">

   <header class="jumbotron my-4 bg-dark m-4">
        <h1 class="display-4 text-info">IederWatwils - Tweede Hands</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/sec1.jpeg" class="img-fluid" alt="img development, iederwatwils">
        <p class="lead text-white p-3 bg-danger rounded my-3">
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
<header class="jumbotron my-4 bg-light m-4">
        <h1 class="display-4 text-info">IederWatwils - Tweede Hands</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/sec1.jpeg" class="img-fluid" alt="img recruitment, iederwatwils">
        <p class="lead text-white p-3 bg-secondary rounded my-3">

            Laat je vistuig zien dat je niet gebruikt of voeg je oude telefoon toe. IederWatWils beperkt je niet en geeft je de mogelijkheid om wat je maar wilt van mobiele telefoons toe te voegen aan de kleding die je niet draagt. 
            <b class="text-white">Registreer en meld je aan:</b>       
 
   
            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
      <hr>
@endif