<h2 class="item8">Aggiunzione</h2>

<p>Abbiamo cercato di rendere questa documentazione più comprensibile e accessibile possibile. Ma comunque sia,
    nel caso avrai difficoltà di qualunque tipo con i nostri modelli Joomla, proposte per migliorare i modelli 
    oppure sul miglioramento della documentazione, puoi sempre contattare direttamente il nostro Team di 
    Supporto Tecnico nei seguenti modi:</p>

<h4>Aiuto e Supporto</h4>
<ul class="marked-list">
    <li><a href="http://chat.template-help.com/" target="_blank">Chat</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit"
           target="_blank">Sistema Ticket</a></li>
</ul>
<h4>Documentazione</h4>
<ul class="marked-list">
    <li><a href="http://docs.joomla.org/Beginners" target="_blank">Joomla! Guida per
            i principianti</a></li>
    <li><a href="http://docs.joomla.org/Category:FAQ" target="_blank">Domande
            frequenti</a></li>
    <li><a href="http://docs.joomla.org/" target="_blank">Joomla! Documentazione</a></li>
    <li><a href="/help/cms-blog-templates/joomla/joomla-tutorials/" target="_blank">Joomla!
            Guide</a></li>
</ul>
<h4>Le soluzioni di eventuali problemi con i font web</h4>

<p>Nel caso di una visualizzazione errata dei caratteri web dopo l'installazione, apri per la redazione
    il file del modello index.php (\templates\theme****\index.php). Per fare questa operazione, passa nella sezione Manager dei modelli (Extensions -> Template Manager
    -> Templates) direttamente nella sezione pannello di amministrazione di Joomla! e scegli il modello in gestione (Theme**** Details and Files).</p>

<p>Successivamente trova la riga:</p>
    <code>"$doc->addStyleSheet('//fonts.googleapis.com/css?family=[---font
        utilizzato---]');"</code><p> e sostituisci con la liga:</p>
<code>"$doc->addStyleSheet('//fonts.useso.com/css?family=[---font
    utilizzato---]');".</code>
<h4>Espansione di Joomla!</h4>

<p>Sul sito <a href="http://extensions.joomla.org/" target="_blank">extensions.joomla.org</a>
    è possibile scaricare più di 6 mila moduli, plugin e estensioni, che permettono aggiungere
    diverse funzionalità ai siti web Joomla.</p>
<h4>Joomla! Avvertimento l'uso di cookies</h4>

<p>Per la legge ЕС o Cookies, devi aggiungere sul tuo sito il modulo, che si occuperà di avvisare
    e visualizzare un messaggio di avvertimento sul sito per  l'utilizzazione dei cookies. Noi raccomandiamo seguenti
    moduli:</p>
<ul class="marked-list">
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/24689"
           target="_blank">Cookie Accept</a></li>
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/21043"
           target="_blank">EU e-Privacy Directive</a></li>
</ul>
<h4>Ulteriori riferimenti</h4>
<ul class="marked-list">
    <li><a href="http://www.joomla.org/technical-requirements.html" target="_blank">Requisiti
            tecnici</a></li>
    <li>
        <a href="http://opensourcematters.org/index.php?option=com_content&amp;view=article&amp;id=56&amp;Itemid=155"
           target="_blank">Licenza d'uso</a></li>
</ul>

<h4>Unità personalizzate</h4>

<p class="alert alert-warning">
    Nel moduli di questo tipo, molto spesso è necessario utilizzare la proprietà loadmodule/loadposition, ad esempio: "{loadmodule articles_single, About us}" nel contenuto. Per 
    evitare gli errori 404 sul sito web, assicurati, che il nome del modulo collegato coincide con il modulo di collegamento che hai indicato.  In questo caso, il modulo "Chi Siamo" ("About us") deve essere nello stato pubblicato (published) e non deve contenere più di uno spazio nel titolo. Puoi trovare le informazioni dettagliate sul modulo loadmodule/loadposition sul seguente<a href="https://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank">sito</a>.
</p>

<h4>Validazione</h4>

<p class="alert alert-info">
    In tutti i nostri modelli ci atteniamo alle regole semantiche di scrittura di codice HTML markup e stili CSS. Tuttavia,
    alcuni errori possono ancora verificarsi con validazione W3C. Creazione al 100 per cento di codice arbitrario, come da
    standard W3C, esso limita l'uso delle moderne tecnologie di creazione dei siti internet basati, ad esempio, sulla 
    specifica CSS3 e HTML5 markup. L'obiettivo della nostra azienda è quello di fornire una ricca esperienza all'utente
    fornendo modelli di alta qualità, e per questo a volte dobbiamo trapassare delle regole per ottenere il risultato migliore.
</p>
