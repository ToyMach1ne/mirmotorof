  <footer role="contentinfo">
    <iframe class="goole-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20763.76298667758!2d26.985021854713537!3d49.41892070590003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4732064344bb178b%3A0xd9f30b3b24d9c964!2z0KXQvNC10LvRjNC90LjRhtC60LjQuSwg0KXQvNC10LvRjNC90LjRhtC60LDRjyDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1478184298254" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="footer-contacts">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <a class="footer-phone--top" href="tel:+38<?php the_field('pre_phone1' , 4); ?><?php the_field('phone1' , 4); ?>">
              <span><?php the_field('pre_phone1' , 4); ?></span><?php the_field('phone1' , 4); ?>
            </a>
            <a class="footer-phone--bott" href="tel:+38<?php the_field('pre_phone2' , 4); ?><?php the_field('phone2' , 4); ?>">
              <span><?php the_field('pre_phone2' , 4); ?></span><?php the_field('phone2' , 4); ?>
            </a>
          </div>
          <div class="col-md-4">
            <p class="footer-adress">Г. Киев, Ул. Автозаводская 50/7</p>
          </div>
          <div class="col-md-4 social-block">
            <ul class="footer-social">
              <li><a href="#" class="vk"></a></li>
              <li><a href="#" class="fb"></a></li>
              <li><a href="#" class="ggl"></a></li>
              <li><a href="#" class="twit"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div><!-- footer-contacts -->
  </footer><!-- /footer -->

  <?php wp_footer(); ?>

</body>
</html>
