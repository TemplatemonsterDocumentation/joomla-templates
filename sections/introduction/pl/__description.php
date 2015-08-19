<h2 class="item1">Wstęp</h2>

<h5>Dziękujemy za zakup szablonu Joomla. Ta dokumentacja składa się z kilku części i pokazuje cały proces, jak ustawić i
    zarządzać stroną Joomla. Dołożyliśmy wszelkich starań, aby ten manual był jak najbardziej przejrzysty i łatwy w
    użyciu. </h5>


<h3>Czym jest Joomla CMS?</h3>

<p>Joomla CMS jest rozwiązaniem open source do tworzenia bogatych w treść stron internetowych. Pozwala on na tworzenie
    stron oraz skutecznych aplikacji online, i nie wymaga prawie żadnych technicznych umiejętności czy wiedzy do
    zarządzania. Wiele aspektów, wliczając w to łatwość użycia oraz elastyczność, sprawiają, że Joomla jest
    najpopularniejszy, oprogramowaniem stron internetowych.
    <a href="http://www.joomla.org/about-joomla.html" target="_blank">Dowiedz się Więcej</a>
</p>

<h3>Czym jest szablon Joomla</h3>

<p>Szablon Joomla jest nakładką na Twoją platformę Joomla CMS. Innymi słowy, możesz łatwo zmienić wygląd swojej strony
    Joomla, instalując nowy szablon w kilku prostych krokach. W swojej prostocie, szablon Joomla jest dostarczony ze
    wszystkimi potrzebnymi plikami źródłowymi, które możesz dowolnie edytować i zmieniać w odpowiadający Ci sposób.</p>

<h3>Struktura plików</h3>

<h6>Pakiet szablonu, jaki pobrałeś, składa się z kilku folderów. Sprawdźmy co zawiera każdy folder :</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Documentation</b></dt>
            <dd> zawiera pliki z dokumentacją</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd> główny plik z dokumentacją. Jesteś właśnie tutaj :)
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
            <dd> zawiera archiwum motywów Joomla, pakiet szybkiej instalacji oraz plik skryptowy.
            </dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        theme###.zip
                    </dt>
                    <dd> archiwum motywów. Zawiera wszystkie pliki z motywami. Powienien być
                        <a href="#template-installation">instalowany przez menadżera rozszerzeń Joomla</a>
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
                        <a href="#complete_install">kompletny pakiet instalacyjnjy Joomla</a>
                        z plikami silnika, motywem oraz przykładową treścią (baza danych, przykładowe obrazy)
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        unzip.php
                    </dt>
                    <dd> plik używany do rozpakowania plików z fullpackage.zip, gdy zostanie przesłany do serwera
                        hostingowego
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
            <dd> zawiera screenshoty szablonu.</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Sources</b>
            <dd> zawiera pliki źródłowe szablonu</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd> pliki źródłowe szablonu Adobe Photoshop (.psd)
                    </dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        to_the_root_folder
                    </dt>
                    <dd> zawiera przykładowe pliki z treścią, aby stworzyć stronę jako szablon live demo. Ten folder
                        powinien zostać umieszczony w katalogu głównym Joomla.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        dump.sql
                    </dt>
                    <dd> plik z danymi. Zawiera przykładową treść motywu.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        pkg_bundle.zip
                    </dt>
                    <dd> zawiera dodatkowe rozszerzenia powiązane z motywem
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
            <dd> zawiera linki, skąd różne czcionki do szablonu mogą być pobrane
            </dd>
        </dl>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                info.txt
            </dt>
            <dd> zawiera instrukcje, jak rozpakować pliki źródłowe
            </dd>
        </dl>
    </li>
</ul>