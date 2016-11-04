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
                    <div class="col-md-3">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/slider-img-1.png" height="165" width="270" alt="Owl Image">
                      <h6>Обработка сёдел клапанов</h6>
                    </div>
                    <div class="col-md-3">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/slider-img-2.png" height="165" width="270" alt="Owl Image">
                      <h6>Обработка фасок клапанов по Американской технологии Newway</h6>
                    </div>
                    <div class="col-md-3">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/slider-img-3.png" height="165" width="270" alt="Owl Image">
                      <h6>Обработка фасок сёдел клапанов по Американской технологии Rotler</h6>
                    </div>
                    <div class="col-md-3">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/slider-img-4.png" height="165" width="270" alt="Owl Image">
                      <h6>Визуальная дефектовка коленчатого вала на наличие трещин</h6>
                    </div>
              </div><!-- row -->
            </div><!-- container -->
          </div><!-- article-slider -->
  </section><!-- /section -->
</div><!-- /wrapper -->
<?php get_footer(); ?>
