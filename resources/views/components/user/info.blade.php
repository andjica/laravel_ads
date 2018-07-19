
<div class="col-md-6 my-4">
<h2 class="text-info">Your account details:</h2>
<ul class="list-group list-group-flush text-muted">
    <li class="list-group-item">Your username: <b>{{$user->name}}</b></li>
    <li class="list-group-item">Your email addres: <b>{{$user->email}}</b></li>
    <li class="list-group-item">Title of your ads: <b>{{$user->ad ? $user->ad->title : 'None'}}</b></li>
    <li class="list-group-item">Content of your ads:</li>
    <li class="list-group-item"><button type="button" class="btn btn-danger">Make a change</button></li>
  </ul>
</div>