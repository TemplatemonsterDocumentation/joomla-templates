<<<<<<< HEAD
<h2 class="item8">Заключение</h2>
<h4>Помощь и поддержка</h4>
<div align="justify"><br />
  В случае возникновения каких-либо затруднений с шаблоном <strong>Jumerix </strong>или с любым другим продуктом <a href="https://www.templatemonster.com/ru/#gref">TemplateMonster.com</a> свяжитесь с нашей командой круглосуточной поддержки.</div>
<ul class="marked-list">
  <li><a href="http://chat.template-help.com/" target="_blank">Чат онлайн поддержки </a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit"
           target="_blank">Поддержка по электронной почте</a></li>
</ul>
<h4>Документация</h4>
<h4>Documentation</h4>
<ol class="marked-list">
    <li><a href="http://docs.joomla.org/Beginners" target="_blank">Joomla! Quick start guide</a></li>
    <li><a href="http://docs.joomla.org/Category:FAQ" target="_blank">FAQ</a></li>
    <li><a href="https://developer.joomla.org/cms/documentation.html" target="_blank">Joomla! Documentation</a></li>
    <li><a href="/help/cms-blog-templates/joomla/joomla-tutorials/" target="_blank">Joomla!
            Tutorials</a></li>
</ol>
=======
<h2 class="item8">Дополнения</h2>

<p align="justify">Надеемся, что информация, изложенная в документации была доступной и понятной. Тем не
    менее в случае возникновения любых сложностей с шаблоном Joomla и наличием любых предложений по
    улучшению шаблонов или документации, свяжитесь с командой технической поддержки.</p>

<h4>Помощь и поддержка</h4>
<ul class="marked-list">
    <li><a href="http://chat.template-help.com/" target="_blank">Чат</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit"
           target="_blank">Тикет-система</a></li>
</ul>
<h4>Документация</h4>
<ul class="marked-list">
    <li><a href="http://docs.joomla.org/Beginners" target="_blank">Joomla! Руководство
            для начинающих</a></li>
    <li><a href="http://docs.joomla.org/Category:FAQ" target="_blank">Наиболее часто задаваемые
            вопросы</a></li>
    <li><a href="http://docs.joomla.org/" target="_blank">Joomla! Документация</a></li>
    <li><a href="/help/cms-blog-templates/joomla/joomla-tutorials/" target="_blank">Joomla!
            Уроки</a></li>
</ul>
<h4>Способы решения возможных проблем связанных с веб-шрифтами </h4>
<h4>Проблема с загрузкой шрифтов Google:</h4>
<ol class="index-list">
    <li>Откройте  \templates\theme****\index.php файл;</li>
    <li>
      <p>Найдите следующею строку:</p>
        <code>$doc->addStyleSheet('//fonts.googleapis.com/css?family=[---your_web_font_name_here---]');</code>
    </li>
    <li>
      <p>Замените ее на данную:</p>
        <code>$doc->addStyleSheet('//fonts.useso.com/css?family=[---your_web_font_name_here---]'.</code></li>
</ol>

<h4>Проблема с загрузкой  jQuery:</h4>
<ol class="index-list">
    <li>Откройте  \templates\theme****\index.php;</li>
    <li><p>Найдите следующею строку:</p>
        <code>&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/[---your_jquery_version---]/jquery.min.js">&lt;/script></code>
    </li>
    <li><p>Замените ее на данную:</p>
        <code>&lt;script src="//code.jquery.com/jquery-[---your_jquery_version---].min.js">&lt;/script></code>
    </li>
</ol>

<p>Для этих же целей Вы можете использовать локальную копию библиотеки jQuery.</p>

>>>>>>> c311937bdba8e3656ecdfe93dbc91037d29de47a
<h4>Joomla! Модули и расширения</h4>

<p align="justify">На сайте <a href="http://extensions.joomla.org/" target="_blank">extensions.joomla.org</a> можно скачать более 6 тысяч модулей, плагинов и компонентов, позволяющих расширять стандартный функционал платформы Joomla.</p>
<h4>Joomla! Прeдупреждение об использовании cookies</h4>

<p align="justify">По закону ЕС о Cookies Вы должны добавить на Ваш сайт модуль, который будет
    отображать предупреждение о cookies, используемых на сайте. Мы рекомендуем следующие
    модули:</p>
<ul class="marked-list">
  <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/24689"
           target="_blank">Cookie Accept</a></li>
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/21043"
           target="_blank">EU e-Privacy Directive</a></li>
</ul>
<h4>Дополнительные ссылки:</h4>
<ul class="marked-list">
    <li><a href="http://www.joomla.org/technical-requirements.html" target="_blank">Технические
            требования</a></li>
    <li>
        <a href="http://opensourcematters.org/index.php?option=com_content&amp;view=article&amp;id=56&amp;Itemid=155"
           target="_blank">Лицензия и использование</a></li>
</ul>
<<<<<<< HEAD
<h4>User-блоки</h4>

<p align="justify" class="alert alert-warning">
В большинстве наших шаблонов содержимое модулей представлено в виде подключения определенного модуля или позиции, например, &quot;{loadmodule articles_single, About us}&quot;. Для предотвращения возникновения ошибки 404 на сайте, убедитесь, что название подключаемого модуля совпадает с тем, которое было указано при подключении. В данном случае модуль &quot;About us&quot; должен быть в состоянии published и не содержать более одного пробела в названии.
    Вы можете получить детальную информацию про loadmodule/loadposition на <a href="https://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank">этом сайте</a>.</p>
=======
>>>>>>> c311937bdba8e3656ecdfe93dbc91037d29de47a
<h4>Валидация</h4>

<p align="justify" class="alert alert-info">
    В наших шаблонах мы придерживаемся семантических правил написания кода HTML-разметки и CSS-стилей. Однако,
    некоторые ошибки все же могут возникать при W3C валидации. Создание 100-процентно правильного кода, согласно
    стандартам консорциума W3C, ограничивает использование современных технологий создания сайтов, таких как
    спецификация CSS3 и разметка HTML5. Целью нашей компании является предоставление богатого пользовательского
    опыта с высококачественными шаблонами, и иногда нам приходится нарушать некоторые правила.
</p>