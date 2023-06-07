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
  <title>Bloglar-Didim Gezisi</title>
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
  <h1>Didim Gezisi</h1>
  <h2 class="h2Header">Didim Neresi?</h2>
  <div id="solKatman">
  <p>
    Didim, Aydın'ın en turistik ilçeleri arasında yer alıyor. Eski ismi Yenihisar olan Didim'in doğusunda 
    Muğla il sınırı, Güllük Körfezi ve Akbük Koyu var. Batısı ve güneyinde Ege Denizi ile çevrili olan bu ilçe,
    kuzeyde Bafa Gölü'yle ve Büyük Menderes ile sınırlanmış yarımada şeklindedir.
  </p>
  </div>
  <div id="sagKatman">
  <img src="https://gezicini.com/wp-content/uploads/2019/04/didim.jpg" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
    </div>
  <h2 class="h2Header">Didim'in Gezilmesi Gereken Yerleri</h2>
  <div id="solKatman">
    <strong><h3 class="h3Header">Apollon Tapınağı</h3></strong>
    <p>
    Didim'in simgelerinden olan Apollon Tapınağı, eşsiz bir tarihe sahip. Burası bir dönemler Antik Yunan dünyasının en önemli
    kehanet merkezlerinden biriymiş. Antik dünyanın 3 büyük kutsal alanından biri olarak gösterilen Apollon Tapınağı'nın 
    tarihinin 2000 yıl kadar öncesine dayandığı belirtiliyor.
    </p>
    </div>
    <div id="sagKatman">
    <img src="https://www.antiktarih.com/wp-content/uploads/2018/11/DSC_0116-e1543588003660.jpg" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
  </div>
  <div id="solKatman">
    <strong><h3 class="h3Header">Akbük</h3></strong>
    <p>
    Didim'e bağlı bir mahalle olan Akbük, Altınkum çevresine göre daha sakin bir yer. Tatilcilerin sevdiği Akbük,
    rahat otelleriyle konaklamak için de son derece ideal. Didim'e 20 kilometre kadar mesafesi bulunan Akbük,
    çam ormanlarıyla çevrili tam 15 kilometrelik sahiliyle gidenleri kendine hayran bırakıyor. Sahil manzaralı 
    restoranlarında yemek yemenin ayrı bir keyif olduğu Akbük, her gelene zengin seçenekler sunuyor.
    </p>
  </div>
  <div id="sagKatman">
    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/5b/fe/7f/akbuk-koyu.jpg?w=1200&h=-1&s=1" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
  </div>
  <div id="solKatman">
    <strong><h3 class="h3Header">Altınkum Plajı</h3></strong>
    <p>
    Didim'e gelenlerin mutlaka bir kere denize girdiği bir yer Altınkum Plajı. Her noktası mavi bayraklı plajlarla
    çevrili Didim'de Altınkum Plajı da bulunmaz bir nimet. İsmini büyüleyici altın renkli kumundan alan bu plaj,
    yaz aylarında yerli ve yabancı turistlerin tüm gününü geçirdiği yerlerden oluyor.
  </p>
  </div>
  <div id="sagKatman">
    <img src="https://i.cnnturk.com/i/cnnturk/75/740x416/5f5df9072af10716e40ce3cd.jpg" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
  </div>
  <h2 class="h2Header">Didim'de Neler Yenir?</h2>
  <div id="solKatman">
   <p>
    Genellikle Ege yemekleri hakimdir. Bunlar; Ebegümeci kavurması,acılı sote, ciğer güveç,çaykama vb. sayılabilir. Mutlaka denemelisiniz.
  </p>
  </div>
  <div id="sagKatman">
    <img src="https://i.nefisyemektarifleri.com/2022/12/23/ebegumeci-kavurmasi.jpg" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
   </div>
   <h2 class="h2Header">Kişisel Yorumlarım</h2>
    <p>
        Didim, Türkiye'nin en güzel ilçelerinden biri.Bundan dolayı doğal,kültürel,yemekler yönünden zengin bir yeri mutlaka gidilecek yerler listenize ekleyin. İyi yolculuklar!
    </p>
    
  
</body>

</html>