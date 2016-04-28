<h3>Setting Background video</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>Background video can be added to the template with the help of jQuery-plugin <a
        href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>.
Check if the plugin is enabled. In order to check this, navigate to "Template manager -> Templates" tab, then go to the theme you use (ThemeXXXX Details and Files), open "index.php" file and check if the plugin is initialized, as it’s shown on the screenshot below. Please, also check if the plugin is available in "js" folder. In case if the plugin is not there, you can download it using the link above and upload it to the required folder. Also do not forget to add the script to the "index.php" file:</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p>In order to set a background video, navigate to "Template Manager -> Templates", click on the template you use (ThemeXXXX Details and Files). In an "html -> mod_custom" directory create a "<name>.php" file with the following content:</p>

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

<p>where [file_name] is the name of the video file, without adding file extension:</p>

<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>Then, you should prepare the following video formats: mp4, ogv, webm and a video poster in png, jpg and gif formats. The file name should be the same for all the files and should correspond to the earlier created [file_name]. All the files should be uploaded to media\video\ folder in Joomla root directory.</p>

<p>On the next step you need to create a module that displays the video. Add a custom HTML module with the following content:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>Both in "Advanced" tab and "Alternative Layout" drop-down, choose your earlier created file template [file_name].</p>

<p>After you perform all the steps, you will see the module with the background videо.</p>
