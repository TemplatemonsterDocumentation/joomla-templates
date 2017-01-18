<h3>Ajout de Vidéo de fond</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>Pour afficher la vidéo d'arrière-plan dans un modèle en utilise plug-in jQuery <a
        href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>.
Vérifiez si le plugin est activé dans un modèle. Allez dans "Gestionnaire de modèles" -> "Modèles", ensuite allez sur le thème que vous utilisez (Theme**** Details and Files) et ouvrez le fichier "index.php". Vérifiez si le plugin est initialisé, comme surla capture d'écran ci-dessous. Vérifiez également si plugin est disponible dans le dossier "js".  Si le plugin ne serait pas là, vous pouvez le télécharger à partir du lien ci-dessus  et l'uploader dans le dossier correspondant, et faire son initialisation dans le fichier "index.php":</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p>Pour mettre en place une vidéo de fond, allez dans "Gestionnaire de modèles" -> "Modèles"  cliquez sur le template que vous utilisez (Theme**** Details and Files). Créez un fichier "&lt;name&gt;.php" dans un dossier "html -> mod_custom" avec le contenu suivant::</p>

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

<p>ou [nom_du_fichier] - le nom du fichier vidéo, sans l'extension de fichier:</p>

<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>Ensuite, vous devez préparer les formats vidéo suivants: mp4, ogv, webm et une affiche de vidéo en formats png, jpg et gif. Le nom du fichier doit être le même pour tous les fichiers et doit correspondre à celui créé plus tôt [file_name]. Tous les fichiers doivent être chargés dans le dossier media\video\ dans le répertoire racine Joomla.</p>

<p>Sur l'étape suivante, vous devez créer un module qui affiche la vidéo. Ajouter un module HTML personnalisé avec le contenu suivant:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>Dans l'onglet "Avancé" et "Layout Alternative", choisissez votre fichier de modèle précédemment créé [file_name].</p>

<p>Après avoir effectué toutes les étapes, vous verrez le module avec le videо de fond.</p>
