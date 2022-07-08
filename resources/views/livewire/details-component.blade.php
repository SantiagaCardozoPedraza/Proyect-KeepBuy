<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>KeepBuy</p>
						<h1>Mira los detalles del producto</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
					<img src="{{asset('assets/img')}}/{{$product->image}}" alt="{{$product->name}}">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3>{{$product->name}}</h3>
						<p class="single-product-pricing">${{$product->regular_price}}</p>
						<p>{{$product->description}}</p>
                        <p>{{$product->stock_status}}</p>
						<div class="single-product-form">

							<form action="index.html">
								<strong>Cantidad existente :</strong>
								<input type="number" placeholder="0">
							</form>

							<form action="index.html">
								<strong>Cantidad a llevar :</strong>
								<input type="number" placeholder="0">
							</form>
							<a href="" class="cart-btn"wire::click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><i class="fas fa-shopping-cart"> </i>Agregar al carrito</a>
							<p><strong>Categoria: </strong>Aseo</p>
							<p><strong>Fecha de vencimiento: </strong>12/09/2022</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->

	
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Mira </span> mas de nuestros productos</h3>
				</div>
				</div>
			</div>
			<div class="row">
            @foreach($popular_products  as  $p_product)
				<div class="col-lg-4 col-md-6 text-center Viveres">
                    
                    
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{route('producto.details',['slug'=>$p_product->slug])}}">
								<img src="{{asset('assets/img')}}/{{$p_product->image}}" alt="{{$p_product->name}}"></a>
						</div>
						<h3>{{$p_product->name}}</h3>
						<p class="product-price"><span></span>${{$p_product->regular_price}} </p>
						<a href="#"wire::click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"class="cart-btn"><i class="fas fa-shopping-cart"></i> Agregar al carrito</i></a>
					</div>
                    
				</div>
            @endforeach
				
			</div>
		</div>
	</div>
