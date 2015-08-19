<h3>Instalação de Dados de Amostra</h3>

<p>Os mesmos dados são utilizados para fazer o seu site Joomla aparecer como a página de
    demonstração ao vivo do template. Ele contém artigos de amostra, imagens,
    configuração de módulos, configurações de site, etc. Se você não está planejando em
    usar imagens de amostra ou qualquer outro conteúdo de amostra, por favor, pule esta
    etapa. </p>

<p>Para instalar os dados de amostra você precisar concluir dois passos simples.</p>

<h4>Fazer upload de imagens de amostra.</h4>

<p>Para enviar imagens de amostra, abra seu diretório de pacote do template e vá para a
    pasta &quot;fontes&quot; (em Inglês, &quot;sources&quot;). Lá você deve ver o
    diretório "to_the_root_directory". Ele contém arquivos que devem ser colocados na
    raiz de instalação do seu Joomla. Por favor, use o gerenciador de arquivo para
    enviar arquivos ao seu servidor.</p>

<h4>Importar arquivo SQL.</h4>

<p>E etapa final e mais importante da instalação de dados de amostra é a importação do
    arquivo SQL. O arquivo SQL é um despejo do banco de dados de amostra, todos os dados
    do site em Joomla devem ser armazenados lá. O arquivo SQL pode ser importado usando
    sua ferramenta de gerenciamento de banco de dados (phpMyAdmin). O arquivo SQL do
    template - &quot;dump.sql&quot; é localizado no diretório &quot;fontes&quot; (em
    Inglês, &quot;sources&quot;) do pacote do template. </p>


<p class="alert alert-danger">Por favor, <b>NÃO</b> importe o arquivo SQL se você tiver um site no ar, pois ele irá
    substituir o banco de dados do seu site e todos os seus dados serão perdidos.
<p class="alert alert-danger">Cuidado: antes de importar um arquivo SQL, por favor, certifique-se de que o prefixo de
    sua mesa de banco de dados se coincide com o prefixo da mesa no arquivo SQL.
<p>Você pode verificar o prefixo da mesa diretamente no banco de dados através da
    ferramenta de gerenciamento do banco de dados. Verifique os nomes das mesas. O
    prefixo é um conjunto de símbolos antes do nome da mesa (
    <i>ex.: mesa "jos_assets" o
        prefixo é "jos_"
    </i>
    ). Você também pode encontrar o prefixo de banco de dados no
    arquivo "configuration.php" no diretório raiz do seu Joomla. Procure a linha 19:
    </p><code>public $dbprefix = 'jos_';</code><p> (
    <i>onde o prefixo é"jos_"</i>
    )
</p>

<p>Se os prefixos da mesa não se coincidem, abra o arquivo "dump.sql" com seu editor de
    código e usando a ferramenta Pesquise e Substitua (em Inglês, &quot;Search &amp;
    Replace&quot;) (CTRL+F ou CTRL+H) substitua o prefixo da mesa "jos_" (
    <i>usado no
        arquivo SQL
    </i>
    ) com o que coincide com seu banco de dados. Você pode verificar
    o vídeo tutorial detalhado de <a
        href="/help/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">como alterar o prefixo do banco de dados no arquivo SQL.</a>
</p>

<h6>Agora você pode importar o arquivo SQL para o seu banco de dados. <br>
    Para importar os dados de amostra ao seu banco de dados, por favor, realize essas
    simples etapas: (verifique os slides abaixo)</h6>

<ol class="index-list">
    <li><p>Selecione seu banco de dados da lista de banco de dados na coluna da esquerda na
            ferramenta phpMyAdmin</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Clique no botão "Importar" (em Inglês, &quot;Import&quot;) no menu de navegação
            superior</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Clique em &quot;Escolher arquivo&quot; (em Inglês, "Choose file") e procure o
            arquivo dump.sql no diretório do pacote de templates &quot;fontes (em Inglês,
            &quot;sources).</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Clique no botão &quot;Ir&quot; (em Inglês, "Go") para começar a importar os
            dados de amostra</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-info">Você pode ver o tutorial detalhado de <a
        href="/help/phpmyadmin-how-to-import-sample-data-dump-file.html"
        target="_blank">como importar o arquivo SQL usando a ferramenta phpMyAdmin</a>
</p>