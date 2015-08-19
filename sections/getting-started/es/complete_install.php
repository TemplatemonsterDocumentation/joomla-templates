<h3>Instalación Completa</h3>

<p>Usted puede usar el método de instalación completa si desea configurar su sitio web de Joomla desde cero. Creemos que
    Usted ha completado todos los pasos de preparación tiene todo lo necesario.
</p>

<!-- Creating database -->

<h3>Creación de Base de datos</h3>

<p>No tengo mi página web de Joomla y quiero instalarlo desde cero.</p>

<p>Con la ayuda de este método Usted obtendrá el motor de CMS Joomla, una plantilla Joomla, su contenido de la muestra,
    y todas las extensiones necesarias instaladas.</p>

<p>Con la ayuda de la herramienta phpMyAdmin Usted podrá crear una nueva base de datos en 3 pasos: (revise las
    diapositivas ofrecidas)</p>

<ol class="index-list">
    <li>Haga clic en el botón Database/Base de datos en el menú superior de navegación para abrir la lista de bases de
        datos.
    </li>

    <li>Escriba el nombre de su base de datos en el campo "Create new database/Crear nueva base de datos".</li>

    <li>Haga clic en el botón Create/Crear a la derecha.</li>
</ol>

<p>Ahora se puede encontrar su base de datos en la lsita de bases de datos. Haga clic en su nombre para obtener acceso a
    la base de datos.</p>

<div class="owl-carousel">
    <div class="item">
        <p>Haga clic en el botón Database/Base de datos en el menú superior de navegación para abrir la lista de
            bases de datos.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>Escriba el nombre de su base de datos en el campo </p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>"Create new database/Crear nueva base de
            datos".</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>Haga clic en el botón Create/Crear a la derecha.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>


<p>También Usted puede consultar nuestro tutorial
    <a href="/help/es/how-to-create-a-database.html" target="_blank">sobre la creación de una base de datos.</a>
</p>

<p class="alert alert-info">Si Usted tiene algún problema con la creación de una base de datos, por favor póngase en
    contacto con su proveedor de hosting para obtener ayuda y asistencia. </p>


<!-- Uploading files -->

<h3>Subir y descomprimir</h3>

<p>Para empezar a trabajar con Joomla Usted necesita subir los ficheros a su servidor de hosting. Se puede
    hacerlo utilizando el administrador de ficheros de hosting o una aplicación FTP de terceros.</p>

<ol class="index-list">
    <li>Abra el directorio del paquete de la plantilla y encuentre el directorio 'joomla'.</li>

    <li>Seleccione los ficheros 'unzip.php' y 'fullpackage.zip' y súbalos a su servidor (
        <a href="/help/es/how-upload-files-server-2.html" target="_blank">¿Cómo se puede subir ficheros al servidor?</a>
        )
    </li>
    <li>Escriba la ruta de acceso al fichero 'unzip.php' en el servidor (
        <i class="muted">http://su_dominio/unzip.php</i>
        ) en su navegador web.
    </li>

    <li><p>Usted va a obtener la siguiente pantalla:</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>

    </li>
    <li>En 'Choose your zip file/Elegir fichero zip' seleccione el fichero subido fullpackage.zip.</li>

    <li>En el campo 'Unzip to/Descomprimir en' escriba el directorio para sus ficheros extraídos.</li>

    <li>Haga clic en el botón 'Unzip/Descomprimir'.</li>
</ol>

<p class="alert alert-info">Por favor, asegúrese de especificar los permisos correctos para el directorio de los
    ficheros extraídos. Los permisos deben ser CHMOD 755 o 777 dependiendo de la configuración del servidor.</p>


<!-- Joomla CMS installation -->


<h3>Instalación de CMS de Joomla</h3>

<p>Abra su navegador y escriba la ruta al directorio de Joomla en la barra de direcciones (
    <i>por ejemplo, http://su_dominio/joomla</i>
    ). Va a obtener la pantalla inicial de instalación de CMS de Joomla:
</p>


<h4> Configuración 
</h4>


<p> Por medio del botón "Select Language/Elegir idioma" elija el idioma de instalación de Joomla.</p>

