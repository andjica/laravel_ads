


@if(auth()->check())
    <div class="row">
    @include('components.development.sidebar')
    <div class="col-lg-9">

   <header class="jumbotron my-4 bg-dark m-4">
        <h1 class="display-4 text-info">Welcome to Recruitment ADS</h1>
        <a class="btn btn-danger btn-xl js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/sec1.jpeg" class="img-fluid" alt="img development, iederwatwils">
        <p class="lead text-info">
          If you have not yet found a job, <b>Iederwatwils</b> allows you to place your ad in less than two minutes. Be creative, describe your knowledge whether it is in the field of IT, or in the field of food industry. Iederwatwils gives support to everyone to get hired.
           Change your status from an unemployed to an employee!
      </header>
      <hr>
    </div>
    


</div>
@else
<header class="jumbotron my-4 bg-dark m-4">
        <h1 class="display-4 text-info">Welcome to Second Hand ADS</h1>
        <a class="btn btn-danger btn-xl js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/sec1.jpeg" class="img-fluid" alt="img recruitment, iederwatwils">
        <p class="lead text-info">
        Set up your website, show your andodir and ios app, show any app that will present you and your work. 
        <b>Free and securely place your ad with 5 images and description of your app! </b>
 
           <b class="text-white"> If you have not yet created your account, do it very quickly 
            and free to keep your ad on:</b>
            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
      <hr>
@endif