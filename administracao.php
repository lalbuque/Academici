<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style/designealuno.css">

    <link rel="stylesheet" href="style/administracao.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
   
    <script src="https://use.fontawesome.com/e28a3a5c17.js"></script>

    <script src="javascript/adm.js" ></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <script type="text/javascript">
    jQuery(document).ready(function($) { 
      $(".scroll").click(function(event){        
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
     });
    });
    </script>
  

    <title>Administração</title>
</head>
<nav id="sidebar">
        <ul class="dots">
        
          <li>
            <a href="#perfilADM">
              <span class="glyphicon glyphicon-user"></span>
            </a>  
          </li>
          <li>
            <a href="#cadastros">
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

    <section id="perfilADM" >
  <div class="container">
    <div class="row">


      <div class="col-md-7 ">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Perfil
            </h4>
             </div>
              <div class="panel-body">

            <div class="box box-info">

              <div class="box-body">
                <div class="col-sm-6">
                  <div align="perfilADM">

                        <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg"
                        id="profile-image1" class="img-circle img-responsive">
  
                      <input id="profile-image-upload" class="hidden" type="file">
                      <div style="color:#999;"></div>
                      <!--Upload Image Js And Css-->
                    </div>
                    <br>
  
                    <!-- /input-group -->
                  </div>
                  <div class="col-sm-6">
                    <h4 style="color:#014444;">Administrador</h4>
                    </span>
                  </div>
                  <div class="clearfix"></div>
                  <hr style="margin:5px 0 5px 0;">

                   <div class="col-sm-5 col-xs-6 title ">ID:</div>
                  <div id="idADM" class="col-sm-7"> 102030405060</div>
                  <div class="clearfix"></div>
                  <div class="bot-border"></div>


                  <div class="col-sm-5 col-xs-6 title ">Nome:</div>
                  <div id="nomeADM" class="col-sm-7">André Almeida</div>
                  <div class="clearfix"></div>
                  <div class="bot-border"></div>

                  <div class="col-sm-5 col-xs-6 title ">Universidade:</div>
                  <div id="localADM" class="col-sm-7">FATEC Barueri</div>
                  <div class="clearfix"></div>
                  <div class="bot-border"></div>
                  
  
                 
  
              </div>
            </div>
        </div>
    </div>
  </div>
</section>

<section id="cadastros" >
<div class="container2">
    <div class="row">
      <div class="col-md-7 ">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Perfil
            </h4>
             </div>
              <div class="panel-body">
            <div class="box box-info">

              <div class="box-body">
                <div class="col-sm-6">
<!-- ************************************************************************* -->


<div class="container">

<!-- formulario -->
<form class="form-inline">
  <div class="form-group">
       <input type="text" class="form-control" id="nombre" placeholder="Nome Completo">
  </div>

  <div class="form-group">
       <input type="text" class="form-control" id="descripcion" placeholder="CPF">
  </div>

  <div class="form-group">
       <input type="text" class="form-control" id="duracion" placeholder="Cargo">
  </div>

  <div class="form-group">
       <input type="date" class="form-control" id="prioridad" placeholder="Data de admissão">
  </div>

  <div class="form-group">
  <button type="button" onClick="alta()" class="btn btn-info">Salvar</button></div>
</form>


<!-- tabla de resultados -->
<table class="table table-hover" id="listado"></table></div>

          </div>
        </div>
      </div>
    </div>
</div>

<!-- ******************************************************************************* -->

</section>
    
</body>
</html>