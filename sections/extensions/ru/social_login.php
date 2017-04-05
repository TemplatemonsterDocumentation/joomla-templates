<h3>Joomla Social Login
</h3>
<p align="justify">Компонент авторизации через социальные сети — <strong>Social Login</strong>, который позволит предоставить возможность войти и зарегистрироваться на сайте Joomla через соцсети:<strong> ВКонтакте</strong>, <strong>Twitter, Facebook</strong>, <strong>Одноклассники</strong>, <strong>LinkedIn</strong>, сервисы <strong>Яндекс</strong>, <strong>Google</strong>,<strong> Live.com</strong>, <strong>Instagram</strong>, <strong>WordPress</strong>, <strong>Yahoo!</strong> и <strong>Mail.Ru</strong>. Компонент использует одну из самых популярных технологий авторизации oAuth, что позволяет пользователю войти на сайт без ввода пароля.</p>
<h5>Базовая настройка Slogin для сервиса Slogin.info</h5>
<ol class="marked-list">
  <li>После установки идем в настройки компонента: <strong>Components</strong> &gt; <strong>Slogin</strong>.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-1.jpg" alt="">
  </figure>
</p>
  <li>Вам надо получить <strong>ID</strong> и <strong>Пароль</strong>, где их взять?</li>
  <li>Идем на страницу: <a href="http://slogin.info/your-sites" rel="nofollow">http://slogin.info/your-sites</a>.</li>
  <li>Если еще не зарегистрированы регистрируемся, можно просто авторизоваться через соц. сеть.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-2.jpg" alt="">
  </figure>
</p>
  <li>Кликаем на кнопку <strong>Add site</strong>.</li>
  <li>
    <div align="justify">В поле <strong>Callback</strong> указываем ссылку формата http://site.ru/index.php?option=com_slogin&amp;task=check&amp;plugin=service </div>
  </li>
       <figure class="img-polaroid">
    <img src="img/joomline.png" alt="">
     </figure>
  <li></li>
  <div align="justify"><strong>Site.ru</strong> заменить на свой сайт или можете скопировать готовую ссылку из поля <strong>Callbsck URL</strong> в настройках Slogin. </br>
    Для этого перейдите в раздел  <strong>Components</strong>, а затем к <strong>Slogin</strong>.
  </div>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <li>Найдите поле  <strong>Callback URI </strong>и скопируйте  URL пуль, что в нем.</li>
  <figure class="img-polaroid">
    <img src="img/sociallogin-4.jpg" alt="">
  </figure>
  <li>В поле <strong>Password </strong>пишем свой пароль.</li>
  <li>Нажимаем на кнопку  <strong>Add</strong>.</li>
  <li>
    <div align="justify">Сайт добавляется и мы берем его <strong>ID</strong> и  <strong>пароль</strong>, который ввели на прошлом шаге. Вставляем эти настройки в соответствующие поля настроек Slogin.</div>
  </li>
  <li>Выбираем сети, которые вам нужны и сохраняем настройки.</li>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <li>Теперь нужно опубликовать модуль и все его плагины.</li>
  <li>
    <div align="justify">Опубликовать плагины модуля [Social Login Facebook auth, Social Login Google auth, Social Login Instagram auth, ect] вы можете через главное окно настроек модуля <strong>Slogin </strong>[<strong>Components</strong> &gt; <strong>Slogin</strong>].</div>
  </li>

  <p>Для того, чтобы опубликовать плагин, откройте окно его настроек, кликая на ссылке его заголовка.
  </p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>И замените <strong>Disable</strong> на <strong>Enable</strong> в оответствующем поле.
  </p>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-6.jpg" alt="">
    </figure>
  </p>
  <p align="justify">Текущее состояние плагинов, вы можете увидеть в таблице с перечнем всех плагинов модуля <strong>Slogin </strong>в главном окне его настроек.</p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-8.jpg" alt="">
    </figure>
  </p>
 
  <p></p>
  <li>
    <div align="justify">Чтобы опубликовать модуль <strong>Slogin </strong>перейти к <strong>Extensions</strong>&gt;  <strong>Modules</strong>. С помощью фильтров найдите модуль <strong>Slogin</strong>. Для этого, выберите  тип модуля <strong>Slolin</strong> в раскрывающемся списке фильтра &quot;<strong>-Select Type-</strong>&quot;.</div>
  </li>
   <p>
     <figure class="img-polaroid">
       <img src="img/sociallogin-7.jpg" alt="">
     </figure>
   </p>
