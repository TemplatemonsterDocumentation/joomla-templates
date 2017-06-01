<h3>Installation complète</h3>

<p>Je n'ai pas de site Joomla et je veux l'installer de zéro. </p>

<p>En utilisant cette méthode vous installerez le moteur de CMS Joomla, le modèle Joomla, un contenu de test, et toutes les extensions requises.</p>

<!-- Creating database -->

<h3>Création de la base de données</h3>

<p>Une fois que vous avez fini d'envoyer les fichiers sur le serveur d'hébergement, vous pouvez créer une nouvelle basse de données pour votre site web Joomla. Vous pouvez le faire en utilisant l'outil de gestion de bases de données de votre panneau de contrôle d'hébergement
 (<i>habituellement PhpMyAdmin</i>).
</p>

<h6>Avec l'outil phpMyAdmin vous pourrez créer une nouvelle base de données en 3 étapes faciles (voir les images ci-dessous):</h6>

<ol class="index-list">
    <li>Cliquez sur le bouton Database (Base de données) dans le menu de navigation en haut, pour accéder à la liste de bases de données.</li>

    <li>Entrez le nom de la base de données dans le champ "Create new database" (Créer une nouvelle base de données). </li>

    <li>Cliquez sur le bouton Create (Créer) à droite.</li>
</ol>

<p>Vous pouvez voir votre base de données dans la liste. Cliquez sur son nom pour y accéder.</p>

<div class="owl-carousel">
    <div class="item">
        <p>1. Ouvrez l'onglet “Database” (Base de données),  pour accéder à la liste de bases de données:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Entrez le nom de la base de données:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Cliquez sur le bouton "Créer":</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. Vous pouvez voir votre base de données dans la liste. Cliquez sur son nom pour y accéder:</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>

<p class="alert alert-info">Vous pouvez également voir un tutoriel vidéo détaillé:
    <a href="/help/how-to-create-a-database.html" target="_blank">Comment créer une base de données</a>.
</p>

<p>Si vous rencontrez des problèmes en créant une base de données,  veuillez contacter votre hébergeur pour obtenir de l'aide.</p>

<!-- Uploading files -->

<h3>Téléchargement et Décompression</h3>

<p>Pour commencer à travailler avec Joomla, vous devez envoyer les fichiers sur votre serveur d'hébergement. Ceci se fait en utilisant le gestionnaire de fichiers de votre panneau de contrôle d'hébergement ou avec un gestionnaire FTP.</p>

<ol class="index-list">
    <li>Ouvrez le répertoire du paquet de votre modèle et allez dans le dossier 'joomla'.</li>

    <li>Sélectionnez les fichiers 'unzip.php' et 'fullpackage.zip' et envoyez-les sur votre serveur (<a href="/help/how-upload-files-server-2.html" target="_blank">Comment envoyer des fichiers sur un serveur</a>).
    </li>
    <li>Entrez l'adresse du fichier 'unzip.php' sur votre serveur (<i class="muted">http://your_domain_name/unzip.php</i>) dans la barre d'adresse de votre navigateur <abbr
            title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari, etc."></abbr>.
    </li>

    <li>
        <p>Vous devriez voir la page suivante:</p>

        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>
    </li>
    <li>Dans le champ 'Choose your zip file’ (Choisissez votre fichier zip) sélectionnez le fichier fullpackage.zip que vous avez envoyé. </li>

    <li>Dans le champ 'Unzip to’ (Décompresser vers…) spécifiez le répertoir où vous voulez extraire les fichiers. </li>

    <li>Cliquez sur le bouton 'Unzip’ (Décompresser), pour extraire les fichiers.</li>
</ol>

<p class="alert alert-info">Assurez-vous d'avoir les permissions nécessaires pour le répertoire où vous voulez extraire les fichiers. Les permissions devraient être CHMOD 755 ou 777 en fonction de la configuration de votre serveur.</p>


<!-- Joomla CMS installation -->


<h3>Installation de Joomla CMS</h3>

<h6>Assurez-vous d'avoir complété toutes les étapes de préparation et d'avoir tout le logiciel requis.</h6>

