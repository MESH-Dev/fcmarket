<?php get_header(); ?>
<div class="panel parallax page-title" data-bleed="80" data-parallax="scroll" data-image-src='<?php bloginfo('template_directory'); ?>/img/bg2.jpg'>
	<h1><?php the_title(); ?></h1>
</div>
<main class="page" id="content">

	<div class="container">
		<div class="row">
			<div class="columns-12">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>

			<!-- <div class="columns-3">


				<//?php get_sidebar(); ?>
			</div> -->

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
