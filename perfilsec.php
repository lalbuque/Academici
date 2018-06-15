
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="style/designealuno.css">

  <link rel="stylesheet" href="style/perfilSec.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script type="text/javascript">// <![CDATA[
$(document).ready(function() {
function filterPath(string) {
return string
.replace(/^\//,'')
.replace(/(index|default).[a-zA-Z]{3,4}$/,'')
.replace(/\/$/,'');
}
$('a[href*=#]').each(function() {
if ( filterPath(location.pathname) == filterPath(this.pathname)
&& location.hostname == this.hostname
&& this.hash.replace(/#/,'') ) {
var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
if ($target) {
var targetOffset = $target.offset().top;
$(this).click(function() {
$('html, body').animate({scrollTop: targetOffset}, 300);
return false;
});
}
}
});
});
// ]></script>

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
      <a href="#calendario">
        <span class="glyphicon glyphicon-calendar"></span>
      </a>
    </li>

        <li>
      <a href="#cadAluno">
        <span class="glyphicon glyphicon-pencil"></span>
      </a>
    </li>

     <li>
        <a href="resultadoquest.php">
        <span class="glyphicon glyphicon-signal"></span>
        </a>
      </li>  

    <li>
      <a href="loginSecretaria.php">
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

    <section id="calendario">

<div class="container">
    <div class="row">

      <div class="col-md-7 ">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Adicionar evento</h4>
          </div>
          <div class="panel-body">

            <div class="box box-info">

              <div class="box-body">

                    <div class='add_meeting'>
                
                        
                          <form method=post action='conexaoadicionaEvento.php'>
                            <div>
                            <label>Titulo</label>
                            <input id="tituloEvento" type='text' name='titulo' >
                          </div>
                          <div>
                            <label>Local</label>
                            <input id="enderecoEvento" type='text' name='endereco'>
                          </div>
                          <div  class="eventosD">
                          <div>
                            <label >Data</label>
                            <input id="dataEvento" type='date' name='data'>
                          </div>
                          <div>
                            <label>Inicio</label>
                            <input id="horarioinicioEvento" type='tyme' name='inicio'>
                          </div>
                          <div>
                            <label>Fim</label>
                            <input id="horarioFimEvento" type='tyme' name='fim'>
                          </div>
                          </div>
                          <div>
                            <label>Descrição</label>
                            <textarea name='descricao'></textarea>
                          </div>
                          <button type="submit" id="button"  onclick=$sql>Cadastrar</button>

                          <!-- <input id="button" type="submit" value="Adicionar"> -->
                          </form>
                          
                      </div>
                </div>
          </div>
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
                    <form method="post" action="ConexaoSecCadAluno.php" >
                      <div>
                        <label>Nome</label>
                        <input id="nome" type='text' name='nome_completo'/>
                      </div>
                      <div>

                        <label>CPF</label>
                        <input id="cpf" type='text' name='cpf' />
                      </div>
                      <div class="eventosD">
                        <div>
                          <label>Nascimento</label>
                          <input id="datanascimento" type='date' name='data_nascimento'/>
                        </div>
                      </div>
                      <div>
                          <label>Curso</label>
                          <input id="curso" type='text' name='curso' />
                        </div>
                        <div>
                          <label>Instituição</label>
                          <input id="instituicao" type='text' name='universidade' />
                        </div>
                        <div class="eventosD">
                          <div>
                            <label>Formação</label>
                            <input id="dataformacao" type='date' name='data_formacao' />
                          </div>
                         <!-- //<input id="button" type="submit" value="Cadastrar" onclick=$sql> -->

                                
                           <button type="submit" id="button"  onclick=$sql>Cadastrar</button>
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

