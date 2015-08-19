<h3>Impostare un video di sottofondo (Background video)</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>E' possibile aggiungere un video di sottofondo al template grazie al plugin jQuery <a
        href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>.
    Controlla che il plugin sia abilitato. Per controllare, naviga su "Template manager
    -> Templates", poi vai sul tema che stai usando (ThemeXXXX Details and Files), apri
    il file "index.php" e controlla se il plugin è inizializzato, come illustrato nell'
    Controlla anche che il plugin sia disponibile nella cartella "js" folder.
    Nel caso in cui il plugin non fosse lì, è possibile scaricarlo cliccando sul link
    qui sopra per poi caricarlo nella cartella specificata. Non dimenticare anche di
    aggiungere lo script al file "index.php".</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p>Per impostare un video di sottofondo, naviga su "Template Manager -> Templates" e
    clicca sul template che stai usando (ThemeXXXX Details and Files). Nella directory
    "html -> mod_custom", crea un file "
    class="mod_table".php" con i seguenti contenuti:
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

<p>dove [nome_file] è il nome del file video, senza aggiungere l'estensione.</p>

<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>Dovresti anche preparare i seguenti formati video: mp4, ogv, webm e poster video nei
    formati png, jpg e gif. Il nome del file dovrebbe essere lo stesso per tutti i file
    e dovrebbe corrispondere a quello creato prima [nome_file]. Tutti i file vanno
    caricati sulla cartella media\video\ della directory root di Joomla

</p>


<p>Nella fase successiva si deve creare un modulo che mostri il video. Aggiungi un
    modulo HTML custom con i seguenti contenuti:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>Sia nella scheda "Advanced" che nella scheda "Alternative Layout", seleziona il
    template file creato prima, [nome_file].</p>

<p>Dopo aver completato tutte le fasi, vedrai il modulo con il video di sottofondo.</p>