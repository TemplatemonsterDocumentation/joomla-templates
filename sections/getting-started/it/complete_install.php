<h3>Installazione Completa</h3>

<p>Non ho un sito Web in Joomla e vorrei installarlo per la prima volta.</p>

<p>Tramite questo sistema installerete un motore CMS Joomla,un modello Joomla, un contenuto esempioe le relative
    estensioni necessarie.</p>

<!-- Creating database -->


<h3>Creazione di un Database</h3>

<p>Quando avrete finito di caricare i file all’interno del server di hostingpotrete preparare un nuovo databaseper il
    vostro sito Joomla. Potrete creare il nuovo database ricorrendo allo strumento di gestione del database dal pannello
    di controllo del vostro host (
    <i>di solito PhpMyAdmin</i>
    ).
</p>

<p>Con lo strumento phpMyAdmin creerete il vostro database in 3 semplici passi: (guardate le slide in basso)</p>

<ol class="index-list">
    <li>Cliccate sul pulsante“Databases”dal menù di navigazione in altoper accedere all’elenco dei database </li>

    <li>Inserite il nome del database nella voce "Crea nuovo database"(eng. Create new database) </li>

    <li>Cliccate sul tasto “Crea” sulla destra(eng. Create)</li>
</ol>

<p>Il vostro database è visibile adesso nell’elenco dei database. Cliccate sul nome corrispondente per accedervi.</p>


<div class="flexslider clearfix img-polaroid">
    <ul class="slides">
        <li>
            <img src="img/database-create-1.jpg" alt=""/>

            <div class="flex-caption">
                <p>1. Fare clic sul pulsante Database per accedere alla lista di database</p>
            </div>
        </li>
        <li>
            <img src="img/database-create-2.jpg" alt=""/>

            <div class="flex-caption">
                <p>2. Nome del database di ingresso<br> 3. Fare clic sul pulsante Create</p>
            </div>
        </li>
        <li>
            <img src="img/database-create-3.jpg" alt=""/>

            <div class="flex-caption">
                <p>4. Il database può essere visto nel profilo del database. Fare clic sul suo nome per ottenere
                    l'accesso al database.</p>
            </div>
        </li>
    </ul>
</div>


<p>Guarda anche il video tutorial su
    <a href="/help/how-to-create-a-database.html" target="_blank">Come creare un database</a>
</p>

<p class="alert alert-info">Nel caso di problemi nella creazione del database contattare il vostro fornitore di hosting
    per assistenza.</p>


<!-- Uploading files -->

<h3>Caricamento e decompressione</h3>

<p class="">Per iniziare a lavorare con Joomla bisognerà prima caricare i file sul server di hosting. Per farlo potrete
    utilizzare il vostro hosting file manager o un FTP manager esterno.</p>

<ol class="index-list">
    <li>Aprite la cartella delle directory del vostro modelloe andate sulla directory 'joomla' </li>

    <li>2. Selezionare i file 'unzip.php' e 'fullpackage.zip' e caricateli sul vostro server(
        <a href="/help/how-upload-files-server-2.html" target="_blank">Come caricarei file sul server.</a>
        )
    </li>
    <li>Digitate il percorso del file 'unzip.php' sul vostro server (
        <i class="muted">http://your_domain_name/unzip.php</i>
        ) in your
        <abbr title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc.">nel browser.</abbr>.
    </li>

    <li><p>Dovreste visualizzare la seguente schermata:</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>


    </li>

    <li>Nella finestra 'Choose your zip file' seleziona il file fullpackage.zip caricato. </li>

    <li>Nella casella 'Unzip to' specifica la directory in cui volete estrarre i file. </li>

    <li>Clicca sul pulsante 'Unzip' per proseguire.</li>
</ol>

<p class="alert alert-info">Assicurarsi di avere impostato i permessi corretti per la directory in cui avete deciso di
    estrarre i file. I permessi dovrebbero essere CHMOD 755 o 777 a seconda della configurazione del vostro server.</p>


<!-- Joomla CMS installation -->


<h3>Installazione del CMS Joomla</h3>

<p> Assicurarsi di aver completato tutte le
    <a href="#prepare">fasi preparatorie</a>
    e di essere in possesso di tutto il necessario.
</p>

<p>Aprire il browser e digitare il percorso della vostra directory Joomla sulla barra degli indirizzi(
    <i>e.g. http://your_domain_name/joomla</i>
    ). Dovreste visualizzare la schermata iniziale dell’istallazione del CMS Joomla:
