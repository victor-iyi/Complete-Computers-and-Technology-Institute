$(document).ready(function(){
	$('#partners').tabs({ 
		ajaxOptions: { error: function(xhr, index, status, anchor){
		$(anchor.hash).text('Could not load page.')
	} } })//.find('.ui-tabs-nav').sortable({ axis: 'x'});
});