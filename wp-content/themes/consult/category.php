<?php
 $consult_redux_demo = get_option('redux_demo');
get_header(); ?>
<!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="title-box">
                <h1>
                  <?php printf( esc_html__( 'Category Archives: %s', 'consult' ), single_cat_title( '', false ) ); ?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'consult' ); ?></a></li>
                    <li><?php echo esc_html__( 'Category', 'consult' ); ?></li>
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
     <li class="active"><a href="#all" data-toggle="tab">ALL</a></li>
     <?php
    //  $categories = get_categories();
     $categories = get_categories(array('exclude'=>array(get_cat_ID('uncategorized'))));
     foreach( $categories as $category ) {
         echo "<li><a href='#".$category->slug."' data-toggle='tab'>".$category->name."</a></li>";
     }
     ?>
</ul>
</div>
<div class="tab-content">
<div id="all" class="tab-pane fade">
<div class='list-products'>
<?php
$posts = get_posts([
    'post_type' => 'product'
  ]);
  foreach($posts as $post){
?>
    <div class="post-product" >
    <div class="entry-media-product">
        <img width="200" height="200" src="<?php echo get_the_post_thumbnail_url($post->ID, 'full')?>">
      </div>
      <div class="entry-title-product">
                                  <h3><?php echo $post->post_title;?></h3>
                                  
                              </div>
                              <div class="entry-details-product">
                                  <p>
                             <?php echo $post->post_content;?>
                             </p>
                             <?php echo get_post_meta($post->ID,"price",true); ?>
                             </div>
  </div>
  <?php }
echo '</div></div>';
?>
<?php
foreach( $categories as $category ) {
    echo "<div id='".$category->slug."' class='tab-pane fade'>
<div class='list-products'>";
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
    <div class="post-product" >
    <div class="entry-media-product">
        <img width="200" height="200" src="<?php echo get_the_post_thumbnail_url($post->ID, 'full')?>">
      </div>
      <div class="entry-title-product">
                                  <h3><?php echo $post->post_title;?></h3>
                                  
                              </div>
                              <div class="entry-details-product">
                                  <p>
                             <?php echo $post->post_content;?>
                             </p>
                             <?php echo get_post_meta($post->ID,"price",true); ?>
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