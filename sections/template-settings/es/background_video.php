<h3>Configuración del Video de Fondo (Background video)</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>Se pueden agregar videos de fondo a la plantilla con la ayuda del plugin <a
        href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>
    de jQuery. Comprueba si el plugin está habilitado. Para poder comprobarlo ve a
    “Administrador de plantillas --> Plantillas”, luego ve al tema que utilizas
    (TemaXXXX Detalles y Archivos), abre el archivo “index.php” y comprueba si el plugin
    está inicializado, al igual que en la. También comprueba si el plugin está
    disponible en la carpeta “js”. En caso de que el plugin no se encuentre allí, puedes
    descargarlo utilizando el enlace de arriba y subirlo a la carpeta correspondiente.
    También no olvides agregar el script al archivo “index.php”. </p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p>Con el fin de colocar un video de fondo, ve a “Administrador de Plantillas -->
    Plantillas”, haz clic en la plantilla que utilizas (TemaXXXX Detalles y Archivos).
    En un directorio de “html --> mod_custom” crea un archivo “
    &lt;nombre&gt;.php” con el siguiente contenido:
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

<p>donde [nombre_de_archivo] – es el nombre del archivo de video, sin añadir la
    extensión del archivo. </p>

<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>También deberías preparar los siguientes formatos de video: mp4, ogv, webm y formatos
    de imagen de previsualización en png, jpg y gif. El nombre de archivo deberá ser el
    mismo para todos los archivos y debe corresponder con el anteriormente creado
    [nombre_de_archivo]. Todos los archivos deberán ser subidos a la carpeta de
    media\video\ en el directorio raíz de Joomla.
</p>


<p>En el siguiente paso necesitas crear un módulo que muestre el video. Añade un módulo
    HTML personalizado con el siguiente contenido:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>En la pestaña de “Avanzado” y en el menú desplegable de “Diseño Alternativo” elige tu
    plantilla de archivo [nombre_de_archivo] creada anteriormente. </p>

<p>Después de que realices todos los pasos, verás el módulo con el video de fondo. </p>