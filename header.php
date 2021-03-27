<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body style="padding-top:92px">
<div class="bg-main  position-fixed p-lg-" style="z-index:2; width:100%; top:0; box-shadow:0 0 5px #444">
<div class="container">

<div class="row">

<div class="col-8 col-lg-3"><a class="mt-3 mt-lg-1 d-block text-decoration-none  text-light logo" style="font-size:2rem" href="/"><strong>Mya Sun</strong></a></div>
<div class="col-4 d-lg-none text-right navbar-expand-lg">  <button type="button" class="navbar-toggler mt-4 float-end" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                    <span class="btn btn-success"><i class="icofont-navigation-menu text-light"></i></span>
                   
                </button></div>
<div class="col-lg-9">
<div class="navbar navbar-expand-lg float-lg-end " role="navigation">
       
              
         
     
            <div class="collapse navbar-collapse" id="mainmenu">
                <?php  /* menu */
                    wp_nav_menu( array(
                                'menu'              => 'top_menu',
                                'theme_location'    => 'top_menu',
                                'depth'             => 5,
                             
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                    ); 
                 ?>
            </div>
        </div><!-- Navigation -->
 
 



 
</div>

</div>
</div>

</div>


<div class="container mt-4 mb-1 d-none">
<div class="row">
<div class="col-6"></div>
<div class="col-6"><form action="#" class="position-relative">

<input class="form-control" type="text" name="s" value="">
<input value="Caută" class="position-absolute btn btn-success" style="top:0; right:0" type="submit">
</form></div>

</div>


</div>
