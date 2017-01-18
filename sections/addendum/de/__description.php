<h2 class="item8">Addendum</h2>

<p>Wir taten unser Bestes, um diese Anweisungen klar wie möglich zu machen. Wenn Sie jedoch Schwierigkeiten mit dem Joomla Template haben oder Ihre Ideen zur Verbesserung von der Vorlage oder vom Dokumentation vorschlagen möchten, wenden Sie sich bitte an unseren Kundendienst:</p>

<h4>Hilfe und Support</h4>
<ul class="marked-list">
    <li><a href="http://chat.template-help.com/" target="_blank">Live Chat</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit"
           target="_blank">Hilfe Ticket System</a></li>
</ul>
<h4>Dokumentation</h4>
<ul class="marked-list">
    <li><a href="http://docs.joomla.org/Beginners" target="_blank">Joomla! Anleitung für Anfänger</a></li>
    <li><a href="http://docs.joomla.org/Category:FAQ" target="_blank">Häufig gestellte Fragen</a></li>
    <li><a href="http://docs.joomla.org/" target="_blank">Joomla! Dokumentation</a></li>
    <li><a href="/help/cms-blog-templates/joomla/joomla-tutorials/" target="_blank">Joomla!
            Tutorials</a></li>
</ul>
<h4>Mögliche Probleme mit Google Fonts</h4>

<p>Wenn die Schriften nicht richtig nach der Installation angezeigt werden, öffnen Sie bitte die index.php (\templates\theme****\index.php) Template-Datei zur Bearbeitung. Um dies zu tun, gehen Sie zu Erweiterungen -> Template Manager Tab in Ihrer Joomla Admin Panel und wählen Sie Ihre Vorlage (Theme **** Details und Dateien).</p>

<p>Hier finden Sie die folgende Zeile:</p>
    <code>"$doc->addStyleSheet('//fonts.googleapis.com/css?family=[---your_web_font_name_here---]');"</code><p> und ersetzen Sie es mit:</p>
<code>"$doc->addStyleSheet('//fonts.useso.com/css?family=[---your_web_font_name_here---]');".</code>
<h4>JJoomla! Erweiterungen</h4>

<p> Auf <a href="http://extensions.joomla.org/" target="_blank">extensions.joomla.org</a> y können Sie mehr als sechtausend Module, Plugins und Komponente herunterladen, damit Ihre Joomla Website mehr verschiedene Funktionen erhaltet.</p>
<h4>Joomla!  Cookies Nutzungswarnung </h4>

<p> Nach der Cookie-Richtlinie müssen Sie entsprechende Modulen auf Ihre Website hinzufügen, die benachrichtigen, sobald Cookies verwendet werden. Wir empfehlen folgendes</p>
<ul class="marked-list">
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/24689"
           target="_blank">Cookies Akzeptieren</a></li>
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/21043"
           target="_blank">EU-Cookie-Richtlinie</a></li>
</ul>
<h4>Zusätzliche Links</h4>
<ul class="marked-list">
    <li><a href="http://www.joomla.org/technical-requirements.html" target="_blank">Technische Anforderungen </a></li>
    <li>
        <a href="http://opensourcematters.org/index.php?option=com_content&amp;view=article&amp;id=56&amp;Itemid=155"
           target="_blank">Lizenz und Nutzungsrecht</a></li>
</ul>

<h4>Benutzerblöcke</h4>

<p class="alert alert-warning">
In den Modulen dieser Art ist es oft notwendig die loadmodule/loadposition Eigenschaft zu verwenden, zum Beispiel, "{loadmodule articles_single, About us}" im Inhalt. Um den Fehler 404 auf Ihrer Website zu verhindern, stellen Sie sicher, dass der Name des geladenen Moduls mit dem zusammenfällt , den Sie für das Laden angegeben haben.In diesem Fall sollte das "About us" Modul veröffentlicht werden und sollte nicht mehr als ein Leerzeichen in dem Modulnamen enthalten. Sie können mehr über loadmodule/loadposition auf <a href="https://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank">offiziellen Website</a> erfahren.
    </p>

<h4>Validation</h4>

<p class="alert alert-info">
   In unseren Vorlagen befolgen wir semantischen Regeln für das Schreiben vom Code HTML-Markup und den CSS-Stilen. Trotzdem können einige Fehler bei der W3C-Validierung auftreten. Die Nutzung der modernen Website-Technologien wie CSS3-Funktionen und HTML5-Markup wird durch das erstellen eines 100% W3C Code beschränkt . Unser Ziel ist es qualitativ hochwertige Vorlagen mit einer reichen Benutzererfahrung zu liefern.Deshalb müssen wir manchaml einige Regeln brechen. </p>
