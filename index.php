<?php
require './include/header.php';
?>

<main>
    <img class="logo" src="./img/wolf.png" alt="">
    <div class="menu">
        <a class="home all" href="#">Home</a>
        <a class="cv all" href="./pages/cv.php">CV</a>
        <a class="about all" href="#">A propos</a>
    </div>
    <div class="projets">
        <a class="opal all" href="#op">Opal'Info</a>
        <a class="truc all" href="#tr">truC</a>
        <a class="nain all" href="#na">Nainstitution</a>
    </div>
</main>

<section id="op" class="pfolio">
    <h1>Opal'Info</h1>
</section>
<section id="tr" class="pfolio">
    <h1>truC</h1>
</section>
<section id="na" class="pfolio">
    <h1>Nainsitution</h1>
</section>



<?php
require './include/footer.php';
?>