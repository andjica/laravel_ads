


@if(auth()->check())

   @include('components.development.sidebar')
    <div class="col-lg-9">

   <header class="jumbotron my-4 bg-light m-4">
        <h1 class="display-4 text-info"> IederWatWils - Development Advertentie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/dev1.jpeg" class="img-fluid" alt="img recruitment, iederwatwils">
        <p class="lead text-white p-3 bg-danger rounded my-3">
        Set up your website, show your andodir and ios app, show any app that will present you and your work. 
        <b>Free and securely place your ad with 5 images and description of your app! </b>
 
           <b class="text-white"> If you have not yet created your account, do it very quickly 
            and free to keep your ad on:</b>
            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
     
    </div>
    

@else
<div class="col-lg-12">
<header class="jumbotron my-4 bg-light m-4">
        <h1 class="display-4 text-info"> IederWatWils - Development Advertentie</h1>
        <a class="btn btn-danger btn-sm mb-3 js-scroll-trigger text-white" href="#ads">Find Out More</a>
        <br>
        <img src="./img/dev1.jpeg" class="img-fluid" alt="img recruitment, iederwatwils">
        <p class="lead text-white p-3 bg-danger rounded my-3">
        Set up your website, show your andodir and ios app, show any app that will present you and your work. 
        <b>Free and securely place your ad with 5 images and description of your app! </b>
 
           <b class="text-white"> If you have not yet created your account, do it very quickly 
            and free to keep your ad on:</b>
            </p>
        <a href="{{asset('/register')}}" class="btn btn-primary btn-lg">Sign up</a>
      </header>
    
  </div>
     
@endif


