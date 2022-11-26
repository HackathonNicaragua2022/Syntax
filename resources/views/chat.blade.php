<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>Chat</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/chat.css">
		<link rel="stylesheet" href="/css/barra.css">
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">

	</head>

	<body class="font-sans antialiased">

        @include('layouts.navigation')
        <br>

        <div class="justify">

		<div class="col-lg-3 col-md-4 col-sm-12">
							<div class="chat-list bg-light-gray">
								<div class="chat-search">
									<span class="ti-search"></span>
									<input type="text" placeholder="Buscar">
								</div>
								<div class="notification-list chat-notification-list customscroll">
									<ul>
										<li>
											<a href="http://localhost:8000/chat/with/1"></a>
												<img src="images\team\team1.png" alt="">
												<h3 class="clearfix">Eduardo Gamez</h3>
												<p><i class="fa fa-circle text-light-green"></i> online</p>
											</a>
										</li>
										<li class="active">
											<a href="http://localhost:8000/chat/with/1">
												<img src="images\team\team2.png" alt="">
												<h3 class="clearfix">Steven Ulloa</h3>
												<p><i class="fa fa-circle text-light-green"></i> online</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="images\team\team3.png" alt="">
												<h3 class="clearfix">Alejando</h3>
												<p><i class="fa fa-circle text-light-green"></i> online</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="images\team\team4.png" alt="">
												<h3 class="clearfix">Jonathan</h3>
												<p><i class="fa fa-circle text-warning"></i> active 5 min</p>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="images\team\team5.png" alt="">
												<h3 class="clearfix">Kevin A.</h3>
												<p><i class="fa fa-circle text-warning"></i> active 4 min</p>
											</a>
										</li>
										<li>


									</ul>
								</div>
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
