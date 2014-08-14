<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Pragmatic Mate s.r.o. - http://pragmaticmates.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
  
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('libraries/chosen/chosen.min');
		echo $this->Html->css('libraries/pictopro-outline/pictopro-outline');
		echo $this->Html->css('libraries/pictopro-normal/pictopro-normal');
		echo $this->Html->css('colorbox');
		echo $this->Html->css('libraries/jslider/bin/jquery.slider.min');
		echo $this->Html->css('carat');


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

		
?>


<?

		
	?>
<script type="text/javascript">

</script>	
</head>
<body>
<div class="topbar gray">
	<div class="container">
		<div class="row">
            <div class="col-md-6 col-xs-12 header-top-left">
                <div>
                    <div class="news">
                        <div class="inner">
                                <ul class="news-list">
                                    
                                    <!-- /.news-list -->

                                </ul><!-- /.news-list -->
                        </div><!-- /.inner -->
                    </div><!-- /.news -->
                </div>
            </div>

            <div class="col-md-6 col-xs-12 header-top-right">
                <div>
                    <div class="social">
                        <div class="inner">
                                <ul class="social-links">
                                    <li class="social-icon google-plus"><a href="#">Google+</a></li>
                                    <li class="social-icon youtube"><a href="#">YouTube</a></li>
                                    <li class="social-icon twitter"><a href="#">Twitter</a></li>
                                    <li class="social-icon pinterest"><a href="#">Pinterest</a></li>
                                    <li class="social-icon facebook"><a href="#">Facebook</a></li>
                                </ul><!-- /.social-links -->
                        </div><!-- /.inner -->
                    </div><!-- /.social -->

                    
                    
                </div>
            </div><!-- /.col-md-5 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.topbar -->

