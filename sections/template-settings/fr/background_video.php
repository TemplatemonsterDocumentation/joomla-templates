<h3>Définir une Vidéo de fond (Vidéo de fond)</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>Il est possible d'ajouter une vidéo de fond au template à l'aide du plugin jQuery <a
        href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>.
    Vérifiez que le plugin est activé. Pour le vérifier, allez dans "Template manager ->
    Templates", puis allez sur le thème que vous utilisez (ThemeXXXX Details and Files),
    ouvrez le fichier "index.php" file et vérifiez que le plugin est initialisé, comme
    sur l'Img. 29. Vérifiez également que le plugin est disponible dans le dossier "js".
    Si le plugin ne serait pas là, vous pouvez le télécharger à partir du lien ci-dessus
    et l'uploader dans le dossier correspondant. N'ouvliez pas également d'ajouter le
    script dans le fichier "index.php".</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>

<p>Pour mettre en place une vidéo de fond, allez dans "Template Manager -> Templates",
    cliquez sur le template que vous utilisez (ThemeXXXX Details and Files). Dans le
    dossier "html -> mod_custom" créez un fichier "
    class="mod_table".php" avec le contenu suivant :
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

<p>avec [nom_du_fichier] - le nom du fichier vidéo, sans ajouter l'extension de
    fichier.</p>
<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>Vous devez également préparer les formats vidéo suivants : mp4, ogv, webm et l'image
    de présentation de la vidéo aux formats png, jpg et gif. Le nom de fichier doit être
    le même pour tous les fichiers et correspondre à celui du fichier [nom_du_fichier]
    créé auparavant. Tous les fichiers doivent être uploadés dans le dossier racine
    Joomla media\video\

</p>


<p>À l'étape suivante, vous devez créer un module affichant la vidéo. Ajoutez un module
    HTML personnalisé avec le contenu suivant :</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>Dans l'onglet "Advanced" et dans le menu déroulant "Alternative Layout", choisissez
    votre fichier template [nom_du_fichier] créé auparavant.</p>

<p>Après avoir effectué toutes les étapes, vous verrez le module avec la vidéo de
    fond.</p>