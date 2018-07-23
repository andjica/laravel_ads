
@foreach($ads as $ad)
<div class="col-lg-4 mb-4 mt-4">
          <div class="card h-100 bg-secondary">
            <h4 class="card-header text-white">{{$ad->title}}</h4>
            <div class="card-body bg-white">
            <img class="card-img-top" src="{{asset('/ads/images/'.$ad->pictures[0]->src)}}" alt="{{$ad->pictures[0]->alt}}">
              <p class="card-text text-info">{{$ad->body}}</p>
            </div>
            <div class="card-footer">
              <a href="{{$ad->id}}" class="btn btn-primary">Zie meer</a>
            </div>
          </div>
         
        </div>
        @endforeach
        

