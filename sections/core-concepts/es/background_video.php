<h3>Configuración del Video de Fondo</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>Se pueden agregar videos de fondo a la plantilla con la ayuda del Plugin jQuery <a
        href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>.
Compruebalo si el plugin está activado. Para poder comprobarlo vaya a la pestaña  "Administrador de plantillas --> Plantillas" ("Template manager -> Templates"),  luego vaya al tema que utiliza (ThemeXXXX Details and Files), abre el archivo “index.php” y comprueba si el plugin está inicializado, al igual que en la captura. También compruebe si el plugin está disponible en el archivo “js”. En caso de que el plugin no se encuentre allí, puede descargarlo utilizando el enlace de arriba y subirlo a la carpeta correspondiente. No olvide de agregar el script al archivo “index.php”:</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p>Para colocar un video de fondo, vaya a "Administrador de Plantillas --> Plantillas" ("Template Manager -> Templates"), haga clic en la plantilla que utilizará (ThemeXXXX Details and Files). En un directorio de "html -> mod_custom" hay que crear un archivo "<name>.php" con el siguiente contenido:</p>

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

<p>donde [file_name] es el nombre del archivo de video, sin añadir la extensión del archivo:</p>

<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>También debería preparar los siguientes formatos de video: mp4, ogv, webm y formatos de imagen de previsualización en png, jpg y gif. El nombre de archivo deberá ser el mismo para todos los archivos y debe corresponder con el anteriormente creado [file_name]. Todos los archivos deberán ser subidos a la carpeta de media\video\ en el directorio raíz de Joomla.</p>

<p>En el siguiente paso necesitará crear un módulo que muestre el video. Añada un módulo HTML personalizado con el siguiente contenido:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>En la pestaña de “Avanzado” y en el menú desplegable de “Diseño Alternativo” hay que elegir el archivo de su plantilla [file_name] creada anteriormente.</p>

<p>Después de que haya realizado todos los pasos, verá el módulo con el video de fondo.</p>
