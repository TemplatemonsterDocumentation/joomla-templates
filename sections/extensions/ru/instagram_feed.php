<h3>TM Instagram</h3>
 
<p><strong>TM Instagram — </strong>модуль для вывода  плагина &quot;Instagram Widget&quot;.</p>

<figure class="img-polaroid">
  <p><img src="img/instagram-1.jpg" alt=""></p>
</figure>

<p>Так выглядят окно основных настроек модуля <strong>TM Instagram</strong>: </p>
<figure class="img-polaroid">
  <p><img src="img/instagram-2.jpg" alt=""></p>
</figure>

Для того, чтобы  получить   <strong>Instagram USER ID</strong> и <strong>Access Token</strong>
выполните следующие действия.
<h5>Что же такое Instagram Access Token – Краткое описание</h5>
<p align="justify">Ни один  аuthenticated [аутентифицированный] запрос Instagram не обходится без <strong>Instagram Access token </strong>[маркер доступа].   Маркер доступа используется для идентификации пользователя, приложения или страницы. Он может быть использован приложением для создания  graph API calls [графика вызовов API]. Маркер доступа всегда является уникальным для каждого отдельного пользователя.</p>
<blockquote>Instagram Access Token необходим для большинства приложений на основе Instagram.</blockquote>
      <h5> Пошаговое руководство по получению Instagram Access Token</h5>
<p> Для получения Instagram Access Token вам потребуется выполнить всего <strong>3 простых шага</strong>:</p>
      <ol class="marked-list">
        <li>Войти в  Instagram как разработчик.</li>
        <li>Зарегистрировать новый  Client ID.</li>
        <li>Получить  Instagram Access Token, используя  Client ID и Client Secret, которые вы получите в процессе.</li>
      </ol>
      Ниже вы найдете  подробное описание каждого шага получения Instagram Access Token.
      <h5>1. Войдите в  Instagram как разработчик.</h5>
<p><strong>Посетите страницу  Instagram Developer.</strong></p>
<p align="justify">Перед тем, как  получить  Instagram Access Token,  необходимо зарегистрироваться в качестве разработчика в Instagram и получить <strong>Client ID</strong> и <strong>Client Secret</strong>. Для этого перейдите по ссылке на  <a href="https://instagram.com/developer/clients/register/" target="_blank" rel="nofollow">страницу Instagram developer</a>.</p>
<p>Страница регистрации разработчика выглядит следующим образом: </p>
  <figure class="img-polaroid">
    <img src="img/instagram-3.jpg" alt="">
</figure>
  <p><strong>Войдите в систему Instagram в качестве пользователя.</strong></p>
<p align="justify">Для того, чтобы  получить Client ID и Client Secret вы должны быть зарегистрированы в Instagram как пользователь. Чтобы  перейти к следующему шагу, войдите в систему Instagram, используя действительную учетную запись. Если вы не зарегистрированы, создайте новую учетную запись  <strong>Instagram</strong>.</p>
<p>Вход в систему осуществлён успешно:</p>
<figure class="img-polaroid">
  <img src="img/instagram-4.jpg" alt="">
</figure>
<p><strong>Далее, вам необходимо заполнить форму регистрации разработчика.</strong></p>
<p align="justify">Instagram demands to <strong>be registered as a developer</strong> from everyone, who wants to display Instagram feed on his website. Since you've log in Instagram the next window will appear.</p>
<p align="justify">Требования Instagram таковы, что все, кто хочет отображать плагин Instagram [ленту Instagram] на своем сайте, должны быть зарегистрированы в системе в качестве разработчика. </p>
<p align="justify">Так только  вы войдете в Instagram  появится следующее окно.</p>
<p>Заполнить форму регистрации разработчика:</p>
<figure class="img-polaroid">
  <img src="img/instagram-5.jpg" alt="">
</figure>
<p>Будьте внимательны при заполнении следующих полей:</p>
<ol class="marked-list">
        <li><strong>Your website</strong> – это URL вашего веб-сайта.</li>
        <li><strong>Phone number</strong> – любой действующий телефонный номер.</li>
        <li><strong>What do you want to build with API</strong> – краткий ответ на вопрос для каких целей вы будите использовать <strong> API</strong>.</li>
      </ol>
<p align="justify">После регистрации вы получите  доступ к официальной документации Instagram Developer. Вы увидите сообщение о приветствии нового разработчика и небольшой обзор содержания данной документации. </p>
<p>Приветствуем нового разработчика! </p>
<figure class="img-polaroid">
  <p><img src="img/instagram-6.jpg" alt="">
  </p>
  <p>Нажмите кнопку <strong>Register Your Application</strong>.</p>
