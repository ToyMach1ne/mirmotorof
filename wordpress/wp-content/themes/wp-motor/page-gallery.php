<?php /* Template Name: Gallery */ get_header(); ?>
  <section role="main">
          <h1 class="page-title"><?php the_title();?></h1>
          <div class="gallery">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div id="owl-demo-gallery" class="owl-carousel owl-theme">
                  <?php if( have_rows('gallery_slider') ): while ( have_rows('gallery_slider') ) : the_row();
                    // vars
                    $image = get_sub_field('item_img');?>
                    <div class="item"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></div>
                    <?php endwhile; endif; ?>
                  </div>
                </div>
            </div>
           </div><!-- articles-block -->
         </div><!-- gallery -->
         <div class="gallery-content">
            <div class="container">
              <div class="row">
                <h5><?php the_field('gallery_title'); ?></h5>
                <?php if( have_rows('galeery_content') ): while ( have_rows('galeery_content') ) : the_row();
                    // vars
                    $image = get_sub_field('gal-cont-img');?>
                    <div class="col-md-3">
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                      <h6><?php the_sub_field('gal-cont-ex'); ?></h6>
                    </div>
                    <?php endwhile; endif; ?>
              </div><!-- row -->
            </div><!-- container -->
          </div><!-- article-slider -->
  </section><!-- /section -->
</div><!-- /wrapper -->
<?php get_footer(); ?>
