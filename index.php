<?php
session_start();
$id = session_id();

if ($id != "") {

	$CurrentTime = time();

	$LastTime = time() - 3600;
	$base = "session.txt";
	$file = file($base);
	$k = 0;
	for ($i = 0; $i < sizeof($file); $i++) {
		$line = explode("|", $file[$i]);
		if ($line[1] > $LastTime) {
			$ResFile[$k] = $file[$i];
			$k++;
		}
	}
	for ($i = 0; $i < sizeof($ResFile); $i++) {
		$line = explode("|", $ResFile[$i]);
		if ($line[0] == $id) {
			$line[1] = trim($CurrentTime) . "\n";
			$is_sid_in_file = 1;
		}
		$line = implode("|", $line);
		$ResFile[$i] = $line;
	}
	$fp = fopen($base, "w");
	for ($i = 0; $i < sizeof($ResFile); $i++) {
		fputs($fp, $ResFile[$i]);
	}
	fclose($fp);
?>
	<!DOCTYPE html>
	<html lang="zxx">

	<head>
		<title>Клондайк IT Блогера. KlondikeItBlogger. Программы, товары, полезный контент.</title>
		<meta charset="UTF-8">
		<meta name="yandex-verification" content="5099f4441fab998a" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta property="og:image" content="https://klondikeitblogger.ga/img/b61a2a0d52.png">
		<meta property="og:description" content="Здесь присутствуют самые разные программы для программиста или IT-Ютубера.
Присутствует годный софт под Windows и Android, полезный контент, товары для блогера и много чего еще.">

		<link href="img/favicon.png" rel="shortcut icon" />
		<link rel="stylesheet" href="css/bootstrap18.min.css" />
		<link rel="stylesheet" href="css/mains.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

	</head>

	<body>
		<div id="progress"></div>
		<div class="hamburger-menu">
		<div class="container">
			<input id="menu__toggle" type="checkbox" />
			<label class="menu__btn" for="menu__toggle">
				<span></span>
			</label>
			<a class="site-logo animate__animated animate__fadeIn" href="index.php" style="visibility: visible; animation-name: fadeIn;">
				<img src="img/logo.png" alt="">
			</a>
			<ul class="menu__box">
				<div class="menu_none">
					<a class="mainmenubtn animate__animated animate__fadeIn" href="program.html">Программы</a>
					<div class="dropdown-child">
						<a href="program_android.html">Программы под Android</a>
					</div>
				</div>

				<a class="animate__animated animate__fadeIn" href="music.html">Музыка</a>
				<a class="animate__animated animate__fadeIn" href="books.html">Книги</a>
				<a class="animate__animated animate__fadeIn" href="https://www.youtube.com/channel/UCUIvzn8IMJevEfua3OPD4mg">YouTube</a>
				<a class="animate__animated animate__fadeIn" href="https://t.me/ait_bro01z">Telegram</a>
			<?php
			if (!$is_sid_in_file) {
				$fp = fopen($base, "a-");
				$line = $id . "|" . $CurrentTime . "\n";
				fputs($fp, $line);
				fclose($fp);
			}
			echo "<div class='online animate__animated animate__fadeIn'>
						Онлайн: <h4>" . sizeof(file($base)) . "</h4></div>";
		}
			?>
			</ul>
		</div>
		</div>
		<div class="parallax">
		</div>
	
		<div class="klondike wow animate__animated animate__zoomIn container">
				<strong>Клондайк  <span> IT </span> Блогера</strong>
				<p>Приветствую вас на этом сайте. Здесь присутствуют самые разные программы для программиста или IT-Ютубера.
					<br>Присутствует годный софт под Windows и Android, полезный контент, товары для блогера и много чего еще.
				</p>
			</div>

		<div class="latest-news-section">
			<div class="ln-title">На сайте присутствует =>></div>
			<div class="news-ticker">
				<div class="news-ticker-contant">
					<div class="nt-item">Полезный контент</div>
					<div class="nt-item">Годный софт под Windows и Android</div>
					<div class="nt-item">Лучшие товары для блогера</div>
					<div class="nt-item">Статьи</div>
					<div class="nt-item">Книги</div>
					<div class="nt-item">Скрипты</div>
				</div>
			</div>
		</div>
		<section class="recent-game-section wow animate__animated animate__fadeIn spad1 set-bg">
			<div class="content_block">
				<div class="cont1">
					<div class="feature-item set-bg" data-setbg="img/features/01.png">
						<span class="cata new">02.07.2022</span>
						<div class="fi-content text-white">
							<h5><a href="programs12/Driver/categories.php" target="_blank">Driver Booster</a></h5>
							<p>Программа, созданная для обновления драйверов для аудио, видео, USB-девайсов и для других устройств на вашем ПК, которые устарели и поэтому могут негативно повлиять на работу компьютера.</p>
							<div><a id="item_program" href="programs12/Driver/categories.php" target="_blank">Подробнее</a></div>
						</div>
					</div>
				</div>
				<div class="cont2">
					<div class="feature-item set-bg" data-setbg="img/features/02.jpg">
						<span class="cata new">02.07.2022</span>
						<div class="fi-content text-white">
							<h5><a href="programs12/Unlocker/categories.php" target="_blank">Unlocker</a></h5>
							<p>Бесплатная утилита, позволяющая разблокировать файлы, используемые системным процессом или находящиеся в закрытом доступе.</p>
							<div><a id="item_program" href="programs12/Unlocker/categories.php" target="_blank">Подробнее</a></div>
						</div>
					</div>
				</div>
				<div class="cont3">
					<div class="feature-item set-bg" data-setbg="img/features/03.png">
						<span class="cata new">02.07.2022</span>
						<div class="fi-content text-white">
							<h5><a href="programs12/reg/categories.php" target="_blank">Reg Organizer</a></h5>
							<p> Это программное обеспечение, предназначено для полного удаления программ,настройки автоматически запускаемых приложений, расширенной чистки и оптимизации Windows.</p>
							<div><a id="item_program" href="programs12/reg/categories.php" target="_blank">Подробнее</a></div>
						</div>
					</div>
				</div>
				<div class="cont4">
					<div class="feature-item set-bg" data-setbg="img/features/04.jpg">
						<span class="cata new">02.07.2022</span>
						<div class="fi-content text-white">
							<h5><a href="programs12/VMware/categories.php" target="_blank">VMware Workstation Pro
								</a></h5>
							<p>Это программное обеспечение виртуализации, предназначенное для компьютеров x86-64 операционных систем Microsoft Windows и Linux.</p>
							<div><a id="item_program" href="programs12/VMware/categories.php" target="_blank">Подробнее</a></div>
						</div>
					</div>
				</div>
			</div>
			<div><a class="program" href="program.html" target="_blank">Еще программы</a></div>
		</section>

		<section class="recent-game-section spad set-bg">
			<div class="container">
				<div class="section-title">
					<h2>Полезные видеоролики</h2>
				</div>
				<div class="all">
					<input checked type="radio" name="respond" id="desktop">
					<article id="slider">
						<input checked type="radio" name="slider" id="switch1">
						<input type="radio" name="slider" id="switch2">
						<input type="radio" name="slider" id="switch3">
						<input type="radio" name="slider" id="switch4">
						<input type="radio" name="slider" id="switch5">
						<div id="slides">
							<div id="overflow">
								<div class="image">
									<article>
										<div class="row">
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/656-min.webp"></img>
													<div class="rgi-content">
														<h5 href="https://youtu.be/DjOP9iZvjNc">Музыка, которую используют IT-Ютуберы! Музыка без авторских прав для YouTube!</h5>
														<p>В этом видео я показал какие треки используют в своих видео Айти-Ютуберы. </p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/DjOP9iZvjNc" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/maxresdefault-min.webp"></img>
													<div class="rgi-content">
														<h5>Как сделать счетчик онлайн на сайте. На PHP.</h5>
														<p>В этом видео мы написали счетчик онлайн для сайта, которому можно будет в дальнейшем добавлять стили и т.п</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/Ly8gXhch6ug" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/63-min.webp"></img>
													<div class="rgi-content">
														<h5>Пишем свой Браузер на Python при помощи PyQt5!</h5>
														<p>В этом видео мы написали свой Браузер на Python при помощи библиотеки PyQt5! Приятного просмотра!</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/eFbqf_CzToo" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>

										</div>
									</article>
									<article>
										<div class="row">
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/pa-min.webp"></img>
													<div class="rgi-content">
														<h5>Генератор паролей на Python за 2 минуты!</h5>
														<p>В этом видео мы написали генератор паролей на Python за 2 минуты при помощи модуля random.</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/xpudfTVix4A" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/mqdefault-_1_.webp"></img>
													<div class="rgi-content">
														<h5>Уроки SQL для начинающих! #3 - Псевдонимы, итоговые функции</h5>
														<p>В этом видео я рассказал про итоговые функции, псевдонимы и оператор WHERE. Приятного просмотра!</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/mLw2PugXZVg" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/maxresdefault-_1_-min.webp"></img>
													<div class="rgi-content">
														<h5>Уроки SQL для начинающих!#2 - Индексы, добавление и обновление записей, Count.</h5>
														<p>Приятного просмотра!</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/sEKuhwPaomc" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>

									</article>
									<article>
										<div class="row">
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/maxresdefault-_2_ (1)-min.webp"></img>
													<div class="rgi-content">
														<h5>Уроки SQL для начинающих! #1 - Установка локального сервера, работа с базами данных.</h5>
														<p>В этом видео я показал как установить и запустить локальный сервер.</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/Lfx1NIC8GUQ" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/88-min.webp"></img>
													<div class="rgi-content">
														<h5>Пишем Telegram спамер на Python при помощи PyAutoGUI!</h5>
														<p>В этом видео мы написали спамер для Телеграм на Python при помощи библиотеки PyAutoGUI.</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/V45WuKux6vk" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/maxresdefault-_3_-min.webp"></img>
													<div class="rgi-content">
														<h5>MDK4.Dos атака на Wifi. Как защититься? {Kali Linux}</h5>
														<p>В этом видео я рассказал про такой инструмент в Линукс как mdk4. Глушим Wi-Fi соседей! =)</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/wItAVJwNZuU" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
									</article>
									<article>
										<div class="row">
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/maxresdefault-_4_-min.webp"></img>
													<div class="rgi-content">
														<h5>Как сделать бота модератора для Telegram на Python?</h5>
														<p>В этом видео мы написали своими руками бота модератора для Telegram. Приятного просмотра!</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/WxX1FTeNWwA" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/rg1-min.webp"></img>
													<div class="rgi-content">
														<h5>#1 - Python Socket. Пишем консольный чат.</h5>
														<p>В этом видео я рассказал про библиотеку socket в python. При помощи ее мы написали простой консольный чат.</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/xhhvWORq-2Q" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/mqdefaul.webp"></img>
													<div class="rgi-content">
														<h5>#2 - Python Socket. Пишем собственный сервер на Python за 5 минут!</h5>
														<p>В этом видео мы написали собственный веб-сервер на Python за 5 минут. </p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/btmi2JmAwxY" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
										</div>
									</article>
									<article>
										<div class="row">
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/65-min.webp"></img>
													<div class="rgi-content">
														<h5>Оптимизация и настройка Windows 10 LTSC! Как повысить производительность пк?! Гайд</h5>
														<p>В этом видео я показал Как правильно оптимизировать и настроить Windows.</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/KiTq33v3KNI" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/maxresdefault5-min.webp"></img>
													<div class="rgi-content">
														<h5>I2p. Настройка самой анонимной и безопасной сети на данный момент!</h5>
														<p>В этом видео я показал как настроить и создать почту в I2P.</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/iVUcCHpFs08" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6">
												<div class="recent-game-item">
													<img width="360" height="205" src="img/videos/3tt-min.webp"></img>
													<div class="rgi-content">
														<h5>Как установить macOS Catalina на виртуальную машину?! VMware Workstation</h5>
														<p>В этом видео я рассказал Как установить macOS на виртуальную машину.</p>
														<a class="custom-btn1 btn-51" href="https://youtu.be/GF0X8C4-pWk" target="_blank"><span>Смотреть!</span></a>
													</div>
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
						</div>
						<div id="controls">
							<label for="switch1"></label>
							<label for="switch2"></label>
							<label for="switch3"></label>
							<label for="switch4"></label>
							<label for="switch5"></label>
						</div>
						<div id="active">
							<label for="switch1"></label>
							<label for="switch2"></label>
							<label for="switch3"></label>
							<label for="switch4"></label>
							<label for="switch5"></label>
						</div>
				</div>
			</div>
			</div>
		</section>

		<section class="recent-game-section wow animate__animated animate__fadeIn spad1 set-bg">
			<div class="section-tit">
				<h2>Программы под Android</h2>
			</div>
			<div class="content_block">
				<div class="cont1">
					<div class="feature-item set-bg" data-setbg="img/features/duck_duck_go.jpg">
						<span class="cata new">02.07.2022</span>
						<div class="fi-content text-white">
							<h5><a href="programs12/DuckDuckGo/DuckDuckGo.php" target="_blank">Программа DuckDuckGo</a></h5>
							<p>DuckDuckGo обещает всем своим пользователям полную конфиденциальность и безопасность в сети Интернет. И он сдерживает обещания!</p>
							<div><a id="DuckDuck" href="programs12/DuckDuckGo/DuckDuckGo.php" target="_blank">Подробнее</a></div>
							<div><a id="DuckDuckdow" href="https://verstkag.github.io/filesprogandroid/com.duckduckgo.mobile.android_5.111.0_51110000.apk" target="_blank">Скачать сейчас!</a></div>
						</div>
					</div>
				</div>
				<div class="cont2">
					<div class="feature-item set-bg" data-setbg="img/features/img1.jpg">
						<span class="cata new">02.07.2022</span>
						<div class="fi-content text-white">
							<h5><a href="programs12/EDS/EDS.php" target="_blank">Программа EDS</a></h5>
							<p>С помощью EDS вы можете скрыть и защитить ваши файлы от несанкционированного доступа к ним, поместив их в зашифрованный контейнер.</p>
							<div><a id="DuckDuck" href="programs12/EDS/EDS.php" target="_blank">Подробнее</a></div>
							<div><a id="DuckDuckdow" href="https://verstkag.github.io/filesprogandroid/1603174597_eds-v2-0-0-243-mod-5mod_ru.apk" target="_blank">Скачать сейчас!</a></div>
						</div>
					</div>
				</div>
				<div class="cont3">
					<div class="feature-item set-bg" data-setbg="img/features/adobe-acrobat-reader-5-1024x576.jpg">
						<span class="cata new">02.07.2022</span>
						<div class="fi-content text-white">
							<h5><a href="programs12/Adobe Acrobat Reader/Adobe Acrobat Reader.php" target="_blank">Adobe Acrobat Reader</a></h5>
							<p>Adobe Acrobat Reader — читалка для PDF-файлов. Adobe Acrobat Reader для Android предлагает такое же высокое качество просмотра PDF, как на рабочем столе.</p>
							<div><a id="DuckDuck" href="programs12/Adobe Acrobat Reader/Adobe Acrobat Reader.php" target="_blank">Подробнее</a></div>
							<div><a id="DuckDuckdow" href="https://verstkag.github.io/filesprogandroid/com-adobe-reader-1923120999-61590211-5e5be50a18321798cf865f57be91c0df.apk" target="_blank">Скачать сейчас!</a></div>
						</div>
					</div>
				</div>
				<div class="cont4">
					<div class="feature-item set-bg" data-setbg="img/features/unnamed.png">
						<span class="cata new">02.07.2022</span>
						<div class="fi-content text-white">
							<h5><a href="programs12/I2P/I2P.php" target="_blank">Анонимная сеть I2P
								</a></h5>
							<p>I2P, или Invisible Internet Project, — это на сегодняшний день самая анонимная сеть. Здесь ты можешь ходить по сайтам и пользоваться сервисами, не раскрывая сторонним лицам ни байта своей информации.</p>
							<div><a id="DuckDuck" href="programs12/I2P/I2P.php" target="_blank">Подробнее</a></div>
							<div><a id="DuckDuckdow" href="https://verstkag.github.io/filesprogandroid/app.apk" target="_blank">Скачать сейчас!</a></div>
						</div>
					</div>
				</div>
			</div>
			<div>
				<rut><a class="program" href="program_android.html" target="_blank">Еще программы</a></rut>
			</div>
		</section>

	<section class="recent-game-section wow animate__animated animate__fadeIn spad1 set-bg">
			<div class="section-tits wow animate__animated animate__fadeIn">
				<h2>Товары для блогера</h2>
			</div>
			<div class="block_goods">
					<div class="col-lg-3 col-md-6 cont1">
						<div class="review-item">
							<div class="review-cover set-bg" data-setbg="img/review/01.jpg">
							</div>
							<div class="review-text">
								<h5>Комплект USB микрофона UHURU UM925, профессиональный Студийный микрофон.</h5>
								<div><a id="product" href="https://aliexpress.ru/item/4001057904023.html?spm=a2g0o.productlist.0.0.788f37cfokACNj&s=p&ad_pvid=202109160900234038258290014170001238132_7&algo_pvid=699879be-6b55-42a8-90fa-8863ce6cb0d4&algo_expid=699879be-6b55-42a8-90fa-8863ce6cb0d4-6&btsid=0b8b037216318080231124165e5ff6&ws_ab_test=searchweb0_0,searchweb201602_,searchweb201603_" target="_blank">Подробнее</a></div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 cont2">
						<div class="review-item">
							<div class="review-cover set-bg" data-setbg="img/review/02.jpg">
							</div>
							<div class="review-text">
								<h5>Камера для экстремальной съемки SJCAM SJ8, серия SJ8 Air/SJ8 Plus/SJ8 Pro, 1290P, 4K, Wi-Fi, водонепроницаемая.</h5>
								<div><a id="product" href="https://aliexpress.ru/item/32896674158.html?spm=a2g0o.productlist.0.0.bb4e3e82oBWQ3H&s=p&ad_pvid=202109160907549994090253479180001277843_2&algo_pvid=de486d90-eb26-4710-9730-c6e4ef8e652f&algo_expid=de486d90-eb26-4710-9730-c6e4ef8e652f-1&btsid=0b8b037216318084744137457e60f8&ws_ab_test=searchweb0_0,searchweb201602_,searchweb201603_" target="_blank">Подробнее</a></div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 cont3">
						<div class="review-item">
							<div class="review-cover set-bg" data-setbg="img/review/03.jpg">
							</div>
							<div class="review-text">
								<h5>Wifi - Адаптер Alfa.AWUS036NH Kali сетевая карта Cdlinux Ubuntu,сетевая карта проникновения.</h5>
								<div><a id="product" href="https://aliexpress.ru/item/1005002955321689.html?spm=a2g2w.detail.1000014.9.3cf54ad8sijRoH&gps-id=pcDetailBottomMoreOtherSeller&scm=1007.14452.226710.0&scm_id=1007.14452.226710.0&scm-url=1007.14452.226710.0&pvid=19e4efd8-57ad-428e-9cf8-46d4faf0383e&_t=gps-id:pcDetailBottomMoreOtherSeller,scm-url:1007.14452.226710.0,pvid:19e4efd8-57ad-428e-9cf8-46d4faf0383e,tpp_buckets:4452%230%23226710%230_4452%233474%2316498%23561_4452%234862%2324463%23388_4452%233098%239599%23793_4452%235105%2323438%23134_4452%233564%2316062%2329_21387%230%23233228%2363_24525%230%23239210%2328&fromDetail" target="_blank">Подробнее</a></div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 cont4">
						<div class="review-item">
							<div class="review-cover set-bg" data-setbg="img/review/5.png">
							</div>
							<div class="review-text">
								<h5>Мини-ПК GK3V, Intel Celeron J4125, 8 Гб DDR4, 128 ГБ/256 ГБ, 4K 60 Гц HDMI VGA Win 11 мини ПК</h5>
								<div><a id="product" href="https://aliexpress.ru/item/1005001398636788.html?gatewayAdapt=glo2rus&sku_id=12000028188064411&spm=a2g0s.12269583.0.0.6a0048ab4ektt2" target="_blank">Подробнее</a></div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>
		<a class="custom-btn btn-5" href="https://www.donationalerts.com/r/maxshowpro" target="_blank"><span>Поддержать!</span></a>

		<footer class="footer-section">
			<ul class="footer-menu">
				<li><a class="home" href="#">Домашняя страница</a></li>
				<li><a class="youtube" href="https://www.youtube.com/channel/UCUIvzn8IMJevEfua3OPD4mg">Наш YouTube</a></li>
				<li><a class="telegram" href="https://t.me/ait_bro01z">Наш Telegram</a></li>
				<li><a class="prog" href="program.html">Программы</a></li>
				<li><a href="music.html">Музыка</a></li>
				<li><a class="and_prog" href="program_android.html">Программы под Android</a>
			</ul>
			</ul>
			<h6>©2021-2022 Автор проекта - <a class="it-personality" href="it-personality"> IŦ-Personality</a></h6>
		</footer>
		</div>
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.marquee.min.js"></script>
		<script src="js/main1.js"></script>
	</body>

	</html>