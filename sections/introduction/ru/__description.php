<h2 class="item1">Введение</h2>

<h5 align="justify">Благодарим Вас за приобретение шаблона Joomla. Данная документация состоит из нескольких частей, в которых детально описывается  
    процесс установки, настройки и администрирования веб-сайта Joomla. </h5>
<h5 align="justify">Мы сделали все возможное, что бы информация была изложена в простой и доступной форме. Для удобства использования текст руководства был поделен на главы. В меню слева, Вы можете увидеть содержание данной документации. При желании можно перейти к любой части документации, воспользовавшись активными ссылками заголовков. </h5>
<h5 align="justify">Изучение документации рекомендуется начать с первого раздела.</h5>
<h3>Что представляет собой Joomla CMS?</h3>
<p align="justify">Joomla CMS – это открытое программное обеспечение для построения веб-сайтов. Оно позволяет создавать веб-сайты и
мощные онлайн-приложения. Для создания сайтов с Joomla CMS не требуется почти никаких технических навыков или знаний в сфере управлении сайтами. Все необходимые базовые навыки и знания будут детально описаны в этой документации, так что любой  неподготовленный пользователь, в последствии, сможет с успехом пользоваться всеми возможностями платформы Joomlа. </p>
<p align="justify">Множество
  особенностей, в том числе простота в использовании и расширяемость функционала системы, сделали Joomla популярной программой для создания
  веб-сайтов. Подробную информацию Вы сможете найти <a href="http://www.joomla.org/about-joomla.html" target="_blank">здесь</a>. 
</p>
<div class="alert alert-info">
<div align="justify">
  <p>Как правило, к каждому новому шаблону добавляются новые возможности, происходит это потому, как Joomla является программным обеспечением с открытыми исходными кодами.
    Поэтому, для полного ознакомления с возможностями устанавливаемого шаблона, желательным является прочтение  всей документации, составленной специально для этого шаблона.</p>
</div>
</div>

<h3>Что такое шаблон Joomla?</h3>

<p align="justify">Шаблон Joomla – это тема для сайта созданного на платформе Joomla CMS. Другими словами, внешний вид веб-сайта Joomla можно  изменять
    в несколько несложных  шагов, просто установив новый шаблон.  Шаблон Joomla содержит все
    необходимые исходные файлы, которые, при желании, можно редактировать желаемым образом.</p>

<h3>Структура шаблона</h3>

<h6>Приобретенный комплект шаблона состоит из нескольких папок.  Подробно рассмотрим содержание каждой папки:</h6>

<ul class="files_structure">
    <li class="folder">
        <div align="justify">
          <dl class="inline-term">
            <dt>
              <i class="fa fa-folder"></i>
              <b>Documentation</b></dt>
            <dd> содержит файлы документации;</dd>
          </dl>
          <ul>
            <li class="file">
              <dl class="inline-term">
                <dt>
                  <i class="fa fa-file"></i>
                  documentation.html
                </dt>
                <dd> основной файл документации, который Вы сейчас читаете;</dd>
              </dl>
            </li>
          </ul>
        </div>
    </li>
    <li class="folder">
        <div align="justify">
          <dl class="inline-term">
            <dt>
              <i class="fa fa-folder"></i>
              <b>Joomla</b></dt>
            <dd> это архив с темой Joomla, версия для быстрой установки и файл со скриптом, необходимым для разархивации;</dd>
          </dl>
          <ul>
            <li class="file">
              <dl class="inline-term">
                <dt>
                  <i class="fa fa-file"></i>
                  theme###.zip
                </dt>
                <dd> архив с темой. В нем содержатся все  файлы темы. Устанавливается
                  <a href="#template-installation">с помощью менеджера расширений Joomla</a>;</dd>
              </dl>
            </li>
            <li class="file">
              <dl class="inline-term">
                <dt>
                  <i class="fa fa-file"></i>
                  fullpackage.zip
                </dt>
                <dd> представляет собой
                  <a href="#complete_install">
                    комплект для полной установки Joomla
                  </a>
                  с файлами движка, темы и демо-данными [дамп базы данных, образцы изображений];
                </dd>
              </dl>
            </li>
            <li class="file">
              <dl class="inline-term">
                <dt>
                  <i class="fa fa-file"></i>
                  unzip.php
                </dt>
                <dd> файл, используемый для разархивации fullpackage.zip после загрузки на хостинг сервер;</dd>
              </dl>
            </li>
          </ul>
        </div>
    </li>
    <li class="folder">
        <div align="justify">
          <dl class="inline-term">
            <dt>
              <i class="fa fa-folder"></i>
              <b>Screenshots</b>
            <dd> содержит скриншоты данной темы;</dd>
          </dl>
        </div>
    </li>
    <li class="folder">
        <div align="justify">
          <dl class="inline-term">
            <dt>
              <i class="fa fa-folder"></i>
              <b>Sources</b>
            <dd> вмещает в себя файлы демо-данных темы:</dd>
          </dl>
          <ul>
            <li class="folder">
              <dl class="inline-term">
                <dt>
                  <i class="fa fa-folder"></i>
                  psd
                </dt>
                <dd> исходные файлы шаблона для Adobe Photoshop [.psd];
                </dd>
              </dl>
            </li>
            <li class="folder">
              <dl class="inline-term">
                <dt>
                  <i class="fa fa-folder"></i>
                  to_the_root_folder
                </dt>
                <dd> папка с образцами всех данных, необходимых, для того чтобы веб-сайт выглядел идентично демо-версии шаблона. Все содержимое
                  данной папки необходимо загрузить в корневую директорию Joomla;</dd>
              </dl>
            </li>
            <li class="file">
              <dl class="inline-term">
                <dt>
                  <i class="fa fa-file"></i>
                  dump.sql
                </dt>
                <dd> файл дампа базы данных. Вмещает в себя все демо-данные для этой темы;</dd>
              </dl>
            </li>
            <li class="file">
              <dl class="inline-term">
                <dt>
                  <i class="fa fa-file"></i>
                  pkg_bundle.zip
                </dt>
                <dd> содержит дополнительные расширения для темы;</dd>
              </dl>
            </li>
          </ul>
        </div>
    </li>
    <li class="file">
        <div align="justify">
          <dl class="inline-term">
            <dt>
              <i class="fa fa-file"></i>
              fonts_info.txt
            </dt>
            <dd> содержит ссылки, по которым можно загрузить шрифты, используемые в шаблоне;
            </dd>
          </dl>
        </div>
    </li>
    <li class="file">
        <div align="justify">
          <dl class="inline-term">
            <dt>
              <i class="fa fa-file"></i>
              info.txt
            </dt>
            <dd> инструкция по разархивации файлов демо-данных.</dd>
          </dl>
        </div>
    </li>
</ul>