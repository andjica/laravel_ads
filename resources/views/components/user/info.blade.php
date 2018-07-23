
<div class="col-md-6 my-4">
  
    @if(!empty(session('message')))

    <p class="alert alert-success" role="alert">{{session('message')}}</p>

    @endif
<h2 class="text-info">Uw accountgegevens:</h2>
<ul class="list-group list-group-flush text-muted">
    <li class="list-group-item">Uw username: <b>{{$user->name}}</b></li>
    <li class="list-group-item">Uw email addres: <b>{{$user->email}}</b></li>
    <li class="list-group-item">Account type: <b>{{$user->account->type->type}}</b></li>
    <li class="list-group-item"><button type="button" class="btn btn-danger">Make a change</button></li>
  </ul>
</div>