</p>


<h4>
    Configurazione
</h4>


<p> Utilizzate la finestra "Select Language" per scegliere la lingua dell’installazione di Joomla.</p>

<p>
    <span class="label">Attenzione:</span>
    la finestra "Select Language" vi permetterà di scegliere la lingua per la sola fase di installazione. Non
    modificherà la lingua del vostro sito.
</p>

<p>Dovrete riempire tutti i campi dell’area "Main Configuration". I campi richiesti sono contrassegnati da un asterisco
    *.</p>

<p>Compila i campi "Admin Email", "Admin Username" e "Admin Password" nella Colonna di destraper creare un nuovo utente
    Joomla con i diritti di amministratore.</p>

<p class="alert alert-danger">"Admin Email", "Admin Username" e "Admin Password" sono necessari per accederealla sezione
    del Web Joomla riservata agli
    <abbr title="Pannello di Amministrazione di Joomla che viene utilizzato per lavorare con i contenuti del sito Web">amministratori</abbr>.
    Conservateli per non dimentcarli.
</p>

<p>Quando avrete completato questa parte cliccate sul pulsante
    <strong>Next</strong>
    sull’angoloalto a destra per proseguire.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>
    Database
</h4>


<p>Durante la seconda fase dell’installazione del CMS di Joomla dovrete inserire i dettagli del vostro database. Se non
    siete sicuri contattate il provider del vostro hosting per avere i dettagli precisi.</p>

<p>Trattandosi di un’installazione di Joomla dal principiodovrete solamente inserire "NomeHost", "Username",
    "NomeDatabase" e "Password". Potrete tranquillamente lasciare le altre impostazioni come predefinite. Tuttavia
    potrebbe esserci qualche differenza in funzione del vostro provider di hosting.</p>

<p>Dopo aver completato questa operazione cliccate sul pulsante
    <strong>Install</strong>
    nell’angolo in alto a destra per proseguire.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>


<h4>
    Panoramica
</h4>


<p>Avete quasi completato l’installazione del CMS Joomla. In questa fase dovrete selezionare se installare o menoi dati
    di esempio Joomla.</p>

<p class="alert alert-warning">Attenzione: I dati di esempiosono richiesti se volete fare apparire il vostro sito
    Joomlacome un modello demo livecon tutte le immagini, i campioni di testo e i moduli configurati. Per visualizzare
    il vostro modulo come una pagina live demoselezionate il pacchetto dati di esempio con il nome "sample_theme###"
    dove ### è il numero del vostro tema.</p>

<p>Selezionate il pacchetto Dati di Esempio(Sample Data) se volete installarlo, o scegliete "None" se preferite
    impostare il sito Joomla senza nessun contenuto.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>

<p>In basso potrete verificare che i dati di accesso inseriti nella configurazione del database e nel pannello di
    amministrazionesiano validie inviarli al vostro indirizzo mail se necessario</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>

<p>Sarà inoltre possibile visualizzare le impostazioni di installazione everificare che il server di hosting sia
    compatibile con i requisiti di Joomla. Se doveste trovare una finestra di notifica in rossonella sezione
    "Impostazioni raccomandate" contattate il vostro provider di hosting per assistenza.</p>

<p>Dopo aver finito cliccate sul pulsante
    <strong>Install</strong>
    sulla parte alta dell’angolo a destra per proseguire.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>

<h4>
    Installazione Completata
</h4>


<p>Congratulazioni! Avete installato con successo il CMS Joomla.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>


<p class="alert alert-danger">Per ragioni di sicurezza, sarà opportuno cancellare la directory di "installation" dalla
    vostra root del vostro sito.</p>

<p class="alert alert-info">Suggerimento: Guardate il video tutorial su
    <a href="/help/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">Come installare il motore Joomla 3</a>
</p>

<p class="alert alert-info">Attenzione: Completando la sezione "Installazione Completata" potrete saltare i passaggi
    successivi "Installazione Modello", "Installazione Dati di Esempio" e "Installazione Estensioni" disponendo già di
    tutti gli elementi installati.</p>


<p>Adesso siete pronti a procedere con la configurazione del vostro sito Web basato su un CMS Joomla. Clicate sul
    pulsante
    <b>"Site"</b> per visualizzare il vostro sito o "<b>Administrator</b>" per accedere all’area riservatadi Joomla.</p>