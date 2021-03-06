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
	<title>Adobe Acrobat Reader. Скачать.</title>
	<meta charset="UTF-8">
	<meta property="og:image" content="https://klondikeitblogger.ga/programs12/Adobe%20Acrobat%20Reader/img/bd05dc22e479cd798fe0613a72093558.jpg">
    <meta property="og:url" content="https://klondikeitblogger.ga/">
    <meta property="og:title" content="Adobe Acrobat Reader">
    <meta property="og:description" content="Adobe Acrobat Reader — читалка для PDF-файлов.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link href="img/favicon.png" rel="shortcut icon"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/more1.css"/>
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
		<a class="site-logo wow animate__ animate__fadeIn animated" href="#" style="visibility: visible; animation-name: fadeIn;">
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
				<div class="DriverTest">
						<img src="img/195143_normal.png" alt="">
					</div>
					<div class="iobith1">
						<h1>Adobe Acrobat Reader</h1>
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
					Adobe Reader для Android - это программа для чтения PDF, которая фокусируется на простоте и скорости . Это приложение не может сделать ничего удивительного, но это позволит вам легко читать даже самые большие PDF-документы. Крайне важно, что он также обладает большой функцией масштабирования и быстрым поиском, что необходимо для того, чтобы попытаться отследить все это на экране с очень маленьким мобильным экраном.
					<br>
					Организация документов с помощью Adobe Reader также является приятным опытом - она автоматически обнаруживает PDF-файлы на вашем телефоне и отображает их, когда вы нажимаете кнопку «Открыть», расположенную на верхней панели, которая появляется при касании экрана или через опции меню Adobe Reader. Также в верхней панели Adobe Reader вы можете поделиться документом, который вы читаете.
				</p>
				<div class="vozv"><h1>Особенности Adobe Acrobat:</h1></div>
				<div class="osob">
					<li>Открытие PDF файлов во вложениях электронной почты и на веб-сайтах.</li>
					<li>Выплывающий вид содержания страниц на экран для удобства просмотра.</li>
					<li>Работа с PDF файлами с использованием жестов Multi-Touch, Pinch zoom, двойное нажатие Zoom, Flick scrolling& Panning.</li>
				</div>
			</div>
			</div>
			<a id="ifandonwlod" href="https://verstkag.github.io/filesprogandroid/com-adobe-reader-1923120999-61590211-5e5be50a18321798cf865f57be91c0df.apk">Скачать сейчас!</a>
			<div class="Driv1 wow animate__animated animate__fadeInRight">
				<img src="img/bd05dc22e479cd798fe0613a72093558.jpg" alt="">
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
	<script src="js/m5i.js" type="text/javascript"></script>
    </body>
</html>