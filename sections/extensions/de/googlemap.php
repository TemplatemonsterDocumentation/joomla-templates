<h3>GoogleMap Plugin</h3>

<p><strong>GoogleMap</strong> ist ein plugin, dass Ihnen erlaubt Google Map auf Ihre website anzuzeigen:</p>

<figure class="img-polaroid">
    <img src="img/googlemap-1.jpg" alt="">
</figure>

<p align="justify"><strong>Um das Plugin zu bearbeiten, gehen Sie zu Extensions &gt; Plugins. Das bringt Sie zum Plugin Manager. Geben Sie &quot;Google&quot; in das Suchfeld ein und dann klicken Sie auf den System - Google Maps Titellink.</strong></p>
<figure class="img-polaroid">
    <img src="img/googlemap-3.jpg" alt="">
</figure>
<p>Hier gelangen Sie zur Hauptkonfigurationsseite des Google Map Plugins. Sie können sich gerne mehr Information auf der <a
        href="http://tech.reumer.net/Google-Maps/Documentation-of-plugin-Googlemap/"
        target="_blank" rel="nofollow">offiziellen Website</a>.</p>
<p>
  <figure class="img-polaroid">
    <img src="img/googlemap-2.jpg" alt="">
  </figure>
</p>
<p>Lassen Sie uns die Konfigurationsoptionen ansehen:</p>
<Table width="980"  class="options-Table">
  <tr>
        <td width="154" class="col-1"><strong>Veröffentlicht</strong></td>
        <td width="29">-</td>
        <td width="781">Wenn es nicht veröffentlicht ist, wedern alle Karten auf der Seite verschwinden.</td>
  </tr>
    <tr>
        <td class="col-1"><div align="justify"><strong>Debuggen?</strong></div></td>
        <td>-</td>
        <td><div align="justify">Die Karte zeigt Debug-Meldungen [als Kommentare] in der HTML-Seite an. Die Kommentare können durch das Betrachten der Seitenquelle gezeigt werden. </div></td>
    </tr> <tr>
        <td class="col-1"><strong>Plugincode</strong></td>
        <td>-</td>
        <td>Der Code, den man in den Artikel zwischen {} platziert, um das Plugin auszulösen . Standartmäßig mosmap.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Klammern</strong></td>
        <td>-</td>
        <td><div align="justify">Welche Klammern um den Plugin-Code herum verwendet werden sollten : {} [standart mit [] für mehrere kml], [] [mit () für mehrere kml] oder beides.</div></td>
    </tr>
   
    <tr>
        <td class="col-1"><strong>Google API Version </strong></td>
        <td>-</td>
        <td><div align="justify">Die Version der Google API, die verwendet werden muss [3.exp neueste Version, 3. Nummer für spezifische Version und 3 für sTable Version (Standard)].</div></td>
    </tr>
    <tr>
    <td class="col-1"><strong>Visual Refresh</strong></td>
        <td>-</td>
        <td>Neue aktualisierte Fliesen in Google Maps anzeigen.</td>
    </tr>
        <td class="col-1"><strong>Angemeldet</strong></td>
        <td>-</td>
        <td> Der Besucher wird als Google User registriert und sie sehen die Karte von Google angepasst.</td>
    </tr><td class="col-1"><div align="justify"><strong>Karte anzeigen?</strong></div></td>
        <td>-</td>
        <td>Zeigen Sie die Karte an oder zeigen Sie nicht die Karte. Kann verwendet werden, um nur einen Lightbox-Link oder Streetview oder Richtungen auf einer Seite anzuzeigen.</td>
    </tr>    <td class="col-1"><strong>Druckknopf</strong></td>
        <td>-</td>
        <td><div align="justify">Zeigen Sie eine Drucktaste oder einen Link an, um eine Karte, eine Straßenansicht und Ihre Richtung zu drucken [keine (Standard), Symbol, Text, beide oder Ihren eigenen Text / Bild als Link].</div></td>
    </tr>  <td height="26" class="col-1"><strong>CSS Klassenname</strong></td>
      <td>-</td>
        <td>CSS-Klassenname für eine Karte, die für das Styling der Karte verwendet werden soll. Standardmäßig leer.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>CSS für die Karte</strong></td>
        <td>-</td>
        <td><div align="justify">CSS-Definition für das Plugin, um die Karte und das zugehörige Objekt korrekt anzuzeigen. Wenn Map-Klasse geändert wird, ändern Sie auch die Klasse im CSS.</div></td>
    </tr>
      <td class="col-1"><strong>Mit Mootools laden?</strong></td>
        <td>-</td>
        <td>Ob Mootools [standart] oder ein Zeitintervall benutzt werden soll, um die Karte zu laden.</td>
    </tr><td class="col-1"><strong>Zeitintervall </strong></td>
        <td>-</td>
        <td><div align="justify">Um die Karte anzuzeigen, wird ein Zeitintervall in ms benutzt, um zu warten, dass die Seite korrekt geladen ist [Standard 500ms]. Besonders für IE kann dies einen fatal error verhindern.</div></td>
    </tr><td class="col-1"><strong>Googlemaps API Key</strong></td>
        <td>-</td>
        <td>Der optionale Google API-Schlüssel für Google Maps 3 für Nutzung und Abrechnung.</td>
    </tr>  <td class="col-1"><div align="justify">
        <p><strong>Googlemaps Multi </strong><strong>API Key</strong></p>
