<div class="col-lg-6 my-4">
    <h3 class="text-info"><i class="fa fa-star text-danger" style="font-size:48px;"></i>Make your Ad quickly</h3>
    
<form action="{{asset('/insert')}}" method="POST" enctype="multipart/form-data">
<div class="form-group">
    <label for="exampleFormControlInput1" class="text-info">Title</label>
    <input type="text" name="title" class="form-control"required>
    
  </div>
            {{ csrf_field() }}
            <div class="form-group">
             <label for="exampleFormControlSelect1" class="text-info">Choice category</label>   
                <select name='category' class="form-control text-secondary">
                    @foreach ($categories as $c)
                        <option value="{{$c->id}}">{{$c->category}}</option>
                    @endforeach
                </select>
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
          
            <label for="exampleFormControlTextarea1" class="text-info">Select video</label>
                <input type="file" name="videos[]" class="form-control" multiple>
            </div>


            <div class="form-group">
            <label for="exampleFormControlTextarea1" class="text-info">Select picture</label>
                <input type="file" name="pictures[]" class="form-control" multiple>
            </div>

            <div class="form-group">
            <label for="exampleFormControlTextarea1" ></label>
            <input type="submit" value="Post your ad" class="btn btn-primary">
            </div>
            
        </form>

         @foreach($errors->all() as $e)
            {{$e}} </br>
        @endforeach

        @if(!empty(session('message')))

            {{session('message')}}

        @endif
</div>
<div class="col-lg-3">
         
        
</div>