
<div class="col-md-6 my-4">
  
    @if(!empty(session('message')))

    <p class="alert alert-success" role="alert">{{session('message')}}</p>

    @endif

    @if ($message = Session::get('success'))
   
    
        <p class="alert alert-success">{!! $message !!}</p>

    <?php Session::forget('success');?>
    @endif

    @if ($message = Session::get('error'))
    <p class="alert alert-success">{!! $message !!}</p>
    <?php Session::forget('error');?>
    @endif
    
<h2 class="text-info">Uw accountgegevens:</h2>
<ul class="list-group list-group-flush text-muted">
    <li class="list-group-item">Uw gebruikersnaam: <b>{{$user->name}}</b></li>
    <li class="list-group-item">Uw email adres: <b>{{$user->email}}</b></li>
    <li class="list-group-item">Account versie: <b>{{$user->account->type->type}}</b></li>
    <li class="list-group-item"><a href="{{asset('accounttypes')}}" class="btn btn-danger">Upgrade uw account</a></li>
  </ul>
</div>