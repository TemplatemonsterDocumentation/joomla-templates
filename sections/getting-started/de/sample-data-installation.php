<h3>Beispieldaten Installation</h3>

<p>Beispieldaten verwendet man, damit die Joomla Website wie die Vorschauseite der Template aussieht. Es gibt Musterartikel, Bilder, Module, Einstellungen, Website Einstellungen und so weiter. Wenn Sie Beispiel Bilder oder anderen Sample Inhalt nicht verwenden wollen, überspringen Sie bitte diesen Schritt. </p>

<p> Um Beispieldaten zu instalieren, führen Sie zwei leichte Schritte aus.</p>

<h4>Beispielbilder hochladen</h4>

<p>Um Beispielbilder hochzuladen, öffnen Sie bitte das Templatepackage und dann den "sources" Ordner. Here you will find "to_the_root_directory".Es enthält Dateien die Sie zu Ihrem Root Verzeichnis Ihrer Joomlainstallation hochladen sollen. Um Dateien zu Ihre Server hochzuladen, benutzen Sie bitte den File Manager.</p>

<h4>SQL Datei importieren</h4>

<p>Der Import der SQL Datei ist der letzte und wichtigste Schritt der Beispieldaten-Installation. 
    SQL Datei ist ein Backup der Beispiel Datenbank, dort sind alle Joomla Beispieldaten gespeichert. Die SQL Datei kann man via Datenbankverwaltungstool (phpMyAdmin) hochladen. Die SQL Datei der Vorlage ("dump.sql") befindet sich im "sources" Verzeichnis vom Template Paket. </p>


<p class="alert alert-danger">BItte <b>NICHT</b> die SQL Datei importieren, wenn Sie eine funktionierende Site haben, weil dies Ihre Website Datenbank vollständig ersetzt und alle Ihre Daten verloren gehen.</p>

<p class="alert alert-danger">VORSICHT: Vor dem Importieren einer SQL-Datei sollten Sie schauen, ob das Präfix Ihrer Datenbank Tabelle dem Tabellen-Präfix der SQL-Datei entspricht.</p>

<p>Prüfen Sie das Tabelle-Präfix direkt in der Datenbank via Datenbankverwaltungstool. Prüfen Sie die Tabellenamen. Das Präfix ist eine Symbolreihe vor den Tabellenamen. ( Z.B. Tabelle "jos_assets" hat das Pröfix "jos_" ). Sie können auch das Datenbank-Präfix in der "configuration.php" Datei in Ihrem Haupverzeichnis finden. Suchen Sie die Zeile 19:  </p><code>public $dbprefix = 'jos_';</code> <p>(<i>wo das Präfix "jos_" ist</i>).
</p>

<p>Falls die Tabellen-Präfixen nicht einander entsprechen, öffnen Sie die Datei "dump.sql" mit Hilfe von Ihrem Code-Editor. Mit der Option
&quot;Suchen und Ersetzen &quot;  (CTRL+F or CTRL+H shortcut) ersetzen Sie das "jos_" Tabellepräfix (<i> in der SQL Datei verwendet</i>) mit Ihrem Präfix.  Schauen Sie sich bitte das ausführliche Video-Tutorial an:  <a
        href="/help/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">Wie ändert man das Datenbank Präfix in der SQL Datei .</a>.
</p>

<h6>Jetzt können Sie diese SQL Datei in Ihre Datenbak importieren. <br>Damit Sie Beispieldaten in die Datenbank importieren, führen Sie diese leichten Schritte aus: (werfen Sie einen Blick auf die unten angegebenen Slides):</h6>

<ol class="index-list">
    <li><p>Wählen Sie Ihre Datenbank aus der Datenbankliste, die sich links in phpMyAdmin befindet:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Im oberen Navigationsmenü klicken Sie auf den Button "Import/Importieren":</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Klicken Sie auf "Wähle Datei" (Choose file) und suchen Sie die .sql Datei im „sources“ Verzeichnis vom Template-Paket durch:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Klicken Sie den Button “Weiter” (Go), um den Import von Beispieldaten zu starten</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-info"> Sie können sich auch das ausführliche Video-Tutorial anschauen <a
        href="/help/phpmyadmin-how-to-import-sample-data-dump-file.html"
        target="_blank">Wie importiert man eine SQL Datei via phpMyAdmin Tool</a>.
</p>
