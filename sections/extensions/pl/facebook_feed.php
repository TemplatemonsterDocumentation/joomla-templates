<h3>Wtyczka TM strony Facebook (TM Facebook Page Plugin)</h3>
 
<p><strong>TM Facebook Page</strong> jest modułem, który umożliwia wyświetlanie strony Facebook na stronie internetowej:</p>

<figure class="img-polaroid">
    <p><img src="img/facebook_feed-1.jpg" alt="">
    </p></figure>
    <p>W celu skonfigurowania modułu <strong>Wtyczki TM strony Facebook</strong>, należy przejść do <strong>Rozserzenia</strong> &gt; <strong>Moduły</strong>. </p>
<figure class="img-polaroid">
    <p><img src="img/facebook_feed-3.jpg" alt="">
    </p></figure>
    <p align="justify">Należy nacisnąć przycisk &quot;<strong>Narzędzie wyszukiwania</strong>&quot; oraz wybrać <strong>Wtyczkę TM strony Facebook </strong>z filtru listy rozwijanej  &quot;- Wybierz rodzaj -&quot;. Pojawi się moduł <strong>Facebook Box</strong> .</p>
    <figure class="img-polaroid">
    <p><img src="img/facebook_feed-4.jpg" alt="">
</p></figure>
    <p>Należy kliknąc na linku tytułu modułu, żeby zostać przekierowanym do okna ustawień modułu. </p>
 <figure class="img-polaroid">
    <p><img src="img/facebook_feed-5.jpg" alt=""></p></figure>
   <p>W zakładce <strong>Moduł</strong> jest możliwość ustawienia następujących opcji:</p>
    <ol class="marked-list">
      <li> <strong>ID aplikacji Facebook (Facebook App ID)</strong> *.</li>
      <li> <strong>Adres URL strony Facebook (Facebook Page URL)</strong>.</li>
      <li> <strong>Nazwa twojej firmy (Your Company Name)</strong>.</li>
      <li> <strong>Szerokość (Width)</strong>. Szerokość widżetu w pikselach.</li>
      <li> <strong>Wysokość (Height)</strong>. Wysokość widżetu w pikselach. </li>
      <li> <strong>Pokaż twarze przyjaciół (Show Friend&rsquo;s Faces)</strong>. Włączenie tej opcji pozwala na wyświetlanie profilowych zdjęć w module.</li>
      <li> <strong>Pokaż wpisy ze strony (Show Page Posts)</strong>. Wyświetlanie wpisów z osi czasu strony .</li>
      <li> <strong>Schowaj zdjęcie na okładce (Hide Cover Photo)</strong>. Schowaj zdjęcie na okładce w nagłówku.</li>
    </ol>
<p align="justify">Pole <strong>ID aplikacji Facebook (Facebook App ID)</strong> jest wymagane. Jest to identyfikator aplikacji Facebook. Aby otrzymać identyfikator, należy otworzyć stronę internetową: <a
        href="https://developers.facebook.com/" rel="nofollow" target="_blank">https://developers.facebook.com/</a> i stworzyć aplikację dle swojej strony internetowej. </p>
<p align="justify">Wystarczy postępować zgodnie z prostymi instrukcjami, a otrzymasz identyfikatora w bardzo krótkim czasie. </p>
<h5>Instrukcja krok po kroku</h5>
        <h5>1. Zaloguj się na Facebooku (Login to Facebook)</h5>
        <p>Przed utworzeniem konta programisty, należy zalogować się do swojego konta w serwisie Facebook.</p>
<a href="https://www.facebook.com/login.php">Login to Facebook</a>
        <h5>2. Developer Account)</h5>
        <p align="justify">Będziesz potrzebować Facebook konto programisty, aby rozpocząć. Jeżeli nie masz, należy uaktualnić swoje osobiste konto Facebook na Facebook konto programisty teraz. Można pominąć ten krok, jeśli posiadasz już konto programisty.</p>
<a href="https://developers.facebook.com/async/onboarding/dialog/" rel="dialog">Tworzenie konta programisty</a>
<h5>3. Utwórz nową aplikację Facebook (Create new Facebook app)</h5>
        <p>Należy wybrać <a href="https://developers.facebook.com/apps/"><strong>Aplikacje</strong></a> w nawigacji nagłówka oraz wybrać <strong>Dodaj nową aplikację</strong> lub skorzystać z poniższego przycisku.</p>
