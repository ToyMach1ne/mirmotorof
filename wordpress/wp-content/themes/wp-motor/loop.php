<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>
    <div class="container category-page">
      <div class="row">
        <div class="col-xs-12 single-block">
          <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('medium');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
          </a><!-- /post thumbnail -->

          <h2 class="inner-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </h2><!-- /post title -->

          <?php wpeExcerpt('wpeExcerpt40'); ?>
          <!-- /post details -->
          <span class="date"><?php the_time('j F Y'); ?> </span>
        </div>
      </div>
    </div><!-- category-page -->

  </div><!-- /looper -->
  <?php endwhile; else: ?>
  <div>
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
