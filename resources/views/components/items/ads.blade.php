<div class="row text-center">
  

  
    @foreach ($ads as $ad)
   <div class="col-lg-3 col-md-6 mb-4" id="ads">
     <div class="card">
       @foreach($ad->pictures as $pic)
         <img class="card-img-top" src="{{asset('/ads/images/'.$pic->src)}}" alt="{{$pic->alt}}">
       @endforeach
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
 </div>
 <div>
     {{$ads->links()}}
     </div>