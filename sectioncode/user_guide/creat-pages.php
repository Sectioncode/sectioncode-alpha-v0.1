<?php include_once ('./header.php'); ?>

<main><div class="section" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s12 m9">
                    <h1 class="header center-on-small-only">Criando sua primeira página</h1>
                    <h4 class ="light red-text text-lighten-4 center-on-small-only">Aqui você vai aprender como carregar suas novas páginas no sistema.</h4>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <!--  Outer row  -->
        <div class="row">

            <div class="section col s12 m9 l10">
                
                <div id="controle" class="row scrollspy">
                    <h2 class="col s12 header">Controles</h2>
                    <p class="caption col s12">Primeiramente vamos aprender algumas caracteristicas dos controles. </p>
                    <p class="caption col s12">Os "Controles" como o nome já diz, é o responsavel por controlar toda a estrutura da página. Com esse arquivo é possivel informar qual a página deve ser chamada de acordo com a url, qual o procedimento que deve ser realizado e etc...</p>
                    

                </div>
                <div id="staticpage" class="row scrollspy">
                    <h2 class="col s12 header">Paginas Estáticas</h2>
                    <p class="caption col s12">Neste topico vamos aprender a criar nossa primeira página estatica. </p>
                    <p class="caption col s12">Vamos editar nosso arquivo <strong>app/controle/Home_controle.php</strong> para localizar o arquivo <strong>app/view/home.php</strong></p>
                    <pre>
                        <code class="language-php">
    class Home extends Controller{
    
    
    public function __construct() {
        parent::__construct();
      
    }
    public function index(){
      
       $this->view('welcome'); //Altere este nome pelo nome do seu arquivo da pagina inicial
       /*
       *--Exemplo: $this->view('pagehome');
       */
       
       
    }
</code>
                    </pre>
                    <p class="caption col s12">Feito isso crie um arquivo na pasta <strong>app/view/pagehome.php</strong></p>
                    <p>Pronto sua primeira página estatia ja foi criada, agora acesse sua home page e veja que a página "welcome" foi alterada para sua página.</p>
                    

                </div>

 <div class="divider"></div>

                <div id="setup" class="row scrollspy">
                    <div class="col s12">
                        <h2 class="header">Setup</h2>
                        <h4 >Estrutura do Projeto</h4>
                        <p>Após o download, extrair os arquivos para o diretório onde seu site está localizado . Seu diretório será algo parecido com isso.</p>


                        <pre><code class="language-php directory-markup ">
Diretorio Raiz
  MyWebsite/
  |--app/
  |  |--assets
  |     |--css
  |     |--fonts
  |     |--image
  |     |--js
  |
  |  |--controle/
  |  |--model/
  |  |--view/
  |
  |--errors/
  |  |--404error.php
  |--system/
  |  |--classes/
  |  |  |--Conexao.php
  |  |  |--Config.php
  |  |  |--Controller.php
  |  |  |--Database.php
  |  |  |--Load.php
  |  |  |--Model.php
  |  |--functions/
  |  |  |--base_url.php
  |  |--config.ini.php
  |--index.php
  |--.htaccess

          </code></pre>
                    </div>
                </div>
 <div id="configini" class="row scrollspy">
                    <div class="divider"></div>
                    <div class="col s12">
                        <h2 class="header">Configurações Iniciais</h2>
                        <p>As configurações iniciais são bem simples e não requer um grande conhecimento no sistema para faze-los.</p>
                        <p>Neste guia iremos tratar sobre todos os diretorios e arquivos do sistema alem de funcionalidades para agilizar seu trabalho como SectionCode.</p>
                        
                    </div>
                   
                    <div class="col s12">
                        <h4>Arquivo Index</h4>
                        <p>Primeiramente devemos informar qual o nome do projeto, configurando a variavel <code>$projectname</code> adicionando barras no inicio e no fim do nome. como no exemplo abaixo.</p>
                        <pre>
                        <code class="language-php">
Arquivo index.php no diretorio raiz                           
$projectname = '/sectioncode/';
                            </code>
                        </pre>
                    </div>
                    <div class="col s12">
                        <p>Informado o nome do projeto, agora informe se seu projeto está em desenvolvimento local com o valor <code>true;</code> ou se está em servidor remoto endereço de exemplo: www.seusite.com.br alterando o valor para <code>false;</code></p>
                        <pre>
                            <code class="language-php">
                              
Arquivo index.php no diretorio raiz                                
/**
 * Defina se esta em desenvolvimento deixando com true ou false caso o projeto não esteja em localhost.
 */
$developement = false;
function teste();

</code>
                        </pre>
                    </div>
                    
                    <div class="col s12">
                        <h4>Finalizado.</h4>
                        <p>Pronto suas configurações iniciais já foram concluidas agora acesse seu site e comece a criar seu primeiro projeto.</p>
                        <p>Continue estudando para tirar o maior proveito do SectionCode acessando o menu ao alado e selecionando os tópicos necessários.</p>
                    </div>
                    
                    
                   
                </div>

            </div>
            <!-- Table of contents -->
            <div class="col hide-on-small-only m3 l2">
                <div class="toc-wrapper">
                    <div style="height: 1px;">
                        <ul class="table-of-contents">
                                                       <li><a href="#controle">Controles</a></li>
                                                        <li><a href="#staticpage">Paginas estáticas</a></li>
                            <li><a href="#setup">Setup</a></li>
                            <li><a href="#configini">Configurações iniciais</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>



<?php include_once ('./footer.php'); ?>