<?php	
	// Include the header. You can find this in tempates/layouts/global
	perch_layout('global/header', [
		'body-class' => 'level3',
	]);
?>

<div class="row">
	<div class="small-12 large-8 large-push-4 columns">
		
		<div class="perch_content_custom" style="outline:1px solid red;">
		<?php 
			perch_content_create('Section Guide', array(
				'template' => 'level3_content.html', 
				// 'paginate' => true, 
				// 'count' => 1, 
			)); 
		?>
		</div>

		<div class="perch_content" style="outline:1px solid blue;">
		<?php perch_content_custom('Section Guide', array(
				// 'template' => 'level3_content.html', 
				'paginate' => true, 
				// 'count' => 1, 
			));  ?>
		</div>

		<div class="pagination" style="outline:1px solid green;">
		<?php 
			// perch_content_custom('Section Guide', array(
		 // 		'paginate' => true, 
		 // 		// 'count' => 1, 
			// )); 
		?>
		</div>

		<hr />

		<?php perch_pages_navigation(array(
			'navgroup' =>'starting-a-business-the-basics'
		)); ?>

		<hr />

		<?php perch_layout('global/options'); ?>

	</div><!-- // .small-12 large-8 large-push-4 columns -->

	<?php perch_layout('global/navigation'); ?>

</div><!-- // .row -->

<?php perch_layout('global/footer'); ?>