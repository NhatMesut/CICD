<?php
/**
 * The template for displaying similar posts
 * 
 * @subpackage Clothing Store
 * @since 1.0
 */

$clothing_store_post_args = array(
    'posts_per_page'    => '3',
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$related = wp_get_post_terms( get_the_ID(), 'category' );
$clothing_store_ids = array();
foreach( $related as $term ) {
    $clothing_store_ids[] = $term->term_id;
}

$clothing_store_post_args['category__in'] = $clothing_store_ids; 

$related_posts = new WP_Query( $clothing_store_post_args );

if ( $related_posts->have_posts() ) : ?>
    <div id="Category-section" class="similar-post">
        <h3 class="text-center pb-3"><?php echo esc_html(get_theme_mod('clothing_store_similar_text',__('Explore More','clothing-store'))); ?></h3>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="postbox smallpostimage p-3">
                        <?php $blog_archive_ordering = get_theme_mod('archieve_post_order', array('title', 'image', 'meta','excerpt','btn'));
                        foreach ($blog_archive_ordering as $post_data_order) :
                            if ('title' === $post_data_order) :?>
                                <h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                            <?php elseif ('image' === $post_data_order) :?>
                                <?php
                                    if(has_post_thumbnail()) { ?>
                                    <div class="box-content-post text-center">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                <?php }?>
                            <?php elseif ('meta' === $post_data_order) :?>
                                <div class="date-box mb-2 text-center">
                                    <?php if( get_option('clothing_store_date',false) != 'off'){ ?>
                                        <span class="me-2"><i class="<?php echo esc_attr(get_theme_mod('clothing_store_date_icon','far fa-calendar-alt')); ?> me-2"></i><?php the_time( get_option( 'date_format' ) ); ?></span>
                                    <?php } ?>
                                    <?php if( get_option('clothing_store_admin',false) != 'off'){ ?>
                                        <span class="entry-author me-2"><i class="<?php echo esc_attr(get_theme_mod('clothing_store_author_icon','fas fa-user')); ?> me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
                                    <?php }?>
                                    <?php if( get_option('clothing_store_comment',false) != 'off'){ ?>
                                        <span class="entry-comments me-2"><i class="<?php echo esc_attr(get_theme_mod('clothing_store_comment_icon','fas fa-comments')); ?> me-2"></i> <?php comments_number( __('0 Comments','clothing-store'), __('0 Comments','clothing-store'), __('% Comments','clothing-store')); ?></span>
                                    <?php }?>
                                    <?php if( get_option('clothing_store_tag',false) != 'off'){ ?>
                                        <span class="tags"><i class="<?php echo esc_attr(get_theme_mod('clothing_store_tag_icon','fas fa-tags')); ?> me-2"></i> <?php clothing_store_display_post_tag_count(); ?></span>
                                    <?php }?>
                                </div>
                            <?php elseif ('excerpt' === $post_data_order) :?>
                                <p class="text-center"><?php clothing_store_custom_excerpt(); ?></p>
                            <?php elseif ('btn' === $post_data_order) :?>
                                <div class="link-more mb-2 text-center">
                                    <a class="more-link" href="<?php echo esc_url( get_permalink() );?>"><?php echo esc_html(get_theme_mod('clothing_store_read_more_text',__('Read More','clothing-store'))); ?></a>
                                </div>
                            <?php endif;
                        endforeach;
                        ?>       
                        <div class="clearfix"></div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();