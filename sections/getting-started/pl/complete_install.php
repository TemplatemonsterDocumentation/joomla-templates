<h3>Kompletna Instalacja</h3>

<p>Nie mam strony Joomla i chcę ją zainstalować od początku. </p>

<p>Używając tej metody otrzymasz Joomla CMS, szablon Joomla, przykładową treść, oraz wszystkie rozszerzenia
    zainstalowane.</p>

<!-- Creating database -->


<h3>Tworzenie Bazy Danych</h3>

<p>Kiedy skończysz przesyłać pliki do serwera hostingowego, możesz zacząć przygotowywać nową bazę danych dla swojej
    strony Joomla. Możesz stworzyć nową bazę danych przy użyciu narzędzi dostępnych w panelu kontrolnym swojego
    hostingu, (
    <i>zazwyczaj PhpMyAdmin</i>
    ).
</p>

<h6>Z narzędziem phpMyAdmin bedziesz w stanie stworzyć nowa bazę danych w 3 prostych krokach: (sprawdź slajdy
    poniżej)</h6>

<ol class="index-list">
    <li>Kliknij przycisk Baza Danych (ang. Database) z górnego menu nawigacyjnego, aby przejść do listy baz danych </li>

    <li>Podaj nazwę bazy danych w polu "Stwórz nową bazę danych" (ang. Create new database) </li>

    <li>Kliknij przycisk Stwórz (ang. Create) po prawej stronie</li>
</ol>

<p>Twoja baza danych jest widoczna w liście baz danych. Kliknij na jej nazwę, aby przejść do bazy danych</p>

<div class="owl-carousel">
    <div class="item">
        <p>1. Kliknij przycisk Baza Danych (ang. Database), aby przejść do listy baz danych</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Podaj nazwę bazy danych </p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Kliknij przycisk Stwórz (ang. Create)</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. Twoja baza danych jest widoczna w liście baz danych. Kliknij na jej nazwę, aby przejść do bazy danych.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>


<p>Możesz też sprawdzić szczegółowy video tutorial na
    <a href="/help/how-to-create-a-database.html">Jak stworzyć bazę danych</a>
</p>

<p class="alert alert-info">Jeśli masz jakieś problemy z utworzeniem bazy danych, skontaktuj się z dostawcą swojego
    hostingu w celu uzyskania pomocy. </p>


<!-- Uploading files -->

<h3>Przesyłanie i rozpakowanie</h3>

<p class="">Aby zacząć pracę z Joomla, musisz przesłać pliki do swojego serwera hostingowego. Można tego dokonać przy
    użyciu menadżera plików w hostingu lub osobnego FTP managera.</p>

<ol class="index-list">
    <li>Otwórz pakiet z szablonem i wejdź do folderu 'joomla'</li>

    <li>Wybierz 'unzip.php' oraz 'fullpackage.zip' i prześlij je do swojego serwera(
        <a href="/help/how-upload-files-server-2.html" target="_blank">Jak przesłać pliki do serwera.</a>
        )
    </li>
    <li>Podaj scieżkę do pliku 'unzip.php' na Twoim serwerze (
        <i class="muted">http://your_domain_name/unzip.php</i>
        ) w
        <abbr title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc.">przeglądarce</abbr>.
    </li>

    <li><p>Powinieneś zobaczyć następujący widok:</p>


        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>

    </li>

    <li>W oknie 'Wybierz plik zip' (ang. Choose your zip file) wybierz przesłany plik fullpackage.zip. </li>

    <li>W 'Wypakuj do' (ang. Unzip to) wybierz folder, do którego chcesz wypakować pliki. </li>

    <li>Kliknij 'Wypakuj' (ang. Unzip), aby kontynuować.</li>
</ol>

<p class="alert alert-warning">Upewnij się, że ustaliłeś odpowiednie uprawnienia w folderze, do którego wypakowujesz
    pliki. Uprawnienia powinny być CHMOD 755 lub 777, w zależności od ustawień serwera. </p>


<!-- Joomla CMS installation -->


<h3>Instalacja Joomla CMS</h3>

<p> Upewnij się, że wykonałeś wszystkie
    <a href="#prepare">kroki</a>
    i masz wszystko co wymagane.
</p>

<p>Otwórz przeglądarkę i podaj ścieżkę do folderu Joomla w pasku adresu(
    <i>np http://your_domain_name/joomla</i>
    ). Powinieneś zobaczyć ekran instalacyjny Joomla CMS:
</p>


<h4>Konfiguracja </h4>


<p> Używając pola "Wybierz Język" (ang. Select Language) wybierz język instalacji Joomla.</p>