<header id="header">
	<div class="header-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 clearfix">
					<div class="brand">
						<div class="logo">
							<a href="<?php $this->Html->link(array('controller' => 'vehicles', 'action' => 'index')); ?>">
								<?php echo $this->Html->image('logo.png',array('alt'=>'Carat HTML Template')); ?>
							</a>
						</div><!-- /.logo -->

						<div class="slogan">Car Rental, Dealership  </div><!-- /.slogan -->
					</div><!-- /.brand -->
					
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
					    <span class="sr-only">Toggle navigation</span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					</button>

					<nav class="collapse navbar-collapse navbar-collapse" role="navigation">
						<ul class="navigation">
						<li>
						<?php 
						echo $this->Html->link('Acceuil', array('controller' => 'vehicles', 'action' => 'index')); 
						?>
						</li>						

						<li class="menuparent has-regularmenu">
							<a href="magazine.html">Features</a>

							<div class="regularmenu">
								<ul class="regularmenu-inner">
									<li><a href="#"><i class="icon icon-normal-car"></i> Car Detail</a></li>
                                                                        <li><a href="filter.html"><i class="icon icon-normal-magnifier"></i> Search results</a></li>
                                                                        <li><?php echo $this->Html->link('Nous sommes qui', array('controller' => 'pages', 'action' => 'about')); ?></li>
									<li><a href="faq.html"><i class="icon icon-normal-collage-hat"></i> FAQ</a></li>
									<li><a href="pricing.html"><i class="icon icon-normal-coins"></i> Pricing</a></li>
									<li><a href="blog.html"><i class="icon icon-normal-question-mark"></i> Blog</a></li>
									<li><a href="article.html"><i class="icon icon-normal-file-text"></i>Article Detail</a></li>
									<li><a href="404.html"><i class="icon icon-normal-cog-wheel"></i>Page Not Found</a></li>
								</ul><!-- /.regularmenu-inner -->
							</div><!-- /.regularmenu -->
						</li>

						<li class="menuparent has-regularmenu">
							<a href="#">Reservation</a>

							<div class="regularmenu">
								<ul class="regularmenu-inner">
									<li><a href="rental-1.html"><strong>1.</strong> Request Reservation</a></li>
									<li><a href="rental-2.html"><strong>2.</strong> Select Your Car</a></li>
									<li><a href="rental-3.html"><strong>3.</strong> Extra Features</a></li>
									<li><a href="rental-4.html"><strong>4.</strong> Review &amp; Checkout</a></li>
								</ul><!-- /.regularmenu-inner -->
							</div><!-- /.regularmenu -->
						</li>

						<li><a href="magazine.html">Magazine</a></li>
						<li class="menuparent has-megamenu">
							<a href="#">Popular</a>

							<div class="megamenu">
								<div class="megamenu-inner clearfix">
									<div class="col-md-4 col-sm-6 col-xs-12">
										<div class="block random-cars">
											<div class="title">
												<h2>Popular Cars</h2>
											</div><!-- /.title -->

											<div class="items">
												<div class="teaser-item-wrapper">
													<div class="teaser-item">
													    <div class="title">
													        <a href="#">Toyota Landcruiser</a>
													    </div><!-- /.title -->

								    					<div class="subtitle">Windsor Locks, CT </div><!-- /.subtitle -->

													    <div class="row">
													        <div class="picture-wrapper col-md-4 col-sm-4 col-xs-4">
													            <div class="picture">
													                <a href="#">
													                	<span class="hover">
													                		<span class="hover-inner">
													                			<i class="icon icon-normal-link"></i>
													                		</span><!-- /.hover-inner -->
													                	</span><!-- /.hover -->

													                    

								<?php echo $this->Html->image('content/toyota4.jpg',array('alt'=>'Carat HTML Template')); ?>
													                </a>
													            </div><!-- /.picture -->
													        </div><!-- /.col-md-5 -->

													        <div class="content-wrapper col-md-8 col-sm-8 col-xs-8">
													            <div class="price">$9,799</div>
													            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate neque.</p>
													        </div><!-- /.col-md-7 -->
													    </div><!-- /.row -->
													</div><!-- /.teaser-item -->
												</div><!-- /.teaser-item-wrapper -->

												<div class="teaser-item-wrapper">												
													<div class="teaser-item">
													    <div class="title">
													        <a href="#">Toyota Landcruiser</a>
													    </div><!-- /.title -->

								    					<div class="subtitle">Windsor Locks, CT </div><!-- /.subtitle -->

													    <div class="row">
													        <div class="picture-wrapper col-md-4 col-sm-4 col-xs-4">
													            <div class="picture">
													                <a href="#">
													                	<span class="hover">
													                		<span class="hover-inner">
													                			<i class="icon icon-normal-link"></i>
													                		</span><!-- /.hover-inner -->
													                	</span><!-- /.hover -->
													                	  <?php echo $this->Html->image('content/toyota6.jpg',array('alt'=>'#')); ?>
													                </a>
													            </div><!-- /.picture -->
													        </div><!-- /.col-md-5 -->

													        <div class="content-wrapper col-md-8 col-sm-8 col-xs-8">
													            <div class="price">$9,799</div>
													            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate neque.</p>
													        </div><!-- /.col-md-7 -->
													    </div><!-- /.row -->
													</div><!-- /.teaser-item -->
												</div><!-- /.teaser-item-wrapper -->
											</div><!-- /.items -->
										</div><!-- /.block -->				
									</div>

									<div class="col-md-3 col-sm-6">
										<h2>Recent Posts</h2>

										<div class="latest-reviews block">
											<div class="block-inner">
												<div class="inner">
													<div class="item-wrapper">
														<div class="item">
															<div class="title">
																<a href="#">Toyota Landcruiser</a>
															</div><!-- /.title -->

															<div class="date">10/12/2013</div><!-- /.date -->

															<div class="description">
																<p>
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate...
																</p>
															</div><!-- /.description -->
														</div><!-- /.item -->
													</div><!-- /.item-wrapper -->

													<div class="item-wrapper">
														<div class="item">
															<div class="title">
																<a href="#">Toyota RAV</a>
															</div><!-- /.title -->

															<div class="date">12/12/2013</div><!-- /.date -->

															<div class="description">
																<p>
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate...
																</p>
															</div><!-- /.description -->
														</div><!-- /.item -->			
													</div><!-- /.item-wrapper -->

													<div class="item-wrapper">
														<div class="item">
															<div class="title">
																<a href="#">Toyota 4Runner</a>
															</div><!-- /.title -->

															<div class="date">20/12/2013</div><!-- /.date -->

															<div class="description">
																<p>
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate...
																</p>
															</div><!-- /.description -->
														</div><!-- /.item -->			
													</div><!-- /.item-wrapper -->
												</div><!-- /.inner -->
											</div><!-- /.block-inner -->
										</div><!-- /.block -->									
									</div>

									<div class="col-md-5 col-sm-12">
										<h2>Our Brands</h2>								

										<div class="brands block">
											<div class="row">
												<div class="col-md-6 col-sm-6">
													<ul>
														<li><a href="#">
														<?php echo $this->Html->image('brands/ford.png',array('alt'=>'#')); ?>
														 Ford</a></li>
														<li><a href="#"><?php echo $this->Html->image('brands/toyota.png',array('alt'=>'#')); ?> Toyota</a></li>
														<li><a href="#"><?php echo $this->Html->image('brands/kia.png',array('alt'=>'#')); ?> Kia</a></li>
														<li><a href="#"><?php echo $this->Html->image('brands/opel.png',array('alt'=>'#')); ?> Opel</a></li>
														<li><a href="#">&nbsp;<?php echo $this->Html->image('brands/bmw.png',array('alt'=>'#')); ?> BMW</a></li>
													</ul>
												</div><!-- /.col-md-6 -->

												<div class="col-md-6 col-sm-6">
													<ul>
														<li><a href="#"><?php echo $this->Html->image('brands/audi.png',array('alt'=>'#')); ?> Audi</a></li>
														<li><a href="#"><?php echo $this->Html->image('brands/honda.png',array('alt'=>'#')); ?> Honda</a></li>
														<li><a href="#"><?php echo $this->Html->image('brands/volkswagen.png',array('alt'=>'#')); ?> Volkswagen</a></li>
														<li><a href="#"><?php echo $this->Html->image('brands/peugot.png',array('alt'=>'#')); ?> Peugot</a></li>
														<li><a href="#"><?php echo $this->Html->image('brands/chevrolet.png',array('alt'=>'#')); ?> Chevrolet</a></li>
													</ul>
												</div><!-- /.col-md-6 -->											
											</div><!-- /.row -->
										</div><!-- /.brands -->
									</div><!-- /.col-md-5 -->
								</div><!-- /.megamenu-inner -->
							</div><!-- /.mega-menu-->
						</li>
						<li><?php echo $this->Html->link('Contactez nous',array('controller' => 'contact','action'=>'index')); ?>
						</li>
						</ul><!-- /.nav -->
					</nav>
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.header-inner -->
 
