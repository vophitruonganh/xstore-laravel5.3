<div class="col-sm-3">
	<div class="left-sidebar">
		<h2>DANH MỤC</h2>
		<div class="panel-group category-products" id="accordian"><!--category-productsr-->
			@foreach ($categories as $category)

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordian" href="#{{ $category->url }}">
							<span class="badge pull-right"><i class="fa fa-plus"></i></span>
							{{ $category->name }}
						</a>
					</h4>
				</div>
				<div id="{{ $category->url }}" class="panel-collapse collapse">
					<div class="panel-body">

						<ul>
						@foreach ($category->trademarks as $trademark)
							<li><a href="{{ url('/collection/brands',$trademark->url) }}">{{ $trademark->name }}</a></li>
						@endforeach
						</ul>
					</div>
				</div>
			</div>
			@endforeach

		</div><!--/category-products-->

		<div class="brands_products"><!--brands_products-->
			<h2>HÃNG SẢN XUẤT</h2>
			<div class="brands-name">
				<ul class="nav nav-pills nav-stacked">
				@foreach ($trademarks as $trademark)

					<li><a href="{{ url('/collection/brands',$trademark->url) }}"> <span class="pull-right">({{ sizeof($trademark->products) }})</span>{{ $trademark->name }}</a></li>
				@endforeach

				</ul>
			</div>
		</div><!--/brands_products-->

		<div class="price-range"><!--price-range-->
			<h2>Price Range</h2>
			<div class="well text-center">
				 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
				 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
			</div>
		</div><!--/price-range-->

		<div class="shipping text-center"><!--shipping-->
			<img src="{{ asset('themes/'.$theme->name.'/images/home/shipping.jpg') }} " alt="" />
		</div><!--/shipping-->

	</div>
</div>