
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Caveat&family=Edu+SA+Beginner&family=Gentium+Plus:ital@1&family=Indie+Flower&family=Libre+Franklin:wght@100&display=swap" rel="stylesheet">
    <meta name="description"
        content="Bonjour, je m'appelle Lonicera et je viens tout juste de terminer ma formation de développeur web.">
    <meta name="author" content="Bétrancourt Lonicera">
    <link rel="stylesheet" href="./sass/index.css">
    <link rel="stylesheet" href="./fa/css/all.css">
    <title>Lonicera</title>
</head>

<body class="light">

    <nav>
        <a href="#" class="logo" aria-label="visit home">
            <img src="./img/wolf.logo.png" alt="logo icon">
            <span>Lonicera</span>
        </a>
        
        <i class="fas fa-ellipsis-v">
            <a href="#" class="menu"></a>
        </i>

        <div class="links">
            <a href="#" class="home active">Home</a>
            <a href="#about" class="about">About</a>
            <a href="#site" id="deroule" class="sites">Sites</a>
            <a href="#" class="langage">Langues</a>
            
            <a href="#" class="day">&#x1F311</a>
        </div>
    </nav>

    <main>
        <section id="accueil" class="accueil">
            <h1 class="short-message"></h1>
        </section>

        <!-- <i class="fal fa-phone-laptop"></i> -->



        <section id="about" class="info">
            <svg viewBox="0 0 100.6 107.6" id="svgf">
                <path fill="none" stroke="black" stroke-width=".1" class="start-top" id="pathf" d="
                   M 10 40, 40 40
                   M 90 40, 60 40
                   
                " />
                <text x="44" y="40.5" fill="black" font-size="3" font-family="Libre Franklin" class="info-name">Lonicera</text>

                <text x="37" y="45" fill="black" font-size="3" font-family="Libre Franklin">Développeuse Web</text>

                <image xlink:href="./img/responsive.png" x="17" y="55" width="5" height="5" class="logo-responsive"></image>
                <text x="16" y="63" fill="black" font-size="1.5" font-family="Libre Franklin">Site Web
                    <tspan x="14" y="65">Full Responsive</tspan> 
                </text>

                <image xlink:href="./img/je-vous-aime.png" x="37" y="55" width="5" height="5"></image>
                <text x="33" y="63" fill="black" font-size="1.5" font-family="Libre Franklin">Plus qu'une passion</text>3.

                <image xlink:href="./img/time-and-calendar.png" x="57" y="55" width="5" height="5"></image>
                <text x="53" y="63" fill="black" font-size="1.5" font-family="Libre Franklin">Respect des délais</text>

                <image xlink:href="./img/tasse-a-cafe.png" x="77" y="55" width="5" height="5"></image>
                <text x="75" y="63" fill="black" font-size="1.5" font-family="Libre Franklin">Après l'effort
                    <tspan x="75" y="65">Le réconfort</tspan>
                </text>

                <path fill="none" stroke="black" stroke-width=".1" class="start-top" id="paths" d="
                   M 10 40, 10 100
                   
                " />
                <path fill="none" stroke="black" stroke-width=".1" class="start-top" id="patht" d="
                   M 90 40, 90 100
                " />
                <!-- 
                <path fill="none" stroke="black" stroke-width=".1" class="start-top" id="pathfo" d="
                   M 10 80, 40 80
                   M 90 80, 60 80
                   
                " />  -->


              </svg>

              <div class="infos-resp">
                  <h1 class="name-resp">Lonicera</h1>
              </div>

        </section>





        <section id="site" class="log">
            <!-- <p class="test">test</p> -->
            <div class="projects">
                <div class="opal" id="project">
                    <div class="project-img-opal">
                        <img src="./img/banner-opal.JPG" alt="" class="pic-opal">
                    </div>
                    <div class="contain-project">
                        <h1>Opal'Info</h1>
                        <p class="desc-opal">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores numquam sint excepturi vero pariatur illo.</p>
                        <a href="./pages/sites/opalinfo.html" class="more">Check</a>
                    </div>
                </div>

                <div class="truc" id="project">
                    <div class="project-img-truc">
                        <img src="./img/wall.jpg" alt="" class="pic-truc">
                    </div>
                    <div class="contain-project" id="contain-project-truc">
                        <h1>truC</h1>
                        <p class="desc-truc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ut inventore illum, veritatis dicta incidunt?</p>
                        <a href="./pages/sites/truc.html" class="more">Check</a>
                    </div>
                </div>

                <div class="nain" id="project">
                    <div class="project-img-nain">
                        <img src="./img/881259.png" alt="" class="pic-nain">
                    </div>
                    <div class="contain-project">
                        <h1>Nainsitution</h1>
                        <p class="desc-nain">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, iure modi quisquam alias odio soluta.</p>
                        <a href="./pages/sites/nain.html" class="more">Check</a>
                    </div>
                </div>

            </div>
        </section>

    </main>

        
            <footer>
                <div class="testfooter">
                    <p>bliblablou</p>
                    <p>palilou</p>
                </div>
            </footer>
        
    



</body>
<script src="./js/stockjs/jquery-3.6.0.min.js"></script>
<script src="./js/stockjs/jquery-ui-1.13.0/jquery-ui.js"></script>
<script src="./js/index.js"></script>

</html>