<section class="p-1 bg-muted text-muted text-center" id="sign">
<img src="./img/logo.png" class="img-fluid" style="width:50%; height:50%;"/>
      <div class="container text-center">
        <h3 class="mb-4">Sign in to start your ads...</h3>
			<form class="form-inline justify-content-center" method="POST" action="{{asset('/login')}}">
				@csrf
				<div class="form-group mx-sm-3 mb-2">
					<label for="inputEmail" class="sr-only">Email</label>
					<input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email">
				</div>
			  <div class="form-group mx-sm-3 mb-2">
				<label for="inputPassword2" class="sr-only">Password</label>
				<input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="password">
			  </div>
			<button type="submit" class="btn btn-danger mb-2">Sing in</button> &nbsp; &nbsp; &nbsp; 
        
			
		</form>
		
      
			</div>
			<hr>
    </section>