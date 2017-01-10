<?php	
	// Include the header. You can find this in tempates/layouts/global
	perch_layout('global/header', [
		'body-class' => 'level3',
	]);
?>

<div class="row">
	<div class="small-12 large-8 large-push-4 columns">
		
		<h1>
			<?php 
				perch_content_create('Heading One', array(
					'template' => 'text.html'
				)); 
				perch_content('Heading One'); 
			?>
		</h1>
		<h2>
			<?php 
				perch_content_create('Heading Two', array(
					'template' => 'text.html'
				)); 
				perch_content('Heading Two'); 
			?>
		</h2>

		<?php 
			perch_content_create('Main Content', array(
				'template' => 'code_block.html'
			)); 
			perch_content('Main Content'); 
		?>

		<?php perch_layout('global/options'); ?>

	</div><!-- // .small-12 large-8 large-push-4 columns -->

	<?php perch_layout('global/navigation'); ?>

</div><!-- // .row -->

<?php perch_layout('global/footer'); ?>