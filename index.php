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
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
            <link href='https://css.gg/css' rel='stylesheet'>
      
            <!-- For Bulma -->
            <link href="assets/datepicker/css/datepicker-bulma.css" rel="stylesheet" />
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.css">
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bulma-tooltip@3.0.2/dist/css/bulma-tooltip.min.css">
            <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
            <script src="https://kit.fontawesome.com/8b5912517c.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="header">
            <div class="menu">
                <img class="logo" src="https://www.ramadasakarya.com/img/site/logo.png"/>
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
                                <a href="./ik-kariyer.php" class="menu-button">İk / Kariyer</a> 
                            </li>
                            <li class="menu-li">
                                <a href="#" class="menu-button">Kişisel verilerin korunması</a>
                                <ul class="menu-ul flex-direction-column menu-up">
                                    <li class="menu-li">
                                        <a href="#" class="menu-button">Kisisel Verilerin İslenmesi</a> 
                                    </li>
                                    <li class="menu-li">
                                        <a href="./veri-sahibi-basvuru-formu.php" class="menu-button">Veri Sahibi Basvuru Formu</a> 
                                    </li>
                                    <li class="menu-li">
                                        <a href="./bgys.php" class="menu-button">BGYS</a> 
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-li">
                        <a  href="./odalarimiz.php" class="menu-button">Odalarımız</a> 
                    </li>
                    <li class="menu-li">
                        <a  href="./thermal-spa.php" class="menu-button">Termal SPA</a> 
                    </li>
                    <li class="menu-li">
                    <a href="#" class="menu-button">Restoran</a> 
                        <ul class="menu-ul flex-direction-column">
                            <li class="menu-li">
                                <a href="./ramada-restoran-menu.php" class="menu-button">Restoran Menu</a> 
                            </li>
                            <li class="menu-li">
                                <a href="#" class="menu-button">Mini Bar</a> 
                            </li>
                        </ul> 
                    </li>
                    <li class="menu-li">
                        <a href="" class="menu-button">Toplantı</a> 
                    </li>
                    <li class="menu-li">
                        <a href="" class="menu-button">İletişim</a> 
                    </li>
                </ul>
            </div>
            <section class="splide" aria-label="ramada-hostel-image">
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
                <div class="form-item form-item-bg-1">
                    <div class="form-item-info">Giriş Tarihi</div>
                    <div class="form-item-icon-info">  
                            <input class="form-item-date" type="text" id="datepicker1">
                            <div class="form-item-icon">
                                <i class="fa-solid fa-calendar-days icon-color3"></i>   
                            </div>
                    </div>
                </div>
                <div class="form-item form-item-bg-2">
                    <div class="form-item-info">Cıkış Tarihi</div>
                    <div class="form-item-icon-info">  
                            <input class="form-item-date" type="text" id="datepicker2">
                            <div class="form-item-icon">
                                <i class="fa-solid fa-calendar-days icon-color3"></i>   
                            </div>
                    </div>
                </div>
                <div class="form-item form-item-bg-1">
                    <div class="form-item-info">Oda</div>
                    <div class="form-item-icon-info">  
                        <input class="form-item-count" type="text" value="1">
                        <div class="form-item-icon">
                            <i class="fa-solid fa-home icon-color3"></i>   
                        </div>
                    </div>
                </div>
                <div class="form-item form-item-bg-2">
                    <div class="form-item-info">Yetişkin</div>
                    <div class="form-item-icon-info">  
                            <input class="form-item-count" type="text" value="0">
                            <div class="form-item-icon">
                                <i class="fa-solid fa-user icon-color3"></i>
                            </div>
                    </div>
                </div>
                <div class="form-item form-item-bg-1">
                    <div class="form-item-info">Çocuk</div>
                    <div class="form-item-icon-info">  
                            <input class="form-item-count" type="text" value="0">
                            <div class="form-item-icon">
                                <i class="fa-solid fa-child icon-color3"></i>
                            </div>
                    </div>
                </div>
                <div class="form-item fb">
                    <button class="form-button ">Rezervasyon</button>
                </div>
            </form>
        </div>
        <div class="content main-page">
            <div class="content-upper">
                <h1 class="content-upper-title"> Ramada Resort Termal Sapanca </h1>
                 <div class="content-upper-context">
                    <img class="content-upper-context-image" src="assets/images/19.jpg" />
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
                                <img class="room-list-item-image" src="assets/images/11.jpg"/>
                            </div>
                        </div>
                        <div class="room-list-item-info">
                            <div class="room-list-item-title">
                                Bungalov Sky 
                                <div class="under-line"></div>
                            </div>
                            <div class="room-list-item-icons">
                                <span class="room-list-item-icon form-icon gg-phone"></span>
                                <span class="room-list-item-icon form-icon gg-tv"></span>
                                <span class="room-list-item-icon form-icon gg-music-speaker"></span>
                                <span class="room-list-item-icon form-icon gg-glass"></span>
                            </div>
                            <div class="under-line"></div>
                          <a href="./oda-detay.php" class="room-detail-button">Detay</a>
                        </div>
                    </div>
                    <div class="room-list-item">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img class="room-list-item-image" src="assets/images/03.jpg"/>
                            </div>
                        </div>
                        <div class="room-list-item-info">
                            <div class="room-list-item-title">
                                Bungalov Delux 
                                <div class="under-line"></div>
                            </div>
                            <div class="room-list-item-icons">
                                <span class="room-list-item-icon form-icon gg-phone"></span>
                                <span class="room-list-item-icon form-icon gg-tv"></span>
                                <span class="room-list-item-icon form-icon gg-music-speaker"></span>
                                <span class="room-list-item-icon form-icon gg-glass"></span>
                            </div>
                            <div class="under-line"></div>
                          <a href="./oda-detay.php" class="room-detail-button">Detay</a>
                        </div>
                    </div>
                    <div class="room-list-item">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img class="room-list-item-image" src="assets/images/07.jpg"/>
                            </div>
                        </div>
                        <div class="room-list-item-info">
                            <div class="room-list-item-title">
                                 Bungalov Turkuaz 
                                <div class="under-line"></div>
                            </div>
                            <div class="room-list-item-icons">
                                <span class="room-list-item-icon form-icon gg-phone"></span>
                                <span class="room-list-item-icon form-icon gg-tv"></span>
                                <span class="room-list-item-icon form-icon gg-music-speaker"></span>
                                <span class="room-list-item-icon form-icon gg-glass"></span>
                            </div>
                            <div class="under-line"></div>
                          <a href="./oda-detay.php" class="room-detail-button">Detay</a>
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
                            Bungalov Silver
                                <div class="under-line"></div>
                            </div>
                            <div class="room-list-item-icons">
                                <span class="room-list-item-icon form-icon gg-phone"></span>
                                <span class="room-list-item-icon form-icon gg-tv"></span>
                                <span class="room-list-item-icon form-icon gg-music-speaker"></span>
                                <span class="room-list-item-icon form-icon gg-glass"></span>
                            </div>
                            <div class="under-line"></div>
                          <a href="./oda-detay.php" class="room-detail-button">Detay</a>
                        </div>
                        
                    </div>
                    <div class="room-list-item">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <img class="room-list-item-image" src="assets/images/08.jpg"/>
                            </div>
                        </div>
                        <div class="room-list-item-info">
                            <div class="room-list-item-title">
                            Bungalov Gold
                                <div class="under-line"></div>
                            </div>
                            <div class="room-list-item-icons">
                                <span class="room-list-item-icon form-icon gg-phone"></span>
                                <span class="room-list-item-icon form-icon gg-tv"></span>
                                <span class="room-list-item-icon form-icon gg-music-speaker"></span>
                                <span class="room-list-item-icon form-icon gg-glass"></span>
                            </div>
                            <div class="under-line"></div>
                          <a href="./oda-detay.php" class="room-detail-button">Detay</a>
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
        <script src="assets/datepicker/js/datepicker.min.js"></script>
        <script src="assets/datepicker/js/locales/tr.js"></script>
          <script>
                new Splide( '.splide',{  
                    type   : 'loop',
                    perPage: 1,
                    autoplay:true,
                    interval:2500
                } ).mount();
            </script>
        <script>
            const datePickerOne = document.getElementById("datepicker1");
            const datePickerTwo = document.getElementById("datepicker2");
            const dateNow = Date.now();
            const datePickOne = new Datepicker(datePickerOne, {
                autohide: true,
                minDate: dateNow,
                language:"tr",
                defaultViewDate: dateNow,
                format: {
                    toValue(date, format, locale) {
                        let dateObject;
                        return dateObject;
                    },
                    toDisplay(date, format, locale) {
                        return date.getDate() + " " + locale.months[date.getMonth()] + " " + date.getFullYear();
                    }
                },
            });
            datePickOne.setDate(dateNow)
            const datePickTwo = new Datepicker(datePickerTwo, {
                autohide: true,
                minDate: dateNow,
                language:"tr",
                format: {
                    toValue(date, format, locale) {
                        let dateObject;
                        return dateObject;
                    },
                    toDisplay(date, format, locale) {
                        return date.getDate() + " " + locale.months[date.getMonth()] + " " + date.getFullYear();
                    }
                },
            });
            datePickTwo.setDate(dateNow)
            $(window).scroll(function() {    
                var scroll = $(window).scrollTop();

                if (scroll >= 200) {
                    $(".menu").addClass("scrolling");
                    $(".menu-button").addClass("menu-button-s");
                } else {
                    $(".menu").removeClass("scrolling");
                    $(".menu-button").removeClass("menu-button-s");
                }
            });
        </script>
    </body>
</html>