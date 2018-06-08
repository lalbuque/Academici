<!DOCTYPE html>
<html lang="en">
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>login</title>
  <meta name="description" content="Personal portfolio of Web Designer and Developer Samir Alibabic">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="https://samiralibabic.github.io/portfolio/css/normalize.css">


  <!-- Google Font montserrat -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <!-- Font Awesome  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://samiralibabic.github.io/portfolio/css/font-mfizz-2.3.0/font-mfizz.css">

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
    crossorigin="anonymous">

  <!-- css da pagina -->
  <link rel="stylesheet" href="style/static.css">
  <link rel="stylesheet" href="style/login.css">

  <script src="https://samiralibabic.github.io/portfolio/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <header id="landing">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-items" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <span class="glyphicon glyphicon-home" aria-label="Home" aria-hidden="true"></span>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="main-menu-items">
          <ul class="nav navbar-nav">
            <li>
              <a href="login.html">Login</a>
            </li>
            <li>
              <a href="verificacaoacesso.html">Primeiro acesso</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <!-- div de instrução -->
    <div class="instrucao">
      <!-- Inicio do cofmrulario de login -->
      <div class="div-form hero-text-box">
        <div class="container">
          <div class="login" data-state="">


            <form method="post"  class="login__form" action="testedelogin.php">
              <p class="login__title">Insira seu Usuário e senha
                <br />
                <span class="login__title--grey">LEIA ATENTAMENTE AS INSTRUÇÔES</span>
                <br />
                <span class="login__title--grey">Ex-aluno:</span>
                <br />
                <span class="login__title--grey">
                  <bolder> 1.</bolder> Caso não seja cadastrado, entre na aba de primeiro acesso</span>
                <br />
                <span class="login__title--grey">2. Não esqueça de adicionar "AL" antes do usuário cadastrado</span>
                <br />
                <span class="login__title--grey">3. Em caso de duvidas, acesse a pagina inicial e contate a instituição

                </span>


              </p>
              <input type="text" placeholder="Usuário" name="user" />
              <input type="password" placeholder="Senha" name="senha" />


              <!-- botoes -->

              <button type="submit" id="login-button" onclick=$sql >Login</button>

              <!-- fim dos botoes -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>

  <footer id="login-footer" class="row contact">
    <h3 class="text-center">Contact</h3>
    <div class="col-xs-10 col-xs-offset-1 text-center">
      <p>
        Você também pode nos encontrar nas redes sociaislike.
      </p>
      <i class="fa fa-facebook" aria-hidden="true"></i>
      <i class="fa fa-twitter" aria-hidden="true"></i>
      <i class="fa fa-linkedin" aria-hidden="true"></i>
      <i class="fa fa-github" aria-hidden="true"></i>
      <i class="fa fa-free-code-camp" aria-hidden="true"></i>
      <i class="fa fa-cc" aria-hidden="true"></i>
    </div>
    <br>
  </footer>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://samiralibabic.github.io/portfolio/js/plugins.js"></script>
  <script src="https://samiralibabic.github.io/portfolio/js/main.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin="anonymous"></script>




</body>

</html>