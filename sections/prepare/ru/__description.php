<h2 class="item2">Подготовка к процессу установки</h2>

<h6>Прежде, чем перейти к установке веб-сайта Joomla, нужно полностью подготовиться к данному процессу.
    Рекомендуется выполнить следующие  шаги:</h6>


<h4>Необходимое программное обеспечение</h4>

<p align="justify">Для полноценной работы с шаблоном Joomla мы рекомендуем установить все требуемые
    приложения. Перечень всего необходимого программного обеспечения можно найти на странице
    предпросмотра шаблона. <br>
    Требования для различных шаблонов могут варьироваться, поэтому будут перечислены только 
    основные из них:</p>

<ol class="index-list">
    <li>
      <div align="justify">Прежде всего нужны  приложения для распаковывания защищенного паролем
        архива sources_#########.zip. Можно воспользоваться архиваторами WinZip 9+ [для Windows] и
        Stuffit Expander 10+ [для системы Mac].
      </div>
    </li>
    <li>
      <div align="justify">Также может понадобиться Adobe Photoshop. Этот графический редактор используется для
        изменения исходных файлов .psd [изменения
        графического дизайна и изображения шаблона].
      </div>
    </li>
    <li>
      <div align="justify">Для редактирования исходного кода файлов шаблона нужно использовать редакторы
        кода, например, такие, как Adobe Dreamweaver, Notepad++ или Sublime Text и прочие.
      </div>
    </li>
    <li>
      <div align="justify">Чтобы загрузить файлы на хостинг сервер, вам потребуется FTP менеджер, например, такой, как
        Total Commander, FileZilla, CuteFTP и т.п.
      </div>
    </li>
</ol>


<h4>Хостинг</h4>

<p align="justify">Поскольку Joomla CMS является приложением PHP/MySQL, необходимо заранее подготовить хостинг
    сервер.</p>

<p align="justify">При наличии уже активного сервера, необходимо проверить его на соответствие <a
        href="http://www.joomla.org/technical-requirements.html" target="_blank">требованиям</a><a
        href="http://www.joomla.org/technical-requirements.html" target="_blank">
        Joomla</a>, а также на совместимость с платформой Joomla.</p>

<p align="justify"> Установить Joomla на компьютер можно с помощью локального сервера. Для
    создания локального хостинг сервера необходимо использовать программное обеспечение
    <b>WAMP</b>, <b>AppServ</b>, <b>MAMP</b> и т.п. Любое, из которых, устанавливается  через мастер-установки и совместимо с Joomla. </p>

<p align="justify">Вы можете воспользоваться следующими видео-уроками, в которых детально описывается локального
    сервера:</p>
<ul class="marked-list">
<li><a
            href="/help/how-to-install-appserv-web-development-environment.html"
            target="_blank">Как установить среду веб-разработки AppServ </a></li>
    <li><a
            href="/help/how-to-install-appserv-web-development-environment.html"
            target="_blank">Как установить среду веб-разработки</a></li>
    <li><a
            href="/help/how-to-install-appserv-web-development-environment.html"
            target="_blank">Как установить среду веб-разработки</a><a
            href="/help/how-to-install-xamp-web-development-environment.html"
            target="_blank"> XAMP </a></li>
</ul>
<h3>Технические требования для Joomla 3.x</h3>
<p>&nbsp;</p>
<table width="980" class="wikitable">
  <tbody>
    <tr>
      <th><strong>Программное обеспечение</strong></th>
      <th><strong>Рекомендовано</strong></th>
      <th><strong>Минимум</strong></th>
      <th><strong>Дополнительная информация</strong></th>
    </tr>
    <tr>
      <td>PHP (Magic Quotes GPC off)</td>
      <td>5.6 или 7 и следующие за ней версии<sup id="cite_ref-PHP_5.3.1_1-0" class="reference"><a href="https://docs.joomla.org/Technical_requirements/ru#cite_note-PHP_5.3.1-1">[1]</a></sup></td>
      <td>5.3.10 +</td>
      <td><a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="http://php.net">www.php.net</a></td>
    </tr>
    <tr>
      <td colspan="4" style="background-color:#e1e1e1;">Поддерживаемые базы данных:</td>
    </tr>
    <tr>
      <td>MySQL<sup id="cite_ref-MySQL6.0_2-0" class="reference"><a href="https://docs.joomla.org/Technical_requirements/ru#cite_note-MySQL6.0-2">[2]</a></sup> (Требует поддержки InnoDB)</td>
      <td>5.5.3 +</td>
      <td>5.1 +</td>
      <td><a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="http://www.mysql.com">www.mysql.com</a></td>
    </tr>
    <tr>
      <td>SQL Server</td>
      <td>10.50.1600.1 +</td>
      <td>10.50.1600.1 +</td>
      <td><a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="https://www.microsoft.com/en-us/server-cloud/products/sql-server/">www.microsoft.com/sql</a></td>
    </tr>
    <tr>
      <td>PostgreSQL</td>
      <td>9.1 +</td>
      <td>8.3.18 +</td>
      <td><a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="http://www.postgresql.org/">www.postgresql.org</a></td>
    </tr>
    <tr>
      <td colspan="4" style="background-color:#e1e1e1;">Поддерживаемые веб-серверы:</td>
    </tr>
    <tr>
      <td>Apache (с mod_mysql, mod_xml, и mod_zlib)<sup id="cite_ref-mod_rewrite_3-0" class="reference"><a href="https://docs.joomla.org/Technical_requirements/ru#cite_note-mod_rewrite-3">[3]</a></sup><sup id="cite_ref-PHPFileHandler_4-0" class="reference"><a href="https://docs.joomla.org/Technical_requirements/ru#cite_note-PHPFileHandler-4">[4]</a></sup></td>
      <td>2.4 +</td>
      <td>2.x +</td>
      <td><a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="http://www.apache.org/">www.apache.org</a></td>
    </tr>
    <tr>
      <td>Nginx</td>
      <td>1.8 +</td>
      <td>1.0 +</td>
      <td><a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="http://wiki.nginx.org/">wiki.nginx.org</a></td>
    </tr>
    <tr>
      <td>Microsoft IIS</td>
      <td>7</td>
      <td>7</td>
      <td><a target="_blank" rel="nofollow noreferrer noopener" class="external text" href="http://www.iis.net/">www.iis.net</a></td>
    </tr>
  </tbody>
</table>
