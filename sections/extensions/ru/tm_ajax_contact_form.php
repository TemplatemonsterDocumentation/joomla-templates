<h3>TM Ajax Contact Form Module</h3>

<p align="justify"><strong>TM Ajax Contact Form</strong> — это модуль, который позволяет добавлять контактную форму на любую страницу сайта.</p>
<p align="justify"><strong>Контактная форма</strong> — это, по своей сути,  набор вопросов, предполагаемых для заполнения посетителями на странице вашего сайта. Все ответы  будет автоматически перенаправлены на  электронную почту [или в админ-панель сайта]. Обычно контактная форма содержит следующие поля: имя, адрес, телефон и электронная почта. Заполнив поля контактной формы,  посетитель  сайта нажмет  кнопку Отправить [Send],  что необходимо для отправки указанной им информации.</p>
<figure class="img-polaroid">
    <img src="img/contact-form-1.png" alt="">
</figure>
<p align="justify">Все шаблоны Joomla 3  имеют в своем составе контактную форму [contact form]. Обычно контактная форма имеет стандартные поля, напр.: &quot;<strong>Name</strong>&quot;, &quot;<strong>E-mail</strong>&quot; и &quot;<strong>Message</strong>&quot;:</p>
 <figure class="img-polaroid">
<p><img src="img/contact-form-6.png" alt=""></p></figure>
<ol class="marked-list">
      <li>
        <p>Перейдите к разделу <strong>Extensions</strong> &gt; <strong>Modules</strong>:</p>
      </li>
      <figure class="img-polaroid">
    <p><img src="img/contact-form-7.png" alt=""></p></figure>
      <li>
        <p>Найдите модуль<strong> TM AJAX Contact Form</strong> и войдите в его настройки.</p>
      </li>
    <div class="alert alert-warning">
 <div align="justify"><strong>Совет:</strong> для упрощения процесса поиска модуля <strong>TM AJAX Contact Form</strong>, воспользуйтесь поисковыми фильтрами. Нажмите кнопку &quot;<strong>Search Tool</strong>&quot; и выберите &quot;<strong>TM AJAX Contact Form</strong>&quot; в списке фильтра &quot;<strong>- Select Type -</strong>&quot;. В таблице менеджера вы увидите модуль  <strong>AJAX Contact Form</strong>, пройдя по ссылке заголовка которого, вы окажетесь на странице его настроек.</div>
  <figure class="img-polaroid">
    <p><img src="img/contact-form-8.png" alt=""></p></figure></div>
      <li>Перейдите по ссылке заголовка   модуля, чтобы открыть его настройки:</li>
      <li>
        <div align="justify">Перед вами откроется окно настроек модуля <strong>TM AJAX Contact Form</strong>. Перейдите во вкладку <strong>Module Settings</strong>:</div>
      </li>
      <figure class="img-polaroid">
    <p align="justify"><img src="img/contact-form-9.png" alt=""></p></figure>
    <p>You will see the following options:</p>
<table width="980"  class="options-table">
  <tr>
        <td width="154" class="col-1"><strong> Pretext </strong></td>
        <td width="29">-</td>
        <td width="781">Вы можете ввести текст, который будет отображаться над основным контентом модуля. Поле не поддерживает HTML-тэги.</td>
  </tr>
    <tr>
        <td class="col-1"><strong> Fields </strong></td>
        <td>-</td>
        <td><div align="justify">Редактируйте и добавляйте новые поля в форму. Введите ярлык, заголовок для поля. Выберите тип данных поля  [text/email/tel/url/textarea], Enter list of options for the 'select' type.</div></td>
    </tr> <tr>
        <td height="45" class="col-1"><strong>Label </strong></td>
        <td>-</td>
        <td>Задайте  ярлык для поля.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Name </strong></td>
        <td>-</td>
        <td>Введите имя поля.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong>Type </strong></td>
        <td>-</td>
        <td>Выберите тип данных поля.</td>
    </tr>
            <td class="col-1"><strong>Title </strong></td>
        <td>-</td>
        <td>Введите заголовок для поля. Если поля останется пустым, будет использовано значение из поля label.</td>
    </tr>      <td class="col-1"><strong>Required </strong></td>
        <td>-</td>
        <td>Определите, является ли поле обязательным для заполнения [yes/no]. </td>
    </tr>      <td class="col-1"><strong>Bootstrap Size </strong></td>
        <td>-</td>
        <td>Укажите количество колонок, используемых полем.</td>
    </tr>    <td height="26" class="col-1"><strong>Admin E-Mail</strong></td>
      <td>-</td>
        <td>Укажите e-mail для отправки ответов контактной формы.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>CC/BCC</strong></td>
        <td>-</td>
        <td>Укажите дополнительный  e-mail.</td>
    </tr>
          <td class="col-1"><strong>Notification on Success</strong></td>
        <td>-</td>
        <td> Задайте текст сообщения о подтверждении отправки данных.</td>
    </tr>      <td class="col-1"><strong>Notification on Failure </strong></td>
        <td>-</td>
        <td> Задайте текст сообщения об ошибке отправки данных.</td>
    </tr>      <td class="col-1"><strong>Notification on Captcha Failure</strong></td>
        <td>-</td>
        <td> <div align="justify"> Введите текст, который будет выводиться при ошибочном вводе кода сaptcha. Внимание!!! Для использования  функции captcha на вашем сайте, вам нужно активировать плагин recaptcha. </div></td>
    </tr>      <td height="" class="col-1"><strong>Captcha</strong></td>
        <td>-</td>
        <td>Определите, стоит ли использовать поле <strong>Captcha</strong>.</td>
    </tr>
          <td class="col-1"><strong>Reset button </strong></td>
        <td>-</td>
        <td><span class="col-1">Покажите или скройте кнопку.</span></td>
    </tr>      <td class="col-1"><strong>Name of Reset/Submit buttons</strong></td>
        <td>-</td>
        <td>Измените текст кнопок <strong>Reset/Submit</strong>.</td>
    </tr>      <td class="col-1"><strong>Labels position</strong></td>
        <td>-</td>
        <td> Измените позиции ярлыков: Inside[внутри]/Outside[снаружи].</td>
    </tr>      <td class="col-1"><strong>Message min.length</strong></td>
        <td>-</td>
        <td>Задайте ограничение длины вводимых символов для поля [ответа].</td>
    </tr>    
