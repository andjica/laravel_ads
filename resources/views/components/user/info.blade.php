
<div class="col-md-6 my-4">
  
    @if(!empty(session('message')))

    <p class="alert alert-success" role="alert">{{session('message')}}</p>

    @endif

    @if ($message = Session::get('success'))
    <div class="w3-panel w3-green w3-display-container">
        <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-green w3-large w3-display-topright">&times;</span>
        <p>{!! $message !!}</p>
    </div>
    <?php Session::forget('success');?>
    @endif

    @if ($message = Session::get('error'))
    <div class="w3-panel w3-red w3-display-container">
        <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-red w3-large w3-display-topright">&times;</span>
        <p>{!! $message !!}</p>
    </div>
    <?php Session::forget('error');?>
    @endif
    
<h2 class="text-info">Uw accountgegevens:</h2>
<ul class="list-group list-group-flush text-muted">
    <li class="list-group-item">Uw username: <b>{{$user->name}}</b></li>
    <li class="list-group-item">Uw email addres: <b>{{$user->email}}</b></li>
    <li class="list-group-item">Account type: <b>{{$user->account->type->type}}</b></li>
    <li class="list-group-item"><a href="{{asset('accounttypes')}}" class="btn btn-danger">Upgrade your account</a></li>
  </ul>
</div>