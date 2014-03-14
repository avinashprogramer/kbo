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
                  				<li>
                                                <h4><a data-toggle="modal" href="#myModal">Q. Which movie was the best action epic ever? Which movie was the best </a></h4>
                                                <div class="wp-polls-ans" id="polls-4-ans">
                                                      <ul class="poll_answer_wrap">
                                                            <li>Can't Say <small>(0%, 0 Votes)</small>
                                                                  <div title="Can't Say (0% | 0 Votes)" style="width: 1%;" class="pollbar"></div>
                                                            </li>
                                                            <li>Disagreed <small>(13%, 3 Votes)</small>
                                                                  <div title="Disagreed (13% | 3 Votes)" style="width: 12%;" class="pollbar"></div>
                                                            </li>
                                                            <li><strong><i>Agreed <small>(87%, 21 Votes)</small></i></strong>
                                                                  <div title="You Have Voted For This Choice - Agreed (87% | 21 Votes)" style="width: 79%;" class="pollbar"></div>
                                                            </li>
                                                      </ul>
                                                      <p class="voter_count">Total Voters: </br><strong>24</strong></p>
                                                </div>
                                          </li>
                                          <li>
                                                <div id="polls-9" class="wp-polls poll_wrap_out" style="opacity: 1; ">
                                                      <form id="polls_form_9" class="wp-polls-form" action="/kuchbhiopinion_wp/wp-admin/admin-ajax.php" method="post">
                                                            <p style="display: none;"><input type="hidden" id="poll_9_nonce" name="wp-polls-nonce" value="d7531f7fa1"></p>
                                                            <p style="display: none;"><input type="hidden" name="poll_id" value="9"></p>
                                                            <p class="poll_question">Q. Which movie was the best action epic ever Which movie was the best? </p>
                                                            <div id="polls-9-ans" class="wp-polls-ans">
                                                                  <ul class="poll_answer_wrap">
                                                                        <li><input type="radio" id="poll-answer-26" name="poll_9" value="26"> <label for="poll-answer-26">Yes</label></li>
                                                                        <li><input type="radio" id="poll-answer-27" name="poll_9" value="27"> <label for="poll-answer-27">No</label></li>
                                                                        <li><input type="radio" id="poll-answer-28" name="poll_9" value="28"> <label for="poll-answer-28">May be</label></li>
                                                                  </ul>
                                                                  <p class="vote_btn"><input type="button" name="vote" value="Vote" class="Buttons" onclick="poll_vote(9);"></p>
                                                                  <p class="view_result_link"><a href="#ViewPollResults" onclick="poll_result(9); return false;" title="View Results Of This Poll">View Results</a></p>
                                                            </div>
                                                      </form>
                                                </div>
                                          </li>
                                          <li>
                                                <div class="wp-polls poll_wrap_out" id="polls-10">
                                                      <p class="poll_question">Q. Which movie was the best action epic ever Which movie was the best? </p>
                                                      <div class="wp-polls-ans" id="polls-10-ans">
                                                            <ul class="poll_answer_wrap">
                                                                  <li>May be <small>(0%, 0 Votes)</small><div title="May be (0% | 0 Votes)" style="width: 1%;" class="pollbar"></div></li>
                                                                  <li>No <small>(8%, 3 Votes)</small><div title="No (8% | 3 Votes)" style="width: 8%;" class="pollbar"></div></li>
                                                                  <li><strong><i>Yes <small>(92%, 35 Votes)</small></i></strong><div title="You Have Voted For This Choice - Yes (92% | 35 Votes)" style="width: 92%;" class="pollbar"></div></li>
                                                            </ul>
                                                            <p style="text-align: center;">Total Voters: <strong>38</strong></p>
                                                      </div>
                                                      <input type="hidden" value="d7531f7fa1" name="wp-polls-nonce" id="poll_9_nonce">
                                                </div>
                                          </li>
                                          <li>
                                                <h4><a href="#">Q. Which movie was the best action epic ever? Which movie was the best </a></h4>
                                                <ul class="poll_answer_wrap">
                                                      <li><a href="">I Robot</a></li>
                                                      <li><a href="">G. I. Joe : Retaliation</a></li>
                                                      <li><a href="">The Avengers</a></li>
                                                      <li><a href="">Battleship</a></li>
                                                </ul>
                                          </li>
                                          
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
                                          <li>
                                                <img class="section_elm_img" src="images/avatar_84x83.png"/>
                                                <h4><a href="#">Main title heading Main title heading Main title heading Main title heading</a></h4>
                                                <h5>Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. </h5>
                                                <p class="date">February 14, 2014</p>
                                          </li>
                                          <li>
                                                <h4><a href="#">Main title heading Main title heading Main title heading Main title heading</a></h4>
                                                <h5>Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. </h5>
                                                <p class="date">February 14, 2014</p>
                                          </li>
                                          <li>
                                                <img class="section_elm_img" src="images/avatar_84x83.png"/>
                                                <h4><a href="#">Main title heading Main title heading Main title heading Main title heading</a></h4>
                                                <h5>Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. </h5>
                                                <p class="date">February 14, 2014</p>
                                          </li>
                                          <li>
                                                <img class="section_elm_img" src="images/avatar_84x83.png"/>
                                                <h4><a href="#">Main title heading Main title heading Main title heading Main title heading</a></h4>
                                                <h5>Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. </h5>
                                                <p class="date">February 14, 2014</p>
                                          </li>

                                    </ul>
                                    <a class="prev shake shake-little" id="update_prev" href="#"></a>
                                    <a class="next shake shake-little" id="update_next" href="#"></a>
                              </div>
                        </li>
                        <li class="odd">
                              <div class="home_sliders article_section">
                                    <span class="section_logo"></span>
                                    <h3 class="section_title">Article</h3>
                                    <ul class="cycle_wrap cycle-slideshow" data-cycle-slides="> li" data-cycle-fx=scrollHorz data-cycle-timeout=0 data-cycle-prev="#article_prev" data-cycle-next="#article_next">
                                          <li>
                                                <h4><a href="#">Main title heading Main title heading Main title heading Main title heading</a></h4>
                                                <h5>Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. </h5>
                                                <p class="date">February 14, 2014</p>
                                          </li>
                                          <li>
                                                <h4><a href="#">Main title heading Main title heading Main title heading Main title heading</a></h4>
                                                <h5>Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. </h5>
                                                <p class="date">February 14, 2014</p>
                                          </li>
                                          <li>
                                                <h4><a href="#">Main title heading Main title heading Main title heading Main title heading</a></h4>
                                                <h5>Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. </h5>
                                                <p class="date">February 14, 2014</p>
                                          </li>
                                          <li>
                                                <h4><a href="#">Main title heading Main title heading Main title heading Main title heading</a></h4>
                                                <h5>Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. </h5>
                                                <p class="date">February 14, 2014</p>
                                          </li>

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
                  				<li>
                                                <h4><a href="#">Main title heading Main title heading Main title heading Main title heading</a></h4>
                                                <h5>Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. </h5>
                                                <p class="date">February 14, 2014</p>
                                          </li>
                                          <li>
                                                <h4><a href="#">Main title heading Main title heading Main title heading Main title heading</a></h4>
                                                <h5>Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. </h5>
                                                <p class="date">February 14, 2014</p>
                                          </li>
                                          <li>
                                                <h4><a href="#">Main title heading Main title heading Main title heading Main title heading</a></h4>
                                                <h5>Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. </h5>
                                                <p class="date">February 14, 2014</p>
                                          </li>
                                          <li>
                  					<h4><a href="#">Main title heading Main title heading Main title heading Main title heading</a></h4>
                  					<h5>Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. Small detail / Excerpt. </h5>
                                                <p class="date">February 14, 2014</p>
                  				</li>
                                          
                  			</ul>
                                    <a class="prev shake shake-little" id="burning_issue_prev" href="#"></a>
                                    <a class="next shake shake-little" id="burning_issue_next" href="#"></a>
                  		</div>
                  	</li>

                </ul>
                <div class="modal fade modal_custom" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                </div>
            </div>
        </div>
<?php get_footer(); ?>