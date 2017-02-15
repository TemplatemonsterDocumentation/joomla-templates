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
       <div align="justify"><img src="http://joomline.ru/images/QIP_Shot_-_Screen_215_25.12.15.png" alt="">
       </div>
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
<blockquote>
  <p>Для того, что бы опубликовать плагин, откройте окно его настроек, кликая на ссылке его заголовка.
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
  </blockquote>
  <p></p>
  <li>
    <div align="justify">Чтобы опубликовать модуль <strong>Slogin </strong>перейти к <strong>Extensions</strong>&gt;  <strong>Modules</strong>. С помощью фильтров найдите модуль <strong>Slogin</strong>. Для этого, выберите  тип модуля <strong>Slolin</strong> в раскрывающемся списке фильтра &quot;<strong>-Select Type-</strong>&quot;.</div>
  </li>
   <p>
     <figure class="img-polaroid">
       <img src="img/sociallogin-7.jpg" alt="">
     </figure>
   </p>
<li>Что бы перейти в меню  настроек модуля <strong>Slolin, </strong>кликните на ссылку его заголовка.</li>
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
<h4> Настройка авторизации социальных сетей </h4>
<h5><strong>Вконтакте</strong> — настройка авторизации Вконтакте по протоколу oAuth</h5>
<p align="justify">Предварительно требуется перейти к окну настроек плагина. Перейдите в раздел <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; найдите группу плагинов &quot;<strong>slogin_auth</strong>&quot; &gt;   а затем плагин&quot;<strong>Social Login Vkontakte auth</strong>&quot;.</p>
<div class="alert alert-warning">
  <div align="justify"><strong>Совет:</strong> используйте фильтры поиска для того, что бы быстро найти группу плагинов   &quot;slogin_auth&quot;. Нажмите кнопку &quot;Search Tool&quot; и выберите тип плагина &quot;<strong>slogin_auth</strong>&quot; в раскрывающемся списке фильтра &quot;<strong>- Select Type -</strong>&quot;.</div>
 <figure class="img-polaroid">
      <img src="img/sociallogin-12.jpg" alt="">
  </figure>
</div>
<div class="alert alert-warning">
  <p align="justify">
  
    Перейти к настройкам плагинов [Social Login Facebook auth, Social Login Google auth, Social Login Instagram auth и т.д.] вы можете через главное окно настроек модуля <strong>Slogin </strong>[<strong>Components</strong> &gt; <strong>Slogin</strong>].</p>
<p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
</div>
<ol class="marked-list">
<li>Для создания приложения Вконтакте пройдите по <a href="http://vk.com/editapp?act=create" rel="nofollow">этой ссылке</a>.</li>
<li>
<p align="justify"><strong></strong>Тип — &quot;Веб-сайт&quot;; вводим базовый домен и адрес сайта.enter name, site address   and base domain. На странице настроек получаем <strong>client_id</strong> [ID приложения] и <strong>secret_key</strong> [защищенный ключ]. Вводим данные в соответствующие поля в настройках плагина, сохраняем настройки и публикуем плагин.</p></li></ol>
<p><figure class="img-polaroid"><img src="http://joomline.org/images/oauth_vk2.jpg" alt=""/></figure></p>
<h5><strong>Google</strong> — настройка авторизации через сервисы Google.</h5>
<p align="justify">Предварительно требуется перейти к окну настроек плагина. Перейдите в раздел <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; найдите группу плагинов &quot;<strong>slogin_auth</strong>&quot; &gt;   а затем плагин&quot;<strong>Social Login Google auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Для создания приложения google пройдите по <a href="https://code.google.com/apis/console#access" rel="nofollow">этой ссылке</a>.</li>
  <li>Переходим к созданию нового приложения google.
    <p></p>
    <figure class="img-polaroid">
      <img src="http://joomline.ru/images/QIP_Shot_-_Screen_145_12.11.15.png" alt=""/>
    </figure>
  </li>
  <li>Проходим по меню <strong>название приложения</strong> &gt;<strong> APIs &amp; auth</strong> &gt; <strong>credential.</strong></li>
  <li>Создаем новый Client ID: Для этого выбираем oAuth 2.0 client ID и в нем Web application.</li>

