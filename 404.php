<?php get_header(); ?>
<div class="panel parallax page-title" data-bleed="80" data-parallax="scroll" data-image-src='<?php bloginfo('template_directory'); ?>/img/bg2.jpg'>
	<h1>Page Not Found</h1>
</div>
<main class="main404" id="content">
	<div class="container">
		<div class="row">
			<div class="columns-8">
				<p>The page you requested could not be found. Perhaps searching will help.</p>

				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</main><!-- End of Content -->

<?php get_footer(); ?>
