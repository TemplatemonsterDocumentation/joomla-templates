
<h2 class="item1">Introducción</h2>

<h5 align="justify"> Felicitaciones por la compra de una plantilla de Joomla! Esta documentación consta de varias partes y describe la instalación, creación y configuración de un proceso de sitio web de Joomla. </h5>
<h5 align="justify">Hicimos nuestro mejor esfuerzo para que esta información manual se presentara de una manera sencilla y directa. Para facilitar la consulta, el texto que el manual proporciona se ha reestructurado en diferentes capítulos, se puede ver en el menú del lado izquierdo. Puede navegar a cualquier parte de la documentación utilizando los enlaces de los encabezados del contenido activo.</h5>
<h5 align="justify">Le recomendamos empezar leyendo la documentación desde la primera sección. </h5>
<h3>¿Qué es Joomla CMS?</h3>

<p align="justify">Joomla CMS es una solución opensource para crear sitios web. Las amplias funcionalidades del sistema le permiten crear sitios web y poderosas aplicaciones en línea. El Joomla CMS no requeriría ninguna habilidad y entrenamiento adicionales para ser operado. Toda la teoría necesaria y la descripción de las habilidades básicas que necesitará se pueden encontrar en esta documentación.</p>
<p align="justify"> Con estas ventajas, la facilidad de uso y su escalabilidad incluyendo, el Joomla CMS se convirtió en el software de sitio web más popular disponible. <a href="http://www.joomla.org/about-joomla.html" target="_blank">Leer Más</a>
</p>

<h3>¿Qué es JoomlaTemplate?</h3>

<p align="justify">Joomla Template es un tema para su sitio web basado en la plataforma CMS de Joomla. En otras palabras, puede cambiar fácilmente su apariencia de sitio web Joomla mediante la instalación de una nueva plantilla. Todo el proceso de instalación se lleva a cabo por unos pocos fáciles de tratar pasos. Aunque simple, la plantilla de Joomla viene con todos los archivos de origen necesarios que puede editar. </p>
<div class="alert alert-info">
<div align="justify">A menudo hay muchos ajustes diferentes disponibles con la nueva plantilla, y
  porque se trata del software de código abierto, no siempre es lo mismo para cada desarrollador.
  Asegúrese de leer esta documentación disponible para la plantilla que
  está instalando para saber qué características están disponibles para usted.</div>
</div>

<h3>Estructura de ficheros</h3>

<h6>El paquete de la plantilla que ha descargado se compone de varias carpetas. Vamos a revisar el contenido de cada carpeta:</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Documentación</b></dt>
            <dd> contiene ficheros de documentación</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd> el fichero principal de documentación. Usted ahora está aquí :)
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Joomla</b></dt>
            <dd> contiene ficheros de tema de Joomla, paquete de instalación rápida y un fichero con la escritura de descompresión.
            </dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        theme###.zip
                    </dt>
                    <dd> el fichero principal del tema. Contiene todos los ficheros del tema. Hay que instalarlo por medio de <a href="#template-installation">Administrador de Joomla "Gestor de extensiones" </a>.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        fullpackage.zip
                    </dt>
                    <dd> contains
                        <a href="#complete_install">
                           Paquete de Instalación Completa de Joomla</a> con los ficheros del motor, del tema y los datos de muestra.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        unzip.php
                    </dt>
                    <dd> el fichero que es utilizado para la extracción de ficheros de fullpackage.zip si ha sido subido a su Servidor de hosting
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Screenshots</b>
            <dd> contiene capturas de pantalla de plantilla</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Sources</b>
            <dd> contiene ficheros de origen de plantilla</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd> ficheros de origen de Adobe Photoshop (.psd)
                    </dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        to_the_root_folder
                    </dt>
                    <dd> una carpeta con datos de muestra que son necesarios para hacer que el sitio web se vea como la página demo de la plantilla. El contenido de esta carpeta deben ser subidos a la carpeta raíz de Joomla
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        dump.sql
                    </dt>
                    <dd> archivo dump de la base de datos. Contiene datos de ejemplo el tema
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        pkg_bundle.zip
                    </dt>
                    <dd> contiene extensiones adicionales ofrecidas con el tema
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                fonts_info.txt
            </dt>
            <dd> contiene enlaces para descargar los tipos de letra personalizados de plantilla </dd>
        </dl>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                info.txt
            </dt>
            <dd> contiene instrucciones para extraer ficheros de origen</dd>
        </dl>
    </li>
</ul>
