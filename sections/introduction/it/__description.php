
<h2 class="item1">Introduzione</h2>

<h5 align="justify">Congratulazioni per l'acquisto di un template di Joomla! Questa documentazione è costituito da più parti e descrive l'installating, la creazione e la creazione di un processo di sito Joomla.</h5>
<h5 align="justify">Abbiamo fatto del nostro meglio per rendere queste informazioni il manuale per essere presentato in modo semplice e diretto. Per facilità di riferimento, il testo del manuale fornisce è stata ristrutturata in diversi capitoli, si può vedere nel menu leftside. Siete in grado di navigare in qualsiasi parte della documentazione, utilizzando i collegamenti alle intestazioni dei contenuti attivi.</h5>
<h5 align="justify">Si consiglia di iniziare a leggere la documentazione presso la prima sezione.</h5>
<h3>Che cosa è Joomla CMS?</h3>

<p align="justify">CMS Joomla è una soluzione opensource per la creazione di siti web. Ampie funzionalità del sistema permette di creare siti web e potenti applicazioni online sia. Il CMS Joomla non richiede alcune abilità e formazione supplementare per essere azionati. Tutto il necessario theoty e competenze di base descrizione è necessario può essere trovato in questo documantation.</p>
<p align="justify">Con questi vantaggi, facilità d'uso e la sua scalabilità tra cui, il CMS Joomla è diventato il software sito più a disposizione. <a href="http://www.joomla.org/about-joomla.html" target="_blank">Per saperne di più</a>
</p>

<h3>Che cosa è JoomlaTemplate?</h3>

<p align="justify">Template Joomla è un tema per il vostro sito web basato su piattaforma CMS Joomla. In altre parole, si può facilmente cambiare il vostro sito aspetto Joomla con l'installazione di un nuovo modello. Il processo di installazione intero è effettuata da un paio di facile da affrontare passaggi. Mentre semplice, il modello di Joomla è dotato di tutti i file di origine necessari cui si è libero di modificarla.</p>
<div class="alert alert-info">
<div align="justify">Ci sono spesso molti contesti diversi che sono disponibili con un nuovo modello, e perché questo è un software open source, non è sempre lo stesso per ogni sviluppatore. Assicurarsi di leggere attraverso questa documentazione disponibile per il modello che si sta installando in modo da sapere quali sono a vostra disposizione funzionalità.</div>
</div>

<h3>La struttura del modello</h3>

<h6>Set modello acquisito è costituito da diverse cartelle. Diamo uno sguardo ai contenuti di ciascuna cartella:</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Documentation</b></dt>
            <dd> essa contiene file di documentazione</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd> file di documentazione principale. Stai leggendo ora :)
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
            <dd> esso contiene un archivio con la versione di Joomla tema per una rapida installazione e il file di script per decomprimere.
            </dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        theme###.zip
                    </dt>
                    <dd> archiviare un tema. Esso contiene tutti i file del tema. Esso deve essere impostato
                        <a href="#template-installation">utilizzando Joomla Extensions Manager</a>
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        fullpackage.zip
                    </dt>
                    <dd> esso rappresenta
                        <a href="#complete_install">
                            Kit per la completa installazione di Joomla
                        </a>
                        con i file del motore, tema e dati demo (dump del database, immagini di esempio)
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        unzip.php
                    </dt>
                    <dd> file utilizzato per decomprimere dopo aver caricato fullpackage.zip sul server di hosting
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
            <dd> Esso contiene screenshot del tema</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Sources</b>
            <dd> contiene tematiche dei dati file della demo</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd> file del modello di origine per Adobe Photoshop (.psd)
                    </dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        to_the_root_folder
                    </dt>
                    <dd> cartella con i dati di esempio, necessari per il sito web che deve essere visualizzato nello stesso modo della versione demo del modello. I contenuti
                        di questa cartella devono essere caricate nella cartella principale di Joomla
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        dump.sql
                    </dt>
                    <dd> file di dump del database. Contiene tematiche di dati demo
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        pkg_bundle.zip
                    </dt>
                    <dd> esso contiene le estensioni aggiuntive
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
            <dd> esso contiene link dove è possibile scaricare i font del modello
            </dd>
        </dl>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                info.txt
            </dt>
            <dd> disimballaggio istruzioni per i file dei dati della demo</dd>
        </dl>
    </li>
</ul>
