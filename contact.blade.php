@extends('templates.template')

@section('content')
  <div class="wrapper">
	<div class="container contact">
      <h2>Contact form</h2>
				<form id="contactform">
					<div class="form-group row">
				    <label for="name" class="col-sm-2  col-form-label">Your Name:</label>
				    <div class="col-sm-10">
				      <input type="text"  id="name" class="border border-secondary">
				    </div>
				  </div>
				  <div class="form-group row">
				    <label for="email" class="col-sm-2  col-form-label">Your E-mail:</label>
				    <div class="col-sm-10">
				      <input type="text" id="email" class="border border-secondary">
				    </div>
				  </div>
					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label">Your Message:</label>
						<div class="col-sm-10">
							<textarea name="textarea" cols="100" rows="5"   id="message" class="border border-secondary"></textarea>
						</div>
					</div>
					<div class="float-right">
						   	<a href="#"   onclick="document.getElementById('ContactForm').submit()">Send</a>
								<a href="#"  onclick="document.getElementById('ContactForm').reset()">Clear</a>
					</div>
						</form>
		    </div>
	  </div>


@endsection
