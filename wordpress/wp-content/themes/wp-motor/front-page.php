<?php /* Template Name: Home Page */ get_header(); ?>
  <section role="main">
          <h1 class="page-title"><?php the_field('fp_title', 4); ?></h1>
          <div class="our-job">
          <div class="container">
            <div class="row">
            <?php if( have_rows('job_block', 4) ): while ( have_rows('job_block', 4) ) : the_row();
            // vars
            $image = get_sub_field('job_img');?>
              <div class="col-md-3">
              <span class="job-img"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></span>
              <p> <?php the_sub_field('black_text'); ?></p>
            </div>
            <?php endwhile; endif; ?>
            </div>
          </div>
          </div><!-- our-job -->

          <div class="about-us">
            <h4><?php the_field('about_title' , 4); ?></h4>
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <?php $image = get_field('about_img', 4); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <?php endif; ?>
                </div>
                <div class="col-md-6">
                  <h6><?php the_field('about_subtitle' , 4); ?></h6>
                  <p><?php the_field('about_text' , 4); ?></p>
                  <p><?php the_field('about_text2' , 4); ?></p>
                  <p><?php the_field('about_text_3' , 4); ?></p>
                </div>
              </div>
            </div>
          </div><!-- about-us -->

          <div class="advantages">
            <h4><?php the_field('advantage_title' , 4); ?></h4>
            <div class="container">
              <div class="row">
              <?php if( have_rows('our_advantages', 4) ): while ( have_rows('our_advantages', 4) ) : the_row();
              // vars
              $image = get_sub_field('adv_img');?>
                <div class="col-md-4">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <p><?php the_sub_field('avd_title'); ?>.</p>
              </div>
              <?php endwhile; endif; ?>
              </div>
            </div>
          </div><!-- advantages -->
            <div class="blog">
              <div class="container">
                <div class="row">
                  <h4><?php the_field('blog_title' , 4); ?></h4>
                  <?php query_posts("showposts=4&cat=3"); ?>
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <div class="col-md-3">
                    <?php if ( has_post_thumbnail()) :?>
                     <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                       <?php the_post_thumbnail('normal'); ?>
                     </a>
                    <?php endif; ?><!-- /post thumbnail -->
                    <h6><?php the_title(); ?></h6>
                    <p class="blog-descr"><?php the_excerpt(); ?></p>
                    <p class="blog-date"><?php the_time('j F Y'); ?> <a href="<?php the_permalink(); ?>"><span>more</span></a></p>
                  </div>
                  <?php endwhile; endif; ?>
                  <?php wp_reset_query(); ?>
                  <div class="col-md-12 blog-button">
                  <?php $category_id = get_cat_ID( 'Blog' ); $category_link = get_category_link( $category_id ); ?>
                    <a href="<?php echo $category_link; ?>">viev more</a>
                  </div>
                </div><!-- row -->
              </div>
            </div><!-- blog -->
  </section><!-- /section -->
</div><!-- /wrapper -->
<?php get_footer(); ?>
