
<h2 class="item1">Introduction</h2>

<h5 align="justify">Cette documentation se compose de plusieurs parties et decrit l'installation, la creation et la mise en place d'un site Joomla.</h5>
<h5 align="justify">Nous avons fait de notre mieux pour que ces informations puissent être présentées de façon simple et directe.
Pour plus de facilité, le texte que le manuel fournit a été restructuré dans différents chapitres, vous pouvez voir dans le menu de gauche.
Vous pouvez naviguer vers n'importe quelle partie de la documentation, en utilisant les liens actifs de l'en-tête.</h5>
<h5 align="justify">Nous vous recommandons de commencer à lire la documentation de la première section.</h5>
<h3>Qu'est-ce que Joomla CMS?</h3>

<p align="justify">Joomla CMS est une solution « open source » pour la création de sites web. Les fonctionnalités étendues du système vous permettent de créer des sites Web et des puissantes applications en ligne. Le CMS Joomla ne nécessiterait pas d'autres compétences et de formation. Vous trouverez dans cette documentation toute la description de la théorie et des compétences de base dont vous aurez besoin.</p>
<p align="justify">Avec ses avantages, sa facilité d'utilisation et son évolutivité, le Joomla CMS est devenu le logiciel de site Web le plus populaire disponible. <a href="http://www.joomla.org/about-joomla.html" target="_blank">En savoir plus</a>
</p>

<h3>Qu'est-ce que Joomla Template?</h3>

<p align="justify">Joomla Template est un thème pour votre site web basé sur la plate-forme CMS Joomla. En d'autres termes, vous pouvez facilement changer l'apparence de votre site Joomla en installant un nouveau modèle. Le processus d'installation est effectuée par quelques étapes, faciles à traiter. Bien que simple, le modèle Joomla est livré avec tous les fichiers sources nécessaires que vous êtes libre de modifier.</p>
<div class="alert alert-info">
<div align="justify">Il existe souvent de nombreux paramètres différents qui sont disponibles avec un nouveau modèle, et
 parce qu'il s'agit d'un logiciel open source, il n'est pas toujours le même pour chaque développeur.
Assurez-vous de lire cette documentation, proposée pour le modèle que vous installez pour connaître les fonctionnalités disponibles.</div>
</div>

<h3>Structure des fichiers</h3>

<h6>Le paquet du modèle que vous avez téléchargé comprend plusieurs dossiers. Voyons ce que chacun de ces dossiers contient:</h6>

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
            <dd> contient l'archive du thème de Joomla, le paquet d'installation rapide et le fichier du script de décompression.
            </dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        theme###.zip
                    </dt>
                    <dd> archive du thème. Contient tous les fichiers du thème. Devrait être installé <a href="#template-installation">à partir du gestionnaire d'extensions de Joomla</a>.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        fullpackage.zip
                    </dt>
                    <dd> contient
                        <a href="#complete_install">
                           le paquet d'installation complète de Joomla</a>
                        vec les fichiers du moteur, le thème, et du contenu de test (copie de base de données, images de test)
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        unzip.php
                    </dt>
                    <dd> fichier utilisé pour extraire les fichiers de fullpackage.zip une fois envoyé sur le serveur d'hébergement 
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
            <dd> contient des captures d'écran du modèles</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Sources</b>
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
                    <dd> contient des fichiers de contenu de test utilisés pour que votre site web apparaîsse comme une démo live du modèle. Le contenu de ce dossier 
					     devrait être mis en ligne dans votre dossier racine de Joomla
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
            <dd> contient des liens où les polices utilisées dans le modèle peuvent être téléchargées </dd>
        </dl>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                info.txt
            </dt>
            <dd> contient des instructions pour extraire les fichiers source</dd>
        </dl>
    </li>
</ul>
