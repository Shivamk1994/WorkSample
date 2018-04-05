<?php
/*

 * Template Name: Contact Template

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

<section class="contact_main">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <div class="contacts_content" data-aos="fade-right">
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

          <div class="bottom_contact_section">
            <div class="row">
            <div class="col-sm-5">
              <div class="detail_container">
                <div class="title">Phone</div>
                <div class="content"><?php echo get_theme_mod('info_phone'); ?></div>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="detail_container">
                <div class="title">Email</div>
                <div class="content"><?php echo get_theme_mod('info_email'); ?></div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="contacts_form" data-aos="flip-right">
          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 6, 'title' => false, 'description' => false ) ); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  get_footer();
?>
