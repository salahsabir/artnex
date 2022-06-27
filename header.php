<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
	wp_head();
	?>
</head>
<body>
    <div class="header">
      <div class="navbar-container">
        <div class="navbar">
            <!-- LOGO -->
            <img src="http://localhost/wordpress/wp-content/themes/artnex/assets/images/Artnex.svg" alt="#" class="logo">
            <!-- NAVIGATION MENU -->
            <ul class="nav-links">
              <!-- DISKTOP MENU -->
              <div class="menu">
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
                <div>
                  <li><a href="/"><i class="ri-facebook-fill"></i></a></li>
                  <li><a href="/"><i class="ri-twitter-fill"></i></a></li>
                  <li><a href="/"><i class="ri-instagram-line"></i></a></li>
                </div>
              </div>
              <!-- MOBILE/TABLET MENU ICON -->
              <div class="menu-hamburger-icon" onclick="hamburgericon(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
              </div>
            </ul>
              <!-- MOBILE/TABLET MENU -->
              <div class="responsive-menu">
                  <ul>
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
                  <div>
                    <li><a href="/"><i class="ri-facebook-fill"></i></a></li>
                    <li><a href="/"><i class="ri-twitter-fill"></i></a></li>
                    <li><a href="/"><i class="ri-instagram-line"></i></a></li>
                  </div>
                </ul>
              </div>
          </div>
        </div>
    </div>