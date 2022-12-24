<?php 
    require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <title>Next Gen Crypto-Wallet</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="libs/slick/slick.css">
    <link rel="stylesheet" href="libs/slick/slick-theme.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="logo_container">
                    <img src="img/header/Crypto go!.png" class="logo" alt="">
                </div>
                <nav class="nav">
                    <a class="nav__link" href="#howitworks"> How it works </a>
                    <a class="nav__link" href="#cryptos"> Cryptos </a>
                    <a class="nav__link" href="#features"> Features </a>
                    <a class="nav__link" href="#download"> Download </a>     
                    <a class="nav__link" href="#reviews"> Reviews </a>
                </nav>
                <div class="dropdown">
                    <button class="dropbtn">
                    <img src="img/header/usa.png" alt="USA" class="lang__icon">
                        ↓
                    </button>
                    <div class="dropdown-content">
                        <p class="lang">Eng  <img src="img/header/usa.png" alt="en"></p>
                    </div>
                    <div class="dropdown-content" style="margin-top: 80%;">
                        <p class="lang">Rus  <img src="img/header/ru.png" alt="ru" style="width: 20px; height: 20px;"></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container main-section_container">
            <div class="title-holder hidden">
                <p class="main_title">Next Generation <br>  Crypto Trading</p>
            </div>
            <div class="animwrapper">
            <img src="img/section1/litecoin.png" class="litecoin" alt="litecoin">
            <img src="img/section1/bitcoin.png" class="bitcoin" alt="bitcoin">
            </div>
            <div class="header-text-holder">
                <p class="header-submai hidden">Crypto Market Starts in</p>
            </div>
                <div class="launchtime  ">
                    <div>
                        <p id="d">00</p>
                        <span>Days</span>
                    </div>
                    <span class="tpm">:</span>
                    <div>
                        <p id="h">00</p>
                        <span>Hours</span>
                    </div>
                    <span class="tpm">:</span>
                    <div>
                        <p id="m">00</p>
                        <span>Minutes</span>
                    </div>
                    <span class="tpm">:</span>
                    <div>
                        <p id="s">00</p>
                        <span>Seconds</span>
                    </div>
                </div>

                <?php 
                    $date = mysqli_query($connection, "SELECT * FROM `countdown_date` WHERE `id` = 1");
                    $date = mysqli_fetch_all($date);
                    $date = $date[0][1];
                ?>
                <p class="hidden_text date"><?php echo $date; ?></p>
                
                <div class="headerbtn hidden">
                    <div class="headerbutton1 hidden"><p><a href="#download"> Download app</a></p></div>
                    <div class="headerbutton2 hidden"><p><a href="#download">Trade crypto</a></p></div>
                </div>

                <div><p class="accept element-animation">We accept</p></div>
                <div class="accept-crypto element-animation">
                    <div>
                        <img src="img/cryptoicons/btc.png" alt="bitcoin">
                        Bitcoin
                    </div>
                    <div>
                        <img src="img/cryptoicons/ltc.png" alt="Litecoin">
                        Litecoin
                    </div>
                    <div>
                        <img src="img/cryptoicons/Chainlink.png" alt="Chainlink">
                        Chainlink
                    </div>
                    <div>
                        <img src="img/cryptoicons/Siacoin.png" alt="Siacoin">
                        Siacoin
                    </div>
                </div>

                <!-- end of the header -->


        </div>
        <section class="big-title hidden" id="howitworks">
            <h1>How to collect bonus?</h1>
            <p>To collect bonus you need jus download app and take a registration</p>
        </section>
        <div class="collect-bonus container">
            <div class="collect-bonus-left element-animation">
                <img src="img/phone.png" class="phone-img" alt="phone">
            </div>
            <div class="collect-bonus-right">
                <div class="bebra"><p class="something">Steps collect bonus</p></div>
                <div class="collect-bonus-item hidden" id  = "one" style="margin-top: 50px;">
                    <div class="circle">01</div>
                    <p class="collect-bonus-item-text">Download platfrom</p>
                </div>
                <div class="collect-bonus-item hidden" id = "two">
                    <div class="circle">02</div>
                    <p class="collect-bonus-item-text">Create an account</p>
                </div>
                <div class="collect-bonus-item hidden" id = "three">
                    <div class="circle">03</div>
                    <p class="collect-bonus-item-text">Select the crypto</p>
                </div>
                <div class="collect-bonus-item hidden" id = "four">
                    <div class="circle">04</div>
                    <p class="collect-bonus-item-text">Take the bonus <p style="opacity: 0.1;">ssss</p></p>
                </div>
            </div>
        </div>
    
        <section class="big-title element-animation" id="cryptos">
            <h1>Available Crypto</h1>
            <p>Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.</p>
        </section>

        <div class="slider_container container ">
            <div class="crypo_slider element-animation">
                <div class="slide">
                    <div class="slider_item-image"><img src="img/sliderone/Card 1.png" alt="Bitcoin"></div>
                    <div class="slider_bottom">
                        <div class="slider_item-title">
                            <p>Bitcoin</p>
                        </div>
                        <div class="slider_item-descriptoin">
                            <p>
                                Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.
                            </p>
                        </div>
                        <div style="display: flex; justify-content: center; align-items: center; text-align: center;">
                            <div class="slider_item-price"><p>$43.7k</p></div>
                            <div class="slider_item-button"><p>Trade now</p></div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slider_item-image" id="block-acceptor"><img src="img/sliderone/Card 2.png" alt="Bitcoin"></div>
                    <div class="slider_bottom" id="block-donor">
                        <div class="slider_item-title">
                            <p>Litecoin</p>
                        </div>
                        <div class="slider_item-descriptoin">
                            <p>
                                Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.
                            </p>
                        </div>
                        <div style="display: flex; justify-content: center; align-items: center; text-align: center;">
                            <div class="slider_item-price"><p>$158</p></div>
                            <div class="slider_item-button"><p>Trade now</p></div>
                        </div>
                    </div>
                </div>
                <div class="slide" style="width: 300px;">
                    <div class="slider_item-image eth_image"><img src="img/sliderone/Card 3.png" alt="Ethereum"></div>
                    <div class="slider_bottom">
                        <div class="slider_item-title">
                            <p>Ethereum</p>
                        </div>
                        <div class="slider_item-descriptoin">
                            <p>
                                Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.
                            </p>
                        </div>
                        <div style="display: flex; justify-content: center; align-items: center; text-align: center;">
                            <div class="slider_item-price"><p>$3k</p></div>
                            <div class="slider_item-button"><p>Trade now</p></div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="slider_item-image"><img src="img/sliderone/Card 4.png" alt="Bitcoin"></div>
                    <div class="slider_bottom">
                        <div class="slider_item-title">
                            <p>Bnb</p>
                        </div>
                        <div class="slider_item-descriptoin">
                            <p>
                                Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.
                            </p>
                        </div>
                        <div style="display: flex; justify-content: center; align-items: center; text-align: center;">
                            <div class="slider_item-price"><p>$277</p></div>
                            <div class="slider_item-button"><p>Trade now</p></div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="adaptive-crypto-cards">
                <ul class="card-wrapper">
                    <li class="card">
                        <img src='img/sliderone/Card 1.png' alt=''>
                        <h3><a href="" style="font-size: 30px; font-weight: 500;">A Super Wonderful Headline</a></h3>
                        <p class="adaptive-crypto-card_subtitle" style="font-size: 20px;">Lorem ipsum sit dolor amit</p>
                        <button class="accept-trade-button"><p>Trade</p></button>
                    </li>
                    <li class="card">
                        <img src='img/sliderone/Card 2.png' alt=''>
                        <h3><a href="" style="font-size: 30px; font-weight: 500;">What a Fantabulous Title!</a></h3>
                        <p class="adaptive-crypto-card_subtitle" style="font-size: 20px;">Lorem ipsum sit dolor amit</p>
                        <button class="accept-trade-button"><p>Trade</p></button>
                    </li>
                    <li class="card">
                        <img src='img/sliderone/Card 4.png' alt=''>
                        <h3><a href="" style="font-size: 30px; font-weight: 500;">What a Fantabulous Title!</a></h3>
                        <p class="adaptive-crypto-card_subtitle" style="font-size: 20px;">Lorem ipsum sit dolor amit</p>
                        <button class="accept-trade-button"><p>Trade</p></button>
                    </li>
                  </ul>
            </div>
        </div>

        <section class="big-title element-animation" id="features">
            <h1>Attractive Features</h1>
            <p>Windaful makes playing the UK's best raffles easy and fun.</p>
        </section>

        <div class="features_block-container container">
            <div class="column-one">
                <div class="features_block-item hidden">
                    <div><img class="block-image" src="img/features/01.png" alt="01">
                        <span class="features_title">Weekly Trading</span>
                    </div>
                    <p class="features_description">Eu tellus quam id sed ultrices. Integer nunc lectus nisi, erat et ornare risus.</p>
                </div>
                <div class="features_block-item hidden">
                    <div><img class="block-image" src="img/features/02.png" alt="01">
                        <span class="features_title">Small Сharge</span>
                    </div>
                    <p class="features_description">Eu tellus quam id sed ultrices. Integer nunc lectus nisi, erat et ornare risus.</p>
                </div>
                <div class="features_block-item hidden">
                    <div><img class="block-image" src="img/features/03.png" alt="01">
                        <span class="features_title">Safty & Privacy</span>
                    </div>
                    <p class="features_description">Eu tellus quam id sed ultrices. Integer nunc lectus nisi, erat et ornare risus.</p>
                </div>
            </div>

            <div class="column-two">
                <div class="features_block-item hidden">
                    <div><img class="block-image" src="img/features/04.png" alt="01">
                        <span class="features_title">Quick Cashout</span>
                    </div>
                    <p class="features_description">Eu tellus quam id sed ultrices. Integer nunc lectus nisi, erat et ornare risus.</p>
                </div>
                <div class="features_block-item hidden">
                    <div><img class="block-image" src="img/features/05.png" alt="01">
                        <span class="features_title" style="font-size: 36px;">Wellcome Bonus</span>
                    </div>
                    <p class="features_description">Eu tellus quam id sed ultrices. Integer nunc lectus nisi, erat et ornare risus.</p>
                </div>
                <div class="features_block-item hidden">
                    <div><img class="block-image" src="img/features/06.png" alt="01">
                        <span class="features_title">24/7 Support</span>
                    </div>
                    <p class="features_description">Eu tellus quam id sed ultrices. Integer nunc lectus nisi, erat et ornare risus.</p>
                </div>
            </div>
        </div>
        
        <section class="page_practice practice container">
            <div class="practice_container">
                <div class="practice_body">
                    <div class="practice_colum">
                        <article class="practice_item item-practice">
                        <div class="item-practice_content">
                            <a href="" class="item-practice_link">                                
                                 <h4 class="item-practice_title">
                                    A single source of truth
                                </h4>
                            </a>
                            <div class="item-practice_text">
                                Newton thought that light was made up of particles, but then it was discovered.
                            </div>
                        </div>  
                            <a href="" class="item-practice_image _ibg">
                                <img src="img/practice/01.jpg" alt="">
                            </a>                               
                        </article>
                    </div>
                    <div class="practice_colum">
                        <article class="practice_item item-practice">
                        <div class="item-practice_content">
                            <a href="" class="item-practice_link">                                
                                 <h4 class="item-practice_title">
                                    Fastest way to organize
                                </h4>
                            </a>
                            <div class="item-practice_text">
                                “Quantum mechanics” is the description of the behaviour of matter                                </div>
                            </div>  
                            <a href="" class="item-practice_image _ibg">
                                <img src="img/practice/02.jpg" alt="">
                            </a>                               
                        </article>
                    </div>
                    <div class="practice_colum">
                        <article class="practice_item item-practice">
                        <div class="item-practice_content">
                            <a href="" class="item-practice_link">                                
                                 <h4 class="item-practice_title">
                                    Fastest way to take action
                                </h4>
                            </a>
                            <div class="item-practice_text">
                                They describe a universe consisting of bodies moving
                            </div>
                        </div>  
                            <a href="" class="item-practice_image _ibg">
                                <img src="img/practice/03.jpg" alt="">
                            </a>                               
                        </article>
                    </div>
                    <div class="practice_colum">
                        <article class="practice_item item-practice">
                        <div class="item-practice_content">
                            <a href="" class="item-practice_link">                                
                                 <h4 class="item-practice_title">
                                    Work better together
                                </h4>
                            </a>
                            <div class="item-practice_text">
                                They finally obtained a consistent description of the behaviour                     
                            </div>
                            </div>  
                            <a href="" class="item-practice_image _ibg">
                                <img src="img/practice/04.jpg" alt="">
                            </a>                               
                        </article>
                    </div>
                </div>  
            </div>              
        </section>


        <?php 
            $filename = mysqli_query($connection, "SELECT * FROM `filename` WHERE `id` = 1");
            $filename = mysqli_fetch_all($filename);
            $filename = $filename[0][1];
        ?>

        <div class="download-section_buffer"style="opacity:0.1;">ddd</div>
        <div class="download-section" id="download">
            <div class="download-section-title element-animation">
                <p>Most advanced crypto trading&holding <br> platfrom ever!</p>
            </div>
            <div class="downloadbutton element-animation">
                <a href="<?= 'files/'.$filename ?>" download><p>DOWNLOAD NOW</p></a>
            </div>
        </div>

        <section class="big-title hidden" id="reviews">
            <h1>30 Million Users Worldwide</h1>
            <p>Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.</p>
        </section>

        <div class="feedback_slider container hidden">
            <div class="feedback_slider-item">
                <div class="feedback-icon_container"></div>
                <div class="feedback_text-container">
                    <p>Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.</p>
                </div>
                <div class="feedback_details">
                    <span class="name">Bessie Cooper</span>
                    <span class="role">Stock Manager</span>
                </div>  
            </div>
            <div class="feedback_slider-item">
                <div class="feedback-icon_container"></div>
                <div class="feedback_text-container">
                    <p>Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.</p>
                </div>
                <div class="feedback_details">
                    <span class="name">Bessie Cooper</span>
                    <span class="role">Stock Manager</span>
                </div>  
            </div>
            <div class="feedback_slider-item">
                <div class="feedback-icon_container"></div>
                <div class="feedback_text-container">
                    <p>Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.</p>
                </div>
                <div class="feedback_details">
                    <span class="name">Bessie Cooper</span>
                    <span class="role">Stock Manager</span>
                </div>  
            </div>
            <div class="feedback_slider-item">
                <div class="feedback-icon_container"></div>
                <div class="feedback_text-container">
                    <p>Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.</p>
                </div>
                <div class="feedback_details">
                    <span class="name">Bessie Cooper</span>
                    <span class="role">Stock Manager</span>
                </div>  
            </div>
            <div class="feedback_slider-item">
                <div class="feedback-icon_container"></div>
                <div class="feedback_text-container">
                    <p>Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.</p>
                </div>
                <div class="feedback_details">
                    <span class="name">Bessie Cooper</span>
                    <span class="role">Stock Manager</span>
                </div>  
            </div>
            <div class="feedback_slider-item">
                <div class="feedback-icon_container"></div>
                <div class="feedback_text-container">
                    <p>Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.</p>
                </div>
                <div class="feedback_details">
                    <span class="name">Bessie Cooper</span>
                    <span class="role">Stock Manager</span>
                </div>  
            </div>
        </div>

        <section class="big-title element-animation">
            <h1>Crypto Market Analysis</h1>
            <p>Tincidunt id nibh orci nibh justo. Purus et turpis nulla elementum, sed vel.</p>
        </section>

        <div class="market-analytics_conatainer container ">
            <div class="market-analytics">
                <div class="market-analytics_item hidden">
                    <div class="market-analytics_imagewrapper">
                        <img src="img/CryptoMarketAnalysis/01.png" alt="01">
                    </div>
                    <div class="market-analytics_column_content">
                        <h1>How to trade Bitcoin</h1>
                        <p class="market-analytics_column_text">Eu tellus quam id sed ultrices. Integer nunc lectus nisi, erat et ornare risus.</p>
                        <div class="arket-analytics_column_link"><a>Learn more</a></div>
                    </div>
                </div>
                <div class="market-analytics_item hidden">
                    <div class="market-analytics_imagewrapper">
                        <img src="img/CryptoMarketAnalysis/02.png" alt="02">
                    </div>
                    <div class="market-analytics_column_content">
                        <h1>How to trade Bitcoin</h1>
                        <p class="market-analytics_column_text">Eu tellus quam id sed ultrices. Integer nunc lectus nisi, erat et ornare risus.</p>
                        <div class="arket-analytics_column_link"><a>Learn more</a></div>
                    </div>
                </div>
                <div class="market-analytics_item hidden">
                    <div class="market-analytics_imagewrapper">
                        <img src="img/CryptoMarketAnalysis/03.png" alt="03">
                    </div>
                    <div class="market-analytics_column_content">
                        <h1>How to trade Bitcoin</h1>
                        <p class="market-analytics_column_text">Eu tellus quam id sed ultrices. Integer nunc lectus nisi, erat et ornare risus.</p>
                        <div class="arket-analytics_column_link"><a>Learn more</a></div>
                    </div>
                </div>
                <div class="market-analytics_item hidden">
                    <div class="market-analytics_imagewrapper">
                        <img src="img/CryptoMarketAnalysis/04.png" alt="04">
                    </div>
                    <div class="market-analytics_column_content">
                        <h1>How to trade Bitcoin</h1>
                        <p class="market-analytics_column_text">Eu tellus quam id sed ultrices. Integer nunc lectus nisi, erat et ornare risus.</p>
                        <div class="arket-analytics_column_link"><a>Learn more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="harter element-animation">
        <hr>
    </div>

    <div class="footer element-animation">
        <footer>
            <ul class="icons">
                <li><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
            </ul>
            <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Specialties</a></li>
                    <li><a href="#">Contact Us</a></li>
            </ul>
                <div class="footer-copyright">
                    <p>Copyright @ 2022 All Rights Reserved.</p>
                </div>
        </footer>
    </div>
    

    <div class="cookie_alert element-animation">
        <div class="container container__">
            <div class="subcontainer">
                <div class=""><p class="cookie-text">We use cookies to improve user experience and analyze website traffic.</p></div>
                <div class="accept-btn"><button class="cookie-btn">Accept</button></div>
            </div> 
        </div>
    </div>

        <script src="libs/jquery-3.6.1.min.js"></script>
        <script src="libs/slick/slick.min.js"></script>
        <script src="js/app.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    </body>
</html>