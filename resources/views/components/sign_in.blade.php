<section class="content-section bg-primary" id="sign">
	<div class="container text-center">
        <h2 class="mb-4 text-white">Start uw eerste advertentie...</h2>
			<form method="POST" action="{{ asset('/login') }}" class="form-inline justify-content-center">
			@csrf
				<div class="form-group mx-sm-3 mb-2">
					<label for="inputEmail" class="sr-only">Email</label>
					<input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email">
				</div>
			  <div class="form-group mx-sm-3 mb-2">
				<label for="inputPassword2" class="sr-only">Wachtwoord</label>
				<input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="password">
			  </div>
			<button type="submit" class="btn btn-danger mb-2">Login</button> &nbsp; &nbsp; &nbsp; 
			<a href="{{asset('/register')}}" class="btn btn-info mb-2">Aanmelden</a>
        
			
		</form>
      </div>
    </section>