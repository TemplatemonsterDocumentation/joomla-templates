<h3>Ustawienia wideo w tle</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>Wideo w tle można dodać do szablonu za pomocą pluginu jQuery <a
        href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>.
Należy sprawdzić czy plugin jest włączony. Aby to sprawdzić, należy przejść do karty "Menedżer szablonów -> Szablony", a następnie do motywu, którego używasz (ThemeXXXX Szczegóły i Pliki), potem otworzyć plik "index.php" i sprawdzić, czy plugin jest inicjalizowany, jak jest to przedstawione na poniższym zrzucie ekranowym. Należy również sprawdzić, czy plugin jest dostępny w folderze "js". W przypadku, jeżeli plugin'u niema, można go pobrać korzystając z powyższego linku i przesłać go do odpowiedniego folderu. Również, niech Państwo nie zapomną o dodaniu skryptu do pliku "index.php":</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p>W celu ustawienia wideo w tle, należy przejść do "Menedżer szablonów -> Szablony", a zatem kliknąć na używanym szablonie (ThemeXXXX Szczegóły i Pliki). W katalogu "html -> mod_custom" należy utworzyć plik "<name>.php" o następującej zawartości:</p>

<code>&lt;?php <br>
    /** <br>
    * @package Joomla.Site <br>
    * @subpackage mod_custom <br>
    * <br>
    * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved. <br>
    * @license GNU General Public License version 2 or later; see LICENSE.txt <br>
    */ <br>
    <br>
    defined('_JEXEC') or die;
    ?&gt; <br>
    &lt;div class="mod-custom mod-custom__&lt;?php echo $moduleclass_sfx ?&gt;" id="module_&lt;?php echo $module-&gt;id;
    ?&gt;"&gt; <br>
    &lt;div class="video-container" data-vide-bg="&lt;?php echo JURI::base( true ).'/media/video/[file_name]'; ?&gt;"&gt;&lt;/div&gt;
    <br>
    &lt;div class="module-content"&gt; <br>
    &lt;div class="module-content-inner"&gt; <br>
    &lt;?php echo $module-&gt;content;?&gt; <br>
    &lt;/div&gt; <br>
    &lt;/div&gt; <br>
    &lt;/div&gt;</code>

<p>gdzie [file_name] to nazwa pliku wideo, bez dodawania rozszerzenia pliku:</p>

<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>Potem należy przygotować następujące formaty wideo: mp4, ogv, webm oraz poster wideo w formatach png, jpg and gif. Nazwa pliku powinna być jednakowa dla wszystkich plików i powinna odpowiadać wcześniej utworzonej [file_name]. Wszystkie pliki powinny być przesłane dofolderu media/video/ do głównego katalogu Joomla.</p>

<p>W następnym etapie należy utworzyć moduł, który wyświetla obraz wideo. Trzeba dodać niestandardowy moduł HTML o następującej zawartości:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>Zarówno w karcie "Zaawansowane" i liscie rozwijanej "Alternatywny Układ" należy wybrać wcześniej utworzony szablon pliku [file_name].</p>

<p>Po wykonaniu wszystkich etapów, pojawi się moduł z wideо w tle.</p>
