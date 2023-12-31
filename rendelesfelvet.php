<?php
$currencyPrices1 = array(
    'huf' => 4500,
    'eur' => 10,
    'rsd' => 100
);

$currencyPrices2 = array(
    'huf' => 3000,
    'eur' => 20,
    'rsd' => 60
);

$currencyPrices3 = array(
    'huf' => 4000,
    'eur' => 150,
    'rsd' => 300

);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FLATICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Loadeat • Rendelésfelvétel</title>
</head>

<body>
    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home-data-container-fullscreen container">

                <div class="home-data">
                    <h1 class="home-title" id="etteremNev">Villa Gusto Trattoria Balatonfüred</h1>
                    <div class="home-description">
                        <div class="home-box">
                            <img src="assets/images/location.svg" alt="location" class="home-data-icon">
                            <p class="home-data-p" id="etteremCime">8636 Balatonszemes, Árnyas fasor 1
                                (Magyarország)</p>
                        </div>

                        <div class="home-box">
                            <img src="assets/images/mail.svg" alt="mail" class="home-data-icon">
                            <p class="home-data-p" id="etteremEmail">Csoportos foglalások:
                                szallas+wellness-hotel-szindbad-balatonszemes@szallas.hu
                            </p>
                        </div>
                    </div>
                    <div class="home-section-container-hr"></div>
                </div>


                <div class="fullscreen-container grid">
                    <div class="wrapper">
                        <div class="swiper swiper-fullscreen">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card-contents">
                                        <img src="assets/images/etterem3.jpeg" />
                                        <div class="card-description">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-contents">
                                        <img src="assets/images/etterem2.jpg" />
                                        <div class="card-description">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card-contents">
                                        <img src="assets/images/etterem1.jpg" />
                                        <div class="card-description">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="home-section-container-fullscreen container">
                        <h2 class="home-section-container-title">Tudnivalók az étteremről:</h2>
                        <p class="home-section-container-description" id="etteremLeiras">A Villa Gusto Trattoria egy
                            varázslatos, olasz stílusú
                            étterem, amely a hagyományos olasz konyha szerelmeseinek kínál egy valódi gasztronómiai élményt.
                            Az étterem a város szívében, egy csendes kis utcában található, ahol a hangulatos, mediterrán
                            stílusú épület egy igazi olasz kisváros atmoszféráját idézi fel.</p>
                        <h2 class="home-section-container-title">Fizetési lehetőségek:</h1>
                            <ul class="home-section-container-ul">
                                <li class="home-section-container-list"><img src="assets/images/pay.svg" alt="pay" class="home-section-container-icon"> Helyszíni bankkártyás fizetés</li>
                                <li class="home-section-container-list"><img src="assets/images/wallet.svg" alt="wallet" class="home-section-container-icon"> Helyszíni készpénzes fizetés</li>
                                <li class="home-section-container-list"><img src="assets/images/online-pay.svg" alt="online payment" class="home-section-container-icon"> Online</li>
                            </ul>
                            <button class="button foglalasBtn" id="foglalasBtn" onclick="showPopup()">Foglalás</button>
                            <a href="#menu"><button class="button">Menük megtekintése</button></a>
                    </div>
                </div>
            </div>

            <div class="home-container grid">
                <!-- <img src="assets/images/etterem1.jpg" alt="etterem" class="home-img etteremKepek"> -->
                <div class="carousel-container">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="assets/images/etterem1.jpg" alt="Carousel Image 1" class="carousel-image etteremKepek">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/etterem2.jpeg" alt="Carousel Image 2" class="carousel-image etteremKepek">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/etterem3.jpeg" alt="Carousel Image 3" class="carousel-image etteremKepek">
                        </div>
                    </div>
                    <div class="carousel-prev" onclick="prevSlide()">❮</div>
                    <div class="carousel-next" onclick="nextSlide()">❯</div>
                </div>
                <div class="home-data-container container">
                    <div class="home-data">
                        <h1 class="home-title" id="etteremNev">Villa Gusto Trattoria Balatonfüred</h1>
                        <div class="home-description">
                            <div class="home-box">
                                <img src="assets/images/location.svg" alt="location" class="home-data-icon">
                                <p class="home-data-p" id="etteremCime">8636 Balatonszemes, Árnyas fasor 1
                                    (Magyarország)</p>
                            </div>

                            <div class="home-box">
                                <img src="assets/images/mail.svg" alt="mail" class="home-data-icon">
                                <p class="home-data-p" id="etteremEmail">Csoportos foglalások:
                                    szallas+wellness-hotel-szindbad-balatonszemes@szallas.hu
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home-section-container container">
                    <!-- <div class="home-section-container-hr"></div> -->
                    <h2 class="home-section-container-title">Tudnivalók az éttermről:</h2>
                    <p class="home-section-container-description" id="etteremLeiras">A Villa Gusto Trattoria egy
                        varázslatos, olasz stílusú
                        étterem, amely a hagyományos olasz konyha szerelmeseinek kínál egy valódi gasztronómiai élményt.
                        Az étterem a város szívében, egy csendes kis utcában található, ahol a hangulatos, mediterrán
                        stílusú épület egy igazi olasz kisváros atmoszféráját idézi fel.</p>
                    <h2 class="home-section-container-title">Fizetési lehetőségek:</h1>
                        <ul class="home-section-container-ul">
                            <li class="home-section-container-list"><img src="assets/images/pay.svg" alt="pay" class="home-section-container-icon"> Helyszini bankkártyás fizetés</li>
                            <li class="home-section-container-list"><img src="assets/images/wallet.svg" alt="wallet" class="home-section-container-icon"> Helyszini készpénzes fizetés</li>
                            <li class="home-section-container-list"><img src="assets/images/online-pay.svg" alt="online payment" class="home-section-container-icon"> Online</li>
                        </ul>
                        <button class="button foglalasBtn" id="foglalasBtn" onclick="showPopup()">Foglalás</button>
                        <a href="#menu"><button class="button">Menük megtekintése</button></a>
                </div>
            </div>
        </section>

        <!--==================== MENU ====================-->
        <section class="menu section container" id="menu">
            <div class="menu-side-container">
                <h1 class="menu-container-title">Menük</h1>
                <button class="button menu-button">HUF</button>
                <button class="button menu-button">EUR</button>
                <button class="button menu-button">RSD</button>
                <div class="menu-hr"></div>
            </div>

            <div class="menu-hr-container">

                <div class="menu-section-container">
                    <div class="menu-container grid">

                        <div class="wrapper">
                            <div class="swiper menu-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card-contents">
                                            <!-- added swiper-image class -->
                                            <img src="assets/images/etterem7.jpg" class="swiper-image" />
                                            <div class="card-description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-contents">
                                            <!-- added swiper-image class -->
                                            <img src="assets/images/etterem3.jpeg" class="swiper-image" />
                                            <div class="card-description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-contents">
                                            <!-- added swiper-image class -->
                                            <img src="assets/images/etterem2.jpeg" class="swiper-image" />
                                            <div class="card-description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="menu-data">
                            <h2 class="menu-title" id="menuNev">
                                Hétfői Különlegességek
                            </h2>
                            <p class="menu-description" id="menuLeiras">
                                Az ételválaszték egyszerre egyszerű és vonzó. Az alapanyagok frissességére való utalás pozitív
                                benyomást kelt, és azt sugallja, hogy az ételek minőségi és gondosan kiválasztott összetevőkből
                                készülnek.
                            </p>
                            <p class="menu-price">A menü ára különböző <br> pénznemekben:
                                <span id="price-huf"></span>
                                <span id="price-eur" style="display: none;"></span>
                                <span id="price-rsd" style="display: none;"></span>
                            </p>
                            <button class="button foglalasBtn" id="foglalasBtn" onclick="showPopup()">Foglalás</button>

                        </div>

                        <!-- Menu 2 -->
                        <div class="wrapper">
                            <div class="swiper menu-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card-contents">
                                            <img src="assets/images/etterem1.jpg" />
                                            <div class="card-description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-contents">
                                            <img src="assets/images/etterem2.jpeg" />
                                            <div class="card-description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-contents">
                                            <img src="assets/images/etterem2.jpeg" />
                                            <div class="card-description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="menu-data">
                            <h2 class="menu-title" id="menuNev2">
                                Keddi Különlegességek
                            </h2>
                            <p class="menu-description" id="menuLeiras2">
                                Az ételválaszték egyszerre egyszerű és vonzó. Az alapanyagok frissességére való utalás pozitív benyomást kelt,
                                és azt sugallja, hogy az ételek minőségi és gondosan kiválasztott összetevőkből készülnek.
                            </p>
                            <p class="menu-price">A menü ára különböző <br> pénznemekben:
                                <span id="price-huf2"></span>
                                <span id="price-eur2" style="display: none;"></span>
                                <span id="price-rsd2" style="display: none;"></span>
                            </p>
                            <button class="button foglalasBtn" id="foglalasBtn2" onclick="showPopup()">Foglalás</button>
                        </div>

                        <!-- Menu 3 -->
                        <div class="wrapper">
                            <div class="swiper menu-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card-contents">
                                            <img src="assets/images/etterem1.jpg" />
                                            <div class="card-description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-contents">
                                            <img src="assets/images/etterem2.jpeg" />
                                            <div class="card-description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-contents">
                                            <img src="assets/images/etterem2.jpeg" />
                                            <div class="card-description">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="menu-data">
                            <h2 class="menu-title" id="menuNev3">
                                Szerdai Különlegességek
                            </h2>
                            <p class="menu-description" id="menuLeiras3">
                                Az ételválaszték egyszerre egyszerű és vonzó. Az alapanyagok frissességére való utalás pozitív benyomást kelt,
                                és azt sugallja, hogy az ételek minőségi és gondosan kiválasztott összetevőkből készülnek.
                            </p>
                            <p class="menu-price">A menü ára különböző <br> pénznemekben:
                                <span id="price-huf3"></span>
                                <span id="price-eur3" style="display: none;"></span>
                                <span id="price-rsd3" style="display: none;"></span>
                            </p>
                            <button class="button foglalasBtn" id="foglalasBtn3" onclick="showPopup()">Foglalás</button>
                        </div>
                    </div>

                </div>
                <div class="menu-hr"></div>
            </div>
        </section>

        <!--==================== POPUP ====================-->
        <div class="overlay" id="overlay">
            <div class="booking-popup" id="bookingPopup">
                <div class="booking-content">
                    <div id="popup" class="popup">
                        <span class="close-btn" id="close-btn" style="cursor: pointer; float: right;">&times;</span>
                        <div class="container">
                            <form action="" id="foglaloFelForm">
                                <h3 class="form-title">Foglalás</h3>
                                <label for="">Foglaló fél neve</label>
                                <input type="text" id="fname" name="fname" placeholder="Példa Péter" required>
                                <label for="">Foglaló fél telefonszáma</label>
                                <input type="number" id="telnumber" name="telnumber" placeholder="06 30 123 4567" required>
                                <label for="">Foglaló fél személyi száma</label>
                                <input type="number" id="szemelyiid" name="szemelyiid" placeholder="Foglaló fél személyi száma" required>
                                <label for="">Foglaló fél születési dátuma</label>
                                <input type="date" id="szulDatum" name="szulDatum" required>
                                <label for="">Foglaló fél létszáma</label>
                                <input type="number" id="foglalasFo" name="foglalasFo" required>
                            </form>

                            <form action="" id="foglalasReszletei">
                                <h3 class="form-title">Foglalás részletei</h3>
                                <label>Foglalas dátuma</label>
                                <input type="date" id="foglalasDatum" name="" required>
                                <label>Foglalas időpontja</label>
                                <select name="foglalasIdo" id="foglalasIdo" required>
                                    <option value="timeSlot1">11:30 - 13:00</option>
                                    <option value="timeSlot2">13:00 - 14:30</option>
                                    <option value="timeSlot3">18:00 - 19:30</option>
                                    <option value="timeSlot4">19:30 - 21:00</option>
                                </select>

                                <label>Pénznem</label>
                                <select id="currency">
                                    <option value="huf">HUF</option>
                                    <option value="eur">EUR</option>
                                    <option value="rsd">RSD</option>
                                </select>
                                <label>Első menü száma</label><input type="number" name="" id="elsomenu" min="0" onchange="updateTotal()">
                                <label>Második menü száma</label><input type="number" name="" id="masodikmenu" min="0" onchange="updateTotal()">
                                <label>Harmadik menü száma</label><input type="number" name="" id="harmadikmenu" min="0" onchange="updateTotal()">
                            </form>

                            <form action="" id="foglalasFizetes">
                                <div class="checkboxInput">
                                    <input type="radio" id="bankCardPayment" name="paymentMethod" value="BankCard">
                                    <label for="bankCardPayment">Helyszíni bankkártyás fizetés</label>
                                </div>

                                <div class="checkboxInput">
                                    <input type="radio" id="cashPayment" name="paymentMethod" value="Cash">
                                    <label for="cashPayment">Helyszíni készpénzes fizetés</label>
                                </div>

                                <div class="checkboxInput">
                                    <input type="radio" id="onlinePayment" name="paymentMethod" value="Online">
                                    <label for="onlinePayment">Online</label>
                                </div>
                            </form>
                            <p class="total">Végösszeg: <span id="totalPrice"></span></p>
                            <div style="text-align: center;">
                                <button type="submit" class="button">Foglalás</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>

    <!--=============== PHP ===============-->
    <script type="text/javascript">
        var currencyPrices1 = <?php echo json_encode($currencyPrices1); ?>;
        var currencyPrices2 = <?php echo json_encode($currencyPrices2); ?>;
        var currencyPrices3 = <?php echo json_encode($currencyPrices3); ?>;
    </script>
    <!--=============== AJAX KIT ===============-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--=============== JQUERY ===============-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>