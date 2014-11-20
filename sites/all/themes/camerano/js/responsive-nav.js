(function($) {
	$(document).ready(function() {
		
		$("#responsive-nav-btn").click(function() {
			
			if($("#main-menu").css("top") == "0px") {

				$("#main-menu").css("top", "-400px");

			}

			else {

				$("#main-menu").css("top", "0px");

			}

		});

	});
})( jQuery );