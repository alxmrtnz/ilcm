
<?php 
	if( have_rows('agency_referrals') ): 
?>

	<?php while( have_rows('agency_referrals') ): the_row(); 
		// vars
		$agencyName = get_sub_field('agency_name');
		$agencyByline = get_sub_field('agency_byline');
		$agencyContact = get_sub_field('agency_contact_info');
		$agencyURL = get_sub_field('agency_url');
	?>

		<p class="agency__name">
			<?php echo $agencyName; ?>
		</p>

		<?php 
			if($agencyByline != '') {
				echo '<p class="agency__byline">';
				echo $agencyByline;
				echo '</p>';
			}
		?>

		<p class="agency__contact">
			<?php echo $agencyContact; ?>
		</p>

		<?php 
			if($agencyURL != '') {
				echo '<a class="agency__url text-link text-link--primary" href="';
				echo $agencyURL;
				echo '" target="_blank">';
				echo 'Go to Site';
				echo '</a>';
			}
		?>
	
		
	<?php endwhile; ?>


<?php endif; ?>