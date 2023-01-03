<?php ?>
<!DOCTYPE html>
    <head>
            <title>
                Mini Bar
            </title>
            <description>

            </description>
            <meta content="width=device-width, initial-scale=1" name="viewport" />
            <link rel="stylesheet" href="assets/css/menu.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/other-pages.css">
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
            <div class="menu-parent">
                <img class="logo" src="assets/images/logo.png"/>
                <div class="menu" id="menuToggle">
                    <input type="checkbox" />
                    <span class="first-span"></span>
                    <span class="second-span"></span>
                    <span class="third-span"></span>
                    
                    <ul class="menu-ul flex-direction-row">
                        <img class="mini-logo" src="assets/images/logo.png"/>
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
                                            <a href="./kisisel-verilerin-islenmesi.php" class="menu-button">Kisisel Verilerin İslenmesi</a> 
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
                                    <a href="./minibar.php" class="menu-button">Mini Bar</a> 
                                </li>
                            </ul> 
                        </li>
                        <li class="menu-li">
                            <a href="#" class="menu-button">Toplantı</a> 
                            <ul class="menu-ul flex-direction-column">
                                <li class="menu-li">
                                    <a href="./toplanti-salonu.php" class="menu-button">Toplanti Salonlari</a> 
                                </li>
                                <li class="menu-li">
                                    <a href="#" id="md-trigger" class="menu-button">Toplanti Teklif Formu</a> 
                                </li>
                            </ul> 
                        </li>
                        <li class="menu-li">
                            <a href="./iletisim.php" class="menu-button">İletişim</a> 
                        </li>
                    </ul> 
                </div>
            </div>
            <div class="page-title">
                <h1>
                    Mini Bar
                </h1>
                <h3> 
                    Anasayfa / Restoran / Mini Bar
            </div>
            <div class="header-image-up">
                <img class="header-image" src="https://www.plataran.com/patio-venue/wp-content/uploads/sites/14/2020/04/Copy-of-PAT_Botticeli.jpg"/>
            </div>
        </header>
        <div class="content other-page">
            <div class="content-underline"></div>
            <div class="content-mid">
                <div class="restourant-menu">
                    <div class="restourant-menu-item md-menu-trigger">
                        <img class="menu-image" src="https://www.yeniisfikirleri.net/wp-content/uploads/2015/07/cikolata-sektoru.jpg"/>
                        <h5 class="menu-item-header">Snacks Atıştırmalıklar<div class="menu-item-header-right"></div></h5>
                    </div>
                    <div class="restourant-menu-item md-menu-trigger">
                        <img class="menu-image" src="https://feeds.abplive.com/onecms/images/uploaded-images/2022/03/26/79da267aa696170202230995995d51b0_original.jpg?impolicy=abp_cdn&imwidth=720"/>
                        <h5 class="menu-item-header">Soft Drinks Meşrubatlar<div class="menu-item-header-right"></div></h5>
                    </div>
                </div>
                <div class="content-footer"></div>
            </div>
        </div>

        <footer>
            <div class="footer-content">
                <div class="footer-mini-contact">
                    <img class="footer-logo" src="assets/images/logo.png" />
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
        <div class="menu-modal md-effect-12">
            <div class="md-content">
                <div class="modal-content">
                <div class="menu-item">
                    <div class="md-menu-price">
                        <div class="md-price-number">150.00</div>
                        <div class="md-price-curency">TL</div>
                    </div>
                    <div class="md-menu-info">
                        <div class="md-menu-item-header">Kahvaltı tabağı / Breakfast plate</div>
                        <div class="md-menu-item-info" >Ezine Peynir,Kaşar Peynir, Çeçil Peynir, Piliç Jambon, Dana Macar Salam, Çilek Reçeli, Zeytin(2 Çeşit), Çeri Domates, Salatalık, Tereyağı, Bal, Kaymak, Roka, Kuru Kayısı, Çikolatalı Fındık Krema, Acuka, Patates Kızartması, Pişi,
                         Sigara Böreği, Haşlanmış Yumurta, Yıldız Sosis, Poğaça ve Ekmek.</div>
                    </div>
                </div>
                <div class="md-menu-line"></div>
                <div class="menu-item">
                    <div class="md-menu-price">
                        <div class="md-price-number">300.00</div>
                        <div class="md-price-curency">TL</div>
                    </div>
                    <div class="md-menu-info">
                        <div class="md-menu-item-header">Kahvaltı tabağı / Breakfast plate</div>
                        <div class="md-menu-item-info" >Ezine Peynir,Kaşar Peynir, Çeçil Peynir, Piliç Jambon, Dana Macar Salam, Çilek Reçeli, Zeytin(2 Çeşit), Çeri Domates, Salatalık, Tereyağı, Bal, Kaymak, Roka, Kuru Kayısı, Çikolatalı Fındık Krema, Acuka, Patates Kızartması, Pişi,
                         Sigara Böreği, Haşlanmış Yumurta, Yıldız Sosis, Poğaça ve Ekmek.</div>
                    </div>
                </div>
                <div class="md-menu-line"></div>
                <div class="menu-item">
                    <div class="md-menu-price">
                        <div class="md-price-number">300.00</div>
                        <div class="md-price-curency">TL</div>
                    </div>
                    <div class="md-menu-item-header">Açık Büfe Kahvaltı</div>
                    <div class="md-menu-item-info"></div>
                </div>
                <div class="md-menu-line"></div>
                <div class="md-right">
                    <button id="md-close" class="btn btn-light">Kapat</button>
                </div>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-12">
            <div class="md-content">
                <div class="modal-content">
                    <h3 class="modal-header">Toplantı & Davet</h3>
                    <form class="modal-form">
                        <div class="modal-grid-item-1"> 
                            <label class="form-label" >Etkinlik Turu</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-2">
                            <label class="form-label" >Etkinlik Tarihi:</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-3"> 
                            <label class="form-label" >Etkinlik Adı:</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-4">
                            <label class="form-label" >Kişi Sayısı:</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-5"> 
                            <label class="form-label" >Kurum Adı:</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-6">
                            <label class="form-label" >Göreviniz:</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-7">
                            <div class="checkbox-content">
                                <label class="form-checkbox-container">Kokteyl
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="form-checkbox-container">Düğün
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="form-checkbox-container">Öğle Yemeği
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="form-checkbox-container">Yarım Gün Toplantı
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="modal-grid-item-8">
                            <div class="checkbox-content">
                                <label class="form-checkbox-container">Gala Yemeği
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="form-checkbox-container">Salon
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="form-checkbox-container">Akşam Yemeği
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="form-checkbox-container">Kira
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="modal-grid-item-9">
                            <label class="form-label" >Ad - Soyad:</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-10">
                            <label class="form-label" >Email:&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-11">
                            <label class="form-label" >Telefon:</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-12">
                            <button class="btn btn-success">Gonder</button>
                        </div>
                        <div class="modal-grid-item-13">
                            <button id="md-close" class="btn btn-light">Kapat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
  
        <div class="md-overlay"></div>
        <script>
             $(function() {
                $('#datepicker1').datepicker({
                    uiLibrary: 'bootstrap'
                });
                $('#datepicker2').datepicker({
                    uiLibrary: 'bootstrap'
                });

            
            })
            $(window).scroll(function() {    
                    var scroll = $(window).scrollTop();

                    if (scroll >= 200) {
                        $(".menu-parent").addClass("scrolling");
                        $(".menu-button").addClass("menu-button-s");
                    } else {
                        $(".menu-parent").removeClass("scrolling");
                        $(".menu-button").removeClass("menu-button-s");
                    }
                });

            $(function () {
                $('.md-menu-trigger').on('click', function() {
                    $('.menu-modal').addClass('md-show');
                });
                
                $('#md-close').on('click', function() {
                    console.log("test");
                    $('.menu-modal').removeClass('md-show');
                });
            });

            $(function () {
                $('#md-trigger').on('click', function() {
                    $('.md-modal').addClass('md-show');
                });
                
                $('#md-close').on('click', function() {
                    $('.md-modal').removeClass('md-show');
                });
            });
        </script>
    </body>
</html>