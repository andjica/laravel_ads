
@foreach($ads as $ad)
<div class="col-lg-4 mb-4 mt-4">
          <div class="card h-100 bg-info">
            <h4 class="card-header text-white">{{$ad->title}}</h4>
            <div class="card-body bg-white">
            
            <p class="card-text text-info">Telefoonnummer:{{$ad->phone}}</p>
             
            <img class="card-img-top" src="{{asset('/ads/images/'.$ad->pictures[0]->src)}}" alt="{{$ad->pictures[0]->alt}}">
            <p class="my-4 text-warning">Geplaatst op: {{$ad->created_at}}</p>
            <p class="text-warning">Geplaatst door: {{$ad->user->name}} </p>
            </div>
            <div class="card-footer">
              <a href="{{$ad->id}}" class="btn btn-primary">Zie meer</a>
            </div>
          </div>
         
        </div>
@endforeach        

