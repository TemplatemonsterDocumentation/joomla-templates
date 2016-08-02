<h3>Добавление фонового видео</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>Для отображения фонового видео в шаблоне используется jQuery-плагин <a
        href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>.
    Проверьте, включен ли плагин в шаблоне. Для этого перейдите на вкладку "Менеджер шаблонов"
    -> "Шаблоны", затем перейдите в используемый шаблон (Theme**** Details and Files) и
    откройте файл "index.php". Проверьте подключение плагина, оно должно быть таким,
    как показано на скриншоте ниже. Более того, проверьте наличие самого плагина в папке "js". Если
    плагин отсутствует, скачайте его по ссылке выше и разместите в соответствующей
    папке, а также подключите его в файле "index.php":</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p>Для того чтобы вставить фоновое видео на страницу, необходимо перейти на вкладку "Менеджер шаблонов" ->
    "Шаблоны" и перейти в используемый шаблон (Theme**** Details and Files). Затем,
    необходимо создать файл "&lt;имя&gt;.php" в папке "html -> mod_custom" с таким содержимым:
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

<p>где [имя_файла] - название видео-файла без указания расширения:</p>

<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>Далее необходимо подготовить видео в форматах mp4, ogv, webm и изображение для видео в
    форматах png, jpg и gif. Название всех файлов должно быть одинаковым и соответствовать
    указанному ранее [имя_файла]. Все подготовленные файлы нужно разместить в папке
    media\video\ в корневой папке вашего сайта Joomla.</p>

<p>Затем необходимо создать модуль для отображения видео. Создаем модуль HTML-код
    (custom HTML) со следующим содержимым:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>Во вкладке "Дополнительные параметры" (Advanced) в выпадающем списке
    "Альтернативный макет" (Alternative Layout) выбираем созданный ранее макет [имя
    файла].</p>

<p>После внесения изменений, на соответствующей странице появится модуль с фоновым
    видео.</p>
