<?php 

require("../config.php");
$lang = "";
$menu = "location";
require("../pages/template_header.php");

?>

<section class="text">
  <div class="wrapper">

    <div class="right-side">

    <section class="">
      <div class="header">
        <h1>Lokalita</h1>
      </div>

      <div class="p-wrap">

      <img src="<?php echo(URL); ?>/content/spain.jpg" class="" alt="Španelsko" />

      <p>
        Torrevieja je přístavní město v jihovýchodním Španělsku na pobřeží Costa Blanca. Leží asi 50km jižně od Alicante a patří tak do provincie Alicante, která spadá do Valencijského společenství (Comunudad Valenciana). Torrevieja má dle zdrojů 100 000 obyvatel, ale mimo to je druhým domovem v zimě mnoha Skandinávců, Britů či Němců a v létě vnitrozemských Španělů. 
      </p>
      <p>
        Toto místo je unikátní díky velmi příznivému mikroklimatu, které je ovlivněno nejen Středozemním mořem, ale za západní strany také slanými lagunami (přírodní park park Lagunas de la Mata a Torrevieja). Toto zdravé mikroklima je podtrženo mimořádně stabilními teplotami.
      </p>
      <p>
        Právě těžba soli nastartovala v 19. století dynamický rozvoj původní rybářské osady. V posledních letech je však rychlý rozvoj způsoben především turismem - město je díky své poloze, svému podnebí, písečným plážím i ekonomické dostupnosti oblíbeným útočištěm penzistů i rodin s dětmi.
      </p>

      </div>

    </section>

    <section class="">
      <div class="header">
        <h1>Calle Galeon</h1>
      </div>

      <div class="p-wrap left">

      <a href="https://goo.gl/maps/PEXjfXsfMV32" target="_blank">
        <img src="<?php echo(URL); ?>/content/calle_galeon.jpg" class="" alt="Calle Galeon" />
      </a>
      
      <p>
        Apartmán se nachází v prvním patře bytového domu v ulici Galeon (Calle Galeon). Ulice je  v klidnější části města v blízkosti hlavní promenády, pláží, restaurací, barů a kaváren.  
      </p>

      <p>
        Avenida de las Habaneras: 200m<br>
        /hlavní městská třída - obchody, služby, MHD/
      </p>

      <p>
        Playa del Cura: 500m<br>
        /pěší promenáda, písečné pláže, restaurace, kavárny/
      </p>

      <p>
        Plaza de la Constitutión: 1,5km<br>
        /centrum města, restaurace, bary, centrální tržnice, pěší zóna/ 
      </p>

      <p>
        Playa de Los Locos: 700m<br>
        Playa La Mata: 4km
      </p>

      <p>
        Městské trhy: 500m<br>
        /oblíbené páteční trhy nabízí místní ovoce, zeleninu, olivy, sýry, churros ale i oděvy nebo potřeby pro domácnost/
      </p>

      </div>

      <div class="p-center">

      <?php
        $arr = [
          'plan',
          'plan',
          'plan',
          'plan',
          'plan',
          'plan',
          'plan',
          'plan'
        ];

        foreach ($arr as $value) {
          echo ('<a href="'.URL.'/content/'.$value.'.jpg" data-lightbox="images" class="photo">
            <img src="'.URL.'/content/'.$value.'.jpg" class="thumb" alt="photo" />
          </a>');
        }
      ?>
      
      </div>

    </section>

    </div>

  </div>
</section>

<?php require("../pages/template_footer.php"); ?>