<div class="container">
  <aside class="sidebar row" role="complementary">
    <?php if ( is_active_sidebar('widgetarea1') ) : ?>
      <?php dynamic_sidebar( 'widgetarea1' ); ?>
    <?php else : ?>
      <div class="col-xs-4">
        <a class="footer-phone--top" href="tel:+38<?php the_field('pre_phone1' , 4); ?><?php the_field('phone1' , 4); ?>">
          <span><?php the_field('pre_phone1' , 4); ?></span><?php the_field('phone1' , 4); ?>
        </a>
        <a class="footer-phone--bott" href="tel:+38<?php the_field('pre_phone2' , 4); ?><?php the_field('phone2' , 4); ?>">
          <span><?php the_field('pre_phone2' , 4); ?></span><?php the_field('phone2' , 4); ?>
        </a>
      </div>
      <div class="col-xs-4">
        <p class="footer-adress">Г. Киев, Ул. Автозаводская 50/7</p>
      </div>
      <div class="col-xs-4 social-block">
        <ul class="footer-social">
          <li><a href="#" class="vk"></a></li>
          <li><a href="#" class="fb"></a></li>
          <li><a href="#" class="ggl"></a></li>
          <li><a href="#" class="twit"></a></li>
        </ul>
      </div><!-- col-xs-4 social-block -->
    <?php endif; ?>
  </aside><!-- /sidebar -->
</div>

