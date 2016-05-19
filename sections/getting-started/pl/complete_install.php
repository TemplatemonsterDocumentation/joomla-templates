<h3>Kompletna instalacja</h3>

<p>Jeśli nie posiadasz strony internetowej Joomla i chcesz zainstalować ją od zera, ten poradnik jest dla Ciebie. </p>

<p>Ta metoda umożliwia zainstalowanie silnika Joomla CMS, szablonu Joomla, przykładowe dane i wszystkie niezbędne rozszerzenia.</p>

<!-- Creating database -->

<h3>Tworzenie bazy danych</h3>

<p>Po zakończeniu przesyłania plików na serwer hostingowy, należy przygotować nową bazę danych dla swojej strony internetowej Joomla. Powinna ona zostać utworzona za pomocą narzędzia do zarządzania bazami danych na Hosting CPanel
 (<i>z reguły, to jest PhpMyAdmin</i>).
</p>

<h6>Przy pomocy phpMyAdmin, można utworzyć nową bazę danych w 3 proste etapy (proszę sprawdzić następujące slajdy):</h6>

<ol class="index-list">
    <li>W celu uzyskania dostępu do listy baz danych, w górnym menu nawigacyjnym należy nacisnąć przycisk "Baza danych".</li>

    <li>Należy wprowadzić nazwę bazy danych w polu "Utwórz nową bazę danych". </li>

    <li>Zatem należy nacisnąć przycisk po prawej stronie "Utwórz".</li>
</ol>

<p>Baza danych pojawi się na liście. Należy kliknąć na nazwę bazy danych w celu uzyskania dostępu.</p>

<div class="owl-carousel">
    <div class="item">
        <p>1. Należy otworzyć kartę "Baza danych" w celu uzyskania dostępu do listy baz danych:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Należy wprowadzić nazwę bazy danych:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Należy nacisnąć przycisk "Utwórz":</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. Baza danych pojawi się na liście. Należy kliknąć na nazwę bazy danych w celu uzyskania dostępu:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">Można również sprawdzić wideo-tutorial:
    <a href="/help/how-to-create-a-database.html" target="_blank">Jak utworzyć bazę danych</a>.
</p>

<p>Jeżeli występują jakiekolwiek problemy tworzenia bazy danych, należy skontaktować się z dostawcą usług hostingowych w celu uzyskania pomocy.</p>

<!-- Uploading files -->

<h3>Przesyłanie i Rozpakowywanie</h3>

<p>Aby rozpocząć pracę z Joomla, należy przesłać pliki na serwer hostingowy. Można to zrobić za pomocą Menedżera Plików swojego Hosting cPanel lub za pomocą klienta FTP.</p>