</header><!-- /#header -->
<!-- fin header -->
<div class="infobar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				

				<div class="contact pull-right">
					<div class="contact-item phone">
						<div class="label"><i class="icon icon-normal-mobile-phone"></i></div><!-- /.label -->
						<div class="value">0603-335-840</div><!-- /.value -->
					</div><!-- /.phone -->

					<div class="contact-item mail">
						<div class="label"><i class="icon icon-normal-mail"></i></div><!-- /.label -->
						<div class="value"><a href="mailto:tahirekamal@gmail.com">tahirekamal@gmail.com</a></div><!-- /.value -->
					</div><!-- /.mail -->

					<div class="contact-item opening">
						<div class="label"><i class="icon icon-normal-clock"></i></div><!-- /.label -->
						<div class="value">Lundi - Samedi: 8:00 - 16:00</div><!-- /.value -->
					</div><!-- /.opening -->
				</div><!-- /.contact -->
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.infobar --> 




		<?php echo $this->Session->flash(); ?>
	    <?php echo $this->fetch('content'); ?>



<div id="footer">
			
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
				<div class="block random-cars">
					<div class="title">
						<h2>Popular Cars</h2>
					</div><!-- /.title -->

					<div class="items">
						<div class="teaser-item-wrapper">
							<div class="teaser-item">
							    <div class="title">
							        <a href="#">Toyota Landcruiser</a>
							    </div><!-- /.title -->

		    					<div class="subtitle">Windsor Locks, CT </div><!-- /.subtitle -->

							    <div class="row">
							        <div class="picture-wrapper col-lg-4 col-md-4 col-sm-4 col-xs-4">
							            <div class="picture">
							                <a href="#">
							                	<span class="hover">
							                		<span class="hover-inner">
							                			<i class="icon icon-normal-link"></i>
							                		</span><!-- /.hover-inner -->
							                	</span><!-- /.hover -->

							                    <?php echo $this->Html->image('content/toyota3.jpg',array('alt'=>'#')); ?>
							                </a>
							            </div><!-- /.picture -->
							        </div><!-- /.picture-wrapper -->

							        <div class="content-wrapper col-lg-8 col-md-8 col-sm-8 col-xs-8">
							            <div class="price">$9,799</div>
							            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate neque. Fusce hendrerit fermentum.</p>
							        </div><!-- /.picture-content -->
							    </div><!-- /.row -->
							</div><!-- /.teaser-item -->
						</div><!-- /.teaser-item-wrapper -->

						<div class="teaser-item-wrapper">
							<div class="teaser-item">
							    <div class="title">
							        <a href="#">Toyota Landcruiser</a>
							    </div><!-- /.title -->

		    					<div class="subtitle">Windsor Locks, CT </div><!-- /.subtitle -->

							    <div class="row">
							        <div class="picture-wrapper col-lg-4 col-md-4 col-sm-4 col-xs-4">
							            <div class="picture">
							                <a href="#">
							                	<span class="hover">
							                		<span class="hover-inner">
							                			<i class="icon icon-normal-link"></i>
							                		</span><!-- /.hover-inner -->
							                	</span><!-- /.hover -->

							                      <?php echo $this->Html->image('content/toyota2.jpg',array('alt'=>'#')); ?>
							                </a>
							            </div><!-- /.picture -->
							        </div><!-- /.picture-wrapper -->

							        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 content-wrapper">
							            <div class="price">$9,799</div>
							            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu vulputate neque. Fusce hendrerit fermentum.</p>
							        </div><!-- /.content-wrapper -->
							    </div><!-- /.row -->
							</div><!-- /.teaser-item -->
						</div><!-- /.teaser-item-wrapper -->
					</div><!-- /.items -->
				</div><!-- /.block -->				
			</div><!-- /.col-md-4 -->

			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="block">
					<div class="title">
						<h2>Subscribe to Newsletter</h2>
					</div><!-- /.title -->

					<form method="post">
						<div class="input-group">						  
						  <input type="email" class="form-control" placeholder="Your e-mail address" required="required">

					      <span class="input-group-btn">
					        <button class="btn btn-default" type="button">Submit</button><!-- /.btn -->
					      </span><!-- /.input-group-btn -->
						</div><!-- /.input-group -->
					</form>

					<br>

					<div class="opening-hours">
						<div class="day clearfix">
							<span class="name">Monday</span><span class="hours">07:00 AM - 07:00 PM</span>
						</div><!-- /.day -->

						<div class="day clearfix">
							<span class="name">Tuesday</span><span class="hours">07:00 AM - 07:00 PM</span>
						</div><!-- /.day -->

						<div class="day clearfix">
							<span class="name">Wednesday</span><span class="hours"><i class="icon icon-normal-car"></i> Demonstration drives only</span>
						</div><!-- /.day -->

						<div class="day clearfix">
							<span class="name">Thursday</span><span class="hours">07:00 AM - 07:00 PM</span>
						</div><!-- /.day -->

						<div class="day clearfix">
							<span class="name">Friday</span><span class="hours">07:00 AM - 07:00 PM</span>
						</div><!-- /.day -->

						<div class="day clearfix">
							<span class="name">Saturday</span><span class="hours">07:00 AM - 02:00 PM</span>
						</div><!-- /.day -->

						<div class="day clearfix">
							<span class="name">Sunday</span><span class="hours"><i class="icon icon-normal-door-out"></i> Closed</span>
						</div><!-- /.day -->
					</div><!-- /.opening-hours -->		
				</div><!-- /.block -->
			</div><!-- /.col-md-4 -->

			<div class="col-lg-4 col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
				<div class="block">
					<div class="title center-sm">
						<h2>Recent from Bazaar</h2>
					</div><!-- /.title -->

					<div id="carousel-example-generic" class="carousel slide gallery-grid" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
					  
						<div class="carousel-inner">
							<div class="item clearfix active">
								<div class="row">
									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota.jpg',array('alt'=>'#')); ?>
											<span class="badge">Featured</span>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota1.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota2.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->
								</div><!-- /.row -->

								<div class="row">
									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota3.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota.jpg',array('alt'=>'#')); ?>
											<span class="badge">Best Price</span>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota1.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->
								</div><!-- /.row -->

								<div class="row">
									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota.jpg',array('alt'=>'#')); ?>
											<span class="badge">Elite Seller</span>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota1.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota2.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->
								</div><!-- /.row -->
							</div><!-- /.item -->

							<div class="item clearfix">
								<div class="row">
									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->
						                	  <?php echo $this->Html->image('content/toyota2.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota3.jpg',array('alt'=>'#')); ?>
											<span class="badge">Quality A+</span>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->
								</div><!-- /.row -->

								<div class="row">
									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota1.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota2.jpg',array('alt'=>'#')); ?>
											<span class="badge">High Rating</span>
										</a>
									</div><!-- /.col-md-4 -->
								</div><!-- /.row -->

								<div class="row">
									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota2.jpg',array('alt'=>'#')); ?>
											<span class="badge">Certified</span>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota3.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->
								</div><!-- /.row -->
							</div><!-- /.item -->

							<div class="item clearfix">
								<div class="row">
									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota3.jpg',array('alt'=>'#')); ?>
											<span class="badge">Elite Seller</span>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota1.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->
								</div><!-- /.row -->

								<div class="row">
									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota3.jpg',array('alt'=>'#')); ?>
											<span class="badge">Best Price</span>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->
								</div><!-- /.row -->

								<div class="row">
									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota3.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota.jpg',array('alt'=>'#')); ?>
										</a>
									</div><!-- /.col-md-4 -->

									<div class="image col-xs-4 col-md-4">
										<a href="#">
						                	<span class="hover">
						                		<span class="hover-inner">
						                			<i class="icon icon-normal-link"></i>
						                		</span><!-- /.hover-inner -->
						                	</span><!-- /.hover -->

											  <?php echo $this->Html->image('content/toyota1.jpg',array('alt'=>'#')); ?>
											<span class="badge">High Quality</span>
										</a>
									</div><!-- /.col-md-4 -->																		
								</div><!-- /.row -->								
							</div><!-- /.item -->																			
						</div><!-- /.carousel-inner -->
					 
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<i class="icon icon-normal-left-arrow-small"></i>
						</a>

						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<i class="icon icon-normal-right-arrow-small"></i>
						</a>
					</div><!-- /.carousel -->
				</div><!-- /.block -->
			</div><!-- /.col-md-4 -->			
		</div><!-- /.row -->
	</div><!-- /.container -->

	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12 clearfix">
					<div class="copyright">
						&copy; Carat HTML Template<span class="separator">/</span> <a href="http://pragmaticmates.com/">Pragmatic Mates</a> <span class="separator">/</span> All rights reserved
					</div><!-- /.pull-left -->

					<ul class="nav nav-pills">
						<li><a href="#">Home</a></li>
						<li><a href="#">Features</a></li>
						<li><a href="#">Reservation</a></li>
						<li><a href="#">Our Offer</a></li>
						<li><a href="#">Contact</a></li>
					</ul><!-- /.nav -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.footer-bottom -->
