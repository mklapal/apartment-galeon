<?php 

require("../config.php");
$lang = "";
$menu = "location";
require("../pages/template_header.php");

?>

<section class="text">
  <div class="wrapper">

    <div class="right-side">

    <section class="js-position js-section">
      <div class="header">
        <h1>Position</h1>
      </div>

      <p>
      The residential project VINOHRADSKÁ 85 is located on the main east-west avenue of Vinohrady, <strong>Vinohradská Avenue</strong>, leading from Wenceslas Square to Žižkov and Strašnice,  in one of Prague’s most reputed residential and high-living areas in the city call <strong>Vinohrady</strong>. The residence VINOHRADSKÁ 85 is facing directly to the nice and pleasant park Svatopluka Čecha and is really close to the main green space in the area, “Riegrovy sady”.
      </p>
      <p>
      The square of “Jiřího z Poděbrad” with the modern and interesting church by Jože Plečnik built in 1932 is just 200 meters far, as well as “náměstí Míru”, the main square of Prague 2, with the Vinohrady Theatre and Gothic  Revival Saint Ludmila Church.
      </p>
      <p>
      The present-day district was originally part of the sparsely populated countryside outside the Prague. Change came through the decision of Emperor Charles IV in 1358 to establish vineyards around the city. Nowadays the high-quality housing, accessibility to the city centre, attractive parks, a good selection of restaurants, and good facilities make Vinohrady consistently popular among foreign and domestic residents.
      </p>

      <a href="<?php echo(URL); ?>/content/location_img_position.jpg" data-lightbox="image-1">
        <img src="<?php echo(URL); ?>/content/location_img_position.jpg" class="full-size" alt="position map" />
      </a>

    </section>

    </div>

  </div>
</section>

<?php require("../pages/template_footer.php"); ?>