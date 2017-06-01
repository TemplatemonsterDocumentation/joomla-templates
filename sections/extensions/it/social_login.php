<h3>Joomla Social Login</h3>

<p align="justify"><strong>Social Login</strong>, componente di autenticazione social network permette di effettuare il login al sito Joomla tramite seguenti social network: Vkontakte, Twitter, Facebook, Odnoklassniki, LinkedIn, servizi Yandex, Google, e Mail.ru.</p>
<h5>Impostazione slogin per il servizio Slogin.info</h5>
<ol class="marked-list">
  <li>Dopo l'installazione, andare alle impostazioni del componente: <strong>Componenti</strong> &gt;   <strong>Slogin</strong>.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-1.jpg" alt="">
  </figure>
</p>
  <li>Allora avete bisogno di ottenere un<strong> ID </strong>e<strong> password</strong>, dove trovarli?</li>
  <li>Vai alla pagina: <a href="http://slogin.info">http://slogin.info</a></li>
  <li>Se non ti sei ancora registrato, puoi semplicemente accedere attraverso la rete sociale.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-2.jpg" alt="">
  </figure>
</p>
  <li>Fare clic sul pulsante <strong>Aggiungi Sito</strong>.</li>
  <li>In <strong>Callback</strong> formato di riferimento http://<strong>site.ru</strong>/index.php?option=com_slogin&amp;task=check&amp;plugin=service.    </li>
     <figure class="img-polaroid">
    <img src="img/joomline.png" alt="">
     </figure>>
  <li><strong>Site.ru</strong> sostituire sul tuo sito o è possibile copiare il link dal campo pronto <strong>Callbsck URL</strong> nelle impostazioni slogin.</li>
</br>
  Vai a <strong>Componenti</strong> &gt; <strong>Slogin</strong>. Aprire le impostazioni del plugin.
<p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>Trova <strong>Callback URI </strong>campo di opzione e copiare il percorso URL.</p>
   <figure class="img-polaroid">
      <img src="img/sociallogin-4.jpg" alt="">
  </figure>
  <li>In <strong>Password</strong> campo, immettere la parola segreta.</li>
  <li>Fare clic sul pulsante <strong>Inserisci</strong>.</li>
  <li>Dopo l'aggiunta di un sito riceve il suo utente <strong>ID</strong> e <strong>password</strong>, che è entrato nel passaggio precedente.</li>
  <li>Selezionare la rete che si desidera e salvare le impostazioni.</li>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <li>Ora è necessario pubblicare i plugin e il modulo.</li>
  <li>È possibile pubblicare i plugin [auth, sociale Accesso Google autenticazione, sociale Accesso Instagram autenticazione, ect sociale Accesso Facebook] tramite la finestra delle impostazioni del componente [<strong>Componenti</strong> &gt; <strong>Slogin</strong>].</li>
</ol>
<ol class="marked-list">
  <p>Per questo, aprire le impostazioni del plugin.
  </p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>E il cambiamento <strong>Slogin plugin</strong> su <strong>Abilitare</strong>.
  </p>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-6.jpg" alt="">
    </figure>
  </p>
  <p>Sarete in grado di vedere il <strong>Slogin </strong>stato attuale plugin <strong>Editoriale</strong> colonna.</p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-8.jpg" alt="">
    </figure>
  </p>
  <li>Per pubblicare il <strong>Slogin</strong> modulo per navigare <strong>Estensioni</strong> &gt; <strong>Moduli</strong>. Trovare il <strong>Slogin</strong> modulo utilizzando i filtri. Seleziona<strong> Slolin </strong>tipo di modulo in &quot;<strong>-Seleziona Tipo-</strong>&quot; discesa e vedrete la <strong>Slogin</strong> modulo nella lista.</li>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-7.jpg" alt="">
    </figure>
  </p>
<li>Premere il link del titolo del modulo per essere portato all'interfaccia impostazioni del modulo.</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-9.jpg" alt="">
    </figure>
  </p>
 <p>Impariamo di più sulla <strong>Slogin</strong> impostazioni del modulo:</p>
 <table width="980"  class="options-table">
  <tr>
        <td width="154" class="col-1"><strong>Visualizza Login Form</strong></td>
        <td width="29">-</td>
      <td width="781">Sia per mostrare la<span class="col-1"> Login Forma.</span></td>
  </tr>
    <tr>
        <td class="col-1"><strong>Link alle conti si fondono</strong></td>
        <td>-</td>
        <td><div align="justify">Mostra il link per la gestione dei profili dei social network legati. Il collegamento viene visualizzato nel modulo slogin di un utente autorizzato.</div></td>
    </tr> <tr>
        <td class="col-1"><strong> Link su profile </strong></td>
        <td>-</td>
        <td><div align="justify">Dimostrare il legame profilo. Il collegamento viene visualizzato nel modulo slogin di un utente autorizzato.</div></td>
    </tr>
    <tr>
        <td class="col-1"><strong>Intro Text</strong></td>
        <td>-</td>
        <td>testo HTML da visualizzare prima di autorizzare sui social network.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong> Pre-text </strong></td>
        <td>-</td>
        <td>Questo è il testo o HTML che viene visualizzato sopra il form di login.</td>
    </tr>
    <tr>
    <td class="col-1"><strong> Post-text </strong></td>
        <td>-</td>
        <td>Questo è il testo o HTML che viene visualizzato sotto il form di login.</td>
    </tr>
          <td class="col-1"><strong>Login Redirection Pagina</strong></td>
        <td>-</td>
        <td><div align="justify">Selezionare la pagina che l'utente verrà reindirizzato dopo un login riuscito. Selezionare una delle pagine elencate nel menu a discesa. scelta <strong>Default</strong> tornerà alla stessa pagina.</div></td>
    </tr>    <td class="col-1"><strong> Logout Redirection Pagina </strong></td>
        <td>-</td>
        <td><div align="justify">Selezionare la pagina che l'utente verrà reindirizzato dopo il logout. Selezionare una delle pagine elencate nel menu a discesa. scelta <strong>Predefinito</strong> tornerà alla stessa pagina.</div></td>
    </tr>
</table>
<p></p>
<li>Scegliere la posizione del modulo. Selezioniamo il <strong>megamenu</strong> posizione.</li>
<li>
  <div align="justify">Pubblicare il modulo [Puoi puplish modulo tramite il Modules Manager, premendo il tasto rosso &quot;x&quot; pulsante vicino al titolo modulo.].</div>
</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-10.jpg" alt="">
    </figure>
  </p>
<li>Salvare le impostazioni.</li>
<li>
  <div align="justify">Torna al tuo sito web e aggiornare la pagina. Ora siete in grado di accedere al tuo sito web Joomla attraverso numerosi social network.</div>
</li>
</ol>
<div class="alert alert-warning">
<p>Per ulteriori informazioni <a href="http://joomline.org/docs/slogin.html">joomline.org/docs</a> documentazione ufficiale.</p></div>