<<<<<<< HEAD
<p>
  <figure class="img-polaroid">
<img src="http://joomline.ru/images/QIP_Shot_-_Screen_147_12.11.15.png" alt=""/></figure></p>
<li><p>Получает примерно такого вида картинку:</p>
</li>
<p><figure class="img-polaroid"><img src="http://joomline.ru/images/QIP_Shot_-_Screen_148_12.11.15.png" alt=""/></figure></p>
=======
<p>Joomla Social Login – компонент для вывода кнопок авторизации через социальные
    сети.</p>
>>>>>>> c311937bdba8e3656ecdfe93dbc91037d29de47a

  <li>Получаем <strong>client_id </strong>[Client ID] и <strong>secret_key</strong> [Client Secret].</li>
  <li>Задайте имя продукта и email:</li>

<ol class="marked list">
  <li>Во вкладке: &quot;OAuth consent screen&quot;;</li>
  <li>Заполняем &quot;Product name&quot;;</li>
  <li>Выберите в поле &quot;Email address&quot;свой email.</li>
</ol></ol>
<h5><strong>FaceBook</strong> — настройка авторизации через социальную сеть Facebook</h5>
<p align="justify">Предварительно требуется перейти к окну настроек плагина. Перейдите в раздел <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; найдите группу плагинов &quot;<strong>slogin_auth</strong>&quot; &gt;   а затем плагин&quot;<strong>Social Login Facebook auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Для создания приложения Facebook пройдите по <a href="https://developers.facebook.com/apps/" rel="nofollow">этой ссылке</a>.</li>
  <li>
    <div align="justify">Нажимаем на кнопку <strong>Приложения</strong> [my Apps]  &gt; &quot;Создать новое приложение&quot; [Add a New App]. В открывшемся окне заполняем поле названия приложения. Нажимаем <strong>Create New Facebook App ID</strong>. Выбираем категорию вашего сайта и нажимаем &quot;Create App ID&quot;.</div>
  </li>
<p><figure class="img-polaroid"><img src="http://joomline.org/images/addfacebookappnewen.png" alt="" /></figure></p>
<li>Переходим  к разделу &quot;Product Setup&quot; &gt; Facebook Login &gt; кликаем &quot;Get Started&quot;.</li>
<figure class="img-polaroid"><img src="http://joomline.org/images/addfacebookappnewen2.png" alt="" /></figure></p>
<li>Указываем сайт в формате http://<strong>site.ru</strong>. Нажимаем кнопку  &quot;Save Changes&quot;.</li>
<p><figure class="img-polaroid"><img src="http://joomline.org/images/addfacebookappnewen3.png" alt="" /></figure></p>

  <li>Переходим в раздел &quot;App Review&quot;. В разделе  &quot;Make public?&quot;, выбираем &quot;YES&quot;.</li>
  <li>
    <div align="justify">Идем в раздел  &quot;Dashboard&quot;  и копируем параметры <strong>client_id</strong> [App ID] и <strong>secret_key</strong> [App Secret]. Вводим данные в соответствующие поля в настройках плагина, сохраняем настройки и публикуем плагин.</div>
  </li>
</ol>

<div class="alert alert-warning">
  <p>
  <strong>Внимание!</strong></p>
  <p align="justify">Для администратора приложения при авторизации будет выводиться сообщение с предложением пройти модерацию, это делать не обязательно, для ваших посетителей такого сообщения выводиться не будет, так как права, которые мы запрашиваем у Facebook не требуют обязательной модерации.</p>
</div>
<h5><strong>Twitter</strong> — настройка авторизации через социальную сеть Твиттер.</h5>
<p align="justify">Предварительно требуется перейти к окну настроек плагина. Перейдите в раздел <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; найдите группу плагинов &quot;<strong>slogin_auth</strong>&quot; &gt;   а затем плагин &quot;<strong>Social Login Twitter auth</strong>&quot;.</p>
<ol class="marked-list">
<li>Для создания приложения Twitter пройдите по <a href="https://apps.twitter.com/app/new" target="_blank" rel="nofollow">этой ссылке</a></li>
  <li>
    <div align="justify">Вводим имя, описание, наш сайт и <strong>URL</strong> скрипта-обработчика  — http://mysite.ru/component/slogin/callback/twitter или /?option=com_slogin%26task=check%26plugin=twitter [если вы не используете SEF ссылки Joomla], точный адрес смотрите в настройках плагина Твиттер &quot;<strong>Callback URI</strong>&quot;. </div>
  </li>

