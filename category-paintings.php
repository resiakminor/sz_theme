<?php /* Template Name: Paintings Page Template */ ?>
<?php get_header(); ?>
        		<div class="col-md-9">
      				<div class="grid">
        			<?php 
        			$args = array(
        				'numberposts' => -1,
        				'orderby' => 'menu_order',
        				'order' => 'ASC',
        				'post_mime_type' => 'image',
        				'post_parent' => null,
        				'post_type' => 'attachment',
                'category_name' => 'paintings',
                'posts_per_page' => -1
        			);
        		
        			$attachments = get_posts($args);
        		
        			$post_count = count ($attachments);

        			if($attachments) {
        				foreach ($attachments as $attachment) {
        					echo "<div class=\"grid-item popup-gallery\">";
        						$img = wp_get_attachment_url($attachment->ID);
        						$title = get_the_title($attachment->ID);
        						echo '<a href="'.$img.'" title="'.$title.'" rel="lightbox"><img title="'.$title.'" src="'.$img.'"></a>';
        						echo "</div>";
        				}
        			}
        			?>
					</div>
				</div>
      			 <!-- <div class="col-md-9">
      				<div class="grid">
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="images/Pink-Mao.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
	  						<a href="<?php echo get_bloginfo('template_directory');?>/images/8-circulo.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/8-circulo.jpg"/>  
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/8-circulo.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
	  						<a href="<?php echo get_bloginfo('template_directory');?>/images/adam-and-eve.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/adam-and-eve.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/like-a-lady.jpg" title="Like a Lady - 2014 Linocut">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/like-a-lady.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
	  						<a href="<?php echo get_bloginfo('template_directory');?>/images/couple.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/couple.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/Limelight.jpg" title="Limelight - 2011 Etching,Glitter 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/Limelight.jpg"/>  
							</a>
						</div>
 		 				<div class="grid-item popup-gallery">
	 		 				<a href="<?php echo get_bloginfo('template_directory');?>/images/fantasies.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/fantasies.jpg"/>  
							</a>
 		 				</div>
  						<div class="grid-item popup-gallery">
	  						<a href="<?php echo get_bloginfo('template_directory');?>/images/figure.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/figure.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
	  						<a href="<?php echo get_bloginfo('template_directory');?>/images/four-figures.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/four-figures.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
	  						<a href="<?php echo get_bloginfo('template_directory');?>/images/hong.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="i<?php echo get_bloginfo('template_directory');?>/mages/hong.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
	  						<a href="<?php echo get_bloginfo('template_directory');?>/images/like-a-lady.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/like-a-lady.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
	  						<a href="<?php echo get_bloginfo('template_directory');?>/images/limelight.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/limelight.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/offerings.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/offerings.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/six-pregnant-prints.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/six-pregnant-prints.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
	  						<a href="<?php echo get_bloginfo('template_directory');?>/images/two-figures.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/two-figures.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg"/>  
							</a>
  						</div>
  						<div class="grid-item popup-gallery">
  							<a href="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg" title="Pink Mao - 2011 Etching, 17 x 15">
  								<img src="<?php echo get_bloginfo('template_directory');?>/images/Pink-Mao.jpg"/>  
							</a>
  						</div> -->
					</div>
      			</div>
      		</div>
<?php get_footer(); ?>