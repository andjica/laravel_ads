
@if ($ad)

<form action="{{asset('/edit')}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1" class="text-info">Title</label>
        <input type="text" name="title" value="{{$ad->title}}" class="form-control"required>
        
      </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1" class="text-info">Description of your Ad</label>
                     <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3">{{$ad->body}}</textarea>
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1" class="text-info">Phone number</label>
                    <input type="text" name="phone" value="{{$ad->phone}}" class="form-control">
                </div>
                <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="text-info">Website location</label>
                            <input type="text" name="website" value="{{$ad->website}}" class="form-control">
                        </div>
    
                <div class="form-group">
                <label for="exampleFormControlTextarea1" ></label>
                <input type="submit" value="Edit your ad" class="btn btn-primary">
                </div>
                
            </form>
        
    @else

    Nemate oglas

@endif