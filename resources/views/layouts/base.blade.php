<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>	KeepBuy</title>

	

	<!-- favicon -->
	<link rel="shortcut icon" type="imagen/png" href="{{asset('assets/img/favicon.png')}}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
	@livewireStyles

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
				<!--here va el logo de la pagina--><img src="" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Inicio</a>
									<ul class="sub-menu">
										<li><a href="{{url('/')}}">Pagina principal</a></li>
									</ul>
								</li>
								
								
								<li><a href="{{url('contact/')}}">Contactenos</a></li>
								<li><a href="{{url('shop/')}}">Tienda</a>
									<ul class="sub-menu">
										<li><a href="{{url('shop/')}}">Productos</a></li>
										<li> <a href="{{url('cart/')}}">Ver los productos del carrito</a></li>
										
										
										<li><a href="{{url('checkout/')}}">Cart</a></li>
									</ul>
								</li>
                                @if (Route::has('login'))
                                     @auth
                                       @if(Auth::user()->utype==='ADM')
                                    
                                          <li class="current-list-item"><a href="#">Mi cuenta ({{Auth::user()->name}})</a>
									            <ul class="sub-menu">
												   <li><a href="{{route('admin.dashboard')}}">Dashboardor</a></li>
												   
												<li><a href="{{route('logout')}}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesion</a></li>
                                               <li><a href="{{url('VistaAdministrador/')}}">Panel administrativo</a></li>
									            </ul>
												<form id="logout-form" action="{{route('logout')}}"method="POST">
													@csrf
											
												</form>
								          </li>

                                           

                                       @else
                                       <li class=""><a href="#">Mi cuenta ({{Auth::user()->name}})</a>
									   <ul class="sub-menu">
												   <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
												   
												<li><a href="{{route('logout')}}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesion</a></li>
                                               
									            </ul>
												<form id="logout-form" action="{{route('logout')}}"method="POST">
													@csrf
											
												</form>
								          </li>


                                       @endif


                                       
                                          

                                     @else
                                       <li><a href="{{route('login')}}">Inciar sesion</a></li>
								       <li><a href="{{route('register')}}">Registrarse</a></li>
                                     @endif


                                @endif
                                

						
						
								
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href=""><i class="fas fa-shopping-cart"></i></a>
										
									</div>
								</li>

                              


								<!--@if (Route::has('login'))

								     @auth

									    @if(Auth::user()->utype ==='ADM')

										<li title="Mi cuenta"><a href="">Mi Cuenta ({{Auth::user()->name}})</a></li>
										<li title="Dashboard"><a href="">Dashboard</a></li>

										@else
										<li title="Mi cuenta"><a href="">Mi Cuenta ({{Auth::user()->name}})</a></li>
										<li title="Dashboard"><a href="">Dashboard</a></li>

										@endif
								       

								       @else
								            <li><a href="{{route('login')}}">Inciar sesion</a></li>
								            <li><a href="{{route('register')}}">Registrarse</a></li>
						

								        @endif


								     @endif-->
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
                     

					</div>
				</div>
			</div>
		</div>
	</div>
	
       {{$slot}}







	
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	
	<!-- end latest news -->

	<!-- logo carousel -->
	
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Acerca de nosotros</h2>
						<p>Viveres y Verduras Por Venir es una pequeña tienda del sector barrio las ferias que puede ser encontrada con la direccion carrera 6B numero 610.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Mas Informacion</h2>
						<ul>
							<li>viveresyverduporvenir@gmail.com</li>
							<li>+57 3748447489</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Paginas</h2>
						<ul>
							<li><a href="{{url('/')}}">Inicio</a></li>
							<li><a href="{{url('contact/')}}">Acerca de Nosotros</a></li>
							<li><a href="{{url('shop/')}}">Productos</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						
						<p>Tambien puedes escribirnos a nuestro correo si tienes alguna duda .</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Santiago Cardozo Pedraza </a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Santiago cardozo Pedraza</a>
					</p>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('assets/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('assets/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('assets/js/main.js')}}"></script>
	@livewireScripts

</body>
</html>