<?php /* Template Name: Showroom Page */ get_header(); ?>
<section class="title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1><?php echo the_title(); ?></h1>
                <hr>
            </div>
        </div>
    </div>
</section>
<div class="showroom">
    <div class="wrapper">
        <section class="section-1">
            <a data-fancybox="gallery" href="/wp-content/uploads/2018/10/Dining-Room-full.jpg"><img class="img1" src="/wp-content/uploads/2018/10/Dining-Room.jpg"></a>
            <a data-fancybox="gallery" href="/wp-content/uploads/2018/10/Logo.jpg"><img class="img2" src="/wp-content/uploads/2018/10/Logo.jpg"></a>
            <p><?php echo rwmb_meta('our_textarea-1'); ?></p>
        </section>
        <section class="section-2">
            <p class="desktop"><?php echo rwmb_meta('our_textarea-2'); ?></p>
            <a data-fancybox="gallery" href="/wp-content/uploads/2018/10/End-Table-full.jpg"><img class="img3" src="/wp-content/uploads/2018/10/End-Table.jpg"></a>
            <p class="mobile"><?php echo rwmb_meta('our_textarea-2'); ?></p>
        </section>
        <section class="section-3">
            <a data-fancybox="gallery" href="/wp-content/uploads/2018/10/White-container-w-artichoke-full.jpg"><img class="img4" src="/wp-content/uploads/2018/10/White-container-w-artichoke.jpg"></a>
        </section>
        <section class="section-4">
            <a data-fancybox="gallery" href="/wp-content/uploads/2018/10/Living-full.jpg"><img class="img5" src="/wp-content/uploads/2018/10/Living.jpg"></a>
            <p><?php echo rwmb_meta('our_textarea-3'); ?></p>
        </section>
    </div>
</div>
<?php get_footer(); ?>