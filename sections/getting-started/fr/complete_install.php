<h3>Installation complète</h3>

<p>Je n'ai pas de site Joomla et je veux l'installer de zéro. </p>

<p>En utilisant cette méthode vous installerez le moteur de CMS Joomla, le modèle Joomla, un contenu de test, et toutes
    les extensions requises.</p>

<!-- Creating database -->


<h3>Création de la base de données</h3>

<p>Une fois que vous avez fini d'envoyer les fichiers sur le serveur d'hébergement pour votre site web Joomla, vous
    pouvez créer une nouvelle basse de données en utilisant l'outil de gestion de bases de données de votre panneau de
    contrôle d'hébergement (
    <i>typiquement PhpMyAdmin</i>
    ).
</p>

<p>Avec l'outil phpMyAdmin, vous pourrez créer une nouvelle base de données en 3 étapes faciles : (voir les images
    ci-dessous)</p>

<ol class="index-list">
    <li>Cliquez sur le bouton « Bases de données » (« Databases ») dans le menu de navigation pour accéder à la liste de
        bases de données. </li>

    <li>Entrez le nom de la base de données dans le champ « Créer une nouvelle base de données » (« Create new
        database »). </li>

    <li>Cliquez sur le bouton « Créer » (« Create ») sur la droite.</li>
</ol>

<p>Vous pouvez voir votre base de données sur la liste. Cliquez sur son nom pour y accéder.</p>

<div class="owl-carousel">
    <div class="item">
        <p>1. Cliquez sur le bouton « Bases de données » (« Databases ») pour accéder à la liste de bases de
            données</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Entrez le nom de la base de données </p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Cliquez sur le bouton « Créer » (« Create »)</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. Votre base de données est visible dans la liste. Cliquez sur son nom pour y accéder.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>


<p>Vous pouvez également voir un tutoriel vidéo détaillé :
    <a href="/help/how-to-create-a-database.html">Comment créer une base de données</a>
</p>

<p class="alert alert-info">Si vous rencontrez des problèmes en créant une base de données, veuillez contacter votre
    hébergeur pour obtenir de l'aide. </p>


<!-- Uploading files -->

<h3>Téléchargement et décompression</h3>

<p class="">Pour commencer à travailler avec Joomla, vous devez envoyer les fichiers sur votre serveur d'hébergement.
    Ceci se fait en utilisant le gestionnaire de fichiers de l'hébergeur, ou avec un gestionnaire FTP de tierce
    partie.</p>

<ol class="index-list">
    <li>Ouvrez le répertoire du paquet de votre modèle et allez dans le dossier "joomla" </li>

    <li>Sélectionnez les fichiers « unzip.php » et « fullpackage.zip » et envoyez-les sur votre serveur (
        <a href="/help/how-upload-files-server-2.html" target="_blank">Comment envoyer des fichiers sur un serveur.</a>
        )
    </li>
    <li>Pointez votre
        <abbr title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari etc.">navigateur</abbr> sur
        l'adresse du fichier « unzip.php » sur votre serveur (
        <i class="muted">http://votre_nom_de_domaine/unzip.php</i>
        ).
    </li>

    <li><p>Vous devriez voir la page suivante :</p>


        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>

    </li>

    <li>Sélectionnez le fichier fullpackage.zip que vous avez envoyé dans la boîte « Choisissez votre fichier zip »
        (« Choose your zip file »). </li>

    <li>Dans le champ « Décompresser vers » (« Unzip to »), spécifiez le répertoir où vous voulez extraire les
        fichiers. </li>

    <li>Cliquez sur le bouton « Décompresser » (« Unzip ») pour continuer.</li>
</ol>

<p class="alert alert-info">Assurez-vous d'avoir les permissions nécessaires dans le répertoire où vous voulez extraire
    les fichiers. Les permissions devraient être CHMOD 755 ou 777 en fonction de la configuration de votre serveur. </p>


<!-- Joomla CMS installation -->


<h3>Installation de Joomla CMS</h3>

<p>Assurez-vous d'avoir complété toutes les
    <a href="#prepare">étapes de préparation</a>
    et d'avoir tout ce qu'il vous faut.
</p>

<p>Pointez votre navigateur vers le chemin du répertoire de Joomla (
    <i>par exemple http://votre_nom_de_domaine/joomla</i>
    ). Vous devriez voir la page d'installation de Joomla CMS.
</p>


<h4>
    configuration
</h4>


<p>Choisissez la langue d'installation de Joomla dans la boîte « Sélectionner la langue » (« Select Language »).</p>

<p>
    <span class="label">Veuillez noter :</span>
    la boîte « Sélectionner la langue » ne vous permet que ne choisir la langue pour l'installation de Joomla. Elle
    n'affectera pas la langue de votre site web.
