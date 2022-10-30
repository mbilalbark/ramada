<?php ?>
<!DOCTYPE html>
    <head>
            <title>
                Ramada
            </title>
            <description>

            </description>
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/splide-4.1.3/dist/css/splide.min.css">
            <script src="assets/splide-4.1.3/dist/js/splide.min.js"></script>
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
            <!-- <link rel="stylesheet" href="https://resources/demos/style.css"> -->
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
            <link href='https://css.gg/css' rel='stylesheet'>
            
    </head>
    <body>
        <header class="header">
            <div class="menu">
                <ul class="menu-ul flex-direction-row">
                    <li class="menu-li">
                      <a href="./" class="menu-button">Ana Sayfa</a>  
                    </li>
                    <li class="menu-li">
                        <a href="#" class="menu-button">Kurumsal</a> 
                        <ul class="menu-ul flex-direction-column">
                            <li class="menu-li">
                                <a href="./hakkimizda.php" class="menu-button">Hakkımızda</a> 
                            </li>
                            <li class="menu-li">
                                <a href="#" class="menu-button">İk / Kariyer</a> 
                            </li>
                            <li class="menu-li">
                                <a href="#" class="menu-button">Kişisel verilerin korunması</a> 
                            </li>
                        </ul>
                    </li>
                    <li class="menu-li">
                        <a  href="./odalarimiz.php" class="menu-button">Odalarımız</a> 
                    </li>
                    <li class="menu-li">
                        <a href="" class="menu-button">Toplantı</a> 
                    </li>
                    <li class="menu-li">
                        <a href="" class="menu-button">İletişim</a> 
                    </li>
                </ul>
            </div>
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                      <ul class="splide__list">
                          <li class="splide__slide"><img class="slide-image" src="https://bisanthepanorama.com/wp-content/uploads/2021/03/bungalovs-scaled.jpg"/></li>
                          <li class="splide__slide"><img class="slide-image" src="https://tatilsapanca.com/images/hotel/112_v.jpg"/></li>
                          <li class="splide__slide"><img class="slide-image" src="https://www.kibarbungalov.com/wp-content/uploads/2021/10/djc_0397.jpg"/></li>
                      </ul>
                </div>
              </section>
        </header>
        <div class="booking">
            <form class="booking-form">
                <div class="form-item">
                    <div class="form-item-icon">
                        <span class="form-icon gg-calendar-dates"></span>
                    </div>
                    <div class="form-item-info">Giriş</div>
                    <input class="form-item-date" type="text" id="datepicker1">
                </div>
                <div class="form-item">
                    <div class="form-item-icon">
                        <span class="form-icon gg-calendar-dates"></span>
                    </div>
                    <div class="form-item-info">Cıkış</div>
                    <input class="form-item-date" type="text" id="datepicker2">
                </div>
                <div class="form-item">
                    <div class="form-item-icon">
                        <span class="form-icon gg-home"></span>
                    </div>
                    <div class="form-item-info">Oda</div>
                    <input class="form-item-count" type="text">
                </div>
                <div class="form-item">
                    <div class="form-item-icon">
                        <span class="form-icon gg-profile"></span>
                    </div>
                    <div class="form-item-info">Yetişkin</div>
                    <input class="form-item-count" type="text">
                </div>
                <div class="form-item">
                    <div class="form-item-icon">
                        <span class="form-icon gg-boy"></span>
                    </div>
                    <div class="form-item-info">Çocuk</div>
                    <input class="form-item-count" type="text">
                </div>
                <div class="form-item">
                    <button class="form-button">Rezervasyon</button>
                </div>
            </form>
        </div>
        <div class="content main-page">
            <div class="content-upper">
                <h1 class="content-upper-title"> Ramada Resort Termal Sapanca </h1>
                 <div class="content-upper-context">
                    <img class="content-upper-context-image" src="https://cdn.hellovillam.com/HelloVillam/images/w600/bungalov-deger-1-1-oda-4-kisi-126323.jpg" />
                    <p class="content-upper-context-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dünyanın en yaygın uluslararası otel markası olan Wyndham Hotels & Group’un bir üyesi olarak, yüksek standartları ile tasarlanmış 
                        Ramada Resort Thermal  Sapanca, sizleri doğanın göz kamaştırıcı güzelliği ve ileri teknoloji, konfor ve estetik ile buluşturuyor.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lobideki güler yüzlü karşılama ile başlayan hoş geldiniz, sizin Ramada Resort Thermal Sapanca deneyiminizin başlangıcıdır.
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Kusursuz dizaynının özünde konsept olarak  3+1 ve  2+1 seçenekleri ie toplamda 100 adet  Bungalov evden oluşmaktadır. 
                        </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Tüm genel alanlar ve tüm Bungalov evlerin de  ücretsiz kablosuz internet kullanımı mevcuttur. </p>
                </div>
            </div>
            <div class="content-underline"></div>
            <div class="content-mid">
                <div class="room-list">
                    <div class="room-list-item">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img class="room-list-item-image" src="https://cdn.tatilsepeti.com/Files/Images/Tesis/07216/450x300/tsr07216637295613979922217.jpg"/>
                            </div>
                        </div>
                        <div class="room-list-item-info">
                            <div class="room-list-item-title">
                                Büyük ev
                                <div class="under-line"></div>
                            </div>
                            <div class="room-list-item-icons">
                                <span class="room-list-item-icon form-icon gg-phone"></span>
                                <span class="room-list-item-icon form-icon gg-tv"></span>
                                <span class="room-list-item-icon form-icon gg-music-speaker"></span>
                                <span class="room-list-item-icon form-icon gg-glass"></span>
                            </div>
                            <div class="under-line"></div>
                            <button class="room-detail-button">Detay</button>
                        </div>
                    </div>
                    <div class="room-list-item">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img class="room-list-item-image" src="https://cdn.tatilsepeti.com/Files/Images/Tesis/07216/450x300/tsr07216637295613979922217.jpg"/>
                            </div>
                        </div>
                        <div class="room-list-item-info">
                            <div class="room-list-item-title">
                                Büyük ev
                                <div class="under-line"></div>
                            </div>
                            <div class="room-list-item-icons">
                                <span class="room-list-item-icon form-icon gg-phone"></span>
                                <span class="room-list-item-icon form-icon gg-tv"></span>
                                <span class="room-list-item-icon form-icon gg-music-speaker"></span>
                                <span class="room-list-item-icon form-icon gg-glass"></span>
                            </div>
                            <div class="under-line"></div>
                            <button class="room-detail-button">Detay</button>
                        </div>
                    </div>
                    <div class="room-list-item">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img class="room-list-item-image" src="https://cdn.tatilsepeti.com/Files/Images/Tesis/07216/450x300/tsr07216637295613979922217.jpg"/>
                            </div>
                        </div>
                        <div class="room-list-item-info">
                            <div class="room-list-item-title">
                                Büyük ev
                                <div class="under-line"></div>
                            </div>
                            <div class="room-list-item-icons">
                                <span class="room-list-item-icon form-icon gg-phone"></span>
                                <span class="room-list-item-icon form-icon gg-tv"></span>
                                <span class="room-list-item-icon form-icon gg-music-speaker"></span>
                                <span class="room-list-item-icon form-icon gg-glass"></span>
                            </div>
                            <div class="under-line"></div>
                            <button class="room-detail-button">Detay</button>
                        </div>
                    </div>
                    <div class="room-list-item">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img class="room-list-item-image" src="https://cdn.tatilsepeti.com/Files/Images/Tesis/07216/450x300/tsr07216637295613979922217.jpg"/>
                            </div>
                        </div>
                        <div class="room-list-item-info">
                            <div class="room-list-item-title">
                                Büyük ev
                                <div class="under-line"></div>
                            </div>
                            <div class="room-list-item-icons">
                                <span class="room-list-item-icon form-icon gg-phone"></span>
                                <span class="room-list-item-icon form-icon gg-tv"></span>
                                <span class="room-list-item-icon form-icon gg-music-speaker"></span>
                                <span class="room-list-item-icon form-icon gg-glass"></span>
                            </div>
                            <div class="under-line"></div>
                            <button class="room-detail-button">Detay</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-footer"></div>
        </div>
        <footer>
            <div class="footer-content">
                <div class="footer-mini-contact">
                    <img class="footer-logo" src="https://www.ramadasakarya.com/img/site/logo.png" />
                    <div class="footer-mini-address">
                        Güllük Mah. Adnan Menderes Cad. No:145
                        Adapazarı / Sakarya</div>
                    <div class="footer-mini-phone">0555 5555 55 55</div>
                    <div class="footer-mini-email">test@test.com</div>
                </div>
                <div class="footer-links">
                    <div class="footer-title">Bağlantılar</div>
                    <a href="#">Ana Sayfa</a>
                    <a href="#">Hakkımızda</a>
                    <a href="#">Kurumsal</a>
                    <a href="#">Odalarımız</a>
                    <a href="#">İletişim</a>
                </div>
                <div class="footer-language">
                    <div class="footer-title">Dili Degistir</div>
                    <a href="#"> English</a>
                </div>
            </div>
            <div class="footer-info">
                <div class="footer-socialmedia"> 
                    <a href="#" class="gg-facebook"></a>
                    <a href="#" class="gg-twitter"></a>
                    <a href="#" class="gg-instagram"></a>
                </div>
                <div class="footer-copyright">
                    © 2022 Ramada By Wyndham SAKARYA. Tüm hakları saklıdır.
                </div>
            </div>
        </footer>
          <script>
            new Splide( '.splide' ).mount();
        </script>
        <script>
             $(function() {
                $('#datepicker1').datepicker({
                    uiLibrary: 'bootstrap'
                });
                $('#datepicker2').datepicker({
                    uiLibrary: 'bootstrap'
                });
            })
        </script>
    </body>
</html>