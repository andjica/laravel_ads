


@if(auth()->check())
    <div class="row">
    @include('components.development.sidebar')
    <div class="col-lg-9">

   <header class="jumbotron my-4 bg-light m-4">
        <h1 class="display-4 text-info">IederWatwils - Tweede Hands Advertentie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/sec1.jpeg" class="img-fluid" alt="img recruitment, iederwatwils">
        <p class="lead text-white p-3 bg-secondary rounded my-3">

             Laat de apparatuur die u niet gebruikt op uw telefoon zien aan kleding, 
          schoenen, visuitrusting, fietsen, oude rackets, horloges, accessoires .. EveriVatVils beperkt u niet en geeft u de mogelijkheid om alles 
          wat u wilt van mobiele telefoons toe te voegen aan kleding die u niet draagt. 
            <b class="text-white">Registreer en meld je aan:</b>       
 
   
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

           
          Laat de apparatuur die u niet gebruikt op uw telefoon zien aan kleding, 
          schoenen, visuitrusting, fietsen, oude rackets, horloges, accessoires .. EveriVatVils beperkt u niet en geeft u de mogelijkheid om alles 
          wat u wilt van mobiele telefoons toe te voegen aan kleding die u niet draagt. 
            <b class="text-white">Registreer en meld je aan:</b>       
 
   
            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
      <hr>
@endif