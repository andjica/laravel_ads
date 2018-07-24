
<!-- trebace ti title, content, username, datum -->
 <div class="card card-outline-secondary ">
            <div class="card-header">
              <h3 class="text-muted">{{$ad->title}}</h3>
            </div>
            <div class="card-body">
              <p class="text-info">
              {{$ad->body}}</p>
              <p class="text-muted">Posted by <b>{{$ad->user->name}} </b>on {{$ad->created_at}}</p>
              <hr>
              <h4 class="text-muted">Telefoon nummer: <b class="text-info">{{$ad->phone}}</b></h4>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            </div>
          </div>
          

