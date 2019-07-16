@extends('master')
@section('content')
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.03109964766!2d105.83837381492957!3d21.031441593062663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9801877057%3A0xcc81d20ff35b596d!2zMjhCIMSQaeG7h24gQmnDqm4gUGjhu6csIMSQaeG7h24gQsOgbiwgQmEgxJDDrG5oLCBIw6AgTuG7mWksIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1556905704249!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>liên hệ với chúng tôi</h2>
					<div class="space20">&nbsp;</div>
					<p>chúng tôi rất cần góp ý của các bạn</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Your Name (required)">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Your Email (required)">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Subject">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="Your Message"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">gửi <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				
			</div>
		</div> <!-- #content -->
	</div>
@endsection