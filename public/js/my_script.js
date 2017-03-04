$(document).ready(function() {
	$("#search_home").click(function(){
		window.location.replace('/database-ntbic/' + $('input[name=type-search]:checked').val() + '/?text_search='+ $("#text_search").val());
	});
});