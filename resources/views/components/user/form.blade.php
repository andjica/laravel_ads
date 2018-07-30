

<div class="col-lg-6 my-4">
        @if(auth()->user()->ad)
            <h1 class="text-danger">U heeft al een advertentie, wacht tot uw advertentie is verlopen!<br>
                
            </h1>
            <h3 class="text-info">Uw advertentie eindigt: {{Carbon\Carbon::parse(auth()->user()->ad->expires)->diffForHumans()}}, on {{auth()->user()->ad->created_at}}</h3>
            <h6 class='text-success'>
                U kan uw advertentie hier <a href="{{asset('user_ads')}}">bekijken</a>
            </h6>
        @else
    <h3 class="text-info"><i class="fa fa-star text-danger" style="font-size:48px;"></i>Maak snel uw advertentie</h3>

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
    <label for="exampleFormControlInput1" class="text-info">Titel</label>
    <input type="text" name="title" class="form-control">
    
  </div>
            <div class="form-group">
             <label for="exampleFormControlSelect1" class="text-info">Choice category</label>   
                <select id="category" name="category" class="form-control text-secondary">
                    <option value="0">Kies uw Categorie</option>
                    @foreach ($categories as $c)
                        <option value="{{$c->id}}">{{$c->category}}</option>
                    @endforeach
                </select>
            </div>
            <div id="sub">
                {{-- MESTO ZA DROPDOWN SUBKATEGORIJE --}}
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1" class="text-info">Beschrijving van uw advertentie</label>
                 <textarea class="form-control"  name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1" class="text-info">Telefoonnummer</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1" class="text-info">Uw website</label>
                        <input type="text" name="website" class="form-control">
                    </div>

            <div class="form-group">
          
            @can('upload-video')
                <label for="exampleFormControlTextarea1" class="text-info">Selecteer video's</label>
                    <input type="file" name="videos[]" class="form-control" multiple>
                </div>
            @endcan

            <div class="form-group">
            <label for="exampleFormControlTextarea1" class="text-info">Selecteer foto's - Markeer 1 en meer foto's tegelijk</label>
                <input type="file" name="pictures[]" class="form-control" multiple>
            </div>

            <div class="form-group">
            <label for="exampleFormControlTextarea1" ></label>
            <input type="submit" value="Plaats uw advertentie" class="btn btn-primary">
            </div>
            
        </form>
</div>
<div class="col-lg-3">
         
        
</div>
@endif