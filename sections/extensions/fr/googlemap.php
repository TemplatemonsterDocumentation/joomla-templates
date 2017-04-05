<h3>GoogleMap Plugin</h3>

<p><strong>GoogleMap</strong> est un plugin qui permet d'afficher Google Map sur votre site web:</p>

<figure class="img-polaroid">
    <img src="img/googlemap-1.jpg" alt="">
</figure>

<p align="justify"><strong>Pour personnaliser le plugin aller à Extensions&gt; Plugins. Cela vous amènera au gestionnaire de plugins. Tapez &quot;Google&quot; dans le champ de recherche et cliquez sur le lien de titre System - Google Maps.</strong></p>
<figure class="img-polaroid">
    <img src="img/googlemap-3.jpg" alt="">
</figure>
<p>Cela vous amènera à la page de configuration principale du plugin Google Map. N'hésitez pas à consulter plus de détails sur le <a
        href="http://tech.reumer.net/Google-Maps/Documentation-of-plugin-Googlemap/"
        target="_blank" rel="nofollow">site officiel</a>.</p>
<p>
  <figure class="img-polaroid">
    <img src="img/googlemap-2.jpg" alt="">
  </figure>
</p>
<p>Voyons les options de configuration:
</p>
<table width="980"  class="options-table">
  <tr>
        <td width="154" class="col-1"><strong>Publié</strong></td>
        <td width="29">-</td>
        <td width="781">Sinon, toutes les cartes disparaîtront.</td>
  </tr>
    <tr>
        <td class="col-1"><div align="justify"><strong>Debug?</strong></div></td>
        <td>-</td>
        <td><div align="justify">Si la carte affiche des messages de débogage [comme commentaires] dans la page html. Les commentaires peuvent être affichés en regardant la source de la page. </div></td>
    </tr> <tr>
        <td class="col-1"><strong>Code du plugin</strong></td>
        <td>-</td>
        <td>Le code qui est utilisé pour être placé dans l'article entre {} pour déclencher le plugin. Mosmap par défaut.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>Parenthèses</strong></td>
        <td>-</td>
        <td><div align="justify">Quelles parenthèses doivent être utilisées autour du code du plugin: {} [défaut avec [] pour plusieurs kml], [] [avec () pour plusieurs  kml] ou les deux.</div></td>
    </tr>
   
    <tr>
        <td class="col-1"><strong>Version d'API Google </strong></td>
        <td>-</td>
        <td><div align="justify">La version de l'API Google qui doit être utilisée [3.exp la dernière version développée, 3.nombre pour version spécifique et 3 pour version stable (défaut)].</div></td>
    </tr>
    <tr>
    <td class="col-1"><strong>Rafraîchissement Visuel</strong></td>
        <td>-</td>
        <td>Afficher de nouvelles tuiles actualisées dans Google Maps.</td>
    </tr>
        <td class="col-1"><strong>Signé en</strong></td>
        <td>-</td>
        <td> Le visiteur est reconnu comme un utilisateur google et il verra la carte personnalisée par google.</td>
    </tr><td class="col-1"><div align="justify"><strong>Montrer la carte?</strong></div></td>
        <td>-</td>
        <td>Afficher la carte ou ne pas afficher la carte. Peut être utilisé pour afficher uniquement un lien lightbox ou streetview ou des directions sur une page.</td>
    </tr>    <td class="col-1"><strong>Bouton Imprimer</strong></td>
        <td>-</td>
        <td><div align="justify">Afficher un bouton ou lien pour imprimer une carte, vue sur la rue et sa direction [aucun (par défaut), icône, texte, les deux ou votre propre texte/image comme un lien].</div></td>
    </tr>  <td height="26" class="col-1"><strong>Nom de Classe CSS</strong></td>
      <td>-</td>
        <td>Le nom de classe CSS pour une carte à utiliser pour modeler la carte. Vide par défaut.</td>
    </tr>
    <tr>
        <td class="col-1"><strong>CSS pour Carte</strong></td>
        <td>-</td>
        <td><div align="justify">La définition CSS du plugin pour afficher la carte et son objet associé. Si la classe de la carte est modifiée, modifiez également la classe dans le css.</div></td>
    </tr>
      <td class="col-1"><strong>Charger avec mootools?</strong></td>
        <td>-</td>
        <td>Si mootools [par défaut]] doit être utilisé pour charger la carte ou un intervalle de temps./td>
    </tr><td class="col-1"><strong>Intervalle de temps</strong></td>
        <td>-</td>
        <td><div align="justify">Pour afficher la carte un intervalle de temps en ms est pour attendre que la page soit chargée correctement [par défaut 500ms]. Surtout pour IE, cela peut éviter une erreur fatale.</div></td>
    </tr><td class="col-1"><strong>Clé d'API Google Maps</strong></td>
        <td>-</td>
        <td>La clé de l'API Google pour Google Maps 3 pour l'utilisation et la facturation.</td>
    </tr>  <td class="col-1"><div align="justify">
        <p><strong>Clé multi-api</strong><strong>de Google Maps</strong></p>
</div></td>
        <td>-</td>
        <td><div align="justify">Les clés facultatives de l'API Google pour Google Maps version 3 pour l'utilisation et la facturation. Avec multi vous pouvez ajouter vos multi domaines pour votre site et la clé derrière. Le domaine suivant va sur une nouvelle ligne.</div></td>
    </tr>
    <td class="col-1"><strong>Variable URL</strong></td>
        <td>-</td>
        <td>Utilisez HTTP_HOST [défaut] ou  le paramètre Joomla.</td>
    </tr>  <td class="col-1"><strong>Site Web Google</strong></td>
        <td>-</td>
        <td>Quel site Web Google doit être utilisé pour le géocodage et les directions.</td>
    </tr><td class="col-1"><strong>Carte stylée</strong></td>
        <td>-</td>
        <td><p>La chaîne JSON pour styliser la carte; Vous pouvez modifier votre style de carte. Vérifiez les styles plus <a
        href="https://snazzymaps.com/"
        target="_blank" rel="nofollow">ici</a>.</p>
           <div class="alert alert-info"><p>Copiez le code et collez-le dans le champ <strong>Carte stylée</strong>:</p>
             <p>
               <figure class="img-polaroid">
                 <img src="img/map.jpg" alt="">
               </figure>
             </p>
          </div><p></p></td>
    </tr><td class="col-1"><strong>Aligner</strong></td>
        <td>-</td>
        <td> Comment la carte doit être alignée dans le contenu [objet html parent].</td>
    </tr><td class="col-1"><strong>Option langue</strong></td>
        <td>-</td>
        <td><div align="justify">Si la langue des cartes [boutons, infobulles] doit être déterminée par: site - langue du site; utilisateur - donc le langage/l'emplacement. </div></td>
    </tr><td class="col-1"><strong>Langue</strong></td>
        <td>-</td>
        <td>Quand la langue est déterminée par la configuration, définissez la langue ici.</td>
    </tr><td class="col-1"><strong>Largeur</strong></td>
        <td>-</td>
        <td>Largeur de la carte. Vous devez mettre les unités derrière le nombre comme 100% ou 400px.</td>
    </tr><td class="col-1"><strong>Hauteur</strong></td>
        <td>-</td>
        <td>Hauteur de la carte. Vous devez mettre les unités derrière le nombre comme 100% ou 400 px.</td>
    </tr><td class="col-1"><strong>Effet sur carte</strong></td>
        <td>-</td>
        <td>Quel effet doit être utilisé sur la carte [Horizontal utilise une largeur absolue!].</td>
    </tr>
</table>