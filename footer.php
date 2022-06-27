<div class="footer">
      <div class="container">
        <div class="top-content">
          <div class="footer-img"><img src="http://localhost/wordpress/wp-content/themes/artnex/assets/images/Artnex-white.svg" alt=""></div>
          <ul class="footer-links">
          <?php
				wp_nav_menu(
					array(
						'menu' => "primary",
						'container' => "",
						'them_location' => "primary",
						'items_wrap' => '<li id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</li>'
					)
				);
			?>
          </ul>
        </div>
        <div class="bottom-content">
          <div class="copyright-container"><i class="fa-solid fa-copyright"></i></div>
          <ul class="bottom-links">
            <li><a href="/"><i class="ri-facebook-fill"></i></a></li>
            <li><a href="/"><i class="ri-instagram-line"></i></a></li>
            <li><a href="/"><i class="ri-youtube-fill"></i></a></li>
            <li><a href="/"><i class="ri-twitter-fill"></i></a></li>
        </ul>
        </div>
      </div>
    </div>
    <?php
	wp_footer()
	?>
    <script>
      var accordion = new Accordion('.accordion-container');
    </script>
</body>
</html>