<?php get_header(); ?>
<?php
$banner_image = get_field('banner_image');
$banner_url = $banner_image['sizes']["background-fullscreen"];
?>
<div class="panel parallax page-title" data-bleed="80" data-parallax="scroll" data-image-src='<?php echo $banner_url; ?>'>
	<h1><?php the_title(); ?></h1>
</div>
<main class="page" id="content">

	<div class="container">
		<div class="row">
			<div class="columns-12">
				<h2><?php the_field('page_callout'); ?></h2>
				<!-- <//?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<//?php the_content(); ?>

				<//?php endwhile; ?> -->
			</div>
			<?php
              if (have_rows('page_columns')):
                  $col_cnt = 0;
                      while(have_rows('page_columns')):the_row();
                          $col_cnt++;
                          $rows = get_field('page_columns');
                          $row_count = count($rows);
                          $column_content = get_sub_field('column_content');
                          $classes = '';
                          if($row_count == 2){
                              $classes= 'class="columns-6"';
                          } elseif($row_count == 3){
									  $classes='class="columns-4"';
								  }
          ?>
              <div <?php echo $classes; ?> >
                  <div class="the-content">
                      <?php echo $column_content; ?>
                  </div>
              </div>
          <?php endwhile; endif; ?>
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
