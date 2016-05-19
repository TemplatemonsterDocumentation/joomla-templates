<h2 class="item1">Introduzione</h2>

<h5>Grazie per aver acquistato un template Joomla. Questa documentazione è costituita da più parti, e copre l'intero
    processo di installazione e configurazione sito Joomla da zero. Abbiamo fatto ogni sforzo per rendere questo manuale più comprensibile
    ed utilizzabile. </h5>


<h3>Cos'è il CMS Joomla?</h3>

<p>Joomla CMS - è un software open source per la costruzione di siti web. Esso consente di creare siti web e
    potenti applicazioni on-line, e non richiede quasi nessuna competenza tecnica o conoscenze di gestione. Molte
    funzionalità, tra cui la facilità d'uso e l'estensibilità, hanno reso Joomla il programma più popolare per
    siti internet.
    <a href="http://www.joomla.org/about-joomla.html" target="_blank">Dettagli</a>
</p>

<h3>Che cosa è un template Joomla?</h3>

<p>Template Joomla - è un tema per la piattaforma CMS Joomla. In altre parole, l'aspetto del sito Joomla può essere facilmente cambiato
    impostando un nuovo modello seguendo alcuni semplici passaggi. Per tutta la sua semplicità, template Joomla contiene tutti i
    file di origine necessari che possono essere modificati, se lo desideri.</p>

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
