<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<?php if ( have_comments() ) : ?>
<article class="comment-respond">
        <?php wp_list_comments('callback=consult_theme_comment'); ?>
        <?php endif; ?> 
        
        <?php
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => '',                                
                'title_reply'=> '<h3>'.esc_html__( 'Post your comment', 'consult' ).'</h3>',
                   
                'comment_field' => '<div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="comment" placeholder="'.esc_html__( 'comment..', 'consult' ).'" rows="4"></textarea>
                                        </div>
                                    </div>',
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => '<div class="col col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputName" placeholder="'.esc_html__( 'Name', 'consult' ).'" name="comment-name">
                                    </div>
                                </div>',
                    'email' => '<div class="col col-md-4">
                                  <div class="form-group">
                                      <input class="domainSearchBar form-control" placeholder="'.esc_html__( 'email address..', 'consult' ).'" id="domainSearchBar" name="email" type="email">
                                  </div>
                                </div>',
                    'website' => '<div class="col col-md-4">
                                      <div class="form-group">
                                          <input type="text" class="form-control" id="website" placeholder="'.esc_html__( 'website..', 'consult' ).'">
                                      </div>
                                  </div>',    
                                                                                           
                ) ),                    
                 'label_submit' => esc_html__( 'Submit', 'consult' ),
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',
        )
    ?>
    <?php comment_form($comment_args); ?>
</article>
