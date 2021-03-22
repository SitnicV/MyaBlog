<?php get_header(); ?>

<div class="container-fluid g-0">
<div class="row g-0">



<div class="col-sm-6">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
if ( has_post_thumbnail() ) {
    $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
  } else {
    $attachment_image = "{path to no image}";
  }
?>
<div class="sigle-post__content">
<h1 class="single-post__title mb-4"><?php the_title(); ?></h1>
<?php the_content(); ?>
</div>
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>
<div class="col-6 d-none d-sm-block">
    
    <div style="position:fixed;top:0;right:0;width:50%;;background-image:url('<?php echo  $attachment_image; ?>'); background-size:cover; background-position:center center; height:100vh; background-attachement:fixed">

</div>

</div>
</div>
</div>
<?php get_footer(); ?>