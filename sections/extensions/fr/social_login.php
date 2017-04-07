<h3>Connexion Sociale Joomla</h3>

<p align="justify"><strong>Connexion Sociale</strong>, le composant du réseau social permet de se connecter au site web de Joomla via les réseaux sociaux suivants: Vkontakte, Twitter, FaceBook, Odnoklassniki, LinkedIn, Yandex services, Google, et Mail.ru.</p>
<h5>Définir Slogin pour le service Slogin.info</h5>
<ol class="marked-list">
  <li>Après l'installation, accédez aux paramètres du composant: <strong>Composants</strong> &gt;   <strong>Slogin</strong>.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-1.jpg" alt="">
  </figure>
</p>
  <li>Ensuite, vous devez obtenir un <strong>ID</strong> et un<strong>Mot de passe</strong>. Où peux-je les obtenir?</li>
  <li>Allez à la page: <a href="http://slogin.info">http://slogin.info</a></li>
  <li>Si vous ne vous êtes pas encore inscrit, vous pouvez simplement vous connecter via le réseau social.</li>
  <p>
  <figure class="img-polaroid">
    <img src="img/sociallogin-2.jpg" alt="">
  </figure>
</p>
  <li>Cliquez sur le bouton <strong>Ajouter un Site</strong>.</li>
  <li>Dans le format des références <strong>Rappel</strong> http://<strong>site.ru</strong>/index.php?option=com_slogin&amp;task=check&amp;plugin=service. </li>
    <figure class="img-polaroid">
    <img src="img/joomline.png" alt="">
     </figure>
  <li><strong>Site.ru</strong> remplacez sur votre site ou vous pouvez copier le lien depuis le champ prêt <strong>URL de Rappel</strong> dans les réglages de Slogin.</li>
</br>
  Allez aux <strong>Composants</strong> &gt; <strong>Slogin</strong>. Ouvrezles paramètres du plugin.
<p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>Trouvez l'option <strong>URL de Rappel</strong> et copiez le chemin URL.</p>
   <figure class="img-polaroid">
      <img src="img/sociallogin-4.jpg" alt="">
  </figure>
  <li>Dans le champ <strong>Mot de passe</strong>, entrez le mot secret.</li>
  <li>Cliquez sur le bouton <strong>Ajouter</strong>.</li>
  <li>Après avoir ajouté un site, il obtient son <strong>ID</strong> d'utilisateur et <strong>Mot de passe</strong>, qui est entré à l'étape précédente.</li>
  <li>Sélectionnez le réseau souhaité et enregistrez les paramètres.</li>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <li>Maintenant, vous devez publier les plugins et le module.</li>
  <li>Vous pouvez publier des plugins [Social Login Facebook auth, Social Login Google auth, Social Login Instagram auth, ect.] via la fenêtre de configuration des composants [<strong>Composants</strong> &gt; <strong>Slogin</strong>].</li>
</ol>
<ol class="marked-list">
  <p>Pour cela, ouvrez tous les paramètres du plugin.
  </p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-3.jpg" alt="">
    </figure>
  </p>
  <p>Et changez l'état du plugin <strong>Slogin</strong> à <strong>Activé</strong>.
  </p>
  <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-6.jpg" alt="">
    </figure>
  </p>
  <p>Vous pourrez voir l'état actuel du plugin <strong>Slogin</strong> dans la colonne <strong>Publication</strong>.</p>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-8.jpg" alt="">
    </figure>
  </p>
  <li>Pour publier le module <strong>Slogin</strong>, naviguez aux <strong>Extensions</strong> &gt; <strong>Modules</strong>. Trouvez le module à l'aide de filtres <strong>Slogin</strong>. Sélectionnez le type de module <strong>Slolin</strong> dans le menu déroulant &quot;<strong>-Sélectionnez Type-</strong>&quot; et vous verrez le module <strong>Slogin</strong> dans la liste.</li>
   <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-7.jpg" alt="">
    </figure>
  </p>
<li>Appuyez sur le titre du module pour être amené à l'interface des paramètres du module.</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-9.jpg" alt="">
    </figure>
  </p>
 <p>Apprenons plus sur les paramètres du module <strong>Slogin</strong>:</p>
 <table width="980"  class="options-table">
  <tr>
        <td width="154" class="col-1"><strong>Afficher Formulaire de Connexion</strong></td>
        <td width="29">-</td>
      <td width="781">Montrer ou non le <span class="col-1">Formulaire de Connexion.</span></td>
  </tr>
    <tr>
        <td class="col-1"><strong>Lien vers Fusion des Comptes</strong></td>
        <td>-</td>
        <td><div align="justify">Afficher le lien vers la gestion des profils liés des réseaux sociaux.
		Le lien est affiché dans le module Slogin pour un utilisateur autorisé.</div></td>
    </tr> <tr>
        <td class="col-1"><strong>Lien vers Profil</strong></td>
        <td>-</td>
        <td><div align="justify">Montrer le lien du profil. Le lien sera affiché dans le module Slogin pour un utilisateur autorisé.</div></td>
    </tr>
    <tr>
        <td class="col-1"><strong>Texte D'introduction</strong></td>
        <td>-</td>
        <td>Le texte HTML doit être affiché avant d'autoriser les réseaux sociaux.</td>
    </tr>
   
    <tr>
        <td class="col-1"><strong>Prétexte</strong></td>
        <td>-</td>
        <td>C'est le texte ou le code HTML affiché au-dessus du formulaire de connexion.</td>
    </tr>
    <tr>
    <td class="col-1"><strong>Texte Après</strong></td>
        <td>-</td>
        <td>C'est le texte ou HTML qui est affiché sous la forme de connexion.</td>
    </tr>
          <td class="col-1"><strong>Page de Redirection de Connexion</strong></td>
        <td>-</td>
        <td><div align="justify">Sélectionnez la page vers laquelle l'utilisateur sera redirigé après une connexion réussie. Sélectionnez l'une des pages figurant dans le menu déroulant. Le choix <strong>Défaut</strong> revient sur la même page.</div></td>
    </tr>    <td class="col-1"><strong>Page de Redirection de Déconnexion</strong></td>
        <td>-</td>
        <td><div align="justify">Sélectionnez la page vers laquelle l'utilisateur sera redirigé après la connexion. Sélectionnez l'une des pages figurant dans le menu déroulant. Le choix <strong>Défaut</strong> revient sur la même page.</div></td>
    </tr>
</table>
<p></p>
<li>Choisissez la position du module. Sélectionnons la position <strong>megamenu</strong>.</li>
<li>
  <div align="justify">Publiez le module [Vous pouvez publier le module via le Gestionnaire de Modules, en appuyant sur le bouton rouge &quot;x&quot; près du titre du module.].</div>
</li>
 <p>
    <figure class="img-polaroid">
      <img src="img/sociallogin-10.jpg" alt="">
    </figure>
  </p>
<li>Enregistrez les paramètres.</li>
<li>
  <div align="justify">Revenez à votre site Web et actualisez la page. Vous pouvez maintenant vous connecter à votre site Web Joomla via de nombreux réseaux sociaux.</div>
</li>
</ol>
<div class="alert alert-warning">
<p>N'hésitez pas à trouver plus d'informations dans la documentation officielle<a href="http://joomline.org/docs/slogin.html">joomline.org/docs</a>.</p></div>