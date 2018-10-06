<!DOCTYPE HTML>
<html prefix="og: http://codiexp.com">
	<head>
		<title>CODIEXP</title>
		<meta property="og:title" content="La Comunidad de investigación experimental (CODIEXP) es una comunidad de estudiantes sin fines de lucro, cuya misión es aportar conocimientos que contribuyan a la sociedad, fomentando la investigación en los estudiantes a través del debate y la reflexión de estudios realizados en diversos temas." />
		<meta property="og:url" content="http://codiexp.com" />
		<meta property="og:image" content="{{ asset('images/codiexp.jpg')}}" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
		<!-- bootstrap.min -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119519720-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-119519720-1');
        </script>

		
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="{{route('index')}}" class="logo"><strong>CODIEXP</strong> UPN</a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								
								@yield('contenido')
							<!-- Section -->
								

							<!-- Section -->
								

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{{route('index')}}">Home</a></li>
										<li><a href="{{route('quienessomos')}}">¿Quienes somos?</a></li>
										<li><a href="{{route('investigadores')}}">Miembros</a></li>
										<li><a href="{{route('investigaciones')}}">Investigaciones</a></li>
										<li><a href="{{route('investigaciones-upn')}}">Investigaciones UPN</a></li>
										
									</ul>
								</nav>

							<!-- Section -->
								

							<!-- Section -->
								<section>
									<header class="major">
										<h2>¿Qué esperas?</h2>
									</header>
									<p>Unete a esta comunidad, para poder adquirir y brindar más conocimientos. Te esperamos</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">codiexp@codiexp.com</a></li>
										<li class="fa-phone">943 380 169</li>
										<li class="fa-home">Av. Alfredo Mendiola 6062,<br/> Los Olivos 15311</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Comunidad de investigación experimental - 2018. Todos los derechos reservados. </p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="{{asset('js/jquery.min.js')}}"></script>
			<script src="{{asset('js/browser.min.js')}}"></script>
			<script src="{{asset('js/breakpoints.min.js')}}"></script>
			<script src="{{asset('js/util.js')}}"></script>
			<script src="{{asset('js/main.js')}}"></script>
			<!-- boostrap -->
			<script src="{{asset('js/bootstrap.js')}}"></script>
			<script src="{{asset('js/bootstrap.min.js')}}"></script>

	</body>
</html>