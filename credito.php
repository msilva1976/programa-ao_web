<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <title>Programção Web</title>
  </head>
  <body>
    <header class="topo">
      <div>
        <img src="./img/topo_aula10.png" alt="topo" />
        <h1>MCS - PROGRAMAÇÃO WEB COM PHP<br /></h1>
        <hr />
      </div>
    </header>
    <main>
      <div class="pesquisa">
      
      </div>
      <div class="conteudo">
        <?php
        $nome = $_POST["nome"];
        $renda = $_POST["renda"];

        echo"Ola $nome muito obrigado por seu contato<br>";
        if ($renda >= 2000) {
          echo"<br>Seu credito esta <strong>aprovado</strong>.<br><br>";
        } else if ($renda < 2000) {
          echo"<br>Infelizmente no momento seu credito nâo foi aprovado<br><br>"; 
        } 
        
      
          
        ?>
        <a href="./index.html">voltar</a>
      </div>
    </main>
    <footer>
      <div>
        <h2>MCS - PROGRAMAÇÃO WEB COM PHP</h2>
      </div>
      <div class="direitos">
        <h4>©2022 TODOS OS DIREITOS RESERVADOS</h4>
      </div>
    </footer>
    
  </body>
</html>