<p>
    <span class="label">Por favor, tenga en cuenta: :</span>
    el cuadro "Select Language/Elegir idioma" le permite elegir el idioma del proceso de instalación de Joomla
    solamente. No afectará el idioma del sitio web.
</p>

<p>Es necesario rellenar todos los campos en el área de "Main Configuration/Configuración principal". Los campos
    obligatorios están marcados con el símbolo *.</p>

<p>Rellene los campos "Admin Email", "Admin Username/Nombre de usuario admin" y "Admin Password/Constraseña de admin" en
    la columna derecha para crear un nuevo usuario del sitio web Joomla con derechos administrativos.</p>

<p class="alert alert-danger">Los campos "Admin Email", "Admin Username/Nombre de usuario admin" y "Admin
    Password/Constraseña de admin" están obligados para obtener acceso al panel de control de su sitio web de
    Joomla.</p>

<p>Ahora haga clic en el botón en la esquina superior derecha para seguir.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>


<h4> Base de datos
</h4>


<p>En la segunda etapa de la instalación de Joomla Usted tiene que introducir sus datos de la base de datos. Si no está
    seguro, por favor póngase en contacto con su proveedor de hosting para obtener los datos correctos.</p>

<p>Ya que Usted está instalando Joomla desde cero, sólo necesita especificar "Host Name/Nombre de host",
    "Username/Nombre de usuario", "Database Name/Nombre de base de datos" y "Password/Contraseña". Usted puede dejar
    otras opciones sin cambios. Aunque puede haber algunas diferencias dependiendo de su proveedor de hosting.</p>

<p>Si Usted ha terminado, haga clic en el botón Instalar en la esquina superior derecha. </p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>


<h4> Información general
</h4>


<p>Usted está casi terminado la instalación de CMS de Joomla. En el paso general deberá seleccionar si desea instalar
    los datos de muestra de Joomla.</p>

<p class="alert alert-warning">Nota: Usted necesita los datos de muestra si desea que su sitio web de Joomla aparezca
    como
    en la vista previa de la plantilla con todas imágenes, textos de muestra y los módulos configurados. Para que su
    plantilla aparezca como en la página de vista previa, seleccione el paquete de datos de muestra "sample_theme###" -
    ### es el número de su tema.</p>

<p>Seleccione el paquete de datos de muestra que desea instalar o seleccione "None/Ninguno" si desea configurar una
    página web de Joomla sin contenido.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>


<p>Aquí se puede comprobar si los detalles del acceso de la configuración de base de datos y del panel de administración
    son válidos y enviarlos a su dirección de correo electrónico si es necesario.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>


<p>También Usted puede comprobar los parámetros de instalación y verificar si su servidor de hosting cumple los
    requisitos de Joomla. Si Usted recibe cualquier cuadro de notificación rojo en la sección "Recommended
    settings/Ajustes recomendados", por favor póngase en contacto con su proveedor de hosting para obtener
    asistencia.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>


<p>Si Usted ha terminado, haga clic en el botón Instalar en la esquina superior derecha.</p>

<p>Usted ha instalado CMS de Joomla con éxito.</p>

<h4> Instalación completa
</h4>


<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>


<p class="alert alert-danger">Por razones de seguridad, por favor elimine el directorio de "Installation" desde la raíz
    de CMS de Joomla.</p>

<p class="alert alert-info">
    <span class="label label-success">Consejo:</span>
    Usted puede consultar el tutorial
    <a href="/help/es/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">sobre la instalación del motor de
        Joomla 3.</a>
</p>

<p class="alert alert-warning">
    Tenga en cuenta: si Usted ha terminado la sección "Complete Installation/Instalación completa" Usted puede faltar a
    las secciones "Template Installation/Instalación de plantilla", "Sample data installation/Instalación de datos de
    muestra" y "Extensions Installation/Instalación de extensiones" ya que Usted tiene todos estos elementos ya
    instalados. </p>


<p>Ahora ya está listo para la configuración de su sitio web basado en CMS de Joomla. Haga clic en el botón "Site/Sitio"
    para ver su sitio web o "Administrator/Administrador" para ver backend de Joomla. </p>
