<?php  get_header(); ?>
  <section role="main">
    <div class="articles-block">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <p><?php the_post(); the_content(); ?></p>
          </div>
        </div>
      </div>
    </div><!-- articles-block -->

    <div class="article-slider">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div id="owl-demo">
              <?php query_posts("showposts=100&cat=3"); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="item">
                <?php if ( has_post_thumbnail()) :?>
                   <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                     <?php the_post_thumbnail('normal'); ?>
                   </a>
                <?php endif; ?><!-- /post thumbnail -->
                <h6><?php the_title(); ?></h6>
                <p class="article-descr"><?php the_excerpt(); ?></p>
                <p class="article-date"><?php the_time('j F Y'); ?><a href="<?php the_permalink(); ?>"><span>подробнее</span></a></p>
              </div>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
          </div>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- article-slider -->

  </section><!-- /section -->
</div><!-- /wrapper -->
<?php get_footer(); ?>
