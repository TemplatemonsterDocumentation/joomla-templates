<h2 class="item1">Wstęp</h2>

<h5>Dziękujemy za zakup szablonu Joomla. Ta dokumentacja składa się z kilku części i pokazuje informacje dotyczące całego procesu tworzenia i utworzenia strony internetowej Joomla od podstaw. Dołożyliśmy wszelkich starań, aby ten manual był jaknajbardziej zrozumiałym oraz łatwym .</h5>


<h3>Co to Joomla CMS?</h3>

<p>Joomla CMS  to rozwiązanie opensource do tworzenia stron internetowych. Pozwala na budowanie stron internetowych i sprawnych aplikacji internetowych i nie wymaga prawie żadnych umiejętności technicznych lub wiedzy. Wiele aspektów, w tym jego łatwość obsługi i rozszerzalność, zrobiły Joomla jaknajbardziej popularnym oprogramowaniem strony internetowej. <a href="http://www.joomla.org/about-joomla.html" target="_blank">Dowiedz się więcej</a>
</p>

<h3>Co to JoomlaTemplate?</h3>

<p>Joomla Template jest motywem dla platformy Joomla CMS. Inaczej mówiąc, można łatwo zmienić wygląd strony internetowej Joomla, instalując nowy szablon w kilku prostych krokach. Przy całej swej prostocie, szablon Joomla jest wyposażony we wszystkie niezbędne pliki źródłowe i można dowolnie edytować lub rozszerzać szablon, według własnego życzenia .</p>

<h3>Struktura Szablonu</h3>

<h6>Pakiet szablonu, jaki został zakupiony, składa się z kilku folderów. Sprawdźmy, co zawiera każdy folder:</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Dokumentacja</b></dt>
            <dd> zawiera pliki dokumentacji</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd> główny plik dokumentacji szablonu. Właśnie, Państwo czytają go teraz :)
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
            <dd> zawiera archiwum z motywem Joomla, pakiet szybkiego instalowania oraz plik ze skryptem unzip.
            </dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        theme###.zip
                    </dt>
                    <dd> archiwum motywu. Zawiera wszystkie pliki motywu. Powinien być zainstalowany <a href="#template-installation">przy pomocy menedżera rozszerzeń Joomla</a>.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        fullpackage.zip
                    </dt>
                    <dd> zawiera
                        <a href="#complete_install">
                           Pakiet kompletnej inatalacji Joomla</a>
                        z plikami silnika, motywami i przykładową zawartością (pliku zrzutu bazy danych i przykładowe obrazy)
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        unzip.php
                    </dt>
                    <dd> plik służy do rozpakowywania fullpackage.zip po przesłaniu go na serwer hostingowy
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Zrzuty ekranowe</b>
            <dd> zawiera zrzuty ekranowe motywu</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Źródła</b>
            <dd> zawiera pliki przykładowej zawartości motywu</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd> pliki źrodłowe szablonu do aplikacji Adobe Photoshop (.psd)
                    </dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        to_the_root_folder
                    </dt>
                    <dd> folder z przykładowymi danymi, które są niezbędne, aby strona wygląda jak Live Demo szablonu. Zawartość tego folderu należy przesłać do głównego katalogu Joomla
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        dump.sql
                    </dt>
                    <dd> plik zrzutu bazy danych. Zawiera przykładowe dane motywu
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        pkg_bundle.zip
                    </dt>
                    <dd> Zawiera dodatkowe rozszerzenia motywu
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
            <dd> zawiera linki do pobierania czcionek motywu </dd>
        </dl>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                info.txt
            </dt>
            <dd> poradnik dla rozpakowywania plików przykładowej zawartości</dd>
        </dl>
    </li>
</ul>
