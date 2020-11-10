<?php
    include_once('conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title>Fale Conosco</title>
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
    <!-- MAIN-->
      <div class="jumbotron">
        <div class="view overlay rounded-top">
          <img src="./Artes projeto squad4/bannerhome.jpg" class="img-fluid" alt="Informacoes">
            <div class="text-white text-left pt-5 px-3 " >
              <h1 class="text-primary h1-responsive mb-5">Lorem ipsum dolor, sit amet</h1>
              <p class=" text-secondary mx-2 mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores, amet blanditiis beatae saepe eos atque itaque id error aperiam minima natus veritatis eaque il</p>
              <p class="text-secondary mx-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis autem optio libero asperiores eaque vitae qui velit aliquam officiis iure tempora dolorem provident, iste quaerat commodi doloremque maxime mollitia! Animi!</p>
          </div>
         </div>
        </div>
    </body>
  </html>      