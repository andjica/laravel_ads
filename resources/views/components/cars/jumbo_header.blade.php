


@if(auth()->check())
    <div class="row">
    @include('components.development.sidebar')
    <div class="col-lg-9">

   <header class="jumbotron my-4 bg-dark m-4">
        <h1 class="display-4 text-info">Welcome to Recruitment ADS</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/dev1.jpeg" class="img-fluid" alt="img development, iederwatwils">
        <p class="lead text-white p-3 bg-danger rounded my-3">
          If you have not yet found a job, <b>Iederwatwils</b> allows you to place your ad in less than two minutes. Be creative, describe your knowledge whether it is in the field of IT, or in the field of food industry. Iederwatwils gives support to everyone to get hired.
           Change your status from an unemployed to an employee!
      </header>
      <hr>
    </div>
    


</div>
@else
<header class="jumbotron my-4 m-4" style="background-color:#68A5BD;">
        <h1 class="display-4 text-white"> IederWatWils - Voertuigen Advertentie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/car1.jpeg" class="img-fluid" alt="img autos, iederwatwils">
        <p class="lead text-white p-3 bg-dark rounded my-3">
        Set up your website, show your andodir and ios app, show any app that will present you and your work. 
        <b>Free and securely place your ad with 5 images and description of your app! </b>
 
           <b class="text-primary"> If you have not yet created your account, do it very quickly 
            and free to keep your ad on:</b>
            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
      <hr>
@endif