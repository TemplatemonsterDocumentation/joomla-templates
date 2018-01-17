<!-- ES -->

<p class="alert alert-info custom">Si no quieres pasar el tiempo instalando la plantilla, no dudes en <span class="label label-warning opener" onclick="showChat()">solicitar</span> el servicio de instalación utilizando nuestro chat en vivo.</p>

<h3>Instalación Completa</h3>

<p>Si usted no tiene un sitio web de Joomla y desea instalarlo desde cero, esta guía es para usted. </p>

<p>Este método le permite instalar el motor de Joomla CMS, plantilla de Joomla, datos de muestra y todas las extensiones necesarias.</p>

<!-- Creating database -->

<h3>Creación de Base de Datos</h3>

<p>Una vez que haya terminado de enviar los archivos en el Servidor de alojamiento, puede crear una nueva base de datos para su sitio web de Joomla. Para ello, puede utilizar la herramienta de gestión de base de datos de su Panel de control de hosting
 (<i>en general, es PhpMyAdmin</i>).
</p>

<h6>Con la herramienta de phpMyAdmin puede crear una nueva base de datos en 3 sencillos pasos (ver imágenes abajo):</h6>

<ol class="index-list">
    <li>Haga clic en el botón de "Database" (Base de datos)  en el menú superior de navegación para abrir la lista de bases de datos.</li>

    <li>Escriba el nombre de su base de datos en el campo "Create new database" (Crear nueva base de datos). </li>

    <li>Haga clic en el botón "Create" (Crear) a la derecha.</li>
</ol>

<p>Ahora se puede encontrar su base de datos en la lsita de bases de datos. Haga clic en su nombre para obtener acceso a la base de datos.</p>

<div class="owl-carousel">
    <div class="item">
        <p>1. Abra la ficha "Database" (Base de datos), para acceder a la lista de bases de datos:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Introduce el nombre de la base de datos:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Pulse el botón "Crear":</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. Se puede ver la base de datos en la lista. Haga clic en su nombre para el acceso:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">Se puede ver un video tutorial detallado:
    <a href="/help/how-to-create-a-database.html" target="_blank">Como crear una Base de Datos</a>.
</p>

<p>Si tiene problemas para crear una base de datos, póngase en contacto con su Proveedor de alojamiento para obtener ayuda.</p>

<!-- Uploading files -->

<h3>Descarga y Descompresión</h3>

<p>Para empezar a trabajar con Joomla, debe enviar los archivos a su servidor de Alojamiento. Esto se hace mediante el uso de los archivos de su File Manager en su Panel de Hosting o con la ayuda de su FTP.</p>

