<?php
/*

 * Template Name: About Template

*/

	get_header();
?>

<section class="home_banner" style="background-image: url('<?php echo the_post_thumbnail_url();?>'">
  <span class="overlay"></span>
  <div class="content">
    <?php
    if( get_field('contact_banner_sub_heading') ) {
    ?>
      <div class="subtitle" data-aos="fade-right"><?php the_field('contact_banner_sub_heading'); ?></div>
    <?php
    }

    if( get_field('contact_banner_title') ) {
    ?>
    <h1 class="title" data-aos="fade-left"><?php the_field('contact_banner_title'); ?></h1>
    <?php
    }
    ?>
  </div>
</section>

<section class="About_main">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="grid" data-aos="zoom-in-left">
					<div class="grid_container">
						<div class="grid top_grid">
							<?php
							if( have_rows('about_count_section') ):
			          while ( have_rows('about_count_section') ) : the_row();
								?>
							<div class="inner_sec left_sec">
								<h1><?php the_sub_field('about_count'); ?></h1>
								<div class="desc"><?php the_sub_field('about_title'); ?></div>
							</div>
								<?php
							endwhile;
						endif;
						?>
						</div>
						<img src="<?php echo the_field('about_background_image');?>" class="img img-responsive" />
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="grid_right">
					<div class="about_content" data-aos="fade-left">
						<?php
						if( get_field('contact_sub_text') ) {
						?>
						<div class="sub_text">
							<?php the_field('contact_sub_text'); ?>
						</div>
						<?php
						}

						if( get_field('contact_main_title') ) {
						?>
						<div class="main_text">
							<?php the_field('contact_main_title'); ?>
						</div>
						<?php
						}

						if( get_field('contact_content_para') ) {
						?>
						<div class="para_content">
							<?php the_field('contact_content_para'); ?>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="awards_section">
			<div class="title_wrapper" data-aos="fade-right">
				<div class="subtitle">
					<?php the_field('about_awards_sub_title'); ?>
				</div>
				<div class="title">
					<?php the_field('about_awards_title'); ?>
				</div>
			</div>
			<div class="awards_container">
				<?php
				$count = 1;
					if( have_rows('about_awards_list') ):
						while ( have_rows('about_awards_list') ) : the_row();

						if($count == 1) {
							?>
						<div class="row">
							<?php
						}
						?>
						<div class="col-sm-6">
							<div class="awards_item" data-aos="fade-up">
								<div class="awards_date">
									<?php the_sub_field('award_year'); ?>
								</div>
								<div class="awards_info">
									<div class="awards_title">
										<?php the_sub_field('award_title'); ?>
									</div>
									<div class="awards_subtitle">
										<?php the_sub_field('award_place'); ?>
									</div>
								</div>
							</div>
						</div>
						<?php
						if($count == 2) {
							$count = 0;
							?>
						</div>
							<?php
						}
						$count++;
					endwhile;
				endif;
				?>


			</div>
		</div>
	</div>
</section>

<?php
  get_footer();
?>
