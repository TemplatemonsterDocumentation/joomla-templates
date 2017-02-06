<h2 class="item8">Addendum</h2>

<p>Nous avons fait de notre mieux pour que cette documentation soit aussi claire que possible. Toutefois, si vous avez des difficultés avec un modèle pour Joomla, ou toute suggestion d'amélioration de la documentation ou du modèle, n'hésitez pas à contacter notre équipe de support via:</p>

<h4>Aide et support</h4>
<ul class="marked-list">
    <li><a href="http://chat.template-help.com/" target="_blank">Chat en direct</a></li>
    <li><a href="http://support.template-help.com/index.php?/Tickets/Submit"
           target="_blank">Système de tickets d'aide</a></li>
</ul>
<h4>Documentation</h4>
<ul class="marked-list">
    <li><a href="http://docs.joomla.org/Beginners" target="_blank">Joomla! Guide de démarrage rapide</a></li>
    <li><a href="http://docs.joomla.org/Category:FAQ" target="_blank">Foire Aux Questions</a></li>
    <li><a href="http://docs.joomla.org/" target="_blank">Joomla! Documentation</a></li>
    <li><a href="/help/cms-blog-templates/joomla/joomla-tutorials/" target="_blank">Joomla!
            Tutoriels</a></li>
</ul>
<h4>Problèmes possibles avec Google Fonts</h4>

<p>Si les polices ne sont pas affichées correctement après l'installation, veuillez ouvrir le fichier 
index.php (\templates\theme****\index.php) pour l'édition. Allez dans Extensions (Extensions) -> Template Manager ( Gestionnaire de modèles)
 dans votre panneau d'administration Joomla et sélectionnez votre modèle (Theme**** Details and Files).</p>

<p>Veuillez trouver la ligne suivante:</p>
    <code>"$doc->addStyleSheet('//fonts.googleapis.com/css?family=[---your_web_font_name_here---]');"</code><p> et le remplacer par:</p>
<code>"$doc->addStyleSheet('//fonts.useso.com/css?family=[---your_web_font_name_here---]');".</code>
<h4>Joomla! Extensions</h4>

<p> Sur <a href="http://extensions.joomla.org/" target="_blank">extensions.joomla.org</a> vous pouvez télécharger plus de 6 mille modules, plugins et des composants pour ajouter diverses fonctionnalités à votre site Joomla.</p>
<h4>Joomla!  Avertissement Utilisation des cookies</h4>

<p> Suivant les conditions de droit Cookie, vous devez ajouter des modules appropriés à votre site Web qui permettra d'afficher un message d'avertissement sur ​​les cookies utilisés sur votre site. Nous pouvons vous recommander les suivantes:</p>
<ul class="marked-list">
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/24689"
           target="_blank">Cookie Accept</a></li>
    <li>
        <a href="http://extensions.joomla.org/extensions/site-management/cookie-control/21043"
           target="_blank">EU e-Privacy Directive</a></li>
</ul>
<h4>Liens supplémentaires</h4>
<ul class="marked-list">
    <li><a href="http://www.joomla.org/technical-requirements.html" target="_blank">Exigences techniques</a></li>
    <li>
        <a href="http://opensourcematters.org/index.php?option=com_content&amp;view=article&amp;id=56&amp;Itemid=155"
           target="_blank">Licence et Utilisation</a></li>
</ul>

<h4>Blocs de l'utilisateur</h4>

<p class="alert alert-warning">
Dans les modules de ce type, il est souvent nécessaire d'utiliser la propriété loadmodule/loadposition, par exemple, "{loadmodule articles_single, About us}" dans le contenu. Afin d'éviter l'erreur 404 sur votre site, assurez-vous que le nom du module chargé coïncide avec celui, spécifié pour le chargement. Dans ce cas, le module "About us" devrait être publié et ne doit pas contenir plus d'un espace dans le nom du module. Vous pouvez en apprendre plus sur loadmodule/loadposition sur <a href="https://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank">le site officiel</a>.
    </p>

<h4>Validation</h4>

<p class="alert alert-info">
    Les deux codes, le balisage HTML (Langage hypertexte) et les styles CSS, utilisés dans nos modèles, sont sémantiquement corrects et valides. Néanmoins, certaines erreurs W3C peuvent toujours avoir lieu. Rendre valide le code 100% W3C élimine l'utilisation des technologies modernes de site webcomme les fonctions de CSS3 et des balises HTML5. Notre objectif est de fournir une riche expérience de l'utilisateur avec des modèles de haute qualité et parfois nous devons enfreindre certaines règles. </p>
