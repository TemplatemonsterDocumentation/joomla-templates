<<<<<<< HEAD
<h3>GoogleMap Plugin</h3>

<p>GoogleMap – это плагин для вывода блока с картами Google.</p>
=======
<h3>Googlemap Plugin</h3>

<p>Googlemap – плагин для вывода блока с картами Google.</p>
>>>>>>> c311937bdba8e3656ecdfe93dbc91037d29de47a

<figure class="img-polaroid">
    <img src="img/googlemap-1.jpg" alt="">
</figure>

<<<<<<< HEAD
<p align="justify"><strong>Что бы перейти к настройке модуля, пройдите к разделу  Extensions &gt; Plugins. Перед вами откроется окно  Plugins Mameger. Введите &quot;Google&quot; в поле поиска, нажмите кнопку поиска и в таблице менеджера вы увидите плагин System - Google Maps, прейдите по ссылке его заголовка.</strong></p>
=======
<p align="justify">Так выглядит страница описания плагина Googlemap в админ панели. Более детальная
    информация на <a
        href="http://tech.reumer.net/Google-Maps/Documentation-of-plugin-Googlemap/"
        target="_blank" rel="nofollow">официальном сайте</a>.</p>

>>>>>>> c311937bdba8e3656ecdfe93dbc91037d29de47a
<figure class="img-polaroid">
    <img src="img/googlemap-3.jpg" alt="">
</figure>
<p align="justify">Затем, перед собой вы увидите главное окно настроек этого плагина.  Для более детальной информации обращайтесь к  <a
        href="http://tech.reumer.net/Google-Maps/Documentation-of-plugin-Googlemap/"
        target="_blank" rel="nofollow">официальному веб-сайту</a>.</p>
<p>
  <figure class="img-polaroid">
    <img src="img/googlemap-2.jpg" alt="">
  </figure>
</p>
<p>Рассмотрим параметры настройки плагина GoogleMap:</p>
<table width="980"  class="options-table">
<tr>
        <td width="154" class="col-1"><strong>Published</strong></td>
        <td width="29">-</td>
        <td width="781"><div align="justify">Если вы выбрали &quot;not&quot;, то Google карты не будут отображаться на вашем сайте, в пределах данного плагина. Этим действием вы отключили плагин.</div></td>
  </tr>
    <tr>
        <td class="col-1"><div align="justify"><strong>Debug?</strong></div></td>
        <td>-</td>
        <td><div align="justify">Укажите, стоит ли отображать debug-сообщения [отладочные сообщения] как комментарии в исходном  коде html-страницы. </div></td>
    </tr> <tr>
        <td class="col-1"><strong>Plugin code</strong></td>
        <td>-</td>
        <td><div align="justify">
          <p> Код, который впоследствии будет указываться  в фигурных скобках &quot;{}&quot; в Article для вызова [прикрепления] плагина к данной статье. По умолчанию  mosmap.</p>
