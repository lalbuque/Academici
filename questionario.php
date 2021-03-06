<!DOCTYPE html>
<html lang="en">
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Questionario</title>
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
    <link rel="stylesheet" href="style/questionario.css">



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
              <a href="loginAluno.php">Ex-Aluno</a>
            </li>  
          <li>
              <a href="loginSecretaria.php">Administração Acadêmica</a>
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


                <ul class="steps" id="steps-questionario">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                    <li>21</li>
                    <li>22</li>


                </ul>
                <div class="form-wrapper">
                    <form method="post" action="conexaoquestionario.php">
                        <div class="section is-active" id="fieldset">
                            <h3>Cadastro quase completo!</h3>
                            <p class="instrucao">Só falta um passo para que você tenha acesso aos eventos, palestras e cursos extensivos na sua
                                unidade. Responda o quesitonário para ajudar a instituição a continuar melhorando, só vai
                                levar 5 minutos e você irá contribuir muito para os proximos estudantes.</p>
                            <p class="instrucao">Desde já agradecemos a sua colaboração. Esperamos você nos proximos eventos.</p>
                            <p class="instrucao">
                                <strong>P.S.:</strong> Não esqueça de manter seu cadastro atualizado para que possamos sempre te
                                enviar novidades!</p>
                            <h3>1. Em que ano você se formou?</h3>
                            <select class="contatoAluno" name="pergunta1">
                                <option>Selecione a resposta</option>
                                <option> 2018 </option>
                                <option> 2017 </option>
                                <option> 2016 </option>
                                <option> 2015 </option>
                                <option> 2014 </option>
                                <option> 2013 </option>
                                <option> 2012 </option>
                                <option> 2011 </option>
                                <option> 2010 </option>
                                <option> 2009 </option>

                            </select>
                            <h3>2. Quantos semestres você levou para completar o seu curso?</h3>
                            <!-- inicio resposta -->
                            <select class="contatoAluno" name="pergunta2">
                                <option>Selecione a resposta</option>
                                <option> 10 </option>
                                <option> 9 </option>
                                <option> 8 </option>
                                <option> 7 </option>
                                <option> 6 </option>
                            </select>
                            <!-- fim da resposta -->
                            <h3>3. Durante sua graduação você trancou o curso?</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta3">
                                <option>Selecione a resposta</option>
                                <option> Sim</option>
                                <option> Não</option>
                            </select>
                            <!-- fim da resposta -->



                            <h3>4. Durante a sua graduação você realizou estágio remunerado?</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta4">
                                <option>Selecione a resposta</option>
                                <option> Sim</option>
                                <option> Não</option>
                            </select>
                            <!-- fim da resposta -->


                            <h3>5. Gênero:</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta5">
                                <option>Selecione a resposta</option>
                                <option> Feminino</option>
                                <option> Masculino</option>
                                <option> Outro</option>
                            </select>
                            <!-- fim da resposta -->

                            <h3>6. Idade:</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta6">
                                <option>Selecione a resposta</option>
                                <option> Abaixo de 21</option>
                                <option> Entre 21 e 25</option>
                                <option> Entre 26 e 30</option>
                                <option> Entre3 31 e 35</option>
                                <option> Entre 36 e 40</option>
                                <option> Entre 41 e 45</option>
                                <option> Acima de 45</option>
                            </select>
                            <!-- fim da resposta -->

                            <h3>7. Depois que se formou, você:</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta7">
                                <option>Selecione a resposta</option>
                                <option> Não procurou um emprego</option>
                                <option> Não procurou um emprego, pois ja estava trabalhando</option>
                                <option> Estava desempregado, procurou um emprego na area e não conseguiu</option>
                                <option> Estava empregado e procurou mudar de emprego</option>
                            </select>
                            <!-- fim da resposta -->

                            <h3>8. Caso tenha procurado emprego após a conclusão de seu curso, qual o meio que você utilizou
                                para isso?</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta8">
                                <option>Selecione a resposta</option>
                                <option> Agência do trabalhador</option>
                                <option> Agência de emprego privado</option>
                                <option> Internet</option>
                                <option> Classificados</option>
                                <option> Indicação de pessoas conhecidas</option>
                                <option> Outro</option>
                            </select>
                            <!-- fim da resposta -->

                            <h3>9. Em sua opinião, como ficou a sua inserção no mercado de trabalho após a conclusão do seu curso:
                            </h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta9">
                                <option>Selecione a resposta</option>
                                <option> Mais fácil</option>
                                <option> Inalterada</option>
                                <option> Mais difícil</option>
                                <option> Não tenho condições de avaliar</option>
                            </select>
                            <!-- fim da resposta -->

                            <h3>10. Quanto à atividade profissional você está atualmente:</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta10">
                                <option>Selecione a resposta</option>
                                <option> Empregado</option>
                                <option> Trabalho no próprio negócio/ Autônomo</option>
                                <option> Aposentado/ Pensionista</option>
                                <option> Realizando trabalho temporário</option>
                                <option> Desempregado</option>
                                <option> Outros</option>
                            </select>
                            <!-- fim da resposta -->


                            <h3>11. Qual a sua atual área de atuação profissional?(SOMENTE RESPONDA SE ESTIVER TRABALHANDO)</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta11">
                                <option>Selecione a resposta</option>
                                <option> Área vinculada indiretamente à área de graduação</option>
                                <option> Área vinculada diretamente à área de graduação</option>
                                <option> Fora da área de graduação por não encontrar mercado na área</option>
                                <option> Fora da área de graduação por escolha pessoal</option>
                            </select>
                            <!-- fim da resposta -->


                            <h3>12. Qual o porte da empresa onde trabalha?(SOMENTE RESPONDA SE ESTIVER TRABALHANDO)</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta12">
                                <option>Selecione a resposta</option>
                                <option> Micro(Até 9 empregrados)</option>
                                <option> Pequena(De 10 até 9 empregrados)</option>
                                <option> Média(De 50 até 99 empregrados)</option>
                                <option> Grande(De 100 ou mais empregrados)</option>
                                <option> Administração pública</option>
                                <option> Empresa individual (Autônomo ou profissional Liberal)</option>
                            </select>
                            <!-- fim da resposta -->

                            <h3>13. Qual a sua função/cargo atual?(SOMENTE RESPONDA SE ESTIVER TRABALHANDO)</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta13">
                                <option>Selecione a resposta</option>
                                <option> Direção/Gerência</option>
                                <option> Supervisão/Chefia</option>
                                <option> Assessoria/Suporte</option>
                                <option> Analista</option>
                                <option> Docente</option>
                                <option> Técnico/Operacional</option>
                                <option> Outro</option>
                            </select>
                            <!-- fim da resposta -->

                            <h3>14. Em que faixa se enquadra o seu rendimento individual mensal?(SOMENTE RESPONDA SE ESTIVER
                                TRABALHANDO)
                            </h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta14">
                                <option>Selecione a resposta</option>
                                <option> Até 2 salários (R$ 1.448,00)</option>
                                <option> Mais de 2 até 4 salários mínimos (R$ 1.449,00 até R$ 2.896,00)</option>
                                <option> Mais de 4 até 6 salários mínimos (R$ 2.897,00 até R$ 4.344,00)</option>
                                <option> Mais de 6 até 8 salários mínimos (R$ 4.345,00 até R$ 5.792,00)</option>
                                <option> Mais de 8 até 10 salários mínimos (R$ 5.793,00 até R$ 7.240,00)</option>
                                <option> 10 salários mínimos ou mais (acima de R$ 7.241,00)</option>
                            </select>
                            <!-- fim da resposta -->

                            <h3>15. Após a graduação, você frequentou ou está frequentando algum curso de pós-graduação?</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta15">
                                <option>Selecione a resposta</option>
                                <option> sim</option>
                                <option> Não</option>
                            </select>
                            <!-- fim da resposta -->
                            <h3>16. Se sim, Qual?</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta16">
                                <option>Selecione a resposta</option>
                                <option> Especialização ou MBA</option>
                                <option> Mestrado</option>
                                <option> Doutorado</option>
                            </select>
                            <!-- fim da resposta -->


                            <h3>17. Quais a mudança mais marcante relacionada ocorreu na sua vida profissional como contribuição
                                do curso que concluiu?</h3>
                            <!-- Inicio da resposta -->

                            <select class="contatoAluno" name="pergunta17">
                                <option>Selecione a resposta</option>
                                <option> Aumento de salário</option>
                                <option> Oportunidade de viagem para treinamento/qualificação profissional</option>
                                <option> Negócio próprio</option>
                                <option> Promoção com mudança de cargo/função</option>
                                <option> Aprovação em concurso público</option>
                                <option> Não houve mudança</option>
                            </select>
                            <!-- fim da resposta -->


                            <h3>18. Entre as alternativas a seguir, assinale a situação que melhor expressa a perspectiva profissional
                                futura para a sua carreira:</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta18">
                                <option>Selecione a resposta</option>
                                <option> Estou desempregado e pretendo arrumar um emprego</option>
                                <option> Fazer carreira na empresa onde trabalho</option>
                                <option> Sair do meu atual emprego e ir para outro com melhores oportunidades salariais de profissionais</option>
                                <option> Ingressar no serviço público</option>
                                <option> Abrir negócio próprio</option>
                                <option> Mudar da área de atuação</option>
                            </select>
                            <!-- fim da resposta -->

                            <h3>19. Com base em sua experiência como egresso, indique 3 (TRÊS) aspectos em que o curso deveria
                                priorizar melhorias para qualificar melhor o formando para atuar no mercado de trabalho:</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta19">
                                <option>Selecione a resposta</option>
                                <option> Sim</option>
                                <option> Não</option>
                            </select>
                            <!-- fim da resposta -->


                            <h3>20. Qual o grau de relevância dos conteúdos ministrados durante a sua graduação para sua atuação
                                profissional?
                            </h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta20">
                                <option>Selecione a resposta</option>
                                <option> Extremamente relevante</option>
                                <option> Relevante</option>
                                <option> Pouco relevante</option>
                                <option> Sem relevância</option>
                            </select>
                            <!-- fim da resposta -->

                            <h3>21. No que se refere à sua cultura geral e desenvolvimento pessoal, você considera que a contribuição
                                do curso foi:</h3>
                            <!-- Inicio da resposta -->
                            <select class="contatoAluno" name="pergunta21">
                                <option>Selecione a resposta</option>
                                <option> Extremamente relevante</option>
                                <option> Relevante</option>
                                <option> Pouco relevante</option>
                                <option> Sem relevância</option>
                            </select>
                            <!-- fim da resposta -->

                            <h3>22. Utilize o espaço abaixo para aprofundar sua opinião sobre algum ponto abordado pela avaliação
                                ou sobre o qual ela não tratou, mas que você considera relevante e deseja se manifestar:</h3>
                            <textarea class="contatoindex" rows="5" cols="100" wrap="virtual" placeholder="Mensagem" id="resposta21"
                                name="pergunta22"></textarea>



                            <h3>23. Sugira alguma iniciativa ou projeto que possam ser promovidos pela Faculdade para manter
                                o vínculo com seus ex-alunos:</h3>
                            <textarea class="contatoindex" rows="5" cols="100" wrap="virtual" placeholder="Mensagem" id="resposta22"
                                name="pergunta23"></textarea>

                            <button type="submit" id="login-button" onclick=$result>Fazer Login</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!-- Fim do cofmrulario de primeiro acesso -->
    </header>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://samiralibabic.github.io/portfolio/js/plugins.js"></script>
    <script src="https://samiralibabic.github.io/portfolio/js/main.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>

    <script src="javascript/verificacaoacesso.js"></script>


</body>

</html>