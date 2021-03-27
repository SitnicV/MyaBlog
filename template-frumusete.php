<?php
/**
 * Template name: Frumusete
 */
get_header();
?>
<div class="container mb-4">


<div class="row">




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php

if ( has_post_thumbnail() ) {
  $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
} else {
  $attachment_image = "{path to no image}";
}

?>

<div class="col-sm-6">


<div class="card-receta  ">
<a class="card-receta__link" href="<?php the_permalink(); ?>">
<div class="row g-0">
    <div class="col-md-4" >
      <div class="card-receta__image" style="background-image:url('<?php echo  $attachment_image; ?>'); background-size:cover; background-position:center center; height:100%"></div>
    </div>
    <div class="col-md-8">
      <div class="card-receta__body">
        <div class="card-receta__title"><?php the_title(); ?></div>
         <p  class="card-receta__desc"><?php the_excerpt(); ?></p>
         <button class="btn-receta">Mai mult</button>
         </div>
    </div>
  </div>
  </a>
</div>


</div>




	
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>

<div class="row">

<div class="col-12 text-center">

<?php kriesi_pagination(); ?>

</div>

</div>

</div>
<?php
get_footer();