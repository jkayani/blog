// Code not used currently 
function responsiveScroll(){
	if(jQuery(window).width() <= 580){
		console.log("Resizing?");
		jQuery(window).scrollTop(jQuery("section.right").height());
	}
}
jQuery(document).ready(function(){
	responsiveScroll();
});
jQuery(window).resize(function(){
	responsiveScroll();
});
