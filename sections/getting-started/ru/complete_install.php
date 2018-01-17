
<!-- RU -->

<p class="alert alert-info custom">Если Вы не хотите тратить Ваше время на установку шаблона, вы всегда можете <span class="label label-warning opener" onclick="showChat()">заказать</span> услугу установки шаблона используя наш чат.</p>

<h3>Полная установка</h3>

<p align="justify"> Этот метод установки используется в случае, если  Вы никогда не пользовались Joomla и у Вас еще нет сайта созданного с помощью этой платформы.</p>

<p align="justify">При помощи этого метода устанавливаются непосредственно сам <strong>движок Joomla CMS</strong>, <strong>шаблон Joomla</strong>, <strong>демо-данные</strong> и все требуемые <strong>расширения</strong> [приложения, модули].</p>

<!-- Creating database -->

<h3>Создание базы данных</h3>

<p align="justify">Когда все файлы будут загружены на хостинг сервер, заранее необходимо подготовить пустую базу данных для веб-сайта Joomla. Ее
    можно создать с помощью любого инструмента управления базами данных  контрольной панели хостинга [<i>обычно это PhpMyAdmin</i>].
</p>

<h6>Используя  РhpMyAdmin можно создать новую базу данных в 3 простых шага: [см. слайды ниже]</h6>

<ol class="index-list">
    <li>
      <div align="justify">Щелкните на кнопке &quot;Database&quot; [База данных] в верхнем меню навигации, чтобы перейти в список баз данных. </div>
    </li>

    <li>
      <div align="justify">В  поле "Create new database&quot; [Создать новую базу данных], введите название базы данных. Название базы может быть произвольным, но желательно, не должно содержать в себе пробелы.</div>
    </li>

    <li>
      <div align="justify">Нажмите справа на кнопку &quot;Create&quot; [Создать].</div>
    </li>
</ol>

<p>Новая база данных появилась в списке. Чтобы получить доступ к ней, кликните на ее названии:</p>

<div class="owl-carousel">
  <div class="item">
        <p>1. Отктройте вкладку "Database [База данных]", чтобы перейти к перечню всех баз данныхю</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
  </div>
    <div class="item">
        <p>2. Введите название для новой базы данных.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Щелкните кнопку "Создать" </p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p align="justify">4. База данных появится в списке всех баз. Кликните по названию новой базы данных, чтобы получить к ней доступ.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
  <p>&nbsp;</p></div>
  <p>Воспользуйтесь  видео-уроком: <a href="/help/how-to-create-a-database.html" target="_blank">Как создать базу данных</a>.</p>

<p align="justify">В случае  возникновения затруднений при создании базы данных,  обратитесь к хостинг-провайдеру за поддержкой. </p>

<!-- Uploading files -->

<h3>Загрузка и разархивация файлов</h3>
<p align="justify">Для начала работы с Joomla, требуется загрузить файлы на хостинг сервер. Это можно сделать при помощи
    файлового менеджера хостинга или альтернативного FTP менеджера.</p>

<ol class="index-list">
<li>
  <div align="justify">Откройте пакет файлов шаблон и перейдите в папку 'joomla'.</div>
