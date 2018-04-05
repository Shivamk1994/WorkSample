<?php
	get_header();

	// Start the loop.
	while ( have_posts() ) :
		the_post();
?>

<section class="home_banner" style="background-image: url('<?php echo the_post_thumbnail_url();?>')">
  <span class="overlay"></span>
  <div class="content">
    <div class="subtitle"><?php the_title(); ?></div>
    <h1 class="title"><?php the_title(); ?></h1>
  </div>
</section>

<section class="single_page">
  <div class="container">
    <div class="row">
    <div class="col-sm-5">
      <div class="left_conatainer">
        <div class="content_box" data-aos="fade-right">
          <?php the_content(); ?>
        </div>

        <div class="project-detail-block-outer details_container">
					<div class="project-detail-block-wrapper details_cover" data-aos="fade-right">
						<div class="project-detail-block-item details_box">
							<div class="project-detail-block-title details_title">
                Location
              </div>
							<div class="project-detail-block-descr details_desc">
								<?php the_field('post_location'); ?>
							</div>
						</div>
					</div>
				</div>

        <?php
        if( have_rows('single_details_list') ):
          while ( have_rows('single_details_list') ) : the_row();
            ?>
            <div class="project-detail-block-outer details_container">
    					<div class="project-detail-block-wrapper details_cover" data-aos="fade-right">
    						<div class="project-detail-block-item details_box">
    							<div class="project-detail-block-title details_title">
                    <?php the_sub_field('single_title'); ?>
                  </div>
    							<div class="project-detail-block-descr details_desc">
    								<?php the_sub_field('single_sub_desc'); ?>
    							</div>
    						</div>
    					</div>
    				</div>
            <?php
          endwhile;
        endif;
        ?>

      </div>
    </div>
    <div class="col-sm-7">
      <div class="img_container">
        <?php
        if( have_rows('images_list') ):
          while ( have_rows('images_list') ) : the_row();
            ?>
            <a class="popup-link" href="<?php the_sub_field('single_image'); ?>" data-effect="mfp-move-horizontal">
              <img src="<?php the_sub_field('single_image'); ?>" data-aos="fade-left" class="img img-responsive" />
            </a>
            <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
    </div>
  </div>
</section>

<?php
// End the loop.
endwhile;

	get_footer();
?>
