@extends('layouts.frontend.app')

@section('title','About')


@push('css')
    
@endpush
@section('content')


<article class="post-single" >
      
        <div class="post-contents" >
            <div class="post-contents-inner" >
             
	<div class = "frame" style="margin-bottom:150px">
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

	</div>
</div>
</article>

@endsection

@push('js')
    
@endpush