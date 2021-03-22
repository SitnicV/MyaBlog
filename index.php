<?php get_header(); ?>


<div class="container">


<div class="row">




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="col-4">


<div class="card">
<a href="<?php the_permalink(); ?>">
<div class="row g-0">
    <div class="col-md-4">
      <img src="..." alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_excerpt(); ?></p>
 
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

<div class="col-12">

<?php $args = array(
    'base'               => '%_%',
    'format'             => '?paged=%#%',
    'total'              => 1,
    'current'            => 0,
    'show_all'           => false,
    'end_size'           => 1,
    'mid_size'           => 2,
    'prev_next'          => true,
    'prev_text'          => __('« Previous'),
    'next_text'          => __('Next »'),
    'type'               => 'plain',
    'add_args'           => false,
    'add_fragment'       => '',
    'before_page_number' => '',
    'after_page_number'  => ''
); ?>

</div>

</div>

</div>



<?php get_footer(); ?>