<?php /* Template Name: Contact Page */ get_header(); ?>
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
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3441.7665253176606!2d-86.39582168487682!3d30.38598698175928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88915b61fef420b3%3A0x3c39d2ba14543458!2s13370+US-98%2C+Miramar+Beach%2C+FL+32550!5e0!3m2!1sen!2sus!4v1532554629447" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-xs-12 col-sm-6 box">
                <img src="/wp-content/uploads/2018/09/bldg.jpg">
            </div>
            <div class="co-xs-12 col-md-6 col-md-push-6">
                <div class="content contact-info">
                    <h2>BONTEMPS INTERIORS</h2>
                    <a href="https://www.google.com/maps/place/13370+US-98,+Miramar+Beach,+FL+32550/@30.385987,-86.3958217,17z/data=!3m1!4b1!4m5!3m4!1s0x88915b61fef420b3:0x3c39d2ba14543458!8m2!3d30.385987!4d-86.393633">13370 W US Highway 98 <br>Miramar Beach, FL 32550</a>
                    <p><strong>PHONE: </strong><a href="tel:850-279-6612">850.279.6612</a></p>
                    <p><strong>BUSINESS HOURS: </strong><br>M - F 10am - 6pm<br>Sat. 10am - 6pm<br>Sunday Closed</p>
                    <p><strong>EMAIL: </strong><a href="mailto:info@bontempsinteriors.com">Info@BontempsInteriors.com</a></p>
                </div>
            </div>
            <div class="co-xs-12 col-md-6 col-md-pull-6">
                <div class="content">
                    <h2>Send Us A Message</h2>
                    <?php echo do_shortcode('[contact-form-7 id="16" title="Contact Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>