<?php get_header(); ?>

<body <?php body_class(); ?>  style="background-color: #E34853">
		<header class="header-cmgo">
			<div class="container">
				<div class="row mg-b30">
					<div class="col-md-4 display-center">
						<img class="logo-cmgo" src="wp-content/themes/congressos/img/cmgo/Logo_CMGO_2019.png">
					</div>
					<div class="col-md-6 text-center">
						<h1 class="titulo-header-cmgo">22 A 25</h1>
						<h2 class="titulo-header-cmgo">MAIO DE 2019</h2>
						<h3 class="titulo-header-cmgo">BELO HORIZONTE</h3>
						<h4 class="titulo-header-cmgo">ASSOCIAÇÃO MÉDICA DE MINAS GERAIS</h4>
					</div>
					<div class="col-md-2">
						
					</div>
				</div>
				<div class="row">
					<div class="container d-flex flex-column flex-md-row justify-content-between navbar-cmgo">
						<a class="py-1 d-none d-md-inline-block text-cmgo" href="#">O CONGRESSO</a>
						<div class="border-navbar"></div>
						<a class="py-1 d-none d-md-inline-block text-cmgo" href="#">CONVIDADOS</a>
						<div class="border-navbar"></div>
						<a class="py-1 d-none d-md-inline-block text-cmgo" href="#">PROGRAMAÇÃO</a>
						<div class="border-navbar"></div>
						<a class="py-1 d-none d-md-inline-block text-cmgo" href="#">INSCRIÇÃO</a>
						<div class="border-navbar"></div>
						<a class="py-1 d-none d-md-inline-block text-cmgo" href="#">INFORMAÇÃO</a>
						<div class="border-navbar"></div>
						<a class="py-1 d-none d-md-inline-block text-cmgo" href="#">TRABALHO CIENTÍFICO</a>
						<div class="border-navbar"></div>
						<a class="py-1 d-none d-md-inline-block text-cmgo" href="#">CONTATO</a>
					</div>
				</div>
			</div>

			<div class="jumbotron jumbotron-cmgo text-right" style="background-image: url('wp-content/themes/congressos/img/cmgo/');">
				<div class="container pd-banner">
					<h1 class="titulo-cmgo">AGUARDAMOS</h1>
					<h1 class="titulo-cmgo">VOCÊ NO</h1>
					<h1 class="titulo-cmgo">CMGO 2019</h1>
				</div>
			</div>

		</header>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=EB+Garamond" />

<style type="text/css">
.navbar-cmgo{
	padding: 10px 50px 10px 50px;
	background: white;
} 

.jumbotron-cmgo div{

	border: 30px solid white;
	background-image: url('wp-content/themes/congressos/img/cmgo/Site-Home_08.jpg');
	background-position: center top; 
	background-size: 100% auto;
}

.jumbotron{
	background-color: initial;
}

.logo-cmgo{
	height: auto;width: 257px;
}

.header-cmgo{

	background-image: url('wp-content/themes/congressos/img/cmgo/Site-Home_02.jpg');
	background-color: #cccccc; 
	background-position: center top; 
	background-size: 100% auto;

}

.display-center{
	display: flex;
    align-items: center;
}

.mg-b30{
	margin-bottom: 30px;
}

.titulo-header-cmgo{
	font-weight: 700; 
	color: white;
}

.titulo-cmgo{
	font-weight: 700; 
	color: white;
	font-size: 53px;
	letter-spacing: 10px;
}

body { 
	font-family: "EB Garamond"; 
	font-style: normal; 
	font-variant: normal; 
	font-weight: 700; 
} 

.pd-banner{
	padding: 40px 30px 60px 30px;
}

@media (min-width: 1200px){
.container {
    max-width: 1250px;
}
}

.border-navbar{
	border: 0.5px solid #EF4C57;
}
.text-cmgo{
	color : #EF4C57;
}
</style>

<?php get_footer(); ?>
