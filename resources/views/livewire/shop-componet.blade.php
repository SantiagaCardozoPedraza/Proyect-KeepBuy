<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>KeepBuy</p>
						<h1>Tienda</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">Todos</li>
                            <li data-filter=".Viveres">Viveres</li>
                            <li data-filter=".Bebidas">Bebidas</li>
                            <li data-filter=".Aseo">Aseo</li>
							<li data-filter=".Utiles">Utiles</li>
							
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				@foreach ($products as $product)
				<div class="col-lg-4 col-md-6 text-center Viveres">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{route('producto.details',['slug'=>$product->slug])}}"><img src="assets/img/Arroz supremo.webp/{{$product->image}}" alt="{{$product->name}}"></a>
						</div>
						<h3>{{$product->name}}</h3>
						<p class="product-price"><span></span>$ {{$product->regular_price}}</p>
						<a href="" class="cart-btn" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="fas fa-shopping-cart"></i>Agregar al carrito</a>
					</div>

				</div>
				@endforeach
				
			</div>
			

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li>{!!$products->links()!!}</li>
						
							
						
						<!--
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