</div></td>
        <td>-</td>
        <td><div align="justify">Die optionale Google API-Taste [s] für Google Maps Version 3 für Nutzung und Abrechnung. Mit Multi können Sie Ihre Multi-Domains für Ihre Website und den Schlüssel damit verbinden. Die nächste Domain kommt in eine neue Zeile.</div></td>
    </tr>
    <td class="col-1"><strong>URL Variable</strong></td>
        <td>-</td>
        <td>Benutzen Sie HTTP_HOST [default] oder Joomla Einstellungen.</td>
    </tr>  <td class="col-1"><strong>Google Website</strong></td>
        <td>-</td>
        <td>Welche Google-Website sollte für Geocodierung und Richtungen verwendet werden.</td>
    </tr><td class="col-1"><strong>Stil Karte</strong></td>
        <td>-</td>
        <td><p>Die JSON-Zeichenfolge, um die Karte zu gestalten; Sie können Ihren Kartenstil ändern. Schauen Sie sich mehr Stile <a
        href="https://snazzymaps.com/"
        target="_blank" rel="nofollow">hier</a> an.</p>
           <div class="alert alert-info"><p>Kopieren Sie den Code und fügen Sie ihn in das <strong> Styled Map </strong> Optionsfeld:</p>
             <p>
               <figure class="img-polaroid">
                 <img src="img/map.jpg" alt="">
               </figure>
             </p>
          </div><p></p></td>
    </tr><td class="col-1"><strong>Ausrichtung</strong></td>
        <td>-</td>
        <td> Wie die Karte innerhalb des Inhalts [parent html object] ausgerichtet werden soll.</td>
    </tr><td class="col-1"><strong>Sprache Option</strong></td>
        <td>-</td>
        <td><div align="justify">Ob die Sprache der Karten [Buttons, Tooltips] bestimmt werden sollte durch: site - Sprache der Seite; Benutzer - Browser Sprache / Ort. </div></td>
    </tr><td class="col-1"><strong>Sprache</strong></td>
        <td>-</td>
        <td>Wenn die Sprache durch config bestimmt ist, dann die Sprache hier einstellen.</td>
    </tr><td class="col-1"><strong>Breite</strong></td>
        <td>-</td>
        <td>Breite der Karte. Sie müssen die Einheiten hinter die Nummer wie 100% oder 400px setzen.</td>
    </tr><td class="col-1"><strong>Height</strong></td>
        <td>-</td>
        <td>Höhe der Karte. Sie müssen die Einheiten hinter die Nummer wie 100% oder 400px setzen.</td>
    </tr><td class="col-1"><strong>Effekt auf der Karte</strong></td>
        <td>-</td>
        <td>Welcher Effekt auf der Karte verwendet werden soll  [Horizontal benutzt absolute Breite!].</td>
    </tr>
</Table>