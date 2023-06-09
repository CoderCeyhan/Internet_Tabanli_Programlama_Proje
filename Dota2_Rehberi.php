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
  <title>Dota 2 Rehberi</title>
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
            height: 450px;
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
  <h1>Dota 2 Oyun Rehberi</h1>
  <h2 class="h2Header">Nedir?</h2>
   <div id="solKatman">
  <p>
    Dota 2, açılımı "Defence of The Ancients" olan oyunun ikincisidir. İlk oyun,
    Warcraft 3 adlı oyunun bir modu olarak Icefrog lakaplı bir modçu tarafından geliştirildi.
    Bu mod, oyuncular tarafından da çok sevilince, başka bir oyun firması olan Valve,
    2011 yılında Icefrog'tan oyun haklarını alarak Dota 2'yi çıkarttı. Günümüzde
    baskın olarak Dota 2 oynanmaktadır ve bir oyun platformu olan Steam'de en çok
    oynanan oyunlardan birisidir.
  </p>
</div>
<div id="sagKatman">
  <img src="https://cdn.oneesports.gg/cdn-data/2022/03/Dota2_ClashofHeroes-1024x576.webp" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
</div>
  <h2 class="h2Header">Oyun İçeriği Nedir?</h2>
  <div id="solKatman">
  <p>
    Oyun, karşılıklı merkez üsleri, bu üslere bağlanan üç yol (top,bottom,mid),
    bu yolların üzerinde ikişer kuleler, orman , oyun haritasının ortasından geçen bir
    ırmak ve o ırmağın kuzey tarafında bulunan bağımsız bir güçlü yaratık olan
    Roshan'ın ini bulunur.<br>
    Her iki tarafın üssünden belirli saniye aralıklarla doğan bir alay yolların
    ortasında karşılaşır ve birbirlerine saldırırlar. Oyuncular karşı alay askerlerine
    yaptıkları son vuruşlarla öldürüp altın kazanabilirler ya da orman içerisindeki
    küçük kamplarda belirli aralıklarla ortaya çıkan tarafsız yaratıkları öldürerek
    altın kasabilirler.<br>
    Altının önemi oyunda çok büyüktür. Çünkü oyuncular elde ettikleri altınlarla
    eşya alıp ve o eşyaları geliştirip veya elindeki satıp daha iyisini alıp güçlenebilirler.
    Eşya satın almanın iki yolu vardır. Birincisi; üssünüzün içindeki dükkan ve diğeri ise
    gizli dükkan. Gizli dükkan oyunda yalnızca iki tane vardır ve ormanda bulunurlar.
    üs dükkanında bulunan bazı eşyalar gizli dükkanda bulunmaz, aynı şekilde gizli
    dükkanda bulunan eşyalar üs dükkanında bulunmaz. Oyuncular düşük canlı kuryeleri
    ile savaşırken eşyalarını alabilirler.<br>
    Oyunda karakterler özelliklerine göre üç ana gruba ayrılmıştır; bunlar kuvvet , çeviklik
    ve zeka. Kuvvet özelliği baskın olan karakterler genellikle güçlüdür, daha çok vururlar,
    daha yüksek cana ve can yenilenmesine sahiptirler.Çeviklik özelliği baskın olan karakterler
    kuvvet karakterlerine göre düşük cana sahiptirler ancak zırhları,hareket hızları ve vuruş hızları
    yüksektir. Zeka baskın olan kararkterler ise güçlü büyüleri bulunan(karşı oyuncuyu susturma
    engelleme, sersemletme vb.) karakterlerdir. Ancak kuvvetleri düşük olduğundan canları
    fazla değildir.<br>
    Oyun ilk başladığı zaman ortada ve orman bölgelerinde rünler (runes) ortaya çıkar.
    İlk rün para rünüdür. Ardından belirli aralıklarla para rünü aynı bölgelerde yeniden
    ortaya çıkar. Diğer rünler ise iki kat hasar rünü, görünmezlik rünü, yenilenme rünü ve
    illüzyon rünüdür. Oyundaki özel bir eşya olan şişe ile bu rünler belli bir süre taşınabilir
    ve can yenilenmesini kısa bir süreliğine arttırmak için ve aynı zamanda özelliklerden yararlanmak için
    kullanılabilir.<br>
  </p>
