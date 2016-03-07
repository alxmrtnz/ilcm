


<div class="row">
		
		<?php
		if( have_rows('presentations') ): ?>
			<?php 

			// loop through rows (parent repeater)
			while( have_rows('presentations') ): the_row(); ?>
					<div class="small-12 columns">
						<div class="presentation-summary">
							<h2 class="heading--medium heading--bold">
								<?php the_sub_field('presentation_title'); ?>
							</h2>
							<h3 class="heading--small heading--sub-gray">
								<?php the_sub_field('presentation_subtitle');?>
							</h3>
							<div class="presentation-description paragraph--standard">
								<?php the_sub_field('presentation_description') ?>
							</div>
						</div>
					</div>

				<?php endwhile; // while( has_sub_field('presentations') ): ?>
			
			<?php endif; // if( get_field('presentations') ): ?>
</div>

	

