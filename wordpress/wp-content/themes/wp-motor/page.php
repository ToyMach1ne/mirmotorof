<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container page-content">
      <div class="row">
        <div class="col-md-12">
          <h1 class="page-title inner-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php edit_post_link(); ?>
        </div>
      </div>
    </div>



    </article>
  <?php endwhile; else: // If 404 page error ?>
    <article>
      <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
    </article>
  <?php endif; ?>
<?php get_footer(); ?>
