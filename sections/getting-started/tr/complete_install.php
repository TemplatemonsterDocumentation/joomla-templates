<h3>Komple Kurulum</h3>

<p>Joomla siteniz yok yenibaştan kurmak istiyorsanız </p>

<p>Bu yöntemi kullanarak Joomla CMS motoru, Joomla Şablonu, örnek içerik, ve gerekli tüm uzantılar yüklenecektir.</p>

<!-- Creating database -->


<h3>Veri Tabanını Oluşturmak</h3>

<p>Dosyalarınızı sunucuya yükleme işleminiz bittiğinde siz Joomla web siteniz için yeni bir veritabanı
    hazırlayabilirsiniz. Hosting kontrol panelinden yeni bir veri tabanı oluşturarak veri tabanı yönetim aracınızı
    oluşturabilirsiniz. (
    <i>genellikle PhpMyAdmin</i>
    ).
</p>

<p>PhpMyAdmin araçları ile 3 basit adımda yeni bir veritabanı oluşturmanız mümkün olacaktır: (Aşşağıdaki slaytları takip
    edin)</p>

<ol class="index-list">
    <li>Veri tabanı listesine erişebilmek için üst gezinti menüsünden Veritabanı dügmesine tıklayın</li>

    <li>"Yeni veritabanı oluştur" alanına veritabanı adını girin</li>

    <li>Sağ tarafındaki oluştur dügmesine tıklayın</li>
</ol>

<p>Kişisel bir veritabanı, veritabanı listesi görüntülenecektir. Veritabanına erişim sağlayabilmek için adına
    tıklayın.</p>

<div class="owl-carousel">
    <div class="item">
        <p>1. Veritabanı listesine ulaşabilmek için, veritabanı düğmesine tıklayın</p>

        <figure class="img-polaroid">
            <img src="img/database-create-1.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>2. Veritabanı giriş adı </p>

        <figure class="img-polaroid">
            <img src="img/database-create-2.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>3. Oluştur dügmesine tıklayın</p>

        <figure class="img-polaroid">
            <img src="img/database-create-3.jpg" alt=""/>
        </figure>
    </div>
    <div class="item">
        <p>4. Kişisel bir veritabanı, veritabanı listesi görüntülenecektir. Veritabanına erişim sağlayabilmek için adına
            tıklayın.</p>

        <figure class="img-polaroid">
            <img src="img/database-create-4.jpg" alt=""/>
        </figure>
    </div>
</div>


<p>Ayrıca ayrıntılı eğitim videosunu kontrol edebilirsiniz
    <a href="/help/how-to-create-a-database.html">Nasıl bir veri tabanı oluşturulabilir.</a>
</p>

<p class="alert alert-info">Eğer veritabanı oluşturmayla alakalı herhangi bir sorununuz varsa yardım ve destek için
    hosting sağlayıcınız ile görüşün. </p>


<!-- Uploading files -->

<h3>Yükleme ve unzipping</h3>

<p class="">Joomla ile çalışmaya başlayabilmek için barındırma sunucunuza (Hosting) dosyaları yüklemeniz gerekmektedir.
    Bu işlem hosting dosya yöneticisi veya bazı üçüncü parti FTP yöneticisi kullanılarak yapılabilir.</p>

<ol class="index-list">
    <li>Şablon paketinizi dizinin içerisine açın ve "Joomla" yönetimine gidin.</li>

    <li>'unzip.php' ve 'fullpackage.zip' dosyalarını seçin ve sunucunuza yükleyin(
        <a href="/help/how-upload-files-server-2.html" target="_blank">Sunucuya dosya nasıl yüklenir.</a>
        )
    </li>
    <li>Sunucunuzda 'unzip.php' dosya yolunuzu yazın (
        <i class="muted">http://sizin_domain_adınız/unzip.php</i>
        ) kendi
        <abbr title="Internet Explorer, Google Chrome, Mozilla Firefox, Opera, Safari vb.">internet tarayıcınıza</abbr>.
    </li>

    <li><p>Aşşağıda bulunan ekranı görmelisiniz:</p>


        <figure class="img-polaroid">
            <img src="img/complete-install-unzip-php.jpg" alt="Unzip.php initial screen.">
        </figure>


    </li>
    <li>'Choose your zip file' kutusundan lütfen fullpackage.zip dosyasını seçin.</li>

    <li>'Unzip to' dosyaları ayıklamak istediğiniz dizini belirtin.</li>

    <li>'Unzip' butonuna tıklayarak işlemi başlatın.</li>
</ol>

<p class="alert alert-info">Dosyaları ayıklamayı planladığınız dizin için dogru izinleri ayarladığınızdan emin olun.
    İzinler sunucu yapılandırmasına bağlı olarak CHMOD 755 veya 777 olmalıdır. </p>


<!-- Joomla CMS installation -->


<h3>Joomla CMS Kurulumu</h3>

<p> Lütfen, tüm
    <a href="#prepare">hazırlık adımlarını</a>
    tamamladığınızdan ve gerekli herşeyin hazır olduğundan emin olun.
</p>

<p>İnternet tarayıcınızı açın ve adres çubuğunuza Joomla dizininizin yolunu girin(
    <i>e.g. http://sizin_domain_isminiz/joomla</i>
    ). Siz ilk olarak Joomla kurulum ekranını görmelisiniz:
</p>


<h4>Adım Yapılandırma (Configuration)</h4>


<p>"Dil Seçin" (Select Language) kutusunu kullanarak kurulum dilinizi seçin.</p>

