<h3>Instalação Completa</h3>

<p>Eu não tenho site em Joomla e eu quero instalá-lo do zero. </p>

<p>Usando esse método você terá o mecanismo CMS do Joomla, template Joomla, conteúdo de amostra e todas as extensões
    necessárias instaladas.</p>

<!-- Creating database -->


<h3>Criando Banco de Dados</h3>

<p>Quando você terminar de enviar os arquivos ao servidor de hospedagem, você pode preparar um novo banco de dados para
    o seu site Joomla. Você pode criar um novo banco de dados usando uma ferramenta de gerenciamento de banco de dados
    no painel de controle do seu servidor de hospedagem (
    <i>normalmente PhpMyAdmin</i>
    ).
</p>

<h6>Com a ferramenta phpMyAdmin você poderá criar um novo banco de dados em 3 simples etapas: (veja os slides
    abaixo)</h6>

<ol class="index-list">
    <li>Clique no botão do Banco de Dados (em Inglês, &quot;Database&quot;) no menu de nevageção superior para acessar a
        lista de banco de dados </li>

    <li>Nome de entrada do banco de dados (em Inglês, &quot;database&quot;) no campo &quot;Criar novo banco de dados&quot;
        (em Inglês, &quot;Create new database&quot;) </li>

    <li>Clique em Criar botão (em Inglês, &quot;Create button&quot;) no lado direito </li>
</ol>

<p>Seu banco de dados pode ser visto na lista de banco de dados. Clique no nome dele para acessar o banco de dados</p>


<div class="owl-carousel">
    <div class="item">
        <p>1. Clique no botão de Banco de Dados para acessar a lista de banco de dados</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Nome de entrada do banco de dados </p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Clique em criar botão (em Inglês, "Create button")</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. Seu banco de dados pode ser visto na lista de banco de dados. Clique no nome para obter acesso ao banco de
            dados.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>


<p>Você pode também dá uma olhada no tutorial em vídeo de
    <a href="/help/how-to-create-a-database.html">Como criar um banco de dados</a>
</p>

<p class="alert alert-info">Se você tiver quaisquer problemas ao criar um banco de dados, por favor, entre em contato
    com seu servidor de hospedagem para obter ajuda. </p>


<!-- Uploading files -->

<h3>Fazendo upload e descompactando</h3>

<p class="">Para começar a mexer com o Joomla você precisa enviar os arquivos ao seu servidor de hospedagem. Isso pode
    ser feito usando o gerenciador de sua hospedagem ou algum gerenciador terceirizado de FTP.</p>

<ol class="index-list">
    <li>Abra seu diretório de pacote de template e vá ao diretório &quot;joomla&quot;</li>

    <li>Selecione os arquivos 'unzip.php' e 'fullpackage.zip' e os envie ao seu servidor(
        <a href="/help/how-upload-files-server-2.html" target="_blank">Como enviar arquivos ao servidor.</a>
        )
    </li>
    <li>Digite o caminho para o arquivo 'unzip.php' no seu servidor (
        <i class="muted">http://seu_domínio/unzip.php</i>
        ) no seu
        <abbr title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc.">navegador</abbr>.
    </li>

    <li><p>Você deve ver a seguinte tela:</p>


        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>

    </li>

    <li>No campo suspenso 'Escolha seu arquivo zip' (em Inglês, 'Choose your zip file') por favor selecione o arquivo
        enviado fullpackage.zip. </li>

    <li>No campo 'Descompactar para' (em Inglês, 'Unzip to') especifique o diretório pra onde você quer extrair os
        arquivos. </li>

    <li>Clique no botão &quot;Descompactar&quot; (em Inglês, 'Unzip') para confirmar. </li>
</ol>

<p class="alert alert-info">Por favor, certifique-se de colocar as permissões corretas para o diretório onde você está
    planejando em extrair os arquivos. As permissões devem ser CHMOD 755 ou 777, depende da configuração do seu
    servidor.</p>


<!-- Joomla CMS installation -->


<h3>Instalação do Joomla CMS</h3>

<p> Por favor, certique-se de que você concluiu todas as
    <a href="#prepare">etapas de preparação</a>
    e todas as coisas necessárias.
</p>

<p>Abra o seu navegador e digite o caminho para o seu diretório do Joomla na barra de endereço (
    <i>ex.:. http://seu_domínio/joomla</i>
    ). Você deve ver a tela inicial de instalação do Joomla CMS:
</p>


<h4>1° Passo Configuração</h4>


<p> Ao usar a caixa &quot;Selecionar Idioma (em Inglês, "Select Language") escolha o idioma de instalação do Joomla.</p>

<p>
    <span class="label">Observação:</span>
    A caixa &quot;Selecionar Idioma&quot; (em Inglês, "Select Language") lhe permite escolher o idioma somente do
    processo de instalação. Isso não afetará o idioma do seu site.
