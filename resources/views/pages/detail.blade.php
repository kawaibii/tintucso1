@extends('master')
@section('content')
	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="shop/image/product/{{ $sanp->image }}" alt="">
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p style='font-size: 30px'  class="single-item-title">{{ $sanp->name }}</p>
								<p class="single-item-price">
									<span>{{ $sanp->unit_price }}đồng</span>
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-body">
										<p class="single-item-price">
											@if($sanp->promotion_price!=0)
											<span class="flash-del">{{ $sanp->unit_price }} đồng</span>
											<span class="flash-sale">{{ $sanp->promotion_price }}đồng</span>
											@else
											<span class="flash-sale">{{ $sanp->nit_price }}đồng</span>
											@endif
										</p>
									</div>
							<div class="space20">&nbsp;</div>		
								<a class="add-to-cart" href="datthang/{{ $sanp->id }}"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>

				
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>sản phẩm cùng loại</h4>

						<div class="row">
							@foreach($sptt as $spp)
							<div class="col-sm-4">
								<div class="single-item">
									@if($spp->promotion_price!=0)
									<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif
									<div class="single-item-header">
										<a href="chitiet/{{ $spp->id }}"><img width="250px" height="250px" src="shop/image/product/{{ $spp->image }}" alt=""></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{ $spp->name }}</p>
										<p class="single-item-price">
											@if($spp->promotion_price!=0)
											<span class="flash-del">{{ $spp->unit_price }} đồng</span>
											<span class="flash-sale">{{ $spp->promotion_price }}đồng</span>
											@else
											<span class="flash-sale">{{ $spp->nit_price }}đồng</span>
											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="dathang/{{ $spp->id }}"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="chitiet/{{ $spp->id }}">chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class='text-center'>
							{{ $sptt->links() }}
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				
					 <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
	</div>
@endsection