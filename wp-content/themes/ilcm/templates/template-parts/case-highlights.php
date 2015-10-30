
<?php 
	if( have_rows('case_highlight') ): 
?>

	<?php while( have_rows('case_highlight') ): the_row(); 

		// vars
		$caseTitle = get_sub_field('case_title');
		$caseSummary = get_sub_field('case_summary');
		$caseLink = get_sub_field('external_link');

	?>
		<div class="case-highlight">
			<h4 class="case__heading heading--medium heading--bold">
				<?php echo $caseTitle; ?>
			</h4>
			<p class="case__summary">
				<?php echo $caseSummary; ?>
			</p>
			<a href="<?php echo $caseLink; ?>" class="text-link text-link--primary">
				Learn More
			</a>
		</div>
		
		

	<?php endwhile; ?>


<?php endif; ?>