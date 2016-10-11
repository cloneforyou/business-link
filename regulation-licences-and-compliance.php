<!DOCTYPE html>
<html class="no-js">
<head>
	<title>Regulation, licences and compliance | Business Link</title>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/_inc/meta.php'; ?>
</head>

<body>

<?php include $_SERVER['DOCUMENT_ROOT'].'/_inc/header.php'; ?>

<?php include $_SERVER['DOCUMENT_ROOT'].'/_inc/breadcrumbs.php'; ?>

<div class="row">
	<div class="small-12 large-8 large-push-4 columns">

		<h1>Regulation, licences and compliance</h1>
		<p>Our unique tools and services cut through the complexities of laws and regulations, linking you to business focused, plain English guidance and the licence and permits online application service offered by many local authorities and other issuing authorities.</p>
		<p>Please note: GOV.UK will replace businesslink.gov.uk in October, <a href="/gov-uk-will-launch-in-october.php">read more about how businesslink.gov.uk is changing.</a></p>

		<h3>Your licences and compliance requirements</h3>
		<p><strong>Describe your business</strong> to find licence summaries, compliance guidance and trade bodies and contacts</p>
		<form method="get" action="http://online.businesslink.gov.uk/bdotg/action/sectorsSIMCommitPage">
			<label for="expressionNav">Search</label>
			<input type="hidden" name="searchId" value="5"/>
			<input type="hidden" name="searchQueryId" value="941"/>
			<input type="hidden" name="callerId" value="1"/>
			<input type="hidden" name="topicId" value="1086523138" />
			<input type="hidden" name="isTemplate" value="true"/>
			<input type="text" name="expression"/>
			<input type="submit" name="go" value="Go"/>
		</form>
		<ul>
			<li><a href="https://www.gov.uk/licence-finder" title="Licence finder" target="_blank" rel="noopener noreferrer">Or browse business categories</a></li>
		</ul>

		<h2>Or just search and browse licences</h2>
		<h3>Search for a licence</h3>
		<form action="http://online.businesslink.gov.uk/bdotg/action/searchAdvancedMode" method="get">
			<input type="hidden" name="resultPage" value="1"/>
			<input type="hidden" name="contentType" value="licenses"/>
			<label for="searchforlicence">Search</label>
			<input type="text" name="expression"/>
			<input type="submit" value="Go"/>
		</form>

		<h3>Browse licences</h3>
		<ul>
			<li><a href="/regulation-licences-and-compliance/browse-licence-categories.php.html">Browse licences</a></li>
		</ul>
		<ul>
			<li><a href="/do-it-online/submit-an-idea-to-the-better-regulation-executive.php.html">Submit an idea to improve regulation<br /></a>Influence how regulations that affect your business are devised and delivered</li>
			<li><a href="#">Regulation updates<br /></a>Keep track of regulation changes affecting small business with our at-a-glance guidance</li>
		</ul>

	</div><!-- // .small-12 large-8 large-push-4 columns -->

	<?php include $_SERVER['DOCUMENT_ROOT'].'/_inc/category-links.php'; ?>

</div><!-- // .row -->

<?php include $_SERVER['DOCUMENT_ROOT'].'/_inc/footer.php'; ?>