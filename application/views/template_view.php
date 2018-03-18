<!DOCTYPE html>
<html>
<head>
	<title>Beju</title>
	<!-- Кодировка -->
	<meta charset="utf-8">
	<!-- Настройка viewport  - это видимая пользователю область веб-страницы. Т.е. это то, что может увидеть пользователь, не прибегая к прокрутке -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Подключаем Bootstrap CSS -->
	<link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../styles/css/main.css">
	<script src="../styles/js/modernizr.custom.js"></script>
	<!-- Подключаем jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Добавляем шрифт для лого -->
	<link href="http://allfont.ru/allfont.css?fonts=capture-it" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed" rel="stylesheet">
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.html"><img src="styles/images/ICO.png" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
			    		<a class="nav-link" href="/">Главная страница</a>
			    	</li>
			    	<li class="nav-item">
			    		<a class="nav-link" href="/articles">Статьи</a>
			    	</li>
			    	<li class="nav-item dropdown">
			    		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			        		Дополнительно
			      		</a>
			      		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			        		<a class="dropdown-item" href="/gallery">Галерея</a>
			        		<a class="dropdown-item" href="/catalog">Каталог</a>
			      		</div>
			    	</li>
			  	</ul>
			  	<form class="form-inline my-2 my-lg-0">
			    	<input class="form-control mr-sm-2" type="search" placeholder="Что ищем?" aria-label="Search">
			    	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти</button>
			  	</form>
			</div>
		</nav>
	</header>
		
			<?php
				include 'application/views/'.$content_view;
			?>		

	<footer>
		<div class="container">
			<div class="fLinks">
				<div class="row">
					<div class="col-sm-6">
						<p>&copy; NAR Themes&trade; Design by Novruzov Akhmet<br>Saint Petersburg, Army 2018</p>	
					</div>
					<div class="col-sm-6">
						<div class="ico text-right">
							<a href="https://vk.com/id32048088"><img src="styles/ico/vk.png"></a>
							<a href="https://www.facebook.com/people/Akhmet-Novruzov/100009420392265"><img src="styles/ico/facebook.png"></a>
							<a href="https://twitter.com/"><img src="styles/ico/twitter.png"></a>
							<a href="https://www.instagram.com/akhmet142/"><img src="styles/ico/instagram.png"></a>
							<a href="https://www.youtube.com/channel/UCjwcjsLZWcW0UXvCLchQASg?view_as=subscriber"><img src="styles/ico/youtube.png"></a>
							<a href="https://plus.google.com/u/0/111276313921505591569"><img src="styles/ico/googleplus.png"></a>
						</div>
					</div>
				</div>					
			</div>
		</div>
	</footer>

	<!-- Подключаем Bootstrap JS -->
	<script src="styles/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="../styles/js/grid.js"></script>
	<script>
		$(function() {
			Grid.init();
		});
	</script>
</body>
</html>