<<<<<<< HEAD
<p><figure class="img-polaroid"><img src="http://joomline.org/images/oauth_twitter1.jpg" alt="" /></figure></p>
<li>На странице настроек нажимаем кнопку <strong>Create my access token</strong>.</li>
<li>Получаем <strong>Consumer key</strong> [API key] и <strong>Consumer secret </strong>[API secret] вносим их в плагин.</li>
<figure class="img-polaroid"><img src="http://joomline.org/images/QIP_Shot_-_Screen_408_01.07.14.png" alt="" /></figure>
</ol>
=======
<p>Так выглядят основные настройки компонента Joomla Social Login. Более детальная
    информация на <a
        href="http://support.loginradius.com/hc/en-us/articles/201968987-Joomla-Social-Login-instructions"
        target="_blank" rel="nofollow">официальном сайте</a>.</p>
>>>>>>> c311937bdba8e3656ecdfe93dbc91037d29de47a

<h5><strong>Одноклассники</strong> — настройка авторизации через социальную сеть Одноклассники</h5>
<p align="justify">Предварительно требуется перейти к окну настроек плагина. Перейдите в раздел <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; найдите группу плагинов &quot;<strong>slogin_auth</strong>&quot; &gt;   а затем плагин&quot;<strong>Social Login Odnoclassniki auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Перейдите по <a href="http://dev.odnoklassniki.ru/wiki/pages/viewpage.action?pageId=5668937" target="_blank">этой ссылке</a> и зарегистрируйтесь как разработчик. </li>
  <li>
    <div align="justify">После авторизации перейдите по  <a href="http://dev.odnoklassniki.ru/wiki/pages/viewpage.action?pageId=13992188" target="_blank">данной ссылке</a>, где вы заполните форму <strong>OAuth access</strong>, после чего дождитесь подтверждающего письма на указанный email. Авторизуйтесь в вашем главном аккаунте  [<a href="http://www.odnoklassniki.ru" target="_blank">Odnoklassniki Account</a>] &gt; Игры  &gt; Мои загруженные &gt; Добавить приложение, выберите   Вне Одноклассников. Затем, вам надо заполнить следующую форму:</div>
  </li>
</ol>
</ul>
<figure class="img-polaroid">
  <img src="http://joomline.org/images/oauth_ok1.jpg" alt="" />
</figure>
<li>
  <div align="justify">
    <p>Все заполненные в примере поля обязательны к заполнению. Нажимаем &quot;Сохранить&quot; и получаем письмо на указанный email, содержащее <strong>client_id</strong> [Application ID], <strong>public_key</strong> [Публичный ключ приложения] и <strong>secret_key</strong> [Секретный ключ приложения].</p>
  
  </div>
</li>
<li>
  <div align="justify">
    <p>В поле &quot;Список разрешённых redirect_uri&quot; нужно внести строку — http://site.ru/?option=com_slogin&amp;task=check&amp;plugin=odnoklassniki.  </p>
  </div>
</li>
<li>Вводим данные в соответствующие поля в настройках плагина, сохраняем настройки и публикуем плагин.</li>
<h5><strong>Mail.ru</strong> — настройка авторизации через сервисы Mail.ru</h5>
<p align="justify">Предварительно требуется перейти к окну настроек плагина. Перейдите в раздел <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; найдите группу плагинов &quot;<strong>slogin_auth</strong>&quot; &gt;   а затем плагин&quot;<strong>Social Login mail auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>
    <div align="justify">Для создания приложения Mail.ru пройдите по <a href="http://api.mail.ru/sites/my/add" rel="nofollow">этой ссылке</a>. Вводим название, URL сайта и URL файла receiver.html, который можно скачать здесь же. receiver.html — файл, инициализирующий JS API. Файл receiver.html записываем в корень сайта, без него вы не сможете закончить регистрацию.</div>
  </li>
  <li>На странице настроек получаем <strong>client_id </strong>[ID] и <strong>secret_key</strong> [секретный ключ].</li>
  <li>Вводим данные в соответствующие поля в настройках плагина, сохраняем настройки и публикуем плагин. </li>
