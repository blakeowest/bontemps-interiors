<?php /* Template Name: Home */ get_header(); ?>
<section class="hero-section">
</section>
<section class="section-1">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1><span>Welcome to</span><br> BONTEMPS INTERIORS</h1>
			</div>
			<div class="col-xs-12 col-md-6 left">
				<div class="content">
					<p><?php echo rwmb_meta('our_intro-head-left'); ?></p>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 right">
				<div class="content">
					<p><?php echo rwmb_meta('our_intro-head-right'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-2">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pic-column box">
					<a data-fancybox="gallery" href="/wp-content/uploads/2018/07/46-Bennett_20180716_357.jpg"><img src="/wp-content/uploads/2018/07/home-img1.jpg"></a>
				</div>
				<div class="pic-column box">
					<a data-fancybox="gallery" href="/wp-content/uploads/2018/09/8-full.jpg"><img src="/wp-content/uploads/2018/09/8.jpg" style="margin-bottom: 1.5%;"></a>
					<a data-fancybox="gallery" href="/wp-content/uploads/2018/07/46-Bennett_20180716_275.jpg"><img src="/wp-content/uploads/2018/07/home-img3.jpg"></a>
				</div>
				<div class="pic-column box">
					<a data-fancybox="gallery" href="/wp-content/uploads/2018/09/16-full.jpg"><img src="/wp-content/uploads/2018/09/16.jpg"></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hr">
	<div class="container">
		<hr>
	</div>
</section>
<section class="section-3">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-push-6 box">
				<div class="content">
					<?php echo rwmb_meta('our_sec-3-content'); ?>
					<a href="/contact"><button>Get Started Today</button></a>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-md-pull-6 box">
				<a data-fancybox="gallery" href="/wp-content/uploads/2018/09/21-full.jpg"><img src="/wp-content/uploads/2018/09/21.jpg"></a>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>