<ol class="index-list">
    <li>Abra el directorio del paquete de la plantilla y encuentre el directorio 'Joomla'.</li>

    <li>Seleccione los ficheros 'unzip.php' y 'fullpackage.zip' y súbalos a su servidor (<a href="/help/how-upload-files-server-2.html" target="_blank">¿Cómo subir archivos al servidor?</a>).
    </li>
    <li>Introduzca la ruta de acceso al fichero 'unzip.php' en el servidor (<i class="muted">http://your_domain_name/unzip.php</i>) en la barra de direcciones del navegador.  <abbr
            title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari, etc."></abbr>.
    </li>

    <li>
        <p>Usted obtendrá la siguiente pantalla::</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>
    </li>
    <li>En el campo 'Choose your zip file' (Elegir fichero zip) seleccione el fichero subido fullpackage.zip. </li>

    <li>En el campo 'Unzip to' (Descomprimir en) escriba el directorio para sus ficheros extraídos. </li>

    <li>Haga clic en el botón 'Unzip' (Descomprimir).</li>
</ol>

<p class="alert alert-info">Por favor, asegúrese de especificar los permisos correctos para el directorio de los ficheros extraídos. Los permisos deben ser CHMOD 755 o 777 dependiendo de la configuración del servidor.</p>


<!-- Joomla CMS installation -->


<h3>Instalación de CMS de Joomla</h3>

<h6>Asegúrese de haber completado todas las etapas de preparación y tiene todo el software necesario.</h6>

<p>Abra su navegador y escriba la ruta al directorio de Joomla en la barra de direcciones (<i>por ejemplo, http://your_domain_name/joomla</i>). Va a obtener la pantalla inicial de instalación de CMS de Joomla: :
</p>


<h4>Configuración de la web</h4>

<p>Por medio del botón "Select Language" (Elija idioma) elija el idioma de instalación de Joomla.</p>

<p>
    <span class="label">Atención:</span>
     el cuadro "Select Language" (Elija idioma) le permite elegir el idioma del proceso de instalación de Joomla solamente. No afectará el idioma del sitio web.</p>

<p>Es necesario rellenar todos los campos en el área de "Main Configuration" (Configuración principal). Los campos obligatorios están marcados con el símbolo (*).</p>

<p>Rellene los campos "Admin Email", "Admin Username" (Nombre de usuario admin) y "Admin Password" (Constraseña de admin) en la columna derecha para crear un nuevo usuario del sitio web Joomla con derechos administrativos.</p>

<p class="alert alert-danger">”Admin Email”(correo electónico e-mail del administrador), “Admin Username”(Nombre de usuario del administrador) и" Admin Password "(Contraseña de administrador) se requieren para acceder al panel de administración de Joomla. Protegerlos. </p>

<p>Una vez que haya terminado, haga clic en el botón 
    <strong>Next (Siguiente)</strong> arriba a la derecha:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>Configurtación de la Base de Datos</h4>


<p> En la segunda etapa de la instalación de Joomla tendrá que introducir los datos de su Base de datos. Si no está seguro, póngase en contacto con su propietario de esta información.</p>

<p>Dado que va a instalar Joomla desde cero, basta con introducir "Host Name" (Nombre del Host) "Username" (Nombre del usuario), "Database Name" (Nombre de la base de datos) y "Password" (Contraseña). Puede dejar las otras opciones por defecto, pero puede haber diferencias en función con su Proveedor de alojamiento. </p>

<p>Cuando haya terminado, haga clic en el botón 
    <strong>Install</strong>:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>

<h4>Visión de conjunto</h4>

<p>Instalación de Joomla es casi completada. En el paso "Información general" tiene que elegir si desea instalar los datos de prueba de Joomla.</p>

<p class="alert alert-warning">Atención: Se requieren los datos de prueba si desea que su sitio web de Joomla aparezca como la plantilla de demostración: con todas las imágenes, textos y módulos configurados. Para ello, seleccione el paquete de datos de prueba llamado "sample_theme###", donde ### es el número del tema.</p>

<p>Por favor, seleccione datos de ejemplo que desea instalar o elija "None" (Ninguno), si no desea instalar datos de muestra para su sitio web de Joomla:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>

<p>Usted puede comprobar a continuación si los datos de acceso a la Base de Datos de configuración y el panel de administración son válidos y los enviará a su dirección de correo electrónico si es necesario:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>

<p>También puede comprobar la configuración de su sistema y ver si su servidor de alojamiento cumple con los requisitos necesarios de Joomla. Si ve cajas de notificación rojas en la sección de "Recommended settings" (Configuración recomendada), por favor, póngase en contacto con su proveedor de alojamiento para obtener más ayuda:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>

<p> Cuando haya terminado, haga clic en el botón
    <strong>Install</strong>
    en la esquina superior derecha para continuar.
</p>

<h4>Instalación completa</h4>


<p> ¡Enhorabuena! Ha instalado Joomla:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>

<p class="alert alert-danger"> Por razones de seguridad, elimine la carpeta "Installation" situada en raíz de Joomla.</p>

<p class="alert alert-info">Truco:
    Usted puede ver el video tutorial: <a href="/help/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">Cómo instalar el motor de Joomla 3</a>
</p>

<p class="alert alert-warning">Tenga en cuenta: Si ha completado toda la sección de instalación, puede omitir las secciones "Template Installation" (Instalación de la plantilla), "Sample Data Installation" (Instalación de datos de prueba) y "Extensions Installation" (Extensiones de Instalación) puesto que ya ha instalado estos elementos.</p>


<p>Ahora puede configurar su sitio web basado en Joomla. Haga clic en el botón “<b>Site</b>” para ver su sitio web o
 “<b>Administrator</b>", para acceder a panel de administración de Joomla.
</p>
