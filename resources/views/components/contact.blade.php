<div class="container">
<div class="row p-4">
<!-- Map -->
	<div class="col-lg-4 my-5">
		<section id="contact">
		<img src="{{asset('/img/logo.png')}}" class="img-fluid" alt="IederWatWils logo"/>
		<video width="340" height="250" controls>

	<source src="{{asset('/')}}/video/iw_home_page.mp4" type="video/mp4">
	
		</video>
		</section>
		
	</div>
	
	
	<div class="col-lg-4 my-5">
	
	<form class="form-group" method="POST" action="{{asset('/send')}}">
		@csrf
		<h3 class="text-primary text-center">Stuur ons een bericht voor meer informatie
</h3>
				<div class="form-group mx-sm-5 mb-2">
					<label for="inputEmail" class="sr-only">Email</label>
					<input type="text" class="form-control" name="mail" id="inputEmail" placeholder="Email">
				</div>
			  <div class="form-group mx-sm-5 mb-2">
				<label for="inputPassword" class="sr-only">Telefoonnummer</label>
				<input type="text" class="form-control" name="phone" id="inputPassword" placeholder="Telefoonnummer">
			  </div>
			  <div class="form-group mx-sm-5 mb-2">
			
				<textarea rows="10" cols="100" class="form-control" name="body" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
			  </div>
			 <div class="form-group mx-sm-5 mb-2">
				<input type="submit" class="btn btn-danger mb-2" value="Verzend">
				
			  </div>
			
        
			
		</form>
	</div>
	<div class="col-lg-4 text-info my-5">
			<h2 class=" style_white">
				Neem contact met ons op</h2>
			  <address>
				<strong>IederWatWils</strong>
			  </address>
			<address>
				<abbr title="Web site">Web site:</abbr>
				<a href="http://www.iederwatwils.nl/" class="text-danger">www.iederwatwils.nl</a>
			  </address>
			  <address>
				<abbr title="Email">Email:</abbr>
				<a href="mailto:info@iederwatwils.nl" class="text-danger">info@iederwatwils.nl</a>
			  </address>	
                        <span itemprop="telephone"><a href="tel:+31651119923" class="text-danger">
                                    
                             <i class="fa fa-phone"></i> +316 51 119 923</a>
                            </span><br>
                         
			  <p class="my-4">Voor meer informatie betreft de advertenties kunt u ons mailen of telefonisch bellen, wij staan klaar om al uw vragen te beantwoorden.
				</p>
	</div>
	</div>
	</div>
	<hr>