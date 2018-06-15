<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="style/designealuno.css">

  <link rel="stylesheet" href="style/perfilSec.css">
  <link rel="stylesheet" href="style/adicionaevento.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <title>Perfil Secretaria</title>

</head>


<nav id="sidebar">
  <ul class="dots">

    <li>
      <a href="#perfilSecretaria">
        <span class="glyphicon glyphicon-user"></span>
      </a>
    </li>
    <li>
      <a href="#importarBanco">
        <span class="glyphicon glyphicon-download-alt"></span>
      </a>
    </li>

    <li>
      <a href="#cadAluno">
        <span class="glyphicon glyphicon-pencil"></span>
      </a>
    </li>

    <li>
      <a href="eventosadd.php">
        <span class="glyphicon glyphicon-calendar"></span>
      </a>
    </li>

    <li>
      <a href="login.php">
        <span class="glyphicon glyphicon-off"></span>
      </a>
    </li>

  </ul>
</nav>

<body>

  <section id="perfilSecretaria">
    <div class="container">
      <div class="row">


        <div class="col-md-7 ">

          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Perfil do Usuario</h4>
            </div>
            <div class="panel-body">

              <div class="box box-info">

                <div class="box-body">
                  <div class="col-sm-6">
                    <div align="center">
                      <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1"
                        class="img-circle img-responsive">

                      <input id="profile-image-upload" class="hidden" type="file">
                      <div style="color:#999;"></div>
                      <!--Upload Image Js And Css-->
                    </div>
                    <br>

                    <!-- /input-group -->
                  </div>
                  <div class="col-sm-6">
                    <h4 style="color:#014444;">Edgar Ramirez</h4>
                    </span>
                  </div>
                  <div class="clearfix"></div>
                  <hr style="margin:5px 0 5px 0;">

                  <div class="col-sm-5 col-xs-6 title ">ID:</div>
                  <div id="idSec" class="col-sm-7">1020304050</div>
                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-5 col-xs-6 title ">Universidade:</div>
                  <div id="universidadeSec" class="col-sm-7"> FATEC Barueri</div>
                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-5 col-xs-6 title ">Cargo: </div>
                  <div id="cargoSec" class="col-sm-7">Auxiliar administrativo</div>
                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <!-- /.box-body -->
                </div>
                <!-- /.box -->

              </div>


            </div>
          </div>
        </div>
        <script>
          $(function () {
            $('#profile-image1').on('click', function () {
              $('#profile-image-upload').click();
            });
          });       
        </script>
      </div>
    </div>
  </section>


  <section id="importarBanco">

    <section id="perfilSecretaria">
      <div class="container">
        <div class="row">


          <div class="col-md-7 ">

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4>Importar Banco</h4>
              </div>
              <div class="panel-body">
                <div class="box box-info">

                  <!-- Conteudo ******************************** Inicio -->


                  <form method="post" enctype="multipart/form-data" action="">
                    <span id="filename">Select your file</span>
                    <label for="file-upload">Selecionar Arquivo
                      <input type="file" id="file-upload">
                    </label>
                  </form>






                  <!-- Conteudo ******************************** FIM -->


                </div>
              </div>
            </div>
          </div>
    </section>

    <section id="cadAluno">

      <section id="perfilSecretaria">
        <div class="container">
          <div class="row">


            <div class="col-md-7 ">

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4>Cadastrar Aluno</h4>
                </div>
                <div class="panel-body">
                  <div class="box box-info">

                    <!-- Conteudo ******************************** Inicio -->
                    <form>
                      <div>
                        <label>Nome Completo</label>
                        <input id="nome" type='text' placeholder=''>
                      </div>
                      <div>
                        <label>CPF</label>
                        <input id="cpf" type='text' placeholder=''>
                      </div>
                      <div class="eventosD">
                        <div>
                          <label>Data de Nascimento</label>
                          <input id="datanascimento" type='date' placeholder=''>
                        </div>
                      </div>
                      <div>
                          <label>Curso</label>
                          <input id="curso" type='text' placeholder=''>
                        </div>
                        <div>
                          <label>Instituição</label>
                          <input id="instituicao" type='text' placeholder=''>
                        </div>
                        <div class="eventosD">
                          <div>
                            <label>Data Formação</label>
                            <input id="dataformacao" type='date' placeholder=''>
                          </div>
                         <input id="button" type="submit" value="Cadastrar">
                    </form>







                    <!-- Conteudo ******************************** FIM -->


                  </div>
                </div>
              </div>
            </div>
      </section>
      <script>
        $('#file-upload').change(function () {
          var filepath = this.value;
          var m = filepath.match(/([^\/\\]+)$/);
          var filename = m[1];
          $('#filename').php(filename);

        });
      </script>
</body>

</html>