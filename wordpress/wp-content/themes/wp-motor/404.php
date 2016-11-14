<?php get_header(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>

    <p>Упс...Кажется вы сломали сайт. Но вы можете вернутся на <h2><a href="<?php echo home_url(); ?>">Главную страницу</a></h2></p>
    <div class="glass1"></div>

  </article>
<?php get_footer(); ?>
