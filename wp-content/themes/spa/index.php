<?php get_header(); ?>
<section id="slider">
		<div class="slider-grid">
        <?php 
              $slider_post = null;
              $slider_post = new WP_Query(
                  array(
                      'post_type'=>'slider',
                      'posts_per_page'=>4,
                      )
                  );
              $x = 0;
              if($slider_post->have_posts()){
                  while($slider_post->have_posts()){
                      $x++;
                      $slider_post->the_post();
          ?>
        <div class="col-md-12 col-sm-12 item">
              <?php the_post_thumbnail('slide-img'); ?>
            <div class="text <?php if($x==1 || $x==3){echo "left";}else{echo "right";} ?> ">
              <h2 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s"><strong><?php the_title(); ?></strong> <span></span></h2>
              
              <a href="#" class="btn main-btn wow fadeUpRight hvr-sweep-to-right" data-wow-duration="1.3s" data-wow-delay="1.3s"><i class="fa fa-angle-right"></i> Learn more</a>
            </div>
        </div>
        <?php
            }
            }else{
                echo "No post";
            }
            wp_reset_postdata();
        ?>
            </div>
				
</section>
    <?php
        if(have_posts()){
            the_post();
        $content = get_the_content();
        echo $content;
      }
    ?>
<section id="team">
	<div class="container">
    	<div class="row">
        	<h2 class="heading wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">our team of experts</h2>
                <div class="separator_wrapper wow bounceIn" data-wow-duration="0.7s" data-wow-delay="0.7s">
                        <div class="separator_first_circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/green-flower.png" alt="green flower">
                        </div>
                    </div>
                    <div class="members-grid">
                <?php 
                    $team_post = null;
                    $team_post = new WP_Query(
                        array(
                            'post_type'=>'team',
                            'posts_per_page'=>-1,
                            )
                        );
                    if($team_post->have_posts()){
                        while($team_post->have_posts()){
                            $team_post->the_post();
                            $expert_in = get_post_meta(get_the_ID(), '_spa_expert_in', true);
                            $member_detail = get_post_meta(get_the_ID(), '_spa_member_detail', true);
                ?>
                	<div class="col-md-3 col-sm-6 ">
                		<div class="thumbnail wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.9s">
                        	<div class="img-wrap hvr-rotate">
                      			<a href="#" class="hvr-reveal"><?php the_post_thumbnail('team-img'); ?></a>
                      		</div>
                      <div class="caption">
                        <h3><?php the_title(); ?></h3>
                        <h4><?php echo $expert_in; ?></h4>
                        <p><?php echo $member_detail; ?></p>
                      </div>
                    </div>
                	</div>
                  <?php
                      }
                      }else{
                          echo "<h2>No Team Member Show. Add New Member</h2>";
                      }
                      wp_reset_postdata();
                  ?>

                </div>
        </div>
    </div>
</section>
<section id="services">
	<div class="container">
    <div class="row">
    	<h2 class="heading wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Services</h2>
                <div class="separator_wrapper wow bounceIn" data-wow-duration="0.7s" data-wow-delay="0.7s">
                        <div class="separator_first_circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/green-flower.png" alt="green flower">
                        </div>
                    </div>
                    <div class="services-grid">      
              <?php 
                    $service_post = null;
                    $service_post = new WP_Query(
                        array(
                            'post_type'=>'services',
                            'posts_per_page'=>-1,
                            )
                        );
                    if($service_post->have_posts()){
                        while($service_post->have_posts()){
                            $service_post->the_post();
                ?>
                <div class="col-md-6 col-sm-12 services-box left-padding-none wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.9s">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 right-padding-none">
                        	<div class="img-wrap">
                      			<a href="#"><?php the_post_thumbnail('service-img'); ?></a>
                      		</div>
                        </div>
                        <div class="col-md-6 col-sm-6 left-padding-none">
                        	<div class="services-wrap">
                        	<div class="services-caption">
                      			<h3><a href="#"><?php the_title(); ?></a></h3>
                                <?php the_content(); ?>
                      		</div>
                            </div>
                        </div>
                    </div>
                 </div> 
                 <?php
                      }
                      }else{
                          echo "<h2>No Service Post. Add New Service</h2>";
                      }
                      wp_reset_postdata();
                  ?>

           </div>     
    </div>
    </div>
