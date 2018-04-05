<?php
/*

 * Template Name: Services Template

*/

	get_header();
?>

<section class="listing">
  <div class="container">

		<?php
				$count = 0;
				query_posts(array('post_type' => 'Services','orderby' => 'title','post_status'=>'publish','order'=>'DESC','posts_per_page'=>-1));
				if(have_posts()) : while(have_posts()) : the_post();
				if($count%2 == 0) {
					?>
					<div class="row margin_bottom">
						<div class="col-sm-7">
							<div class="image_container" data-aos="fade-right">
								<a href="<?php echo get_post_permalink(); ?>"><img class="img img-responsive" src="<?php echo the_post_thumbnail_url();?>" /></a>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="content_container pad_left" data-aos="fade-left">
								<div class="location"><?php the_field('post_location'); ?></div>
								<div class="title"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></div>
								<div class="excerpt">
									<?php the_excerpt(); ?>
								</div>
								<a href="<?php echo get_post_permalink(); ?>" class="a_tag">
									<span class="arrow-right"></span>
									Read
								</a>
							</div>
						</div>
					</div>
					<?php
				}else {
				?>
				<div class="row margin_bottom">
					<div class="col-sm-7 col-sm-push-5">
						<div class="image_container" data-aos="fade-left">
							<a href="<?php echo get_post_permalink(); ?>"><img class="img img-responsive" src="<?php echo the_post_thumbnail_url();?>" /></a>
						</div>
					</div>
					<div class="col-sm-5 col-sm-pull-7">
						<div class="content_container pad_right" data-aos="fade-right">
							<div class="location"><?php the_field('post_location'); ?></div>
							<div class="title"><a href="<?php echo get_post_permalink(); ?>"><?php the_title(); ?></a></div>
							<div class="excerpt">
								<?php the_excerpt(); ?>
							</div>
							<a href="<?php echo get_post_permalink(); ?>" class="a_tag">
								<span class="arrow-right"></span>
								Read
							</a>
						</div>
					</div>
				</div>
				<?php
				}

				$count++;
				endwhile;
				endif;
				wp_reset_query();
				?>

  </div>
</section>

<?php
  get_footer();
?>
