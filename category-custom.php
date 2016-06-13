<?php /* Template Name: Custom Category Page */ ?>
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
        				'post_type' => 'attachment'
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
			</div>
      		</div>
      	</div>
<?php get_footer(); ?>