<p>
    <span class="label">Lütfen dikkat:</span>
    (Select Language) "Dil Seçin" kutusu sadece Joomla yükleme işlemi dilinin seçilmesine olanak sağlar. Bu sizin web
    sitenizin dilini etkilemez.
</p>

<p>Sizin "Ana Yapılandırma" (Main Configuration) bölgesindeki zorunlu tüm forum alanlarını doldurmanız gerekmektedir.
    Gerekli alanlar * yıldız sembolleri ile işaretlendirilmiştir.</p>

<p>"E-postanız" (Admin Mail), "Yönetici Kullanıcı Adı" (Admin Username) ve "Yönetici Parolası" (Admin Password) sağ
    tarafta bulunan sütunlar yönetim hakkına sahip olan yeni Joomla web sitesi kullanıcısı oluşturmak içindir.</p>

<p class="alert alert-danger">"E-postanız" (Admin Mail), "Yönetici Kullanıcı Adı" (Admin Username) ve "Yönetici
    Parolası" (Admin Password) Joomla web sitesine erişebilmek için
    <abbr title="Joomla yönetim paneli web sitenizin içeriği ile çalışmak için kullanılır">gereklidir</abbr>. Onları
    güvende tutun.
</p>


<p>İşleminizi tamamladığınızda sağ üst köşedeki
    <strong>Sonraki (Next)</strong>
    butonuna tıklayın.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-1.jpg" alt="">
</figure>

<h4>Adım Veritabanı</h4>


<p>Joomla CMS kurulumu ikinci adım için veritabanı ayrıntıları gerekmektedir. Eğer bilgilerinizden emin değilseniz doğru
    bilgilere ulaşabilmek için barındırma (Hosting) sağlayıcınıza başvurun.</p>

<p>Sıfırdan Joomla yüklediğiniz gibi sadece girişleri yapmanız gereklidir. "Sunucu Adı" (Host Name), "Kullanıcı Adı"
    (Username), "Parola" (Password) ve "Veritabani adı" (Database Name). Genellikle diğer seçenekleri varsayılan olarak
    bırakabilirsiniz. Barındırma (Hosting) sunucunuza bağlı olarak bazı farklılıklar olabilir.</p>


<p>İşleminizi tamamladığınızda sağ üst köşedeki
    <strong>Sonraki (Next)</strong>
    butonuna tıklayın.
</p>

<figure class="img-polaroid">
    <img src="img/cms-install-2.jpg" alt="">
</figure>


<h4>Adım Genel Bakış</h4>


<p>Neredeyse Joomla yüklemenizi bitirdiniz. Genel Bakış adımlarında size Joomla Örnek verileri kurmak isteyip
    istemediğinizi seçmeniz gerekmektedir. </p>

<p class="alert alert-warning">Lütfen Dikkat: Joomla web sitesi için tüm görüntüleri ile şablonu canlı demo olarak
    görüntülenmesini istiyorsanız , örnek metin ve moduller konfigüre edilmelidir. Almış olduğunuz "sample_theme###"
    şablonunu görüntüleyeceksiniz ### yazan kısımda sizin şablon numaranız yeralacaktır.</p>

<p>Siz herhangi bir içerik olmadan sadece (saf) Joomla sitesi kurulumu istiyorsanız yüklemek için herhangi bir örnek
    veri paketini seçebilirsiniz.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-1.jpg" alt="">
</figure>


<p>Aşşağıda veritabanı yapılandırması ve yönetim paneli erişim bilgileri geçerli olup olmadığını kontrol edin ve
    gerekirse e-posta adresinize gönderebilirsiniz.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-3-2.jpg" alt="">
</figure>


<p>Ayrıca kurulum ayarlarını kontrolü ve sunucu barındırma (Hosting) Joomla gereksinimlerine uygun olup olmadığını
    görebilirsiniz. Eğer "Önerilen Ayarlar" (Recommended settings) bölümünde herhangi bir kırmızı bildirim varsa daha
    fazla yardım için barındırma (Hosting) sunucunuza başvurun.</p>


<p>İşlemi tamamladığınızda sağ üst köşede bulunan
    <strong>Kurulum (Install)</strong>
    butonuna tıklayın.
</p>
<figure class="img-polaroid">
    <img src="img/cms-install-3-3.jpg" alt="">
</figure>


<h4>Adım Kurulum Tamamlandı</h4>


<p>Tebrikler! Başarılı bir şekilde Joomla CMS yüklediniz.</p>

<figure class="img-polaroid">
    <img src="img/cms-install-4.jpg" alt="">
</figure>


<p class="alert alert-danger">Güvenliğiniz açısından Joomla kök dinininden "Kurulum" (Installation) dizinini silin.</p>

<p class="alert alert-info">Tiyo: Siz video eğitimini görüntüleyebilirsiniz.
    <a href="/help/joomla-3-0-how-to-install-joomla-engine.html">Joomla 3 motoru nasıl kurulur</a>
</p>

<p class="alert alert-warning">Eğer "Tam Kurulum" bitmiş ve tüm unsurlar yüklendiyse bir sonraki aşama "Şablon
    Kurulumuna" geçebilirsiniz, "Örnek Veri Kurulumu" ve "Eklentiler Kurulum" bölümlerini atlayabilirsiniz.</p>


<p>Şimdi Joomla CMS tabanlı bir Web sitesi yapılandırmasına geçmek için hazırız. "<b>Site</b>" butonuna tıklayarak web
    sitesini görüntüleyebilir veya
    <b>"Yönetici"</b> (<b>Administrator</b>) Joomla backend görüntüleyebilirsiniz.</p>