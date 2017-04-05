<h2 class="item1">Wprowadzenie (Introduction)</h2>

<h5 align="justify"> Gratulujemy zakupu szablonu Joomla! Niniejsza dokumentacja składa się z kilku części i opisuje instalację, tworzenie i ustanawianie procesu strony internetowej Joomla. </h5>
<h5 align="justify">Dołożyliśmy wszelkich starań, aby niniejsza instrukcja obsługi została przedstawiona w sposób prosty i bezpośredni. Dla ułatwienia wyszukiwania informacji, tekst instrukcji zawiera został przebudowany w różnych rozdziałach, można zobaczyć w menu po lewej stronie. Jest możliwość przejścia do dowolnej części dokumentacji, korzystając z linków w nagłówkach aktywnej zawartości.</h5>
<h5 align="justify">Zalecamy rozpocząć czytanie dokumentacji od pierwszej sekcji. </h5>
<h3>Co to jest Joomla CMS?(What is Joomla CMS?)</h3>

<p align="justify">Joomla CMS jest rozwiązaniem otwartego oprogramowania (open source) dla tworzenia stron internetowych. Szerokie możliwości systemu pozwalają na budowanie zarówno stron internetowych oraz potężnych aplikacji online. Joomla CMS nie wymaga żadnych dodatkowych umiejętności i szkolenia, aby była eksploatowana. Wszystkie niezbędne opisy teorii i podstawowych umiejętności, jeżeli będą potrzebne, można znaleźć w tej dokumentacji.</p>
<p align="justify"> Dzięki tym zaletom, w tym łatwość użytkowania i jego skalowalność, Joomla CMS stał się najbardziej popularnym dostępnym oprogramowaniem strony internetowej. <a href="http://www.joomla.org/about-joomla.html" target="_blank">Zobacz więcej</a>
</p>

<h3>Co to jest Szablon Joomla? (What is JoomlaTemplate?)</h3>

<p align="justify">Szablon Joomla jest motywem na swojej stronie internetowej oparty o platformę Joomla CMS. Inaczej mówiąc, oznacza to możliwość, aby z łatwością zmienić wygląd swojej strony Joomla instalując nowy szablon. Cały proces instalacyjny jest przeprowadzany przez kilka łatwych do czynienia kroków. Chociaż prosty, szablon Joomla jest także wyposażony we wszystkie niezbędne pliki źródłowe, które można dowolnie zmieniać. </p>
<div class="alert alert-info">
<div align="justify">Często oferowane są wiele różnych ustawień, które są dostępne z nowym szablonem, a
  ponieważ jest to oprogramowanie open source, to nie zawsze jest takie samo dla każdego dewelopera.
  Należy upewnić się, że przeczytasz tę dokumentację do szablonu, który
   jest instalowany, aby wiedzieć, jakie funkcje są dostępne dla użytkownika.</div>
</div>

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
