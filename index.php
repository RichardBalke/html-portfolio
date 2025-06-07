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
  <link rel="stylesheet" href="/CSS/index_styles.css" />
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
        <a href="/index.php"><img src="/Images/website_icon1.png" alt /></a>
      </div>
      <div class="brand-name-container"></div>
      <div class="nav-container">
        <nav>
          <button class="nav-button" id="home-button">Home</button>
          <button class="nav-button" id="about-button"><?= $translator->get('nav-bar2') ?></button>
          <button class="nav-button" id="contact-button">Contact</button>
          <!-- <button class="nav-button" id="portfolio-button">Portfolio</button> -->
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
          <hr />
        </h2>
        <h3 id="title-header3">
          Junior <br> Web
          Developer
        </h3>
        <p id="title-paragraph"><?= $translator->get('title-paragraph') ?></p>

        <button class="button-layout" style="z-index: 999;" onclick="window.location.href='index.php#all-Content'">Mijn werk</button>
      </div>

      <div id="all-Content">
        <div id="intro-skills-container">
          <div id="skills-container">
            <h3>Skills</h3>
            <svg class="chart" viewBox="-50 -40 300 300">
              <!-- Radar chart background -->
              <polygon
                points="100,20 180,80 150,170 50,170 20,80"
                fill="rgb(32, 40, 47)"
                stroke="#ccc"
                stroke-width="1" />
              <polygon
                points="100,50 160,86 145,163 73,140 40,86"
                fill="rgb(245, 246, 227)"
                stroke="#0066cc"
                stroke-width="2" />

              <!-- Axes -->
              <line
                x1="100"
                y1="104"
                x2="100"
                y2="20"
                stroke="#000"
                stroke-width="1" />
              <line
                x1="100"
                y1="104"
                x2="180"
                y2="80"
                stroke="#000"
                stroke-width="1" />
              <line
                x1="100"
                y1="104"
                x2="150"
                y2="170"
                stroke="#000"
                stroke-width="1" />
              <line
                x1="100"
                y1="104"
                x2="50"
                y2="170"
                stroke="#000"
                stroke-width="1" />
              <line
                x1="100"
                y1="104"
                x2="20"
                y2="80"
                stroke="#000"
                stroke-width="1" />

              <!-- Labels -->
              <text class="chart-text" x="100" y="10"><?= $translator->get('chart-text1') ?></text>
              <text class="chart-text" x="200" y="65"><?= $translator->get('chart-text2') ?></text>
              <text class="chart-text" x="145" y="190"><?= $translator->get('chart-text3') ?></text>
              <text class="chart-text" x="45" y="190"><?= $translator->get('chart-text4') ?></text>
              <text class="chart-text" x="-5" y="60" text-anchor="start">
                <tspan x="0" dy="0">Aanpassings</tspan>
                <tspan x="-3" dy="1.2em">vermogen</tspan>
              </text>
            </svg>
          </div>
          <div id="skills-text-container">
            <div class="skills-text">
              <h4>Problem Solving</h4>
              <p>
                Ik ben een probleemoplosser die altijd op zoek is naar de beste oplossing voor elk probleem. Ik ben in staat om snel en effectief te reageren op uitdagingen en ik ben niet bang om nieuwe dingen uit te proberen.
              </p>
            </div>
            <div class="skills-text">
              <h4>Autonomie</h4>
              <p>
                Ik ben in staat om zelfstandig te werken en mijn eigen beslissingen te nemen. Ik heb de discipline en motivatie om mijn werk op tijd af te krijgen zonder dat iemand me hoeft te controleren.
              </p>
            </div>
            <div class="skills-text">
              <h4>Leergierigheid</h4>
              <p>
                Ik ben altijd op zoek naar manieren om mijn vaardigheden en kennis uit te breiden. Ik ben bereid om nieuwe technologieën en tools te leren en ik ben niet bang om buiten mijn comfortzone te treden.
              </p>
            </div>
            <div class="skills-text">
              <h4>Communicatie</h4>
              <p>
                Ik ben in staat om effectief te communiceren met zowel technische als niet-technische mensen. Ik kan complexe ideeën eenvoudig uitleggen en ik ben altijd bereid om naar anderen te luisteren.
              </p>
            </div>
            <div class="skills-text">
              <h4>Aanpassingsvermogen</h4>
              <p>
                Ik kan me snel aanpassen aan veranderingen in de omgeving of het project. Dit stelt me in staat om flexibel te blijven en effectief samen te werken met anderen, ongeacht hun achtergrond of ervaring.
              </p>
            </div>
          </div>

        </div>
      </div>

      <div class="main-portfolio-container">
        <div>
          <h3>Projecten</h3>
        </div>
        <div class="slider">
          <div class="slide-track">
            <div class="slide">
              <a
                href="https://fittingly-php.azurewebsites.net"
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
                  alt /></a>
                <div class="hover-message">Work in progress</div>
              </div>
            </div>
            <div class="slide">
              <div class="img-container">
                <img
                  class="slideimg" id="portfolio-ashray-img"
                  src="/Images/index_Foto_Ashray.png"
                  alt />
                <div class="hover-message">Work in progress</div>
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
                href="https://fittingly-php.azurewebsites.net"
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
                  alt /></a>
                <div class="hover-message">Work in progress</div>
              </div>
            </div>

            <div class="slide">
              <div class="img-container">
                <img
                  class="slideimg" id="portfolio-ashray-img"
                  src="/Images/index_Foto_Ashray.png"
                  alt />
                <div class="hover-message">Work in progress</div>
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
                href="https://fittingly-php.azurewebsites.net"
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
                  alt /></a>
                <div class="hover-message">Work in progress</div>
              </div>
            </div>

            <div class="slide">
              <div class="img-container">
                <img
                  class="slideimg" id="portfolio-ashray-img"
                  src="/Images/index_Foto_Ashray.png"
                  alt />
                <div class="hover-message">Work in progress</div>
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
                href="/https://fittingly-php.azurewebsites.net"
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
                  alt /></a>
                <div class="hover-message">Work in progress</div>
              </div>
            </div>

            <div class="slide">
              <div class="img-container">
                <img
                  class="slideimg" id="portfolio-ashray-img"
                  src="/Images/index_Foto_Ashray.png"
                  alt />
                <div class="hover-message">Work in progress</div>
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
  </main>

  <footer>
    <?php include 'footer.php'; ?>
  </footer>

  <script src="/JavaScript/script.js"></script>

</body>

</html>