<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="style/designealuno.css">

  <link rel="stylesheet" href="style/mensagensAluno.css">

  <link rel="stylesheet" href="style/eventos.css">

  <script type="javascript" src="javascript/eventosAluno.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>

  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 800);
      });
    });
  </script>

  <title>Perfil</title>

</head>

<nav id="sidebar">
  <ul class="dots">

    <li>
      <a href="#perfilAluno" class="scroll">
        <span class="glyphicon glyphicon-user"></span>
      </a>
    </li>


    <li>
      <a href="#eventos" class="scroll">
        <span class="glyphicon glyphicon-calendar"></span>
      </a>
    </li>

    <li>
      <a href="#mensagens" class="scroll">
        <span class="glyphicon glyphicon-envelope"></span>
      </a>
    </li>

    <li>
      <a href="editarperfilaluno.html">
        <span class="glyphicon glyphicon-list-alt"></span>
      </a>
    </li>

    <li>
      <a href="login.html">
        <span class="glyphicon glyphicon-off"></span>
      </a>
    </li>

  </ul>
</nav>


<body>

  <section id="perfilAluno">
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
                    <h4 style="color:#014444;">Gabriele Peixoto Guedes Santos</h4>
                    </span>
                  </div>
                  <div class="clearfix"></div>
                  <hr style="margin:5px 0 5px 0;">

                  <div class="col-sm-5 col-xs-6 title ">RA:</div>
                  <div id="raAluno" class="col-sm-7">1020304050</div>
                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-5 col-xs-6 title ">Universidade:</div>
                  <div id="universidadeAluno" class="col-sm-7"> FATEC Barueri</div>
                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-5 col-xs-6 title ">Curso: </div>
                  <div id="cursoAluno" class="col-sm-7">Gestão da Tecnologia da Informação</div>
                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-5 col-xs-6 title ">Formação: </div>
                  <div id="formacaoAluno" class="col-sm-7">12/2010</div>
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

  <section id="eventos">

    <div class="container">
      <div class="row">
        <div class="col-md-7 ">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Eventos</h4>
            </div>
            <div class="panel-body">

              <div class="box box-info">

                <div class="box-body">
                  <!-- *************************Começo LISTA EVENTOS*********** -->
                  <div class="conteudoEventos">
                    <table summary="Eric Genuis Performances" class="info">
                      <caption>JUN</caption>
                      <tr>
                        <td>QUI</td>
                        <td>
                          <span class="date">28/ JUN</span>
                        </td>
                        <td>
                          <img src="http://www.lemieux-design.net/img/clock.png" alt="Time" />
                        </td>
                        <td>15:00 - 16:00</td>
                        <td>
                          <img src="http://www.lemieux-design.net/img/map-pin.png" alt="Location" />
                        </td>
                        <td>Faculdade de Tecnologia de Barueri
                          <br /> Av. Carlos Capriotti, 123
                          <br /> Centro, Barueri
                          <br />
                          <a href="https://www.google.com.br/maps/place/Faculdade+de+Tecnologia+de+Barueri/@-23.5083266,-46.8646239,15z/data=!4m2!3m1!1s0x0:0x1c28540aac26cba0?sa=X&ved=0ahUKEwik7NDgtrPbAhWETZAKHSecBZ8Q_BIItAEwCw">Get Directions &raquo;</a>
                        </td>
                        <td>
                          NOME
                          <br /> Descrição
                        </td>
                      </tr>
                      <tr>
                        <td>QUI</td>
                        <td>
                          <span class="date">28/ JUN</span>
                        </td>
                        <td>
                          <img src="http://www.lemieux-design.net/img/clock.png" alt="Time" />
                        </td>
                        <td>18:00 - 18:30</td>
                        <td>
                          <img src="http://www.lemieux-design.net/img/map-pin.png" alt="Location" />
                        </td>
                        <td>Faculdade de Tecnologia de Barueri
                          <br /> Av. Carlos Capriotti, 123
                          <br /> Centro, Barueri
                          <br />
                          <a href="https://www.google.com.br/maps/place/Faculdade+de+Tecnologia+de+Barueri/@-23.5083266,-46.8646239,15z/data=!4m2!3m1!1s0x0:0x1c28540aac26cba0?sa=X&ved=0ahUKEwik7NDgtrPbAhWETZAKHSecBZ8Q_BIItAEwCw">Get Directions &raquo;</a>
                        </td>
                        <td>
                          NOME
                          <br /> Descrição
                        </td>
                      </tr>
                      <tr>
                        <td>SEX</td>
                        <td>
                          <span class="date">29/ JUN</span>
                        </td>
                        <td>
                          <img src="http://www.lemieux-design.net/img/clock.png" alt="Time" />
                        </td>
                        <td>19:00 - 20:00 </td>
                        <td>
                          <img src="http://www.lemieux-design.net/img/map-pin.png" alt="Location" />
                        </td>
                        <td>Faculdade de Tecnologia de Barueri
                          <br /> Av. Carlos Capriotti, 123
                          <br /> Centro, Barueri
                          <br />
                          <a href="https://www.google.com.br/maps/place/Faculdade+de+Tecnologia+de+Barueri/@-23.5083266,-46.8646239,15z/data=!4m2!3m1!1s0x0:0x1c28540aac26cba0?sa=X&ved=0ahUKEwik7NDgtrPbAhWETZAKHSecBZ8Q_BIItAEwCw">Get Directions &raquo;</a>
                        </td>
                        <td>
                          NOME
                          <br /> Descrição
                        </td>
                      </tr>

                    </table>





                    </table>

                  </div>
                  <!-- ****************FIM LISTA EVENTOS******************** -->
                </div>
              </div>
            </div>
          </div>
        </div>

  </section>

  <section id="mensagens">

    <div class="container">
      <div class="row">
        <div class="col-md-7 ">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Contato</h4>
            </div>
            <div class="panel-body">

              <div class="box box-info">

                <div class="box-body">
                  <div class="form">
                    <form action="perfilaluno.html">
                      <!-- <input type="hidden" value="gabrielepgsantos@outlook.com" name="email" > -->
                      <input class="contatoAluno" type="text" required maxlength="60" placeholder="E-mail">

                      <select class="contatoAluno">
                        <option>Selecione o assunto</option>
                        <option>Informações</option>
                        <option>Reclamação</option>
                        <option>Elogios</option>
                        <option>Informações sobre eventos</option>
                      </select>

                      <textarea class="contatoAluno" name="Mensagem" rows="10" cols="60" wrap="virtual" placeholder="Mensagem"></textarea>

                      <input type="submit" value="Enviar">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


  </section>

</body>

</html>