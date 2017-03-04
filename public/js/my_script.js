$(document).ready(function() {
	$("#search_home").click(function(){
		console.log();
		var url = '/' + $('input[name=type-search]:checked').val() + '/?text_search='+ $("#text_search").val();
		window.location.replace(url);
	});
	$()
});