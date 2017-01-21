@extends('themes.'.$theme->name.'.index')
@section('main-container')
<section id="advertisement">
		<div class="container">
			<img src="{{ asset('themes/'.$theme->name.'/images/shop/advertisement.jpg') }}" alt="" />
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row">
				@include('themes.'.$theme->name.'.layouts.sidebar')

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">TẤT CẢ SẢN PHẨM</h2>
						<div class="col-lg-12 text-left">{{ $products->links() }}</div>
						@foreach ($products as $product)

						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										@foreach ($product->attachment as $attachment)
										<img style="width: 50%; height: 100px; margin: 10px 0px;" src="{{ url('images',$attachment->url) }}" alt="" />
										@endforeach
										<h2>{{ number_format($product->price) }}<sup> đ</sup></h2>
										<p>{{ substr($product->name, 0, 18) }}</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>{{ number_format($product->price) }}<sup> đ</sup></h2>
										<p>{{ $product->name }}</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a>
										</div>
									</div>
								</div>
								{{-- <div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div> --}}
							</div>
						</div>
						@endforeach

						<div class="col-lg-12 text-right">{{ $products->links() }}</div>

					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	@endsection