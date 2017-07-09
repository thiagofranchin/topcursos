<?php
include_once 'is-session.php';

$nomeUsuario =  $_SESSION['userSession'];
$nomeUsuario = explode('.', $nomeUsuario); 
$nomeCompleto = $nomeUsuario[0];   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Top Cursos</title>
  <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">

  <link rel="stylesheet" href="css/style.min.css"> </head>

<body class="cursos">
  <!-- HEADER -->
  <header>
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3"><span class="color-blue jumbotron-title">Top Cursos</span></h1>
        <p class="lead"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Olá <span class="text-capitalize name-user"><?php echo $nomeCompleto; ?></span>, seja bem vindo a plataforma de cursos totalmente free.</p>
        <div class="animated zoomIn">
          <hr class="my-4 hr-blue animated fadeOut ">
          <hr class="my-4 hr-blue animated fadeIn ">
          <hr class="my-4 hr-blue animated fadeOut ">
        </div>
        <div class="superline"></div>
        <p>Escolha o que você quer aprender hoje e bons estudos! =)</p>
        <p class="lead">
           <a class="btn btn-outline-success btn-lg" href="logout.php" role="button">Sair</a> 
        </p>
      </div>
    </div>
  </header>

  <!-- NAVBAR -->
  <!--<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Angular
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="files/AngularJSv1.3.zip">AngularJS v1.3</a>
              <a class="dropdown-item" href="#">####</a>
              <a class="dropdown-item" href="#">####</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Bootstrap
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">####</a>
              <a class="dropdown-item" href="#">####</a>
              <a class="dropdown-item" href="#">####</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              E-commerce
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Magento</a>
              <a class="dropdown-item" href="files/PrestashopV1.6.zip">Prestashop 1.6</a>
              <a class="dropdown-item" href="#">WooCommerce</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Javascript
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">####</a>
              <a class="dropdown-item" href="#">####</a>
              <a class="dropdown-item" href="#">####</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ReactJS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="https://www.udemy.com/reactjs-ninja-modulo-react-webpack/" target="_blank">React.js Ninja: Módulo React + Webpack</a>
              <a class="dropdown-item" href="http://jscasts.teachable.com/p/comecando-com-react-js" target="_blank">Começando com React.js</a>
              <a class="dropdown-item" href="http://jscasts.teachable.com/p/react-js-com-es6" target="_blank">React.js com ES6</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>-->

  <section>
    <div class="container-fluid">
      <div class="row">

        <div class="animated zoomInUp card w-25 card-inverse card-node">
          <div class="card-block">
            <h3 class="card-title">Node</h3>
            <h6>Rodrigo Branas</h6>
            <small>
              VERSÂO: 4.4.0 <br>
              PRÉ-REQUISITO: Javascript intermediário.
            </small>
            <p class="card-text mt-2">
              Vamos mostrar por meio de diversos exemplos como o Node.js funciona e quais são os aspectos importantes em termos de escalabilidade e performance.
            </p>
            <a href="https://www.youtube.com/playlist?list=PLQCmSnNFVYnTFo60Bt972f8HA4Td7WKwq" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>

        <div class="animated zoomInUp card w-25 card-inverse card-javascript">
          <div class="card-block">
            <h3 class="card-title">Desvendando a linguagem JavaScript</h3>
            <h6>Rodrigo Branas</h6>
            <small>
              PRÉ-REQUISITO: Javascript básico.
            </small>
            <p class="card-text mt-2">
              Vamos abordar a história e os principais conceitos da linguagem.
            </p>
            <a href="https://www.youtube.com/playlist?list=PLQCmSnNFVYnT1-oeDOSBnt164802rkegc" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>

        <div class="animated zoomInUp card w-25 card-inverse card-reactjs">
          <div class="card-block">
            <h3 class="card-title">Começando com React.js</h3>
            <small>
              PRÉ-REQUISITO: Javascript básico
            </small>
            <p class="card-text mt-2">
              Nesse curso vamos construir uma aplicação completa com React, que te ensinará:
              <ul>
                <li>O que é o React</li>
                <li>Quais seus benefícios</li>
                <li>JSX</li>
                <li>Componentização</li>
                <li>Integração com o back-end</li>
              </ul>
            </p>
            <a href="http://jscasts.teachable.com/p/comecando-com-react-js" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>

        <div class="animated zoomInUp card w-25 card-inverse card-reactjs">
          <div class="card-block">
            <h3 class="card-title">React.js com ES6</h3>
            <small>
              PRÉ-REQUISITO: Javascript básico, curso <a href="http://jscasts.teachable.com/p/comecando-com-react-js" target="_blank">Começando com React</a>
            </small>
            <p class="card-text mt-2">
              Nesse curso vamos refatorar a aplicação construída no curso Começando com React, alterando todo o código que estava em ES5 para ES6!
            </p>
            <a href="http://jscasts.teachable.com/p/react-js-com-es6" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>

        <div class="animated zoomInUp card w-25 card-inverse card-reactjs">
          <div class="card-block">
            <h3 class="card-title">React.js Ninja</h3>
            <small>
              PRÉ-REQUISITO: Javascript básico
            </small>
            <p class="card-text mt-2">Utilizar o webpack para desenvolver aplicações com React.</p>
            <a href="https://www.udemy.com/reactjs-ninja-modulo-react-webpack/"  target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>

        <div class="animated zoomInUp card w-25 card-inverse card-angular">
          <div class="card-block">
            <h3 class="card-title">Tudo sobre AngularJS</h3>
            <h6>Rodrigo Branas</h6>
            <small>
              VERSÃO: 1.3.15 <br>
              PRÉ-REQUISITO: Javascript intermediário.
            </small>
            <p class="card-text mt-2">
              Vamos mostrar por meio de diversos exemplos como o angular.js funciona e quais são os aspectos importantes em termos de escalabilidade e performance.
            </p>
            <a href="https://www.youtube.com/playlist?list=PLQCmSnNFVYnTD5p2fR4EXmtlR6jQJMbPb" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>

        <div class="animated zoomInUp card w-25 card-inverse card-github">
          <div class="card-block">
            <h3 class="card-title">Git e Github</h3>
            <h6>Wesley Willians</h6>
            <small>
              PRÉ-REQUISITO: Não há pré-requisitos para fazer esse curso.
            </small>
            <p class="card-text mt-2">Nesse curso você aprenderá do zero a trabalhar com o principal sistema de controle de versão da atualidade. Também, aprenderá a trabalhar com os serviços do Github.com.</p>
            <a href="https://www.schoolofnet.com/curso-git-e-github/" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>


        <div class="animated zoomInUp card w-25 card-inverse card-python">
          <div class="card-block">
            <h3 class="card-title">Iniciando com Python</h3>
            <h6>Wesley Willians</h6>
            <small>
              PRÉ-REQUISITO: Conhecimento básico em internet
            </small>
            <p class="card-text mt-2">Python tem se tornado uma linguagem cada vez mais popular no mercado, inclusive no de desenvolvimento web. Nesse treinamento, você entenderá os principais pontos para lhe dar a base necessária para desenvolver suas primeiras aplicações </p>
            <a href="https://www.schoolofnet.com/curso-iniciando-com-python/" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>

        <div class="animated zoomInUp card w-25 card-inverse card-bootstrap">
          <div class="card-block">
            <h3 class="card-title">Bootstrap 3</h3>
            <small>
              VERSÃO: Bootstrap 3 <br> 
              PRÉ-REQUISITO: Conhecimento básico HTML e CSS.
            </small>
            <p class="card-text mt-2">
              Aprenda a desenvolver aplicações front-end responsivas com agilidade, veremos as mudanças que ocorreram das versões 2 e 3 do framework. 
            </p>
            <a href="https://www.youtube.com/playlist?list=PLN9uKzK0o3GT57zJfytM7NdSmWwhnrKSJ"  target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>

        <div class="animated zoomInUp card w-25 card-inverse card-github">
          <div class="card-block">
            <h3 class="card-title">Criando Páginas Web com o GitHub Pages</h3>
            <small>
              PRÉ-REQUISITO: Não há pré-requisitos para fazer esse curso.
            </small>
            <p class="card-text mt-2">Nesse curso você aprenderá uma forma rápida para hospedar seus sites utilizando o GitHub além de conhecer os conceitos básicos de versionamento de códigos.</p>
            <ul>
              <li>Aprender sobre GitHub.</li>
              <li>Aprender o básico sobre Git.</li>
              <li>Aprender sobre GitHub Pages.</li>
            </ul>
            <a href="https://www.udemy.com/github-pages/" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>

        <div class="animated zoomInUp card w-25 card-inverse card-webpack">
          <div class="card-block">
            <h3 class="card-title">Webpack 1</h3>
            <small>
              PRÉ-REQUISITO: Conhecimento básico em javascript.
            </small>
            <p class="card-text mt-2">
              E você entenderá o suficiente para lidar com possíveis problemas que possam ocorrer ao iniciar uma configuração específica para o seu projeto.
              Ideal para quem trabalha com ReactJS.
            </p>
            <ul>
              <li>O que é e como Webpack funciona.</li>
              <li>Definir o arquivo de configuração.</li>
              <li>Resolver extensões de arquivos.</li>
              <li>Trabalhar com Path Aliases.</li>
              <li>Loaders, o que são? Exemplos de loaders: ts-loader e sass-loader.</li>
              <li>Plugins, minificando arquivos javascript</li>
              <li>Configurando ambiente de desenvolvimento.
                <ul>
                  <li>webpack-dev-server</li>
                  <li>Refresh automático no browser ao salvar um arquivo</li>
                  <li>Hot Module Replacement</li>
                  <li>Source Maps</li>
                </ul>
              </li>
              <li>Ambiente de produção.</li>
            </ul>
            <a href="https://www.youtube.com/playlist?list=PLN9uKzK0o3GSRsS6RxtCHyt7zcID4Lcmy" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>

        <div class="animated zoomInUp card w-25 card-inverse card-wordpress">
          <div class="card-block">
            <h3 class="card-title">Criando site responsivo com WordPress e Bootstrap</h3>
            <small>
              VERSÃO: Bootstrap 3 <br> 
              PRÉ-REQUISITO: Conhecimento básico de wordpress.
            </small>
            <p class="card-text mt-2">Nesse curso você aprenderá a construir um site responsivo usando bootstrap e gerenciar todas as seções criadas usando wordpress.</p>
           
            <a href="https://www.youtube.com/playlist?list=PLGoNvruYZ-YzvMOv2YrK3_zaXejHYc5zJ" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>

        <div class="animated zoomInUp card w-25 card-inverse card-github">
          <div class="card-block">
            <h3 class="card-title">Git e Github para iniciantes</h3>
            <h6>Willian Justen</h6>
            <small>
              PRÉ-REQUISITO: Não há pré-requisitos para fazer esse curso.
            </small>
            <p class="card-text mt-2">Nesse curso iremos aprender como utilizar o Git em nossos projetos e como fazer a ligação do mesmo com o Github.</p>
            <ul>
              <li>  Saber a história do Git.</li>
              <li>Como configurar o Git e seus comandos básicos.</li>
              <li>Como trabalhar com diferentes branches num projeto.</li>
              <li>Como trabalhar com repositórios remotos no Github.</li>
            </ul>
            <a href="https://www.udemy.com/git-e-github-para-iniciantes" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>        

        <div class="animated zoomInUp card w-25 card-inverse card-github">
          <div class="card-block">
            <h3 class="card-title">Git e contribuições para projetos Open Source</h3>
            <small>
              PRÉ-REQUISITO: Não há pré-requisitos para fazer esse curso.
            </small>
            <p class="card-text mt-2">Você aprenderá os fundamentos básicos sobre Controle de Versão e como usar Git para realizar o controle de versão. Também aprenderá a contribuir com projetos no GitHub e a trabalhar em equipe usando Git.</p>
            <a href="Git e contribuições para projetos Open Source" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>

        <div class="animated zoomInUp card w-25 card-inverse card-jekyll">
          <div class="card-block">
            <h3 class="card-title">Criando sites estáticos com Jekyll</h3>
            <h6>Willian Justen</h6>
            <small>
              PRÉ-REQUISITO: Conhecimentos básicos de HTML e CSS.
            </small>
            <p class="card-text mt-2">Nesse curso você irá aprender o básico para se iniciar um site com o Jekyll, passando desde como o Jekyll funciona, sua instalação e como editá-lo. No final, iremos subir nossa aplicação direto no Github Pages e vê-la no ar.</p>
            <ul>
              <li>O que são geradores estáticos</li>
              <li>Instalar o Jekyll</li>
              <li>Comandos básicos do Jekyll</li>
              <li>Sistema de Arquivos e Templates do Jekyll</li>
              <li>Criar Blog Simples</li>
              <li>Criar Links Amigáveis (Permalinks)</li>
              <li>Adicionar comentários em Posts</li>
              <li>Hospedar no Github Pages</li>
            </ul>
            <a href="https://www.udemy.com/criando-sites-estaticos-com-jekyll/" target="_blank" class="btn btn-outline-secondary">Link</a>
          </div>
        </div>



        
      </div>
    </div>
  </section>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/tether/dist/js/tether.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="js/functions.js"></script>
</body>

</html>


