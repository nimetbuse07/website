<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NemoNotebooks Website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">NemoNotebooks<span>.</span></a>

        <nav class="navbar">
            <a href="#home">Ana Sayfa</a>
            <a href="#about">Hakkımızda</a>
            <a href="#products">Ürünler</a>
            <a href="#review">Yorumlar</a>
            <a href="#contact">İletişim</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>Hoş Geldiniz.</h3>
            <span> e-ticarette doğru adres </span>
            <p>Farklı özellikler, farklı fiyatlar ile güvenilir alışveriş.</p>
            <a href="#" class="btn">göz at!</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span> hakkımızda </span> </h1>

        <div class="row">

            <div class="video-container">
                <video src="images/about-vid2.mp4" loop autoplay muted></video>
                <h3>en iyi bilgisayar satıcısı</h3>
            </div>

            <div class="content">
                <h3>neden nemoNotebooks?</h3>
                <p>Yılların vermiş olduğu tecrübe ile müşteri memnuniyeti ve güvenilirliği sağlanmıştır.</p>
                <p>Ücretsiz kargo,iade haklarının korunması,hediye çekleri,kuponlar ve indirimler,güvenli ödeme ile hızlı teslimat.</p>
                <a href="#" class="btn">Detaylar için>></a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- icons section starts  -->

    <section class="icons-container">

        <div class="icons">
            <img src="images/icon-1.png" alt="">
            <div class="info">
                <h3>ücretsiz kargo</h3>
                <span>tüm siparişlerde</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/icon-2.png" alt="">
            <div class="info">
                <h3>15 gün içinde iade fırsatı</h3>
                <span>geri ödeme garantisi</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/icon-3.png" alt="">
            <div class="info">
                <h3>hediyeler & kuponlar</h3>
                <span>seçili ürünlerde</span>
            </div>
        </div>

        <div class="icons">
            <img src="images/icon-4.png" alt="">
            <div class="info">
                <h3>güvenli ödeme</h3>
                <span>tüm kartlar için</span>
            </div>
        </div>

    </section>

    <!-- icons section ends -->

    <!-- prodcuts section starts  -->


    <section class="products" id="products">
        <!--trendyol ürünleri başlangıç-->
        <h1 class="heading"> trendyol <span>ürünleri</span> </h1>

        <div class="box-container">


            <?php
            include("baglan.php");

            $sec = "Select * From trendyol";
            $sonuc = $conn->query($sec);

            if ($sonuc->num_rows > 0) {
                while ($cek = $sonuc->fetch_assoc()) {
                    echo "
                        <div class='box'>
            
                          <div class='image'>
                             <img src='https://cdn.dsmcdn.com/ty453/product/media/images/20220613/12/125240114/499387703/1/1_org_zoom.jpg' alt=''>                       
                          </div>
                          <div class='content'>
                             <h3>" . $cek['tybaslik'] . "</h3>
                             <a href=" . $cek['tylink'] . "><b>İNCELEMEK İÇİN LİNKE TIKLAYINIZ</b></a>
                             <a href='localhost:8080/nemo/nemo/product.php '><b>İNCELEMEK İÇİN LİNKE TIKLAYINIZ</b></a>
                             <div class='price'> " . $cek['tyfiyat'] . " </div>
                          </div>   
                        </div>";
                }
            } else {
                echo "hata.";
            }

            ?>

        </div>



        <!---trendyol bitiş vatan başlangıç-->
        <h1 class="heading">N11 <span>ürünleri</span> </h1>
        <div class="box-container">
             

             <?php 
             include("baglan.php");

             $sec = "Select * From n11";
             $sonuc = $conn->query($sec);

             if ($sonuc->num_rows > 0){
                while ($cek = $sonuc->fetch_assoc()){
                    echo " 
                        <div class='box'>

                           <div class='image'>
                           <img src='https://cdn.vatanbilgisayar.com/Upload/PRODUCT/acer/thumb/134837-5-1_small.jpg' alt=''>                   
                    </div>
                    <div class='content'>
                        <h3>" . $cek['n11baslik'] . "</h3>
                        <a href=" . $cek['n11link'] ."><b>İNCELEMEK İÇİN LİNKE TIKLAYINIZ</b></a>
                        <div class='price'> " . $cek['n11fiyat'] . "  </div>
                    </div>
                </div>";
                }
             } else {
                echo "hata.";
             }

             ?>
           

            
        </div>
        <!--vatan bitiş n11 başlangıç-->
        <h1 class="heading"> Vatan <span>ürünleri</span> </h1>
        <div class="box-container">

            
            <?php 
                    include("baglan.php");

                    $sec = "Select * From vatan";
                    $sonuc = $conn->query($sec);

                    if ($sonuc->num_rows > 0){
                    while ($cek = $sonuc->fetch_assoc()){
                        echo " 
                            <div class='box'>

                                <div class='image'>
                                <img src='https://n11scdn.akamaized.net/a1/226_339/elektronik/dizustu-bilgisayar/lenovo-ideapad-3-15itl6-82h802f6tx-i5-1135g7-8-gb-1-tb-ssd-156-free-dos-dizustu-bilgisayar__0202897981914136.png' alt=''>                   
                        </div>
                        <div class='content'>
                            <h3>" . $cek['vatanbaslik'] . "</h3>
                            <a href=" . $cek['vatanlink'] ."><b>İNCELEMEK İÇİN LİNKE TIKLAYINIZ</b></a>
                            <div class='price'> " . $cek['vatanfiyat'] . "  </div>
                        </div>
                    </div>";
                    }
                    } else {
                    echo "hata.";
                    }

        ?>


        </div>
        <!--N11 bitiş media markt başlangıç-->
        <h1 class="heading">MediaMarkt <span>ürünleri</span> </h1>
        <div class="box-container">

            
                    <?php 
                                include("baglan.php");

                                $sec = "Select * From mediamarkt";
                                $sonuc = $conn->query($sec);

                                if ($sonuc->num_rows > 0){
                                while ($cek = $sonuc->fetch_assoc()){
                                    echo " 
                                        <div class='box'>

                                                <div class='image'>
                                                <img src='https://n11scdn.akamaized.net/a1/226_339/elektronik/dizustu-bilgisayar/lenovo-ideapad-3-15itl6-82h802f6tx-i5-1135g7-8-gb-1-tb-ssd-156-free-dos-dizustu-bilgisayar__0202897981914136.png'  alt='' >                   
                                                </div>
                                                <div class='content'>
                                                    <h3>" . $cek['mmbaslik'] . "</h3>
                                                    <a href=" . $cek['mmlink'] ."><b>İNCELEMEK İÇİN LİNKE TIKLAYINIZ</b></a>
                                                <div class='price'> " . $cek['fiyat'] . "  </div>
                                            </div>
                                        </div>";
                                }
                                } else {
                                echo "hata.";
                                }

                    ?>
    
        </div>

    </section>

    <!-- ürünler bitiş -->

    <!-- yorumlar başlangıç  -->

    <section class="review" id="review">

        <h1 class="heading"> müşteri <span>yorumları</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Şahsen beklentimin çok üzerinde bir ürünle karşılaştım ürünü günlük kullanım için almış olsam da oyun performansı da mühimdi benim için lolde 120 sabit fps valorantda da 95 140 arasında bir fps aldım bir laptop için ortalamanın üzerinde olan değerler bunlar bu fiyata alınabilecek maksimum verim alınmış gayet keyifli şık bir cihaz satıcıya da ilgi ve almasından dolayı teşekkür ederim güvenerek buradan alabilirsiniz.</p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="user-info">
                        <h3>can aksu</h3>
                        <span>aktif kullanıcı</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>harika bir şey bu. benim bilgisayar almak için iki nedenim vardı 1. üni hayatımda işime yaraması. 2. genshın impact oynamak. ilki konusunda emin değilim kazanamadım ama genshın hiç kasmıyor çok iyi oynuyorum sadece genshın gibi kapsamlı oyunları oynardakn fanlar birz sesli çalışıyor ama benim için çok bir sorun değil alın aldırın.</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="user-info">
                        <h3>Nur aslan</h3>
                        <span>aktif kullanıcı</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Ürün çok iyi paketlenmiş bir şekilde geldi. Kurulum çok kolay ve gerçekten hızlı bir bilgisayar. Ofis için ciddi anlamda kullanışlı bir bilgisayar, iş oyun oynamaya gelince basit düzeyde bir çkk oyunu rahat bir şekilde oynatıyor ısınma sorunu fazla olmuyor. Yüksek grafik içeren oyunlar için ısınma bir sorun oluşturabilir. Kullaşlı hafif güvenli bir bilgisayar.</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="user-info">
                        <h3>erdem aydın</h3>
                        <span>aktif kullanıcı</span>
                    </div>
                </div>
                <span class="fas fa-quote-right"></span>
            </div>

        </div>

    </section>

    <!-- yorumlar bitiş -->

    <!-- iletişim başlangıç  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span> bize </span> ulaşın </h1>

        <div class="row">

            <form action="">
                <input type="text" placeholder="isim soy isim" class="box">
                <input type="email" placeholder="gmail" class="box">
                <input type="number" placeholder="telefon no" class="box">
                <textarea name="" class="box" placeholder="mesajınız" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="gönder" class="btn">
            </form>

            <div class="image">
                <img src="images/iletisim.png" alt="">
            </div>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>kısayollar</h3>
                <a href="#">giriş</a>
                <a href="#">hakkımızda</a>
                <a href="#">ürünler</a>
                <a href="#">Yorumlar</a>
                <a href="#">İletişim</a>
            </div>

            <div class="box">
                <h3>ekstralar</h3>
                <a href="#">hesabım</a>
                <a href="#">siparişlerim</a>
                <a href="#">favorilerim</a>
            </div>

            <div class="box">
                <h3>konum</h3>
                <a href="#">turkiye</a>
            </div>

            <div class="box">
                <h3>iletişim</h3>
                <a href="#">05355353535</a>
                <a href="#">örnek@gmail.com</a>
                <img src="images/payment.png" alt="">
            </div>

        </div>

        <div class="credit"> kurucuları: <span> Nimet Atila,Ali Can Doğru </span> | tüm hakları saklıdır </div>

    </section>

    <!-- footer section ends -->



















</body>

</html>