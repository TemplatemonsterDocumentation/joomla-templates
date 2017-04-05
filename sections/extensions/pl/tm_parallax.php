<h3>Moduł TM Paralaksa (TM Parallax Module)</h3>

<p><strong>TM Paralaksa</strong> jest modułem, który używa skryptu RD Parallax do implementacji funkcji paralaktycznej w szablonie. </p>
<figure class="img-polaroid">
<p> <img src="img/tm-parallax-20.jpg" alt=""></p></figure>
<p align="justify">Moduł będzie teraz dostępny z Menedżera modułów znalezionych w zakładce <strong>Rozszerzenia</strong> w górnym menu interfejsu administratora. Można utworzyć dodatkowe moduły, klikając przycisk <strong>Nowy</strong>. Można wybrać moduły, które zostały już stworzone, w celu ich skonfigurowania. Nie zapomnij opublikować ich w prawidłowym pozycjonowaniu i na odpowiednich stronach.</p>

<h5><p>W celu konfiguracji modułu <strong>TM Paralaksa </strong>, należy wykonać następujące czynności:</p></h5>
<li><p>Należy przejść do zakładki <strong>Rozszerzenia</strong> &gt; <strong>Moduły</strong>:</p></li>
<figure class="img-polaroid">
<p><img src="img/contact-form-7.png" alt=""></p></figure>
      <li>
        <p>Następnie należy wybrać moduł<strong> TM Paralaksa</strong> w celu edytowania.</p>
      </li>
    <div class="alert alert-warning">
 <div align="justify"><strong>Wskazówka:</strong> Jeśli chcesz znaleźć wszystkie moduły <strong>TM Paralaksa </strong>, należy użyć filtrów w celu uproszczenia procesu. Trzeba nacisnąć przycisk &quot;<strong>Narzędzie wyszukiwania</strong>&quot; oraz wybrać typ &quot;<strong>Artykuły - Pojedyncze</strong>&quot; w liście rozwijanej filtrów &quot;<strong>- Wybierz typ -</strong>&quot;. </div>
  <figure class="img-polaroid">
<p> <img src="img/tm-parallax-1.jpg" alt=""></p></figure></div>
<ol class="marked-list">
      <li>Aby otworzyć dowolne zmiany wymaganych ustawień modułu, trzeba kliknąć jego tytuł. [Spróbujmy edytowanie modułu <strong>Paralaksa strony domowej (Home parallax)</strong>.]</li>
<li>
  <div align="justify">Interfejs edycji modułu <Strong> TM Paralaksa </strong> jest otwarty przed tobą.            
  </div>
  <figure class="img-polaroid">
    <p> <img src="img/tm-parallax-2.jpg" alt=""></p></figure>
<li>Należy nacisnąć przycisk <strong>Artykuł</strong>, aby otworzyć modalne okno wyboru artykułów, jak pokazano poniżej. </li>
<figure class="img-polaroid">
<p> <img src="img/tm-parallax-3.jpg" alt=""></p></figure>
<div class="alert alert-warning">
    <div align="justify">W naszych szablonach zawartość <strong>modułu TM Paralaksa</strong> jest przedstawiona POPRZEZ ładowanie pewnego modułu, na przykład, "{loadmodule articles_single, Home parallax article}". Aby uniknąć Błędu 404 (Error 404) na swojej stronie internetowej, należy upewnić się, że nazwa załadowanego modułu jest taka sama, jak określona do załadowania. W takim przypadku należy opublikować artykuł "<strong> Artykuł paralaksy strony domowej</strong>". Nazwa modułu nie powinna zawierać więcej niż jedną spację. </div>
          Więcej informacji o ładowaniu modułu lub pozycjonowania (loadmodule/loadposition) można znaleźć na oficjalnej stronie internetowej <a href="https://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank"></a>.
  </p>
    </div>
  <p align="justify">W celu edytowania modułu <strong>Artykuł paralaksy strony domowej</strong>, należy przejść do zakładki <strong>Rozszerzenia</strong> &gt; <strong>Moduły</strong>. Używając pola wyszukiwania, trzeba znaleźć <strong>Artykuł paralaksy strony domowej</strong>. Aby otworzyć ustawienia modułu <strong>Artykuł paralaksy strony domowej</strong>, należy kliknąć jego tytuł.</p>
 <figure class="img-polaroid"> <p> <img src="img/tm-parallax-4.jpg" alt=""></p></figure>
  <p align="justify">Teraz jest możliwość edycji artykułu. Aby edytować artykuł, należy kliknąć przycisk <strong> Edytowanie </strong>, a pojawi się okno Edytuj Artykuł. Tutaj jest możliwość edytowania zawortości artykułu, jego zdjęć i linków.</p>
  <div class="alert alert-warning">
  <p>Aby dodać nowy artykuł, trzeba wykorzystać <strong>Zawartość</strong> &gt; <strong>Artykuły</strong> &gt; <strong>Dodaj nowy artykuł</strong>.</p>
  <figure class="img-polaroid">
    <img src="img/articles-single-9.jpg" alt="">
  </figure>
  </div>
<p></p>
<li>Teraz trzeba otworzyć zakładkę <strong>Zaawansowane</strong>.</li>
<figure class="img-polaroid">
     <p><img src="img/tm-parallax-5.jpg" alt=""></p>
  </figure>
Tutaj można zobaczyć następujące opcje:
<table width="980"  class="options-table">
<tr>
        <td width="154" class="col-1"><strong> Przygotuj zawartość (Prepare Content) </strong></td>
        <td width="29">-</td>
        <td width="781">Opcjonalnie można przygotować zawartość za pomocą wtyczek do zawartości Joomla.</td>
  </tr>
    <tr>
        <td class="col-1"><strong>Wybierz obraz w tle (Select a Background Image)</strong></td>
        <td>-</td>
        <td>Jeśli wybierzesz obraz tutaj, zostanie on automatycznie wstawiony jako wbudowany styl dla elementu owijania div. Pliki graficzne należy przechowywać w fołderze images/<strong>parallax</strong>. [Aby przesłać zdjęcia, należy przejść do sekcji <strong>Zawartość</strong> &gt; <strong>Media</strong>.]</td>
    </tr> <tr>
        <td height="45" class="col-1"><strong> Szybkość paralaksy (Parallax speed) </strong></td>
        <td>-</td>
        <td>Ustawia prędkość dla paralaksy, w stosunku do szybkości bazowej. Wartość: od 0 do 2.</td>
    </tr>
    <tr>
        <td height="45" class="col-1"><strong>  Kierunek paralaksy (Parallax direction)  </strong></td>
        <td>-</td>
        <td>Ustawia kierunek ruchu paralaksy. Normalne (normal) - przewijanie paralaksy przesuwa się w przeciwnym kierunku, odwrotnie (inverse) - równolegle do niego.</td>
    </tr>
    <tr>
        <td class="col-1"><strong> Pokaż na urządzeniach mobilnych (Show on Mobile) </strong></td>
        <td>-</td>
        <td>Włączenie/wyłączenie efektu paralaksy na urządzeniach mobilnych.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong>Zamazany widok (Blur)</strong></td>
        <td>-</td>
        <td>Włączenie/wyłączenie efektu zamazanego widoku zdjęcia, kiedy jego rozmiar jest zbyt mały.</td>
    </tr>    
</table>