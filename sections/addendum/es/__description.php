<h2 class="item8">Addendum</h2>

<p>Hicimos todo lo posible para que esta documentación sea lo más claro posible. Sin embargo, si usted tiene alguna dificultad con su plantilla Joomla o cualquier sugerencia sobre cómo mejorar la plantilla o la documentación, no dude en ponerse en contacto con nuestro equipo de soporte a través:</p>

<h4>Ayuda y Apoyo</h4>
<ul class="marked-list">
    <li><a href="http://chat.template-help.com/" target="_blank">Chat en Vivo</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit"
           target="_blank">Sistema de Tickets de ayuda</a></li>
</ul>
<h4>Documentación</h4>
<ul class="marked-list">
    <li><a href="http://docs.joomla.org/Beginners" target="_blank">Joomla! Guía de inicio rápido</a></li>
    <li><a href="http://docs.joomla.org/Category:FAQ" target="_blank">FAQ</a></li>
    <li><a href="http://docs.joomla.org/" target="_blank">Joomla! Documentación</a></li>
    <li><a href="/help/cms-blog-templates/joomla/joomla-tutorials/" target="_blank">Joomla!
            Tutoriales</a></li>
</ul>
<h4>Posibles problemas con Google Fonts</h4>

<p>Si las fuentes no se muestran correctamente después de la instalación, por favor, abra el archivo 
index.php (\templates\theme****\index.php) de plantilla para la edición. Para ello, vaya a la pestaña Extensions (Extensiones)-> Template Manager (Administrador de Plantillas)
 en su panel de administración de Joomla y seleccione su plantilla (Theme**** Details and Files).</p>

<p>Por favor, encuentre la línea siguiente:</p>
    <code>"$doc->addStyleSheet('//fonts.googleapis.com/css?family=[---your_web_font_name_here---]');"</code><p> y sustituyala por:</p>
<code>"$doc->addStyleSheet('//fonts.useso.com/css?family=[---your_web_font_name_here---]');".</code>
<h4>Joomla! Extensions</h4>

<p> En <a href="http://extensions.joomla.org/" target="_blank">extensions.joomla.org</a> se puede descargar más de 6 mil módulos, plugins y componentes para añadir diversas características de su sitio web Joomla.</p>
<h4>Joomla! Advertencia de uso de Cookies</h4>

<p> Siguiente condiciones adecuadas de cookies, debe agregar los módulos adecuados a su sitio web que mostrará un mensaje de advertencia sobre las cookies utilizadas en su sitio. Podemos recomendar los siguientes:</p>
<ul class="marked-list">
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/24689"
           target="_blank">Cookie Accept</a></li>
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/21043"
           target="_blank">EU e-Privacy Directive</a></li>
</ul>
<h4>Otros enlaces</h4>
<ul class="marked-list">
    <li><a href="http://www.joomla.org/technical-requirements.html" target="_blank">Requisitos técnicos</a></li>
    <li>
        <a href="http://opensourcematters.org/index.php?option=com_content&amp;view=article&amp;id=56&amp;Itemid=155"
           target="_blank">Licencia y Uso</a></li>
</ul>

<h4>Bloques de usuario</h4>

<p class="alert alert-warning">
En los módulos de este tipo, a menudo es necesario el uso de la propiedad loadmodule/loadposition, por ejemplo, "{loadmodule articles_single, About us}" en el contenido. Para evitar el error 404 en su sitio, asegúrese de que el nombre del módulo cargado coincide con el especificado para la carga. En este caso, el módulo "About us" debe ser publicado y no debe contener más de un espacio en el nombre del módulo. Usted puede aprender más acerca de la posición del módulo loadmodule/loadpositionen en <a href="https://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank">la página oficial</a>.
    </p>

<h4>Validación</h4>

<p class="alert alert-info">
    Los dos códigos, el formato HTML (Langage hypertexte) y estilos CSS utilizados en nuestros módulos son semánticamente correctos y válidos. Sin embargo, todavía pueden producirse algunos errores del W3C. Hacer el código válido el 100% W3C eliminar el uso de modernas tecnologías de sitio webcomme para que funcionen etiquetas HTML y CSS35. Hacer que el código válido 100% W3C elimina el uso de modernas tecnologías sitio webcomme funciona etiquetas HTML y CSS35. Nuestro objetivo es proporcionar una experiencia de usuario enriquecida con modelos de alta calidad y, a veces hay que romper algunas reglas. </p>
