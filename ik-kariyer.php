<?php ?>
<!DOCTYPE html>
    <head>
            <title>
                IK Kariyer
            </title>
            <description>
                    
            </description>
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="stylesheet" href="assets/css/career.css">
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
            <div class="page-title">
                <h1>
                    IK | KARIYER
                </h1>
                <h3> 
                    Anasayfa / IK | Kariyer
                </h3>
            </div>
            <div class="header-image-up">
                <img class="header-image" src="https://www.sapancakiyibungalov.com/media/images/arkaplan/kapakci.jpg"/>
            </div>
        </header>
       
        <div class="content other-page">
            <div class="content-underline"></div>
            <div class="content-mid">
                <form class="career-form"> 
                    <div class="career-form-part"> 
                            <h3 class="career-form-part-header">İŞ BAŞVURU FORMU / APPLICATION</h3>
                            <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Başvurulan Pozisyon</label> 
                                    <label class="career-form-input-label">Position Applied For</label> 
                                    <input class="career-form-input px250" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Talep Edilen Ücret</label> 
                                    <label class="career-form-input-label">Salary Request (net)</label> 
                                    <input class="career-form-input px250"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">İşe Başlayabileceğiniz Tarih</label> 
                                    <label class="career-form-input-label">Date Available To Start</label> 
                                    <input class="career-form-input px250" id="date-start" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Başvuru Tarihi</label> 
                                    <label class="career-form-input-label">Date Of Application</label> 
                                    <input class="career-form-input px250" id="date-of-application"></input>
                                </div> 
                            </div>
                        <div class="content-underline"></div>
                    </div>
                    <div class="career-form-part"> 
                            <h3 class="career-form-part-header">KİŞİSEL BİLGİLER / PERSONAL INFORMATION</h3>
                            <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Adı - Soyadı</label> 
                                    <label class="career-form-input-label">Name - Last Name</label> 
                                    <input class="career-form-input px250" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Adres</label> 
                                    <label class="career-form-input-label">Address</label> 
                                    <input class="career-form-input px750"></input>
                                </div> 
                            </div>
                            <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Doğum Yeri </label> 
                                    <label class="career-form-input-label">Place Birth</label> 
                                    <input class="career-form-input px200" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Doğum Tarihi</label> 
                                    <label class="career-form-input-label">Birth Date</label> 
                                    <input class="career-form-input px200" id="birth-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Uyruğu</label> 
                                    <label class="career-form-input-label">Nationality</label> 
                                    <input class="career-form-input px200"></input>
                                </div>
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Cinsiyet</label> 
                                    <label class="career-form-input-label">Sex</label> 
                                    <input class="career-form-input px200"></input>
                                </div>
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Medeni Hali</label> 
                                    <label class="career-form-input-label">Marital Statüs</label> 
                                    <input class="career-form-input px200"></input>
                                </div>
                            </div>
                            <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">GSM Numarası</label> 
                                    <label class="career-form-input-label">GSM Number</label> 
                                    <input class="career-form-input px500" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">E-Posta Adresi</label> 
                                    <label class="career-form-input-label">E-Mail Address</label> 
                                    <input class="career-form-input address px500"></input>
                                </div> 
                            </div>
                            <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Askerlik Hizmeti </label> 
                                    <label class="career-form-input-label">Military Service</label> 
                                    <select class="career-form-input px250" >
                                        <option value="">
                                            Seciniz/Chose
                                        </option>
                                        <option value="">
                                            Tamamlandı/Complated
                                        </option>
                                        <option value="">
                                            Tecilli/Postponed
                                        </option>
                                    </select>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Tarih</label> 
                                    <label class="career-form-input-label">Date</label> 
                                    <input class="career-form-input px250" id="birth-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Ehliyet (Varsa Sınıfı)</label> 
                                    <label class="career-form-input-label">Driving Licence (Type)</label> 
                                    <select class="career-form-input px250" >
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="Hayır">Hayır / No</option>
                                        <option value="M Sınıfı">M</option>
                                        <option value="A1 Sınıfı">A1</option>
                                        <option value="A2 Sınıfı">A2</option>
                                        <option value="A Sınıfı">A</option>
                                        <option value="B1 Sınıfı">B1</option>
                                        <option value="B Sınıfı">B</option>
                                        <option value="BE Sınıfı">BE</option>
                                        <option value="C1 Sınıfı">C1</option>
                                        <option value="C1E Sınıfı">C1E</option>
                                        <option value="C Sınıfı">C</option>
                                        <option value="CE Sınıfı">CE</option>
                                        <option value="D1 Sınıfı">D1</option>
                                        <option value="D1E Sınıfı">D1E</option>
                                        <option value="D Sınıfı">D</option>
                                        <option value="DE Sınıfı">DE</option>
                                        <option value="F Sınıfı">F</option>
                                        <option value="G Sınıfı">G</option>
                                    </select>
                                </div>
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Çalışma Durumu</label> 
                                    <label class="career-form-input-label">Current Job</label> 
                                    <select class="career-form-input px250">
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="Çalışıyorum">Çalışıyorum / Employed</option>
                                        <option value="Çalışmıyorum">Çalışmıyorum / Unemplomed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Sigara Kullanıyormusunuz?</label> 
                                    <label class="career-form-input-label">Do You Smoke?</label> 
                                    <select class="career-form-input px500" >
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="Evet">Evet / Yes</option>
                                        <option value="Hayır">Hayır / No</option>
                                    </select>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Engel Durumunuz Varmıdır?</label> 
                                    <label class="career-form-input-label">Do You Have Any Physical Disability?</label> 
                                    <select class="career-form-input px500" >
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="Evet">Evet / Yes</option>
                                        <option value="Hayır">Hayır / No</option>
                                    </select>
                                </div> 
                            </div>
                        <div class="content-underline"></div>
                    </div>
                    <div class="career-form-part">
                        <h3 class="career-form-part-header">EĞİTİM DURUMUNUZ / EDUCATION</h3>
                        <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Mezun Olunan Okul ve Bölüm</label> 
                                    <label class="career-form-input-label">Name and Department of The School Graduated</label> 
                                    <input class="career-form-input px400" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Başlangıç Tarihi</label> 
                                    <label class="career-form-input-label">Entry Date</label> 
                                    <input class="career-form-input px200" id="entry-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Mezuniyet Tarihi</label> 
                                    <label class="career-form-input-label">Graduation Date</label> 
                                    <input class="career-form-input px200" id="graduate-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Derece</label> 
                                    <label class="career-form-input-label">Degree</label> 
                                    <input class="career-form-input px200"></input>
                                </div> 
                        </div>
                        <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px400" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px200" id="entry-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px200" id="graduate-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px200"></input>
                                </div> 
                        </div>
                        <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px400" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px200" id="entry-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px200" id="graduate-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px200"></input>
                                </div> 
                        </div>
                        <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Katıldığınız Kurs ve Seminerler</label> 
                                    <label class="career-form-input-label">Courses and Seminars</label> 
                                    <input class="career-form-input px400" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Başlangıç Tarihi</label> 
                                    <label class="career-form-input-label">Entry Date</label> 
                                    <input class="career-form-input px200" id="entry-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Bitirme Tarihi</label> 
                                    <label class="career-form-input-label">Finish  Date</label> 
                                    <input class="career-form-input px200" id="graduate-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Konu</label> 
                                    <label class="career-form-input-label">Subject</label> 
                                    <input class="career-form-input px200"></input>
                                </div> 
                        </div>
                        <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px400" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px200" id="entry-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px200" id="graduate-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px200"></input>
                                </div> 
                        </div>
                        <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px400" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px200" id="entry-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px200" id="graduate-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px200"></input>
                                </div> 
                        </div>
                        <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Yabancı Diller</label> 
                                    <label class="career-form-input-label">Foreign Languages</label> 
                                    <input class="career-form-input px400" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Okuma</label> 
                                    <label class="career-form-input-label">Reading</label> 
                                    <select class="career-form-input px200">
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="İyi">İyi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Yazma</label> 
                                    <label class="career-form-input-label">Writing</label> 
                                    <select class="career-form-input px200">
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="İyi">İyi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                    
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Konuşma</label> 
                                    <label class="career-form-input-label">Speaking</label> 
                                    <select class="career-form-input px200">
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="İyi">İyi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                </div> 
                        </div>
                        <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px400" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <select class="career-form-input px200">
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="İyi">İyi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <select class="career-form-input px200">
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="İyi">İyi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                    
                                </div> 
                                <div class="career-form-inputs-item">
                                    <select class="career-form-input px200">
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="İyi">İyi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                </div> 
                        </div>
                        <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <input class="career-form-input px400" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <select class="career-form-input px200">
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="İyi">İyi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <select class="career-form-input px200">
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="İyi">İyi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                    
                                </div> 
                                <div class="career-form-inputs-item">
                                    <select class="career-form-input px200">
                                        <option value="">Seçiniz / Choose</option>
                                        <option value="İyi">İyi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                </div> 
                        </div>
                    </div>
                    <div class="career-form-part">
                        <h3 class="career-form-part-header">İŞ DENEYİMİNİZ / WORK EXPERIENCE</h3>
                        <div class="career-form-inputs-horizontal">
                            <div class="career-form-inputs-item">
                                <label class="career-form-input-label">Firma Ünvan</label> 
                                <label class="career-form-input-label">Company name</label> 
                                <input class="career-form-input px333" ></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <label class="career-form-input-label">Görev / Pozisyon</label> 
                                <label class="career-form-input-label">Mission / Position</label> 
                                <input class="career-form-input px333"></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <label class="career-form-input-label">Tarih</label> 
                                <label class="career-form-input-label">Date</label> 
                                <input class="career-form-input px334" id="entry-date"></input>
                            </div> 
                        </div>
                        <div class="career-form-inputs-horizontal">
                            <div class="career-form-inputs-item">
                                <input class="career-form-input px333" ></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <input class="career-form-input px333"></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <input class="career-form-input px334" id="entry-date"></input>
                            </div> 
                        </div>
                        <div class="career-form-inputs-horizontal">
                            <div class="career-form-inputs-item">
                                <input class="career-form-input px333" ></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <input class="career-form-input px333"></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <input class="career-form-input px334" id="entry-date"></input>
                            </div> 
                        </div>
                    </div>
                    <div class="career-form-part">
                        <h3 class="career-form-part-header">ŞAHSİ REFERANSLARINIZ / YOUR PERSONAL REFERENCES</h3>
                        <div class="career-form-inputs-horizontal">
                            <div class="career-form-inputs-item">
                                <label class="career-form-input-label">Adı - Soyadı</label> 
                                <label class="career-form-input-label">Name - Last Name</label> 
                                <input class="career-form-input px333" ></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <label class="career-form-input-label">Mesleği</label> 
                                <label class="career-form-input-label">Occupation</label> 
                                <input class="career-form-input px333"></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <label class="career-form-input-label">Telefonu</label> 
                                <label class="career-form-input-label">Telephone</label> 
                                <input class="career-form-input px334"></input>
                            </div> 
                        </div>
                        <div class="career-form-inputs-horizontal">
                            <div class="career-form-inputs-item">
                                <input class="career-form-input px333" ></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <input class="career-form-input px333"></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <input class="career-form-input px334"></input>
                            </div> 
                        </div>
                        <div class="career-form-inputs-horizontal">
                            <div class="career-form-inputs-item">
                                <input class="career-form-input px333" ></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <input class="career-form-input px333"></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <input class="career-form-input px334"></input>
                            </div> 
                        </div>
                    </div>
                    <a id="form-send-button" class="room-detail-button">Gönder</a>
                </form>
                <div class="form-alert">*Aydınlatma Metni ve Açık Rıza Beyanı'nı onayladıktan sonra formu gönderebilirsiniz</div>
                <div class="form-info"><a href="" onClick=""> Aydınlatma Metni </a>'ini ve <a href="" onClick="">Açık Rıza Beyan </a>'nı okudum.</div>
                <div class="can-toggle">
                    <input id="privacy" type="checkbox">
                    <label for="privacy">
                        <div class="can-toggle__switch" data-checked="Evet" data-unchecked="Hayir"></div>
                        <div id="privacy-info" class="can-toggle__label-text"></div>
                    </label>
                </div>
                </div>
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
                            <button id="md-close-tp" class="btn btn-light">Kapat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="md-overlay"></div>
          <script>
            new Splide( '.splide' ).mount();
        </script>
        <script>
             $(function() {
                $('#date-start').datepicker({
                    uiLibrary: 'bootstrap'
                });
                $('#date-of-application').datepicker({
                    uiLibrary: 'bootstrap'
                });
                $('#birth-date').datepicker({
                    uiLibrary: 'bootstrap'
                });
                $('#entry-date').datepicker({
                    uiLibrary: 'bootstrap'
                });
                $('#graduate-date').datepicker({
                    uiLibrary: 'bootstrap'
                });

                if ($('#privacy').is(':checked')) {
                        $("#form-send-button").attr('class', 'room-detail-button visible');
                        $("#privacy-info").text("Onayliyorum") ;
                }
                else{
                    $("#form-send-button").attr('class', 'room-detail-button hidden');
                    $("#privacy-info").text("Onaylamiyorum") ;
                }

                $('#privacy').change(function(){
                    console.log("test");
                    if ($('#privacy').is(':checked')) {
                        $("#form-send-button").attr('class', 'room-detail-button visible');
                        $("#privacy-info").text("Onayliyorum") ;
                    }
                    else{
                        $("#form-send-button").attr('class', 'room-detail-button hidden');
                        $("#privacy-info").text("Onaylamiyorum") ;
                    }
                })

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
            })
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