<h3>Installazione completa</h3>

<p>Questo metodo è adatto a voi, per avere un sito web Joomla e quando si desidera installarlo da zero. </p>

<p>Utilizzando questo metodo, avrai il motore installato su CMS Joomla, template Joomla, i dati di esempio e tutto il necessario compreso le espansioni.</p>

<!-- Creating database -->

<h3>Creazione di un database</h3>

<p>Quando tutti i file verranno caricati sul server di hosting, è necessario preparare un nuovo database per il sito web Joomla. Essa
    potrà essere creata utilizzando i dati utensile di gestione di database nel web hosting direttamente dal pannello di controllo(<i> solitamente usato il PhpMyAdmin</i>).
</p>

<h6>Con phpMyAdmin è possibile creare un nuovo database, seguire i 3 semplici passi (segui le seguenti slide):</h6>

<ol class="index-list">
    <li>Fare clic sul pulsante di database (database) nel menu di navigazione in alto per andare alla lista dei database.</li>

    <li>Immettere il nome del database nella sezione "Create new database" (Creare un nuovo database). </li>

    <li>Fare clic sul pulsante "Create" (Crea) sulla destra.</li>
</ol>

<p>La banca dati apparirà nella lista. Clicca sul nome del database per accedere.</p>

<div class="owl-carousel">
    <div class="item">
        <p>1. Aprire la scheda "Database" (Database) per andare alla lista dei database:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Immettere il nome del database:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Fare clic sul pulsante "Start":</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. La banca dati apparirà nella lista. Clicca sul nome del database per accedere:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">È inoltre possibile utilizzare il video tutorial dettagliato:
    <a href="/help/how-to-create-a-database.html" target="_blank">Come creare un database</a>.
</p>

<p>Se avrai difficoltà con la creazione del database, contattare il proprio fornitore di hosting per il supporto. </p>

<!-- Uploading files -->

<h3>Scaricare e decomprimere</h3>

<p>Per iniziare con Joomla, si desidera caricare file sul server di hosting. Questo può essere fatto con il
    File manager del hosting nel pannello di controllo o tramite il FTP.</p>

