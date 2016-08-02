<h2 class="item1">Введение</h2>

<h5>Благодарим Вас за приобретение шаблона Joomla. Данная документация состоит из нескольких частей и охватывает весь
    процесс установки и настройки веб-сайта Joomla с нуля. Мы сделали все возможное, чтобы это руководство было понятным
    и удобным в использовании. </h5>


<h3>Что представляет собой Joomla CMS?</h3>

<p>Joomla CMS - это открытое программное обеспечение для создания веб-сайтов. Оно позволяет создавать веб-сайты и
    мощные онлайн приложения, а также почти не требует технических навыков или знаний в управлении. Множество
    особенностей, в том числе простота использования и расширяемость, сделали Joomla наиболее популярной программой для
    веб-сайтов.
    <a href="http://www.joomla.org/about-joomla.html" target="_blank">Детали</a>
</p>

<h3>Что такое шаблон Joomla?</h3>

<p>Шаблон Joomla - это тема для платформы Joomla CMS. Другими словами, внешний вид веб-сайта Joomla можно легко изменить
    путем установки нового шаблона, выполнив несколько несложных шагов. При всей своей простоте, шаблон Joomla содержит все
    необходимые исходные файлы, которые можно редактировать желаемым образом.</p>

<h3>Структура шаблона</h3>

<h6>Приобретенный комплект шаблона состоит из нескольких папок. Давайте ознакомимся с содержимым каждой папки:</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Documentation</b></dt>
            <dd> содержит файлы документации</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd> основной файл документации. Вы его сейчас читаете :)
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Joomla</b></dt>
            <dd> содержит архив с темой Joomla, версию для быстрой установки и файл со скриптом для разархивации.
            </dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        theme###.zip
                    </dt>
                    <dd> архив с темой. Содержит все файлы темы. Его нужно установить
                        <a href="#template-installation">с помощью менеджера расширений Joomla</a>
                    </dd>
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
                        с файлами движка, темами и демо-данными (дамп базы данных, образцы изображений)
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        unzip.php
                    </dt>
                    <dd> файл, используемый для разархивации fullpackage.zip после загрузки на хостинг сервер
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Screenshots</b>
            <dd> содержит скриншоты темы</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Sources</b>
            <dd> содержит файлы демо-данных темы</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd> исходные файлы шаблона для Adobe Photoshop (.psd)
                    </dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        to_the_root_folder
                    </dt>
                    <dd> папка с образцами данных, необходимыми, для того чтобы веб-сайт выглядел как на Демо-версии шаблона. Содержимое
                        данной папки нужно загрузить в корневую папку Joomla
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        dump.sql
                    </dt>
                    <dd> файл дампа базы данных. Вмещает демо-данные темы
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        pkg_bundle.zip
                    </dt>
                    <dd> содержит дополнительные расширения для темы
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                fonts_info.txt
            </dt>
            <dd> содержит ссылки, по которым можно скачать шрифты шаблона
            </dd>
        </dl>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                info.txt
            </dt>
            <dd> инструкция по распаковыванию файлов демо-данных</dd>
        </dl>
    </li>
</ul>
