<!DOCTYPE html>
<html>
<head>
	<title>ProjectsFromSaikt</title>
	<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
	<link rel='stylesheet' type='text/css' href='styles.css'>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>	
	<script src="js/bootstrap.js"></script>
	<script src="main.js"></script>
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
							<a class="nav-link" href="index.php">Главная</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="projects.php">Проекты<span class="sr-only"></span></a>
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
															<label class="col-md-12 control-label" for="textinput">Ваш логин</label>  
															<div class="col-md-12">
																<input type="text" placeholder="Логин" class="form-control input-md" name="login" autocomplete="on" minlength="4" maxlength="20" required>  
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-12 control-label" for="passwordinput">Ваш пароль</label>
															<div class="col-md-12">
																<input type="password" placeholder="Пароль" class="form-control input-md" name="pass" autocomplete="on" minlength="6" maxlength="20" required>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-12 control-label" for="passwordinput">Повторите пароль</label>
															<div class="col-md-12">
																<input type="password" placeholder="Пароль" class="form-control input-md" name="passag" minlength="6" maxlength="20" required>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-12 control-label" for="textinput">Ваше имя </label>  
															<div class="col-md-12">
																<input type="text" placeholder="Имя" class="form-control input-md" name="fname" maxlength="20" required>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-12 control-label" for="textinput">Ваша фамилия</label>  
															<div class="col-md-12">
																<input type="text" placeholder="Фамилия" class="form-control input-md" name="lname" maxlength="20" required>
															</div>
														</div>
														<div class="form-group">
															<label class="col-md-12 control-label" for="selectbasic">Выберите год окончания обучения</label>
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
														</div>
														<div class="form-group">
															<div class="col-md-12">
																<input type="submit" class="btn btn-dark" name="do_signup"></input>
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

<div class="container-fluid">
      <div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<h3>Войдите на сайт чтобы посмотреть проекты</h3>
			</div>
			<div class="col-md-4">
			</div>
      </div>
</div>
</body>
</html>