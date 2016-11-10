<?php /* Template Name: Contacts */ get_header(); ?>
  <section role="main">
    <h1 class="page-title">контакты</h1>
    <div class="contact-page">
      <div class="container">
       <div class="row">
        <div class="col-md-12">
          <p>телефоны:<span><?php the_field('contacts-phone1'); ?></span><span><?php the_field('contacts-phone2'); ?></span>
          <span><?php the_field('contacts-phone3'); ?></span></p>
          <p>почта:<span><?php the_field('email'); ?></span></p>
          <p>адрес:<span><?php the_field('adress'); ?></span></p>
        </div>
      </div>
     </div>
    </div><!-- contact-page -->
  </section><!-- /section -->
</div><!-- /wrapper -->
<?php get_footer(); ?>
