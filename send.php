<?php
$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Неверно введены данные.</span>";
if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];	
	$to = "eldar0bidzhiev@gmail.com";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;

		$from = "rashid.appakov@gmail.com";

	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

	 	if(@mail($to,$subject,$message,$headers))
	{

	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Ваш отзыв успешно отправлен!</span>";

	}
}
?>
<!DOCTYPE HTML>
<html>
	<head>
	
		<title>HELPER | Помощь при решении любых проблем</title>		
		<link rel="shortcut icon" href="images/favicon.png" type="image/png">

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="assets/css/main.css" />
		

	</head>
	<body class="landing">

	
			<header id="header" class="alt">
				<h1><a href="index.html">Помощник</a></h1>
				<a href="#nav">Меню</a>
			</header>

		
			<nav id="nav">
				<ul class="links">
					<li><a href="index.html">Главная</a></li>
					<li><a href="generic.html">Услуги</a></li>
					<li><a href="sail.html">Товары</a></li>
				</ul>
			</nav>		
			<section id="banner">
				<img src="images/logo.png" width="135" height="120">
				<br>
				<br>
				<br>
				<h2>Сервис по решению любых проблем</h2>				
				<ul class="actions">
					<li><a href="generic.html" class="button big special">Подробнее</a></li>
				</ul>
			</section>
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/med.jpg" alt="" /></span>
						<div class="content">
							<h2>Предостовляем медицинские услуги профессиональных врачей</h2>
							<p>Наши партеры - лучшие клиники всех городов Ставропольского края.</p>
							<ul class="actions">
								<li>
									<a href="generic.html" class="button alt">Подробнее</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="images/pic02.jpg" alt="" /></span>
						<div class="content">
							<h2>Ремонт труб, водопровода </h2>
							<p>Мы предоставим вам услуги сантехника, который качественно отремонтрует трубы в доме, офисе итд.</p>
							<ul class="actions">
								<li>
									<a href="generic.html" class="button alt">Подробнее</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature left">
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
						<div class="content">
							<h2>Услуга помощи при переезде.</h2>
							<p>Наше агенство предовставляет услуги по аренде автомобилей , организации переезда итд... Можете подробно ознакомиться с перечнем наших услуг по кнопке подробнее</p>
							<ul class="actions">
								<li>
									<a href="generic.html" class="button alt">Подробнее</a>
								</li>
							</ul>
						</div>
					</article>				
				</div>
			</section>


			<section id="two" class="wrapper special">
				<div class="inner">

				</div>
			</section>

		
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2> <a href="tel:+79964173995">+7(996)417-39-95</a></h2>
						<p>Предоставляем любые услуги</p>
					</header>
					<ul class="actions">
						<li><a href="tel:+79964173995" class="button big alt">Позвонить</a></li>
					</ul>
				</div>
			</section>

			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Оставьте отзыв</h2>
						<p>Оцените работу нашей компании</p>
					</header>
					<form action="send.php" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Имя" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Отзыв" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" id="submitcontact" name="submitcontact" value="Отправить" /></li>
							<li><input type="reset" class="alt" value="Сброс" /></li>
						</ul>
					</form>
				</div>
			</section>

			<footer id="footer">
				<div class="inner">
					<ul class="icons">						
						<li><a href="https://www.instagram.com/willy.wonka.sh.f/" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>						
					</ul>
					<ul class="copyright">
						<li>Helper©.</li>
						<li>Design: <a href="https://vk.com/stop1bitching">ARR</a>.</li>
					</ul>
				</div>
			</footer>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>

			<script src="assets/js/main.js"></script>

	</body>
</html>