</div></td>
    </tr>
    <tr>
        <td class="col-1"><strong>Brackets</strong></td>
        <td>-</td>
        <td><div align="justify">Выберите какие скобки будут использоваться в коде плагина:  фигурные скобочки &quot;{}&quot; [по умолчанию для нескольких kml будут использоваться квадратные скобки &quot;[]&quot;] или  квадратные скобки &quot;[]&quot;  [по умолчанию для нескольких kml будут использоваться круглые скобочки &quot;()&quot;], или же следует использовать оба вида скобок.</div></td>
    </tr>
   
    <tr>
        <td class="col-1"><strong>Google API version </strong></td>
        <td>-</td>
        <td><div align="justify">Укажите какую версию  Google API использовать (3.exp — последняя разработанная версия, 3.number — определенная версия и 3 — использовать стабильную версию  [параметр по умолчанию]).</div></td>
    </tr>
    <tr>
    <td class="col-1"><strong>Visual Refresh</strong></td>
        <td>-</td>
        <td>Отображать обновленную &quot;плитку&quot; в Google Maps.</td>
    </tr>
        <td class="col-1"><strong>Signed In</strong></td>
        <td>-</td>
        <td><div align="justify">Укажите,  следует ли определять пользователей Google.</div></td>
    </tr><td class="col-1"><div align="justify"><strong>Show map?</strong></div></td>
        <td>-</td>
        <td><div align="justify">Определите, показывать карту или нет. На странице можно отображать только ссылку-lightbox, просмотр изображений улиц [streetview] или маршрута.</div></td>
    </tr>    <td class="col-1"><strong>Print button</strong></td>
        <td>-</td>
        <td><div align="justify">Отображайте кнопку  [print] или ссылку для печати карты, изображений улиц [streetview] или маршрута (&quot;none&quot; [параметр по умолчанию], иконка, текст, иконка/текст или пользовательский  текст/изображение в качестве ссылки).</div></td>
    </tr>  <td height="26" class="col-1"><strong>CSS Class name</strong></td>
      <td>-</td>
        <td>Наименование CSS класса для карты. По умолчанию &quot;empty&quot;.</td>
    </tr>
      <td class="col-1"><strong>Load with mootools?</strong></td>
        <td>-</td>
        <td><div align="justify">Укажите, стоил ли использовать фреймворк Moo Tools [по умолчанию]  для загрузки карты или же использовать временный интервал.</div></td>
    </tr><td class="col-1"><strong>Timeinterval </strong></td>
        <td>-</td>
        <td><div align="justify">Укажите значение временного интервала загрузки в ms, использование именно этого значения не противоречит корректной загрузке страницы   [по умолчанию 500ms].</div></td>
    </tr><td class="col-1"><strong>Googlemaps API Key</strong></td>
        <td>-</td>
        <td>Укажите дополнительный Google API key для Google Maps 3.</td>
    </tr>  <td class="col-1"><div align="justify">
        <p><strong>Googlemaps Multi </strong><strong>API Key</strong></p>
</div></td>
        <td>-</td>
        <td><div align="justify">Укажите сразу несколько дополнительных Google API key(s) для Google Maps.</div></td>
    </tr>
    <td class="col-1"><strong>URL variable</strong></td>
        <td>-</td>
        <td>Используйте параметр HTTP_HOST [по умолчанию] или настройки Joomla.</td>
    </tr>  <td class="col-1"><strong>Google website</strong></td>
        <td>-</td>
        <td>Укажите какой веб-сайт google  следует использовать для целей определения маршрута и геокодирования.</td>
    </tr><td class="col-1"><strong>Styled Map</strong></td>
        <td>-</td>
        <td><p>Укажите  JSON строку  стиля карты; вы можете найти подходящий стиль карты <a
        href="https://snazzymaps.com/"
        target="_blank" rel="nofollow">ЗДЕСЬ</a>. </p>
        <div class="alert alert-info"><p>Просто скопируйте код и внесите его в соответствующие поле [в поле <span class="col-1"><strong>Styled Map</strong></span>]:</p>
          <p>
            <figure class="img-polaroid">
              <img src="img/map.jpg" alt="">
            </figure>
          </p>
         
        </div> <p></p></td>
    </tr><td class="col-1"><strong>Align</strong></td>
        <td>-</td>
        <td> Укажите способ выравнивания.</td>
    </tr><td class="col-1"><strong>Language option</strong></td>
        <td>-</td>
        <td><div align="justify">
          <p>Значение  &quot;site&quot; — будет использоваться язык сайта;  user — язык/локация браузера.</p>
</div></td>
    </tr><td class="col-1"><strong>Language</strong></td>
        <td>-</td>
        <td>Укажите язык карты, если данная опция предусмотрена.</td>
    </tr><td class="col-1"><strong>Width</strong></td>
        <td>-</td>
        <td>Значение ширины карты. Укажите значение вида  100% или 400px.</td>
    </tr><td class="col-1"><strong>Height</strong></td>
        <td>-</td>
        <td>Значение высоты карты. Укажите значение вида  100% или 400px.</td>
    </tr><td class="col-1"><strong>Effect on Map</strong></td>
        <td>-</td>
        <td><div align="justify">Выберите эффект, который будет использоваться для карты [Параметр &quot;Horizontal&quot; использует значение абсолютной ширины!].</div></td>
    </tr>
</table>