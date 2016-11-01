<?php	
	// Include the header. You can find this in tempates/layouts/global
	perch_layout('global/header', [
		'body-class' => 'home',
	]);

	// An editable content region
	perch_content('Main heading');

    // Main navigation
    perch_pages_navigation([
    	'levels'=>1
    ]);

    // An editable content region
    perch_content('Intro');

 	// Include the footer. You can find this in tempates/layouts/global
    perch_layout('global/footer');
