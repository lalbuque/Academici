<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style/designealuno.css">
    
    <link rel="stylesheet" href="style/resultadoquest.css.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    

    <script src="https://use.fontawesome.com/e28a3a5c17.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['2018',      11],
          ['2017',      2],
          ['2016',      2],
          ['2015',      2],
          ['2014',      7],
          ['2013',      7],
          ['2012',      2],
          ['2011',      2],
          ['2010',      7],
          ['2009',      7],
          ['2008',      7],
        ]);

        var options = {
          title: 'Ano de formação do aluno',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart1'));
        chart.draw(data, options);
      }
    </script>
        <script src="javascript/adicionaevento.js" ></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['6',      11],
          ['7',      2],
          ['8',      2],
          ['9',      2],
          ['10',      7],
        ]);

        var options = {
          title: 'Quantidade de semestres que o aluno demorou para concluir o curso',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart.draw(data, options);
      }
    </script>
        <script src="javascript/adicionaevento.js" ></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Sim',      11],
          ['Não',      100],
        ]);

        var options = {
          title: 'Quantidade de alunos que trancaram o curso durante a graduação.',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart3'));
        chart.draw(data, options);
      }
    </script>
        <script src="javascript/adicionaevento.js" ></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Sim',      20],
          ['Não',      60],
        ]);

        var options = {
          title: 'Quantidade de alunos que realizaram estagio remunerado durante a graduação',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart4'));
        chart.draw(data, options);
      }
    </script>
        <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Feminino',      45],
          ['Masculino',      67],
       
        ]);

        var options = {
          title: 'Genêro',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart5'));
        chart.draw(data, options);
      }
    </script>
        <script src="javascript/adicionaevento.js" ></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Abaixo de 21',      11],
          ['Entre 21 e 25',      2],
          ['Entre 26 e 30',      2],
          ['Entre 31 e 35',      2],
          ['Entre 36 e 40',      7],
          ['Entre 41 e 45',      2],
          ['Acima de 45',      7],
        ]);

        var options = {
          title: 'Idade',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart6'));
        chart.draw(data, options);
      }
    </script>
        <script src="javascript/adicionaevento.js" ></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Não procurou um emprego',      11],
          ['Não procurou um emprego, pois ja estava trabalhando',      2],
          ['Estava desempregado, procurou um emprego na area e não conseguiu',      2],
          ['Estava empregado e procurou mudar de emprego',      2],
        ]);

        var options = {
          title: 'Alunos que se formaram e: ',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart7'));
        chart.draw(data, options);
      }
    </script>
        <script src="javascript/adicionaevento.js" ></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Agência do trabalhador',      20],
          ['Agência de emprego privado',      60],
          ['Internet',      20],
          ['Classificados',      40],
          ['Indicação de pessoas conhecidas',      65],
          ['Outro',      80],
        ]);

        var options = {
          title: 'Meios utilizados para procurado emprego:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart8'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Mais fácil',      20],
          ['Inalterada',      60],
          ['Mais difícil',      20],
          ['Não tenho condições de avaliar',      40],
        ]);

        var options = {
          title: 'Opinião dos alunos sobre a inserção no mercado de trabalho:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart9'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Empregado',      20],
          ['Trabalho no próprio negócio/ Autônomo',      60],
          ['Aposentado/ Pensionista',      20],
          ['Realizando trabalho temporário',      40],
          ['Desempregado',      8],
          ['Outros',      80],
        ]);

        var options = {
          title: 'Atividade profissional exercida pelos ex alunos atualmente:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart10'));
        chart.draw(data, options);
      }
    </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Área vinculada indiretamente à área de graduação',      20],
          ['Área vinculada diretamente à área de graduação',      60],
          ['Fora da área de graduação por não encontrar mercado na área',      20],
          ['Fora da área de graduação por escolha pessoal',      40],
        ]);

        var options = {
          title: 'Área de atuação profissional atual:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart11'));
        chart.draw(data, options);
      }
    </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Micro',      89],
          ['Pequena',      15],
          ['Média',      28],
          ['Grande',      45],
          ['Administração pública',      84],
          ['Autônomo',      80],
        ]);

        var options = {
          title: 'Porte da empresa onde trabalha:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart12'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Direção/Gerência',      20],
          ['Supervisão/Chefia',      66],
          ['Assessoria/Suporte',      25],
          ['Analista',      40],
          ['Docente',      8],
          ['Técnico/Operacional',      88],
          ['Outros',      80],
        ]);

        var options = {
          title: 'Função/cargo atual:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart13'));
        chart.draw(data, options);
      }
    </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Até R$ 1.448,00',      20],
          ['R$ 1.449,00 até R$ 2.896,00',      4],
          ['R$ 2.897,00 até R$ 4.344,00',      29],
          ['R$ 4.345,00 até R$ 5.792,00',      65],
          ['R$ 5.793,00 até R$ 7.240,00',      8],
          ['Acima de R$ 7.241,00',      15],
        ]);

        var options = {
          title: 'Faixa salárial:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart14'));
        chart.draw(data, options);
      }
    </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Não',      20],
          ['Sim, especialização ou MBA',      60],
          ['Sim, Mestrado',      20],
          ['Sim, Doutorado',      40],
        ]);

        var options = {
          title: 'Número de alunos que frequentou ou está frequentando algum curso de pós-graduação:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart15'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Aumento de salário',      20],
          ['Oportunidade de viagem para treinamento/qualificação profissional',      60],
          ['Negócio próprio',      20],
          ['Promoção com mudança de cargo/função',      40],
          ['Aprovação em concurso público',      8],
          ['Não houve mudança',      80],
        ]);

        var options = {
          title: 'Mudança mais marcante que ocorreram na vida profissional dos ex alunos com contribuição do curso que concluiu:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart16'));
        chart.draw(data, options);
      }
    </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Estou desempregado e pretendo arrumar um emprego',      20],
          ['Fazer carreira na empresa onde trabalho',      60],
          ['Sair do meu atual emprego e ir para outro com melhores oportunidades salariais de profissionais',      20],
          ['Ingressar no serviço público',      40],
          ['Abrir negócio próprio',      8],
          ['Mudar da área de atuação',      80],
        ]);

        var options = {
          title: 'Situação que melhor expressa a perspectiva profissional futura dos ex alunos para a sua carreira:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart17'));
        chart.draw(data, options);
      }
    </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Extremamente relevante',      90],
          ['Relevante',      60],
          ['Pouco relevante',      56],
          ['Sem relevância',      18],
        ]);

        var options = {
          title: 'Grau de relevância dos conteúdos ministrados durante a sua graduação para sua atuação profissional:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart18'));
        chart.draw(data, options);
      }
    </script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Quantidade'],
          ['Extremamente relevante',      110],
          ['Relevante',      90],
          ['Pouco relevante',      10],
          ['Sem relevância',      2],
        ]);

        var options = {
          title: 'Contribuição atual referente a cultura geral e desenvolvimento pessoal do ex aluno:',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart19'));
        chart.draw(data, options);
      }
    </script>   

    <title>Resultado questionário</title>

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
        <a href="resultadoquest.php">
        <span class="glyphicon glyphicon-signal"></span>
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
            <h4>Dados questionário</h4>
          </div>
          <div class="panel-body">
            <div class="box box-info">
                  <h3 style="float:left;">Respostas:</h3> 
                  <a  type="button" value="Print this page" onClick="window.print()">
                  <span style="float:right;  display: block;-webkit-border-radius: 30px;  -moz-border-radius: 30px;  border-radius: 30px;  background-color: #FFF;
                  -webkit-box-shadow: 1px 1px 5px #808080;  -moz-box-shadow: 1px 1px 5px #808080;  box-shadow: 1px 1px 5px #808080;  width: 50px; height: 50px;
                   padding-top:10px;  margin:10px;  line-height: 30px;  text-align: center;  position: relative; "   class="glyphicon glyphicon-print"></span></a>
                  
                 
                  <select onchange="location = this.value;" style = "display: block; border: 0px; padding: 10px; width: 100% ; font-size: 16px; border: 2px solid #BEBEBE; border-radius:5px;" >
                                <option value="#donutchart1">Selecionar questão a ser consultada.</option>
                                <option value="#donutchart1"> Ano de formação do aluno</option>
                                <option value="#donutchart2"> Quantidade de semestres que o aluno demorou para concluir o curso</option>
                                <option value="#donutchart3"> Quantidade de alunos que trancaram o curso durante a graduação</option>
                                <option value="#donutchart4"> Quantidade de alunos que realizaram estagio remunerado durante a graduação</option>                                
                                <option value="#donutchart5"> Genêro</option>
                                <option value="#donutchart6"> Idade</option>                                
                                <option value="#donutchart7"> Alunos que se formaram e:</option>                                                              
                                <option value="#donutchart8"> Meios utilizados para procurado emprego:</option>                                                                
                                <option value="#donutchart9"> Opinião dos alunos sobre a inserção no mercado de trabalho:</option>                                                            
                                <option value="#donutchart10" > Atividade profissional exercida pelos ex alunos atualmente:</option>
                                <option value="#donutchart11" > Área de atuação profissional atual:</option>                                
                                <option value="#donutchart12" > Porte da empresa onde trabalha:</option>
                                <option value="#donutchart13" > Função/cargo atual:</option>                                
                                <option value="#donutchart14" > Faixa salárial:</option>                                                              
                                <option value="#donutchart15" > Número de alunos que frequentou ou está frequentando algum curso de pós-graduação:</option>                                                                
                                <option value="#donutchart16" > Mudança mais marcante que ocorreram na vida profissional dos ex alunos com contribuição do curso que concluiu:</option>                                                            
                                <option value="#donutchart17" > Situação que melhor expressa a perspectiva profissional futura dos ex alunos para a sua carreira:</option>
                                <option value="#donutchart18" > Grau de relevância dos conteúdos ministrados durante a sua graduação para sua atuação profissional:</option>                                
                                <option value="#donutchart19" > Contribuição atual referente a cultura geral e desenvolvimento pessoal do ex aluno:</option>
                                
                                
                </select>



