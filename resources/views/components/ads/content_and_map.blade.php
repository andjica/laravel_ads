
<!-- trebace ti title, content, username, datum -->
 <div class="card card-outline-secondary ">
            <div class="card-header">
              <h3 class="text-muted">{{auth()->user()->ad->title}}</h3>
            </div>
            <div class="card-body">
              <p class="text-info">
              {{auth()->user()->ad->body}}</p>
              <p class="text-muted">Posted by <b>{{auth()->user()->name}} </b>on {{auth()->user()->ad->created_at}}</p>
              <hr>
              <section id="contact" class="map">
      <iframe width="100%" height="60%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
      <br/>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
    </section>
            </div>
          </div>
          
