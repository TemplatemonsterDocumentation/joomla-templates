<h3>Einfügen des Hintergrund-Videos (Background video)</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>Um das Hintergrund-Video in der Vorlage zu realisieren, wird das jQuery-Plugin <a
        href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>  verwendet.
 Prüfen Sie, das Plugin aktiviert ist. Um dies zu überpfüfen, öffnen Sie das "Template manager -> Templates" Tab, dann öffnen Sie das Thema, dass Sie benutzen (ThemeXXXX Details and Files),und öffnen Sie die Datei "index.php", prüfen Sie die Aktivierung des Plugins. Sie muss genauso wie auf dem Screenshot sein. Prüfen Sie auch, ob dieser Plugin im Ordner "js" ist. Wenn der Plugin fehlt, laden Sie ihn herunter, indem Sie dem Link oben folgen und platzieren Sie ihn in dem entsprechen Ordner, und schalten Sie ihn in "index.php" ein:</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p>Um das Hintergrund-Video auf eine Seite einzufügen, sollen Sie "Template Manager -> Templates" öffnen, klicken Sie auf die verwendete Vorlage (ThemeXXXX Details and Files). Im "html -> mod_custom" Verzeichnis ertsellen Sie eine "<name>.php" Datei mit dem folgenden Inhalt :</p>

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

<p>wo [file_name] der Name Ihrer Videodatei ist, ohne Dateierweiterung:</p>

<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>Danach sollten Sie die folgenden Videoformaten vorbereiten: mp4, ogv, webm und ein video poster in png, jpg und gif Formaten. Der Name für alle Dateien muss gleich sein und dem [file_name] entsprechen. Alle vorbereiteten Dateien müssen im Verzeichnis media\video\ des Joomla Stammverzeichnis platziert werden.</p>

<p>Jetzt sollen Sie ein Modul erstellen, damit das Video dargestellt werden kann. Fügen Sie einen custom HTML Modul hinzu mit dem folgenden Inhalt:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>Im "Advanced" Tab und "Alternative Layout" Dropdown wählen Sie Ihre vorher erstellte Datei [file_name].</p>

<p>Nachdem wir diese Aktion durchgeführt haben, wird auf der entsprechenden Seite das Modul mit dem Hintergrund-Video dargestellt.</p>
