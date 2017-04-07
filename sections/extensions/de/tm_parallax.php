<h3>TM Parallax Module</h3>

<p><strong>TM Parallax</strong> ist ein Modul, das RD Parallax Skript zur Implementierung von Parallaxenfunktionalität in der Vorlage verwendet. </p>
<figure class="img-polaroid">
<p> <img src="img/tm-parallax-20.jpg" alt=""></p></figure>
<p align="justify">Das Modul steht nun im Modulmanager zur Verfügung, unter dem strong>Extensions</strong> Tab im Topmenu des Admin-Interface. Sie können zusätzliche Module erstellen, indem Sie auf die Schaltfläche <strong>New</strong> klicken. Wählen Sie die bereits vorgenommenen Module aus, um sie zu konfigurieren. Vergessen Sie nicht, sie in der rechten Seitenleiste zu veröffentlichen.</p>

<h5><p>Um das <strong>TM Parallax </strong>Modul zu konfigurieren, sollten Sie die folgenden Schritte ausführen:</p></h5>
<p>Gehen Sie zum <strong>Extensions</strong> &gt; <strong>Modules</strong> Tab:</p>
<figure class="img-polaroid">
<p><img src="img/contact-form-7.png" alt=""></p></figure>
    
        <p>Als nächstes sollten Sie das <strong> TM Parallax </strong>Modul bearbeiten.</p>
     
    <div class="alert alert-warning">
 <div align="justify"><strong>Tipp:</strong> wenn Sie alle <strong>TM Parallax </strong> Module finden wollen , benutzen Sie die Filter, um es sich zu erleichtern. Drücken Sie den &quot;<strong>Search Tool</strong>&quot; Knopf und wählen Sie den &quot;<strong>TM Parallax </strong>&quot; Typ in der  &quot;<strong>- Select Type -</strong>&quot; Filter Dropdownliste. </div>
  <figure class="img-polaroid">
<p> <img src="img/tm-parallax-1.jpg" alt=""></p></figure></div>

<ol class="marked-list">
      <li>Um die Moduleinstellungen zu ändern, klicken Sie auf den Titel. [Lassen Sie uns das <strong>Home Parallax</strong> Modul bearbeiten.]</li>
<li>
  <div align="justify">Das <strong>Home Parallax</strong> Modul Bearbeitungs Interface wird geöffnet. </div>        

  <figure class="img-polaroid">
    <p> <img src="img/tm-parallax-2.jpg" alt=""></p></figure>
<li>Drücken Sie den <strong>Article</strong> Knopf, um das Modulfenster mit der Artikelauswahl zu öffnen, wie unten aufgeführt. </li>
<figure class="img-polaroid">
<p> <img src="img/tm-parallax-3.jpg" alt=""></p></figure>
<div class="alert alert-warning">
    <div align="justify">In unseren Vorlagen, ist der <strong>TM Parallax</strong> Inhalt mit einem bestimmten Modul oder Position dargestellt, z.B. "{loadmodule articles_single, Home parallax article}". Um Fehler 404 auf Ihrer Website zu vermeiden, vergewissern Sie sich bitte, dass der Name des geladenen Moduls identisch mit dem angegebenen Moddulnamen ist. In diesem Fall sollte das Modul "Home parallax article" veröffentlicht werden. Der Modulname darf nicht mehr als ein Leerzeichen enthalten.
    Sie können mehr über loadmodule/loadposition auf der <a href="https://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank">offiziellen Webseite</a> finden.
  </p>
    </div></div>
  <p align="justify">Um das <strong>Home parallax article</strong> Modul zu bearbeiten, gehen Sie zum <strong>Extensions</strong> &gt; <strong>Modules</strong> Tab. Suchen Sie nach  <strong>Home parallax article</strong> mit dem Suchfeld. Für die <strong>Home parallax article</strong> Moduleinstellungen, klicken Sie auf den Titel.</p>
 <figure class="img-polaroid"> <p> <img src="img/tm-parallax-4.jpg" alt=""></p></figure>
  <p align="justify">Jetzt haben Sie die Möglichkeit, die Artikel zu bearbeiten. Um den Artikel zu bearbeiten , klicken Sie auf den<strong> Edit </strong>Knopf und Sie werden das Artikel Bearbeitungsfenster sehen. Hier haben Sie die Möglichkeit, den Artikelinhalt und dessen Bilder und Links zu bearbeiten.</p>
  <div class="alert alert-warning">
  <p>Um einen neuen Artikel zu hinzuzufügen, gehen Sie zu <strong>Content</strong> &gt; <strong>Articles</strong> &gt; <strong>Add New Article</strong>.</p>
  <figure class="img-polaroid">
    <img src="img/articles-single-9.jpg" alt="">
  </figure>
  </div>
<p></p>
<li>Öffnen Sie <strong>Advanced </strong>Tab.</li>
<figure class="img-polaroid">
     <p><img src="img/tm-parallax-5.jpg" alt=""></p>
  </figure>
Hier werden Sie die folgenden Optionen sehen:
<table width="980"  class="options-table">
<tr>
        <td width="154" class="col-1"><strong> Vorbereitung von Inhalt </strong></td>
        <td width="29">-</td>
        <td width="781">Optional können Sie den Inhalt mit Joomla Content Plugins vorbereiten.</td>
  </tr>
    <tr>
        <td class="col-1"><strong>Hintergrundbild auswählen</strong></td>
        <td>-</td>
        <td>Wenn Sie hier ein Bild auswählen, wird es automatisch als Inline-Stil für das Wrapping-Div-Element eingefügt. Speichern Sie Bilddateien im images/<strong>parallax</strong> Ordner. [Um Bilder hochzuldane, gehen Sie zur <strong>Content</strong> &gt; <strong>Media</strong> Sektion.]</td>
    </tr> <tr>
        <td height="45" class="col-1"><strong> Parallax Geschwindigkeit </strong></td>
        <td>-</td>
        <td>Legt das Geschwindigkeitsverhältnis für die Parallaxe, bezogen auf den Basiszinssatz, fest. Wert: von 0 bis 2.</td>
    </tr>
    <tr>
        <td height="45" class="col-1"><strong>  Parallax Richtung  </strong></td>
        <td>-</td>
        <td>Setzt die Bewegungsrichtung Parallaxe fest. Normal - Parallaxen-Scrolling bewegt sich in die entgegengesetzte Richtung, Inverse - es bewegt sich parallel dazu.</td>
    </tr>
    <tr>
        <td class="col-1"><strong> Auf mobil anzeigen </strong></td>
        <td>-</td>
        <td>Ein- / Ausschalten des Parallaxeffekts auf mobilen Geräten.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong>Verschwommen</strong></td>
        <td>-</td>
        <td>Ein- / Ausschalten des Effekts der Verwischung des Bildes, wenn seine Größe zu klein ist.</td>
    </tr>    
</table>