$(document).ready(function() {
	$("#search_home").click(function(){
		var url = window.location.href +$('input[name=type-search]:checked').val() + '/?text_search='+ $("#text_search").val();
		window.location.replace(url);
	});
	$()
});