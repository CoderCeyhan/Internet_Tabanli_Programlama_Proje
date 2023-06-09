<?php

$db = mysqli_connect('localhost', 'php', '1234', 'internet_programlama_proje');

try {
  $dovizKur = @simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
  if (empty($dovizKur)) {
    throw new exception("Anlık bir hata nedeniyle döviz kuru alınamadı.Lütfen sayfayı tekrar yenileyiniz.");
  }
  $dovizKurArr =  [
    $dovizKur->Currency[0]->ForexSelling,
    $dovizKur->Currency[3]->ForexSelling,
    $dovizKur->Currency[4]->ForexSelling
  ];
} catch (Exception $dovizHata) {
  return $dovizHata->getMessage();
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <title>CS:GO Rehberi</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="CssFile.css">
  <style>
    p{
      margin-left:20px;
      margin-right:10px;
    }
    h1 {
      color: rgb(131, 22, 22);
      margin-left:10px;
    }
    #sagKatman {
            display: inline-block;
            vertical-align: top;
            padding: 5px;
            height: 300px;
            width: 800px;
            border: 1px #564d4dcc;
            margin-top: 5px;
            margin-right: 10px;
            margin-bottom: 5px;
            margin-left: 5px;
        }

        #solKatman {
            display: inline-block;
            vertical-align: top;
            padding: 5px;
            height: 300px;
            width: 800px;
            margin-top: 5px;
            margin-right: 5px;
            margin-bottom: 5px;
            margin-left: 10px;
            border: 1px #564d4dcc;
        }
  </style>
</head>