</li>

    <li>
      <div align="justify">Выделите файлы 'unzip.php' и 'fullpackage.zip', и загрузите файлы на сервер. [для уточнения деталей обращайтесь к видео-уроку:
        <a href="/help/how-upload-files-server-2.html" target="_blank">Как загрузить файлы на сервер.</a>]
      </div>
  </li>
    <li>
      <div align="justify">Введите путь к файлу 'unzip.php' к серверу [напр.:
        <i class="muted">http://your_domain_name/unzip.php</i>] в адресной строке вашего браузера<abbr
            title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc."></abbr>.
      </div>
    </li>

    <li>
    <p>Появится следующее окно:</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>
    </li>
    <li>
      <div align="justify">В поле 'Choose your zip file [Выберите файл zip]' выберите загруженный файл fullpackage.zip. </div>
    </li>

    <li>
      <div align="justify">А в  поле 'Unzip to [Распаковать в]' укажите директорию [место], куда нужно распаковать файлы. </div>
    </li>

    <li>
      <div align="justify">Нажмите кнопку 'Unzip [Распаковать]', чтобы распаковать файлы.</div>
    </li>
</ol>

<p align="justify" class="alert alert-info">Убедитесь в том, что вы задали правильные права доступа к папке, в которую нужно разархивировать файлы. Разрешения должны быть CHMOD 755 либо 777, в зависимости от конфигурации вашего сервера.</p>


<!-- Joomla CMS installation -->


<h3>Установка Joomla CMS</h3>

<h6> Проверьте выполнение всех
    подготовительных шагов
    и наличие всех требуемых программ.
</h6>

<p align="justify">Для этого, откройте браузер и пропишите путь к директории Joomla в адресной строке браузера [<i>например: http://your_domain_name/joomla</i>]. На экране  появится окно установки Joomla CMS.</p>


<h4>Configuration [Конфигурация сайта]</h4>

<p>В выпадающем меню "Select Language [Выбрать язык]" выберите язык установки Joomla.</p>

<p align="justify">
    <span class="label">Внимание:</span>
    выбирая язык в выпадающем списке "Select Language [Выбрать язык]", Вы определяете язык мастера-устоновки, а не язык будущего веб-сайта.</p>

<p align="justify">Заполните все табуляторы в разделе "Main Configuration [Основные настройки]". Обязательные для заполнения поля отмечены звездочкой *.</p>

<p align="justify">Заполните поля "Admin Email [Email администратора]", "Admin Username [Имя администратора]" и "Admin Password [Пароль
    администратора]", чтобы добавить пользователя нового веб-сайта Joomla с административными
    правами.</p>

<p align="justify" class="alert alert-danger">"Admin Email [Email администратора]", "Admin Username [Имя администратора]" и "Admin
    Password [Пароль администратора]" требуются для доступа в админ-панель веб-сайта Joomla Web. Эти данные нужно запомнить, убедитесь, что вы их храните в надёжном месте. </p>

<p>Когда все данные введены, нажмите кнопку
    <strong>Next [Далее]</strong>
    в правом верхнем  углу.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>Database [Конфигурация БД]</h4>


<p align="justify">На втором этапе установки Joomla CMS необходимо указать детали базы данных. Если они неизвестны, обратитесь к своему 
    хостинг-провайдеру.</p>

<p align="justify">Поскольку Joomla устанавливается впервые, нужно  ввести только"Host Name [Название хостинга]", "Username [Имя
    пользователя]", "Database Name [Название пустой базы данных]" и "Password [Пароль]". Остальные опции следует оставить по
    умолчанию, хотя возможны различия в зависимости от хостинг-провайдера. </p>

<p>Когда введете детали, щелкните кнопку
    <strong>Install [Установить]</strong>
    в верхнем правом углу.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>

<h4>[Overview] Обзор</h4>

<p align="justify">Установка Joomla CMS почти завершена. На данном этапе указывается, нужно ли устанавливать демо-данные Joomla. </p>

<p align="justify" class="alert alert-warning">Внимание: Демо-данные необходимы, если требуется, чтобы новый веб-сайт Joomla выглядел
    идентично демо: со всеми изображениями, текстом, а также с сохранением всех параметров настроек сайта и модулей. Для этого выберите демо-данные под названием
    "sample_theme###", где ### - это номер темы.</p>

<p align="justify">Выберите демо-данные для установки и нажмите &quot;Next&quot;, если хотите установить их. Или нажмите "None [Нет]", если вам необходим пустой веб-сайт Joomla без
    контента.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>

<p align="justify">Прокрутив ниже в данном окне, Вы увидите таблицу с данными, где  можно проверить, являются ли детали конфигурации базы данных и доступа в админ-панель действительными, и, при желании, отправить их на email.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>

<p align="justify">Также, убелиться в правильности заданных параметров установки  и проверить требование хостинг сервер на соответствие требованиям Joomla. Если Вы видите 
    красные предупреждения в "Recommended settings [Рекомендуемые настройки]", обратитесь к хостинг-провайдеру за
    дальнейшей поддержкой.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>

<p>Когда вы проверите все данные, нажмите кнопку
    <strong>Install [Установить]</strong>
    в  правом верхнем углу.
</p>

<h4>Установка Завершена</h4>


<p>Поздравляем! Вы установили Joomla.</p>
<p>Ведь это, как оказалось, совсем несложно.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>

<p align="justify" class="alert alert-danger">С целью повышения уровня безопасности использования платформы, удалите папку "Installation" из корневой директории Joomla.</p>

<p class="alert alert-info">Подсказка:
    Вы можете воспользоваться детальным видео-уроком:
    <a href="/help/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">Как установить движок Joomla 3</a>.
</p>

<p align="justify" class="alert alert-warning">Внимание: если вы выполняли полную установку "Complete Installation", можно пропустить
    разделы: "Template Installation [Установка шаблона]", "Sample data installation [Установка демо-данных]" и
    "Extensions Installation [Установка расширений]", поскольку в процессе полной установки перечисленные элементы уже были установлены автоматически.</p>


<p align="justify">Теперь можно приступить к настройке веб-сайта. Для этого, нажмите кнопку "<b>Site [Сайт]</b>",  чтобы открыть
    веб-сайт. Или "<b>Administrator</b> [Администратор]", чтобы перейти в админ-панель Joomla.
</p>