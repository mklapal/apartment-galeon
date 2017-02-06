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
      <h1>Apartment Galeon</h1>
      <p>
      Hezký byt v přímořském španělském městě Torrevieja u Středozemního moře - to je Apartmán Galeon. Objevte pobřeží Costa Blanca - dlouhé písečné pláže, rušná města, zákoutí s krásnou přírodou, ale i dobré víno či svačinky tapas. Nabízíme plně vybavený dvoupokojvý byt třeba právě pro Vaši dovolenou.
      </p>
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
        <h2>Lokalita</h2>
      </div>

      <p class="box-text">
      Torrevieja je přímořské město na španělském pobřeží Costa Blanca. Je oblíbené díky velmi příznivému klimatu, písečným plážím a přírodě v okolí. 
      </p>
      <p class="more">
        <a href="<?php echo URL; ?>/location">více >>> </a>
      </p>
    </section>

    <section class="box">
      <div class="header">
        <h2>Apartmán</h2>
      </div>

      <p class="box-text">
      Apartmán má dva dvoulůžkové pokoje, obytný prostor s kuchyňským koutem, koupelnu a terasu. Nachází se 5 minut od hlavních městských pláží s promenádou. 
      </p>
      <p class="more">
        <a href="<?php echo URL; ?>/apartment">více >>> </a>
      </p>
    </section>

    <section class="box">
      <div class="header">
        <h2>Pronájem</h2>
      </div>

      <p class="box-text">
      Byt nabízíme ke krátkodobému i dlouhodobému pronájmu. Umožňuje ubytování až šesti osob, je plně vybavený a připravený třeba pro Vaši dovolenou. 
      </p>
      <p class="more">
        <a href="<?php echo URL; ?>/rent">více >>> </a>
      </p>
    </section>

  </div>
</section>

<?php require("pages/template_footer.php"); ?>