<div  id="donutchart1" style="width: 800px; height: 600px; margin-left:180px;"> </div>
<hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
   <div  id="donutchart2" style="width: 800px; height: 600px; margin-left:180px; padding:0px;"></div>
   <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
      <div  id="donutchart3" style="width: 800px; height: 600px; margin-left:180px;"> </div>
      <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
         <div  id="donutchart4" style="width: 800px; height: 600px; margin-left:180px;"></div>
         <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
              <div  id="donutchart5" style="width: 800px; height: 600px; margin-left:180px;"> </div>
              <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                  <div  id="donutchart6" style="width: 800px; height: 600px; margin-left:180px;"></div>
                  <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                     <div  id="donutchart7" style="width: 800px; height: 600px; margin-left:180px;"> </div>
                     <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                        <div  id="donutchart8" style="width: 800px; height: 600px; margin-left:180px;"></div>
                        <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                          <div  id="donutchart9" style="width: 800px; height: 600px; margin-left:180px;"> </div>
                          <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                            <div  id="donutchart10" style="width: 800px; height: 600px; margin-left:180px;"></div>
                            <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                              <div  id="donutchart11" style="width: 800px; height: 600px; margin-left:180px;"> </div>
                              <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                                <div  id="donutchart12" style="width: 800px; height: 600px; margin-left:180px;"></div>
                                <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                                  <div  id="donutchart13" style="width: 800px; height: 600px; margin-left:180px;"> </div>
                                  <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                                    <div  id="donutchart14" style="width: 800px; height: 600px; margin-left:180px;"></div>
                                    <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                                     <div  id="donutchart15" style="width: 800px; height: 600px; margin-left:180px;"> </div>
                                     <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                                       <div  id="donutchart16" style="width: 800px; height: 600px; margin-left:180px;"></div>
                                       <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                                         <div  id="donutchart17" style="width: 800px; height: 600px; margin-left:180px;"> </div>
                                         <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                                           <div  id="donutchart18" style="width: 800px; height: 600px; margin-left:180px;"></div>
                                           <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                                               <div  id="donutchart19" style="width: 800px; height: 600px; margin-left:180px;"> </div>
                                               <hr style="height:2px; border:none; color:#000; background-color:#000; margin-top: 0px; margin-bottom: 0px;"/>
                          
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