<h3>Nutzung des Parallaxeneffektes (Parallax effect)</h3>

<p>Um den Parallaxeneffekt zu realisieren, wird in der Vorlage jQuery-Plugin <a
        href="http://markdalgleish.com/projects/stellar.js/" target="_blank">Stellar</a>
    verwendet.</p>

<p>Um den Parallaxeneffekt auf der Seite zu nutzen, sollen Sie zu "Vorlagenmanager ->
    Vorlagen" gehen, dann zu verwendeter Vorlage (Theme**** Details and Files) gehen und
    die Datei "index.php" öffnen. Auf dem entsprechenden Block, zum Beispiel,
    "folio-row", fügen Sie die Eigenschaft</p>
<code><code>data-stellar-background-ratio="[Wert]"</code></code>

<p>wo[Wert] ist der Wert relativ zur normalen Scrollgeschwindigkeit. Ausführlich darüber
    können Sie in <a href="http://markdalgleish.com/projects/stellar.js/docs/"
                     target="_blank">der Dokumentation</a> zum Plugin lesen.</p>

<p>Nachdem Sie alle Aktionen durchgefüht haben, wird auf der entsprechenden Seite der
    Parallaxeneffekt auf dem entsprechen Block angezeigt.</p>

<figure class="img-polaroid">
    <img src="img/parallax-1.png" alt="">
</figure>