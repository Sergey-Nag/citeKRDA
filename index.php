<?php 
//$sites = array(
//  "pl" => "http://pl.kreyda.pro/",
//  "de" => "http://de.kreyda.pro/",
//  "bg" => "http://bg.kreyda.pro/",
//  "cs" => "http://cs.kreyda.pro/",
//  "be" => "http://be.kreyda.pro/",
//  "ro" => "http://ro.kreyda.pro/",
//  "en" => "http://kreyda.pro/"
//);
//
//$lang = $_COOKIE["lang"];
//foreach($_SERVER as $key => $dat) {
//  echo $key." => ".$dat."<br>";
//}
//if (empty($lang)) {
//
//  $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);  
//  
//  if (!in_array($lang, array_keys($sites))) {
//    $lang = 'en';
//  }
//  setcookie ("lang", $lang, time()+30*24*60*60, "/", $_SERVER['HTTP_HOST']);
//}


//echo header('Location: '.$sites[$lang]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <link rel="alternate" hreflang="pl-PL" href="http://pl.kreyda.pro/">
  <link rel="alternate" hreflang="de-DE" href="http://de.kreyda.pro/">
  <link rel="alternate" hreflang="bg-BG" href="http://bg.kreyda.pro/">
  <link rel="alternate" hreflang="cs-CZ" href="http://cs.kreyda.pro/">
  <link rel="alternate" hreflang="be-BY" href="http://be.kreyda.pro/">
  <link rel="alternate" hreflang="ro-MD" href="http://ro.kreyda.pro/">
  <link rel="alternate" hreflang="en" href="http://kreyda.pro/">
  <link rel="alternate" hreflang="x-default" href="http://kreyda.pro/">


  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <title>KREYDA</title>
  <meta name="msapplication-TileColor" content="#ffe000">
  <meta name="theme-color" content="#ffe000">
  <meta name="yandex-tableau-widget" content="logo=LOGO-min.png, color=#ffe000" />
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="shortcut icon" href="LOGO-min.png" type="image/png">
  <link rel="icon" sizes="400x400" href="LOGO-t.png">

</head>

