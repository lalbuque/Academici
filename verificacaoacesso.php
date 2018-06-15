<!DOCTYPE html>
<html lang="en">
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Primeiro Acesso</title>
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
  <link rel="stylesheet" href="style/verificacaoacesso.css">



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
          <a class="navbar-brand" href="index.php">
            <span class="glyphicon glyphicon-home" aria-label="Home" aria-hidden="true"></span>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="main-menu-items">
          <ul class="nav navbar-nav">
          <li>
              <a href="login.php">Ex-Aluno</a>
            </li>  
          <li>
              <a href="login.php">Administração Acadêmica</a>
            </li>
            <li>
              <a href="verificacaoacesso.php">Primeiro acesso</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <!-- Inicio do cofmrulario de primeiro acesso -->
    <div class="form-acesso" id="form">

      <div class="container-acesso">
 


          <ul class="steps">
            <li class="is-active">Verificação de acesso</li>
            <li>Completar cadastro</li>
            <li>Questionario</li>
          </ul>
          <div class="form-wrapper">
            <form method="post" action="conexaoverificacao.php">
            <div class="section is-active">
              <h3>Insira os dados abaixo:</h3>
              <input type="text" name="nome" id="name" placeholder="Nome Completo. Ex: Luis da dilva">
              <input type="text" name="cpf" id="cpf" placeholder="CPF. Ex: 44444444444">
              <input type="text" name="data_nascimento" id="dataNasc" placeholder="Data de Nascimento. Ex: DD/MM/AAAA">
              <button type="submit" id="login-button" onclick=$sql>Login</button>

            </div>
            
         </form>
          </div>
      
      </div>
    </div>
    <!-- Fim do cofmrulario de primeiro acesso -->

    </div>
  </header>

  <footer id="login-footer" class="row contact">
    <h3 class="text-center">Contact</h3>
    <div class="col-xs-10 col-xs-offset-1 text-center">
      <p>
        Você também pode nos encontrar nas redes sociais
      </p>
      <i class="fa fa-facebook" aria-hidden="true"></i>
      <i class="fa fa-twitter" aria-hidden="true"></i>
      <i class="fa fa-linkedin" aria-hidden="true"></i>
      <i class="fa fa-github" aria-hidden="true"></i>
      <i class="fa fa-free-code-camp" aria-hidden="true"></i>
      <i class="fa fa-cc" aria-hidden="true"></i>
      <a href="https://www.codecademy.com/samiralibabic" target="_blank">
        <i class="fa fa-cc" aria-hidden="true"></i>
      </a>
    </div>
    <br>
  </footer>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://samiralibabic.github.io/portfolio/js/plugins.js"></script>
  <script src="https://samiralibabic.github.io/portfolio/js/main.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin="anonymous"></script>

  <script src="javascript/verificacaoacesso.js"></script>


</body>

</html>