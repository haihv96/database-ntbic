$(document).ready(function() {
	$("#search_home").click(function(){
		var url = '/' + $('select[name=type-search]').val() + '/?text_search='+ $("#text_search").val();
		window.location.replace(url);
	});
});