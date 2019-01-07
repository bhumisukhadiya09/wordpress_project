<?php
/**
 * The Template for displaying all single posts
 */ 
 $consult_redux_demo = get_option('redux_demo');
get_header('single'); ?>
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="title-box">
                <h1><?php the_title();?></h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__( 'Home', 'consult' ); ?></a></li>
                    <li><?php the_title();?></li>
                </ol>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- start blog-single-content -->
    <section class="blog-single-content section-padding">
        <div class="container">
            <div class="row blog-with-sidebar">
                <div class="blog-content col col-lg-9 col-md-8">
                    <?php while (have_posts()): the_post(); ?>
                    <?php $current_post_id = get_the_ID();?>
                    <div class="single-product-wrap">
   <div class="list-category-details">
      <div class="row">
         <div class="col-md-7 col-sm-12">
            <div class="row">
               <section id="main-slider" class="carousel slide main-slider">
                  <div class="col-md-12">
                     <div class="carousel-inner product-fullwidth slider">
                        <div class="item active">  
                        <img src="<?php echo get_the_post_thumbnail_url($current_post_id, 'full')?>">
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
         <div class="col-md-5 col-sm-12">
            <div class="product-content">
               <div class="product-name">
                  <span style="font-size:22px;">
                 <?php the_title(); ?>
                  </span>
               </div>
               <hr class="fullwidth-divider" style="margin-top:-8px;">
               <div class="product-discription">
                  <ul style="line-height:35px;">
                     <li id="ContentPlaceHolder1_licategory" style="background:#ededed;padding-left:15px;"><strong>Product Id :</strong> <?php echo $current_post_id; ?>  </li>
                     
                     <li id="ContentPlaceHolder1_licategory" style="background:#f7f7f7;padding-left:15px;"><strong>Category :</strong> <?php 
                     $cat_array =array();
                     $category_detail=get_the_category($current_post_id);//$post->ID
                     foreach($category_detail as $cd){
                         array_push($cat_array,$cd->cat_name);
                     }
                     echo implode(", ",$cat_array);
                     ?>  </li>
                     <li id="ContentPlaceHolder1_licategory" style="background:#ededed;padding-left:15px;"><strong>Price :</strong> <?php echo get_post_meta($post->ID,"price",true); ?>  </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
                    <?php endwhile; ?>

                </div> <!-- end blog-content -->                  
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-single-content -->
<?php
get_footer();
?>