<ol class="index-list">
    <li>Aprire il modello, e passare alla cartella 'joomla'.</li>

    <li>Selezionare i file 'unzip.php' e 'fullpackage.zip' e caricarli sul server (<a href="/help/how-upload-files-server-2.html" target="_blank">Come caricare file sul server</a>).
    </li>
    <li>Immettere il percorso del file 'unzip.php' sul server (<i class="muted">http://your_domain_name/unzip.php</i>) nel tuo browser <abbr
            title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc."></abbr>.
    </li>

    <li>
        <p>Si dovrebbe vedere la seguente finestra:</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>
    </li>
    <li>Nella sezione 'Choose your zip file’ (Scegli il file zip) Selezionare il file scaricato fullpackage.zip. </li>

    <li>Nella sezione (Decomprimere in…) specificare la cartella in cui si desidera estrarre i file. </li>

    <li>Premi il pulsante 'Unzip’ (Decomprimere), per estrarre i file.</li>
</ol>

<p class="alert alert-info">Impostare le autorizzazioni corrette per la cartella in cui si desidera decomprimere i file. I permessi devono
    essere chmod 755 o 777, a seconda della configurazione del server.</p>


<!-- Joomla CMS installation -->


<h3>Installazione Joomla CMS</h3>

<h6> Assicurarsi di avere tutte le
    fasi preparatorie
    e la disponibilità dei programmi richiesti.
</h6>

<p>Aprire il browser e cercare la cartella Joomla nel tuo browser (<i>ad esempio, http://your_domain_name/joomla</i>). Si dovrebbe vedere la finestra di installazione Joomla CMS:
</p>


<h4>Configurazione sito</h4>

<p>Nell'elenco a discesa “Select Language” (Scegli la lingua) selezionare la lingua di installazione Joomla.</p>

<p>
    <span class="label">Si prega di notare:</span>
    discesa “Select Language” (Scegli la lingua) esso consente di selezionare solo la lingua del processo di installazione di Joomla. Queste impostazione
non pregiudicano la lingua del sito Web.
</p>

<p>E' necessario compilare tutti i campi nella sezione “Main Configuration” (Impostazioni principali). I campi obbligatori sono contrassegnati
    con il asterisco *.</p>

<p>Compilare i campi “Admin Email” (Email amministratore), “Admin Username” (Nome amministratore) e “Admin Password” (Password
    amministratore) nella colonna di destra, per creare un nuovo sito web utente Joomla con i permessi dell'amministratore.</p>

<p class="alert alert-danger">”Admin Email” (Email amministratore), “Admin Username” (Nome amministratore) e "Admin  Password” (Password amministratore) necessario per accedere al sito Web di amministrazione Joomla. Tenerli in una cassetta di sicurezza
    nel posto sicuro. </p>

<p>Quando si immette tutti i dati, cliccare sul pulsante
    <strong>Next</strong> (Avanti)
    nell'angolo in alto a destra successivamente:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>Configurazione della database</h4>


<p>Nella seconda fase di installazione di Joomla CMS, è necessario inserire i dettagli del database. Se essi non sono noti, fare riferimento al
    hosting provider.</p>

<p>Dal momento che Joomla è installato da zero, basta inserire "Host Name" (Nome di hosting), "Username" (Nome
    utente), "Database Name" (Nome database) e la "Password" (Password). Altre opzioni dovono essere lasciate di
    default, anche se ci possono essere differenze a seconda del fornitore di hosting. </p>

<p>Quando si entra con i dettagli, fare clic sul pulsante
    <strong>Install</strong> (Installare)
    nell'angolo in alto a destra:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>

<h4>Panoramica</h4>

<p>Installare Joomla CMS è completare la procedura. Al "Panoramica" è necessario specificare l'installazione di dati demo Joomla. </p>

<p class="alert alert-warning">Nota: i dati demo sono necessarie se si vuole avere una visualizzazione del sito di default di Joomla
    completamente installato come esempio,
    come la demo dle modello: con tutte le impostazioni immagini, testi e moduli. Per fare questo, selezionare i dati demo chiamati
    "sample_theme###", dove ### - è il numero dell'argomento.</p>

<p>Selezionare i dati demo per l'installazione o fare clic "None" (No), se 

non si desidera installare i dati demo per il tuo sito Joomla:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>

<p>Qui di seguito, è possibile verificare se i dettagli di accesso al database e i dettagli nel pannello di amministrazione sono corretti, è anche possibile inviarli al proprio indirizzo e-mail:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>

<p> È inoltre possibile controllare le impostazioni della installazione e la loro conformità con i requisiti del server che ospita. Se si note una sezione di allarme segnalato in rosso “Recommended settings” (Impostazioni consigliate), contattare il proprio fornitore di hosting per
    ulteriore sostegno:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>

<p>Una volta terminata la verifica, premere
    <strong>Install</strong> (Installare)
    nell'angolo in alto a destra.
</p>

<h4>Installazione completa</h4>


<p>Complimenti! È stato installato Joomla:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>

<p class="alert alert-danger">Al fine di aumentare la sicurezza, eliminare la cartella "Installation" la cartella principale di Joomla.</p>

<p class="alert alert-info">Suggerimento:
    È possibile utilizzare il video tutorial dettagliato:
    <a href="/help/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">Come installare Joomla Motore 3</a>
</p>

<p class="alert alert-warning">Nota: Se si esegue una nuova installazione, è possibile saltare
    sezione “Template Installation” (Installazione del modello), “Sample data installation” (Installa dati demo) e
    “Extensions Installation” (Installazione delle estensioni), poiché tutti questi elementi sono installati.</p>


<p>Ora è possibile iniziare a personalizzare il sito web CMS Joomla. Stampa “<b>Site</b>” (Sito), per scoprire
    sito web oppure “<b>Administrator</b>" (Amministratore), andare al pannello di amministrazione di Joomla.
</p> 
