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
						<li class="nav-item">
							<a class="nav-link active" href="index.php">Главная</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="projects.php">Проекты<span class="sr-only"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Регистрация</a>
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<form class="form-horizontal" method="POST" action="registration.php">
													<fieldset>
														<legend>Регистрация</legend>
														<div class="form-group">
															<label class="col-md-12 control-label" for="textinput">
																Ваш логин 
																<div class="col-md-12">
																	<input type="text" placeholder="Логин" class="form-control input-md" name="login" autocomplete="on" minlength="4" maxlength="20" required>  
																</div>
															</label> 
														</div>
														<div class="form-group">
															<label class="col-md-12 control-label password--label" for="passwordinput">
																Ваш пароль
																<div class="col-md-12">
																	<input type="password" placeholder="Пароль" data-target="#js-first-password" id="js-first-password" class="form-control input-md" name="pass" autocomplete="on" minlength="6" maxlength="20" required>
																	<button type="button" class="password--btn js-btn-password" data-target="#js-first-password"><img src="img/eye-fill.svg" alt="img"></button>
																</div>
															</label>
														</div>
														<div class="form-group">
															<label class="col-md-12 control-labe password--label" for="passwordinput">
																Повторите пароль
																<div class="col-md-12 w">
																	<input type="password" placeholder="Пароль" data-target="#js-second-password" id="js-second-password" class="form-control input-md" name="passag" minlength="6" maxlength="20" required>
																	<button type="button" class="password--btn js-btn-password" data-target="#js-second-password"><img src="img/eye-fill.svg" alt="img"></button>
																</div>
															</label>
														</div>
														<div class="form-group">
															<label class="col-md-12 control-label" for="textinput">
																Ваше имя  
																<div class="col-md-12">
																	<input type="text" placeholder="Имя" class="form-control input-md" name="fname" maxlength="20" required>
																</div>
															</label>
														</div>
														<div class="form-group">
															<label class="col-md-12 control-label" for="textinput">
																Ваша фамилия  
																<div class="col-md-12">
																	<input type="text" placeholder="Фамилия" class="form-control input-md" name="lname" maxlength="20" required>
																</div>
															</label>
														</div>
														<div class="form-group">
															<label class="col-md-12 control-label" for="selectbasic">
																Выберите год окончания обучения
																<div class="col-md-12">
																	<select id="selectbasic" class="form-control" name="year" required>
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
															</label>
														</div>
														<div class="form-group">
															<div class="col-md-12">
																<input type="submit" id="singlebutton" class="btn btn-dark" name="do_signup"></input>
															</div>
														</div>
														
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="signin.php">Войти</a>
						</li>
					</ul>
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