<body>
  <div class="navbar">
    <h1>Tulpar.net</h1>
 </div>
  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">Oyun Rehberleri
      </button>
      <div class="dropdown-content">
        <a class="active" href="Dota2_Rehberi.html">Dota 2</a>
        <a class="active" href="cs-go.html">CS:GO</a>
        <a class="active" href="eu4.html">Europa Universalis IV</a>
      </div>
    </div>
    <a href="blog.html">Blog</a>
    <a href="cv.html">Özgeçmiş</a>
    <a href="Login.html" class="split">Giriş Yapın</a>
    <a href="Sign-Up.html" class="split active">Kaydolun</a>
    <?php echo "<a class='currency'>£$dovizKurArr[2]</a>"; ?>
    <?php echo "<a class='currency'>€$dovizKurArr[1]</a>"; ?>
    <?php echo "<a class='currency'>$$dovizKurArr[0]</a>"; ?>
  </div>
  <h1>CS:GO Oyun Rehberi</h1>
  <h2 class="h2Header">Nedir?</h2>
  <div id="solKatman">
  <p>
    Counter-Strike: Global Offensive ya da bilinen kısa adıyla CS:GO,
  Valve ve Hidden Path Entertainment tarafından geliştirilen çevrimiçi
  birinci şahıs nişancı oyunudur. Oyun, 2012 yılında piyasaya sürülmüştür.
  </p>
  </div>
  <div id="sagKatman">
  <img src="https://www.donanimhaber.com/cache-v2/?t=20230417154444&width=-1&text=0&path=https://www.donanimhaber.com/images/images/haber/159290/600x338cs-go-sistem-gereksinimleri.jpg" style="display: block;
    margin-left: auto; margin-right: auto;" width="450" height="253">
  </div>
  <h2 class="h2Header">Oyun İçeriği Nedir?</h2>
  <div id="solKatman">
  <p>
    Oyun, T ve AT kısaltmalı takımlar vardır. Her iki taraf da
  birbirlerini yok etmeleriyle ve aynı zamanda ayrı hedefleri tamamlamakla
  görevlidir. T'ler, oyun moduna bağlı olarak ya bombayı yerleştirmeli
  ya da rehineleri savunmalıdır; AT'ler ise ya bombanın
  yerleştirilmesini önlemeli, bombayı etkisiz hale getirmeli ya da
  rehineleri kurtarmalıdır. Hepsi bu moda özgü farklı özelliklere sahip
  dokuz oyun modu vardır. Oyunda ayrıca oyuncuların özel Valve
  sunucularında oynamasına ve ayrıca topluluk üyelerinin özel haritalar ve
  oyun modları ile kendi sunucularını barındırmalarına izin veren
  eşleştirme desteği de bulunmaktadır. Bir battle royale oyun modu olan
  "Tehlikeli Bölge", Aralık 2018'de tanıtıldı.
  </p>
 </div>
 <div id="sagKatman">
  <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/730/ss_d196d945c6170e9cadaf67a6dea675bd5fa7a046.1920x1080.jpg?t=1668125812" style="display: block;
    margin-left: auto; margin-right: auto;" width="450" height="253">
  </div>
  <h2 class="h2Header">Nasıl Oynanır?</h2>
  <p>
     Serinin önceki oyunları gibi Global Offensive, görev tabanlı birçok oyunculu
    birinci şahıs nişancı oyunudur. Oyuncular ilk önce görevleri tamamlamak veya
    düşman takımı yok etmek için T'ler veya AT'ler
    takımlarından birini seçerler. Örneğin, yıkım haritalarında (de_)
    T'ler bomba kurmaya çalışırken,AT'ler bombanın
    kurulmasını engellemeye veya kurulmuş bombayı imha etmeye çalışır.
    Global Offensive'e önceki oyunlardaki görevlere ek olarak silah yarışı
    (arms race) denilen bir mod eklenmiş, bu modla birlikte klasik
    Counter-Strike haritalarının yanında farklı haritalar da oyuna dahil
    edilmiştir.<br>
     Önceki oyunlarda olduğu gibi, bir tur görevlerin tamamlanmasıyla veya düşman
    takımın imha edilmesiyle sona erer ve yeni bir tur başlar. Tur bitmeden
    ölen oyuncular, dirilmek için turun bitmesini beklemek zorundadır.
    Oyuncular önceki turdaki performansına göre alacağı parayla silah
    ve ekipman satın alabilir.
  </p>
    <h3 class="h3Header">Oyun Modları</h3>

    <h3 class="h3Header">Klasik ve Rekabetçi</h3>
  <p> Bomba imha ve rehine kurtarma senaryolarından oluşur. Her turun başında
    oyunculara çeşitli eylemler ile kazanılan paralar verilir. AT
    takımının T takımının bölgesindeki rehineleri kurtarıp kendi bölgelerine
    getirmesi gerekir. T'lerin ise rehineleri kurtaran AT'leri engellemesi
    gerekir. Eğer T'ler rehinelere zarar verirse para cezası alır.</p>

    <br>•<strong>Rekabetçi</strong>:<p> 5 kişilik iki takım hâlinde, her oyuncunun
    kendi rütbesiyle eş ya da yakın seviyelerdeki rütbeli oyuncularla birlikte
    oynanan moddur. Uzun ve kısa maç olmak üzere ikiye ayrılır, oyuncunun
    seçimine göre maçlar klasik(15), yoldaştaki gibi kısa(9) raunt
    oynanabilmektedir. İki taraftan 30 raunt kazanan veya ilk 16’ncı raunta
    ulaşan takım oyunu kazanır. En çok seviye puanı veren moddur. Uzun süreli
    kazanma sonucu oyuncunun rütbesi yükselirken, uzun süreli yenilgi sonucu
    oyuncunun rütbesi düşmektedir. Bu moda girildikten sonra oyun bitene
    kadar çıkılamaz. Çıkılması durumunda ise oyuncu belli bir süre zarfında
    'Rekabetçi Bekleme Süresi' adında bir ban sistemi ile karşılaşır ve
    cezası bitene kadar rekabetçi maçlara giremez. Takım arkadaşlarını
    defalarca kez vuran oyuncu da oyundan atılarak bu cezai yaptırıma
    maruz kalır.</p>

    <br>•<strong>Klasik(Basit Eğlence)</strong>: <p>Rekabetçi maçın daha hafifletilmiş
     versiyonudur. Bu moda istenilen zamanda girilebilir veya çıkılabilir.
     En fazla 10 kişiye ulaşan iki takım halinde oynanır. 8 raunt kazanan
     takım oyunun galibi olur. Raunt sonunda verilen para ödülü rekabetçi
     maçlara göre fazladır ve çelik yelek ekipmanı oyun tarafından otomatik
     olarak temin edilmektedir.</p>

     <h3 class="h3Header">Bomba imha senaryosu</h3>
      <p>T'ler, C4 patlayıcıyı iki bomba alanından (A ve B) birine kurup
     patlayana kadar korumalı; AT'ler, bomba alanlarını korumalı
     veya kurulan bombayı patlamadan önce imha etmeli. Eğer bomba imha
     edilebilirse kaç adet T takımı üyesinin hayatta kaldığı önemli değildir.</p>

    <h3 class="h3Header">Rehine kurtarma senaryosu</h3>
     <p>AT'ler, rehineleri teröristlerden kaçırıp kurtarma noktasına
    ulaştırmalı; T'ler, rehinelerin kaçırılmasını engellemeli. Eğer
    T'ler veya AT'ler rehineyi öldürmeye çalışırlarsa çok ağır
    bir para cezasına tabi tutulurlar. Sonraki güncellemelerle birlikte kurallar
    değişmiştir. AT'lerin yalnızca bir rehineyi kurtarma noktasına
    ulaştırması raundu kazanmaları için yeterlidir.</p>

    <h3 class="h3Header">Yoldaş</h3>
     <p>İki kişilik takımlardan oluşan maçlardır. Rekabetçi modunun mini bir
    versiyonudur. Bu oyun modunda da rütbe sistemi bulunur. Rekabetçi modundaki
    bütün kurallar burada da geçerlidir. 9 raunt kazanan takım galiptir ve
    kazanılabilen en yüksek para miktarı 8000 dolardır. Rekabetçi maçlara
    göre aynı haritaların küçültülmüş versiyonlarında oynanır. Kendine özel
    rütbe sistemi vardır.</p>

    <h3 class="h3Header">Ölüm Maçı</h3>
     <p>Oyuncuların sınırsız yeniden canlanma ve silah satın alma hakkına sahip
    olduğu takım ölüm karşılaşması modudur. Her öldürme silaha bağlı olarak
    oyuncuya yaklaşık 10 ile 20 puan arasında kazandırır. 10 dakikalık bir
    moddur ve süre sonunda en yüksek puana ulaşan oyuncu maçı kazanır. 3 farklı
    modu vardır; herkes tek, takımlı herkes tek, takımlı. Herkes tek:
    Takım yoktur, kişisel puan vardır. herkes düşmandır. Takımlı herkes tek:
    Takım vardır, kişisel puan vardır. Herkes düşmandır. Takımlı: Takım
    vardır, kişisel değil takımsal puan vardır. Düşman rakip takımdır.</p>

    <h3 class="h3Header">Silah Yarışı</h3>
     <p>Ölüm maçı tarzında bir oyun türüdür. Oyuncu düşman oyuncuyu 2 kere
    öldürürse yeni bir silah ile ödüllendirilir. Üç tane hafif makineli
    silah seviyesiyle başlanır. Bu seviyeleri dört tane tüfek, iki tane
    pompalı, iki tane keskin nişancı tüfeği, bir tane ağır makineli
    tüfek ve dört tane tabanca seviyesi takip eder. En son silahtan sonra
    altın bıçağa ulaşılır. Altın bıçakla bir rakip öldüren oyunu kazanır.</p>

    <h3 class="h3Header">Yıkım</h3>
     <p>Bomba imha haritalarında oynanır. Kendine özgü haritalara sahiptir.
    Ölen oyuncu tekrar canlanamaz ve doğmak için rauntun bitmesini beklemek
    zorundadır. 10 tane silah seviyesi bulunur. Bazı silah seviyeleri
    takımlara göre farklılık gösterir. Oyuncu her düşman öldürdüğünde yeni
    bir silah ile ödüllendirilir. Birden fazla düşman öldürmesi durumunda
    bomba ile ödüllendirilir.</p>

    <h3 class="h3Header">Uçan Gözcü</h3>
     <p>Yer çekimi azaltılmış ortamda oyuncuların SSG 08 ve bıçak kullandığı takım
    maçıdır. Oyuncu normalde zıplayabildiği seviyenin daha üstüne
    zıplayabilmektedir.</p>

    <h3 class="h3Header">Tehlikeli Bölge</h3>
     <p>En fazla 18 oyuncu ile oynanır. Her oyuncu maçın başında kendine bir
    iniş bölgesi ve yardımcı bir ekipman belirler. Helikopterler ile inen
    oyuncular, çevresindeki yapılardan silah ve teçhizat toplar. Her
    oyuncunun kendine ait tabletleri vardır. Bu tabletler ile oyuncular,
    kendilerini silah ve ekipman bakımından donatabilmektedir. Haritaların
    çeşitli yerlerinde ekipman ve silah desteği sağlayan ikmal kutuları
    vardır. Bu oyun modu, rütbe sisteminin bulunduğu üçüncü moddur. Bütün
    rakiplerini öldüren oyuncu maçın galibi olur.</p>

    <h3 class="h3Header">Geri Alma</h3>
     <p>3 T, 4 AT oyuncusu ile oynanır. Kırık Diş Operasyonu ile
    oyuna eklenmiştir. T takımı C4 kurma alanlarından birinde doğarken
    AT takımı ise C4 kurma alanına ulaşabileceği yerlerde doğar.
    Raunt başlarında oyunculara belirli ekipmanlardan
    (silah, teçhizat ve bomba) oluşan kitler verilir ve oyuncu bunlardan
    birini seçer. Seçtiği silahlara göre pozisyonu değişir.</p>
  <h2 class="h2Header">Derece Sistemi Var Mıdır?</h2>
  <p>
    Elbette ki var. Eskiden yoktu. Ancak hilelerden bıkan oyunculara çare
    olarak Valve yönetimi,2020 yılında CS:GO'ya Prime sistemini getirdi.
    Böylelikle 2020 yılından itibaren oyuncular, dereceli maçlarda oynamak
    için ya ellerindeki dereceli hesaplar ile girecekler, ya da yeni bir
    dereceli hesap satın almak zorunda kalacaklar. Hepinize iyi oyunlar!
  </p>
  
</body>

</html>