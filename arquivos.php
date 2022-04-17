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
        
        $pesquisa = $_GET["pesquisa"];
        switch ($pesquisa) {
            case 'office':
                echo "
                <h1>Pacote Office</h1><br>
                <img src = './img/office.png'><br>
                
                Faculdade, cursos livres e técnicos<br>
                
                Mercado de trabalho disputado, empresas cada vez mais exigentes...<br>
                
                Tempo e Dinheiro, são fatores que ocupam e preocupam pessoas o tempo todo na atual sociedade.<br>
                
                Microsoft Office Essencial, apresenta a forma mais simples e rápida de aprender as principais ferramentas da Microsoft para a criação de Planilhas eletrônicas, Formatação de Textos e Criação de Apresentações com os já conhecidos e amplamente utilizados Softwares Excel, Word e Power Point.";
                break;
                case 'Marketing Digital':
                    echo"
                    <h1>Marketing Digital</h1>
                    <img src = './img/Ads.png'><br>
                        Uma das maiores dificuldades no início de qualquer empreendimento é a conquista dos clientes, mostrar o quanto sua ideia pode ser inovadora ou o quanto seu produto pode ser útil e sua qualidade surpreendente.<br>

                        Se você é um produtor de conteúdo digital (Youtuber por exemplo) este curso vai ajudar a alavancar seus vídeos e conquistar público. <br>

                        Neste curso trabalhamos com o Marketing Direto, no qual os anúncios serão totalmente objetivos levando clientes (que estajam buscando por seu produto) até a sua página de vendas, canal, loja virtual ou física e página do Facebook.";
                    break;
                    case 'Negócios Digitais':
                        echo"
                        <h1>Negócios Digitais</h1>
                        <img src = './img/negocios.png'><br>
                        

                        Já imaginou desenvolver um site e obter renda extra com isso?<br>
                        
                        Já imaginou trabalhar como afiliado de produtos digitais, gerando renda sem ter que abandonar seu atual emprego ou atividade?<br>
                        
                        Prestar serviços de desenvolvimento de sites para empreendedores digitais, com campanhas completas de Marketing digital utilizando Google Ads, Facebook Ads?<br>
                        
                        Tornar - se um afiliado Profissional de plataformas conhecidas como Hotmart, Eduzz, Monetizze e Udemy?<br>
                        
                        Alavancar a venda de produtos físicos melhorando sua presença digital?<br>
                        
                        Se você disse sim para uma (ou todas) essas perguntas, então este curso é ideal!";
                        break;
                
            
                    
            
            default:
                echo"Não foi enconcontrado nenhuma palavra correspondente! ";
                break;
        }
        
        ?><br><br>
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
