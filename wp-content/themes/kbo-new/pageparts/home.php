<?php
/**
 * Template Name: Home Page Template
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header();
 ?>

        <div class="main homepage">
            <div class="container">
                  <ul class="home_section_wrap clearfix">
                  	<li class="odd">
                  		<div class="home_sliders poll_section">
                  			<span class="section_logo"></span>
                                    <h3 class="section_title">Poll of the Day</h3>
                  			<ul class="cycle_wrap cycle-slideshow" data-cycle-slides="> li" data-cycle-fx=scrollHorz data-cycle-timeout=0 data-cycle-prev="#poll_prev" data-cycle-next="#poll_next">
                  				<?php
                                          $type = 'polls';
                                          $args = array( 
                                            'order' => 'DESC',
                                            'orderby' => 'date',
                                            'post_type' => $type,
                                            'posts_per_page' => 5
                                            );

                                          $my_query = NULL;
                                          $my_query = new WP_Query($args);
                                          if( $my_query->have_posts() ) {
                                            while ($my_query->have_posts()) : $my_query->the_post();
                                                $poll_no = simple_fields_get_post_group_values(get_the_id(), "poll_id", true, 2);
                                                echo "<li>";
                                                get_poll($poll_no[0][poll_number]);
                                                echo "</li>";
                                            endwhile;
                                          }
                                          wp_reset_query();  // Restore global post data stomped by the_post().
                                          ?>                                          
                  			</ul>
                  			<a class="prev shake shake-little" id="poll_prev" href="#"></a>
                  			<a class="next shake shake-little" id="poll_next" href="#"></a>
                  		</div>
                  	</li>
                  	<li>
                              <div class="home_sliders update_section">
                                    <span class="section_logo"></span>
                                    <h3 class="section_title">Updates</h3>
                                    <ul class="cycle_wrap cycle-slideshow" data-cycle-slides="> li" data-cycle-fx=scrollHorz data-cycle-timeout=0 data-cycle-prev="#update_prev" data-cycle-next="#update_next">
                                          <?php
                                          $type = 'updates';
                                          $args = array( 
                                            'order' => 'DESC',
                                            'orderby' => 'date',
                                            'post_type' => $type,
                                            'posts_per_page' => 10
                                            );
                                          $my_query = NULL;
                                          $my_query = new WP_Query($args);
                                          if( $my_query->have_posts() ) {
                                            while ($my_query->have_posts()) : $my_query->the_post();
                                                echo "<li>";
                                                if ( has_post_thumbnail() ) {
                                                    echo get_the_post_thumbnail(get_the_id(), 'thumbnail');
                                                }
                                                echo "<h4>".wp_trim_words( get_the_title(), 15 )."</h4>";
                                                echo "<h5>".wp_trim_words( get_the_excerpt(), 15 )."</h5>";
                                                echo '<p class="date">'.get_the_date().'</p>';
                                                echo "</li>";
                                            endwhile;
                                          }
                                          wp_reset_query();  // Restore global post data stomped by the_post().
                                          ?>
                                    </ul>
                                    <a class="prev shake shake-little" id="update_prev" href="#"></a>
                                    <a class="next shake shake-little" id="update_next" href="#"></a>
                              </div>
                        </li>
                        <li class="odd">
                              <div class="home_sliders article_section">
                                    <span class="section_logo"></span>
                                    <h3 class="section_title">Articles</h3>
                                    <ul class="cycle_wrap cycle-slideshow" data-cycle-slides="> li" data-cycle-fx=scrollHorz data-cycle-timeout=0 data-cycle-prev="#article_prev" data-cycle-next="#article_next">
                                          <?php
                                          $type = 'articles';
                                          $args = array( 
                                            'order' => 'DESC',
                                            'orderby' => 'date',
                                            'post_type' => $type,
                                            'posts_per_page' => 5
                                            );

                                          $my_query = NULL;
                                          $my_query = new WP_Query($args);
                                          if( $my_query->have_posts() ) {
                                            while ($my_query->have_posts()) : $my_query->the_post();
                                                echo "<li>";
                                                if ( has_post_thumbnail() ) {
                                                    echo get_the_post_thumbnail(get_the_id(), 'thumbnail');
                                                }
                                                echo "<h4>".wp_trim_words( get_the_title(), 15 )."</h4>";
                                                echo "<h5>".wp_trim_words( get_the_excerpt(), 15 )."</h5>";
                                                echo '<p class="date">'.get_the_date().'</p>';
                                                echo "</li>";
                                            endwhile;
                                          }
                                          wp_reset_query();  // Restore global post data stomped by the_post().
                                          ?>
                                    </ul>
                                    <a class="prev shake shake-little" id="article_prev" href="#"></a>
                                    <a class="next shake shake-little" id="article_next" href="#"></a>
                              </div>
                        </li>
                        <li>
                  		<div class="home_sliders burning_issue_section">
                  			<span class="section_logo"></span>
                                    <h3 class="section_title">Burning Issue</h3>
                          			<ul class="cycle_wrap cycle-slideshow" data-cycle-slides="> li" data-cycle-fx=scrollHorz data-cycle-timeout=0 data-cycle-prev="#burning_issue_prev" data-cycle-next="#burning_issue_next">
                          				<?php
                                          $type = 'issues';
                                          $args = array( 
                                            'order' => 'DESC',
                                            'orderby' => 'date',
                                            'post_type' => $type,
                                            'posts_per_page' => 5
                                            );

                                          $my_query = NULL;
                                          $my_query = new WP_Query($args);
                                          if( $my_query->have_posts() ) {
                                            while ($my_query->have_posts()) : $my_query->the_post();
                                                echo "<li>";
                                                if ( has_post_thumbnail() ) {
                                                    echo get_the_post_thumbnail(get_the_id(), 'thumbnail');
                                                }
                                                echo "<h4>".wp_trim_words( get_the_title(), 15 )."</h4>";
                                                echo "<h5>".wp_trim_words( get_the_excerpt(), 15 )."</h5>";
                                                echo '<p class="date">'.get_the_date().'</p>';
                                                echo "</li>";
                                            endwhile;
                                          }
                                          wp_reset_query();  // Restore global post data stomped by the_post().
                                          ?>
                                          
                  			</ul>
                                    <a class="prev shake shake-little" id="burning_issue_prev" href="#"></a>
                                    <a class="next shake shake-little" id="burning_issue_next" href="#"></a>
                  		</div>
                  	</li>

                </ul>
                <?php
                /*<div class="modal fade modal_custom" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="individual_posts_wrap article_posts_wrap">
                                    <span class="post_icon"></span>
                                    <h4 class="post_heading">Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth.</h4>
                                    <h6 class="post_date">by <span class="author_name">Admin</span> 28 Feb, 2014.</h6>
                                    <div class="post_detail clearfix">
                                        <div class="social_share"></div>
                                        <img src="images/avatar_84x83.png">
                                        <p>Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth </p>
                                        <p>Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth </p>
                                    </div>
                                    <div class="individual_post_poll_wrap">

                                    </div>
                                    <ul class="comment_wrap">
                                        <li class="comment">
                                            <div class="comment_body">
                                                <p class="comment_name">Test name</p>
                                                <p class="comment_date">February 16, 2014 at 12:05 PM</p>
                                                <p class="comment_txt">Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth </p>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment_body">
                                                <p class="comment_name">Test name</p>
                                                <p class="comment_date">February 16, 2014 at 12:05 PM</p>
                                                <p class="comment_txt">Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth Indian democracy needs more thrust from youth </p>
                                            </div>
                                        </li>

                                    </ul>
                                    <div class="comment_form_wrap">
                                        <div class="comment_respond">
                                            <h3 class="comment_head">Leave Your Comment</h3>
                                            <form class="comment-form clearfix">
                                                <p class="comment-form-author">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" name="author">
                                                </p>
                                                <p class="comment-form-email">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="email" name="email">
                                                </p>
                                                <p class="comment-form-comment">
                                                    <label>Comment</label>
                                                    <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                                                </p>
                                                <p class="form-submit">
                                                    <input type="submit" name="submit" value="Comment">
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>*/ ?>
            </div>
        </div>
<?php get_footer();?>
