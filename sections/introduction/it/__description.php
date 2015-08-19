<h2 class="item1">Introduzione</h2>

<h5>Grazie per avere acquistato un modello Joomla. Questa documentazione comprende diverse sezioni che illustrano
    l’intero processo di configurazione e ammnistrazione di un sito Web Joomlaa partire dalla sua installazione. Abbiamo
    fatto il possibile per rendere questo manuale chiaro e semplice da usare.</h5>


<h3>Cos’è il CMS Joomla?</h3>

<p>Il CMS Joomla è una soluzione open sourceper realizzare siti Web ricchi di contenuti. Permette di creare siti
    internet e potenti applicazioni online senza ricorrere a particolari competenze tecniche. Molti aspetti, incluse la
    sua facilità di utilizzo e la sua estendibilità, hanno fatto di Joomla il più popolare software per siti Web tra
    quelli disponibili.
    <a href="http://www.joomla.org/about-joomla.html" target="_blank">Per saperne di più</a>
    .
</p>

<h3>Cos’è il modello Joomla</h3>

<p>Il modello Joomlaè un elemento disponibile per la vostra piattaforma CMS Joomla. In pratica, sarà possibile
    modificare l’aspetto del vostro sito Web Joomla semplicemente installando un nuovo modello in pochi facili passaggi.
    Il modello Joomla, nella sua semplicità, è dotato di tutti i file sorgenti necessariper modificarlo o estenderlo
    liberamente a vostro piacimento.</p>

<h3>La struttura dei File</h3>

<h6>Il pacchetto relativo al modello che avete scaricatoè composto da diverse schede. Vediamo nel dettaglio il contenuto
    di ogni scheda:</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Documentation</b></dt>
            <dd> contiene i file della documentazione</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd> File della documentazione principale. Ti trovi esattamente qui :)
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
            <dd> contiene l’archivio dei temi Joomla, il pacchetto di installazione rapidae un file script compresso.
            </dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        theme###.zip
                    </dt>
                    <dd> archivio temi. Contiene I file di tutti i temi. Può essere
                        <a href="#template-installation">installato tramite Joomla extension manager</a>
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        fullpackage.zip
                    </dt>
                    <dd> contiene il
                        <a href="#complete_install">pacchetto d’installazione completa Joomla</a>
                        con i file engine, i temi ei esempi di contenuti (dump del database, immagini campione)
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        unzip.php
                    </dt>
                    <dd> estrae I file da fullpackage.zip quando caricati sul server di hosting
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
            <dd> contiene gli screenshots dei modelli</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Sources</b>
            <dd> contiene i file sorgenti dei modelli</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd> file sorgenti per il modello Adobe Photoshop (.psd)
                    </dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        to_the_root_folder
                    </dt>
                    <dd> contiene file con esempi di contenuti che permetteranno al vostro sito di apparire come demo
                        live di un modello. Il contenuto di questa cartella dovrebbe essere caricato sulla vostra
                        directory root di Joomla.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        dump.sql
                    </dt>
                    <dd> file dump del database. Contiene esempi di temi.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        pkg_bundle.zip
                    </dt>
                    <dd> contieneestensioni aggiuntive disponibili con il tema
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
            <dd> contiene i link per scaricare i font da utilizzare nella personalizzazione del modello
            </dd>
        </dl>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                info.txt
            </dt>
            <dd> contieneistruzioni su come scaricare i file sorgenti
            </dd>
        </dl>
    </li>
</ul>