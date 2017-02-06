<h3>L'aggiunta di un video di sfondo</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>Per visualizzare il video di sfondo in un modello utilizzando jQuery plugin <a
        href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>.
    Controllare se il plugin è incluso nel modello. Per fare questo, andare alla sezione "Template Manager"
    -> "Modelli", poi andare al modello utilizzato (Theme**** Details and Files) e
    aprire il file "index.php". Controllare il collegamento a spina, dovrebbe essere così,
    come mostrato nello screenshot qui sotto. Inoltre, controllare il plugin della cartella "js". Se
    plugin non è disponibile, scaricare dal link qui sopra e il luogo in un apposita
    cartella è caricata ed ha il collegamento, il file è "index.php":</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p>Per inserire un video di sfondo per una pagina, si deve andare al "Template Manager" ->
    "Modelli" e passare al modello utilizzato (Theme**** Details and Files). Dopodichè,
    è necessario creare un file "&lt;nome&gt;.php" nella cartella "html -> mod_custom" con questi contenuti:
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

<p>dove [nome_file] - è il nome del file video senza estensione:</p>

<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>Successivamente, è necessario preparare un video in seguenti formati MP4, WebM ogv, e l'immagine e video
    i formati PNG, JPG e GIF. Nome di tutti i file devono essere trattati allo stesso modo e in conformità
    indicato in precedenza [nome_file]. Tutti i file preparati devono essere collocati in una cartella
    media\video\ nella cartella principale del vostro sito Joomla.</p>

<p>Quindi è necessario creare un modulo per la visualizzazione di video. Creare Modulo codice HTML
    (custom HTML) con i seguenti contenuti:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>Nella scheda "Impostazioni avanzate", (Advanced) nella lista a discesa
    "Layout Alternativo" (Alternative Layout) scegliere il layout creato in precedenza [nome
    file].</p>

<p>Dopo aver apportato le modifiche, il modulo con lo sfondo appare sulla pagina seguente
    video.</p>
