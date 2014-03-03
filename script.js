$(document).ready(function() {
	$( "#header" ).load( "topbar.html" );
	$( "#article" ).load( "content.html" );
	$( "#sidemenu" ).load( "sidebar.html" );
	$( "#footer" ).load( "foot.html" );
	$( "head" ).append('<link rel="stylesheet" href="layout.css" type="text/css" />');
});