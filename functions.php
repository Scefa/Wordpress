<?php
// dit de de stukje php voor om css te gebruiken in mijn wordpress//
add_action("wp_enqueue_scripts", "css");

function css(){
wp_enqueue_style("css1", get_template_directory_uri() . "./style.css");
}
// Dit is de functie voor mijn navbar om het de button voor "menu" te krijgen//
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => ( 'Header Menu' ),
        'extra-menu' => ( 'Extra Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );


   function ti_custom_javascript() {



    ?>

    <!-- stukje javascript voor de quote-->
        <script>
      
    // Array of e-sport quotes
 const quotes = [
  "In e-sport wordt niemand per ongeluk kampioen.",
  "Hard werken en toewijding banen de weg naar e-sportsglorie.",
  "E-sport is waar vaardigheid, strategie en vastberadenheid samenkomen.",
  "De sensatie van overwinning in e-sport is ongeëvenaard.",
  "E-sport is niet zomaar een spel; het is een manier van leven.",
  "Succes in e-sport vereist teamwork en communicatie.",
  "E-sport is meer dan alleen een hobby; het is een passie.",
  "De grenzen verleggen en records verbreken is wat e-sport drijft.",
  "In e-sport draait het om discipline en doorzettingsvermogen.",
  "E-sport is een arena waar kampioenen worden geboren en legendes worden gemaakt."
];
    

    // Funtie voor random quote
    function generateQuote() {
      const randomIndex = Math.floor(Math.random() * quotes.length);
      const quoteElement = document.getElementById('quote');
      quoteElement.textContent = quotes[randomIndex];
    }

    // add advent listeren naar de code zodat js kan zien wanneer je erop klikt
    const btn = document.getElementById('btn');
    btn.addEventListener('click', generateQuote);
  </script>
      
    <?php
}
add_action('wp_head', 'ti_custom_javascript');

