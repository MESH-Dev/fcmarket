<?php get_header(); ?>
<?php
$banner_image = get_field('banner_image');
// echo '<pre>';
// 	var_dump( $banner_image );
// echo '</pre>';
$banner_url = $banner_image['url'];
?>
<div class="panel parallax page-title" data-bleed="80" data-parallax="scroll" data-image-src='<?php echo $banner_url; ?>'>
	<h1><?php the_title(); ?></h1>
</div>
<main class="page" id="content">

	<div class="container">
		<div class="row">
			<div class="columns-12">
				<h2 class="page-callout"><?php the_field('page_callout'); ?></h2>
				<!-- <//?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<//?php the_content(); ?>

				<//?php endwhile; ?> -->
			</div>
		</div>
			<?php
				  if (have_rows('page_rows')):
                    $col_cnt = 0;
							 while(have_rows('page_rows')):the_row();
							 $col_cnt++;
							 $cols = get_sub_field('row_columns');
							 $column_count = count($cols);
							 $classes = '';
						   // var_dump($column_count);
							 if($column_count == 2){
								  $classes= 'class="columns-6"';
							 } elseif($column_count == 3){
								$classes='class="columns-4"';
						   }
			 ?>
			 <div class="row dynamic-row">
			<?php
              if (have_rows('row_columns')):
                      while(have_rows('row_columns')):the_row();
							 $row_column_content = get_sub_field('row_column_content');
          ?>
              <div <?php echo $classes; ?> >
                  <div class="text-column the-content">
                      <?php echo $row_column_content; ?>
                  </div>
              </div>
				  <?php endwhile; endif; ?>
			  </div>
          <?php endwhile; endif; ?>
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
