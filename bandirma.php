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
  <title>Bloglar-Bandırma Gezisi</title>
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
  <h1>Bandırma Gezisi</h1>
  <h2 class="h2Header">Bandırma Nerededir?</h2>
  <div id="solKatman">
  <p>
    Bandırma, Güney Marmara'da bulunan Balıkesir'e bağlı bir sahil ilçesidir.
  </p>
  </div>
  <div id="sagKatman">
  <img src="https://blog.biletbayi.com/wp-content/uploads/2020/08/bandirma-balikesir-scaled.jpg" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
</div>
  <h2 class="h2Header">Bandırma'nın Gezilmesi Gereken Yerleri</h2>
    <div id="solKatman">
    <strong><h3 class="h3Header">Kuş Cenneti</h3></strong>
    <p>
      Bandırma merkezine 18 kilometre uzaklığı bulunan Kuş Cenneti’ne özel araçlarla veya gezi otobüsleriyle ulaşım 
    sağlayabilirsiniz.Adından da anlaşılacağı gibi pek çok kuş türünün uğrak noktalarından olan alan, oldukça geniş 
    bir bölgede yayılış göstermektedir. Bununla birlikte yüzlerce farklı kuş türüne ev sahipliği yapan alanda hem 
    yeşillik hem de göl bulunmaktadır.
  </p>
</div>
  <div id="sagKatman">
  <img src="https://cdn1.ntv.com.tr/gorsel/KhnxqBI1EEyiy2cAq-JzhA.jpg?width=1000&mode=crop&scale=both" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
  </div>
  <div id="solKatman">
    <strong><h3 class="h3Header">Bandırma Arkeoloji Müzesi</h3></strong>
    <p>
      İlçe merkezinin 1,6 kilometre uzaklığında yer alan Bandırma Arkeoloji Müzesi’ne yürüyerek veya otobüslerle ulaşabilirsiniz.
    Liman kenarında yer alan müzenin içerisinde yüzlerce farklı savaş aleti yer almaktadır. Hem iç hem de dış kısmı mimari açıdan 
    ilgi gören müzede ilk çağlara ait yaşam kalıntıları da bulunuyor.Pek çok tarihi yazıtların bulunduğu müze, çiftçilikten 
    madenciliğe farklı aletleri de içerisinde saklamaktadır. Her yıl yüz binlerce turist tarafından ziyaret edildiği bilinen 
    müzenin kültürel nesneler açısından da büyük bir önemi vardır.
  </p>
 </div>
 <div id="sagKatman">
   <img src="data:image/jpeg;base64,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" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
    </div>
    <div id="solKatman">
    <strong><h3 class="h3Header">Kyzikos Antik Kenti</h3></strong>
    <p>
      Bandırma merkezine 10 kilometre uzaklıkta bulunan Kyzikos Antik Kenti’ne otobüslerle veya özel araçlarla ulaşım 
    sağlayabilirsiniz.Kyzikos Krallığı’nın merkezi olarak bilinen bölgenin yüzlerce yıllık geçmişi bulunuyor. Günümüzde 
    restore çalışmalarıyla korunma altına alınan antik kent, yoğun ilgiyle karşılanmaktadır.
  </p>
  </div>
  <div id="sagKatman">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUOUqRI6NBYB7o2D4qpOv7dQV93-s4pd96LaYh1vJY1U42CAWQUpUsxWMz4DIxjy56lEE&usqp=CAU" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
    </div>
  <h2 class="h2Header">Bandırma'nın Yemekleri</h2>
  <div id="solKatman">
   <p>
     Marmara mutfağı hakimdir. Bunlar ; Balıkesir kaymaklısı, Sura, Saçaklı mantı vb. sayılabilir.  
   </p>
  </div>
  <div id="sagKatman">
   <img src="https://icdn.turkiyegazetesi.com.tr/images/haberler/2019_05/buyuk/balikesir-kaymaklisi-tarifi-1556713660.jpg" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300"> 
  </div>
   <h2 class="h2Header">Kişisel Yorumlarım</h2>
    <p>
        Bandırma, ileride daha da gelişecek bir ilçe olacak. Eğer Bursa-Çanakkale-Balıkesir arasına uğrayacaksanız mutlaka Bandırma'ya uğrayın. İyi yolcuklar!
    </p>
  
</body>

</html>