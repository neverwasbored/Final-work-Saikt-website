<?php
	session_start();
	if(!isset($_SESSION['login'])){
		echo("<script>
		alert('Авторизуйтесь.');
		location.replace('http://localhost/kostya2003/index.php');
		</script>");
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>ProjectsFromSaikt</title>
	<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='styles.css'>
	<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<meta http-equiv="Content-Type" content="text/html">
	<meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="index.php">SAIKTprojects</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbar1">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item ">
							<a class="nav-link active" href="index.php">Главная<span class="sr-only"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="projects.php">Проекты</a>
						</li>
						<LI>
							<a class="nav-link" href="exit.php">Выйти</a>
						</LI>
					</ul>
				</div>
				<div>
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="personal.php" ><i class="bi bi-person-circle"> </i><?php echo($_SESSION['login']); ?></a>
						</li>
					<ul>
				</div>
			</nav>
		</div>
	</div>
</div>

<div class="container-fluid upperg">
      <div class="row">
			<div class="col-md-4">
			<center>
				<div class="card">
  					<img src="img/pc.png" class="card-img-top" alt="...">
  					<div class="card-body">
   						<h5 class="card-title" style="color:#1560BD;">ПОЛЬЗОВАТЕЛЬ ПК</h5>
						<h5 class="card-title text-opacity-75" style="color:#1560BD;"><i class="bi bi-person-fill" style="color: primary;"></i> Для кого?</h5>
						<p>Школьников от 8 до 14 лет (начальный уровень)</p>
						<h5 class="card-title text-opacity-75" style="color:#1560BD;"><i class="bi bi-book-fill" style="color: primary;"></i> Чему научим?</h5>
						<p class="card-text">
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Владеть ПК на уровне продвинутого пользователя<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Редактировать изображения, аудио, видео<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Создавать анимации, 3D-модели, 2D-игры<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Разрабатывать несложные сайты на языках HTML, CSS
						</p>
    					<a href="#" class="btn btn-danger">Подробнее</a>
  					</div>
				</div>
				</center>
			</div>
			<div class="col-md-4">
			<center>
				<div class="card">
  					<img src="img/pc.png" class="card-img-top" alt="...">
  					<div class="card-body">
   						<h5 class="card-title" style="color:#1560BD;">WEB-ДИЗАЙН</h5>
						<h5 class="card-title text-opacity-75" style="color:#1560BD;"><i class="bi bi-person-fill" style="color: primary;"></i> Для кого?</h5>
						<p>Школьников от 12 до 15 лет (базовый уровень)</p>
						<h5 class="card-title text-opacity-75" style="color:#1560BD;"><i class="bi bi-book-fill" style="color: primary;"></i> Чему научим?</h5>
						<p class="card-text">
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Использовать графические редакторы и верстать сайты<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Создавать сайты-визитки, персональные страницы<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>“Оживлять” web-страницы с помощью JavaScript<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Работать с системами управления контентом (CMS)
						</p>
    					<a href="#" class="btn btn-danger">Подробнее</a>
  					</div>
				</div>
				</center>
			</div>
			<div class="col-md-4">
			<center>
				<div class="card">
  					<img src="img/pc.png" class="card-img-top" alt="...">
  					<div class="card-body">
   						<h5 class="card-title" style="color:#1560BD;">WEB-ПРОГРАММИРОВАНИЕ</h5>
						<h5 class="card-title text-opacity-75" style="color:#1560BD;"><i class="bi bi-person-fill" style="color: primary;"></i> Для кого?</h5>
						<p>Школьников от 13 до 16 лет (после курса по Web-дизайну)</p>
						<h5 class="card-title text-opacity-75" style="color:#1560BD;"><i class="bi bi-book-fill" style="color: primary;"></i> Чему научим?</h5>
						<p class="card-text">
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Разрабатывать сайты и web-приложения на языке PHP<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Работать с базами данных, языком запросов SQL<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Создавать интернет-магазины, социальные сети<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Разрабатывать личные кабинеты (backend) для сайтов
						</p>
    					<a href="#" class="btn btn-danger">Подробнее</a>
  					</div>
				</div>
				</center>
			</div>
      </div>
      <div class="row">
			<div class="col-md-4">
			<center>
				<div class="card">
  					<img src="img/pc.png" class="card-img-top" alt="...">
  					<div class="card-body">
   						<h5 class="card-title" style="color:#1560BD;">ПРОГРАММИРОВАНИЕ НА PYTHON</h5>
						<h5 class="card-title text-opacity-75" style="color:#1560BD;"><i class="bi bi-person-fill" style="color: primary;"></i> Для кого?</h5>
						<p>Школьников от 12 до 15 лет (базовый уровень)</p>
						<h5 class="card-title text-opacity-75" style="color:#1560BD;"><i class="bi bi-book-fill" style="color: primary;"></i> Чему научим?</h5>
						<p class="card-text">
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Создавать прикладные программы на языке Python<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Разрабатывать собственные игры и графику к ним<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Работать с данными, файлами и каталогами<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Владеть инструментами компьютерного моделирования
						</p>
    					<a href="#" class="btn btn-danger">Подробнее</a>
  					</div>
				</div>
				</center>
			</div>
			<div class="col-md-4">
			<center>
				<div class="card">
  					<img src="img/pc.png" class="card-img-top" alt="...">
  					<div class="card-body">
   						<h5 class="card-title" style="color:#1560BD;">ПРОГРАММИРОВАНИЕ НА C/C++</h5>
						<h5 class="card-title text-opacity-75" style="color:#1560BD;"><i class="bi bi-person-fill" style="color: primary;"></i> Для кого?</h5>
						<p>Школьников от 15 до 17 лет (базовый уровень)</p>
						<h5 class="card-title text-opacity-75" style="color:#1560BD;"><i class="bi bi-book-fill" style="color: primary;"></i> Чему научим?</h5>
						<p class="card-text">
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Разбираться в синтаксисе языков C и C++<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Понимать алгоритмы и принципы программирования<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Основам объектно-ориентированного программирования<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Разрабатывать ПО для учебных и коммерческих задач
						</p>
    					<a href="#" class="btn btn-danger">Подробнее</a>
  					</div>
				</div>
				</center>
			</div>
			<div class="col-md-4">
			<center>
				<div class="card">
  					<img src="img/pc.png" class="card-img-top" alt="...">
  					<div class="card-body">
   						<h5 class="card-title" style="color:#1560BD;">РАЗРАБОТКА ИГР</h5>
						<h5 class="card-title text-opacity-75" style="color:#1560BD;"><i class="bi bi-person-fill" style="color: primary;"></i> Для кого?</h5>
						<p>Школьников от 12 до 17 лет (базовый уровень)</p>
						<h5 class="card-title text-opacity-75" style="color:#1560BD;"><i class="bi bi-book-fill" style="color: primary;"></i> Чему научим?</h5>
						<p class="card-text">
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Придумывать идеи для игровых проектов и учебных программ<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Создавать игры на популярном движке Unity<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Писать скрипты и программировать на языке C#<br>
							<i class="bi bi-lightning-charge-fill" style="color: red;"></i>Добавлять элементы дополненной реальности (AR) в свои проекты
						</p>
    					<a href="#" class="btn btn-danger">Подробнее</a>
  					</div>
				</div>
				</center>
			</div>
      </div>
    </div>
	<script src="main.js"></script>
</body>
</html>