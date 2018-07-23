@foreach($ads as $ad)
<div class="col-lg-4 mb-4 mt-4">
          <div class="card h-100 bg-secondary">
            <h4 class="card-header text-white">{{$ad->title}}</h4>
            <div class="card-body bg-white">
            @foreach ($ad->pictures as $pic)
            <img class="card-img-top" src="{{asset('/ads/images/'.$pic->src)}}" alt="{{$pic->alt}}">
            @endforeach
              <p class="card-text text-info">{{$ad->body}}</p>
            </div>
            <div class="card-footer">
              <a href="{{$ad->id}}" class="btn btn-primary">Zie meer</a>
            </div>
          </div>
         
        </div>
        @endforeach
       {{--  <div class="col-lg-4 mb-4 mt-4">
          <div class="card h-100 bg-secondary">
            <h4 class="card-header text-white">Card Title</h4>
            <div class="card-body bg-white">
            <a href="#"><img class="card-img-top" src="./img/service4.jpeg" alt=""></a>
              <p class="card-text text-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Zie meer</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 mt-4">
          <div class="card h-100 bg-secondary">
            <h4 class="card-header text-white">Card Title</h4>
            <div class="card-body bg-white">
            <a href="#"><img class="card-img-top" src="./img/service4.jpeg" alt=""></a>
              <p class="card-text text-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Zie meer</a>
            </div>
          </div>
        </div> --}}
        