<a href="https://developers.facebook.com/apps/async/create/platform-setup/dialog/" rel="dialog">Tworzenie nowej aplikacji Facebook</a>
   <h5>4. Wybierz platformę (Choose Platform)</h5>
        <p align="justify">Należy wybrać platformę, którą trzeba dodać. Jeżeli aplikacja jest na wielu platformach, istnieje możliwość dodania ich do swojej aplikacji Facebook później.    </p>
        <figure class="img-polaroid">
    <p><img src="img/facebook_feed-6.jpg" alt="">
</p></figure>
    <h5>5. Wybierz nazwę (Choose a Name)</h5>
    <p align="justify">Należy wybrać nazwę dla swojej aplikacji, a następnie kolejno wybrać <strong>Utwórz nowy ID aplikacji Facebook</strong>. Należy też wybrać <strong>kategorję</strong> dla swojej aplikacji. Jeśli jest tworzona wersja testowa już istniejącej aplikacji Facebook, należy wybrać aplikację, którą testujesz.</p>
    <figure class="img-polaroid">
    <p><img src="img/facebook_feed-7.jpg" alt="">
</p></figure>
    <h5>6. Postępuj zgodnie kroków Szybkiego Uruchomienia (Follow &quot;Quick Start&quot; Steps)</h5>
    <p align="justify">Kreator szybkiego uruchomienia pomoże w skonfigurowaniu aplikacji Facebook dla wybranej platformy. Można wrócić do kreatora szybkiego startu w późniejszym czasie, żeby albo kontynuować instalację albo dodać nową platformę do swojej aplikacji.</p>

<h5>7. Identyfikator aplikacji (App ID)</h5>
    <p align="justify">Twoja aplikacja będzie posiadać unikalny ID aplikacji. Będziesz korzystać z tego ID przy każdym użyciu jednego z naszych <a href="https://developers.facebook.com/docs/apis-and-sdks">SDK'ów</a> lub <a href="https://developers.facebook.com/docs/sharing/webmasters/">Otwarte tagi grafowe dla udostępniania (Open Graph tags for sharing)</a>. Można znaleźć swój identyfikator aplikacji w panelu aplikacji  <a href="https://developers.facebook.com/apps/"></a>.</p>
    <figure class="img-polaroid">
    <p><img src="img/facebook_feed-9.jpg" alt="">
</p></figure>
    <h5>8. Zabezpiecz tajemnicę swojej aplikacji (Protect your App Secret)</h5>
    <p align="justify">Facebook automatycznie generuje tajemnicę aplikacji związaną z twoją aplikacją. Tajemnica aplikacji dokonuje uwierzytelnienia wniosków składanych przez twoją aplikację z serwerami Facebooka, i powinna być traktowana jak hasło.</p>
<p align="justify">Nie należy przesyłąć tajemnicę swojej aplikacji Facebook na znacznik swojej strony internetowej; należy zachować ostrożność podczas powierzania plików zawierających tę wartość do oprogramowania sterującego źródłem, takich jak Git publiczne lub repozytorium Subversion.</p>
<h5>9. Email kontaktowy (Contact Email)</h5>
    <p align="justify">Trzeba dodać maila kontaktowego dla każdej aplikacji. Należy przejść do swojego <a href="https://developers.facebook.com/apps/">panelu aplikacji</a> i wybrać element nawigacji <strong>Ustawienia</strong> w lewym pasku bocznym i podać prawidłowy email kontaktowy.</p>
    <figure class="img-polaroid">
    <p><img src="img/facebook_feed-10.jpg" alt="">
</p></figure>
    <h5>10. Szczegóły aplikacji (App Details)</h5>
    <p>Należy wybrać szczegóły aplikacji na pasku po lewej stronie do wyświetlania, a także dodatkowe informacje na temat swojej aplikacji.</p>
    <p align="justify">Jeśli chcesz, aby aplikacja została wymieniona w centrum aplikacji (App Center), należy włączyć ustawienia App Center Listed Platform na swojej stronie internetowej lub witrynie telefonu. Można dodać ikony, promocyjne zdjęcia, i wideo. Należy upewnić się, że postępujesz zgodnie z <a href="https://developers.facebook.com/docs/games/appcenter/guidelines">Wskazówkami centrum aplikacji (App Center Guidelines)</a>, żeby zostać zatwierdzonym do wymieniania w App Center.</p>
    <figure class="img-polaroid">
    <p><img src="img/facebook_feed-11.jpg" alt="">
