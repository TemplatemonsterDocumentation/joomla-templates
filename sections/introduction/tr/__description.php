<h2 class="item1">Giriş</h2>

<h5>Joomla Şablonu aldığınız için teşekkür ederiz. Bu belgeler bir kaç bölümden oluşmaktadır, Joomla Web sitesinin
    kurulumu ve sıfırdan nasıl yönetileceğine dair olan süreci göstermektedir. Bizler mümkün olduğunca açık ve kolay
    tekip edilebilmesi adına bu manuel klavuzu elimizden gelenin en iyisini sizler için yarattık. </h5>

<h3>Joomla CMS Nedir?</h3>

<p>Joomla CMS zengin içerikli web siteleri oluşturabilmek için açık kaynak kodlu bir çözümdür. Bu web siteleri güçlü ve
    çevrimiçi uygulamalar oluşturabilmek adına sağlanır ve yönetebilmek için hemen hemen hiçbir teknik beceri ve bilgi
    gerekli değildir. Birçok bakış açısı, ease-of-use (kullanım-kolaylığı-için) ve genişletilebilirliği dahil olmak
    üzere, Joomla mevcut olan en popüler Web sitesi yazılımını yaptık.
    <a href="http://www.joomlatr.org/joomla-dokumanlar/joomla-nedir.html" target="_blank">Daha fazla bilgi</a>
</p>

<h3>Joomla Şablonu Nedir?</h3>

<p>Joomla şablonu Joomla CMS platformu için bir cilttir. Başka bir deyişle, kolay adımlarla yeni bir şablon yükleme ve
    Joomla Web sitesi görünümünü değiştirebilme. Bu basitlik Joomla şablonunun tüm gerekli kaynak dosyaları ile sağlanır
    ve size ihtiyacınız olacağı şekilde düzenlemek yada geliştirebilmek için ücretsiz olmasıdır.</p>

<h3>Dosya Yapısı</h3>

<h6>Yüklediğiniz şablon paketi bir kaç klasörden oluşmaktadır. Bütün klasörlerin ne içerdiğini görelim:</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>Documentation</b></dt>
            <dd> dokümantasyon dosyaları içermektedir.</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd> Ana dokümantasyon dosyası. Buradasınız Haklısınız :)
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>joomla</b></dt>
            <dd> Joomla tema arşivini içermektedir, hızlı yükleme dosyası ve unzip komut dosyası.
            </dd>
        </dl>
        <ul class="index-list">
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        theme###.zip
                    </dt>
                    <dd> tema arşivi. Tüm tema dosyalarını içermektedir.
                        <a href="#template-installation">Joomla uzantısı yöneticisi aracılığı ile yüklenir.</a>
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        fullpackage.zip
                    </dt>
                    <dd> içermektedir
                        <a href="#complete_install">Tam Joomla kurulum paketi</a>
                        motor dosyaları ile, tema ve örnek içeriği (veritabanı dökümü, örnek fotoğraflar)
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        unzip.php
                    </dt>
                    <dd> dosyaları ayıklayabilmek için kullanılan dosya fullpackage.zip hosting sunucusuna yüklendiği
                        zaman.
                    </dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>screenshots</b>
            <dd> şablonun ekran görüntülerini içermektedir.</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                <b>sources</b>
            <dd> şablon kaynak dosyalarını içermektedir.</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd> Şablonun Adobe Photoshop kaynak dosyalarını içerir (.psd)
                    </dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        to_the_root_folder
                    </dt>
                    <dd> Web şablonunun canlı demo olarak görüntülenmesini sağlamak için kullanılır, örnek içerik
                        dosyalarını içermektedir. Bu klasör içeriği Joomla kök dizinine yüklenmelidir.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        dump.sql
                    </dt>
                    <dd> veritabanı döküm dosyası. Tema örnek içeriğine sahiptir.
                    </dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        pkg_bundle.zip
                    </dt>
                    <dd> tema ile sağlanan ek uzantıları içermektedir.
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
            <dd> Şablonun özel yazı tiplerini indirebilmeniz için bağlantılar içerir.
            </dd>
        </dl>
    </li>
    <li class="file">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                info.txt
            </dt>
            <dd> Kaynak dosyaları ayıklayabilmek için talimatları içerir.
            </dd>
        </dl>
    </li>
</ul>