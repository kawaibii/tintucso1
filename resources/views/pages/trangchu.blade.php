@extends('master')
@section('content')
@include('layout.slide')
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>sản phẩm mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">tìm thấy {{ count($newp) }}</p>
								<div class="clearfix"></div>
							</div>
								
							<div class="row">
							@foreach($newp as $sp)
								<div class="col-sm-3">
									<div class="single-item">
										@if($sp->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="chitiet/{{ $sp->id }}"><img width="250px" height="250px" src="shop/image/product/{{ $sp->image }}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $sp->name }}</p>
											<p class="single-item-price">
												@if($sp->promotion_price==0)
											
												<span class="flash-sale">{{ $sp->unit_price }}Đ</span>
												@else
												<span class="flash-del">{{ $sp->unit_price }}Đ</span>
												<span class="flash-sale">{{ $sp->promotion_price }}Đ</span>
												@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="dathang/{{ $sp->id }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="chitiet/{{ $sp->id }}">chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>

								
								@endforeach
								
							
							</div>
							<div class='text-center'>
									{{ $newp->links() }}
								</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>sản phẩm đang khuyến mại</h4>
							<div class="beta-products-details">
								<p class="pull-left">tìm thấy {{ count($spkm) }}</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($spkm as $spk)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

										<div class="single-item-header">
											<a href="chitiet/{{ $spk->id }}"><img width="250px" height="250px" src="shop/image/product/{{ $spk->image }}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{ $spk->name }}</p>
											<p class="single-item-price">
												<span class="flash-del">{{ $spk->unit_price }}</span>
												<span class="flash-sale">{{ $spk->promotion_price }}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="dathang/{{ $spk->id }}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="chitiet/{{ $spk->id }}">chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							
								
							</div>
							<div class=text-center>
								{{ $spkm->links() }}
							</div>
							
								
								
							</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div>
@endsection