<p>Ouvrez votre navigateur et entrez l'adresse du dossier Joomla в аdans la barre d'adresse (<i>par exemple, http://your_domain_name/joomla</i>). Vous devriez voir la page d'installation de Joomla CMS:
</p>


<h4>Configuration du site</h4>

<p>Dans la liste déroulante “Select Language” (Sélectionner la langue) choisissez la langue d'installation de Joomla.</p>

<p>
    <span class="label">Veuillez noter:</span>
    la liste déroulante “Select Language” (Sélectionner la langue)  ne vous permet que choisir la langue de l'installation de Joomla. Elle n'affectera pas la langue de votre site web.</p>

<p>Vous devez remplir tous les champs du formulaire dans la section “Main Configuration” (Configuration principale). Les champs requis sont marqués d'une astérisque *.</p>

<p>Remplissez les champs “Admin Email” (Adresse e-mail de l'administrateur), “Admin Username” (Nom d'utilisateur de l'administrateur) et “Admin Password” (Mot de passe de l'administrateur) dans la colonne de droite, pour créer un nouvel utilisateur sur le site Joomla avec des droits d'administrateur.</p>

<p class="alert alert-danger">”Admin Email” (Adresse e-mail de l'administrateur), “Admin Username” (Nom d'utilisateur de l'administrateur) и "Admin  Password” (Mot de passe de l'administrateur) sont requis pour accéder au panneau d'administration Joomlal. Protégez-les. </p>

<p>Une fois que vous avez terminé, cliquez sur le bouton
    <strong>Next (Suivant)</strong> en haut à droite:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>Configuration de base de données</h4>


<p> Sur la deuxième étape de l'installation de Joomla CMS vous devrez entrer les détails de votre base de données. Si vous n'êtes pas certain, contactez votre hébergeur pour obtenir ces renseignements.</p>

<p>Puisque vous installez Joomla à partir de zéro, vous n'avez qu'à entrer "Host Name" (Nom d'hôte), "Username" (Nom d'utilisateur ), "Database Name" (Nom de la base de données) и "Password" (Mot de passe). Vous pouvez laisser les autres options par défaut, mais il peut y avoir des différences en fonction de votre hébergeur. </p>

<p>Lorsque vous avez terminé, cliquez sur le bouton 
    <strong>Install (Installer)</strong>:
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>

<h4>Vue d'ensemble</h4>

<p>Installation de CMS Joomla est presque terminée. Lors de l'étape “Vue d'ensemble” vous devrez choisir si vous voulez installer les données de test de Joomla.</p>

<p class="alert alert-warning">Veuillez noter:  les données de test sont requises, si vous voulez que votre site web Joomla apparaisse comme une démo live du modèle: avec toutes les images, les textes et les modules configurés. Pour le faire, sélectionnez le paquet de données de test nommé "sample_theme###", où ### est le numéro de votre thème.</p>

<p>Sélectionnez le paquet de données de test que vous voulez installer ou sélectionne "None" (Aucun) dans le cas où vous ne voulez pas installer des données de test pour votre site web Joomla:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>

<p>Vous pouvez vérifier ci-dessous si les détails d'accès à la configuration de la base de données et au panneau d'administration sont valides et les envoyer à votre adresse e-mail si nécessaire:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>

<p>Vous pouvez également vérifier les paramètres de votre installation et voir si votre serveur d'hébergement répond aux exigences de Joomla. Si vous voyez des boîtes de notification rouges dans la section “Recommended settings” (Configuration recommandée),  veuillez contacter votre hébergeur pour obtenir de l'assistance:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>

<p> Lorsque vous avez terminé, cliquez sur le bouton
    <strong>Install (Installer) </strong>
    en haut à droite.
</p>

<h4>Installation terminée</h4>


<p> Félicitations! Vous avez installé Joomla:</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>

<p class="alert alert-danger"> Pour des raisons de sécurité, supprimez le répertoire "Installation" du répertoire racine Joomla.</p>

<p class="alert alert-info">Astuce:
    Vous pouvez regarder le tutoriel vidéo sur: <a href="/help/joomla-3-0-how-to-install-joomla-engine.html" target="_blank">Comment installer le moteur Joomla 3</a>
</p>

<p class="alert alert-warning">Veuillez noter: si vous avez complété la section Installation complète, vous pouvez sauter les sections “Template Installation”(Installation de modèle), “Sample data installation” (Installation des données de test) et “Extensions Installation” (Installation d'extensions), étant donné que vous avez déjà installé ces éléments.</p>


<p>Vous pouvez maintenant configurer votre site web basé sur Joomla CMS. Cliquez sur le bouton “<b>Site (Site)</b>”, pour voir votre site web ou
 “<b>Administrator (Administrator)</b>", pour accéder à l'interface d'administration Joomla.
</p>
