<h3>Ustawienie video w tle (Background video)</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>Video w tle może zostać dodane do szablonu przy użyciu jQuery-plugin <a
        href="http://vodkabears.github.io/vide/" target="_blank" rel="nofollow">Vide</a>.
    Sprawdź, czy plugin jest aktywowany. Aby to sprawdzić, przejdź do "Template manager
    -> Templates", następnie do szablonu, jakiego używasz (ThemeXXXX Details and Files),
    otwórz plik "index.php" i sprawdź, czy plugin jest włączony, jak na Img. 29.
    Również, sprawdź czy plugin jest dostępny w folderze "js". W przypadku, gdy plugin
    się tam nie znajduje, możesz go pobrać przy użyciu linka powyżej i przenieść do
    wymaganego folderu. Nie zapomnij również o dodaniu skryptu do pliku "index.php".</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p>Aby ustawić video w tle, przejdź do "Template Manager -> Templates", kliknij na
    szablon, jakiego używasz (ThemeXXXX Details and Files). W katalogu "html ->
    mod_custom" stwórz plik "
    &lt;nazwa&gt;.php" z następującą zawartością:
</p>

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

<p>gdzie [nazwa_pliku] - nazwa pliku video, bez dodawania rozszerzenia pliku.</p>
<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>Bądź gotowy na przygotowanie następujących formatów video: mp4, ogv, webm oraz plakat
    video w formatach png, jpg oraz gif. Nazwa pliku powinna być taka sama dla
    wszystkich plików i korespondować z wcześniej stworzonym [nazwa_pliku]. Wszystkie
    pliki powinny być przesłane do folderu media\video\ w katalogu źródłowym Joomla

</p>


<p>W następnym kroku musisz stworzyć moduł, wyświetlający video. Dodaj moduł HTML z
    następującą zawartością:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>

<p>W zakładkach "Advanced" oraz "Alternative Layout" wybierz wcześniej stworzone pliki
    szablonu [nazwa_pliku].</p>

<p>Po wykonaniu wszystkich kroków, zobaczysz moduł z video w tle.</p>