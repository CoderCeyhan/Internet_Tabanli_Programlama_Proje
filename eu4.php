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
  <title>Europa Universalis IV Rehberi</title>
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
  <h1>Europa Universalis IV Oyun Rehberi</h1>
  <h2 class="h2Header">Nedir?</h2>
   <div id="solKatman">
  <p>
    Europa Universalis IV, Paradox Development Studio tarafından geliştirilmiş
  ve Paradox Interactive tarafından yayımlanmış strateji oyunu.
  Europa Universalis serisinin 4. oyunudur. 13 Ağustos 2013'te
  yayınlanmıştır. Kısaca EUIV ya da EU4 olarak da bilinir.
  </p>
</div>
<div id="sagKatman">
  <img src="https://cdn.akamai.steamstatic.com/steam/apps/236850/capsule_616x353.jpg?t=1681894887" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
</div>
  <h2 class="h2Header">Nasıl Oynanır?</h2>
  <div id="solKatman">
  <p>
    Oyunun temel ilkeleri dizinin daha önceki oyunlarına benzemekle beraber,
  birçok konuda daha karmaşık hale bürünmüştür. Oyuncu tek oyuncu olarak
  yapay zekaya karşı, çok oyuncu olarak diğer insanlara veya diğer
  insanlarla beraber yapay zekâya karşı oynayabilir. Bir devletin
  denetimini ele alarak diplomasi, politika ve askeri olanakları
  kullanmak ve diğer devletlere karşı galip olmak hedeflenir.
  Oyuncu birçok alternatif araç ile büyümeye çalışır. Oyunun zaman
  dilimi 1444 ila 1821 arasındadır, bu tarihler içerisinde oyuna
  oyunda yer alan istendiği ülkeyle, istendiği tarihte başlanabilir.<br>

    Oyuncu dilerse askeri güçle Dünya'yı ele geçirmeye çalışabilir,
  yağmacı bir göçebe devlet olarak bozkırda egemen olabilir, bir koloni
  imparatorluğu kurabilir veya bir ticaret devleti olarak bölgesinde
  ticareti domine edebilir. Oyun sandbox yapıdadır ve oyunu kazanmak
  için spesifik koşullar yoktur ancak oyuncunun ülkesi ortadan kaldırılırsa
  oyuncu yenildi sayılır. Diplomasiyle ittifaklar veya vasal ülkeler
  kurulabilir, diğer devletlerle ilişkiler geliştirilebilir. Casuslukla
  diğer ülkelerin topraklarında hak iddia edilebilir ve isyan hareketleri
  teşvik edilebilir, hem kara hem de denizde yapılabilen muharebeler
  savaşların seyrini belirler. Oyunda her toprağın bir dini ve kültürü
  bulunmaktadır, bu unsurlar toprağın huzursuzluk değerini etkiler.<br>

    Oyun içi oynanış kimi zaman dinamik yapıda kimi zaman ise tarihsel çeşitli
  olaylarla şekillenir, bu olaylarla pozitif çeşitli bonuslar elde edilebileceği
  gibi, negatif etkenler de elde edilebilir. Oyunun "Ironman" adı verilen özel
  bir ayarı bulunur, bu ayarda zorluk gibi çeşitli ayarlar kilitlenir ve
  değiştirilemez, aynı zamanda oyunda çeşitli eylemler sonrası otomatik olarak
  kayıt alınır, böylelikle yapılan hatalarda bir önceki kayda geri dönülemez.
  Oyunda başarım elde edilebilmesi için bu ayarın açılması gerekir.
  </p>
 </div>
 <div id="sagKatman">
  <img src="https://i0.wp.com/raiderking.com/wp-content/uploads/2022/08/EU4-Europa-Universalis-IV-Country-Tags-List.jpg?fit=1200%2C675&ssl=1" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
</div>
  <h2 class="h2Header">Oyun Zor Mudur?</h2>
  <p>
    Kesinlikle çok zor. Ancak, oyunu oynaya oynaya öğrenebilirsiniz veya DLC
    denilen eklenti paketlerini alıp oyuna getireceği yeni fonksiyonlar ile
    oyunu kolaylaştırabilirsiniz. Hepinize iyi oyunlar!
  </p>

</body>

</html>