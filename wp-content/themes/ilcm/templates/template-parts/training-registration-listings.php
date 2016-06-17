
		<ul class="position-list">
		<?php if ( have_rows('trainings_and_registration') ) : while ( have_rows('trainings_and_registration') ) : the_row(); ?>
			<li class="position-list__position row">
				<div class="position__content-left small-12 large-8 columns">
					<h4 class="position__title">
						<?php the_sub_field('title');?>
					</h4> 
					<p class="">
						<?php the_sub_field('details');?>
					</p>
					
				</div>
				<div class="small-12 large-4 columns">
					<a href="<?php the_sub_field('link_to_registration');?>" target="_blank" class="button--standard button__link button--small">
						Go to Registration
					</a>
				</div>
				

				
			</li>
		<?php endwhile; else: ?>

		<?php endif; ?>
		</ul>