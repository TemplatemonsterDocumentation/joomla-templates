<h3>Beispieldaten Installation</h3>

<p>Beispieldaten verwendet man, damit die Joomla Website als wie bei der Vorschauseite
    vomTemplate aussieht. Da gibt es Musterartikel, Bilder, Module, Einstellungen,
    Website Einstellungen und so weiter. Wenn Sie nicht plannieren, Beispiel Bilder oder
    anderen Sample Inhalt zu verwenden, überspringen Sie bitte diesen Schritt. </p>

<p> Um Beispieldaten zu instalieren, führen Sie zwei leichte Schritte durch.</p>
<h4>SQL Datei importieren.</h4>

<p> Der Import der SQL Datei ist der letzte und wichtigste Schritt von Installation den
    Beispieldaten. SQL Datei ist ein Backup der Beispiel Datenbank, dort sind alle
    Joomla Beispieldaten gespeichert. Die SQL Datei kann man via
    Datenbankverwaltungstool (phpMyAdmin). Die SQL Datei der Vorlage ("dump.sql")
    befindet sich im "sources" Verzeichnis vom Template Paket. </p>


<p class="alert alert-danger"> Importieren Sie <b>KEINE</b> SQL Datei, wenn Sie eine funktionierende Site haben, weil
    dies
    Ihre Website Datenbank vollständig ersetzt und alle Ihre Daten verloren gehen.</p>
<p class="alert alert-danger"> VORSICHT: Vor dem Importieren einer SQL-Datei sollten Sie schauen, ob das Präfix Ihrer
    Datenbank Tabelle das Tabelle-Präfix von der SQL-Datei entspricht.</p>
<p> Prüfen Sie das Tabelle-Präfix direkt in der Datenbank via Datenbankverwaltungstool.
    Prüfen Sie die Tabellenamen. Das Präfix ist eine Symbolreihe vor den Tabellenamen. (
    <i>Z.B.
        Tabelle "jos_assets" hat das Pröfix "jos_"
    </i>
    ). Sie können auch das
    Datenbank-Präfix in der "configuration.php" Datei von Ihrem Haupverzeichnises
    finden. Suchen Sie die Zeile 19: </p><code>public $dbprefix = 'jos_';</code><p> (
    <i> "jos_"
        istdas Präfix
    </i>
    )
</p>

<p>Falls die Tabellen-Präfixen nicht entsprechen, öffnen Sie die Datei "dump.sql" mit
    Hinfe von Ihrem Code-Editor. Via die Option „Suchen und Ersetzen (CTRL+F oder CTRL+H
    Hotkeys) ersetzen Sie das "jos_" Tabellepräfix (
    <i>In der SQL Datei verwendet</i>
    )
    durch ein passendes. Schauen Sie bitte das ausführliche Video-Tutorial an: <a
        href="/help/de/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">Wie ändert man das Datenbank Präfix in der SQL Datei </a>.
</p>

<h6> Jetzt können Sie diese SQL Datei in Ihre Datenbak importieren. <br>
    Damit Sie Beispieldaten in der Datenbank importieren, fühlen Sie diese leichte
    Schritte aus: (werfen Sie einen Blick auf die unten angegebene Slides)</h6>

<ol class="index-list">
    <li><p>Wählen Sie Ihre Datenbank aus der Datenbankliste, die sich links in phpMyAdmin
            befindet</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Im oberen Navigationsmenü klicken Sie auf den Button "Import/Importieren"</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Klicken Sie auf "Wähle Datei" (Choose file) und suchen Sie die .sql Datei im
            „sources“ Verzeichnis vom Template-Paket durch.</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Klicken Sie den Button “Weiter” (Go), um den Import von Beispieldaten zu
            starten</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-danger">Schauen Sie bitte das augführliche Video-Tutorial an:<a
        href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html"
        target="_blank">Wie importiert man eine SQL Datei via phpMyAdmin Tool</a></p>