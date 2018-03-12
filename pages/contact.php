<?php 

require("../config.php");
$lang = "";
$menu = "contact";
require("../pages/template_header.php");

?>

<section class="text">
  <div class="wrapper">

    <div class="right-side">

      <div class="header">
        <h1>Kontakt</h1>
      </div>

      <div class="contact-wrapper">
        
          <p>
          <br>
          Ing. Martina Staroňová<br>
          T: +420 732 255 129<br>
          E: <a href="mailto:info@apartment-galeon.com">info@apartment-galeon.com</a><br>
          </p>

      </div>

      <?php require("template_form.php"); ?>

    </div>

  </div>
</section>

<?php require("../pages/template_footer.php"); ?>