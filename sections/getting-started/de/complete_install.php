<h3> Vollständige Installation </h3>

<p> Die Methode von vollständiger Installation verwenden Sie, damit Joomla Website von Grund auf erstellen. Wir gehen
    davon aus, dass Sie alle Vorbereitungsschritte ausgeführt und alle notwendigen Dinge vorbereitet haben.
</p>

<!-- Creating database -->


<h3>Datenbank erstellen</h3>

<p>Ich habe keine Joomla Website und möchte die von Grund auf installieren. </p>

<p>Dank dieser Methode bekommen Sie eine installierte Joomla CMS Engine, einen Beispielinhalt und alle
    benötigen Erweiterungen </p>

    Slides): </p>

<ol class="index-list">
    <li> Im oberen Navigationsmenü drücken Sie den Button „Datenbank“ (eng. Database), um die Liste mit Datenbanken
        anzurufen. </li>

    <li> Im Feld "Neue Datenbank erstellen " (eng. Create new database) geben Sie den Datenbankname ein </li>

    <li> Auf der rechten Seite klicken Sie den Button „Erstellen “ (eng. Create) </li>
</ol>

<p>Ihre Datenbank erscheint sich in der Liste von Datenbanken. Klicken Sie auf ihren Namen, um die Datenbank
    anzurufen</p>

<div class="owl-carousel">
    <div class="item">
        <p>1. Drücken Sie den Button „Datenbank“ (eng. Database), um die Liste mit Datenbanken anzurufen</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Geben Sie den Datenbankname ein</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Klicken Sie den Button „Erstellen“ (eng. Create) </p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. Ihre Datenbank erscheint sich in der Liste von Datenbanken. Klicken Sie auf Ihren Namen, um
            die Datenbank anzurufen.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>


<p class="alert alert-info">Schauen Sie bitte auch das ausführliche Video-Tutorial an:
    <a href="/help/de/how-to-create-a-database.html" target="_blank">Wie man eine Datenbank erstellt</a>
</p>

<p>Falls Sie Probleme beim Erstellen einer Datenbank haben, wenden Sie sich für Support an
    Ihren Hosting-Anbieter</p>


<!-- Uploading files -->

<h3>Hochladen und entpacken</h3>

<p>Damit Sie mit Joomla arbeiten können, müssen Sie zuerst Dateien auf Ihrem Hosting Server hochaden. Dafür
    verwenden Sie Ihren Hosting- Dateimanager oder einen FTP-Manager eines Drittanbieters.</p>

<ol class="index-list">
    <li>Öffnen das Verzeichnis Ihrer Vorlage und gehen Sie zum 'joomla' Verzeichnis </li>

    <li>Wählen 'unzip.php' und 'fullpackage.zip' Dateien und laden Sie die auf Ihrem Server hoch (
        <a href="/help/de/how-upload-files-server-2.html" target="_blank">Wie laden man Dateien auf einem Server
            hoch.</a>
        )
    </li>
    <li> Im
        <abbr title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc."> Browser </abbr> tippen
        Sie den Pfad zur 'unzip.php' Datei von Ihrem Server (
        <i class="muted">http://your_domain_name/unzip.php</i>
        ).
    </li>

    <li>
        <p>Es sollte das folgende Bildschirm erscheinen:</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>

    <li> Im Auswahlfeld 'Wählen Ihre zip Datei aus' (eng. Choose your zip file) wählen Sie die herunterdeladene
        fullpackage.zip Datei aus. </li>

    <li>Im Feld 'Entpacken in' (eng. Unzip to) geben Sie das Verzeichnis ein, wohin Sie Dateien extrahieren
        möchten. </li>

    <li>klicken Sie auf "Auspacken" (eng. 'Unzip'), um fortzufahren.</li>
</ol>

<p class="alert alert-info"> Bitte achten Sie darauf, die korrekten Zugriffsrechte das Verzeichnis, wohin Dateien
    entpackt werden sollen, zu setzen. Je nach der Serverkonfiguration sollten die Zugriffsrechte CHMOD 755 oder 777
    sein. </p>


<!-- Joomla CMS installation -->


<h3>Joomla CMS Installation</h3>

<p>Öffnen Sie Ihren Browser und Tipppen Sie in der Adressleiste den Pfad zum Joomla-Verzeichnis (
    <i>z.B. http://your_domain_name/joomla</i>
    ). Es sollte sich das Startbildschirm von der Joomla CSM Installation erscheinen:
</p>


<h4>
    Konfiguration
</h4>


<p> Per DropDown "Sprache auswahlen" (eng. Select Language) wählen Sie die Sprache der Joomla Installation aus.
    .</p>

<p>
    <span class="label">Beachten Sie bitte:</span>
    via DropDown "Sprache auswahlen" können Sie nun die Sprache vom Joomla Installationsprozess auswählen. Dies
    ändert die Sprache Ihrer Website nicht.
