<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style/designealuno.css">

    <link rel="stylesheet" href="style/editarPerfilAluno.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Editar Perfil</title>

</head>

<nav id="sidebar">
  <ul class="dots">
        
    <li>
      <a href="perfilaluno.php">
        <span class="glyphicon glyphicon-user"></span>
      </a>  
    </li>
 
    <li>
      <a href="editarperfilaluno.php">
      <span class="glyphicon glyphicon-list-alt"></span>
      </a>
    </li>

    <li>
        <a href="loginaluno.php">
        <span class="glyphicon glyphicon-off"></span>
        </a>
    </li>

        
  </ul> 
</nav>

<body>
  
    <div id="form">
    <p><b>***Mantenha sempre seus dados atualizados para receber as novidades sobre eventos e cursos.</b></p>
    <h4>Informações pessoais</h4>
    <!--formulario-->
    <input id="nomeAluno" name="nome" class="contatoAluno" type="text" required maxlength="60" placeholder="Nome completo">

    <input id="emailAluno" name="email" class="contatoAluno" type="email" required maxlength="60" placeholder="E-mail">
    
    <div class="contatoAluno3">
    
    <div>
    <label>Telefone:</label>
    <input id="telAluno" name="telefone" class="contatoAluno" type="tel" required maxlength="60" placeholder="(xx)xxxx-xxxx">
    </div>

    <div>
        <label>Celular:</label>
        <input id="celularAluno" name="celular" class="contatoAluno" type="tel" required maxlength="60" placeholder="(xx)xxxxx-xxxx">
    </div>
    
    <div>
      <label>Data de Nascimento:</label>
    <input id="datanascimentoAluno" name="data_nascimento" class="contatoAluno" type="date" required maxlength="60" placeholder="Data de Nascimento">
     </div>

     <div>  
       <label>Sexo:</label>
      <select class="contatoAluno" name="sexo">
        <option>Selecione</option>
        <option>Feminino</option>
        <option>Masculino</option>
      </select>
      </div>
   </div> <!--fim div com tel sexo e nascimento -->

   <input id="enderecoAluno" name="rua" class="contatoAluno" type="text" required maxlength="60" placeholder="Endereço">

   <div class="contatoAluno3">

      <div>
          <label>Nº:</label>
              <input id="celularAluno" name="numero" class="contatoAluno" type="number" required maxlength="60" placeholder="">
      </div>

      <div>
      <label>CEP:</label>
      <input id="cepAluno" name="cep" class="contatoAluno" type="number" maxlength="8" placeholder="00000-000">
      </div>
  
      <div>
        <label>Bairro:</label>
      <input id="bairroAluno" name="bairro" class="contatoAluno" type="text" required maxlength="60" placeholder="">
       </div>
 
       <div>
          <label>Cidade:</label>
        <input id="cidadeAluno" name="cidade" class="contatoAluno" type="text" required maxlength="60" placeholder="">
         </div>
  
       <div>  
         <label>UF:</label>
        <select class="contatoAluno" name="uf" >
            
            <option>	   	</option>
            <option>	AC	</option>
            <option>	AL	</option>
            <option>	AM	</option>
            <option>	AP	</option>
            <option>	BA	</option>
            <option>	CE	</option>
            <option>	DF	</option>
            <option>	ES	</option>
            <option>	GO	</option>
            <option>	MA	</option>
            <option>	MG	</option>
            <option>	MS	</option>
            <option>	MT	</option>
            <option>	PA	</option>
            <option>	PB	</option>
            <option>	PE	</option>
            <option>	PI	</option>
            <option>	PR	</option>
            <option>	RJ	</option>
            <option>	RN	</option>
            <option>	RO	</option>
            <option>	RR	</option>
            <option>	RS	</option>
            <option>	SC	</option>
            <option>	SE	</option>
            <option>	SP	</option>
            <option>	TO	</option>
        </select>
        </div>
     </div> <!--fim div com tel sexo e nascimento -->



    <input id="CPFAluno" class="contatoAluno" type="number" required maxlength="60" placeholder="CPF" name="cpf">

    <input id="rgAluno" class="contatoAluno" type="number" required maxlength="60" placeholder="RG" name="rg">

    <h4>Informações acadêmicas</h4>

    <input id="universidadeAluno" class="contatoAluno" type="text" required maxlength="60" placeholder="Universidade" name="universidade">

    <input id="cursoAluno" class="contatoAluno" type="text" required maxlength="60" placeholder="Curso" name="curso">

    <div class="contatoAluno3">
     
      <div>
      <label>Registro do Aluno:</label>
          <input id="raAluno" class="contatoAluno" type="number" required maxlength="60" placeholder="RA" name="ra">
      </div> 

            
      <div>
          <label>Data de início:</label>
          <input id="anoinicioFormacaoAluno" class="contatoAluno" type="month" required maxlength="60" placeholder="Data" name="data_inicio">
      </div>
      
      <div>
      <label>Data de Formação:</label>
      <input id="anoFormacaoAluno" class="contatoAluno" type="month" required maxlength="60" placeholder="Data" name="data_formacao">
      </div>
  </div> 

  <h2> Informações profissional</h2>

  <div>
      <input name="Empresa" type="Text" class="contatoAluno" placeholder="Empresa atual"
          id="empresaAluno" name="empresa_atual"/>
  </div>

  <div>
      <input name="Cargo" type="text" class="contatoAluno" placeholder="Cargo atual"
          id="cargoAluno" name="cargo_atual" />
  </div>

  <select class="contatoAluno" name="nivel">
      <option>Selecione o nível</option>
      <option>	Auxiliar/Operacional		</option>
      <option>	Técnico		</option>
      <option>	Estágio		</option>
      <option>	Júnior		</option>
      <option>	Pleno		</option>
      <option>	Sênior		</option>
      <option>	Supervisão/Coordenação		</option>
      <option>	Gerência		</option>
      <option>	Diretoria		</option>
      
  </select>

                    <form method="post" enctype="multipart/form-data" action="">
                    <span id="filename">Selecionar arquivo</span>
                    <label for="file-upload">Selecionar Foto de Perfil
                      <input type="file" id="file-upload">
                    </label>
                  </form>

    <input  type="submit" value="Salvar">
     
    
  
  
  
  </div>
  
</body>

</html>