<h3>Instalacja Przykładowych Danych</h3>

<p>Przykładowe dane służą temu, aby Twoja strona Joomla wyglądała jak strona szablonu
    live demo. Zawiera przykładowe artykuły, obrazki, ustawienia modułów, ustawienia
    strony itd. Jeśli nie planujesz używania przykładowych obrazków lub jakiejkowliek
    innej przykładowej treści, prosimy ominąć ten krok. </p>

<p>Aby zainstalować przykładowe dane, musisz wykonać dwa proste kroki.</p>

<h4>Prześlij przykładowe obrazki.</h4>

<p>Aby przesłać przykładowe obrazki, otwórz folder pakietu szablonu, przejdź do folderu
    "sources". Znajdziesz tam folder "to_the_root_directory". Zawiera on pliki, które
    trzeba umieścić w folderze instalacyjnym Joomla. Prosimy użyc menadżera plików, aby
    przesłać pliki do swojego serwera.</p>

<h4>Import pliku SQL.</h4>

<p>Ostatnim i najważniejszym krokiem istalacji przykładowych danych jest import pliku
    SQL. Plik SQL jest zestawieniem przykładowej bazy danych, wszystkie dane strony
    Joomla sa w nim zawarte. Plik SQL może być imoprtowany przy użyciu narzędzia do
    zarządzania bazą danych (phpMyAdmin). Plik SQL szablonu - "dump.sql" znajduje się w
    folderze "sources" pakietu szablonu. </p>


<p class="alert alert-danger">Prosimy <b>NIE</b> importować pliku SQL, jeśli masz działająca stronę w Internecie, jako
    że
    to całkowicie zamieni bazę danych Twojej strony, i wszelkie dane zostaną stracone.</p>
<p class="alert alert-danger">Uwaga: przed importem pliku SQL upewnij się, że table prefix bazy danych pasuje do table
    prefix w pliku SQL.</p>
<p>Możesz sprawdzić table prefix bezpośrednio w bazie danych przy użyciu narzędzia do
    zarządzania bazą danych. Sprawdź nazwy tabel. Prefix jest ciągiem symboli przed
    nazwą tabeli. (
    <i>np. tabela "jos_assets", prefix to "jos_"</i>
    ). Możesz również
    znaleźć prefix bazy danych w pliku "configuration.php" w folderze instalacyjnym
    Joomla. Poszukaj linijki 19:</p> <code>public $dbprefix = 'jos_';</code><p> (
    <i>gdzie
        prefix jest "jos_"
    </i>
    )
</p>

<p>Jeśli table prefixes nie pasują, otwórz plik "dump.sql" swoim edytorem kodu, i przy
    użyciu narzędzia Search &amp; Replace (CTRL+F lub CTRL+H) zamień "jos_" table prefix
    (
    <i>używany w pliku SQL</i>
    ) z tym pasującym do Twojej bazy danych. Możesz zobaczyć
    szczegółowy video tutorial <a
        href="/help/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">jak zmienić prefix bazy danych w pliku SQL</a>.
</p>

<h6>Teraz możesz imoprtować ten plik SQL do swojej bazy danych. <br>
    Aby importować przykładowe dane do swojej bazy danych, wykonaj te proste kroki:
    (sprawdź slajdy poniżej)</h6>

<ol class="index-list">
    <li><p>Wybierz bazę danych z listy w lewej kolumnie w narzędziu phpMyAdmin</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Kliknij "Import" z górnego menu nawigacyjnego</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Kliknij "Wybierz plik" (ang. Choose file) i znajdź plik the dump.sql w folderze
            "sources" w pakiecie szablonu</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Kliknij "Dalej" (ang. Go) aby zacząć imoprtować przykładowe dane</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-info">Możesz sprawdzić szczegółowy tutorial <a
        href="/help/phpmyadmin-how-to-import-sample-data-dump-file.html"
        target="_blank">jak importować plik SQL używając narzędzia phpMyAdmi</a></p>