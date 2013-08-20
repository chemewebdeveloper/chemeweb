 $(document).ready(function() {
 
 //select all the a tag with name equal to display
    $('a[name=display]').click(function(e) {
 
 //get the specific link clicked
	var id = $(this);
	$("#main-content").hide("slow");
	$(id).hide("slow");
	
	});



  