</ol>
<p><figure class="img-polaroid"><img src="http://joomline.org/images/oauth_mailru2.jpg" alt="" /></figure></p>
<h5><strong>Yandex</strong> — настройка авторизации через сервисы Yandex</h5>
<p align="justify">Предварительно требуется перейти к окну настроек плагина. Перейдите в раздел <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; найдите группу плагинов &quot;<strong>slogin_auth</strong>&quot; &gt;   а затем плагин&quot;<strong>Social Login Yandex auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Для создания приложения Яндекс пройдите по <a href="https://oauth.yandex.ru/client/new" rel="nofollow" data-mce-hrefundefined="">этой ссылке</a>.</li>

<p><figure class="img-polaroid"><img src="http://joomline.org/images/oauth_ya1.jpg" alt="" /></figure></p>
<li><p align="justify">Выбираем Яндекс.Логин. Ставим галочки: Адрес электронной почты,  Дата рождения,  Имя пользователя, ФИО, пол.</p>
</li>
<li>Указываем Callback URI: http://mysite.ru/?option=com_slogin&amp;task=check&amp;plugin=yandex. </li>
<li>Получаем <strong>ID</strong> и  <strong>Password </strong>и вносим их в соответствующие настройки плагина.</li>
</ol>
<h5><strong>LinkedIn</strong> — настройка авторизации через сервисы LinkedIn</h5>
<p align="justify">Предварительно требуется перейти к окну настроек плагина. Перейдите в раздел <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; найдите группу плагинов &quot;<strong>slogin_auth</strong>&quot; &gt;   а затем плагин&quot;<strong>Social Login LinkedIn   auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Для создания приложения LinkedIn пройдите по <a href="https://www.linkedin.com/developer/apps" rel="nofollow" data-mce-hrefundefined="">этой ссылке</a>. Нужно нажать на <strong>Create Application</strong>.</li>

<p><figure class="img-polaroid"><img src="http://joomline.org/images/LinkedInnewapp.png" alt="" /></figure></p>
<li>Заполняем все поля отмеченные звездочкой. После нажатия кнопки &quot;Submit&quot; Видим такое окно:</li>
<p><figure class="img-polaroid"><img src="http://joomline.org/images/LinkedInnewapp2.png" alt="" /></figure>
<li>На странице настроек получаем <strong>Client ID</strong> и <strong>Client secre</strong>t.</li>
<li>Вводим данные в соответствующие поля в настройках плагина, сохраняем настройки и публикуем плагин. </li>
</ol>
<h5><strong>Live.com</strong> — сервис авторизации Microsoft</h5>
<p align="justify">Предварительно требуется перейти к окну настроек плагина. Перейдите в раздел <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; найдите группу плагинов &quot;<strong>slogin_auth</strong>&quot; &gt;   а затем плагин&quot;<strong>Social Login Live.com auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Для создания приложения Live пройдите по <a href="https://account.live.com/developers/applications/create?tou=1" target="_blank" rel="nofollow" data-mce-hrefundefined="">этой ссылке</a>.
  </li>

<p><figure class="img-polaroid"><img src="http://joomline.ru/images/ScreenShot_298.png" alt="" /></figure></p>
<li>
  <div align="justify">Введите название приложения, сохраните, в поле &quot;Callback URI&quot; укажите ваш сайт. Скопируйте поля  <strong>Client ID</strong> и <strong>Client secret</strong> в поля настройки плагина &quot;Client ID&quot; и &quot;Client secret&quot; соответственно.</div>
</li>
</ol>

