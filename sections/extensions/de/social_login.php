<h3>Joomla Social Login</h3>

<p align="justify">Das <strong>Social Login</strong> Social Network Authentifizierung Komponente ermöglicht die Anmeldung auf Joomla Website über folgende soziale Netzwerke: Twitter, FaceBook, Vkontakte, Odnoklassniki, LinkedIn, Yandex Dienstleistungen, Google und Mail.ru.</p>
<h5>Slogin für den Slogin.info Service einstellen</h5>
<ol class="marked-list">
  <li>Nach der Installation, gehen Sie zu den Komponenteneinstellungen: <strong>Components</strong> &gt;   <strong>Slogin</strong>.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-1.jpg" alt="">
  </figure>
</p>
  <li>Dann müssen Sie eine <strong> ID </strong> und ein <strong> Passwort </strong> bekommen , wo Sie diese kriegen?</li>
  <li>Gehen Sie zur Seite: <a href="http://slogin.info">http://slogin.info</a></li>
  <li>Wenn Sie noch nicht registriert sind, können Sie sich einfach durch das soziale Netzwerk anmelden.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-2.jpg" alt="">
  </figure>
</p>
  <li>Klicken Sie auf denn <strong>Add site</strong> Knopf.</li>
  <li>Im <strong>Callback</strong> referenzierten Format   http://<strong>site.ru</strong>/index.php?option=com_slogin&amp;task=check&amp;plugin=service.    </li>
    <figure class="img-polaroid">
    <img src="img/joomline.png" alt="">
     </figure>
  <li><strong>Site.ru</strong> ersetzen Sie auf Ihrer Website oder Sie können den Link aus dem Feld <strong> Callback URL </strong> in denSlogin Einstellungen kopieren.</li>
</br>
  Gehen Sie zu <strong>Components</strong> &gt; <strong>Slogin</strong>. Öffnen Sie beliebige Plugin Einstellungen.
<p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>Finden Sie das  <strong>Callback URI </strong>Optionsfeld udn kopieren Sie den URL Pfad.</p>
   <figure class="img-polaroid">
      <img src="img/sociallogin-4.jpg" alt="">
  </figure>
  <li>Im <strong>Password</strong> Feld, geben Sie das Geheimwort ein.</li>
  <li>Klicken Sie auf die <strong>Add</strong> Taste.</li>
  <li>Nach dem Hinzufügen einer Website bekommt der Benutzer die <strong>ID</strong> und das <strong>Passwort</strong>, welches im vorherigen Schritt eingegeben wurde.</li>
  <li>Wählen Sie das gewünschte Netzwerk aus und speichern Sie die Einstellungen.</li>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <li>Jetzt müssen Sie Plugins und das Modul veröffentlichen.</li>
  <li>Sie können die Plugins [ 	Social Login Facebook auth, Social Login Google auth, Social Login Instagram auth, ect] im Komponent Einstellungsfenster [<strong>Components</strong> &gt; <strong>Slogin</strong>] veröffentlichen.</li>
</ol>
<ol class="marked-list">
  <p>Um dies zu tun, öffnen Sie beliebige Plugin-Einstellungen.
  </p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>Und ändern Sie <strong>Slogin plugin</strong> zu <strong>Enable</strong>.
  </p>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-6.jpg" alt="">
    </figure>
  </p>
  <p>Sie werden den aktuellen Status vom <strong>Slogin </strong>Plugin in der <strong>Publishing</strong> Spakte sehen.</p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-8.jpg" alt="">
    </figure>
  </p>
  <li>Um das <strong>Slogin</strong> Modul zu publizieren, gehen Sie zu <strong>Extensions</strong> &gt; <strong>Modules</strong>. Finden Sie das <strong>Slogin</strong> Modul mit dem Filter. Wählen Sie den <strong> Slolin </strong>Modultyp im &quot;<strong>-Select Type-</strong>&quot; Dropdown und Sie werden das <strong>Slogin</strong> Modul in der Liste sehen.</li>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-7.jpg" alt="">
    </figure>
  </p>
<li>Drücken Sie auf den Modul Titellink, um zum Moduleinstellungen Interface zu gelangen.</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-9.jpg" alt="">
    </figure>
  </p>
 <p>Lasst uns mehr über die <strong>Slogin</strong> Moduleinstellungen lernen:</p>
 <Table width="980"  class="options-Table">
  <tr>
        <td width="154" class="col-1"><strong>Loginformular anzeigen</strong></td>
        <td width="29">-</td>
      <td width="781"> Ob das <span class="col-1"> Loginformular angezeigt werden soll.</span></td>
  </tr>
    <tr>
        <td class="col-1"><strong>Link zu der Accounts Zusammensetzung</strong></td>
        <td>-</td>
        <td><div align="justify">Zeigen Sie den Link zum verknüpften Profilmanagement von sozialen Netzwerken an. Der Link wird im Slogin-Modul für einen autorisierten Benutzer angezeigt.</div></td>
    </tr> <tr>
        <td class="col-1"><strong> Link zum Profil </strong></td>
        <td>-</td>
        <td><div align="justify">Profillink anzeigen. Der Link wird im Slogin-Modul für einen autorisierten Benutzer angezeigt.</div></td>
    </tr>
    <tr>
        <td class="col-1"><strong>Einführungstext</strong></td>
        <td>-</td>
        <td>HTML-Text wird vor der Autorisierung in sozialen Netzwerken angezeigt.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong> Vortext </strong></td>
        <td>-</td>
        <td>Dies ist der Text oder HTML, der über dem Login-Formular angezeigt wird.</td>
    </tr>
    <tr>
    <td class="col-1"><strong> Posttext </strong></td>
        <td>-</td>
        <td>Dies ist der Text oder HTML, der unterhalb des Anmeldeformulars angezeigt wird.</td>
    </tr>
          <td class="col-1"><strong>Login Umleitung Seite</strong></td>
        <td>-</td>
        <td><div align="justify">Wählen Sie die Seite aus, auf die der Benutzer nach einer erfolgreichen Anmeldung weitergeleitet wird. Wählen Sie eine aus den im Dropdown-Menü aufgelisteten Seiten aus. Die Auswahl von <strong> Standard </strong> wird auf dieselbe Seite zurückleiten.</div></td>
    </tr>    <td class="col-1"><strong> Abmelden Umleitung Seite </strong></td>
        <td>-</td>
        <td><div align="justify">Wählen Sie die Seite aus, auf die der Benutzer nach einer erfolgreichen Abmeldung weitergeleitet wird. Wählen Sie eine aus den im Dropdown-Menü aufgelisteten Seiten aus. Die Auswahl von <strong> Standard </strong> wird auf dieselbe Seite zurückleiten.</div></td>
    </tr>
</Table>
<p></p>
<li>Wählen Sie die Modulposition. Lassen Sie uns die <strong>megamenu</strong> Position nehmen.</li>
<li>
  <div align="justify">Veröffentlichen Sie das Modul [Sie können es mit dem Modules Manager machen,klicken Sie auf den roten &quot;x&quot; Knopf neben dem Modultitel.].</div>
</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-10.jpg" alt="">
    </figure>
  </p>
<li>Speichern Sie die Einstellungen.</li>
<li>
  <div align="justify">Gehen Sie zurück zu Ihrer Website und aktualisieren Sie die Seite. Jetzt können Sie sich über zahlreiche soziale Netzwerke auf Ihre Joomla-Website einloggen.</div>
</li>
</ol>
<div class="alert alert-warning">
<p>Mehr Information können Sie in der <a href="http://joomline.org/docs/slogin.html">joomline.org/docs</a> offiziellen Dokumentation finden. </p></div>