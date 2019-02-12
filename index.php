<?php 

// Advanced Custom Fields
$cat_image	=	get_field('cat_image');
$main_title	=	get_field('main_title');
$subtitle	=	get_field('subtitle');

get_header(); ?>

<div class="top">
<h1><?php echo $main_title; ?></h1>
<?php if (!empty($subtitle)) : ?><h2><?php echo $subtitle; ?></h2>
<?php endif; ?>
<!-- if user uploaded image -->

<?php if ( !empty($cat_image)) : ?><img src="<?php echo $cat_image; ?>" class="main-img img-fluid"/>
<?php endif; ?>
</div>

<div class="container">

<div class="info">

<div class="row">

<!-- features -->
<?php $loop = new WP_Query( array( 'post_type' => 'features', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="col-md-3"><i class="<?php the_field('feature_icon'); ?>"></i><p><?php the_title(); ?></p></div>

<?php endwhile; ?>
<!-- end features -->

</div>
</div>

<h3 style="text-align: center;">Other people think Oliver is purrfect, too.</h3>

<!-- testimonials -->

<div class="testimonial">
<div class="row">

<?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

<?php while( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="col-md-4 d-flex">
<div class="card">
<div class="card-body flex-fill">
<blockquote class="blockquote mb-0">
<p><?php the_content(); ?></p>
<footer class="blockquote-footer"><?php the_title(); ?></footer>
</blockquote>
</div>
</div>
</div>

<?php endwhile; ?>



</div>
</div>
<!-- end testimonials -->

</div>


<?php get_footer(); ?>
