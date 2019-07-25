<!DOCTYPE html>
<html lang="en">
<head>
	<title>About - Foodgram</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('assets/icon_logo.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/contact/css/main.css') }}">
<!--===============================================================================================-->

	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'/>

</head>
<body>


	<div class = "frame">
        <div id = "button_open_envelope" style="text-align: center">
				Contact Us
			</div>
			<div class = "message">
				<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form">
					
					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NAME"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="MESSAGE"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								Send Your Message
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
			</div>
			<div class = "bottom"></div>			
			<div class = "left"></div>
			<div class = "right"></div>
			<div class = "top"></div>
			<script src="{{ asset('assets/contact/js/mail.js') }}"></script>
		</div>

	

<!--===============================================================================================-->
	<script src="{{ asset('assets/contact/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/contact/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets/contact/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/contact/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/contact/js/main.js') }}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

	<script src="{{ asset('assets/contact/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/contact/js/mail.js') }}"></script>

</body>
</html>