</p>

<p>Você precisa preencher todos os campos de formulário na área &quot;Principal Configuração&quot;. Os campos
    obrigatórios são marcados com um asterisco *..</p>

<p>Preencha os campos &quot;Email do Administrador&quot;, &quot;Nome de usuário do administrador&quot; e &quot;Senha do
    Administrador&quot; (em Inglês, "Admin Email", "Admin Username" and "Admin Password") na coluna correta para criar
    um novo usuário de site do Joomla com direitos administrativos.</p>

<p class="alert alert-danger">Os campos "Admin Email", "Admin Username" and "Admin Password" são obrigatórios para
    acessar o
    <abbr title="Joomla Administration Panel that is used to work with Web site content">painel de controle</abbr> do
    seu site Joomla. Mantenha-os seguros.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>


<p>Quando você terminar clique no botão &quot;Próximo&quot; (em Inglês, &quot;Next&quot;)
    <strong>Next</strong>
    no canto superior direito para confirmar.
</p>


<h4>Passo 2 Banco de Dados</span>
</h4>


<p>No segundo passo da instalação do Joomla CMS você precisa colocar os detalhes do seu banco de dados. Se você não
    tiver certeza, por favor, entre em contato com seu provedor de hospedagem para obter os detalhes corretos.</p>

<p>Como você está instalando o Joomla do zero, você só precisa colocar o &quot;Nome da Hospedagem&quot;, &quot;Nome de
    Usuário&quot;, &quot;Nome do Banco de Dados&quot; e &quot;Senha&quot; (em Inglês, "Host Name", "Username", "Database
    Name"e"Password"). Você geralmente pode deixar as outras opções como padrão. Porém pode haver algumas diferenças
    dependendo do seu provedor de hospedagem. </p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>


<p>Quando você terminar, clique no botão&quot;Instalar&quot; (em Inglês, &quot;Install&quot;)
    <strong>Install</strong>
    no canto superior direito para confirmar.
</p>


<h4>Passo 3 Resumo</h4>


<p>Você está quase terminando de instalar o Joomla CMS. No passo do Resumo você precisa selecionar se você quer instalar
    os dados de Amostra do Joomla. </p>

<p class="alert alert-warning">Por favor, observe: Os Dados de Amostra são obrigatórios se você quer que seu site Joomla
    apareça como uma demonstração de template ao vivo com todas as imagens, texto de amostra e módulos configurados.
    Para fazer seu template aparecer na página de demonstração ao vivo, selecione o pacote de dados de amostra chamado
    "sample_theme###" onde ### é o número do seu tema.</p>

<p>Selecione o pacote da dados de Amostra que você quer instalar ou selecione &quot;Nenhum&quot; se você quer configurar
    seu site do Joomla puro, sem nenhum conteúdo.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>


<p>Abaixo você pode verificar se a configuração do banco de dados e os detalhes de acesso do painel administrativo são
    válidos e envie-os ao seu e-mail se for necessário</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>


<p>Você também pode verificar suas configurações de instalação e visualizar se seu servidor de hospedagem aceita os
    requerimentos do Joomla. Se você tem quaisquer caixas de notificação vermelha na seção &quot;Configurações
    Recomendadas&quot;, por favor, entre em contato com seu provedor de hospedagem para mais ajuda.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>


<p>Quando você terminar, clique no botão &quot;Instalar&quot; (em Inglês, &quot;Install)
    <strong>Install</strong>
    no canto superior direito para confirmar.
</p>


<h4>Passo 4 Instalação Concluída</h4>


<p>Parabéns! Você instalou o Joomla CMS com sucesso.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>


<p class="alert alert-danger">Por razões de segurança, por favor, delete o diretório &quot;Instalação&quot; (em Inglês,
    &quot;Installation&quot;) do seu diretório raiz do Joomla.</p>

<p class="alert alert-info">Dica: Você pode visualizar o vídeo tutorial de
    <a href="/help/joomla-3-0-how-to-install-joomla-engine.html">Como instalar o mecanismo Joomla 3</a>
</p>

<p class="alert alert-warning">Por favor, note que: se você finalizou a seção &quot;Instalação Concluída&quot; (em
    Inglês, "Complete Installation") você pode pular para as próximas seções &quot;Instalação de Template&quot;, &quot;Instalação
    de dados de amostra&quot; e &quot;Instalação de Extensões&quot; (em Inglês, "Template Installation", "Sample data
    installation" e "Extensions Installation"), como você já possui todos esses elementos já instalados.</p>


<p>Agora você está pronto para configurar seu site em Joomla CMS. Clique no botão "<b>Site</b>" para visualizar seu site
    ou em "<b>Administrator</b>" para visualizar o painel de controle do Joomla.
</p>