<ol class="index-list">
    <li>Należy otworzyć szablon i wejść do folderu 'joomla'.</li>

    <li>Należy wybrać pliki 'unzip.php' oraz 'fullpackage.zip' i przesłać je na serwer (<a href="/help/how-upload-files-server-2.html" target="_blank">Jak przesłać pliki na serwer</a>).
    </li>
    <li>Należy wprowadzić przejście do pliku 'unzip.php' na serwerze (<i class="muted">http://your_domain_name/unzip.php</i>) w pasku adresowym szablonu <abbr
            title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari, etc."></abbr>.
    </li>

    <li>
        <p>Pojawi się następujące okno:</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>
    </li>
    <li>W polu 'Wybierz plik zip', należy wybrać przesłany plik fullpackage.zip. </li>

    <li>W polu 'Rozpakuj do', należy wybrać folder do rozpakowania plików. </li>

    <li>Należy nacisnąć przycisk "Rozpakuj", aby rozpakować pliki.</li>
</ol>

<p class="alert alert-info">Ustaw odpowiednie uprawnienia do folderu, do którego można rozpakować pliki. Uprawnienia powinny być CHMOD 755 i 777, w zależności od konfiguracji serwera.</p>


<!-- Joomla CMS installation -->


<h3>Instalacja Joomla CMS</h3>

<h6>Prosimy upewnić się, że zostały zakończone wszystkie czynności przygotowawcze i wszelkie niezbędne oprogramowanie zostało zainstalowane.</h6>

<p>Należy otworzyć przeglądarkę i wpisać ścieżkę do folderu Joomla w pasku adresowym przeglądarki (<i>na przykład, http://your_domain_name/joomla</i>). Pojawi się okno instalacji Joomla CMS:
</p>


<h4>Konfiguracja strony internetowej</h4>

<p>W rozwijanym menu "Wybierz język", należy wybrać język instalacji Joomla.</p>

<p>
    <span class="label">Uwaga:</span>
    w menu rozwijanym "Wybierz język" można wybrać tylko język dla procesu instalacji Joomla. To ustawienie nie będzie miało zastosowania dla języka strony.</p>

<p>Należy wypełnić wszystkie pola formularza w sekcji "Ustawienia główne". Wymagane pola są oznaczone gwiazdką (*).</p>

<p>Należy wypełnić pola: "E-mail administratora", "Nazwa administratora" oraz "Hasło administratora" w prawej kolumnie, w celu utworzenia nowego użytkownika z prawami administratora na stronie internetowej Joomla.</p>

<p class="alert alert-danger">"E-mail administratora", "Nazwa administratora" oraz "Hasło administratora" są konieczne dla dostępu do panelu administratora strony internetowej Joomla. Prosimy zapisać je w bezpiecznym miejscu. </p>

<p>Po wprowadzeniu wszystkich danych, należy nacisnąć przycisk 
    <strong>Następny</strong> w prawym górnym rogu:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>Konfiguracja bazy danych</h4>


<p> Na drugim etapie instalacji Joomla CMS, trzeba wprowadzić swoje szczegóły bazy danych. Jeżeli nie są Państwo pewni, należy skontaktować się z dostawcą usług hostingowych, aby uzyskać poprawne szczegóły.</p>

<p>Ponieważ Joomla jest instalowana od podstaw, należy po prostu wpisać "Nazwa hosta", "Nazwa użytkownika", "Nazwa bazy danych" oraz "Hasło". Można pozostawić inne opcje z domyślnymi wartościami. Istnieją jednak pewne różnice w zależności od dostawcy usług hostingowych. </p>

<p>Po wprowadzeniu szczegółów, należy nacisnąć przycisk 
    <strong>Instalowanie</strong>:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>

<h4>Przegląd</h4>

<p>Instalacja Joomla CMS jest już prawie zakończona. Na etapie "Przegląd" należy wybrać, czy trzeba zainstalować dane przykładowe Joomla czy nie.</p>

<p class="alert alert-warning">Uwaga: Dane Przykładowe są konieczne, aby strona internetowa wygląda dokładnie tak jak w szablonie Live Demo: wszystkie przykładowe obrazy, teksty i ustawienia modułu. Aby zaimportować dane przykładowe, należy wybrać przykładowe dane z tytułem "sample_theme###", ### to numer motywu.</p>

<p>Należy wybrać dane przykładowe dla instalacji lub nacisnąć "Żadne", jeżeli nie trzeba instalować przykładowe dane dla swojej strony Joomla:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>

<p>Poniżej można sprawdzić, czy konfiguracja bazy danych oraz szczegóły dostępu do panelu administracyjnego są prawidłowe, a zatem trzeba wysłać je na swój adres e-mail:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>

<p>Ponadto można sprawdzić ustawienia instalacji, a także, czy Twój serwer usług hostingowych odpowiada wymaganiom Joomla. Jeżeli są jakiekolwiek czerwone pola powiadomień w sekcji "Zalecane ustawienia", należy skontaktować się z dostawcą usług hostingowych w celu uzyskania pomocy:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>

<p> Po zakończeniu należy kliknąć przycisk
    <strong>Instalowanie</strong>
    w prawym górnym rogu, aby kontynuować.
</p>

<h4>Instalacja zakończona</h4>


<p> Gratulacje! Joomla CMS została pomyślnie zainstalowana:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>

<p class="alert alert-danger"> Ze względu bezpieczeństwa, należy usunąć katalog "Instalacja" z głównego katalogu Joomla.</p>

<p class="alert alert-info">Hint:
    Można sprawdzić szczegółowy wideo tutorial <a href="/help/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">Jak zainstalować silnik Joomla 3</a>
</p>

<p class="alert alert-warning">Uwaga: Jeżeli kompletna instalacja była przepromadzona, można pominąć następne sekcje "Instalacja szablonu", "Instalacja przykładowych danych" oraz "Instalacja rozszerzeń", o ile wszystkie te elementy zostały już zainstalowane.</p>


<p>Teraz można przejść do konfiguracji swojej strony internetowej na podstawie Joomla CMS. Należy nacisnąć przycisk “<b>Strona</b>”, by otworzyć swoją stronę internetową lub nacisnąć przycisk
 “<b>Administrator</b>", w celu uzyskania dostępu do panelu administratora Joomla.
</p>
