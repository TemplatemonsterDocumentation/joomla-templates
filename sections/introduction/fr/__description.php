<h2 class="item1">Introduction</h2>

<h5>Merci d'avoir acheté de modèle pour Joomla. Cette documentation est en plusieurs parties et vous montre en détails
    comment installer et administrer un site web Joomla de A à Z. Nous avons fait de notre mieux pour rendre ce manuel
    aussi clair et facile à suivre que possible.</h5>


<h3>Qu'est-ce que Joomla CMS ?</h3>

<p>Joomla CMS est une solution open source pour construire des sites web riches en contenu. Il vous permet de construire
    des sites web et de puissantes applications en ligne et sa gestion ne requiert presque aucune compétence ou
    connaissance technique. Beaucoup d'aspects, y compris sa convivialité et son extensibilité, ont fait de Joomla le
    logiciel de site web le plus populaire disponible.
    <a href="http://www.joomla.org/about-joomla.html" target="_blank">En savoir plus</a>
</p>

<h3>Qu'est-ce qu'un modèle pour Joomla ?</h3>

<p>Un modèle pour Joomla est un habillage pour la plateforme de CMS Joomla. En d'autres termes, vous pouvez facilement
    changer l'apparence de votre site web Joomla en installant un nouveau modèle en quelques étapes simples. En plus de
    cette simplicité, les modèles pour Joomla sont livrés avec tous les fichiers source nécessaires, et vous êtes libres
    de les éditer ou de les modifier selon vos besoins.</p>

<h3>Arrangement des fichiers</h3>

<h6>Le paquet du modèle que vous avez téléchargé comprend plusieurs dossiers. Voyons ce que chacun de ces dossiers
    contient :</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Documentation</b></dt>
            <dd> contient les fichiers de documentation</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd> fichier principal de la documentation. Vous êtes ici :)
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
            <dd> contient l'archive du thème de Joomla, le paquet d'installation rapide, et le fichier du script de
                décompression.
            </dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        theme###.zip
                    </dt>
                    <dd> archive du thème. Contient tous les fichiers du thème. Devrait être
                        <a href="#template-installation">installé à partir du gestionnaire d'extensions de Joomla</a>
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        fullpackage.zip
                    </dt>
                    <dd> contient le
                        <a href="#complete_install">paquet d'installation complète de Joomla</a>
                        avec les fichiers du moteur, le thème, et du contenu de test (copie de base de données, images
                        de test)
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        unzip.php
                    </dt>
                    <dd> fichier utilisé pour estraire les fichiers de fullpackage.zip une fois envoyé sur le serveur
                        d'hébergement
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Screenshots</b></dt>
            <dd> contient des captures d'écran du modèle</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Sources</b></dt>
            <dd> contient les fichiers sources du modèle</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd> fichiers source pour Adobe Photoshop (.psd)
                    </dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        to_the_root_folder
                    </dt>
                    <dd> contient des fichiers de contenu de test utilisés pour que votre site web apparaîsse comme une
                        démo live du modèle. Le contenu de ce dossier devrait être mis en ligne dans votre dossier
                        racine de Joomla
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        dump.sql
                    </dt>
                    <dd> fichier de base de données. Contient du contenu de test pour le thème
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        pkg_bundle.zip
                    </dt>
                    <dd> contient des extensions supplémentaires fournies avec le thème
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
            <dd> contient des liens où les polices utilisées dans le modèle peuvent être téléchargées
            </dd>
        </dl>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                info.txt
            </dt>
            <dd> contient des instructions pour extraire les fichiers source
            </dd>
        </dl>
    </li>
</ul>