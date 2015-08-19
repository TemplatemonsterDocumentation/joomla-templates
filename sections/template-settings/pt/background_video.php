<h3>Colocando vídeo no fundo (Background video)</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>
    O vídeo de fundo pode ser adicionado ao template com a ajuda do plugin do jQuery
    chamado <a href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>.
    Verifique se o plugin está habilitado. Para descobrir isso, navegue para "Template
    manage -> Templates", então vá para o tema que você usa (ThemeXXXX arquivos e
    detalhes), abra o arquivo "index.php" e verifique se o plugin está sendo executado,
    como na imagem 29. Verifique, também, se o plugin está na pasta "js". No caso do
    plugin não estar lá, você pode baixá-lo usando o link acima e subir o arquivo para a
    pasta mencionada. Não esqueça de inserir o script para execução dele no arquivo
    index.php.
</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p>Para definir o vídeo de fundo, navegue para "Template Manager -> Templates", clique
    no template que você usa (ThemeXXXX arquivos e detalhes). Na pasta "html ->
    mod_custom" crie um arquivo chamado "
    class="mod_table".php" com o seguinte conteúdo:
</p>

<code>&lt;?php <br>
    /** <br>
    * @package Joomla.Site <br>
    * @subpackage mod_custom <br>
    * <br>
    * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved. <br>
    * @license GNU General Public License version 2 or later; see LICENSE.txt <br>
    */ <br>
    <br>
    defined('_JEXEC') or die;
    ?&gt; <br>
    &lt;div class="mod-custom mod-custom__&lt;?php echo $moduleclass_sfx ?&gt;" id="module_&lt;?php echo $module-&gt;id;
    ?&gt;"&gt; <br>
    &lt;div class="video-container" data-vide-bg="&lt;?php echo JURI::base( true ).'/media/video/[file_name]'; ?&gt;"&gt;&lt;/div&gt;
    <br>
    &lt;div class="module-content"&gt; <br>
    &lt;div class="module-content-inner"&gt; <br>
    &lt;?php echo $module-&gt;content;?&gt; <br>
    &lt;/div&gt; <br>
    &lt;/div&gt; <br>
    &lt;/div&gt;</code>

<p>onde [nome_do_arquivo] é o nome do arquivo de vídeo, sem a extensão do arquivo.</p>

<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>
    Você também deve preparar o vídeo nos seguintes formatos: mp4, ogv, webm e um poster
    do vídeo em png, jpg e gif. O nome do arquivo deve ser o mesmo em todos os formatos
    e corresponder ao que você inserir no lugar de [nome_do_arquivo]. Todos os arquivos
    devem ser enviados para a pasta media\video na raíz do Joomla.

</p>


<p>
    No próximo passo, você precisa criar um módulo que apresenta o vídeo. Inclua um
    módulo HTML customizado com o seguinte conteúdo:
</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>
    Em ambas as abas "Avançado" e no menu "Layout alternativo" escolha o arquivo de
    template [nome_do_arquivo] criado anteriormente.
</p>

<p>
    Depois de você realizar todos os passos, você verá o módulo com o vídeo de fundo.
</p>