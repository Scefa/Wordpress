<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css">
    

</head>
<body>
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
   
 <div>
    <?php echo get_the_content(); ?>
 </div>
 

</body>
</html>


    <?php
wp_head();
?>