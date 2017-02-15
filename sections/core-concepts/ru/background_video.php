<h3>Вставка фонового видео (Background video)</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p align="justify">Для добавления фонового видео в шаблоне используется jQuery-плагин <a
        href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>.
    Заранее проверьте, подключен ли плагин к данному шаблону. Для этого перейдите в "Менеджер шаблонов    > Шаблоны", затем перейдите в используемый шаблон (Theme**** Details and Files) и
    откройте файл "index.php", проверьте подключение плагина, оно должно быть таким же,
    как показано в данном окне. </p>
<p align="justify">Также проверьте наличие самого плагина в папке "js". Если
    плагин отсутствует, скачайте его по ссылке выше и разместите в соответствующей
    папке, а также подключите его в "index.php".</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p align="justify">Чтобы вставить фоновое видео на страницу, необходимо перейти в "Менеджер шаблонов ->
    Шаблоны", затем перейти в используемый шаблон (Theme**** Details and Files). Затем
    необходимо создать файл "
    &lt;имя&gt;.php" в директории "html -> mod_custom" с таким содержимым:
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

<p>где [имя_файла] - имя файла видео, без указания расширения.</p>

<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p align="justify">Также необходимо подготовить видео в форматах mp4, ogv, webm и постер к видео в
    форматах png, jpg и gif. Имя у всех файлов должно быть одинаковым и соответствовать
    указанному ранее [имя_файла]. Все подготовленные файлы нужно разместить в директории
    media\video\ в корневой директории установленной Joomla.</p>

<p align="justify">Далее необходимо создать модуль для отображения видео. Создаем модуль HTML-код
    (custom HTML) c содержимым вида:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p align="justify">Во вкладке "Дополнительные параметры" ("Advanced") в выпадающем списке
    "Альтернативный макет" ("Alternative Layout") выбираем созданный ранее макет [имя
    файла].</p>

<p>После проделанных операций на соответствующей странице появится модуль с фоновым
    видео.</p>