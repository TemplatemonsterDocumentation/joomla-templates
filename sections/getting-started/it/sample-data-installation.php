<h3>Installazione Dati di Esempio(Sample Data)</h3>

<p>I Dati di Esempioservono a visualizzare il vostro sito Joomla come la pagina demo
    live di un modello. Contengono campioni di articoli, immagini, impostazioni moduli,
    impostazioni siti web, ecc. Se non intendete usare dei campioni di immagini o
    qualsiasi altro contenuto di prova potete saltare questo passaggio.</p>

<p>Per installare idati di esempiodovrrete completare due semplici passaggi.</p>

<h4>Caricare un campione di immagini.</h4>

<p>Per caricare un campione di immaginisarà necessario aprire la directory del proprio
    modelloe andare nella scheda "sources". A questo punto dovreste vedere la directory
    "to_the_root_directory". Essa contiene dei file che andranno collocati all’interno
    della vostra root d’installazione. Utilizzare il file manager per caricare i file
    sul server.</p>

<h4>Importare un file SQL.</h4>

<p>L’ultimo passaggio, nonché il più importante nell’installazione dei dati di esempio
    consiste nell’importare il file SQL.Il file SQL è un dump deldatabase di esempio, e
    contiene tutti i dati del sito Joomla. Il file SQL può essere importato usando uno
    strumento di gestione del database (phpMyAdmin). Il file SQL del modello -
    "dump.sql" è allocato nella diretctory "sources" nel pacchetto del template. </p>


<p class="alert alert-danger">Per favore <b>NON </b> importare il file SQL se il vostro è un sito web live in quanto
    rimpiazzerebbe totalmente il database del vostro sito causando la perdita di tutti i vostri dati.</p>
<p class="alert alert-danger">Attenzione: prima di importare il file SQL assicurarsi cheil prefisso della tabella del
    vostro databasesia compatibile con il prefisso della tabella contenuta nel file SQL.</p>
<p>E’ possibile verificare il prefisso della tabella direttamente nel database
    utilizzando lo strumento di gestione del database. Verificate tra le tabelle
    effettuando la ricerca per nome. Il prefisso è una sequenza di simboli posti prima
    del nome della tabella. (
    <i>es. Il prefisso della tabella "jos_assets" è "jos_"</i>
    ).
    Il prefisso del database è contenuto anche nel file "configuration.php" nella
    directory root di Joomla. Cercate la riga 19: </p><code>public $dbprefix =
        'jos_';</code><p> (
    <i>in cui il prefisso è "jos_"</i>
    )
</p>

<p>Se i prefissi della tabella non combaciano aprite il file "dump.sql" con il vostro
    editor di codicie utilizzando lo strumentoTrova&amp;Sostituisci (chiavi CTRL+F or
    CTRL+H) rimpiazzereteil prefisso della tabella "jos_" (
    <i>usato nel file SQL</i>
    )
    con quello corrispondente al vostro database. Troverete un video tutorial
    dettagliato su <a
        href="/help/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">Come sostituire il prefisso del database in un file SQL.</a>.
</p>

<h6>Adesso sarà possibile importare il file SQL sul vostro database.<br>
    Per importare I dati di esempio sul vostro database dovrete seguire questi tre
    semplici passaggi: (guardate le slide in basso)</h6>

<ol class="index-list">
    <li><p>Selezionate il vostro database dalla lista dei database nella Colonna di
            sinistra dello strumento phpMyAdmin</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Cliccate su "Importa" (Import) dal menù di navigazione in alto</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Cliccate su "Scegli file" eapri il file browse in dump.sql nella directory
            "sorgenti" del modello</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Clicca sul pulsante "Vai" (Go) per importare i dati di esempio</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-info">Guardate il video dettagliato su <a
        href="/help/phpmyadmin-how-to-import-sample-data-dump-file.html"
        target="_blank">come importare il file SQL con lo strumento phpMyAdmin</a></p>