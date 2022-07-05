<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>KeepBuy</p>
						<h1>Carrito de compras</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
					@if (Session::has('success_message'))
					<div class="alert alert-success">
						<strong>Success</strong>{{Session::get('success_message')}}
					</div>	
					@endif


					@if (Cart::count() > 0)
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Imagen del producto</th>
									<th class="product-name">Nombre</th>
									<th class="product-price">Precio</th>
									<th class="product-quantity">Cantidad</th>
									<th class="product-total">Sub total</th>

								</tr>
							</thead>
					
							
							






							@foreach(Cart::content()  as $item )
							<tbody>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="{{asset('assets/img')}}/{{$item->model->image}}" alt="{{$item->model->name}}"></td>
									<td class="product-name"><a href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a></td>
									<td class="product-price">$ {{$item->model->regular_price}}</td>
									<td class="product-quantity"><input type="number" value="{{$item->qty}}"></td>
									<td class="product-total">$ {{$item->subtotal}}</td>
								
								</tr>
							</tbody>
							@endforeach
						</table>
					@else
					   <p>No Item in Cart</p>
					   
					@endif   
					</div>
				</div>
				

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Subtotal</th>
									<th>Tax</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
							
								<tr class="total-data">
									<td>$ {{Cart::subtotal()}}</td>
									<td>${{Cart::tax()}}</td>
									<td>${{Cart::total()}}</td>
								<!--	<td><strong>Total: </strong></td>
									<td>$9.250</td>-->
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="cart.html" class="boxed-btn">Actualizar el carrito</a>
							<a href="checkout.html" class="boxed-btn black">Chequear los productos</a>
						</div>
					</div>

				
				</div>
                  
			</div>
		</div>
	</div>