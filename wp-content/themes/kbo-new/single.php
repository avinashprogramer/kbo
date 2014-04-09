<?php
/**
* @package WordPress
* @subpackage Default_Theme
*/
 
get_header();
?>
 
<div class="main homepage">
    <div class="container archive_post_container">
        <div class="individual_wrap_out">
            <div class="individual_posts_wrap <?php echo get_post_type(); ?>_posts_wrap">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <!-- <div>
                        <div><?php previous_post_link('&laquo; %link') ?></div>
                        <div><?php next_post_link('%link &raquo;') ?></div>
                    </div> -->
                    <span class="post_icon"></span>
                    <h4 class="post_heading"><?php the_title(); ?></h4>
                    <h6 class="post_date">by <span class="author_name">Admin</span> 28 Feb, 2014.</h6>
                    <div class="post_detail clearfix">
                        <div class="social_share"></div>
                        <?php if ( has_post_thumbnail() ) {
                            echo get_the_post_thumbnail(get_the_id(), 'thumbnail');
                        } ?>
                        <?php the_content('Read the rest of this entry &raquo;');
                            if(get_post_type() == "polls"){
                                $poll_no = simple_fields_get_post_group_values(get_the_id(), "poll_id", true, 2);
                                    echo '<ul class="cycle_wrap cycle-slide"><li>';
                                    get_poll($poll_no[0][poll_number]);
                                    echo '</li></ul>';   
                            }
                            else {
                                $poll_no_checkbox = simple_fields_get_post_group_values(get_the_id(), "poll_id_checkbox", true, 2);
                                if($poll_no_checkbox[0][show_poll]){
                                    echo '<ul class="cycle_wrap cycle-slide" style="border-top: 2px dashed #FFFFFF; margin-top: 30px;"><li>';
                                    get_poll($poll_no_checkbox[0][poll_number]);
                                    echo '</li></ul>';
                                }
                            }
                        ?>
                    </div>
                <?php endwhile; else: ?>
                    <p>Sorry, no <?php echo get_post_type(); ?> matched your criteria.</p>
                <?php endif; ?>
                <?php comments_template(); ?>
            </div>

            <div class="archive_sidebar">
                <h3 class="section_heading"><?php echo get_post_type(); ?> Archive (Top 20)</h3>
                <p class="archive_sort_type clearfix js-archive_tab">
                    <span>Sort By: </span>
                    <a class="date active" href="#date">Date</a>
                    <a class="popular" href="#popular">Popular</a>
                </p>
                <ul id="date" class="archive_link_list">
                    <?php
                        $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1 ;
                        $args = array( 'order' => 'DESC', 'orderby' => 'date', 'paged' => $paged, 'post_type' => get_post_type(), 'posts_per_page' => 20 );
                        $my_query = NULL;
                        $my_query = new WP_Query($args);
                        if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : $my_query->the_post();
                            echo "<li>";
                            echo '<a href="'.get_permalink().'" class="cont_read_link">'.wp_trim_words( get_the_title(), 15 ).'</a>';
                            echo "</li>";
                        endwhile;
                        }
                        wp_reset_query();  // Restore global post data stomped by the_post().
                    ?>
                </ul>
                <ul id="popular" class="archive_link_list" style="display: none;">
                    <?php $posts_per_page = get_query_var('posts_per_page');
                    $paged = intval(get_query_var('paged')); 
                    $paged = ($paged) ? $paged : 1; 
                    $args = array(
                    'posts_per_page' => $posts_per_page,
                    'post_type' => get_post_type(),
                    'paged' => $paged,
                    'more' => $more = 0,
                    'meta_key' => 'views',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    );
                    query_posts($args);
                    if (have_posts()) : while (have_posts()) : the_post() ;
                    echo '<li><a href="'.get_permalink().'" class="cont_read_link">'.wp_trim_words( get_the_title(), 15 ).'</a></li>';
                    endwhile; endif; wp_reset_query();  // Restore global post data stomped by the_post().?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
