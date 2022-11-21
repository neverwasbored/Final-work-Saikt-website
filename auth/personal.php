<?php
	include_once("connect.php");
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
							<a class="nav-link" href="index.php">Главная<span class="sr-only"></span></a>
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
							<a class="nav-link active" href="personal.php" ><i class="bi bi-person-circle"> </i><?php echo($_SESSION['login']); ?></a>
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
				<h3><?php echo''.$rowname['firstname'].''; ?> <?php echo''.$rowname['lastname'].''; ?></h3>
				<h4>Год окончания курса: <?php echo''.$rowname['end'].''; ?></h4>
				<img src="img/<?php echo''.$rowimg['img'].''; ?>" width= 400px style="margin-top:5em;">
			</center>
		</div>
		<div class="col-md-4">
            <center>
            	<h1>Личный кабинет</h1>
				<form class="form-horizontal" method="POST" action="update.php">
					<fieldset>
						<legend>Редактировать данные</legend>
						<h5>Заполняйте поля которые необходимо редактировать</h5>
						<div class="form-group">
							<label class="col-md-12 control-label" for="textinput">Ваш логин</label>  
							<div class="col-md-12">
								<input type="text" placeholder="Логин" class="form-control input-md" name="loginup" autocomplete="on" minlength="4" maxlength="20">  
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12 control-label" for="passwordinput">Ваш пароль</label>
							<div class="col-md-12">
								<input type="password" placeholder="Пароль" data-target="#js-first-password" id="js-first-password" class="form-control input-md" name="pass" autocomplete="on" minlength="6" maxlength="20">
								<button type="button" class="password--btn js-btn-password" data-target="#js-first-password"><img src="img/eye-fill.svg" alt="img"></button>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12 control-label" for="passwordinput">Повторите пароль</label>
							<div class="col-md-12">
								<input type="password" placeholder="Пароль" data-target="#js-second-password" id="js-second-password" class="form-control input-md" name="passag" minlength="6" maxlength="20">
								<button type="button" class="password--btn js-btn-password" data-target="#js-second-password"><img src="img/eye-fill.svg" alt="img"></button>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12 control-label" for="textinput">Ваше имя </label>  
							<div class="col-md-12">
								<input type="text" placeholder="Имя" class="form-control input-md" name="fname" maxlength="20">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12 control-label" for="textinput">Ваша фамилия</label>  
							<div class="col-md-12">
								<input type="text" placeholder="Фамилия" class="form-control input-md" name="lname" maxlength="20">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-12 control-label" for="selectbasic">Выберите год окончания обучения</label>
							<div class="col-md-12">
								<select id="selectbasic" class="form-control" name="year">
									<option value="2022">2022</option>
									<option value="2021">2021</option>
									<option value="2020">2020</option>
									<option value="2019">2019</option>
									<option value="2018">2018</option>
									<option value="2017">2017</option>
									<option value="2016">2016</option>
									<option value="2015">2015</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<input type="submit" id="singlebutton" class="btn btn-dark" name="do_signup"></input>
							</div>
						</div>
					</fieldset>
				</form>
            </center>
		</div>
		<div class="col-md-4">

		</div>
    </div>
    <div class="row">
		<div class="col-md-4">
			<center>
				<br>
            	<form method="post" enctype="multipart/form-data" action="functions.php">
                	<input type="file" name="file">
                	<input type="submit" value="Загрузить фото">
            	</form>
			</center>
		</div>
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">

		</div>
    </div>
</div>
<script src="main.js"></script>
</body>
</html>