// Avoid `console` errors in browsers that lack a console.
(function(){var e;var d=function(){};var b=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeStamp","trace","warn"];var c=b.length;var a=(window.console=window.console||{});while(c--){e=b[c];if(!a[e]){a[e]=d}}}());

// Place any jQuery/helper plugins in here.

$(document).ready(function(){

	
	// external links
	$("a[rel='external']").addClass("external").attr('title', function() { return this.title + ' (Opens in New Window)' });
	$('body').on('click', "a[rel='external']", function() { window.open(this.href); return false; });

});

// Google Analytics
//(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;e=o.createElement(i);r=o.getElementsByTagName(i)[0];e.src='//www.google-analytics.com/analytics.js';r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));ga('create','UA-XXXXX-X');ga('send','pageview');