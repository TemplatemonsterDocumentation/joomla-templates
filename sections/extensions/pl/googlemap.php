<h3>Wtyczka GoogleMap (GoogleMap Plugin)</h3>

<p><strong>GoogleMap</strong> jest wtyczką, która umożliwia wyświetlanie mapy Google na twojej stronie internetowej:</p>

<figure class="img-polaroid">
    <img src="img/googlemap-1.jpg" alt="">
</figure>

<p align="justify"><strong>Aby dostosować wtyczkę, należy przejść do Rozszerzenia &gt; Wtyczki. Spowoduje to przejście do Zarządzenie Wtyczkami. W polu wyszukiwania należy wprowadzić &quot;Google&quot;, zatem kliknąć na linku tytułu System - Google Maps.</strong></p>
<figure class="img-polaroid">
    <img src="img/googlemap-3.jpg" alt="">
</figure>
<p>Spowoduje to przejście do głównej strony konfiguracji wtyczki GoogleMap.  Zapraszamy do sprawdzenia więcej szczegółów na oficjalnej stronie <a
        href="http://tech.reumer.net/Google-Maps/Documentation-of-plugin-Googlemap/"
        target="_blank" rel="nofollow"></a>.</p>
<p>
  <figure class="img-polaroid">
    <img src="img/googlemap-2.jpg" alt="">
  </figure>
</p>
<p>Przyjrzyjmy się do opcji konfiguracyjnych:</p>
<table width="980"  class="options-table">
  <tr>
        <td width="154" class="col-1"><strong>Opublikowane (Published)</strong></td>
        <td width="29">-</td>
        <td width="781">Jeśli nie, to wszystkie mapy znikną.</td>
  </tr>
    <tr>
        <td class="col-1"><div align="justify"><strong>Debugować? (Debug?)</strong></div></td>
        <td>-</td>
        <td><div align="justify">Jeżeli mapa pokazuje komunikaty debugowania [np. komentarze] jak na stronie HTML. Komentarze mogą zostać pokazane, analizując źródła strony. </div></td>
    </tr> <tr>
        <td class="col-1"><strong>Kod wtyczki (Plugin code)</strong></td>
        <td>-</td>
        <td>Kod, który jest wykorzystywany do umieszczenia w artykule pomiędzy {}, w celu wyzwalania wtyczki. Domyślny mosmap.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Nawiasy (Brackets)</strong></td>
        <td>-</td>
        <td><div align="justify">Jakie nawiasy należy stosować wokół kodu wtyczki: {} [domyślnie z [] dla wielokrotnego kml], [] [z () dla wielokrotnego kml] lub obydwa.</div></td>
    </tr>
   
    <tr>
        <td class="col-1"><strong>Wersja Google API (Google API version) </strong></td>
        <td>-</td>
        <td><div align="justify">Wersja Google API, którą należy stosować [3.exp najnowsza rozwinięta wersja, 3.number dla konkretnej wersji i 3 dla wersji stabilnej (domyślnie)].</div></td>
    </tr>
    <tr>
    <td class="col-1"><strong>Odświeżanie wizualne (Visual Refresh)</strong></td>
        <td>-</td>
        <td>Pokaż nowe odświeżone płytki w Google Maps.</td>
    </tr>
        <td class="col-1"><strong>Zalogowany (Signed In)</strong></td>
        <td>-</td>
        <td> Gość jest rozpoznawany jako użytkownik google i będzie widzieć mapę dostosowaną przez google.</td>
    </tr><td class="col-1"><div align="justify"><strong>Pokazać mapę? (Show map?)</strong></div></td>
        <td>-</td>
        <td>Wyświetlaj mapę lub nie pokazuj mapy. Może być stosowany, aby tylko pokazać link lightbox, albo widok ulicy, albo kierunki na stronie.</td>
    </tr>    <td class="col-1"><strong>Przycisk Drukowanie (Print button)</strong></td>
        <td>-</td>
        <td><div align="justify">Pokaż przycisk drukowania lub link dla wydrukowania mapy, widoku ulicy oraz jej kierunku [brak (domyślnie), ikona, tekst, obydwa lub własny tekst/obraz jako link].</div></td>
    </tr>  <td height="26" class="col-1"><strong>Nazwa klasy CSS (CSS Class name)</strong></td>
      <td>-</td>
        <td>Nazwa klasy CSS dla mapy, żeby wykorzystać do stylizacji mapy. Domyślnie jest pusta.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>CSS dla mapy (CSS for Map)</strong></td>
        <td>-</td>
        <td><div align="justify">Definicja CSS dla wtyczki, aby wyświetlić mapę i związanego z nią obiektu prawidłowego. Jeśli klasa mapy zostanie zmieniona, wtedy również należy zmienić klasę w CSS.</div></td>
    </tr>
      <td class="col-1"><strong>Załaduj z mootools? (Load with mootools?)</strong></td>
        <td>-</td>
        <td>Jeżeli mootools [domyślnie] powinny być stosowane, aby załadować mapę lub przedział czasowy.</td>
    </tr><td class="col-1"><strong>Przedział czasowy (Timeinterval) </strong></td>
        <td>-</td>
        <td><div align="justify">Aby pokazać na mapie przedział czasu w ms, należy poczekać aż strona zostanie prawidłowo załadowana [domyślnie 500ms]. Zwłaszcza dla IE, dzięki temu można zapobiec błędu krytycznemu.</div></td>
    </tr><td class="col-1"><strong>Klucz API dla Googlemaps (Googlemaps API Key)</strong></td>
        <td>-</td>
        <td>Opcjonalny klucz API Google dla Google Maps 3 do użycia i rozliczeń.</td>
    </tr>  <td class="col-1"><div align="justify">
        <p><strong>Googlemaps Multi </strong><strong>API Key</strong></p>
