<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <title>TTV</title>

</head>
<body>
  <!-- dit is de php code voor mijn nav bar-->
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
   
    <!-- dit de de php code waar die de content ophaalt en in een div zit-->
 <div>
    <?php echo get_the_content(); ?>
 </div>
 
  
</body>
</html>


    <?php
wp_head();
?>