</table>
<p></p>
      <li>Здесь вы увидите параметр <strong>Pretext</strong>, ниже вы увидите таблице настроек полей контактной формы  – с помощью этой таблицы можно добавить новое поле для формы.</li>
      <li>
        <div align="justify">Нажмите значок &quot;плюс&quot; [+], рядом с  заголовком того поля, после которого хотите вставить новое поле формы. Допустим, вы  добавили поле <strong>Subject</strong> сразу после поля <strong>Your email</strong> [см. изображение ниже]. Появится пустое поле:</div>
      </li>
       <figure class="img-polaroid">
    <p align="justify"><img src="img/contact-form-10.png" alt=""></p></figure>
  <li>Заполните поля  <strong>Label </strong>и <strong>Name</strong>, задайте опцию  <strong>Type</strong>. [выберите тип поля – в нашем случае, это будет тип <strong>text</strong>]</li>
  <li>
    <div align="justify">You should also choose whether the field is <strong>required or not</strong> by setting appropriate option. Let&rsquo;s make the subject field not required. Вы также должны определить, будет ли поле обязательным [required].  Сделаем созданное поле не обязательным.</div></li>
  <li>
    <div align="justify">Опция <strong> Bootstrap Size</strong> является обязательной к заполнению, как вы уже могли заметить Используя эту опцию, вы можете задать размер поля [field size] — выбирая 8 вы сделаете так, что поле будет занимать всю ширину контейнера контактной формы, как и поле <strong>Message</strong>. Задав <strong>4</strong>,  поле займёт третью часть всего контейнера с формой,<strong> 3</strong> — четвёртую часть и так далее. Сделаем так, чтобы поле занимало всю ширину контейнера выбрав 12:  с точки зрения лучшего внешнего вида макета расположения контактной формы.</div>
  </li>
  <figure class="img-polaroid">
    <p align="justify"><img src="img/contact-form-11.png" alt=""></p></figure>
  <li>
    <div align="justify">Прокрутите страницу вверх и нажмите на кнопку <strong>Save</strong> слева сверху, для того, чтобы сохранить изменения модуля:</div></li>
    <figure class="img-polaroid">
    <p align="justify"><img src="img/contact-form-12.png" alt=""></p></figure>
  <li>
    <div align="justify">Перейдите на вашу контактную страницу, обновите её и вы увидеть внесенные ранее  изменения — поле <strong>Subject</strong> было успешно добавлено:
    </div>
  </li>
   <figure class="img-polaroid">
    <p align="justify"><img src="img/contact-form-13.png" alt=""></p></figure>
  <div class="alert alert-info">
<p align="justify"><strong>Совет</strong></p>
    <div align="justify">
      <p>В случае  возникновения проблем, связанных с отображением данной контактной формы, используйте макет расположения по умолчанию для этого модуля. Перейдите во вкладку <strong>Advanced</strong> и выберите <strong>Default</strong> в списке опции  <strong>Alternative Layout</strong>. </p>
</div>
<figure class="img-polaroid">
  <p><img src="img/contact-form-14.png" alt=""></p></figure></div>

  
</ol>
