<h3>Einfügen des Hintergrund-Videos (Background video)</h3>

<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>

<p>Um das Hintergrund-Video in der Vorlage zu realisieren, wird jQuery-Plugin <a
        href="http://vodkabears.github.io/vide/" target="_blank">Vide</a> verwendet.
    Prüfen Sie, der Plugin in der Vorlage aktiviert wurde. Dazu gehen Sie zu
    "Vorlagenmanager -> Vorlagen", dann gehen Sie zu verwendeter Vorlage (Theme****
    Details and Files) und öffnen Sie die Datei "index.php", prüfen Sie die Aktivierung
    des Plugins. Sie muss genauso wie auf dem sein. Prüfen Sie auch, ob dieser
    Plugin im Ordner "js" ist. Wenn der Plugin fehlt, laden Sie ihn herunter, indem Sie
    dem Link oben folgen und platzieren Sie ihn in dem entsprechen Ordner, und schalten
    Sie ihn in "index.php" ein.</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>

<p>Um das Hintergrund-Video in die Seite einzufügen, sollen Sie "Vorlagenmanager ->
    Vorlagen" öffnen, dann zu verwendeter Vorlage (Theme**** Details and Files) gehen.
    Dann sollen Sie noch die Datei "
    &lt;name&gt;.php" im Verzeichnis "html -> mod_custom" mit solchem Inhalt erstellen:
</p>

<code><code>&lt;?php
        /**
        * @package Joomla.Site
        * @subpackage mod_custom
        *
        * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
        * @license GNU General Public License version 2 or later; see LICENSE.txt
        */

        defined('_JEXEC') or die;
        ?&gt;
        &lt;div class="mod-custom mod-custom__&lt;?php echo $moduleclass_sfx ?&gt;" id="module_&lt;?php echo $module-&gt;id;
        ?&gt;"&gt;
        &lt;div class="video-container" data-vide-bg="&lt;?php echo JURI::base( true ).'/media/video/[file_name]'; ?&gt;"&gt;&lt;/div&gt;
        &lt;div class="module-content"&gt;
        &lt;div class="module-content-inner"&gt;
        &lt;?php echo $module-&gt;content;?&gt;
        &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;</code></code>

<p>wo [Datei_Name] ist Dateiname des Videos, ohne Dateierweiterung.</p>
<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>
<p>Sie sollen auch das Video in Formaten mp4, ogv, webm und das Poster für das Video in
    Formaten png, jpg und gif vorbereiten. Der Name für alle Dateien muss gleich sein
    und dem [Datei_Namen] entsprechen. Alle vorbereiteten Dateien müssen im Verzeichnis
    media\video\ im Stammverzeichnis, das Joomla installiert hat, platziert werden.</p>


<p>Jetzt sollen Sie das Modul erstellen, damit das Video dargestellt werden kann.
    Erstellen wir das Modul HTML-Code (custom HTML) mit dem Inhalt wie:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>Im Tab "Zusätzliche Parameter" ("Advanced") in der DropDownListe "Alternatives
    Layout" ("Alternative Layout") wählen wir das Layout [Dateinamen], das wir früher
    erstellt haben.</p>

<p>Nachdem wir diese Aktion durchgeführt haben, wird auf der entsprechenden Seite das
    Modul mit dem Hintergrund-Video dargestellt.</p>