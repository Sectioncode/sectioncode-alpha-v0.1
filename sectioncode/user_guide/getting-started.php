<?php include_once ('./header.php'); ?>

<main><div class="section" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s12 m9">
                    <h1 class="header center-on-small-only">Iniciando no Section Code</h1>
                    <h4 class ="light red-text text-lighten-4 center-on-small-only">Saiba como iniciar facilmente usando Section Code em seu projeto.</h4>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <!--  Outer row  -->
        <div class="row">

            <div class="section col s12 m9 l10">
                <div id="download" class="row scrollspy">
                    <h2 class="col s12 header">Download</h2>
                    <p class="caption col s12">Voce pode utilizar o SectionCode baixando o arqivo zip e descompactando em seu servidor na pasta raiz.</p>
                    <a id="download-source" class="btn waves-effect waves-light" href="#">SectionCode<i class="material-icons right">file_download</i></a>

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
                            <li><a href="#download">Download</a></li>
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