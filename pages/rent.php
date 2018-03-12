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
        
        <p>
          Apartmán nabízíme ke krátkodobému i dlouhodobému pronájmu. Pronájem zahraničním klientům většinou zajišťuje místní kancelář, pro Čechy nabízíme možnost přímé domluvy s Českým majitelem a předání klíčů před odjezdem do Španělska (bez využití služeb místní kanceláře).
        </p>

        <div class="header">
          <h1>Ceny pronájmu</h1>
        </div>

        <p>
          <strong>Zima 1.10. – 31.5.</strong><br>
          1 týden: 4500,-Kč<br>
          2 týdny: 8500,-Kč<br>
          3 týdny: 12000,-Kč<br>
          <br>
          <strong>Léto 1.6. - 30.9.</strong><br>
          1 týden: 8500,-Kč<br>
          2 týdny: 16500,-Kč<br>
          3 týdny: 23000,-Kč<br>
          <br>
          + 60EUR / pobyt nechat při odjezdu v hotovosti v bytě (pokrývá všechny místní služby - energie, úklid, praní, internet)<br>
          <br>
          - V případě jiných délek pobytu bude cena dopočítána individuálně.<br>
          - Pro závaznou rezervaci je nutné uhradit 20% zálohu, která je při zrušení rezervace méně než 6 týdnů před zahájením pobytu nevratná.<br>
          - Před odjezdem je potřeba doplatit zbývající část peněz, obdržíte také detailní informace o pobytu, domluvíme se na předání klíčů.<br>
        </p>

        <div class="header">
          <h1>Orientační obsazenost</h1>
        </div>

        <p>
          Ceny a obsazenost jsou dostupné v rezervačním systému:<br>
          <a href="http://goo.gl/LmBBRW" target="_blank">>> MOSITAN VUOKRAUS</a><br>
        </p>
        <!--
        <div class="calendar-box">
          <?php
          $homepage = file_get_contents('http://goo.gl/LmBBRW');

          $content = substr($homepage, strpos($homepage, '<div id="loadcalendar">'));
          $content = substr($content, 0, strpos($content, '<div style="clear: both; margin-top:5px;">') - 42);
          echo $content;
          ?>
        </div>
        -->
  
        <div class="header">
          <h1>Rezervace</h1>
        </div>

        <p>
          V případě dotazů se neváhejte obrátit na majitele:<br>
          Ing. Martina Staroňová<br>
          T: +420 732 255 129<br>
          E: <a href="mailto:info@apartment-galeon.com">info@apartment-galeon.com</a><br>
          <br>
          Nebo nás kontaktujte prostřednictvím webového formuláře:
        </p>

        </div>

        <?php require("template_form.php"); ?>

      </section>

    </div>

  </div>
</section>

<?php require("../pages/template_footer.php"); ?>