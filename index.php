<?php 

require("config.php");
$lang = "en";
$menu = "index";
$homepage = true;
require("pages/template_header.php");

?>

        <section class="main js-background">
            <div class="wrapper">
            
                <article class="box1">
                    <div class="logo-element"></div>
                    <h1>Apartment Galeon</h1>
                    <p>
                        text intro
                    </p>
                    <div class="logo-element"></div>
                    
                </article>

                <div class="bcg-buttons">
                    <ul>
                        <li class="js-bcg active">0</li>
                        <li class="js-bcg">1</li>
                        <li class="js-bcg">2</li>
                        <li class="js-bcg">3</li>
                    </ul>
                </div>

            </div>

        </section>

        <section class="text">
            
            <div class="wrapper">

            <section class="box">
                <div class="header">
                <h2>Title 1</h2>
                <div class="logo-element"></div>
                </div>

                <p class="box-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>
                <p class="more">
                    <a href="<?php echo URL; ?>/prodej">více >>> </a>
                </p>
            </section>

            <section class="box">
                <div class="header">
                <h2>Title 2</h2>
                <div class="logo-element"></div>
                </div>

                <p class="box-text">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <img class="img-center" src="<?php echo(URL); ?>/content/mapa.png" alt="map" />
                </p>
                <p class="more">
                    <a href="<?php echo URL; ?>/lokalita">více >>> </a>
                </p>
            </section>
            
            <section class="box">
                <div class="header">
                <h2>Title 3</h2>
                <div class="logo-element"></div>
                </div>

                <p class="box-text">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="more">
                    <a href="<?php echo URL; ?>/standardy">více >>> </a>
                </p>
            </section>

            </div>
        </section>

<?php require("pages/template_footer.php"); ?>