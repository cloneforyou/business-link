<div class="small-12 large-4 large-pull-8 columns">

	<div class="categories">

		<a name="skipleft" id="skipleft"></a>

		<div id="left">
			<div id="closedcategories">

				<?php
					perch_pages_navigation(array(
						'from-path'				=> '/',
						'levels'				=> 0,
						'hide-extensions'		=> false,
						'hide-default-doc'		=> true,
						'flat'					=> false,
						'template'				=> 'accordionnav.html', 
						'include-parent'		=> false,
						'skip-template'			=> false,
						'siblings'				=> false,
						'only-expand-selected'	=> false,
						'add-trailing-slash'	=> false,
						'navgroup'				=> false,
						'include-hidden'		=> false,
					));
				?>

			</div><!-- #closed categories -->

			<hr />

			<div id="serviceprovider">
				<p>
					<a href="https://www.gov.uk/government/organisations/cabinet-office" title="Get the latest news from the Cabinet Office" target="_blank" rel="noopener noreferrer">
						In partnership with Cabinet Office
						<img src="/_img/logo_hm_gov2.jpg" width="167" height="31" alt="HM Government" />
					</a>
				</p>
			</div><!-- #serviceprovider -->
		</div><!-- #left -->

	</div><!-- // .categories -->

</div><!-- // .small-12 large-6 columns -->