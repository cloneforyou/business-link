<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php
    $crumbs = perch_pages_title(array(
        'skip-template'=>true
    ));
    echo $crumbs; 
?></title>
	<!-- Perch description/keywords/robots -->
	<?php perch_page_attributes(); ?>

	<meta charset="utf-8">
	<meta name="author" content="Caroline Hagan">

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- required for ZURB Foundation framework -->
	<meta class="foundation-mq">

	<!-- Styles -->
	<?php /* reference : http://php.net/manual/en/function.dirname.php#114600 */ ?>
	<link href="/assets/css/style.min.css" rel="stylesheet">

	<link rel="icon" href="/favicon.png">
	<link href="/_img/apple-icon-touch.png" rel="apple-touch-icon" />
	<!--[if IE]>
		<link rel="shortcut icon" href="/favicon.ico">
	<![endif]-->
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="/_img/win8-tile-icon.png">
	<meta name="theme-color" content="#121212">
</head>

<?php 
	if (perch_layout_has('body-class')) {
		echo '<body class="'.perch_layout_var('body-class', true).'">';
	}else{
		echo '<body>';
	}
?>

<div class="row">
	<div class="small-12 columns">

		<header>
			<?php /* 
				skip links - also consider keyboard access, see also
				https://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-skip.html
				https://www.w3.org/TR/WCAG20-TECHS/G1.html
			 */ ?>
			<nav class="skip-links">
				<ul class="menu">
					<li><a class="show-on-focus" href="#skipcont">Go to main content</a></li>
					<li><a class="show-on-focus" href="#skipleft">Go to main navigation</a></li>
					<li><a class="show-on-focus" href="#skiphelp">Go to site map, help, search</a></li>
					<li><a class="show-on-focus" href="#skiplogin">Go to register, log in</a></li>
					<li><a class="show-on-focus" href="#skipfooter">Go to footer navigation</a></li>
				</ul>
			</nav><!-- end .skip-links -->
			
			<div class="branding clearfix">
				<a class="top-logo" href="index.php" title="Nusiness Link for Small Businesses">
					<img src="/_img/business-link-logo.jpg" alt="Business Link logo" />
				</a>
				<p class="strapline float-left">Information. Support. Compliance.</p>
			</div><!-- end .branding -->
			
			<a name="skiplogin"></a>
			
			<div class="login clearfix">
				<ul class="menu align-right">
					<li><a href="#">Register</a></li>
					<li><a href="#">Log in</a></li>
					<!-- <li>Your Account</li> -->
				</ul>
			</div><!-- end .login -->
			
		</header>

	</div><!-- // .small-12 .columns -->
</div><!-- // .row -->

<div class="row">
	<div class="small-12 columns">

		<?php /* 
			Breadcrumbs - see the following documentation:
			https://developers.google.com/search/docs/data-types/breadcrumbs#guidelines
			http://schema.org/BreadcrumbList
		*/ ?>
		<?php perch_pages_breadcrumbs(); ?>

		<a name="skipcont" id="skipcont"></a>

	</div><!-- // .small-12 .columns -->
</div><!-- // .row -->
