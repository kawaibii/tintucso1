@extends('master')
@section('content')
	<div class="container">
		<div id="content">
			
			<form action="dangnhap" method="post" class="beta-form-checkout">
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						@if(session('thongbao'))
						<div class='alert alert-danger'>
							{{ session('thongbao') }}
						</div>
						@endif
						<h2>Đăng nhập</h2>
						{{ csrf_field() }}
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address</label>
							<input name='email' type="email" id="email" required>
						</div>
						<div class="form-block">
							<label for="phone">Password</label>
							<input type="password" name="matkhau" id="phone" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div>
@endsection