$(document).ready(function() {
	$( "#header" ).load( "topbar.html" );
	$( "#content" ).load( "content.html" );
	$( "#sidebar" ).load( "sidebar.html" );
	$( "head" ).append('<link rel="stylesheet" href="layout.css" type="text/css" />');
});