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
  <title>Bloglar-Hatay Gezisi</title>
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
  <h1>Hatay Gezisi</h1>
  <h2 class="h2Header">Hatay Nerede?</h2>
  <div id="solKatman">
  <p>
    Hatay, Türkiye'nin en güneyinde ve Akdeniz'e kıyısı olan bir kenttir. Hatay Suriye ile sınırı olan bir ilimizdir.
  </p>
</div>
<div id="sagKatman">
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Antakya_-_2011-04-10.jpg/1200px-Antakya_-_2011-04-10.jpg" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
    </div>
  <h2 class="h2Header">Hatay'ın Gezilmesi Gereken Yerleri</h2>
  
    <strong><h3 class="h3Header">Hatay Arkeoloji Müzesi</h3></strong>
    <div id="solKatman">
    <p>
      Hatay Arkeoloji Müzesi
      Hatay’ın il merkezinde, Antakya’da yer alan Hatay Arkeoloji Müzesi, öneminden dolayı görmek isteyebileceğiniz 
    yerlerden biridir. Hatay’ın tüm bölgelerinden Antakya’ya yapacağınız seyahatler ile birlikte Hatay Arkeoloji 
    Müzesi’ne toplu taşıma araçları ve özel taksiler ile ulaşabilirsiniz.Türkiye’nin en büyük mozaik müzesi olan
    Hatay Arkeoloji Müzesi’nde 3500 yıllık tarihleri bulunan mozaikler sergilenmektedir. Tonlarca ağırlığa sahip
    olan devasa mozaiklerin sergilendiği Hatay Arkeoloji Müzesi, sahip olduğu mozaiklerin kapladıkları alanlar 
    düşünüldüğünde dünyanın en büyük mozaik müzesi olarak dikkat çekmektedir. Özellikle Antakya ve çevre ilçelerden
    bulunan mozaiklerin sergilendiği bu müze içerisindeki eserler ilk günkü gibi başarı ile sergilenmektedir.
  </p>
   </div>
   <div id="sagKatman">
  <img src="https://www.kulturportali.gov.tr/contents/images/20170918150419083_HATAY%20MUZESI%20GULCANACAR%20(23)(1).jpg" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
    </div>
    <strong><h3 class="h3Header">Vakıflı Köyü</h3></strong>
    <div id="solKatman">
    <p>
      Vakıflı Köyü, Samandağ’a bağlı bir köy olarak dikkat çekmektedir. Tarihi ve doğal yapısı ile dikkat çeken 
    Vakıflı Köyü, Antakya’ya yaklaşık olarak 25 kilometre mesafede bulunmaktadır. Antakya’dan kalkan otobüs
    ve minibüsler ile Samandağ’a sonrasında da Vakıflı Köyü’ne giderek bu köyü ziyaret edebilirsiniz.1900’lü
    yılların başında bölgede yaşayanların büyük bir çoğunluğu Ermenilerden oluşmaktaydı. 1. Dünya Savaşı’nın
    ardından yaşanan olaylar çerçevesinde bölgedeki Ermenilerin çoğu bölgeyi terk etse de günümüzde de nüfusu 
    sadece Ermenilerden oluşan tek köy olarak Vakıflı Köyü dikkat çekmektedir. Tarihi açıdan da önemli bir
    konumda yer alan Vakıflı Köyü, görülmesi gereken bir değerdir.
  </p>
</div>
  <div id="sagKatman">
  <img src="https://www.hatayekspres.com/wp-content/uploads/240048vakifli-koyu-1jpg-scaled.jpg" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
 </div>
    <strong><h3 class="h3Header">Harbiye Şelaleleri</h3></strong>
    <div id="solKatman">
    <p>
      Hatay’ın en ilgi çekici doğal güzelliklerinden biri olan Harbiye Şelaleleri, Antakya’ya yalnızca 4 
    kilometre mesafede bulunan Defne ilçesinin Harbiye Mahallesi’nde bulunmaktadır. Bu şelaleyi ziyaret
    etmek için toplu taşıma araçlarını ve özel taksileri kullanabilirsiniz.Defne’de yapılan kazı çalışmalarında
    yerleşimin M.Ö. 4000 yılına kadar gittiği görülmüştür. Defne’nin en önemli değerlerinden biri olarak da 
    Harbiye Şelaleleri’dir. Yemyeşil bir ortam içerisinden akan şelale, onlarca farklı şelalenin oluşmasına ön
    ayak olur. Harbiye Şelaleleri’ne gittiğinizde çevrede yer alan kafelere ve restoranlara gidebilir ve su sesi
    ile dinlendirici zamanlar geçirebilirsiniz. Harbiye Şelaleleri, fotoğraf çekmek isteyenler için de son derece uygun bir yerdir.
  </p>
  </div>
  <div id="sagKatman">
  <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/e7/10/08/harbiye-selalesi.jpg?w=1200&h=1200&s=1" style="display: block;
    margin-left: auto; margin-right: auto;" width="600" height="300">
    </div>
  <h2 class="h2Header">Hatay'ın hangi yemekleri meşhurdur?</h2>
  <div id="solKatman">
   <p>
    Hatay, Türkiye'nin gastronomi kentidir. Belli başlıca yemekleri ; künefe, tepsi kebabı,kaytaz böreği sayılabilir.
   </p>
   </div>
   <div id="sagKatman">
   <img src="https://st.myideasoft.com/idea/bg/23/myassets/blogs/hatay-kunefe-tarifi.jpg?revision=1671533866" style="display: block;
   margin-left: auto; margin-right: auto;" width="600" height="300">
   </div>
   <h2 class="h2Header">Kişisel Yorumlarım</h2>
    <p>
        Hatay, çok büyük bir kültürel ve gastronomik bir mirasa sahip. Umarım bu kenti tüm dünyaya tanıtabiliriz. İyi yolculuklar!
    </p>
    
  
</body>

</html>