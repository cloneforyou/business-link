<div class="row">
	<div class="large-12 columns">

		<a name="skipfooter" id="skipfooter"></a>

		<footer>
			<nav class="sub-links">
				<p>
					<a href="https://www.gov.uk/help" target="_blank">Help &amp; Support</a> | 
					<a href="http://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/copyright-and-re-use/crown-copyright/" target="_blank">&copy; Crown Copyright</a> | 
					<a href="https://www.gov.uk/help/terms-conditions" target="_blank">Terms &amp; Conditions</a> | 
					<a href="https://www.gov.uk/help/privacy-policy" target="_blank">Privacy Policy</a> | 
					<a href="https://www.gov.uk/help/accessibility" target="_blank">Accessibility</a> | 
					<a href="https://www.gov.uk/help/cookies" target="_blank">Cookies</a>
					<a href="#" title="Site map">Site map</a>
					<a href="about-business-link.php">About us</a>
				</p>
			</nav><!-- end .sub-links -->

			<a name="skiphelp"id="skiphelp"></a>

			<!-- Regional Support dropdown -->
			<form id="localForm" method="get" action="#">
				<fieldset>
					<label for="localBusinessLink">Regional Support</label>
					<select id="localBusinessLink" name="Site Id">
						<option selected="selected" value="default">Select your location</option>
						<optgroup label="Northern Ireland">
							<option value=''>nibusinessinfo.co.uk</option>
						</optgroup>
						<optgroup label="Scotland">
							<option value=''>Business Gateway</option>
						</optgroup>
						<optgroup label="Wales">
							<option value=''>Welsh Government</option>
						</optgroup>
					</select>
					<input type="submit" value="Go" />
				</fieldset>
			</form>

			<!-- Search form -->
			<form method="get" action="#">
				<fieldset>
					<input type="hidden" name="resultPage" value="1"/>
					<label for="headersearchinput">Search</label>
					<input id="headersearchinput" type="text" name="expression" />
					<input type="submit" value="Search" id="headersearchsubmit" title="Start the search" />
				</fieldset>
			</form>

			<div id="bottomgroup">
				<div id="tabs">
					<ul>
						<li><a href="#">My Business</a></li>
						<li><a href="whats-new.php">What's new?</a></li>
						<li><a href="do-it-online.php" title="Search or browse our directory to find online and downloadable forms to use when dealing with government departments and agencies">Do it online</a></li>
						<li><a href="directories.php">Directories</a></li>
					</ul>
				</div>
			</div>

			<?php include $_SERVER['DOCUMENT_ROOT'].'/_inc/category-links.php'; ?>

		</footer>

	</div><!-- // .large-12 .columns -->
</div><!-- // .row -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/_inc/scripts.php'; ?>

</body>
</html>