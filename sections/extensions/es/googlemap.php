<h3>GoogleMap Plugin</h3>

<p><strong>GoogleMap</strong> es un plugin que permite mostrar el mapa de Google en su sitio web:</p>

<figure class="img-polaroid">
    <img src="img/googlemap-1.jpg" alt="">
</figure>

<p align="justify"><strong>Para personalizar el plugin, vaya a Extensiones &gt; Plugins. Esto le llevará al Administrador de plugins. Tipo &quot;Google&quot; en el campo de búsqueda y haga clic en el vínculo de título Sistema - Google Maps.</strong></p>
<figure class="img-polaroid">
    <img src="img/googlemap-3.jpg" alt="">
</figure>
<p>Esto le llevará a la página de configuración principal del plugin de Google Map. No dude en consultar más detalles en la <a
        href="http://tech.reumer.net/Google-Maps/Documentation-of-plugin-Googlemap/"
        target="_blank" rel="nofollow">página web oficial</a>.</p>
<p>
  <figure class="img-polaroid">
    <img src="img/googlemap-2.jpg" alt="">
  </figure>
</p>
<p>Revisemos las opciones de configuración:</p>
<table width="980"  class="options-table">
  <tr>
        <td width="154" class="col-1"><strong>Publicado</strong></td>
        <td width="29">-</td>
        <td width="781">Si no, todos los mapas desaparecerán.</td>
  </tr>
    <tr>
        <td class="col-1"><div align="justify"><strong>Debug?</strong></div></td>
        <td>-</td>
        <td><div align="justify">Si el mapa muestra debug mensajes [como comentarios] en la página html. Los comentarios se pueden mostrar mirando el origen de la página. </div></td>
    </tr> <tr>
        <td class="col-1"><strong>Plugin Code</strong></td>
        <td>-</td>
        <td>El código que se utiliza para ser colocado en el artículo entre {} para activar el complemento.Mosmap predeterminado.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Entre corchetes</strong></td>
        <td>-</td>
        <td><div align="justify">Qué paréntesis se deben utilizar alrededor del código del plugin: {} [predeterminado con [] para multiples kml], [] [con () para multiples kml] o ambos.</div></td>
    </tr>
   
    <tr>
        <td class="col-1"><strong>Versión de API de Google </strong></td>
        <td>-</td>
        <td><div align="justify">La versión de la API de Google que debe utilizarse [3.exp versión más reciente desarrollada, 3.número para la versión específica y 3 para la versión estable (predeterminada)].</div></td>
    </tr>
    <tr>
    <td class="col-1"><strong>Actualización Visual</strong></td>
        <td>-</td>
        <td>Mostrar nuevos mosaicos actualizados en Google Maps.</td>
    </tr>
        <td class="col-1"><strong>Registrado</strong></td>
        <td>-</td>
        <td> El visitante es reconocido como usuario de google y verá el mapa personalizado por google.</td>
    </tr><td class="col-1"><div align="justify"><strong>Mostrar Mapa?</strong></div></td>
        <td>-</td>
        <td>Mostrar el mapa o no mostrar el mapa. Se puede usar para mostrar sólo un enlace de lightbox o streetview o direcciones en una página.</td>
    </tr>    <td class="col-1"><strong>Imprimir boton</strong></td>
        <td>-</td>
        <td><div align="justify">Mostrar un botón o enlace para imprimir el mapa, vista de calle y su dirección [ninguno (predeterminado), icono, texto, ambos o su propio texto/imagen como enlace].</div></td>
    </tr>  <td height="26" class="col-1"><strong>Nombre de la clase CSS</strong></td>
      <td>-</td>
        <td>Nombre de clase CSS para el mapa que se usará para el estilo del mapa. Predeterminado.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>CSS para Mapa</strong></td>
        <td>-</td>
        <td><div align="justify">Definición CSS para el plugin para mostrar el mapa y su objeto relacionado correcto. Si se cambia la clase Map, también cambia la clase en el css.</div></td>
    </tr>
      <td class="col-1"><strong>Carga con mootools?</strong></td>
        <td>-</td>
        <td>Si se debe utilizar mootools [predeterminado] para cargar el mapa o un intervalo de tiempo.</td>
    </tr><td class="col-1"><strong>Intervalo de tiempo </strong></td>
        <td>-</td>
        <td><div align="justify">Para mostrar el mapa se realiza un intervalo de tiempo en ms para esperar a que la página se cargue correctamente [predeterminado 500ms]. Especially for IE this can prevent a fatal error.</div></td>
    </tr><td class="col-1"><strong>Clave de API de Google Maps</strong></td>
        <td>-</td>
        <td>La clave opcional de API de Google para Google Maps 3 para uso y facturación.</td>
    </tr>  <td class="col-1"><div align="justify">
        <p><strong>Googlemaps Multi </strong><strong>Clave API</strong></p>
</div></td>
        <td>-</td>
        <td><div align="justify">Las claves opcionales de API de Google para Google Maps versión 3 para Uso y facturación. Con multi puede agregar sus múltiples dominios para su sitio y detrás de ella la clave. El siguiente dominio va en una nueva línea.</div></td>
    </tr>
    <td class="col-1"><strong>Variable URL</strong></td>
        <td>-</td>
        <td>Utilice HTTP_HOST [predeterminado] o configuración de Joomla.</td>
    </tr>  <td class="col-1"><strong>Sitio web de Google</strong></td>
        <td>-</td>
        <td>¿Qué sitio web de Google debe utilizarse para geocodificación y direcciones.</td>
    </tr><td class="col-1"><strong>Estilo del Mapa</strong></td>
        <td>-</td>
        <td><p>La cadena JSON para diseñar el mapa; Puede cambiar su estilo de mapa. Compruebe más estilos <a
        href="https://snazzymaps.com/"
        target="_blank" rel="nofollow">aqui</a>.</p>
           <div class="alert alert-info"><p>Copie el código y péguelo en el campo de opción: <strong>Estilo de Mapa</strong></p>
             <p>
               <figure class="img-polaroid">
                 <img src="img/map.jpg" alt="">
               </figure>
             </p>
          </div><p></p></td>
    </tr><td class="col-1"><strong>Alinear</strong></td>
        <td>-</td>
        <td> Cómo debe alinearse el mapa dentro del contenido [objeto html padre].</td>
    </tr><td class="col-1"><strong>Opción de idioma</strong></td>
        <td>-</td>
        <td><div align="justify">Si el idioma de los mapas [botones, consejos] debe ser determinado por: sitio - idioma del sitio; Usuario - asi como el idioma/ubicación del navegador.. </div></td>
    </tr><td class="col-1"><strong>Idioma</strong></td>
        <td>-</td>
        <td>Cuando el idioma está determinado por configuración, entonces establezca el idioma aquí.</td>
    </tr><td class="col-1"><strong>Anchura</strong></td>
        <td>-</td>
        <td>Ancho del mapa. Debe poner las unidades detrás del número como 100% o 400px.</td>
    </tr><td class="col-1"><strong>Altura</strong></td>
        <td>-</td>
        <td>Altura del mapa. Debe poner las unidades detrás del número como 100% o 400px.</td>
    </tr><td class="col-1"><strong>Efecto en el mapa</strong></td>
        <td>-</td>
        <td>¿Qué efecto tiene que usarse en el mapa [Uso horizontal anchura absoluta!].</td>
    </tr>
</table>