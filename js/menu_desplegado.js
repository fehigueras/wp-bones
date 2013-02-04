jQuery(document).ready(function($) {
	jQuery("#menu_inferior > li",this).hover(
		function(){
		jQuery("ul", this).css("display", "block");
		},
		function(){
		jQuery("ul", this).css("display", "none");
		}
		);
});



