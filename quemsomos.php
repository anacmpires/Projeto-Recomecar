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
    <title>Quem Somos</title>
  </head>
  <body>
    
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
          <div class="clear"></div>
        </div>
      </div>
    </header>

   <div class="jumbotron">
          <div class="view overlay rounded-top">
            <img src="./Artes projeto squad4/banner_quem_somos.jpg" class="img-fluid" alt="Informacoes">
              <div class="text-white text-left pt-5 px-3 " >
                <h1 class="text-primary h1-responsive mb-5">Quem nós somos?</h1>
                <p class=" text-secondary mx-2 mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, amet blanditiis beatae saepe eos atque itaque id error aperiam minima natus veritatis eaque il</p>
                <p class="text-secondary mx-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis autem optio libero asperiores eaque vitae qui velit aliquam officiis iure tempora dolorem provident, iste quaerat commodi doloremque maxime mollitia! Animi!</p>
            </div>
           </div>
        </div>
  </body>
</html>