<div class="row text-center">

  @foreach($ads as $ad)
  <div class="col-lg-3 col-md-6 mb-4" id="ads">
    <div class="card">
      <img class="card-img-top" src="{{asset('ads/images/'.$ad->pictures[0]->src)}}" alt="{{$ad->pictures[0]->alt}}">
      <div class="card-body">
        <h4 class="card-title">{{$ad->title}}</h4>
        <p class="card-text">{{$ad->body}}</p>
      </div>
      <div class="card-footer">
      <a href="{{asset('/ad/'.$ad->id)}}" class="btn btn-primary">Find Out More!</a>
      </div>
    </div>
  </div>
  @endforeach
  {{$ads->links()}}
  {{-- <div class="col-lg-3 col-md-6 mb-4">
    <div class="card">
      <img class="card-img-top" src="http://placehold.it/500x325" alt="">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Find Out More!</a>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card">
      <img class="card-img-top" src="http://placehold.it/500x325" alt="">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Zie meer!</a>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card">
      <img class="card-img-top" src="http://placehold.it/500x325" alt="">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
      </div>
      <div class="card-footer">
        <a href="#" class="btn btn-primary">Zie meer!</a>
      </div>
    </div>
  </div>
</div> --}}