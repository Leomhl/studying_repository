<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Contato</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link rel="icon" type="image/png" href="/images/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="/vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="/vendor/lightbox2/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/site.css">
	<style>
		.menu-footer {
			color: #fff; 
			font-family: Montserrat-Regular;
			font-size: 1rem;
		}

		.enviar {
			float: right; 
			font-family: Montserrat-Alternates-Bold;
			border-radius:0px;
		}
	</style>
</head>
<body class="animsition">

	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
				
					<div id="menu_desktop" class="wrap_menu p-l-45 p-l-0-xl" style="float: right;">
						<nav class="menu">
							<div class="wrap_menu p-t-20">
								<nav class="menu">					
									<img src="/images/center_logo.png" alt="">
								</nav>
							</div>
							
							<ul class="main_menu">
								<li>
									<a href="/">Home</a>
								</li>

								<li><span class="pipe">|</span></li>

								<li>
									<a href="/restaurante">O Restaurante</a>
								</li>

								<li><span class="pipe">|</span></li>

								<li>
									<a href="/ondemand">On Demand</a>
								</li>

								<li><span class="pipe">|</span></li>
								

								<li>
									<a href="/cardapio">Cardápio</a>
								</li>
								
							</ul>
						</nav>
					</div>

					<img src="/images/center_logo.png" id="logo_mobile" style="width: 75%; margin-top: -10px; display: none;">

					<button class="btn-show-sidebar m-l-33 trans-0-4" style="display: none;">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
			</div>
		</div>
	</header>

	<aside class="sidebar trans-0-4">
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>
		
		<ul class="menu-sidebar p-t-95 p-b-70">
			<li class="t-left m-b-13 p-l-20">
				<a href="/" class="txt19">Home</a>
			</li>
			
			<li class="t-left m-b-13 p-l-20">
				<a href="/restaurante" class="txt19">O Restaurante</a>
			</li>

			<li class="t-left m-b-13 p-l-20">
				<a href="/cardapio" class="txt19">Cardapio</a>
			</li>

			<li class="t-left m-b-13 p-l-20">
				<a href="/ondemand" class="txt19">On Demand</a>
			</li>

			<br><br>
			
			<li class="t-center p-t-20 m-b-13" style="height: 120px; background-color: #6e0003;">
				<a href="/contato" style="color: #fff;" class="txt19 ">
					Contato e reservas
				</a>
				<br>
				<a href="https://api.whatsapp.com/send?phone=5522999999999" target="_blank">
					<img src="/images/whatsapp.png" style="height: 45px;" class="p-t-10 p-r-20">
				</a>

				<a href="https://www.facebook.com/" target="_blank">
					<img src="/images/messenger.png" style="height: 45px;" class="p-t-10">
				</a>
			</li>

			<li class="t-center m-b-13 p-t-40">
				<a href="https://www.instagram.com/">
					<img src="/images/insta.png" style="height: 38px;" class="p-r-35">
				</a>

				<a href="https://www.facebook.com/">
					<img src="/images/facebook.png" style="height: 38px;" class="p-r-35">
				</a>

				<a href="https://www.youtube.com/">
					<img src="/images/youtube.png" style="height: 38px;">
				</a>
			</li>
		</ul>
	</aside>

	<section class="bg-title-page flex-c-m p-t-150 p-b-80 p-l-15 p-r-15" style="background-color: #f2f2f3;">
		<div class="row" style="width: 100%;">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				@if($enviado)
					<div class="alert alert-success">Mensagem enviada com sucesso!</div>
				@endif
				<form action="/contato" method="post">
					
					<h2 style="font-family: Montserrat-Bold">Contato e reserva</h2>
					<br>
					<input type="text" name="nome" placeholder="nome completo" class="form-control" required>
					<br>
					<input type="email" name="email" placeholder="e-mail" class="form-control" required>
					<br>
					<input type="tel" name="telefone" placeholder="tel ou whatsapp" class="form-control" required>
					<br>
					<input type="text" name="assunto" placeholder="assunto" class="form-control" style="width: 50%;" required>
					<br>
					<textarea name="mensagem" id="" cols="30" rows="10" class="form-control" placeholder="mensagem" required></textarea>
					<br>

					<div class="row">
						<div class="col-md-8">
							<span id="trabalheconosco1">
								Trabalhe com a gente: 
								<br>
								<b style="color: #58595b;"><span class="com">faleconosco@email.com</span></b>
							</span>
						</div>
						<div class="col-md-4">
							<input type="submit" class="btn btn-secondary btn-lg enviar" value="Enviar">
						</div>
					</div>
					<div class="row" id="trabalheconosco2">
						<div class="col-md-12">
							<br>
							Trabalhe com a gente:
							<b style="color: #58595b;"><span class="com">faleconosco@email.com</span></b>
						</div>
					</div>

				</form>

			</div>
			<div class="col-md-2"></div>
		</div>
	</section>

	<section class=" flex-c-m" >
		<img src="/images/maps.png" style="width: 100%">
	</section>

	<!-- Footer -->
	<footer class="bg1">
		<div class="container">
			<div class="row">
				<div class="col-md-1"></div>
				
				<div class="col-sm-6 col-md-3 p-t-50">
					<a href="/" class="menu-footer">Home</a><br>
					<a href="/restaurante" class="menu-footer">O Restaurante</a><br>
					<a href="/cardapio" class="menu-footer">Cardápio</a><br>
					<a href="/ondemand" class="menu-footer">On Demand</a><br>
					<a href="/contato" class="menu-footer">Contato e reservas</a><br>
				</div>

				<div class="col-sm-6 col-md-4 p-t-50">
					<p class="menu-footer" style="text-align: left;">
						R. Lorem ipsum dolor <br>
						lerolerolero - 123

						<br><br>
						(22) 9999-9999
						<br>
						(22) 9.9999-9999
						<img src="/images/whatsapp.png" style="padding-left: 10px; width: 35px;">
					</p>
				</div>				

				<div class="col-sm-6 col-md-4 p-t-50 m-b-70">
					<div class="p-t-50 p-b-20" style="width: 100%;">
						
						<a href="https://www.facebook.com/MalaguetaRestaurante.com.br/" style="padding-right: 20%;">
							<img src="/images/fb.png" alt="">
						</a>
						
						<a href="https://www.instagram.com/" style="padding-right: 20%;">
							<img src="/images/instagram.png" alt="">
						</a>
						
						<a href="https://www.youtube.com/">
							<img src="/images/yt.png" alt="">
						</a>
						
					</div>
				</div>

				<div class="col-md-1"></div>
			</div>
		</div>
	</footer>

	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<script type="text/javascript" src="/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/vendor/animsition/js/animsition.min.js"></script>
	<script type="text/javascript" src="/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/vendor/select2/select2.min.js"></script>
	<script type="text/javascript" src="/vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="/vendor/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="/js/slick-custom.js"></script>
	<script type="text/javascript" src="/vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
	<script type="text/javascript" src="/vendor/countdowntime/countdowntime.js"></script>
	<script type="text/javascript" src="/vendor/lightbox2/js/lightbox.min.js"></script>
	<script src="/js/site.js"></script>
	<script src="/js/mb.js"></script>
	<script>
		if(isMobile()){
			$('#trabalheconosco1').hide();
			$('#trabalheconosco2').show();
			$('#menu_desktop').hide();
			$('#logo_mobile').show();
		}
		else {
			$('#trabalheconosco1').show();
			$('#trabalheconosco2').hide();
		}
	</script>
		
</body>
</html>