<body>
  <!--[if (gt IE 9)|!(IE)]><!-->
  <style>
    .main-logo {
      max-height: auto;
      width: auto;
      height: 50vh;
    }
    @media (max-width: 600px) {
      .main-logo {
        width: 40vw;
      }
    }
  </style>
  <!--<![endif]-->
  <header class="main-screen d-flex screen">
    <div class="m-center">
      <div class="logo"><img class="main-logo m-center" src="img/LOGO-en.svg" alt="kreyda logo"></div>
      <ul class="leng-list">
        <a class="link-list" href="http://kreyda.pro/">
          <li class="lang-input active"><img src="img/en.svg" alt="en"> English</li>
        </a>
        <a class="link-list" href="http://pl.kreyda.pro/">
          <li class="lang-input"><img alt="pl" src="img/pl.svg"> Polski</li>
        </a>
        <a class="link-list" href="http://de.kreyda.pro/">
          <li class="lang-input"><img alt="de" src="img/de.svg"> Deutsch</li>
        </a>
        <a class="link-list" href="http://bg.kreyda.pro/">
          <li class="lang-input"><img alt="bg" src="img/bg.svg"> Български</li>
        </a>
        <a class="link-list" href="http://cs.kreyda.pro/">
          <li class="lang-input"><img alt="cs" src="img/cz.svg"> Čeština</li>
        </a>
        <a class="link-list" href="http://be.kreyda.pro/">
          <li class="lang-input"><img alt="be" src="img/by.svg"> Беларуская</li>
        </a>
        <a class="link-list" href="http://ro.kreyda.pro/">
          <li class="lang-input"><img alt="ro" src="img/md.svg"> Română</li>
        </a>
      </ul>
      <div id="language-button">

        <div class="lang-select">
          <div class="button-leng"><img alt="en" src="img/en.svg"></div>
        </div>

      </div>
    </div>

  </header>

  <main>
    <div class="info_screen">
      <div class="container m-center">
        <h1 id="show430">Marking wax crayon</h1>

        <div id="wrapp_info" class="wrapp-info d-flex">
          <div class="left-block">
            <img class="toper-left" src="img/toper-kreyda.png" alt="toper">
          </div>
          <div class="right-block">
            <div class="text-wrapp">
              <h1 id="hide430">Marking wax crayon</h1>

              <p>
                Leaves a rich, bright stroke, suitable for application on different surfaces: metal, stone, brick, concrete, asphalt, rubber, wood, glass, plastic, rubber, PVC, ceramics, enamel and others.
              </p>
              <p>
                Labeling can be applied on rust, wet, dirty, rough, porous, greasy, oiled and other surfaces. The inscription is resistant to harsh climatic conditions, temperature fluctuations.
              </p>
              <p>
                Wax chalk contains several main components: synthetic wax, inorganic fillers and inorganic colored pigments.
              </p>
              <div class="list-colors">
                <h2>Colors:</h2>
                <ul>
                  <li>white</li>
                  <li>yellow</li>
                  <li>blue</li>
                  <li>red</li>
                  <li>green</li>
                  <li>black</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-info-screen">
      <div class="container m-center">
        <div class="wrapp-info d-flex">
          <div class="left-block">
          </div>
          <div class="right-block">
            <div class="text-wrapp w">

              <h2>Colors:</h2>
              <ul>
                <li>white</li>
                <li>yellow</li>
                <li>blue</li>
                <li>red</li>
                <li>green</li>
                <li>black</li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="media-screen">
      <div class="container m-center">
        <div class="wrapp-info def-w">
          <h1>Photos:</h1>
        </div>
      </div>

      <div class="carousel-wrapp">
        <div id="carousel" class="swiper-container two swiper-container-horizontal swiper-container-3d swiper-container-coverflow">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="img/mel3.jpg" alt="Kreyda"></div>
            <div class="swiper-slide"><img src="img/photo1.jpg" alt="Kreyda"></div>
            <div class="swiper-slide"><img src="img/mel1.jpg" alt="Kreyda"></div>
            <div class="swiper-slide"><img src="img/mel2.jpg" alt="kreyda"></div>
            <div class="swiper-slide"><img src="img/photo2.jpg" alt="Kreyda"></div>
            <div class="swiper-slide"><img src="img/photo3.jpg" alt="Kreyda"></div>
            <div class="swiper-slide"><img src="img/photo4.jpg" alt="Kreyda"></div>
            <div class="swiper-slide"><img src="img/photo5.jpg" alt="Kreyda"></div>
            <div class="swiper-slide"><img src="img/photo6.jpg" alt="Kreyda"></div>
          </div>

          <div class="swiper-pagination"></div>

        </div>
        <div class="button-nav nav-prev"></div>
        <div class="button-nav nav-next"></div>
      </div>




    </div>
    <div class="video_wrapper">
      <div class="container m-center">
        <div class="wrapp-info def-b">
          <h1>Videos:</h1>
        </div>
      </div>
      <div class="video-wrapp p_b">
        <div class="videos d-flex">
          <div class="vid-wrapp">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/dtsxQOdfyIY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="vid-wrapp">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/lPErYGm-UcU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="certif-wrapp">
      <div class="container m-center">
        <div class="wrapp-info def-w">
          <h1>Certificates:</h1>
          <div class="certs-imgs d-flex">
            <div class="img-cert-wrapp">
              <a href="/img/ISO-eng.jpg" target="_blank">
                <img src="/img/ISO-eng-s.jpg" alt="ISO-eng">
                <span class="cert-lang">en</span>
              </a>
            </div>
            <div class="img-cert-wrapp">
              <a href="/img/ISO-uk.jpg" target="_blank">
                <img src="/img/ISO-uk-s.jpg" alt="ISO-uk">
                <span class="cert-lang">ru</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer class="footer-screen">
    <div class="container m-center">

      <div class="wrapp-form">
        <form id="send-form" class="form-bottom m-center">
          <h1>We are looking for dealers in Europe.</h1>
          <h2>Leave your contacts and we will contact you</h2>
          <input id="form-name" name="name" type="text" class="form-input" placeholder="What is your name?">
          <div class="checking" data-check="name">
            <img class="correct" alt="correct" src="img/checked.svg">
            <img class="incorrect" alt="incorrect" src="img/unchecked.svg">
          </div>
          <input id="form-country" name="country" type="text" class="form-input" placeholder="Where are you from?">
          <div class="checking" data-check="country">
            <img class="correct" alt="correct" src="img/checked.svg">
            <img class="incorrect" alt="incorrect" src="img/unchecked.svg">
          </div>
          <input id="form-email" name="email" type="email" class="form-input" placeholder="Your e-mail">
          <div class="checking" data-check="email">
            <img class="correct" alt="correct" src="img/checked.svg">
            <img class="incorrect" alt="incorrect" src="img/unchecked.svg">
          </div>

          <input type="hidden" name="page-lang" value="en">
          <input id="form-subm" type="submit" class="form-input" value="Send" data-sending="Sending..." data-sended="Sended" disabled>

          <div class="wrapp-email">
            <div class="or-sample"><span>or</span></div>
            <p>сontact us at <a href="mailto:info@kreyda.net" class="link">info@kreyda.net</a></p>
            <p>Phone <a class="link" href="tel:+380577129092">+38 (057) 7129092</a><br>
              Mobile <a class="link" href="tel:+380675701621">+38 (067) 5701621</a><br>
              Viber <a class="link" href="viber://chat?number=%2B380675701621">+38 (067) 5701621</a><br>
              Telegram <a class="link" href="https://t.me/primaterra_manager">+38 (067) 5701621</a></p>
          </div>
        </form>
      </div>

    </div>
    <div class="company-info">
      <div class="container m-center d-flex cont-center">
        <div class="company-logo">
          <img src="img/primaterra.png" alt="primaterra logo">
        </div>
        <div class="company-adress">
          <p>
            LLC "SPI "ATLANTIS CHEM" trademark "PRIMATERRA"
          </p>
          <address>
            Ukraine, Kharkov<br>Danilevsky street, 6
          </address>
        </div>
      </div>
    </div>
  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