</figure>
<p align="justify">Теперь, от имени разработчика, вы можете з<strong>арегистрировать ваше приложение</strong>. Система уведомит вас об отсутствии зарегистрированных  приложений и предложит вам это сделать. Для этого нажмите кнопку <strong>Register a new client</strong>. </p>
<p>Переходим к процессу регистрации нового клиента: </p>
      <figure class="img-polaroid">
    <img src="img/instagram-7.jpg" alt="">
</figure>
      <p>Следующим шагом вам необходимо авторизовать ваше новое приложение и нового клиента.</p>
<h5>2. Регистрация нового  Client ID.</h5>
<p>Будьте внимательны! На следующей странице вы найдете 4 обязательных для заполнения поля.</p>
<p>Регистрация New client ID: </p>
<figure class="img-polaroid">
  <img src="img/instagram-8.jpg" alt="">
</figure>
<p>На этой странице заполните перечисленные ниже поля:</p>
<ol class="marked-list">
        <li>
          <div align="justify"><strong>Application name</strong> – укажите любое подходящие имя, которое будет соответствовать  требованиям  Instagram.</div>
        </li>
        <li><strong>Description</strong> – краткое описание.</li>
  <li><strong>Website URL</strong> – должно быть <a href="https://elfsight.com/service/generate-instagram-access-token/" target="_blank">https://elfsight.com/service/generate-instagram-access-token/</a>.</li>
        <li>
          <div align="justify"><strong>Valid redirect URIs</strong> – должно быть <a href="https://elfsight.com/service/generate-instagram-access-token/" target="_blank">https://elfsight.com/service/generate-instagram-access-token/</a> <strong>[задайте ссылку на ваш сервер]</strong>.</div>
        </li>
      </ol>
<p align="justify">Подтвердите правильность данных [<strong>confirm your data</strong>] и переходите к следующему шагу. На данном этапе вы получите ваш <strong>Instagram Client ID</strong> и <strong>Client Secret</strong>.</p>
<p>На этой странице вы можете получить  Client ID и Client Secret: </p>
<figure class="img-polaroid">
  <img src="img/instagram-9.jpg" alt="">
</figure>
<blockquote>
  <div align="justify">
    <p>Если вы на выходе вы хотите получить квадратные фото в ленте, активируйте опцию non-square media. Перейдите к окну редактирования настроек нового клиента и найдите там раздел <strong>&quot;Migrations&quot;</strong>. НЕ ЗАБУДЬТЕ нажать кнопку <strong>&quot;Update Plugin&quot;</strong>, чтобы  сохранить все изменения.</p>
</div>
</blockquote>
<p>Раздел  non-square media:</p>
<p>
  <figure class="img-polaroid">
    <img src="img/instagram-10.jpg" alt=""></figure>
</p>
<h5>3. Получите  Instagram Access Token, используя  ваш Client ID и Client Secret.</h5>
<p>Внесите значения  Instagram Client ID и Client Secret   в соответствующие поля  <a href="https://elfsight.com/service/generate-instagram-access-token/" target="_blank">здесь</a>.</p>
<p>Страница Instagram Access Token: </p>
<figure class="img-polaroid">
  <img src="img/instagram-11.jpg" alt="">
</figure>
<p align="justify"> Данная страница была создана для того, что вы смогли получить ваш Access   Token самым простым и доступным способом. Обратите внимание, что Instagram будет запрашивать авторизацию в качестве пользователя sandbox. Вот почему следует нажать кнопку &quot;Authorize&quot; на следующей странице для того, чтобы завершить действие.</p>
<p>Страница авторизации Sandbox: </p>
      <figure class="img-polaroid">
    <img src="img/instagram-12.jpg" alt="">
</figure>
      <p><strong>Скопируйте сгенерированный  Access Token.</strong></p>
<p align="justify">Поздравляет! Вы получили <strong> Instagram Access Token</strong>. Используйте его для отображения ленты  Instagram с помощью плагина <strong>TM Instagram</strong> на вашем сайте.</p>
<p>Вы получили ваш  Access Token: </p>
<figure class="img-polaroid">
  <img src="img/instagram-13.jpg" alt="">
</figure>
<h5>Боитесь за сохранность вашего Instagram аккаунта?</h5>
<p align="justify"> Instagram Access Token предоставляет возможность просматривать фото профиля, не более. Владение вашим Instagram Access Token НЕ может помочь получить доступ к вашему аккаунту и, уж тем более, не позволит совершать с аккаунтом  действия от вашего имени.</p>
