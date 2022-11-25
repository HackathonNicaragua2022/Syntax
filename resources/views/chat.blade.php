<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>Grupo Los Tilines</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/chat.css">

	</head>
	<body class="font-sans antialiased">
        @include('layouts.navigation')
        <br>
        <div class="justify">
        <div class="dash-chat">
			<div class="container-fluid">
				<div class="row justify-content-center align-content-center">
					<div class="col-8 barra">

					</div>
					<div class="col-4 text-right barra">
						<ul class="navbar-nav mr-auto">
							<li>
								<a href="#" class="px-3 text-light perfil dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class=""></i></a>

								<div class="dropdown-menu" aria-labelledby="navbar-dropdown">

									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="barra-lateral col-12 col-sm-auto">
						<nav class="menu d-flex d-sm-block justify-content-center flex-wrap">
							<a href="#"><i class="fas fa-home"></i><span>messi</span></a>
							<a href="#"><i class="fas fa-home"></i><span>messi</span></a>
							<a href="#"><i class="fas fa-home"></i><span>messi</span></a>
							<a href="#"><i class="fas fa-home"></i><span>messi</span></a>
						</nav>
					</div>
					<main class="main col">
						<div class="row justify-content-center align-content-center text-center">
							<div class="columna col-lg-6" >

							</div>

						</div>

					</main>
				</div>
			</div>
		<div>

		</div>
        </div>
		<section class="msger">

			<header class="msger-header">
				<div class="msger-header-title">
					<i class="fas fa-comment-alt"></i>
					<span class="chatWith"></span>
					<span class="typing" style="display: none;"> está escribiendo</span>
				</div>
				<div class="msger-header-options">
					<span class="chatStatus offline">
						<i class="fas fa-globe"></i>
					</span>
				</div>
			</header>

			<div class="msger-chat"></div>

			<form class="msger-inputarea">
				<input type="text" class="msger-input" oninput="sendTypingEvent()" placeholder="Ingrese Su Mensaje...">
				<button type="submit" class="msger-send-btn">Enviar</button>
			</form>

		</section>
    </div>
		<script src='https://use.fontawesome.com/releases/v5.0.13/js/all.js'></script>
		<script  src="/js/app.js"></script>
		<script  src="/js/chat.js"></script>

	</body>
</html>
