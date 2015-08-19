<h3>Arkaplan Video Ayarları (Background video)</h3>


<figure class="img-polaroid">
    <img src="img/video-1.png" alt="">
</figure>


<p>Şablonunuza jQuery-plugin <a href="http://vodkabears.github.io/vide/" target="_blank"
                                rel="nofollow">Vide</a> ile bir arkaplan videosu
    ekleyebilirsiniz. Öncelikle eklentinin aktif olup olmadığını kontrol edin. Bunu;
    "Görünüm -> Temalar" kısmına girip, kullandığınız temayı seçerek yapabilirsiniz.
    Şimdi (TemaXXXX Detayları ve Dosyalar) buradan "index.php" dosyasını açın ve
    'daki gibi eklentinin kullanıma hazır olduğuna emin olun. Dikkat: Eklenti "js"
    klasöründe de ulaşılabilir olmalı. Eğer eklenti orada yoksa, yukarıdaki bağlantıdan
    indirebilir ve o klasöre yükleyebilirsiniz. Daha sonra gerekli komutu "index.php"
    dosyasına eklemelisiniz.</p>


<figure class="img-polaroid">
    <img src="img/video-4.png" alt="">
</figure>


<p>Bir arkaplan videosu kullanmak için, "Görünüm -> Temalar" bölümüne girin ve
    kullandığınız temayı seçin (TemaXXXX Detaylar ve Dosyalar). Buradan "html ->
    mod_custom" klasöründe, aşağıdaki verilerle bir "
    &lt;dosya&gt;.php" dosyası oluşturun:
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

<p>yukarıdaki alanda yer alan [dosya_ismi] - video dosyanızın ismidir ve dosya
    uzantısını yazmadan bu şekilde yazılmalıdır.</p>

<figure class="img-polaroid">
    <img src="img/video-2.png" alt="">
</figure>

<p>Kullanabileceğiniz dosya türleri şunlardır: mp4, ogv, webm ve video posteri için png,
    jpg ve gif. Dosya ismi tüm dosyalarla ve yukarıda oluşturduğunuz [dosya_ismi] ile
    aynı olmalıdır. Tüm dosyalar Joomla ana dizinindeki media\video klasörüne
    yüklenmelidir.

</p>


<p>Bir sonraki adımda, videonuzu gösterecek bir modül oluşturmanız gerekir. Aşağıdaki
    içerikle bir HTML modül hazırlayın:</p>


<figure class="img-polaroid">
    <img src="img/video-3.png" alt="">
</figure>


<p>Hem "Gelişmiş" sekmesinden hem de "Alternatif Biçim" menüsünden, daha önceden
    oluşturmuş olduğunuz [dosya_ismi] temanızı seçin.</p>

<p>Tüm adımları tamamladığınızda, arkaplan videonuz için çalışır bir modüle sahip
    olursunuz.</p>