</div></td>
        <td>-</td>
        <td><div align="justify">Opcjonalny [-e] klucz [e] API Google dla Google Maps w wersji 3 do użycia i rozliczeń. Z multi można dodawać wiele domen na swoją stronę internetową, a poza tym kluczy. Kolejna domena idzie w nowym wierszu.</div></td>
    </tr>
    <td class="col-1"><strong>Zmienny adres URL (URL variable)</strong></td>
        <td>-</td>
        <td>Należy użyć HTTP_HOST [domyślnie] lub ustawienie Joomla.</td>
    </tr>  <td class="col-1"><strong>Witryna Google (Google website)</strong></td>
        <td>-</td>
        <td>Jaka strona internetowa google powinna być wykorzystywana do geokodowania i kierunków.</td>
    </tr><td class="col-1"><strong>Stylizowana mapa (Styled Map)</strong></td>
        <td>-</td>
        <td><p>Ciąg znaków JSON do stylizowania mapy; Można zmienić styl mapy. Można sprawdzić więcej stylów <a
        href="https://snazzymaps.com/"
        target="_blank" rel="nofollow">tutaj</a>.</p>
           <div class="alert alert-info"><p>Należy skopiować kod i wkleić go w polu opcji <strong>Stylizowana mapa</strong>:</p>
             <p>
               <figure class="img-polaroid">
                 <img src="img/map.jpg" alt="">
               </figure>
             </p>
          </div><p></p></td>
    </tr><td class="col-1"><strong>Wyrównaj (Align)</strong></td>
        <td>-</td>
        <td> W jaki sposób mapa powinna być wyrównana wewnątrz zawartości [nadrzędnego obiektu html].</td>
    </tr><td class="col-1"><strong>Opcje języka (Language option)</strong></td>
        <td>-</td>
        <td><div align="justify">Jeśli język map [przyciski, podpowiedzi] powinien być określony przez: witrynę — język wykorzystywany na witrynie; użytkownika — tak, język przeglądarki/lokalizacji. </div></td>
    </tr><td class="col-1"><strong>Język (Language)</strong></td>
        <td>-</td>
        <td>Gdy język jest określany przez konfigurację, należy ustawić język tutaj.</td>
    </tr><td class="col-1"><strong>Width</strong></td>
        <td>-</td>
        <td>Szerokość mapy (Width of the map). Należy umieścić jednostki za numerem jak 100% lub 400 pikseli.</td>
    </tr><td class="col-1"><strong>Height</strong></td>
        <td>-</td>
        <td>Wysokość (Height of the map). Należy umieścić jednostki za numerem jak 100% lub 400 pikseli.</td>
    </tr><td class="col-1"><strong>Efekt na mapie (Effect on Map)</strong></td>
        <td>-</td>
        <td>Jaki efekt musi zostać wykorzystywany na mapie [Użyj poziomu absolutnej szerokości!].</td>
    </tr>
</table>