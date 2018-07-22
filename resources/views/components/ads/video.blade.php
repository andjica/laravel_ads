
@foreach($ad->videos as $video)
<!--Petlja mora za ceo col-lg12-->
<div class="col-lg-12 my-3">

<video width="1100" height="400" controls>

  <source src="{{asset('/ads/videos/'.$video->src)}}" type="video/mp4">
  Your browser does not support the video tag.
</video>
</div>
@endforeach
<!-- -->



