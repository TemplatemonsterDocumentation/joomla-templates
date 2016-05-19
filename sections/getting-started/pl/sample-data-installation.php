<h3>Instalacja Przykładowych Danych</h3>

<p>Przykładowe dane są wykorzystywane, żeby strona internetowa Joomla wyglądała tak samo jak Live Demo. Zawierają przykładowe artykuły, obrazy, ustawienia modułów, ustawienia strony internetowej, itp. Jeśli nie ma konieczności korzystania z przykładowych obrazów ani innej zawartości przykładowej, należy pominąć ten krok.</p>

<p>Instalacja przykładowych danych obejmuje dwa proste etapy.</p>

<h4>Przesyłanie przykładowych obrazów</h4>

<p>W celu przesłania przykładowych obrazów, należy otworzyć pakiet szablonu i przejść do folderu "sources". Tutaj można znależć "to_the_root_directory". Zawiera pliki, które powinny być przesłane do głównego katalogu instalacji Joomla. Aby przesłać pliki na swój serwer, należy użyć Menedżera Plików swojego Hostingowego cPanel.</p>

<h4>Importowanie plików SQL</h4>

<p>Ostatnim i najważniejszym etapem instalacji przykładowych danych jest importowanie plików SQL.
    Plik SQL jest plikiem zrzutowym bazy danych, który zawiera wszystkie dane strony internetowej Joomla. Plik SQL może być importowany za pomocą narzędzia do zarządzania bazą danych (phpMyAdmin).
    Plik SQL szablonu "dump.sql" znajduje się w folderze "sources". </p>


<p class="alert alert-danger">Prosimy <b>NIE</b> importować plik SQL do bazy danych, jeżeli Państwo posiadają stronę internetową live, ponieważ ona całkowicie zastąpi zawartość Waszej bazy danych, a wszystkie dane Waszej strony internetowej zostaną utracone.</p>

<p class="alert alert-danger">Uwaga: przed zaimportowaniem pliku SQL, należy upewnić się, że prefiks tabeli bazy danych odpowiada prefiksu tabeli w pliku SQL.</p>

<p>Można sprawdzić prefiks tabeli bezpośrednio w bazie danych za pomocą narzędzia zarządzania bazą danych. Należy zwrócić uwagę na nazwy tabel. Prefiks to zestaw symboli przed nazwami tabel (<i>na przykład, w tabeli "jos_assets" prefiksem jest "jos_"</i>).
    Można również dowiedzieć się o prefiksu tabel w pliku "configuration.php" w folderze głównym strony internetowej.
    Linia 19: </p><code>public $dbprefix = 'jos_';</code> <p>(<i>prefiksem jest "jos_"</i>).
</p>

<p>Jeżeli prefiks tabeli jest inny, należy otworzyć plik "dump.sql" w dowolnym edytorze kodu. Przy pomocy przycisku 
&quot;Znajdź i zamień&quot; (skrót CTRL+F Lub CTRL+H), należy wymienić prefiks tabeli "jos_" (<i>jest używany w pliku SQL
</i>) na prefiks swojej bazy danych. Można również sprawdzić szczegółowy wideo-tutorial, który pokaże <a
        href="/help/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">Jak zmienić prefiks bazy danych w pliku SQL</a>.
</p>

<h6>A teraz trzeba zaimportować plik SQL do bazy danych. <br>Aby zaimportować przykładową treść do bazy danych, należy wykonać następujące kroki (prosimy sprawdzić poniższe slajdy):</h6>

<ol class="index-list">
    <li><p>W lewej kolumnie w narzędziu phpMyAdmin, należy wybrać bazę danych z listy baz danych:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Należy kliknąć przycisk "Importowanie" w górnym menu nawigacyjnym:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Należy kliknąć "Wybierz plik" i odszukać plik dump.sql w pakiecie szablonu w katalogu "polecenia":</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Należy nacisnąć przycisk "Idź", aby rozpocząć importowanie przykładowych danych:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-info">Można również sprawdzić szczegółowy wideo-tutorial na stronie <a
        href="/help/phpmyadmin-how-to-import-sample-data-dump-file.html"
        target="_blank">jak zaimportować plik SQL przy użyciu narzędzia phpMyAdmin</a>.
</p>
