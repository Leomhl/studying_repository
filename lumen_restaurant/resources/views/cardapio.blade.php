<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cardápio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link rel="icon" type="image/png" href="images/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/site.css">
	<style>
		.menu-footer {
			color: #fff; 
			font-family: Montserrat-Regular;
			font-size: 1rem;
		}

		.title {
			font-family: Montserrat-Bold;
		}

		.margem {
			border-right: 2px solid #909090;
    		margin: 20px 0;
		}

		.divider {
			font-family: Montserrat-Alternates-Light; 
			color: #FFF;
		}

		.reserva {
			font-family: Montserrat-Bold;
			background-color: #936e44; 
			color: #fff; 
			border-radius: 20px; 
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
									<a href="contato">Contato e reservas</a>
								</li>
							</ul>
						</nav>
					</div>

					<img src="/images/center_logo.png" id="logo_mobile" style="width: 75%; margin-top: -10px; display: none;">

					<!-- Menu hamburguer -->
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
				<a href="https://www.instagram.com">
					<img src="/images/insta.png" style="height: 38px;" class="p-r-35">
				</a>

				<a href="https://www.facebook.com/">
					<img src="/images/facebook.png" style="height: 38px;" class="p-r-35">
				</a>

				<a href="https://www.youtube.com">
					<img src="/images/youtube.png" style="height: 38px;">
				</a>
			</li>
		</ul>
	</aside>

	<section class="bg-title-page flex-c-m" style="min-height: 300px; justify-content: left; padding-left: 50px;">
			<h3 class="title p-t-100">Cardápio</h3>
	</section>

	<section class="section-mainmenu p-t-60 p-b-60 bg1-pattern">
		<div class="container" style="margin-right: 0px; margin-left: 0px; width: 100%;">

			<div class="row" style="padding-left: 50px; padding-right: 50px;">
				<div class="col-md-6 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Courvet
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Cesta de torradas quentinhas, <br>pasta, manteiga, azeitonas, queijos e <br> Surpresa do Chef.
						</span>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto"></div>
			</div>

			<div class="row" style="background-color: #936e44; padding-left: 50px; padding-right: 50px;">
				<div class="col-md-12">

					<h4 class="p-t-8 p-b-8 divider">
						Entradas
					</h4>

				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Pastel de queijo cremoso
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>
						<span class="info-item-mainmenu txt23">
							Porções com 8 unidades
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Pastel de Camarão
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>
						<span class="info-item-mainmenu txt23">
							Porções com 8 unidades
						</span>
					</div>
				</div>

			</div>			

			<div class="row" style="padding-left: 50px; padding-right: 50px;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Bolinho de Bacalhau
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>
						<span class="info-item-mainmenu txt23">
							Porções com 8 unidades
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Pastel de Carne Seca
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Porção com 8 unidades, <br>com queijo cremoso e doce de abóbora
						</span>
					</div>
				</div>

			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Baguete Gratinada
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Recheada de ragu de Carne
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Batata Calabresa
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Recheada com creme de queijo e <br>bacon servido com farofa de parma
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Mix do Mar
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Camarão, lula e peixe empanados
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Vinagrete de Frutos do Mar
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Peixe, lula, camarão e polvo grelhados.<br>Marinados em azeite de ervas.<br>Acompanha cesta de pães
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Gravad Lax (de salmão)
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Servido em base quente com espumante
						</span>
					</div>
				</div>

				<div class="col-md-6"></div>
			</div>

			<div class="row" style="background-color: #936e44; padding-left: 50px; padding-right: 50px;">
				<div class="col-md-12">

					<h4 class="p-t-8 p-b-8 divider">
						Carnes
					</h4>

				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Filé à portuguesa
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Filé grelhado com crocante de presunto<br>de parma ao molho de vinho. Acompanha<br> batatas salteadas em ervas.
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Filé ao Dom João
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Tornedor de Mingnon ao molho de vinho servido <br>com purê de aipim com toque de macadâmia,<br>castanha-do-pará e damasco
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Medalhão
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Filé mingnon grelhado ao molho do chef com<br>batata rostie. Acompanha Ceasar Salad. 
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Beef de tiras
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Picanha Angus ao molho chimichurri servida com<br>batatas rústicas, arroz maluco e farofa de panko

							<!-- grelhado ao molho do chef com batata rostie.<br> -->
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Beef de chorizo
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Servido com arroz capote e vinagrete<br>de feijão fradinho
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Tornedor recheado
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Tornedor de filé mignon recheado de queijo emmental,<br>empanado na farinha panko e servido com mix<br>de legumes caramelizados
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="background-color: #936e44; padding-left: 50px; padding-right: 50px;">
				<div class="col-md-12">

					<h4 class="p-t-8 p-b-8 divider">
						Massas
					</h4>

				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Fetuccine de Camarão
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Massa Especial com Molho Gorgonzola<br>
							e Camarões Crocantes
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Canelone de Cogumelos Gratinado
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Massa servida com ragu de cogumelos gratinada<br>em molho branco e queijo parmigiano
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Fideuá de frutos do mar
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Massa cabelinho de anjo servida com mix de<br>frutos do mar em molho cremoso de tomate<br>fresco com creme de leite
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Penne ao molho forestier
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Com iscas de mignon e crisp de parma<br>e tomates confit
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="background-color: #936e44; padding-left: 50px; padding-right: 50px;">
				<div class="col-md-12">

					<h4 class="p-t-8 p-b-8 divider">
						Risotos
					</h4>

				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Risoto ao funghi com medalhão
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Legítimo arroz arbóreo com cogumelos<br>hidratados no vinho
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Risoto trufado
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Servido com camarões, azeite trufado<br>e toque de tangerina
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Risoto chavroux
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Servido com autêntico queijo de cabra chavroux,<br>acompanha rosbife e crisp de alho poró
						</span>
					</div>
				</div>

				<div class="col-md-6"></div>
			</div>

			<div class="row" style="background-color: #936e44; padding-left: 50px; padding-right: 50px;">
				<div class="col-md-12">

					<h4 class="p-t-8 p-b-8 divider">
						Do mar
					</h4>

				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Bacalhau à lagareiro
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Lombo de bacalhau grelhado servido com<br>
							pimentões confit, batatas ao murro e cebolas<br>
							assadas ao azeite de alho
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Bacalhau espiritual
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Bacalhau desfiado com camarões ao molho<br>bechamel e gratinado
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Bacalhau gomes de sá
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Lombo de bacalhau grelhado, com pimentões,<br>batatas coradas, ovos, azeitonas e azeite de alho<br>(Serve duas pessoas)
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Bacalhau cascais
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Lombo de bacalhau grelhado com polvo, <br>lula e camarão<br>(Serve duas pessoas)
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Caldeirada
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Frutos do mar com molho de dendê e leite de côco <br>servidos em panela de barro. Acompanha arroz, <br>farofa de santo e pirão<br>(Serve duas pessoas) 
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Opcional com lagosta
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Com toque brasileiro de leite de côco<br>(Serve duas pessoas)
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Peixe grelhado
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Filé ao molho de manteiga e ervas.<br>Acompanha arroz de amêndoas<br>e camarões
						</span>
					</div>
				</div>

				<div class="col-md-6 margem">
	
					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Salmão crocante
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Salmão com crosta de pão italiano.<br>Acompanha frigideira de palmito,<br>shitake e batata
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Paella de frutos do mar
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23"></span>
					</div>
				</div>

				<div class="col-md-6"></div>
			</div>

			<div class="row" style="background-color: #936e44; padding-left: 50px; padding-right: 50px;">
				<div class="col-md-12">

					<h4 class="p-t-8 p-b-8 divider">
						De água doce
					</h4>

				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Truta recheada com amêndoas
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Filé de truta recheada com amêndoas servido com <br>camarões e rostie crocante
						</span>
					</div>
				</div>

				<div class="col-md-6"></div>
			</div>

			<div class="row" style="background-color: #936e44; padding-left: 50px; padding-right: 50px;">
				<div class="col-md-12">

					<h4 class="p-t-8 p-b-8 divider">
						Saladas
					</h4>

				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Salada crocante
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Mix de folhas com brie empanado,<br>
							crisp de parma e vinagrete balsâmico
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Salada Fresca de Quinoa
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Com Camarões e Aioli de Páprica
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Mix de Folhas com Agridoce de Alecrim
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Com creme de queijo fresco e bacon crisp
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Bruschetta de Pastrami Artesanal
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Com Rúcula e Picles de Cebola Roxa,<br>
							servido com molho de mostarda e<br>
							mel em pão australiano
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Fideuá de Frutos do Mar
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Massa “Cabelinho de Anjo” servida com<br>
							Mix de Frutos do Mar em Molho Cremoso<br>
							de Tomate Fresco com Creme de Leite
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Penne ao Molho Forestier
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Com Iscas de Mignon e Crisp de Parma<br>
							e Tomates Confit
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="background-color: #936e44; padding-left: 50px; padding-right: 50px;">
				<div class="col-md-12">

					<h4 class="p-t-8 p-b-8 divider">
						Especiais
					</h4>

				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Polvo crocante
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Tentáculos de polvo Envolto por farinha<br>crocante servido com batatas ao murro<br>e Aioli de páprica picante
						</span>
					</div>
				</div>

				<div class="col-md-6">

					<div class="item-mainmenu m-b-36" style="margin: 20px 0;">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Arroz de pato defumado com magret
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Arroz de pato defumado glaceado com<br>vinho tinto e crisp de bacon, servido <br>com magret defumado.
						</span>
					</div>
				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Lombo de porco à moda malagueta
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Lombo de porco defumado especialmente para à<br>casa servido com molho de goiabada e vinho tinto.<br>Acompanha gratin de mandioca e salada surpresa.
						</span>
					</div>
				</div>

				<div class="col-md-6"></div>
			</div>

			<div class="row" style="background-color: #936e44; padding-left: 50px; padding-right: 50px;">
				<div class="col-md-12">

					<h4 class="p-t-8 p-b-8 divider">
						Para a família
					</h4>

				</div>
			</div>

			<div class="row" style="padding-left: 50px; padding-right: 50px; background-color: #FFF;">
				<div class="col-md-6 margem">

					<div class="item-mainmenu m-b-36">
						<div class="flex-w flex-b m-b-3">
							<a href="#" class="name-item-mainmenu txt21">
								Orquestra do mar
							</a>
							<div class="line-item-mainmenu bg3-pattern"></div>
						</div>

						<span class="info-item-mainmenu txt23">
							Centolha, lagosta, polvo, camarões, lula, mexilhão, <br>peixe branco, salmão grelhados ao molho de <br>manteiga com ervas. Servido com batatas <br>rústicas e arroz  de amêndoas.<br>(Serve 8 pessoas)<br>Sob encomenda prévia
						</span>
					</div>
				</div>

				<div class="col-md-6"></div>
			</div>
		</div>
		
		<br><br><br>
		<center>
			<a href="/contato" class="center reserva p-t-10 p-r-20 p-l-20 p-b-10">
				Faça já sua reserva!
			</a>
		</center>
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
						R. Lorem ipsum <br>
						Lorem ipsum - CEP 000000-000

						<br><br>
						(22) 0000-0000
						<br>
						(22) 9.9999-9999
						<img src="/images/whatsapp.png" style="padding-left: 10px; width: 35px;">
					</p>
				</div>				

				<div class="col-sm-6 col-md-4 p-t-50 m-b-70">
					<div class="p-t-50 p-b-20" style="width: 100%;">
						
						<a href="https://www.facebook.com/" style="padding-right: 20%;">
							<img src="/images/fb.png" alt="">
						</a>
						
						<a href="https://www.instagram.com" style="padding-right: 20%;">
							<img src="/images/instagram.png" alt="">
						</a>
						
						<a href="https://www.youtube.com">
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

	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
	<script src="js/site.js"></script>
	<script src="js/mb.js"></script>
	<script>
		if(isMobile()) {
			$(".margem").css({'border-right': '0px'});
			$(".row").css({'padding-left': '10px', 'padding-right': '10px'});
			$('#menu_desktop').hide();
			$('#logo_mobile').show();
		}
	</script>
</body>
</html>