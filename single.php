<?php get_header(); ?>
<!-- wrapper -->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php echo get_the_post_thumbnail(); ?>
            <div class="single-content">
                <h1><?php echo the_title(); ?></h1>
                <p><?php echo the_content(); ?></p> 
            </div>
        </div>
    </div>
</div>

<!-- wrapper -->
<?php get_footer(); ?>
