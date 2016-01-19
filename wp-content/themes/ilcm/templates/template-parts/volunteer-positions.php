	<h2><?php the_field('position_group_title');?></h2>


		<ul class="position-list">
		<?php if ( have_rows('positions') ) : while ( have_rows('positions') ) : the_row(); ?>
			<li class="position-list__position row">
				<div class="position__content-left small-12 large-9 columns">
					<h4>
						<?php the_sub_field('position_title');?>
					</h4> 
					<a href="<?php the_sub_field('pdf');?>" target="_blank" class="position-detail-link">View Position Details</a>
					<h5 class="heading--micro">
						Responsibilities
					</h5>
					<p class="">
						<?php the_sub_field('responsibilities');?>
					</p>
					<h5 class="heading--micro">
						Requirements
					</h5>
					<p class="">
						<?php the_sub_field('requirements');?>
					</p>
				</div>
				<div class="small-12 large-3 columns">
					<p class="position-detail">
						<?php the_sub_field('application_timeline');?>
					</p>
				</div>
				

				
			</li>
		<?php endwhile; else: ?>

			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

		<?php endif; ?>
		</ul>