<?php get_header(); ?>
<div class="error">
  <a href="<?php echo home_url(); ?>">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>></article>
  </a>
</div>
<?php get_footer(); ?>