<li>Чтобы перейти в меню  настроек модуля <strong>Slolin, </strong>кликните на ссылку его заголовка.</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-9.jpg" alt="">
    </figure>
  </p>
 <p>Более подробно рассмотрим параметры настроек данного модуля:</p>
 <table width="980"  class="options-table">
  <tr>
        <td width="154" class="col-1"><strong>Show Login Form</strong></td>
        <td width="29">-</td>
      <td width="781"> Определяет показывать ли логин-форму<span class="col-1">.</span></td>
  </tr>
    <tr>
        <td class="col-1"><strong>Link to the accounts merge</strong></td>
        <td>-</td>
        <td><div align="justify">Show the link to the linked profiles management of social networks.  Позволяет показать ссылку  на.... Ссылка в модуле Slogin отображается  только для авторизованных пользователей.</div></td>
    </tr> <tr>
        <td class="col-1"><strong> Link to profile </strong></td>
        <td>-</td>
        <td><div align="justify">Позволяет показать ссылку  на профиль. Ссылка в модуле Slogin отображается  только для авторизованных пользователей.</div></td>
    </tr>
    <tr>
        <td class="col-1"><strong>Intro Text</strong></td>
        <td>-</td>
        <td>Текст, который будет отображаться перед авторизацией пользователя.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong> Pre-text </strong></td>
        <td>-</td>
        <td>Текст, который будет отображаться сразу над логин-формой.</td>
    </tr>
    <tr>
    <td class="col-1"><strong> Post-text </strong></td>
        <td>-</td>
        <td>Текст, который будет отображаться сразу под логин-формой.</td>
    </tr>
          <td class="col-1"><strong>Login Redirection Page</strong></td>
        <td>-</td>
        <td><div align="justify"> Выберите страницу, на которую пользователь будет перенаправлен после успешной регистрации. Выберите одну из страниц, перечисленных в раскрывающемся меню. Выбрав <strong>Default</strong> пользователь будет возвращен   к той странице, на которой находится.</div></td>
    </tr>    <td class="col-1"><strong> Logout Redirection Page </strong></td>
        <td>-</td>
        <td><div align="justify">Выберите страницу, на которую пользователь будет перенаправлен после выхода из системы. Выберите одну из страниц, перечисленных в раскрывающемся меню. Выбрав <strong>Default</strong> пользователь будет возвращен   к той странице, на которой находится.</div></td>
    </tr>
</table>
<p></p>
<li>Выберите позицию для модуля в соответствующем поле [<strong>Рosition</strong>]. Выберем позицию <strong>megamenu</strong>.</li>
<li>
  <div align="justify">Опубликуйте модуль, выбирая <strong>Published</strong> в поле <strong>Status</strong>. [Вы также можете опубликовать модуль через интерфейс менеджера модулей, нажав красную кнопку с крестиком [&quot;X&quot;], рядом с заголовком модуля.]</div>
</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-10.jpg" alt="">
    </figure>
  </p>
<li>Сохраните настройки, нажав на кнопку <strong>Save</strong>.</li>
<li>
  <div align="justify">Обновите страницу вашего сайта. Теперь у посетителей   сайта появится возможность авторизации через множество соц. сетей.</div>
</li>
</ol>

<div class="alert alert-warning">
<p>Данная информация была взята из официальных источников: <a href="http://joomline.org/docs/slogin.html">joomline.org/docs</a>. </p></div>