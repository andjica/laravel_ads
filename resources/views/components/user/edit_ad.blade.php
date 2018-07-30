
@if ($ad)
<div class="col-lg-6 my-4">
<h3 class="text-danger">Bewerk hier uw advertentie:</h3>
<form action="{{asset('/edit')}}" method="POST" enctype="multipart/form-data" class="my-4">
    
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1" class="text-info">Titel</label>
        <input type="text" name="title" value="{{$ad->title}}" class="form-control"required>
        
      </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1" class="text-info">Beschrijving van uw advertentie</label>
                     <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3">{{$ad->body}}</textarea>
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1" class="text-info">Telefoonnummer</label>
                    <input type="text" name="phone" value="{{$ad->phone}}" class="form-control">
                </div>
                <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="text-info">Uw Website</label>
                            <input type="text" name="website" value="{{$ad->website}}" class="form-control">
                        </div>
    
                <div class="form-group">
                <label for="exampleFormControlTextarea1" ></label>
                <input type="submit" value="Edit your ad" class="btn btn-primary">
                </div>
                
            </form>
      </div>  
    @else

    <h1 class='text-danger'>U heeft nog geen advertentie gemaakt om uw advertentie te bewerken</h1>

@endif