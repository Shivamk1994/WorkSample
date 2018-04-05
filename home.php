<?php
/*

 * Template Name: Home Template

*/
	get_header();
?>
  <section class="home_banner" style="background-image: url('<?php echo the_post_thumbnail_url();?>'">
    <span class="overlay"></span>
    <div class="content">
			<?php
			if( get_field('banner_sub_title') ) {
			?>
	      <div class="subtitle" data-aos="fade-right"><?php the_field('banner_sub_title'); ?></div>
			<?php
			}

			if( get_field('banner_main_title') ) {
			?>
      <h1 class="title" data-aos="fade-left"><?php the_field('banner_main_title'); ?></h1>
			<?php
			}

			if( get_field('banner_button_text') ) {
			?>
      <a href="#latest_projects" class="a-btn anima">
        <span class="a-btn-line"></span>
        <?php the_field('banner_button_text'); ?>
      </a>
			<?php
			}
			?>
    </div>
  </section>

  <section class="about">
    <div class="container">
      <div class="heading center dark">
				<?php
				if( get_field('about_title') ) {
				?>
        <div class="subtitle">
          <?php the_field('about_title'); /*$field = get_field_object('about_title'); echo $field['label'];*/ ?>
        </div>
				<?php
				}

				if( get_field('about_main_heading') ) {
				?>
        <h2 class="title">
          <?php the_field('about_main_heading'); ?>
        </h2>
				<?php
				}

				if( get_field('about_content') ) {
				?>
        <div class="content">
          <p>
						<?php the_field('about_content'); ?>
          </p>
        </div>
				<?php
				}
				?>
      </div>
    </div>
  </section>


	<section class="last_project" id="latest_projects">
		<div class="container">
			<div class="title"><?php the_field('latest_title'); ?></div>
			<div class="services_grid">
				<?php
						$count = 1;
            query_posts(array('post_type' => 'LatestProjects','orderby' => 'title','post_status'=>'publish','order'=>'DESC','posts_per_page'=>6));
            if(have_posts()) : while(have_posts()) : the_post();

						if($count == 1) {
							?>
						<div class="row">
							<?php
						}
        	?>


						<div class="col-sm-4">
							<div class="single_grid_wrapper" data-aos="zoom-in-up" data-aos-duration="500">
								<a href="<?php echo get_post_permalink(); ?>" class="a_tag">
									<div class="image_contain" style="background-image: url('<?php echo the_post_thumbnail_url();?>'"></div>
								</a>
								<div class="project-grid-item-content">
									<h4 class="project-grid-item-title">
										<a href="<?php echo get_post_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h4>
									<div class="project-grid-item-category"><?php echo the_field('post_location'); ?></div>
								</div>
							</div>
						</div>

						<?php
						if($count == 3) {
							$count = 0;
							?>
						</div>
							<?php
						}
						$count++;
            endwhile;
            endif;
            wp_reset_query();
        ?>

				<div class="btn_container">
					<a href="<?php the_field('latest_button_link'); ?>" class="a-btn anima black">
						<span class="a-btn-line"></span>
						<?php the_field('latest_button_text'); ?>
					</a>
				</div>

			</div>
		</div>
	</section>

<?php
	get_footer();
?>