</div><!-- /.fin footer-->
	<?php echo $this->element('sql_dump'); ?>
</body>


<?php 
		echo $this->Html->script('jquery');
		echo $this->Html->script('jquery-migrate-1.2.1');
		echo $this->Html->script('jquery.ui');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('cycle');
		echo $this->Html->script('libraries/jquery.bxslider/jquery.bxslider');
		echo $this->Html->script('libraries/easy-tabs/lib/jquery.easytabs.min');
		echo $this->Html->script('libraries/chosen/chosen.jquery');
		echo $this->Html->script('libraries/star-rating/jquery.rating');
		echo $this->Html->script('libraries/colorbox/jquery.colorbox-min');
		echo $this->Html->script('libraries/jslider/bin/jquery.slider.min');
		echo $this->Html->script('libraries/ezMark/js/jquery.ezmark');
		echo $this->Html->script('libraries/flot/jquery.flot');
		echo $this->Html->script('libraries/flot/jquery.flot.canvas');
		echo $this->Html->script('libraries/flot/jquery.flot.resize');
		echo $this->Html->script('libraries/flot/jquery.flot.time');

		echo $this->Html->script('carat');
		 ?>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;v=3.13"></script>
		
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,400,700,400italic,700italic" rel="stylesheet" type="text/css"  media="screen, projection">
<script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;v=3.13"></script>
</html>