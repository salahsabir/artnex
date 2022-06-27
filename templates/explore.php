<?php
/*** Template Name: collection page*/
get_header();
?>

<div class="section-header-container">
      <h1>Explore Collections</h1>
    </div>
    <div class="collection-section">
        <div class="container">
          <ul class="item-wrapper">
            <li class="item">
              <div class="item-img">
                <img src="https://images.unsplash.com/photo-1569172122301-bc5008bc09c5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
              </div>
              <div class="item-info">
                  <h3>artnex</h3>
                  <h5>#01</h5>
                  <h4><i class="fa-brands fa-ethereum"></i> 0.0051</i></h4>
              </div>
            </li>
            <li class="item">
              <div class="item-img">
                <img src="https://images.unsplash.com/photo-1569172122301-bc5008bc09c5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
              </div>
              <div class="item-info">
                  <h3>artnex</h3>
                  <h5>#01</h5>
                  <h4><i class="fa-brands fa-ethereum"></i> 0.0051</h4>
              </div>
            </li>
            <?php 
              // Example argument that defines three posts per page. 
              $args = array( 'posts_per_page' => 7 ); 
              
              // Variable to call WP_Query. 
              $the_query = new WP_Query( $args ); 
              
              if ( $the_query->have_posts() ) : 
                  // Start the Loop 
                  while ( $the_query->have_posts() ) : $the_query->the_post();
                    echo '<li class="item">';
                      echo '<div class="item-img">' , the_post_thumbnail() , '</div>';
                      echo '<div class="item-info">';
                      echo '<h3>' , the_title() , '</h3>';
                      echo '<h5>' , the_tags() , '</h5>';
                      echo '<h4><i class="fa-brands fa-ethereum"></i>' , the_date() , '</h4>';
                      echo '</div>';
                    echo '</li>';
                  // End the Loop 
                  endwhile; 
              else: 
              // If no posts match this query, output this text. 
                  _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
              endif; 
              
              wp_reset_postdata(); 
            ?>
          </ul>
          <div class="pagination-container">
            <div class="pagination-wrapper">
              <div class="pagination-button prev"><i class="ri-arrow-left-s-line"></i></div>
              <div class="dot"></div>
              <div class="dot active"></div>
              <div class="dot"></div>
              <div class="dot"></div>
              <div class="dot"></div>
              <div class="dot"></div>
              <div class="dot"></div>
              <div class="pagination-button next"><i class="ri-arrow-right-s-line"></i></div>
            </div>
          </div>
        </div>
      </div>


    	    
<?php
get_footer();
?>