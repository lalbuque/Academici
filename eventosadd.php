<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style/designealuno.css">
    
    <link rel="stylesheet" href="style/adicionaevento.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://use.fontawesome.com/e28a3a5c17.js"></script>

    <script src="javascript/adicionaevento.js" ></script>

    
    <title>Adicionar Evento</title>

  </head>

</head>

<nav id="sidebar">
    <ul class="dots">
    
      <li>
        <a href="perfilsec.php">
          <span class="glyphicon glyphicon-user"></span>
        </a>  
      </li>
          
      <li>
        <a href="eventosadd.php">
        <span class="glyphicon glyphicon-calendar"></span>
        </a>
      </li>  

      <li>
        <a href="loginsecretaria.php">
        <span class="glyphicon glyphicon-off"></span>
        </a>
    </li>
      

             
    </ul> 
  </nav>

<body>

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
                      
                              
                                <form>
                                  <div>
                                  <label>Titulo</label>
                                  <input id="tituloEvento" type='text' placeholder=''>
                                </div>
                                <div>
                                  <label>Local</label>
                                  <input id="enderecoEvento" type='text' placeholder='Endereço'>
                                </div>
                                <div  class="eventosD">
                                <div>
                                  <label >Data</label>
                                  <input id="dataEvento" type='date' placeholder=''>
                                </div>
                                <div>
                                  <label>Inicio</label>
                                  <input id="horarioinicioEvento" type='time' placeholder=''>
                                </div>
                                <div>
                                  <label>Fim</label>
                                  <input id="horarioFimEvento" type='time' placeholder=''>
                                </div>
                                </div>
                                <div>
                                  <label>Descrição</label>
                                  <textarea></textarea>
                                </div>

                                <input id="button" type="submit" value="Adicionar">
                                </form>
                                
                            </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    

    </section>
</body>  

  </html>