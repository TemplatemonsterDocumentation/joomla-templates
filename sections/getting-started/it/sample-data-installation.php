<h3>Installazione dei dati di esempio</h3>

<p>Dati di esempio vengono utilizzate per il sito Joomla per avere il modello come nella demo.
    Questi sono esempi di articoli e immagini, moduli tuning, sito web ecc..
    Se non hai bisogno di immagini di esempio o altri contenuti demo, saltare
    questo passaggio. </p>

<p>Installazione dei dati demo include due semplici passaggi.</p>

<h4>Scarica le immagini demo</h4>

<p>Per scaricare l'immagini demo, aprire il modello e passare alla cartella "sources". Qui si trova la cartella "to_the_root_directory". Esso contiene i file che si desidera caricare
    Joomla nella cartella di installazione principale. Per caricare i file sul server, utilizzare
    il file manager.</p>

<h4>Importazione del file SQL</h4>

<p>L'ultimo e più importante passo e quello di installare un database demo è importare il file SQL.
    SQL File - un dump del database, in cui tutti i dati vengono memorizzati sul sito Joomla. SQL File
    è possibile importare utilizzando la gestione di database lo strumento (phpMyAdmin).
    SQL file di modello "dump.sql" si trova nella cartella "font". </p>


<p class="alert alert-danger"><b>NON SI PUO'</b> importare il file SQL nel database del sito Web corrente, in quanto andrà a sostituire il contenuto del database e tutto il contenuto verrà perso.</p>

<p class="alert alert-danger">Nota: Prima di importare file SQL, assicurarsi che il prefisso delle tabelle del database
    appropriato corrisponde al prefisso delle tabelle del file SQL.</p>

<p>Le tabelle del database prefisso possono essere controllati direttamente nello strumento di gestione
    database. Notare i nomi delle tabelle. Prefisso - un insieme di caratteri
    prima del nome delle tabelle (<i>come esempio, nella tabella "jos_assets" prefisso è - "jos_"</i>).
    Anche file di database prefisso può essere trovato in "configuration.php" nella cartella principale del sito.
    Riga 19: </p><code>public $dbprefix = 'jos_';</code> <p>(<i>dove il prefisso è - "jos_"</i>).
</p>

<p>Se il prefisso delle altre tabelle del database corrisponde, vai nel file e apri il "dump.sql" in
    editor di testo utilizzando lo strumento &quot;Trova e sostituisci&quot; (tasti
    veloci CTRL+F oppure CTRL+H ) sostituire il prefisso delle tabelle "jos_" (<i>SQL viene utilizzato
        in file
    </i>) con il prefisso del database. È inoltre possibile utilizzare il video
      tutorial dettagliato che vi mostrerà, <a
        href="/help/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">come cambiare il prefisso del database nel file SQL</a>.
</p>

<h6>Ora importare il file in database SQL. <br>Per importare i dati di esempio nel database, seguire queste istruzioni (vedere le slide):</h6>

<ol class="index-list">
    <li><p>Selezionare il database desiderato nell'elenco a sinistra in phpMyAdmin strumento:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Aprire  la linguetta "Import" (Importa) nel menu di navigazione in alto:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Premere su "Choose file"  (Scegliere il file) dump.sql e individuare il file nella cartella dei modelli "sources":</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Premere il pulsante "Go" (Avanti), per importare i dati demo:</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-info">È inoltre possibile utilizzare il tutorial dettagliato che vi mostrerà, <a
        href="/help/phpmyadmin-how-to-import-sample-data-dump-file.html"
        target="_blank">come importare file SQL utilizzando lo strumento phpMyAdmin</a>
</p>
