<?php
require_once __DIR__ . '/translations/translator.php';
$translator = init_translator();

?>

  <!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta
    name="description"
    content="Showcasing my skills as a junior web developer." />

  <title>Richard Balke - Junior Web Developer</title>
  <link rel="stylesheet" href="/CSS/index.css" />
  <link rel="stylesheet" href="/CSS/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />

  <link
    href="https://fonts.googleapis.com/css2?family=Atma:wght@300;400;500;600;700&family=Averia+Sans+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Caveat&family=Lora:ital,wght@0,400..700;1,400..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <header>
    <div class="hf-container">
      <div class="logo-container">
        <a href="/index.php"><img src="/Images/Icons/website_icon1.png" alt /></a>
      </div>
      <div class="brand-name-container"></div>
      <div class="nav-container">
        <nav>
          <button class="nav-button" id="home-button" onclick="window.location.href='index.php'"><?= $translator->get('nav_bar1') ?></button>
          <button class="nav-button" id="about-button" onclick="window.location.href='about.html'"><?= $translator->get('nav_bar2') ?></button>
          <button class="nav-button" id="contact-button" onclick="window.location.href='contact.php'"><?= $translator->get('nav_bar3') ?></button>
          <!-- <button class="nav-button" id="portfolio-button">Portfolio</button> -->
          <!-- <button class="nav-button" id="language-dropdown-menu"><img src="/Images/Icons/vlag-nederlands-engels.png" alt=""></button> -->
        </nav>
      </div>
    </div>
  </header>

  <main>
    <div id="index-container">
      <div class="scroll-img-container">
        <div class="scroll-img-container-left">
          <img class="scroll-img" src="/Images/intro-slider-links1.jpg" alt />
        </div>
        <div class="scroll-img-container-right">
          <img
            class="scroll-img"
            src="/Images/intro-slider-rechts1.jpg"
            alt />
        </div>
      </div>

      <div id="title-container">
        <h2 id="title-header2">
          Richard <br />Balke
        </h2>
        <hr id="title-header-hr" />
        <h3 id="title-header3">
          Junior <br> Web
          Developer
        </h3>
        <p id="title-paragraph"><?= $translator->get('title_paragraph') ?></p>

        <button class="button" onclick="window.location.href='index.php#all-Content'">Mijn werk</button>
      </div>

      <div id="all-Content">
        <div id="intro-skills-container">
          <button id="skills-text-show-button"></button>
          <div id="skills-container">
            <h3><?= $translator->get('skills_container_h3') ?></h3>

            <svg class="chart" viewBox="-50 -40 300 300">
              <!-- Radar chart background -->
              <polygon
                id="radar-background"
                points="100,20 180,80 150,170 50,170 20,80" />
              <polygon
                id="radar-foreground"
                points="100,50 160,86 145,163 73,140 40,86" />

              <!-- Axes -->
              <line
                class="radar-line"
                x1="100"
                y1="104"
                x2="100"
                y2="20" />
              <line
                class="radar-line"
                x1="100"
                y1="104"
                x2="180"
                y2="80" />
              <line
                class="radar-line"
                x1="100"
                y1="104"
                x2="150"
                y2="170" />
              <line
                class="radar-line"
                x1="100"
                y1="104"
                x2="50"
                y2="170" />
              <line
                class="radar-line"
                x1="100"
                y1="104"
                x2="20"
                y2="80" />

              <!-- Labels -->
              <text class="chart_text" x="100" y="10"><?= $translator->get('chart_text1') ?></text>
              <text class="chart_text" x="200" y="65"><?= $translator->get('chart_text2') ?></text>
              <text class="chart_text" x="145" y="190"><?= $translator->get('chart_text3') ?></text>
              <text class="chart_text" x="45" y="190"><?= $translator->get('chart_text4') ?></text>
              <text class="chart_text" x="-5" y="60" text-anchor="start">
                <tspan x="0" dy="0"><?= $translator->get('chart_text5-1') ?></tspan>
                <tspan x="-3" dy="1.2em"><?= $translator->get('chart_text5-2') ?></tspan>
              </text>
            </svg>
          </div>
          <div id="skills-text-container">
            <div class="skills-text">
              <h4><?= $translator->get('chart_text1') ?></h4>
              <p><?= $translator->get('chart_text_paragraph1') ?></p>
            </div>
            <div class="skills-text">
              <h4><?= $translator->get('chart_text2') ?></h4>
              <p><?= $translator->get('chart_text_paragraph2') ?></p>
            </div>
            <div class="skills-text">
              <h4><?= $translator->get('chart_text3') ?></h4>
              <p><?= $translator->get('chart_text_paragraph3') ?></p>
            </div>
            <div class="skills-text">
              <h4><?= $translator->get('chart_text4') ?></h4>
              <p><?= $translator->get('chart_text_paragraph4') ?></p>
            </div>
            <div class="skills-text">
              <h4><?= $translator->get('chart_text5') ?></h4>
              <p><?= $translator->get('chart_text_paragraph5') ?></p>
            </div>
          </div>

        </div>


        <div class="main-portfolio-container">
          <div>
            <h3><?= $translator->get('portfolio_container_h3') ?></h3>
          </div>
          <div class="slider">
            <div class="slide-track">
              <div class="slide">
                <a
                  href="/fittingly/public_html/index.php"
                  target="_blank"><img
                    class="slideimg"
                    src="/Images/logo_fittingly_light.png"
                    alt /></a>
              </div>
              <div class="slide">
                <div class="img-container">
                  <img
                    class="slideimg"
                    src="/Images/Pixel_Rampage_Logo2.png"
                    alt />
                  <div class="hover-message"><?= $translator->get('slide_hover_message') ?></div>
                </div>
              </div>
              <div class="slide">
                <div class="img-container">
                  <img
                    class="slideimg portfolio-ashray-img"
                    src="/Images/index_Foto_Ashray.png"
                    alt />
                  <div class="hover-message"><?= $translator->get('slide_hover_message') ?></div>
                </div>
              </div>
              <div class="slide">
                <img
                  class="slideimg"
                  src="/Images/poc-filler-image.jpeg"
                  alt />
              </div>

              <!--Duplicate images-->
              <div class="slide">
                <a
                  href="/fittingly/public_html/index.php"
                  target="_blank"><img
                    class="slideimg"
                    src="/Images/logo_fittingly_light.png"
                    alt /></a>
              </div>

              <div class="slide">
                <div class="img-container">
                  <img
                    class="slideimg"
                    src="/Images/Pixel_Rampage_Logo2.png"
                    alt />
                  <div class="hover-message"><?= $translator->get('slide_hover_message') ?></div>
                </div>
              </div>

              <div class="slide">
                <div class="img-container">
                  <img
                    class="slideimg portfolio-ashray-img"
                    src="/Images/index_Foto_Ashray.png"
                    alt />
                  <div class="hover-message"><?= $translator->get('slide_hover_message') ?></div>
                </div>
              </div>

              <div class="slide">
                <img
                  class="slideimg"
                  src="/Images/poc-filler-image.jpeg"
                  alt />
              </div>

              <div class="slide">
                <a
                  href="/fittingly/public_html/index.php"
                  target="_blank"><img
                    class="slideimg"
                    src="/Images/logo_fittingly_light.png"
                    alt /></a>
              </div>

              <div class="slide">
                <div class="img-container">
                  <img
                    class="slideimg"
                    src="/Images/Pixel_Rampage_Logo2.png"
                    alt />
                  <div class="hover-message"><?= $translator->get('slide_hover_message') ?></div>
                </div>
              </div>

              <div class="slide">
                <div class="img-container">
                  <img
                    class="slideimg portfolio-ashray-img"
                    src="/Images/index_Foto_Ashray.png"
                    alt />
                  <div class="hover-message"><?= $translator->get('slide_hover_message') ?></div>
                </div>
              </div>

              <div class="slide">
                <img
                  class="slideimg"
                  src="/Images/poc-filler-image.jpeg"
                  alt />
              </div>

              <div class="slide">
                <a
                  href="/fittingly/public_html/index.php"
                  target="_blank"><img
                    class="slideimg"
                    src="/Images/logo_fittingly_light.png"
                    alt /></a>
              </div>

              <div class="slide">
                <div class="img-container">
                  <img
                    class="slideimg"
                    src="/Images/Pixel_Rampage_Logo2.png"
                    alt />
                  <div class="hover-message"><?= $translator->get('slide_hover_message') ?></div>
                </div>
              </div>

              <div class="slide">
                <div class="img-container">
                  <img
                    class="slideimg portfolio-ashray-img"
                    src="/Images/index_Foto_Ashray.png"
                    alt />
                  <div class="hover-message"><?= $translator->get('slide_hover_message') ?></div>
                </div>
              </div>

              <div class="slide">
                <img
                  class="slideimg"
                  src="/Images/poc-filler-image.jpeg"
                  alt />
              </div>
            </div>
          </div>

          <!--Duplicate images end-->
        </div>
      </div>
    </div>
    </div>
  </main>

  <footer>
    <?php include 'footer.php'; ?>
  </footer>

  <script src="/JavaScript/script.js"></script>

</body>

</html>