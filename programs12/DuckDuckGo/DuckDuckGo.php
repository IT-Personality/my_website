<?php include("likes.php")?>
<?php
$file = "count.txt";
if(!is_file($file)){
 $fh = fopen($file, 'w');
 fwrite($fh, 0);
 fclose($fh);
}
$data = (int)file_get_contents($file);
?>
<?php 
$file = file("connect/view_count.txt");
$count = implode("", $file);
$count++;
$myfile = fopen("connect/view_count.txt","w");
fputs($myfile,$count);
fclose($myfile);
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>DuckDuckGo</title>
	<meta charset="UTF-8">
	<meta property="og:image" content="https://klondikeitblogger.ga/programs12/DuckDuckGo/img/duckduckgo_desktop_app.0.jpg">
    <meta property="og:url" content="https://klondikeitblogger.ga/">
    <meta property="og:title" content="DuckDuckGo">
    <meta property="og:description" content="DuckDuckGo – это простое и многофункциональное приложение — отличная альтернатива стандартным браузерам.DuckDuckGo обещает всем своим пользователям полную конфиденциальность и безопасность в сети Интернет.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<link href="img/favicon.png" rel="shortcut icon"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/more.css"/>
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  	/>
  	<script src="wow.min.js"></script>
  	<script>new WOW().init();</script>
</head>
<body>
<div class="hamburger-menu">
		<input id="menu__toggle" type="checkbox" />
		<label class="menu__btn" for="menu__toggle">
		  <span></span>
		</label>
		<a class="site-logo wow animate__ animate__fadeIn animated" href="index.html" style="visibility: visible; animation-name: fadeIn;">
			<img src="img/logo.png" alt="">
		</a>
		<ul class="menu__box">
			<a href="https://klondikeitblogger.ga/">Домашняя страница</a>
			<a href="https://klondikeitblogger.ga/program.html">Программы</a>
			<a href="https://klondikeitblogger.ga/program_android.html">Программы под Android</a>		
			<a href="https://www.youtube.com/channel/UCUIvzn8IMJevEfua3OPD4mg">Наш YouTube</a>
			<a href="https://t.me/ait_bro01z">Наш Telegram</a>
		</ul>
	  </div>
	<section class="page-section recent-game-page spad">
		<div class="container">
			<div class="photo">
					  	<div class="content">
				<div class="DriverTest">
					<img src="img/unnamed (1).png" alt="">
				</div>
				<div class="iobith1">
					<h1>DuckDuckGo</h1>
				</div>
		</div>
			</div>
<div class="static">
<div><img class="view" src="img/view.png" alt=""><span class="vie">Просмотров: <?=$count ?></span><div>
	<span id="like"><input type="button" id="link" value="Лайк!"/><img class="like" src="img/like.png" alt=""></span>
	<div class="counter"><h6 id="counter"><?= $data ?></h6></div>
	<script src="https://yastatic.net/share2/share.js"></script>
	<div class="soch"><div class="ya-share2" data-curtain data-size="l" data-shape="round" data-services="vkontakte,facebook,odnoklassniki,telegram,twitter,linkedin"></div></div>
</div>
			<div class="opis">
			<p id="text21">
					DuckDuckGo – это простое и многофункциональное приложение — отличная альтернатива стандартным браузерам.DuckDuckGo обещает всем своим пользователям полную конфиденциальность и безопасность в сети Интернет. И он сдерживает обещания! Ни для кого не секрет, что утечка персональной информации в интернете – это обычное дело. Чтобы вы не попадались на уловки мошенников и не чувствовали себя пострадавшими DuckDuckGo предлагает вам воспользоваться защищенным способом интернет-серфинга. Просматривайте любимые веб-страницы и ни о чем не беспокойтесь!
					Никаких сетевых рекламных трекеров! Приложение блокирует любые, следящие за вами, трекеры. Более того, вы сами сможете их отследить. Также благодаря шифровке соединения ни один сайт не сможет считать вашу персональную информацию. Так что оставайтесь в безопасности и будьте анонимными вместе с DuckDuckGo!
				</p>
				<div class="vozv"><h1>Особенности DuckDuckGo:</h1></div>
				<div class="osob">
					<li>Показ рейтинга конфиденциальности;</li>
					<li>Кнопка мгновенного закрытия всех вкладок.</li>
					<li>Защита шифрованием;</li>
					<li>Анонимный поиск;</li>
					<li>Блокировка рекламных трекеров;</li>
				</div>
			</div>
			</div>
			<a id="ifandonwlod" href="https://verstkag.github.io/filesprogandroid/com.duckduckgo.mobile.android_5.111.0_51110000.apk">Скачать сейчас!</a>
			<div class="Driv1">
				<img src="img/duckduckgo_desktop_app.0.jpg" alt="">
				</div>
	</section>
	<footer class="footer-section">
			<ul class="footer-menu">
				<li><a class="home" href="https://klondikeitblogger.ga/">Домашняя страница</a></li>
				<li><a class="youtube" href="https://www.youtube.com/channel/UCUIvzn8IMJevEfua3OPD4mg">Наш YouTube</a></li>
				<li><a class="telegram" href="https://t.me/ait_bro01z">Наш Telegram</a></li>
				<li><a class="prog" href="https://klondikeitblogger.ga/program.html">Программы</a></li>
				<li><a class="and_prog" href="https://klondikeitblogger.ga/program_android.html">Программы под Android</a></ul>
			</ul>
			<h6 class="copyright">©2021-2022 Автор проекта - <a class="it-personality" href="https://klondikeitblogger.ga/it-personality/"> IŦ-Personality</a></h6>

	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="js/m7i.js" type="text/javascript"></script>
    </body>
</html>