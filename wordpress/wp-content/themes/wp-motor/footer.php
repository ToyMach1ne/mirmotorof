  <footer role="contentinfo">
<div id="map" class="goole-map"></div>
    <?php get_sidebar(); ?>

  </footer><!-- /footer -->
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzmXGEAtAn0khnJT-cd207GDHTHcU8H78&callback=initMap">
  </script>
<script>
      function initMap() {
        var uluru = {lat: 50.5180698, lng: 30.4570509 };
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
  <?php wp_footer(); ?>

</body>
</html>