</section>    
<section id="plans">
	<div class="container">
    	<div class="row">
    	<h2 class="heading wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">pricing plans</h2>
               <div class="separator_wrapper wow bounceIn" data-wow-duration="0.7s" data-wow-delay="0.7s">
                        <div class="separator_first_circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/green-flower.png" alt="green flower">
                        </div>
                    </div>
         <div class="flat">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="plan wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">
                	<div class="flower"></div>
                	<h4 class="plan-name">Beginner</h4>
                	<ul class="list-unstyled">
                    <li>
                    	<p>Access from</p>
                        <strong>2PM to 8PM</strong>
                    </li>
                    <li>
                    	<p>Body & Foot</p>
                        <strong>Massages</strong>
                    </li>
                    <li>
                    	<p>Aromatherapy</p>
                        <strong>5x Sessions</strong>
                    </li>
                    <li>
                    	<p>Manicure & Pedicure</p>
                        <strong>7x Sessions</strong>
                    </li>
                    <li>
                    	<p>Herbal SPA access from</p>
                        <strong>4PM to 8PM</strong>
                    </li>
                </ul>
                	<div class="price-wrap">
                    	<div class="price-box">
                        	<strong>$29</strong>
                            <p>per month</p>
                        </div>
                    </div>
                    <a href="#" class="btn price-btn btn-lg"><i class="fa fa-angle-right"></i> Get it Now</a>
            </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="plan wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.8s">
                	<div class="flower"></div>
                	<h4 class="plan-name">Intermediate</h4>
                	<ul class="list-unstyled">
                    <li>
                    	<p>Access from</p>
                        <strong>12PM to 10PM</strong>
                    </li>
                    <li>
                    	<p>Body, Head & Foot</p>
                        <strong>Massages</strong>
                    </li>
                    <li>
                    	<p>Aromatherapy</p>
                        <strong>8x Sessions</strong>
                    </li>
                    <li>
                    	<p>Manicure & Pedicure</p>
                        <strong>10x Sessions</strong>
                    </li>
                    <li>
                    	<p>Herbal SPA access from</p>
                        <strong>2PM to 10PM</strong>
                    </li>
                </ul>
                	<div class="price-wrap">
                    	<div class="price-box">
                        	<strong>$45</strong>
                            <p>per month</p>
                        </div>
                    </div>
                    <a href="#" class="btn price-btn btn-lg"><i class="fa fa-angle-right"></i> Get it Now</a>
            </div>
         	</div>
         	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="plan wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.8s">
                	<div class="flower"></div>
                	<h4 class="plan-name">Advanced</h4>
                	<ul class="list-unstyled">
                    <li>
                    	<p>Access from</p>
                        <strong>10AM to 12AM</strong>
                    </li>
                    <li>
                    	<p>Body, Head & Foot</p>
                        <strong>Massages</strong>
                    </li>
                    <li>
                    	<p>Aromatherapy</p>
                        <strong>12x Sessions</strong>
                    </li>
                    <li>
                    	<p>Manicure & Pedicure</p>
                        <strong>15x Sessions</strong>
                    </li>
                    <li>
                    	<p>Herbal SPA access from</p>
                        <strong>12PM to 12AM</strong>
                    </li>
                </ul>
                	<div class="price-wrap">
                    	<div class="price-box">
                        	<strong>$79</strong>
                            <p>per month</p>
                        </div>
                    </div>
                    <a href="#" class="btn price-btn btn-lg"><i class="fa fa-angle-right"></i> Get it Now</a>
            </div>
     		</div>
     		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            	<div class="plan wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.8s">
                	<div class="flower"></div>
                	<h4 class="plan-name">Ultimate</h4>
                	<ul class="list-unstyled">
                    <li>
                    	<p>Access from</p>
                        <strong>7AM to 12AM</strong>
                    </li>
                    <li>
                    	<p>Body, Head & Foot</p>
                        <strong>Massages</strong>
                    </li>
                    <li>
                    	<p>Aromatherapy</p>
                        <strong>Unlimited Sessions</strong>
                    </li>
                    <li>
                    	<p>Manicure & Pedicure</p>
                        <strong>Unlimited Sessions</strong>
                    </li>
                    <li>
                    	<p>Herbal SPA access from</p>
                        <strong>7AM to 12AM</strong>
                    </li>
                </ul>
                	<div class="price-wrap">
                    	<div class="price-box">
                        	<strong>$29</strong>
                            <p>per month</p>
                        </div>
                    </div>
                    <a href="#" class="btn price-btn btn-lg"><i class="fa fa-angle-right"></i> Get it Now</a>
            </div>
     		</div>
			</div>      
        </div>        
    </div>
