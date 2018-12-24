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
                <h1>
                  <?php the_title();?>
                </h1>
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
                <div class="col col col-lg-9 col-md-8">
                    <?php while (have_posts()): the_post(); ?>
                        <div class="post">
                            <div class="post-title-meta">
                                <h2><?php the_title();?></h2>
                                <ul class="meta-info">
                                    <li><a><?php echo esc_html__( 'By:', 'consult' ); ?> <?php the_author_posts_link(); ?></a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i> <?php the_time(get_option( 'date_format' ));?></a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> <?php comments_popup_link( esc_html__(' 0 comment', 'consult'), esc_html__(' 1 comment', 'consult'), ' % comments'.__('', 'consult')); ?></a></li>
                                </ul>
                            </div>
                            <div class="post-body">
                                <?php the_content();?>
                                <?php wp_link_pages(  ); ?>
                            </div>
                        </div> <!-- end post -->
                    <?php endwhile; ?>

                    <div class="comments">
                        <?php comments_template();?>
                        <?php paginate_comments_links(); ?>
                    </div> <!-- end comments -->
                </div> <!-- end blog-content -->

                <div class="blog-sidebar col col-lg-3 col-md-4 col-sm-5">
                    <?php get_sidebar();?>
                </div>                    
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end blog-single-content -->
<?php
get_footer();
?>