<h5><strong>Yahoo</strong> — настройка авторизации через сервисы Yahoo</h5>
<p align="justify">Предварительно требуется перейти к окну настроек плагина. Перейдите в раздел <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; найдите группу плагинов &quot;<strong>slogin_auth</strong>&quot; &gt;   а затем плагин&quot;<strong>Social Login Yahoo auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>
    <div align="justify">Для создания приложения Yahoo пройдите по <a href="https://developer.yahoo.com/apps/create" target="_blank" rel="nofollow" data-mce-hrefundefined="">этой ссылке</a>.</div>
  </li>

<p><figure class="img-polaroid"><a href="http://joomline.org/cache/joomlineruimagesyahoo-setpng_thumb_large700_0.png" style="background:none;" onclick="return hs.expand[this)" bgcolor="none"><img src="http://joomline.org/cache/joomlineruimagesyahoo-setpng_thumb_medium100_0.png" alt="" /></a></figure></p>
<li>
  <p align="justify">После создания приложения копируем в плагин поля: <strong>Client ID</strong>, <strong>Client Secret</strong>. Вводим данные в соответствующие поля в настройках плагина, сохраняем настройки и публикуем плагин. </p>
</li></ol>

<h5><strong>WordPress </strong>— настройка авторизации через сервисы WordPress</h5>
<p align="justify">Предварительно требуется перейти к окну настроек плагина. Перейдите в раздел <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; найдите группу плагинов &quot;<strong>slogin_auth</strong>&quot; &gt;   а затем плагин&quot;<strong>Social Login Wordpress auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Для создания приложения WordPress пройдите по <a href="https://developer.wordpress.com/apps/new/" target="_blank" rel="nofollow">ссылке</a>.</li>
  <li>Обязательно укажите обратный URL формата: http://site.ru/?option=com_slogin&amp;task=check&amp;plugin=wordpress.</li>
<p><figure class="img-polaroid"><a href="http://joomline.org/cache/joomlineruimagesQIP_Shot_-_Screen_433_220714png_thumb_large700_0.png" style="background:none;" onclick="return hs.expand[this)" bgcolor="none"><img src="http://joomline.org/cache/joomlineruimagesQIP_Shot_-_Screen_433_220714png_thumb_medium100_0.png" alt="" /></a></figure></p>
<li>Скопируйте поля <strong>Client ID</strong> и <strong>Client Secret</strong> в соответствующие поля плагина.</li>
</ol>
<p><figure class="img-polaroid"><img src="http://joomline.org/cache/joomlineruimagesQIP_Shot_-_Screen_434_220714png_thumb_medium100_0.png" alt="" /></figure></p>

<h5><strong>Instagram</strong> — настройка авторизации через сервисы Instagram</h5>
<p align="justify">Предварительно требуется перейти к окну настроек плагина. Перейдите в раздел <strong>Extensions</strong> &gt; <strong>Plugins</strong> &gt; найдите группу плагинов &quot;<strong>slogin_auth</strong>&quot; &gt;   а затем плагин&quot;<strong>Social Login Instagram auth</strong>&quot;.</p>
<ol class="marked-list">
  <li>Для создания приложения в instagram пройдите по <a href="http://instagram.com/developer/clients/register/" target="_blank" rel="nofollow">ссылке</a>.</li>
  <li>Обязательно укажите обратный URL формата:  http://site.ru/?option=com_slogin&amp;task=check&amp;plugin=instagram.</li>
  <li>Во вкладке &quot;Security&quot; выберите параметр &quot;Disable implicit OAuth&quot;.</li>
<p><figure class="img-polaroid"><a href="http://joomline.org/cache/joomlineruimagesQIP_Shot_-_Screen_437_220714png_thumb_large700_0.png" style="background:none;" onclick="return hs.expand[this)" bgcolor="none"><img src="http://joomline.org/cache/joomlineruimagesQIP_Shot_-_Screen_437_220714png_thumb_medium100_0.png" alt="" /></a></figure></p>
<li>Скопируйте данные из полей <strong>Client ID</strong> и <strong>Client Secret</strong>, вставьте полученные ключи в соответствующие поля плагина.</li>
</ol>
<div class="alert alert-warning">
<p>Данная информация была взята из официальных источников: <a href="http://joomline.org/docs/slogin.html">joomline.org/docs</a>. </p></div>