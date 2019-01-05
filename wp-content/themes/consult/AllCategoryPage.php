	
<?php /* Template Name: AllCategoryPage */ ?>
<?php
$consult_redux_demo = get_option('redux_demo');
get_header(); ?>
<!-- start page-title -->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
  $(window).on('load', function() {
    $("#all-nav").click();
  });

</script>
<section class="page-title">
  <div class="container">
    <div class="title-box">
      <h1>
        <?php echo "All Categories"; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'consult' ); ?></a></li>
        <li><?php echo "Categories" ; ?></li>
      </ol>
    </div>
  </div> <!-- end container -->
</section>

<!-- start blog-with-sidebar-section -->
<section class="blog-with-sidebar-section">
  <div class="container">
    <div class="row blog-with-sidebar">
      <div class="blog-content col col-lg-12 col-md-12">
        <div class="row blog-section-grids">
          <div class="careers-vacancy-content">
            <div class="vacancy-details">
              <div class="job-tab">
                <div class="nav-wrapper">
                  <ul class="nav">
                   <li><a id="all-nav" href="#all" data-toggle="tab">ALL</a></li>
                   <?php
    //  $categories = get_categories();
                   $categories = get_categories(array('exclude'=>array(get_cat_ID('uncategorized'))));
                   foreach( $categories as $category ) {
                     ?>
                     <li><a id ="<?php echo $category->slug."-nav";?>" href='<?php echo get_category_link($category->term_id );?>' ><?php echo $category->name?></a></li>
                     
                   <?php }
                   ?>
                 </ul>
               </div>
               <div class="tab-content">
                <div id="all" class="tab-pane fade">
                  <div class='list-products row'>
                    <?php
                    $posts = get_posts([
                      'post_type' => 'product'
                    ]);
                    foreach($posts as $post){
                      ?>
                      <div class="post-product col-md-4" >
                        <div class="product-media">
                          <a href="<?php echo get_permalink($post->ID);?>">
                            <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full')?>">
                          </a>
                        </div>
                        <div class="product-content">
                          <div class="product-name">
                            <?php echo $post->post_title;?>
                            <br/>
                            <?php echo get_post_meta($post->ID,"price",true); ?>
                          </div>
                        </div>
                      </div>
                    <?php }
                    echo '</div></div>';
                    ?>
                    <?php
                    foreach( $categories as $category ) {
                      echo "<div id='".$category->slug."' class='tab-pane fade'>
                      <div class='list-products row'>";
                      $posts = get_posts([
                        'post_type' => 'product',
    // 'post_status' => 'publish',
    // 'numberposts' => -1,
                        'category'=>$category->cat_ID
    // 'order'    => 'ASC'
                      ]);
//   echo "<pre>";
                      foreach($posts as $post){
// print_r($post);
                        ?>
                        <div class="post-product col-md-4" >
                          <div class="product-media">
                            <a href="<?php echo get_permalink($post->ID);?>">
                              <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full')?>">
                            </a>
                          </div>
                          <div class="product-content">
                            <div class="product-name">
                              <?php echo $post->post_title;?>
                              <br/>
                              <?php echo get_post_meta($post->ID,"price",true); ?>
                            </div>
                          </div>
                        </div>
                      <?php }
                      echo '</div></div>';
                    }
                    ?>

                  </div>
                </div>
              </div>
            </div>
          </div>                    
        </div> <!-- end blog-content -->
        
      </div>
    </div> <!-- end container -->
  </section>
  <!-- end blog-with-sidebar-section -->
  <?php
  get_footer();
  ?>