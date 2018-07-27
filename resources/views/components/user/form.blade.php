

<div class="col-lg-6 my-4">
        @if(auth()->user()->ad)
            <h1 class="text-danger">You already have an ad, please wait for it to expire!<br>
                
            </h1>
            <h3 class="text-info">It will expire {{Carbon\Carbon::parse(auth()->user()->ad->expires)->diffForHumans()}}, on {{auth()->user()->ad->created_at}}</h3>
            <h6 class='text-success'>
                You can see your ad <a href="{{asset('user_ads')}}">here</a>
            </h6>
        @else
    <h3 class="text-info"><i class="fa fa-star text-danger" style="font-size:48px;"></i>Make your Ad quickly</h3>

    @if(count($errors->all()))
        <ul class="list-group">
            @foreach($errors->all() as $e)
        
                <li class="list-group-item list-group-item-danger">{{$e}}</li>
        
            @endforeach
        </ul>
    @endif

        @if(!empty(session('message')))

            <p class="alert alert-success" role="alert">{{session('message')}}</p>

        @endif

    
<form action="{{asset('/insert')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="form-group">
    <label for="exampleFormControlInput1" class="text-info">Title</label>
    <input type="text" name="title" class="form-control">
    
  </div>
            <div class="form-group">
             <label for="exampleFormControlSelect1" class="text-info">Choice category</label>   
                <select id="category" name="category" class="form-control text-secondary">
                    <option value="0">Pick...</option>
                    @foreach ($categories as $c)
                        <option value="{{$c->id}}">{{$c->category}}</option>
                    @endforeach
                </select>
            </div>
            <div id="sub">
                {{-- MESTO ZA DROPDOWN SUBKATEGORIJE --}}
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1" class="text-info">Description of your Ad</label>
                 <textarea class="form-control"  name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1" class="text-info">Phone number</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="text-info">Website location</label>
                        <input type="text" name="website" class="form-control">
                    </div>

            <div class="form-group">
          
            @can('upload-video')
                <label for="exampleFormControlTextarea1" class="text-info">Select video</label>
                    <input type="file" name="videos[]" class="form-control" multiple>
                </div>
            @endcan

            <div class="form-group">
            <label for="exampleFormControlTextarea1" class="text-info">Select picture</label>
                <input type="file" name="pictures[]" class="form-control" multiple>
            </div>

            <div class="form-group">
            <label for="exampleFormControlTextarea1" ></label>
            <input type="submit" value="Post your ad" class="btn btn-primary">
            </div>
            
        </form>
</div>
<div class="col-lg-3">
         
        
</div>
@endif