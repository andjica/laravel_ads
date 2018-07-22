<div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-5" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @foreach ($ad->pictures as $pic)


                @if ($loop->first)
                  <div class="carousel-item active">
                      <img class="d-block img-fluid" src="{{asset('/ads/images/'.$pic->src)}}" style="max-height:320px !important; width: 820px !important;" alt="First slide">
                  </div>
                @endif
                  <div class="carousel-item">
                      <img class="d-block img-fluid" src="{{asset('/ads/images/'.$pic->src)}}" style="max-height:320px !important; width: 820px !important;" alt="First slide">
                  </div>


              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
    </div>
       
    
    </div>