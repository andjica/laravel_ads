<div class="row text-center" id="car_ads">
  

  
  @foreach ($ads as $ad)
 <div class="col-lg-3 col-md-6 mb-4" id="ads">
   <div class="card">
   <div class="card-header">
   <h4 class="card-title text-info">{{$ad->title}}</h4>
           </div>
       <img class="card-img-top" src="{{asset('/ads/images/'.$ad->pictures[0]->src)}}" alt="{{$ad->pictures[0]->alt}}">
     
     <div class="card-body">
    
      
       <hr>
       <p class="text-info"></b> {{$ad->body}}</p>
       <p class="text-info">Website Location</b> {{$ad->website}}</p>
       <p class="text-warning"><b>Posted by {{$ad->user->name}} on: </b><b class="text-info">{{$ad->created_at}}</b></p>
     </div>
     <div class="card-footer">
       <a href="{{asset('/ad/'.$ad->id)}}" class="btn btn-primary">Find Out More!</a>
     </div>
   </div>
  
 </div>
 @endforeach
</div>
<div>
   {{$ads->links()}}
   </div>