<?php 

require("../config.php");
$lang = "";
$menu = "apartment";
require("../pages/template_header.php");

?>

<section class="text">
  <div class="wrapper">

    <div class="right-side">

      <div class="header">
        <h1>Apartmán</h1>
      </div>

      <p>
      Apartmán má dva dvoulůžkové pokoje, obytný prostor s kuchyňským koutem, koupelnu a terasu. Nachází se 5 minut od hlavních městských pláží s promenádou, v klidnější městské ulici. Rohový bytový dům je s výtahem a velkou střešní terasou, parkování je možné v ulici.
      </p>
      
      <p>
      Apartmán je plně vybaven jako prázdninový byt - v kuchyňském koutu naleznete kompletní sadu nádobí, varnou desku, mikrovlnku, varnou konvici kávovar a pračku.
      Koupelna je vybvena vanou se sprchou, záchodem, bidetem, umyvadlem, nechybí úklidové potřeby včetně vysavače.
      V hlavní ložnici je umístěno dvojlůžko (140x190cm - standardní španělský rozměr), vestavěná šatní skříň a komoda, menší pokoj nabízí dvě samostatná lůžka (80x185cm). Lůžkoviny i ručníky jsou připraveny na místě k použití.
      V obytném prostoru je dále jídelní kout, rozkládací pohovka a přístup na terásku s posezením.
      </p>

      <p>
      V bytě je k dispozici vysokorychlostní internet a televize, vytápění a chlazení je možné pomocí klimatizační jednotky. Všechny místnosti mají okna opatřená vnějšími hliníkovými roletami.
      </p>

      <div class="p-center">

      <img src="<?php echo(URL); ?>/content/plan.jpg" class="" alt="Půdorys bytu" />

      </div>
      
      <div class="p-center">

      <?php
        $arr = [
          '01',
          '02',
          '03',
          '04',
          '05',
          '06',
          '07',
          '08',
          '09',
          '10',
          '11',
          '12',
          '13',
          '14',
          '15',
          '16',
          '17',
          '18'
        ];

        foreach ($arr as $value) {
          echo ('<a href="'.URL.'/images/apartment/'.$value.'.JPG" data-lightbox="images" class="photo">
            <img src="'.URL.'/images/apartment/'.$value.'_thumb.JPG" class="thumb" alt="photo" />
          </a>');
        }
      ?>
      
      </div>

    </div>

  </div>
</section>

<?php require("../pages/template_footer.php"); ?>