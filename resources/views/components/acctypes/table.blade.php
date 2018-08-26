
<hr>
<div class="col-lg-3"  id="table1">
    <h3 class="text-info">Bekijk onze aantrekkelijke pakketten</h3>
</div>
<table class="table table-bordered table-dark text-center text-info">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gratis</th>
      <th scope="col">Pro <span class="text-warning">★ ★ ★</span></th>
      <th scope="col">Premium <span class="text-warning">★ ★ ★ ★ ☆</span></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="text-white">Advertenties</th>
      <td>1 </td>
      <td>1 </td>
      <td>1 </td>
    </tr>
    <tr>
      <th scope="row" class="text-white">Web link</th>
      <td>nee</td>
      <td>nee</td>
      <td>ja</td>
    </tr>
    <tr>
      <th scope="row" class="text-white">Beschrijving</th>
      <td>ja</td>
      <td>ja</td>
      <td>ja</td>
    </tr>
    <tr>
      <th scope="row" class="text-white">Foto's</th>
      <td>5</td>
      <td>15</td>
      <td>25</td>
    </tr>
    <tr>
      <th scope="row" class="text-white">Video's</th>
      <td>nee</td>
      <td>1 Video</td>
      <td>3 Video's</td>
    </tr>
    <tr>
      <th scope="row" class="text-white">Categorie</th>
      <td>1</td>
      <td>1</td>
      <td>1</td>
    </tr>
    <tr>
      <th scope="row" class="text-white">Prijzen</th>
      <td><b class="text-white">/</b></td>
      <td><b class="text-secondary">€ 14,95</b></td>
      <td><b class="text-secondary">€ 29,95</b></td>
    </tr>
    @if(auth()->check())
      <tr>
        <td></td>
        <td></td>
        <td> 
          @if(auth()->user()->account->type->id == 2 || auth()->user()->account->type->id == 3)
          <span class="badge badge-success">In gebruik</span>
            @else
            <form method="POST" action="{{asset('/upgrade-pro')}}">
              @csrf
              <input type="image" name="submit" border="0"
              src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
              alt="Buy Now">
              <img alt="" border="0" width="1" height="1"
              src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
            </form>
            
            @endif
          </td>
          <td>
              @if(auth()->user()->account->type->id != 3)
              <form method="POST" action="{{asset('/upgrade-super')}}">
                @csrf
                <input type="image" name="submit" border="0"
                src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                alt="Buy Now">
                <img alt="" border="0" width="1" height="1"
                src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
              </form>
              @else
                <span class="badge badge-success">In gebruik</span>
              @endif
            </td>
        </tr>
      @endif
  </tbody>
</table>