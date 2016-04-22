<h3>Örnek veri yükleme</h3>

<p>Örnek veri Joomla web şablonunu canlı demo görüntüleyebilmek için kullanılır. Bu
    örnek makale, modül ayarları, web ayarları vb içermektedir. Eğer örnek bir resim
    veya başka bir örneği kullanmayı planlamıyorsanız lütfen bu adımı atlayın. </p>

<p>Örnek bilgileri kurabilmek için iki basit adımı tamamlamanız gerekmektedir.</p>

<h4>Adım Örnek resim yüklemek.</h4>

<p>Örnek resim yükleyebilmek için şablon paketi dizinini açın ve "kaynaklar" klasörüne
    gidin. Orada"to_the_root_directory" dizinini görmelisiniz. Bu joomla kurulum köküne
    yerleştirilen dosyaları içermektedir. Sunucunuza dosya yükleyebilmek için dosya
    yöneticinizi kullanın.</p>

<h4>Adım SQL dosyasını içe aktarın.</h4>

<p>Örnek dosyaların yüklenmesinde en son ve en önemli adım SQL dosyalarını import
    etmektir. SQL dosyasını örnek veritabanının bir dökümü, tüm Joomla web sitesi
    verileri orada saklıdır. SQL dosya veritabanı yönetim aracı (phpMyAdmin)
    kullanılarak alınabilir. Şablon SQL dosyası - "dump.sql" şablon paketi "kaynaklar"
    dizininde bulunur. </p>


<p class="alert alert-danger"> Lütfen Dikkat canlı bir siteniz var ise SQL dosyasını import <strong>ETMEYİN</strong>
    eğer bu işlemi uygularsanız veritabanınızdaki bütün verileri kaybedeceksiniz.
<p class="alert alert-danger">Dikkat: SQL doslayarınızı oluşturan tablo ön adlarınızın SQL dosyasındaki yablo ön adları
    ile aynı olduğundan lütfen emin olun.
<p>Veritabanı yönetim aracı ile doğrudan veritabanı tablo ön adlarını (Prefix) kontrol
    edebilirsiniz. Tablo adları için kontrol edin. Tablo ön ekleri sembollerden oluşan
    bir dizidir.. (
    <i>örn. tablo "jos_assets" öneki "jos_"</i>
    tur.). Ayrıca Joomla kök
    dizininde &quot;configuration.php&quot; dosyası veritabanı önekini bulabilirsiniz.
    Line 19'da arayabilirsiniz: </p><code>public $dbprefix = 'jos_';</code><p> (
    <i>Önek
        "jos_"
    </i>
    )
</p>

<p>Tablo önek eşleşmiyorsa "dump.sql" açın editörünüzde Arama ve Değiştirme aracını
    kullanarak değiştirin (CTRL+F veya CTRL+H kısayollarıyla) değiştirebilirsiniz.
    "jos_" Tablo önek (
    <i>SQL dosyasında kullanın</i>
    ) veritabanı eşleşenleri ile
    birlikte. Ayrıntılı bir eğitim videosu ile gözden geçirebilirsiniz <a
        href="/help/joomla-how-to-change-database-tables-prefix-in-sql-file.html"
        target="_blank">SQL dosyasında veritabanı tablosunun öneki nasıl
        değiştirilir</a>.
</p>

<h6>Artık veritabanınıza SQL dosyalarınızı alabilirsiniz.<br>
    To import sample data to your database please perform these simple steps: (check the
    slides below)</h6>

<ol class="index-list">
    <li><p>PhpMyAdmin aracınnda sol üst sütunda bulunan veritabanı listerinden
            veritabanınızı seçin.</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-1.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Üst gezinti menüsünden içe aktar şeçeneğini işaretleyin.</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-2.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Gözat butonuna tıklayarak &quot;sources&quot; klasörünün içerisindeki dump.sql
            seçin."sources" directory</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-3.jpg" alt=""/>
        </figure>
    </li>
    <li><p>Son olarak git butonuna tıklayarak içe aktarma işlemini başlatın.</p>

        <figure class="img-polaroid">
            <img src="img/sample-install-4.jpg" alt=""/>
        </figure>
    </li>
</ol>

<p class="alert alert-info">Ayrıca eğitim videosuna göz atabilirsiniz <a
        href="/help/phpmyadmin-how-to-import-sample-data-dump-file-phpmyadmin.html"
        target="_blank">PhpMyAdmin aracını kullanarak SQL dosyasını içe aktarmak</a></p>