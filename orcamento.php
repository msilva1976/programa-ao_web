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
        <h1>MCS - Orcamento <br /></h1>
        <hr />
      </div>
    </header>
    <main>
      <div class="pesquisa">
      
      </div>
      <div class="conteudo">
        
        <?php
      $data = $_GET["data"];
      $validade = $_GET["validade"];
      $locacao = $_GET["locação"];
      $tipo_loc = $_GET["tipo_de_locacao"];
      $nome = $_GET["cliente"];

        echo"Detalhes do Orçamento <br>";
        echo"Data: $data Tempo de validade deste orcaçamento é de $validade dia<br>";
        echo"Tipo de Serviço $locacao <br>";
        echo"Locação de  $tipo_loc<br>";
        echo"Nome do Locatario $nome <br>";
        switch ($variable) {
          case 'locacao':
            # code...
            break;
          
          default:
            # code...
            break;
        }
      
          
        ?><br><br>
        <p>Assinatura: ______________________________________________________________________</p><br><br>
        <p>Data____/____/____</p><br><br>
        <p>Ao assinar você concorda com todos os termos do contrato de serviço</p><br>

        <form action="">
            <input type="button" value="Imprimir Orcamento" onclick="window.print()">

        </form>
        
        <a href="./index.html">voltar</a>
      </div>
    </main>
    <footer>
      
        <h4>©2022 TODOS OS DIREITOS RESERVADOS</h4>
      </div>
    </footer>
    
  </body>
</html>