</p>

<p>Im Bereich "Hauptkonfiguration" (eng. Main Configuration) sollen Sie alle Formularfelde ausfüllen. Benötigte
    Felder sind mit dem * Sternchen-Symbol markiert. </p>

<p> In der rechte Spalte füllen Sie die Eingaben "Admin Email", "Admin Username" and "Admin Password" aus, um einen
    neuen Benutzer von Joomla Website mit administrativen Rechten zu erstellen.</p>

<p class="alert alert-danger">"Admin Email", "Admin Username" und "Admin Password" sind für den Zugriff auf dem
    <abbr title="Joomla Administration Panel that is used to work with Web site content">Backend</abbr> ihrer Joomla
    Website erforderlich. Speichern Sie sie.
</p>

<p>Wenn Sie damit fertig sind, drücken Sie auf den Button
    <strong>Weiter</strong>
    (eng. Next) in der obere rechte Ecke, um fortzufahren.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>
    Datenbank
</h4>


<p> Im zweiten Schritt der Joomla CMS Installation geben Sie die Datenbankdetails ein. Wenn Sie sich nicht sicher
    sind, wenden Sie sich an Ihren Hosting-Anbieter, damit Sie die richtigen Daten erhalten. </p>

<p>Weil Sie Joomla von Grund auf installieren, sollten Sie nun "Host Name", "Benutzername"(Username), "Database
    Name" (Datenbankname) und "Password" angeben. Die anderen Optionen können Sie im Standardwert lassen. Obwohl
    kann es je nach dem Hosting-Anbieter ein bisschen anders sein. </p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>

<p> Danach klicken Sie auf dem Schalter
    <strong>Installieren</strong>
    (eng. Install) in der obere rechte Ecke, um fortzufahren.
</p>


<h4>
    Überblick
</h4>


<p> Sie haben der Joomla CMS Installation fast erledigt. Im Schritt „Überblick“ sollten Sie sich entschieden, ob Sie
    Joomla Beispieldaten installieren möchten oder nein. </p>

<p class="alert alert-warning">Beachten Sie bitte: Beispieldaten werden benötigt, wenn Sie möchten, dass die Joomla
    Website gleich als wie beim Template-Vorschau (einschliesslich alle Bilder, Sample Text und Module) aussieht.
    Damit Ihr Template als wie bei der Vorschauseite aussieht, wählen Sie das Paket von Beispieldaten mit den Namen
    "sample_theme###" aus (statt ### steht die Nummer Ihrer Theme) .</p>

<p>Wählen Sie das Paket von Beispieldaten, das Sie installieren möchten, oder wählen Sie “None” (Kein), wenn Sie die
    saubere Joomla Website ohne Inhalt erstellen möchten.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>

<p> Überprüfen Sie, ob die Zugangsdaten von der Datenbankkonfiguration und vom Admin Panel gelten, und, wenn es
    benötigt wird, senden Sie die an Ihre Emailadresse</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>

<p> Überprüfen Ihre Installation Einstellungen und schauen Sie, ob Ihrer Hosting Server die Joomla Anforderungen
    entspricht. Falls es eine rote Anzeige im Bereich "Recommended settings" (empfohlene Einstellungen) gibt, wenden
    Sie sich an Ihren Hosting Anbieter, um weitere Unterstützung zu erhalten.</p>


<p>Wenn Sie damit fertig sind, klicken Sie auf den Button
    <strong>Install/installieren</strong>
    in der obere rechte Ecke, um fortzufahren.
</p>
<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>


<h4>
    Installation fertiggestellt
</h4>


<p> Gratulation! Sie haben Joomla CMS erfolgreich installiert.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>

<p class="alert alert-danger"> Aus Sicherheitsgründen löschen Sie bitte das "Installation" Verzeichnis von Ihrem Joomla
    Root. </p>

<p class="alert alert-info">
    Tippp: Schauen Sie bitte das Video-Tutorial an:
    <a href="/help/de/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">Wie installiert man die Joomla 3
        Engine</a>
</p>

<p class="alert alert-warning">Beachten Sie bitte: wenn Sie mit dem Bereich " Installation fertiggestellt " (Complete
    Installation) fertig sind, können Sie die nächste Bereiche "Template Installation", "Beispieldaten Installation"
    (Sample data installation) und "Erweiterungen Installation" (Extensions Installation) überspringen, weil Sie
    alle diese Elemente schon installiert haben.</p>


<p> Jetzt können Sie mit der Konfiguration Ihrer Joomla CMS basierte Website beginnen. Drücken Sie auf den Button "<b>Site</b>"
    , um Ihre Website anzuschauen, oder auf "<b>Administrator</b>" , um Joomla Backend anzuschauen.
</p>