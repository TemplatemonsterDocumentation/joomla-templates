<h2 class="item1">Einleitung</h2>

<h5 align="justify">Herzlichen Glückwunsch zum Kauf einer Joomla-Vorlage! Die Dokumentation besteht aus unterschiedlichen Teilen und zeigt Ihnen, wie man Joomla Website von Grund auf selbst erstellt und verwandelt.. </h5>
<h5 align="justify">Wir haben unser Bestes gegeben, um diese Anweisungen klar und einfach zu machen. Zur leichteren Navigation ist der Text, den das Handbuch zur Verfügung stellt, in verschiedene Kapitel umstrukturiert worden. Sie können diese im linken Menü sehen. Sie können zu einem beliebigen Teil der Dokumentation navigieren, indem Sie die aktiven Inhaltüberschriften verwenden.</h5>
<h5 align="justify">Wir empfehlen Ihnen, mit dem ersten Abschnitt der Dokumentation anzufangen.</h5>
<h3>Was ist Joomla CMS?</h3>
<p align="justify">Joomla CMS ist eine Open Source-Lösung zur Erstellung den inhaltsreichen Webseiten. Mit Joomla CMS können Sie Webseiten und mächtige online Anwendungen erstellen und dafür wird es fast keine technische Fähigkeiten und Kenntnisse benötigt.  Alle notwendigen theoretischen und grundlegenden Fähigkeiten , die Sie benötigen, finden Sie in dieser Dokumantation.</p>
<p align="justify"> Dank ihre Benutzerfreundlichkeit und Erweiterungsfähigkeit ist jetzt Joomla die populärste Website Software. <a href="http://www.joomla.org/about-joomla.html" target="_blank">Mehr erfahren</a> </p>
<h3>Was ist JoomlaTemplate?</h3>

<p align="justify">Joomla Template ist ein Skin für Ihre Joomla CMS Plattform. Das heißt, dass Sie die Darstellung von Ihrer Webseite mit Hilfe vom Template einfach und schnell verändern können. Dafür sollen Sie nun das neue Template in nur wenigen einfachen Schritten installieren. Im Joomla Template finden Sie alle benötige Quelldateien, um es nach Ihrem Wünsch zu ändern und zu erweitern. </p>
<div class="alert alert-info">
<div align="justify">Es gibt oft viele verschiedene Einstellungen, die mit einer neuen Vorlage verfügbar sind, und da es eine Open-Source-Software ist, ist es nicht immer das gleiche für jeden Entwickler. Vergewissern Sie sich, dass Sie die Dokumentatin lesen, die zu der Vorlga gehört, die Sie installieren, so dass Sie wissen, welche Funktionen Ihnen zur Verfügung stehen.</div></div>

<h3>Datenstruktur</h3>

<h6> Das heruntergeladene Template-Paket besteht aus vielen verschiedenen Ordnern. Schauen wir mal, was sich in jedem Ordner
    befindet:</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Documentation</b></dt>
            <dd> enthält Dokumentationsdateien</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd> die Hauptdokumentation. Sie lesen es gerade :)
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Joomla</b></dt>
            <dd> enthält ein Archiv mit dem Joomla Thema, Installationspaket und einer Datei mit dem unzip script.
            </dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        theme###.zip
                    </dt>
                    <dd> das Themarchiv. enthält alle Datein des Themas. Es sollte <a href="#template-installation">mit HIlfe des Joomla extension manager</a> installiert werden.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        fullpackage.zip
                    </dt>
                    <dd> enthält das 
                        <a href="#complete_install">
                           komplette Joomla Installationspaket </a>
                        mit Dateien von Engine, Theme und Beispielinhalte (Datenbank dump Datei und Beispielbilder)
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        unzip.php
                    </dt>
                    <dd> Datei zum Entpacken von Dateien aus fullpackage.zip, nachdem man die auf dem Hosting Server
                        hochladen hat
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Screenshots</b>
            <dd> enthält Screenshots vom Template</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Sources</b>
            <dd> enthält Quelldateien der Vorlage</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd> Adobe Photoshop Quelldateien (.psd) vom Template
                    </dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        to_the_root_folder
                    </dt>
                    <dd> hier befinden sich Dateien und Ordner, die zum Hauptverzeichnis Ihrer Joomla Installation
                        hochgeladen werden sollen
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        dump.sql
                    </dt>
                    <dd> die Datenbank dump Datei. Enthält Beispieldaten des Themas
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        pkg_bundle.zip
                    </dt>
                    <dd> enthält zusätzliche Erweiterungen
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                fonts_info.txt
            </dt>
            <dd> enthält Links zum Download der benutzerdefinierten Schriften </dd>
        </dl>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                info.txt
            </dt>
            <dd> Anweisungen zum Entpacken den Quelldateien</dd>
        </dl>
    </li>
</ul>
