<?php
    include_once('conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Fale Conosco</title>
    </head>
    <body class="fundo">
        <header class="menu">
            <div class="center">
               <div class="diretorio">
                  <a href="index.php"><img  width="100px" src="./Artes projeto squad4/recomecarlogomenor.png" alt="logo"></a>
                  <a href="cadastrar.php">Cadastrar</a>
                  <a href="quemsomos.php">Quem Somos</a>
                  <a href="faleconosco.php">Fale conosco</a>
               </div>
               <div>
                  <form method="POST" class="form-login">
                      <div class="form-element">
                        <p>E-mail</p>
                        <input id="email" type="email" name="email" placeholder="digite o seu email..." required> 
                      </div>
                      <div class="form-element">
                        <p>senha</p>    
                        <input type="password" name="senha" placeholder="digite sua senha..." required>
                       </div>
                       <div class="form-element">  
                         <input type="submit" name="acao" value="Entrar">
                       </div>
                   </form>
                   </form>
                   <div class="clear"></div>
               </div>
             </div>
        </header>

        <br><br>
        <div class="main container">
          <div class="card">
              <h1>Cadastre-se</h1>
              <form action="cadastro_usuario.php" method="post">
                  <input type="text" name="nome" placeholder="Digite o seu nome">
                  <input type="email" name="email" placeholder="Digite seu e-mail">
                  <input type="password" name="senha" placeholder="Digite sua senha">
                  <input type="password" name="conf_senha" placeholder="Confirme sua senha">
                  <button>Cadastre-se</button>
                  <br>
              </form>
          </div>
        </div>
      <br><br><br>
    </body>
  </html>      