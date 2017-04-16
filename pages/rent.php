<?php 

require("../config.php");
$lang = "";
$menu = "rent";
require("../pages/template_header.php");

?>

<section class="text">
  <div class="wrapper">

    <div class="right-side">

      <section class="js-position js-section">
        <div class="header">
          <h1>Pronájem</h1>
        </div>

        <div class="p-wrap">
        
        <img src="<?php echo(URL); ?>/content/logo.png" class="" alt="MOSITAN VUOKRAUS" />

        <p>
          Apartmán Galeon nabízíme ke krátkodobému i dlouhodobému pronájmu. Pronájem většinou zajišťuje místní kancelář MOSITAN VUOKRAUS, která nemovitost spravuje. Každého hosta přivítají, mohou zajistit dopravu z letiště, předají klíče od bytu a rádi s čímkoliv pomůžou, jakékoliv případné problémy dokáží obratem vyřešit. 
        </p>

        <p>
          Ceny a obsazenost jsou dostupné v rezervačním systému:<br>
          <a href="http://goo.gl/LmBBRW" target="_blank">>> MOSITAN VUOKRAUS</a><br>
        </p>

        <p>
          V případě dotazů se neváhejte obrátit na majitele:<br>
          Martina Staroňová<br>
          Miroslav Staroň<br>
          <a href="mailto:info@apartment-galeon.com">info@apartment-galeon.com</a><br>
          <br>
          <br>
          <br>
          <br>
        </p>

        </div>

        <?php require("template_form.php"); ?>

      </section>

    </div>

  </div>
</section>

<?php require("../pages/template_footer.php"); ?>