</section>
<section id="portfolio">
		<div class="container">
    	<div class="row">
                <h2 class="heading wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Our Portfolio</h2>
                <div class="separator_wrapper wow bounceIn" data-wow-duration="0.7s" data-wow-delay="0.7s">
                        <div class="separator_first_circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/green-flower.png" alt="green flower">
                        </div>
                    </div>
                    </div>
     	</div>
        <div class="container">
        	<div class="row">
    	<div class="col-md-12">
                    <ul class="portfolio-filter wow bounceIn" data-wow-duration="0.8s" data-wow-delay="0.8s">
                            <li><a class="btn active margin-5" href="#" data-filter="*">All</a></li>
                            <li><a class="btn margin-5" href="#" data-filter=".face">Face</a></li>
                            <li><a class="btn margin-5" href="#" data-filter=".foot">Foot</a></li>
                            <li><a class="btn margin-5" href="#" data-filter=".bodys">Body</a></li>
                            <li><a class="btn margin-5" href="#" data-filter=".massages">Massages</a></li>
                        </ul>
        </div>
    </div>
    	</div>
<div class="portfolio-grid">
                    <ul class="portfolio-items col-4">
                        <li class="portfolio-item massages">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/thumbs/portfolio12.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn" title="Image Title Here" href="assets/images/portfolio/portfolio12.jpg"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                       
                        <li class="portfolio-item  bodys">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/thumbs/portfolio13.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn" title="Image Title Here" href="assets/images/portfolio/portfolio13.jpg"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolio-item  face ">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/thumbs/portfolio3.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn" title="Image Title Here" href="assets/images/portfolio/portfolio3.jpg"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolio-item foot">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/thumbs/portfolio4.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn" title="Image Title Here" href="assets/images/portfolio/portfolio4.jpg"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolio-item foot">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/thumbs/portfolio5.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn" title="Image Title Here" href="assets/images/portfolio/portfolio5.jpg"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolio-item massages bodys">
                            <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/thumbs/portfolio2.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn" title="Image Title Here" href="assets/images/portfolio/portfolio2.jpg"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolio-item massages">
                           <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/thumbs/portfolio7.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn" title="Image Title Here" href="assets/images/portfolio/portfolio7.jpg"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="portfolio-item massages">
                           <div class="item-main">
                                <div class="portfolio-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio/thumbs/portfolio8.jpg" alt="">
                                    <div class="overlay">
                                        <a class="preview btn" title="Image Title Here" href="assets/images/portfolio/portfolio8.jpg"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                         
                    </ul>
</div>        
</section>
<section id="booking">
		<div class="container">
    	<div class="row">
                <div class="col-md-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                	<?php echo $spa['appointment_field']; ?>
                </div>
         	</div>
     	</div>
</section>        
       
<!-- plans end -->
<section id="contact">
		<div class="container">
    	<div class="row">
                <h2 class="heading wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">let's get in touch</h2>
                <div class="separator_wrapper wow bounceIn" data-wow-duration="0.7s" data-wow-delay="0.7s">
                        <div class="separator_first_circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/green-flower.png" alt="green flower">
                        </div>
                    </div>
                    <div class="col-md-12">
                	 <?php echo do_shortcode('[contact-form-7 id="109" title="Contact Form" html_class="form-horizontal contact-form"]'); ?>
                </div>
       </div>
       </div>
<div class="locations">
	<div class="container">
    	<div class="row">
        	<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            	<h4>Los Angeles</h4>
                <ul class="list-unstyled">
                  <li>Angel Street 146, B16</li>
                  <li>(058) 569 3668</li>
                  <li><a href="#">la@ygritte.com</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            	<h4>New York</h4>
                <ul class="list-unstyled">
                  <li>West 36th Street, East Building</li>
                  <li>(089) 256 36598</li>
                  <li><a href="#">ny@ygritte.com </a></li>
                </ul>
            </div>
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            	<h4>Chicago</h4>
                <ul class="list-unstyled">
                  <li>Wonderland St., 4895 C1</li>
                  <li>(056) 896 3669</li>
                  <li><a href="#">chicago@ygritte.com</a></li>
                </ul>
            </div>
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            	<h4>Las Vegas</h4>
                <ul class="list-unstyled">
                  <li>Caesar Blvd. 896B</li>
                  <li>(086) 556 9986</li>
                  <li><a href="#">lv@ygritte.com</a></li>
                </ul>
            </div>
        </div>
		</div>
        </div>
        
       </section>  
<section class="map">
 <div id="contact_map"></div>
</section>       
<?php get_footer(); ?>