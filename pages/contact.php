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
        <div class="contact-box">

          <h2>Vlastník</h2>

          <p>
          <br>
          Miroslav Staroň<br>
          Martina Staroňová<br>
          <!--T: +420 123 456 789<br--><br>
          E: <a href="mailto:info@apartment-galeon.com">info@napartment-galeon.com</a><br>
          </p>

        </div>
        
        <div class="contact-box">

          <h2>Rezervace</h2>

          <p>
          <br>
          Mositan Vuokraus Torrevieja<br>
          <br>
          rezervační formulář a dostupnost:<br>
          <a href="http://goo.gl/LmBBRW" target="_blank">Apartment Galeon - REF.VA005 EDIF. BAHIA III</a><br>
          </p>

        </div>
      </div>

      <?php require("template_form.php"); ?>

    </div>

  </div>
</section>

<?php require("../pages/template_footer.php"); ?>