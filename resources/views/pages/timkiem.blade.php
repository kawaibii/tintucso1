@extends('master')
@section('content')
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">

							@foreach($loaisp as $lsp)
							<li><a href="loaisanpham/{{ $lsp->id }}">{{{ $lsp->name }}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
						
							<h4>{{ $tukhoa }}</h4>
							<div class="beta-products-details">
								
								<div class="clearfix"></div>
							</div>

							<div class="row">

							
								
								@foreach($prod as $pro)
								
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.html"><img width="250px" height="250px" src="shop/image/product/{{ $pro->image }}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $pro->name }}</p>
											<p class="single-item-price">
												<span>{{ $pro->unit_price }} đồng</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="dathang/{{ $pro->id }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="chitiet/{{ $pro->id }}">chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								
								@endforeach
								
							</div>
							
							
						</div> <!-- .beta-products-list -->


						 <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div>
@endsection