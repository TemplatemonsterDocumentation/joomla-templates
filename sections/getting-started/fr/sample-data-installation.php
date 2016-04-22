<h3>Installation de données de test</h3>

<p>Les données de test sont utilisées pour faire en sorte que votre site web Joomla
    apparaisse comme une page de démo live du modèle. Elles contiennent de faux
    articles, des images, des configurations de modules, des configurations de site web,
    etc. Si vous n'avez pas l'intention d'utiliser les images de test ou tout autre
    contenu de test, sautez cette étape. </p>

<p>Pour installer les données de test, vous devrez compléter deux étapes simples.</p>

<h4> envoi des images de test</h4>

<p>Pour envoyer les images de test, ouvrez le répertoire de votre modèle, puis le
    répertoire « sources. » Ici, vous devriez voir le répertoire
    « to_the_root_directory. » Il contient les fichiers qui doivent être placés à la
    racine de votre installation de Joomla. Utilisez le gestionnaire de fichiers pour
    envoyer les fichiers sur votre serveur.</p>

<h4> importer un fichier SQL.</h4>

<p>La dernière étape de l'installation des données de test, et aussi la plus importante,
    est l'importation du fichier SQL. Ce fichier SQL contient la base de données de
    test ; toutes les données d'un site web basé sur Joomla s'y trouve. Le fichier SQL
    peut être importé en utilisant votre outil de gestion de base de donnée
    (phpMyAdmin). Le fichier SQL du modèle, « dump.sql, » se trouve dans le répertoire
    « sources » du paquet du modèle. </p>


<p class="alert alert-danger">N'importez <b>SURTOUT PAS</b> le fichier SQL si vous avez un site web live étant donné
    qu'il
    remplacera complètement la base de données de votre site web, et toutes vos données seront ainsi perdues.</p>
<p class="alert alert-danger">Attention : avant d'importer un fichier SQL, assurez-vous que le préfixe de la table de
    votre base de données correspond au préfixe de la table dans le fichier SQL.</p>
<p>Vous pouvez voir le préfixe de la table directement dans la base de données avec
    l'outil de gestion de bases de données. Vérifiez les noms des tables. Le préfixe est
    une suite de symboles devant le nom de la table (
    <i>par exemple la table
        « jos_assets » a pour préfixe « jos »
    </i>
    ). Vous pouvez également trouver le
    préfixe de la base de données dans le fichier « configuration.php » dans le
    répetoire racine de Joomla. Cherchez la ligne 19 :</p> <code>public.$dbprefix =
        'jos_';</code><p> (
    <i>si le préfixe est « jos_ »</i>
    ).
</p>

<p>Si les préfixes des tables ne correspondent pas, ouvrez le fichier « dump.sql » avec
    votre éditeur de code et en utilisant l'outil de remplacement (raccourci CTRL+F ou
    CTRL+H), remplacez le préfixe de table « jos_ » (
    <i>utilisé dans le fichier SQL</i>
    )
    avec celui qui correspond à votre base de données. Vous pouvez voir un tutoriel
    vidéo détaillé sur <a
        href="http://www.templatemonster.com/help/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">comment changer le préfixe de base de données dans un
        fichier SQL</a>.
</p>

<h6>Vous pouvez maintenant importer ce fichier SQL dans votre base de données. <br>
    Pour importer les données de test dans votre base de données, suivez ces étapes
    faciles : (voir les images ci-dessous)</h6>

<ol class="index-list">
    <li><p>Sélectionnez votre base de données dans la liste de bases de données dans la
            colonne de gauche de l'outil phpMyAdmin.</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Cliquez sur le bouton « Importer » (« Import ») dans le menu de navigation en
            haut.</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Cliquez sur « Choisir un fichier » (« Choose file ») et sélectionnez le fichier
            « dump.sql » dans le répertoire « sources » du paquet du modèle.</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Cliquez sur le bouton « Go » pour démarrer l'importation des données de test.</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-info">Vous pouvez également voir un tutoriel détaillé sur <a
        href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html"
        target="_blank">comment importer un fichier SQL en utilisant l'outil
        phpMyAdmin</a></p>