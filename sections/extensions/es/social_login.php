<h3>Joomla Social Login</h3>

<p align="justify"><strong>Social Login</strong>, el componente de autenticación de redes sociales permite acceder al sitio web de Joomla a través de las redes sociales siguientes: Vkontakte, Twitter, Facebook, Odnoklassniki, LinkedIn, servicios Yandex, Google y Mail.ru.</p>
<h5>Configuración de Slogin para el servicio Slogin.info</h5>
<ol class="marked-list">
  <li>Después de la instalación, vaya a la configuración del componente: <strong>Componentes</strong> &gt;   <strong>Slogin</strong>.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-1.jpg" alt="">
  </figure>
</p>
  <li>Entonces necesita obtener una<strong> ID </strong>y<strong> contraseña</strong>, Donde obtenerlos?</li>
  <li>Vaya a la página: <a href="http://slogin.info">http://slogin.info</a></li>
  <li>Si aún no te has registrado, simplemente puedes acceder a través de la red social.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-2.jpg" alt="">
  </figure>
</p>
  <li>Haga clic en el botón <strong>Agregar sitio</strong>.</li>
  <li>En el <strong>Callback</strong> añada formato de referencia del sitio http://<strong>site.ru</strong>/index.php?option=com_slogin&amp;task=check&amp;plugin=service.    </li>
     <figure class="img-polaroid">
    <img src="img/joomline.png" alt="">
     </figure>
  <li><strong>Site.ru</strong> reemplazar en su sitio web o puede copiar el enlace desde el campo listo <strong>Callbsck URL</strong> en los ajustes Slogin.</li>
</br>
  Vaya a <strong>Componentes</strong> &gt; <strong>Slogin</strong>. Abra cualquier configuración de complemento.
<p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>Encuentre la opción <strong>Callback URI </strong> y copie la ruta de la URL.</p>
   <figure class="img-polaroid">
      <img src="img/sociallogin-4.jpg" alt="">
  </figure>
  <li>En el campo <strong>Contraseña</strong>, ingresa la palabra secreta.</li>
  <li>Haga clic en el botón <strong>Añadr</strong>.</li>
  <li>Después de agregar un sitio obtiene su usuario <strong>ID</strong> y <strong>contraseña</strong>, que se introduce en el paso anterior.</li>
  <li>Seleccione la red que desee y guarde la configuración.</li>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <li>Ahora es necesario publicar plugins y el módulo.</li>
  <li>Puede publicar plugins [Login Social Facebook auth, Acceso Social Google auth, Acceso Social Instagram auth, ect] a través de la ventana de configuración de componentes [<strong>Componentes</strong> &gt; <strong>Slogin</strong>].</li>
</ol>
<ol class="marked-list">
  <p>Para ello, abra cualquier configuración del plugin.
  </p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>Y cambie <strong>Slogin plugin</strong> a <strong>Activar</strong>.
  </p>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-6.jpg" alt="">
    </figure>
  </p>
  <p>Usted podrá ver el plugin <strong>Slogin </strong> estado actual en la columna <strong>Publicación</strong> .</p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-8.jpg" alt="">
    </figure>
  </p>
  <li>Publicar el módulo <strong>Slogin</strong> vaya a <strong>Extensiones</strong> &gt; <strong>Modulos</strong>. Encuentre el módulo <strong>Slogin</strong> usando el filtro Selecione el tipo de módulo<strong> Slolin </strong>en el &quot;<strong>-Seleccione Tipo-</strong>&quot; desplegable y verá el módulo <strong>Slogin</strong> en el listado.</li>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-7.jpg" alt="">
    </figure>
  </p>
<li>Presione el enlace del título del módulo para llevarlo a lainterfaz de configuración del módulo.</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-9.jpg" alt="">
    </figure>
  </p>
 <p>Vamos a aprender más sobre los ajustes del módulo <strong>Slogin</strong>:</p>
 <table width="980"  class="options-table">
  <tr>
        <td width="154" class="col-1"><strong>Mostrar Login Form</strong></td>
        <td width="29">-</td>
      <td width="781"> Si desea mostrar el <span class="col-1"> Formulario de Inicio de sesión.</span></td>
  </tr>
    <tr>
        <td class="col-1"><strong>Enlace a la Combinación de cuentas</strong></td>
        <td>-</td>
        <td><div align="justify">Mostrar el enlace a la Gestión de perfiles vinculados de las Redes sociales. El enlace se muestra en el módulo Slogin para un usuario autorizado.</div></td>
    </tr> <tr>
        <td class="col-1"><strong> Enlace al perfil </strong></td>
        <td>-</td>
        <td><div align="justify">Mostrar el enlace del perfil. El enlace se muestra en el módulo Login para un usuario autorizado.</div></td>
    </tr>
    <tr>
        <td class="col-1"><strong>Texto de Introducción</strong></td>
        <td>-</td>
        <td>Texto HTML que se mostrará antes de autorizar en las redes sociales.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong> Pretexto </strong></td>
        <td>-</td>
        <td>Este es el texto o HTML que se muestra encima del formulario de inicio de sesión.</td>
    </tr>
    <tr>
    <td class="col-1"><strong> Post-texto </strong></td>
        <td>-</td>
        <td>Este es el texto o HTML que se muestra debajo del formulario de inicio de sesión.</td>
    </tr>
          <td class="col-1"><strong>Página de Redirección de Inicio de sesión</strong></td>
        <td>-</td>
        <td><div align="justify">Seleccione la página a la que será redirigido el usuario después de un inicio de sesión correcto. Seleccione una de las páginas que aparecen en el menú desplegable. Elijiendo <strong>Por defecto</strong> volverá a la misma página.</div></td>
    </tr>    <td class="col-1"><strong> Página de redirección de sesión </strong></td>
        <td>-</td>
        <td><div align="justify">Seleccione la página a la que será redirigido el usuario después de cerrar la sesión. Seleccione una de las páginas que aparecen en el menú desplegable. Elijiendo <strong>Default</strong> volverá a la misma página.</div></td>
    </tr>
</table>
<p></p>
<li>Elija la posición del módulo. Seleccionemos la posición de <strong>megamenu</strong>.</li>
<li>
  <div align="justify">Publicar el módulo [Puede publicar el módulo a través del Administrador de módulos, presionando el botón rojo &quot;&quot; Cerca del título del modul.].</div>
</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-10.jpg" alt="">
    </figure>
  </p>
<li>Guardar Ajustes</li>
<li>
  <div align="justify">Vuelva a su sitio web y actualice la página. Ahora puede acceder a su sitio web de Joomla a través de numerosas redes sociales.</div>
</li>
</ol>
<div class="alert alert-warning">
<p>Encuentre más información en <a href="http://joomline.org/docs/slogin.html">joomline.org/docs</a> documentación oficial. </p></div>