<p>
    <span class="label">Pamiętaj:</span>
    "Select Language" pozwala na wybranie języka instalacji Joomla. Nie będzie miało wpływu na język Twojej strony
    internetowej.
</p>

<p>Musisz wypełnić wszystkie pola w "Główna Konfiguracja" (ang. Main Configuration). Wymagane pola zaznaczone są
    gwiazdką *.</p>

<p>Wypełnij "Admin Email", "Admin Username" oraz "Admin Password" w odpowiedniej kolumnie, aby stworzyć nowego
    użytkownika Joomla z uprawnieniami administracyjnymi.</p>

<p class="alert alert-danger">"Admin Email", "Admin Username" oraz "Admin Password" są wymagane do dostępu do backendu
    Twojej strony Joomla
    <abbr title="Joomla Administration Panel that is used to work with Web site content">backend</abbr>. Zachowaj je w
    tajemnicy.
</p>

<p>Po skończeniu kliknij przycisk
    <strong>Dalej</strong>
    (ang. Next) w prawym górnym rogu, aby kontynuować.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>


<h4>Baza Danych</h4>


<p>W drugim kroku instalacji Joomla CMS, musisz wprowadzić dane swojej bazy danych. Jeśli nie jesteś czegoś pewien,
    skontaktuj się z dostawcą hostingu.</p>

<p>Jako, że instalujesz Joomla od początku, musisz podać "Nazwę Hosta" (ang. Host Name), "Nazwę Użytkownika" (ang.
    Username), "Nazwę Bazy Danych" (ang. Database Name) oraz "Hasło" (ang. Password). Zazwyczaj możesz zostawić inne
    opcje jako domyślne. Oczywiście, mogą wystapić różnice, w zależności od Twojego dostawcy hostingu. </p>


<p>Gdy skończysz, kliknij przycisk
    <strong>Instalacja</strong>
    (ang. Install) w prawym górnym rogu, aby kontynuować.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>


<h4>Przegląd</h4>


<p>Prawie skończyłeś z instalacją Joomla CMS. W Przeglądzie musisz wybrać czy chcesz instalować Przykładowe dane
    Joomla. </p>

<p class="alert alert-info">Pamiętaj: Przykładowe Dane są wymagane, jeśli chcesz, aby Twoja strona internetowa Joomla
    wyglądała jak szablon live demo, ze wszystkimi obrazkami, przykładowym tekstem oraz skonfigurowanymi modułami. Aby
    Twój szablon wyglądał jak strona live demo, wybierz pakiet przykładowych danych "sample_theme###" gdzie ### oznacza
    numer Twojego szablonu.</p>

<p>Wybierz pakiet z Przykładowymi danymi, który chcesz zainstalować, lub wybierz "Brak" (ang. None), jeśli chcesz
    ustawić czystą stronę Joomla, bez treści.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>


<p>Poniżej możesz sprawdzić, czy konfiguracja bazy danych oraz dane dostępowe do panelu administracyjnego są prawidłowe,
    jak również wysłać je na swój adres mailowy</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>


<p>Możesz również sprawdzić ustawienia instalacji i porównać, czy Twój serwer hostingowy spełnia wymagania Joomla. Jeśli
    masz jakieś czerwono podkreślone pola w sekcji "Recommended settings", skontaktuj się z dostawcą hostingu po dalsze
    instrukcje.</p>

<p>Gdy skończysz, kliknij przycisk
    <strong>Instalacja</strong>
    (ang. Install) w prawym górnym rogu, aby kontynuować.
</p>
<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>


<h4>Instalacja Zakończona</h4>


<p>Gratulacje! Z powodzeniem zainstalowałeś Joomla CMS.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>


<p class="alert alert-danger">Ze względów bezpieczeństwa, wykasuj folder "Installation" z głównego katalogu Joomla.</p>

<p class="alert alert-info">
    <span class="label label-success">Tip:</span>
    Możesz sprawdzić video tutorial
    <i></i>
    <a href="/help/joomla-3-0-how-to-install-joomla-engine.html">Jak zainstalować Joomla 3</a>
</p>

<p class="alert alert-warning">Pamiętaj: jeśli skończyłeś sekcję "Instalacja Zakończona" możesz pominąć następne sekcje
    "Instalacja Szablonu", "Instalacja Przykładowych Danych" oraz "Instalacja Rozszerzeń", jako że masz już te elementy
    zainstalowane.</p>


<p>Możesz teraz przejść do konfiguracji swojej strony bazowanej na Joomla CMS. Kliknij przycisk "<b>Strona</b>" (ang.
    Site), aby zobaczyć swoją stronę lub "<b>Administrator</b>", aby zobaczyć Joomla backend.
</p>