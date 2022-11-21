<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin</title>
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .password--btn{
    position: absolute;
    right: 5%;
    top: 25%;
    border: none;
    background-color: transparent;

}

    </style>
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
<main class="form-signin w-100 m-auto">
    <form method="POST" action="auth/authorization.php">
        <img class="mb-4" src="img/logo.png" alt="" width="100" height="100">
        <h1 class="h3 mb-3 fw-normal">Пожалуйста войдите</h1>
        <div class="form-floating">
            <input type="login" class="form-control" id="floatingInput" placeholder="login" aria-label="login" name="authlogin" required>
            <label for="floatingInput">Логин</label>
        </div>
        <div class="form-floating password--label">
            <input type="password" class="form-control"  id="js-first-password" data-target="#js-first-password" placeholder="Password" aria-label="pass" name="authpass" autocomplete="on" minlength="6" maxlength="20" required>
            <button type="button" class="password--btn js-btn-password" data-target="#js-first-password"><img src="img/eye-fill.svg" alt="img"></button>
            <label for="floatingPassword">Пароль</label>
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="bar"> Запомнить меня
            </label>
        </div>
        <input type="submit" id="singlebutton" class="w-100 btn btn-lg btn-dark" name="submitauth"></input>
        <a class="nav-link" href="index.php">На главную</a>
        <p class="mt-5 mb-3 text-muted">Saikt &copy; 2017–2022</p>
    </form>
</main>
<script>
let btnPass = document.querySelectorAll('.js-btn-password');
btnPass.forEach(function(btn){
    btn.onclick = function (){
        let target = this.getAttribute('data-target'),
            inputPass = document.querySelector(target);
        if(inputPass.getAttribute('type') === 'password'){
            inputPass.setAttribute('type', 'text');
            btn.classList.add('active');
        }
        else{
            inputPass.setAttribute('type', 'password');
            btn.classList.remove('active');
        }
    }
})
</script>
</body>
</html>
