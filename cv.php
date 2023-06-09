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
    <style>
        h1 {
            color: rgb(131, 22, 22);
            text-align: center;
            font-size: 50px;
        }

        .siteh1 {
            color: rgb(131, 22, 22);
            text-align: left;
            font-size: 33px;
            margin-left: 10px;
        }

        h2 {
            color: rgb(121 155 219);
            margin-left: 10px;
        }

        h3 {
            color: black;
            margin-left: 10px;
        }

        p {
            margin-left: 20px;
            margin-right: 10px;
        }

        #sagKatman {
            display: inline-block;
            vertical-align: top;
            padding: 5px;
            height: 500px;
            width: 1440px;
            border: 1px #564d4dcc;
            margin-top: 5px;
            margin-right: 10px;
            margin-bottom: 5px;
            margin-left: 5px;
        }

        #solKatman {
            display: inline-block;
            vertical-align: top;
            font-weight: bold;
            padding: 5px;
            height: 500px;
            width: 400px;
            margin-top: 5px;
            margin-right: 5px;
            margin-bottom: 5px;
            margin-left: 10px;
            border: 1px #564d4dcc;
        }
    </style>

    <title>Ümit Başar Ceyhan Özgeçmiş</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="CssFile.css">

</head>

<body>
    <div class="navbar">
        <h1 class="siteh1">Tulpar.net</h1>
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
    <h1><strong>Ümit Başar Ceyhan</strong></h1>
    <br><br>
    <div id="solKatman">
        <h2><strong>KİŞİSEL BİLGİLER</strong></h2>
        <h3>E-Posta: umitceyhan@ogr.bandirma.edu.tr</h3>
        <h3>Telefon: 0500 200 10 10</h3>
        <h3>Adres: Dost Apartmanı, Balgat-Çankaya/Ankara</h3>
        <h3>Medeni Hali: Bekar</h3>
        <h3>Sürücü Belgesi: Yok</h3>
        <h3>Diller: Türkçe, orta düzey İngilizce</h3>
        <h3>Hobiler: Uzay,Yazılım,Çağdaş Tarım</h3>
    </div>
    <div id="sagKatman">
        <h2><strong>EĞİTİM</strong></h2>
         <p>İlköğretim: Şehit İbrahim Çoban Ortaokulu</p>
         <p>Lise: Mustafa Azmi Doğan Anadolu Lisesi</p>
         <p>Üniversite: Bandırma Onyedi Eylül Üniversitesi - Bilgisayar Mühendisliği</p>
        <h2><strong>BECERİLER</strong></h2>
         <p>Web sitesi geliştirme (HTML,CSS)</p>
         <p>Oyun Programlama (C#,C++)</p>
         <p>Görsel Sanatlar</p>
        <h2><strong>HAKKIMDA</strong></h2>
         <p>2001'de Ankara'da doğdum. Çocukluğumdan itibaren teknolojiye meraklıydım.Lisedeyken bilgisayar oyunları oynar, kodlar ile küçük oyunlar yazardım. Bundan dolayı mesleğimi bilgisayar mühendisi olarak seçtim.</p>
         <p>Amacım, dünyanın dört bir köşesinden yeni bilgi öğrenip ve o bilgiyi kullanıp kendi projelerime entegre etmektir.</p>
    </div>
    
</body>