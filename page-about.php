<?php /* Template Name: About Page */ get_header(); ?>
<section class="title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1><?php echo the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="hr">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <hr>
            </div>
        </div>
    </div>
</section>
<div class="about">
    <section class="ip-hero">
        <img src="/wp-content/uploads/2018/09/7.jpg">
    </section>
    <section class="section-1">
        <div class="inner-container">
            <img src="/wp-content/uploads/2018/07/ab.png">
            <p><?php echo rwmb_meta('our_about-intro'); ?></p>
        </div>
    </section> 
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 box">
                    <img src="/wp-content/uploads/2018/09/Angela.jpg">
                </div>
                <div class="col-xs-12 col-md-6 box">
                    <div class="content">
                        <h2>About <span>Angela Bontemps</span></h2>
                        <hr>
                        <p><?php echo rwmb_meta('our_angela-bio'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-3">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hr>
                    <h1>Our Team</h1>
                </div>
                <?php
                //Post loop
                $args = array (
                    'post_type' => array( 'team-member' ),
                    'posts_per_page' => 999,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $query = new WP_Query($args);
                if ($query->have_posts() ) :
                    while ($query->have_posts() ) : $query->the_post();
                        ?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="team-member">
                                <a href="<?php echo get_the_permalink(); ?>"></a>
                                <?php the_post_thumbnail(); ?>
                                <h3><?php echo the_title(); ?></h3>
                            </div>
                        </div>
                        <?php
                // End Loop
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <section class="section-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <hr>
                    <h1>Featured Artists</h1>
                </div>
                <?php
                //Post loop
                $args = array (
                    'post_type' => array( 'featured-artist' ),
                    'posts_per_page' => 999,
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                );
                $query = new WP_Query($args);
                if ($query->have_posts() ) :
                    while ($query->have_posts() ) : $query->the_post();
                        ?>
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="artist">
                                <?php the_post_thumbnail(); ?>
                                <h3><?php echo the_title(); ?></h3>
                                <p class="location"><?php echo rwmb_meta('our_artist-location'); ?></p>
                                <p><?php echo the_content(); ?></p>
                            </div>
                        </div>
                        <?php
                // End Loop
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>