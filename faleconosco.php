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
                   </form>
                   <div class="clear"></div>
               </div>
             </div>
           </header>
       
        <div class="jumbotron">
          <div class="view overlay rounded-top">
            <img src="./Artes projeto squad4/bannercontato.jpg" class="img-fluid" alt="Informacoes">
           </div>
        </div>
       
      </body>
    </html>      
    <!-- MAIN-->
      <main >
        <header>
            <p class="titulo">
                Contacte-nos
            </p>
            <p class="subtitulo">Seu feedback é muito importante!</p>
            <hr>
        </header>
     </main>
    <!-- MAIN-->


    <!-- CONTEÚDO -->
    <div class="contato">
            <div>
                <p>Nome</p>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome...">
            </div>

            <div>
                <p>Email</p>
                <input type="email" id="email" name="email" placeholder="Digite seu email...">
            </div>

            <div>
                <p>Texto</p>
                <textarea id="texto" name="texto" placeholder="Escreva algo..."></textarea>
            </div>

            <div>
                <button class="enviar" onclick="alert('Em breve!')">Enviar</button>
            </div>

            <br>

    </div>
   

    <br><br><br><br>

    </body>
</html>