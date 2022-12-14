<?php ?>
<!DOCTYPE html>
    <head>
            <title>
                IK Kariyer
            </title>
            <description>
                    
            </description>
            <meta content="width=device-width, initial-scale=1" name="viewport" />
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
                                    <a href="./hakkimizda.php" class="menu-button">Hakk??m??zda</a> 
                                </li>
                                <li class="menu-li">
                                    <a href="./ik-kariyer.php" class="menu-button">??k / Kariyer</a> 
                                </li>
                                <li class="menu-li">
                                    <a href="#" class="menu-button">Ki??isel verilerin korunmas??</a>
                                    <ul class="menu-ul flex-direction-column menu-up">
                                        <li class="menu-li">
                                            <a href="./kisisel-verilerin-islenmesi.php" class="menu-button">Kisisel Verilerin ??slenmesi</a> 
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
                            <a  href="./odalarimiz.php" class="menu-button">Odalar??m??z</a> 
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
                            <a href="#" class="menu-button">Toplant??</a> 
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
                            <a href="./iletisim.php" class="menu-button">??leti??im</a> 
                        </li>
                    </ul> 
                </div>
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
                            <h3 class="career-form-part-header">???? BA??VURU FORMU / APPLICATION</h3>
                            <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Ba??vurulan Pozisyon</label> 
                                    <label class="career-form-input-label">Position Applied For</label> 
                                    <input class="career-form-input px250" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Talep Edilen ??cret</label> 
                                    <label class="career-form-input-label">Salary Request (net)</label> 
                                    <input class="career-form-input px250"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">????e Ba??layabilece??iniz Tarih</label> 
                                    <label class="career-form-input-label">Date Available To Start</label> 
                                    <input class="career-form-input px250" id="date-start" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Ba??vuru Tarihi</label> 
                                    <label class="career-form-input-label">Date Of Application</label> 
                                    <input class="career-form-input px250" id="date-of-application"></input>
                                </div> 
                            </div>
                        <div class="content-underline"></div>
                    </div>
                    <div class="career-form-part"> 
                            <h3 class="career-form-part-header">K??????SEL B??LG??LER / PERSONAL INFORMATION</h3>
                            <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Ad?? - Soyad??</label> 
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
                                    <label class="career-form-input-label">Do??um Yeri </label> 
                                    <label class="career-form-input-label">Place Birth</label> 
                                    <input class="career-form-input px200" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Do??um Tarihi</label> 
                                    <label class="career-form-input-label">Birth Date</label> 
                                    <input class="career-form-input px200" id="birth-date"></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Uyru??u</label> 
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
                                    <label class="career-form-input-label">Marital Stat??s</label> 
                                    <input class="career-form-input px200"></input>
                                </div>
                            </div>
                            <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">GSM Numaras??</label> 
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
                                            Tamamland??/Complated
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
                                    <label class="career-form-input-label">Ehliyet (Varsa S??n??f??)</label> 
                                    <label class="career-form-input-label">Driving Licence (Type)</label> 
                                    <select class="career-form-input px250" >
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="Hay??r">Hay??r / No</option>
                                        <option value="M S??n??f??">M</option>
                                        <option value="A1 S??n??f??">A1</option>
                                        <option value="A2 S??n??f??">A2</option>
                                        <option value="A S??n??f??">A</option>
                                        <option value="B1 S??n??f??">B1</option>
                                        <option value="B S??n??f??">B</option>
                                        <option value="BE S??n??f??">BE</option>
                                        <option value="C1 S??n??f??">C1</option>
                                        <option value="C1E S??n??f??">C1E</option>
                                        <option value="C S??n??f??">C</option>
                                        <option value="CE S??n??f??">CE</option>
                                        <option value="D1 S??n??f??">D1</option>
                                        <option value="D1E S??n??f??">D1E</option>
                                        <option value="D S??n??f??">D</option>
                                        <option value="DE S??n??f??">DE</option>
                                        <option value="F S??n??f??">F</option>
                                        <option value="G S??n??f??">G</option>
                                    </select>
                                </div>
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">??al????ma Durumu</label> 
                                    <label class="career-form-input-label">Current Job</label> 
                                    <select class="career-form-input px250">
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="??al??????yorum">??al??????yorum / Employed</option>
                                        <option value="??al????m??yorum">??al????m??yorum / Unemplomed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Sigara Kullan??yormusunuz?</label> 
                                    <label class="career-form-input-label">Do You Smoke?</label> 
                                    <select class="career-form-input px500" >
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="Evet">Evet / Yes</option>
                                        <option value="Hay??r">Hay??r / No</option>
                                    </select>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Engel Durumunuz Varm??d??r?</label> 
                                    <label class="career-form-input-label">Do You Have Any Physical Disability?</label> 
                                    <select class="career-form-input px500" >
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="Evet">Evet / Yes</option>
                                        <option value="Hay??r">Hay??r / No</option>
                                    </select>
                                </div> 
                            </div>
                        <div class="content-underline"></div>
                    </div>
                    <div class="career-form-part">
                        <h3 class="career-form-part-header">E????T??M DURUMUNUZ / EDUCATION</h3>
                        <div class="career-form-inputs-horizontal">
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Mezun Olunan Okul ve B??l??m</label> 
                                    <label class="career-form-input-label">Name and Department of The School Graduated</label> 
                                    <input class="career-form-input px400" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Ba??lang???? Tarihi</label> 
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
                                    <label class="career-form-input-label">Kat??ld??????n??z Kurs ve Seminerler</label> 
                                    <label class="career-form-input-label">Courses and Seminars</label> 
                                    <input class="career-form-input px400" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Ba??lang???? Tarihi</label> 
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
                                    <label class="career-form-input-label">Yabanc?? Diller</label> 
                                    <label class="career-form-input-label">Foreign Languages</label> 
                                    <input class="career-form-input px400" ></input>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Okuma</label> 
                                    <label class="career-form-input-label">Reading</label> 
                                    <select class="career-form-input px200">
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="??yi">??yi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Yazma</label> 
                                    <label class="career-form-input-label">Writing</label> 
                                    <select class="career-form-input px200">
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="??yi">??yi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                    
                                </div> 
                                <div class="career-form-inputs-item">
                                    <label class="career-form-input-label">Konu??ma</label> 
                                    <label class="career-form-input-label">Speaking</label> 
                                    <select class="career-form-input px200">
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="??yi">??yi / Well</option>
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
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="??yi">??yi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <select class="career-form-input px200">
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="??yi">??yi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                    
                                </div> 
                                <div class="career-form-inputs-item">
                                    <select class="career-form-input px200">
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="??yi">??yi / Well</option>
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
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="??yi">??yi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                </div> 
                                <div class="career-form-inputs-item">
                                    <select class="career-form-input px200">
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="??yi">??yi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                    
                                </div> 
                                <div class="career-form-inputs-item">
                                    <select class="career-form-input px200">
                                        <option value="">Se??iniz / Choose</option>
                                        <option value="??yi">??yi / Well</option>
                                        <option value="Orta">Orta / Fair</option>
                                        <option value="Az">Az / Poor</option>
                                    </select>
                                </div> 
                        </div>
                    </div>
                    <div class="career-form-part">
                        <h3 class="career-form-part-header">???? DENEY??M??N??Z / WORK EXPERIENCE</h3>
                        <div class="career-form-inputs-horizontal">
                            <div class="career-form-inputs-item">
                                <label class="career-form-input-label">Firma ??nvan</label> 
                                <label class="career-form-input-label">Company name</label> 
                                <input class="career-form-input px333" ></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <label class="career-form-input-label">G??rev / Pozisyon</label> 
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
                        <h3 class="career-form-part-header">??AHS?? REFERANSLARINIZ / YOUR PERSONAL REFERENCES</h3>
                        <div class="career-form-inputs-horizontal">
                            <div class="career-form-inputs-item">
                                <label class="career-form-input-label">Ad?? - Soyad??</label> 
                                <label class="career-form-input-label">Name - Last Name</label> 
                                <input class="career-form-input px333" ></input>
                            </div> 
                            <div class="career-form-inputs-item">
                                <label class="career-form-input-label">Mesle??i</label> 
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
                    <a id="form-send-button" class="room-detail-button">G??nder</a>
                </form>
                <div class="form-alert">*Ayd??nlatma Metni ve A????k R??za Beyan??'n?? onaylad??ktan sonra formu g??nderebilirsiniz</div>
                <div class="form-info"><a href="" onClick=""> Ayd??nlatma Metni </a>'ini ve <a href="" onClick="">A????k R??za Beyan </a>'n?? okudum.</div>
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
                    <img class="footer-logo" src="assets/images/logo.png" />
                    <div class="footer-mini-address">
                        G??ll??k Mah. Adnan Menderes Cad. No:145
                        Adapazar?? / Sakarya</div>
                    <div class="footer-mini-phone">0555 5555 55 55</div>
                    <div class="footer-mini-email">test@test.com</div>
                </div>
                <div class="footer-links">
                    <div class="footer-title">Ba??lant??lar</div>
                    <a href="#">Ana Sayfa</a>
                    <a href="#">Hakk??m??zda</a>
                    <a href="#">Kurumsal</a>
                    <a href="#">Odalar??m??z</a>
                    <a href="#">??leti??im</a>
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
                    ?? 2022 Ramada By Wyndham SAKARYA. T??m haklar?? sakl??d??r.
                </div>
            </div>
        </footer>
        <div class="md-modal md-effect-12">
            <div class="md-content">
                <div class="modal-content">
                    <h3 class="modal-header">Toplant?? & Davet</h3>
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
                            <label class="form-label" >Etkinlik Ad??:</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-4">
                            <label class="form-label" >Ki??i Say??s??:</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-5"> 
                            <label class="form-label" >Kurum Ad??:</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-6">
                            <label class="form-label" >G??reviniz:</label>
                            <input class="form-input" />
                        </div>
                        <div class="modal-grid-item-7">
                            <div class="checkbox-content">
                                <label class="form-checkbox-container">Kokteyl
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="form-checkbox-container">D??????n
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="form-checkbox-container">????le Yeme??i
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="form-checkbox-container">Yar??m G??n Toplant??
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="modal-grid-item-8">
                            <div class="checkbox-content">
                                <label class="form-checkbox-container">Gala Yeme??i
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="form-checkbox-container">Salon
                                    <input type="checkbox" >
                                    <span class="checkmark"></span>
                                </label>
                                <label class="form-checkbox-container">Ak??am Yeme??i
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
                        $(".menu-parent").addClass("scrolling");
                        $(".menu-button").addClass("menu-button-s");
                    } else {
                        $(".menu-parent").removeClass("scrolling");
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