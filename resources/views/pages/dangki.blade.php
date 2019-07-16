@extends('master')
@section('content')
	<div class="container">
		<div id="content">
			@if(count($errors))
				<div class='alert alert-danger'>
					@foreach($errors->all() as $err)
					{{ $err }}
					@endforeach
				</div>
			@endif
			@if(session('thongbao'))
			<div class='alert alert-success'>
				{{ session('thongbao') }}
			</div>
			@endif
			<form action="dangki" method="post" class="beta-form-checkout">
				{{ csrf_field() }}
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email</label>
							<input type="email" name='email' id="email" required>
						</div>

						<div class="form-block">
							<label for="your_last_name">Tên</label>
							<input type="text" name='ten' id="your_last_name" required>
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ</label>
							<input type="text" name='diachi' id="adress" required>
						</div>


						<div class="form-block">
							<label for="phone">số điện thoại</label>
							<input name='phone' type="text" id="phone" required>
						</div>
						<div class="form-block">
							<label for="phone">Mật khẩu</label>
							<input type="password" name='matkhau'  required>
						</div>
						<div class="form-block">
							<label for="phone">Nhập lại mật khẩu</label>
							<input type="password" name='matkhau1' required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng kí</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div>
@endsection