</div>
<div id="sagKatman">
  <img src="https://estnn.com/wp-content/uploads/2022/08/Dota-2-Primary-Attributes-ft-560x315.jpg" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
</div>
  <h2 class="h2Header">Nasıl Oynanır?</h2>
  <p>
    Oyunun başında, çoğunlukla zeka karakterleri etkilidir ve onlar genellikle kuvvet karakterlerine
    (carry) oyuncularına altın kasmaları için yardım ederler (support). Oyunda bazı karakterlerin
    görünmezlik özelliği vardır ve bunu görmenimn tek yolu üs dükkanından izleyici ve nöbetçi göz
    almaktır. İzleyici göz oyunda gece olduğu zaman bile görmemizi sağlar ve nöbetçi göz de görünmez
    kahramanları görmemizi sağlar. Genellikle support karakterleri tarafından alınırlar. Aynı şekilde,
    düşmanın yerleştirdiği göz normalde görünmez ve o gözleri de görmek için nöbetçi göz gerekir. İki vuruşta
    kırılrlar. Gözler üs dükkanında belirli aralıklarla gelir. Oyunda carryler ile birlikte kuleler yıkılıp
    ana üsse girilip ana üsteki en yüksek canlı binayı yıkan oyunu kazanır. merkez üssündeki üçüncü kulenin
    koruduğu barikatlar yıkılırsa, karşı takımın alayları güçlenir ve daha sert saldırırlar. Oyundaki üç yolda
    genellikle 2 top, 2 bottom ve 1 mid olacak şekilde oyuncular yerlerini alırlar. Mid karakterleri
    daha hızlı seviye yükselme olanağına sahiptirler ve gerekirse diğer yollara gidip oyunculara düşman öldürme
    konusunda yardımcı olabilirler.<br>
    Ormanlarda ortaya çıkan tarafsız yaratıkların güçlüden güçsüze çeşitleri vardır. Oyuncular bu yaratıklardan
    düşürebileceği tarafsız eşyaları kullanabilirler veya kullanmak istemedikleri eşyaları merkez üssündeki kutuya
    ışınlayabilirler.Eğer bir tarafsız eşyayı düşman düşürmüşse onu alabilirsiniz ancak kutuya değil üsse
    bırakabilirsiniz.
    <br>
    Yazının başında söylediğim Roshan karakteri orta ve geç oyun(oyun sonuna doğru) öldürülebilecek hale gelir
    ve içerisinden 5 dakika içerisinde ölürseniz 5 saniye sonra yeniden canlanabileceğiniz bir reenkarnasyon eşyası
    düşürür.
    Oyuncular Roshan'ı öldürerek üs baskını için ciddi bir avantaj elde edebilirler.
  </p>
  <h2 class="h2Header">Derece Sistemi Var Mıdır?</h2>
  <p>
    Elbette ki var. Bu dereceler MMR denilen derece puanı ile belirlenir.Eğer dereceli bir maçta arkadaşınızla
    kazanırsanız +20, eğer kendiniz girip kazanırsanız da +30 MMR puanı kazanırsınız. Kaybetmeniz de aynı değerlerin
    negatifi olarak hesabınıza yansır ve derece düşmeniz pekala mümkündür. Bundan dolayı dereceli maçlarda çaylaksanız,
    takım arkadaşlarınız yenmek uğruna aşırı saldırganlaşabilir ve hakaretlere maruz kalabilirsiniz. Eğer hakaretleri
    kaldıramayan bir insansanız şimdiden oyunu oynamamanızı öneririz. Eğer benim için sorun yok diyorsanız, hepinize
    iyi oyunlar!
  </p>
</body>

</html>