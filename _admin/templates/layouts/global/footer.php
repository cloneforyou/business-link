<div class="row">
	<div class="small-12 columns">

		<a name="skipfooter" id="skipfooter"></a>

		<footer>
			<nav class="sub-links">
				<p>
					<a href="https://www.gov.uk/help" target="_blank">Help &amp; Support</a> | 
					<a href="http://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/copyright-and-re-use/crown-copyright/" target="_blank">&copy; Crown Copyright</a> | 
					<a href="https://www.gov.uk/help/terms-conditions" target="_blank">Terms &amp; Conditions</a> | 
					<a href="https://www.gov.uk/help/privacy-policy" target="_blank">Privacy Policy</a> | 
					<a href="https://www.gov.uk/help/accessibility" target="_blank">Accessibility</a> | 
					<a href="https://www.gov.uk/help/cookies" target="_blank">Cookies</a> |
					<a href="#" title="Site map">Sitemap</a> |
					<a href="about-business-link.php">About us</a>
				</p>
			</nav><!-- end .sub-links -->

			<a name="skiphelp"id="skiphelp"></a>

			<!-- Regional Support dropdown
			<h2>Select your location</h2>
			<p>Use the drop down menu to set your location and find help in your area.</p>
			<img alt="United Kingdom Map" src="/_img/UK_map_lt.png">
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

			<form method="get" action="#">
				<fieldset>
					<input type="hidden" name="resultPage" value="1"/>
					<label for="headersearchinput">Search</label>
					<input id="headersearchinput" type="text" name="expression" />
					<input type="submit" value="Search" id="headersearchsubmit" title="Start the search" />
				</fieldset>
			</form>
			 -->

			<div id="bottomgroup">
				<div id="tabs">
					<ul class="menu">
						<li><a href="#">My Business</a></li>
						<li><a href="whats-new.php">What's new?</a></li>
						<li><a href="do-it-online.php" title="Search or browse our directory to find online and downloadable forms to use when dealing with government departments and agencies">Do it online</a></li>
						<li><a href="directories.php">Directories</a></li>
					</ul>
					<p><small><a href="http://www.blueocto.co.uk" title="Web Design and Development Newcastle" target="_blank" rel="noopener noreferrer">Reincarnated and maintained by Caroline Hagan at Blueocto Ltd</a> &nbsp;|&nbsp; Please bear with me, this website is in <span class="alert label">ALPHA</span></small></p>
				</div>
			</div>

		</footer>

	</div><!-- // .small-12 .columns -->
</div><!-- // .row -->

<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

<?php /* Load What-Input files in footer */ ?>
<script defer src="<?php $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']); ?>/_vendor/what-input/dist/what-input.min.js"></script>
<?php /* Adding Foundation scripts file in the footer */ ?>
<script defer src="<?php $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']); ?>/assets/js/foundation.min.js"></script>
<?php /* Load What-Input files in footer */ ?>
<script defer src="<?php $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']); ?>/assets/js/scripts.min.js"></script>
<?php /* Typekit - Proxima Nova Soft
<script defer src="https://use.typekit.net/hnm1usr.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
 */ ?>
<?php /* Font Awesome CDN */ ?>
<script src="https://use.fontawesome.com/4f840bacf9.js"></script>


<?php perch_get_javascript(); ?>
</body>
</html>