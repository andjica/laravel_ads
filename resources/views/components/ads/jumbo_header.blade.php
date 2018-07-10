


@if(auth()->check())
    <div class="row">
    @include('components.development.sidebar')
    <div class="col-lg-9">

    <header class="jumbotron my-4">
        <h1 class="display-4 text-info">Weclome to Development ADS</h1>
        <img src="./img/dev1.jpeg" class="img-fluid">
        <p class="lead">Here you can post yourhjg hujkhj ads and modified it ghghg!</p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
      </header>
    </div>
    


</div>
@else
<header class="jumbotron my-4">
        <h1 class="display-4 text-info">Welcome to Development ADS</h1>
        <img src="./img/dev1.jpeg" class="img-fluid">
        <p class="lead">Here you can post your ads and modified it!</p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
      </header>
@endif