</p>

<p>Vous devez remplir tous les champs du formulaire dans la partie « Configuration principale » (« Main
    Configuration »). Les champs requis sont marqués d'une astérisque.</p>

<p>Remplissez les champs « Adresse e-mail de l'administrateur » (« Admin Email »), « Nom d'utilisateur de
    l'administrateur » (« Admin Username »), et « Mot de passe de l'administrateur » (« Admin Password ») dans la
    colonne de droite pour créer un nouvel utilisateur sur le site Joomla avec des droits d'administrateur.</p>

<p class="alert alert-danger">« Adresse e-mail de l'administrateur » (« Admin Email »), « Nom d'utilisateur de
    l'administrateur » (« Admin Username »), et « Mot de passe de l'administrateur » (« Admin Password ») sont requis
    pour accéder à la
    <abbr title="Joomla Administration Panel that is used to work with Web site content">configuration</abbr> de votre
    site web Joomla. Protégez-les.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>


<p>Une fois que vous avez terminé, cliquez sur le bouton « Suivant » (
    <strong>Next</strong>
    ) en haut à droite pour continuer.
</p>


<h4>
    base de données
</h4>


<p>Pour la deuxième étape de l'installation de Joomla CMS, vous devrez entrer les détails de votre base de données. Si
    vous n'êtes pas certain, contactez votre hébergeur pour obtenir ces renseignements.</p>

<p>Puisque vous installez Joomla à partir de zéro, vous n'avez qu'à entrer le « Nom d'hôte » (« Host Name »), le « Nom
    d'utilisateur » (« User Name »), le « Nom de la base de données » (« Database Name »), et le « Mot de passe »
    (« Password »). Vous pouvez typiquement laisser les autres options par défaut. Quoiqu'il peut y avoir des
    différences en fonction de votre hébergeur. </p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>


<p>Lorsque vous avez terminé, cliquez sur le bouton « Installer » (
    <strong>Install</strong>
    ) en haut à droite pour continuer.
</p>


<h4>
    vue d'ensemble
</h4>


<p>Vous avez presque fini d'installer Joomla CMS. Lors de l'étape de vue d'ensemble, vous devrez choisir si vous voulez
    installer les données de test de Joomla. </p>

<p class="alert alert-warning">Veuillez noter : les données de test sont requises si vous voulez que votre site web Joomla
    apparaisse comme une démo live du modèle avec toutes les images, les textes de test, et les modules configurés. Pour
    que votre modèle apparaisse comme une démo live, sélectionnez le paquet de données de test nommé « sample_theme### »
    où ### est le numéro de votre thème.</p>

<p>Sélectionnez le paquet de données de test que vous voulez installer, ou sélectionnez « Aucun » (« None ») si vous
    voulez installer un site web Joomla pur sans aucun contenu.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>


<p>Vous pouvez vérifier ci-dessous si les détails d'accès à la configuration de la base de données et au panneau
    d'administration sont valides et les envoyer à votre adresse e-mail si nécessaire.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>


<p>Vous pouvez également vérifier les paramètres de votre installation et voir si votre serveur d'hébergement répond aux
    exigences de Joomla. Si vous voyez des boîtes de notification rouges dans la section « Configuration recommandée »
    (« Recommended settings ») veuillez contacter votre hébergeur pour obtenir de l'assistance.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>


<p>Lorsque vous avez terminé, cliquez sur le bouton « Installer » (
    <strong>Install</strong>
    ) en haut à droite pour continuer.
</p>


<h4>
    installation terminée
</h4>


<p>Félicitations ! Vous avez installé Joomla CMS avec succès.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>


<p class=" alert alert-danger">Pour des raisons de sécurité, supprimez le répertoire « Installation » du répertoire de
    Joomla.</p>

<p class=" alert alert-info">
    Astuce :
    Vous pouvez regarder le tutoriel vidéo sur
    <a href="/help/joomla-3-0-how-to-install-joomla-engine.html">Comment installer le moteur Joomla 3</a>
</p>

<p class="alert alert-warning">Veuillez noter : si vous avez complété la section « Installation complète, » vous pouvez
    sauter les sections « Installation de modèles, » « Installation des données de test, » et « Installation
    d'extensions » étant donné que vous avez déjà installé ces éléments.</p>


<p>Vous pouvez maintenant configurer votre site web basé sur Joomla CMS. Cliquez sur le bouton « <b>Site</b> » pour voir
    votre site web, ou sur le bouton « Administrateur » (« <b>Administrator</b> ») pour accéder à l'interface
    d'administration.
</p>