</p></figure>
<h5>11. Wyłącz tryb rozwoju (Disable Development Mode)</h5>
    <p align="justify">Nowe aplikacje Facebook domyślnie istnieją w trybie rozwoju. Powyższe limituje opublikowanie działań oraz powiązanych obiektów, takich jak tagowanie przyjaciela na osi czasu Facebook posiadanych przez dewelopera aplikacji.   </p>
<p align="justify">Gdy aplikacja jest gotowa do użytku publicznego, można przełączyć z trybu rozwojowego na tryb publiczny, aby zezwolić aplikacji na interakcję z kontami Facebook nie związanymi z twoją aplikacją.</p>
   <figure class="img-polaroid">
    <p><img src="img/facebook_feed-12.jpg" alt="">
</p></figure>
  
    <p>Można również skonfigurować następujące opcje dla modułu w zakładce <strong>Moduł</strong>:</p>
    <figure class="img-polaroid">
    <p><img src="img/facebook_feed-13.jpg" alt="">
</p></figure>
<ol class="marked-list">
      <li> <strong>Wyświetlaj tytuł (Show Title)</strong>. Można pokazać lub ukryć tytuł modułu na wyświetlaczu. Efekt zależy od stylu chrom w szablonie.</li>
      <li>
        <div align="justify"> <strong>Pozycjonowanie (Position)</strong>. Można wybrać pozycję modułu z listy uprzednio zdefiniowanych pozycji lub wprowadzić własną pozycję modułu, przez wpisanie nazwy w polu i naciśnięcie klawisza Enter.</div>
      </li>
      <li><strong> Status</strong>. Jeśli publikowany, moduł ten będzie wyświetlany na Frontendzie lub Backendzie twojej strony, w zależności od modułu.</li>
      <li> Data do opublikowania (Date for publishing) [<strong>Zacznij publikowanie (Start Publishing)</strong>/<strong>Zakończ publikowanie (Finish Publishing</strong>] Opcjonalna data rozpoczęcia/zakończenia publikowania modułu.</li>
      <li> <strong>Dostęp (Access)</strong>. Grupa poziomu dostępu, która może zobaczyć ten element.</li>
      <li> <strong>Kolejność (Ordering)</strong>. Należy wybrać kolejność.</li>
      <li> <strong>Język (Language)</strong>. Przypisywanie języka do tego modułu.</li>
    </ol>
<p align="justify">Zakładki <strong>Przyporządkowanie menu (Menu Assignment)</strong> &amp; <strong>Uprawnienia modułu (Module Permissions)</strong> są standardowe dla modułów Joomla. Można ustawić elementy menu dla modułu, żeby tam się wyświetlali, i zdefiniować uprawnienia.</p>
    <p align="justify">Zakładka <strong>Przyporządkowanie menu (Menu Assignment)</strong>:</p>
    <figure class="img-polaroid">
    <p><img src="img/facebook_feed-14.jpg" alt="">
</p></figure>
    <p align="justify">Zakładka <strong>Uprawnienia modułu (Module Permissions)</strong>:</p>
    <figure class="img-polaroid">
    <p><img src="img/facebook_feed-15.jpg" alt="">
</p></figure>
<p>W zakładce <strong>Zaawansowane</strong> zostaną wyświetlone następujące opcje:</p>
<figure class="img-polaroid">
    <p><img src="img/facebook_feed-16.jpg" alt="">
</p></figure>
    <ol class="marked-list">
      <li> 
        <div align="justify"><strong>Przyrostek klasy modułu (Module Class Suffix)</strong>. Jest to przyrostek stosowany do klasy CSS modułu. Pozwala to na indywidualną stylizację modułu.</div>
      </li>
      <li> <strong>Znacznik modułu (Module Tag)</strong>. Znacznik HTML dla modułu.</li>
      <li> <strong>Rozmiar Bootstrap (Bootstrap Size)</strong>. Opcja do określania, ile kolumn moduł będzie używać.</li>
      <li> <strong>Kolumny offsetowe (Offsetting columns)</strong>. Można zwiększyć lewy margines w kolumnie od wybranej liczby kolumn.</li>
      <li> <strong>Znacznik nagłówka (Header Tag)</strong>. Znacznik HTML dla nagłówka/tytułu modułu.</li>
      <li> <strong>Klasa nagłówka (Header Class)</strong>. Klasa CSS dla nagłówka/tytułu modułu.</li>
      <li> <strong>Styl modułu (Module Style)</strong>. Za pomocą tej opcji można przesłonić styl szablonu dla swojej pozycji.</li>
    </ol>
   