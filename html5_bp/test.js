 $(function(){
	$("#list").bind("mouseover", highlight);
	$("#list").bind("mouseleave", highlight);
		});
 function highlight(evt) {
	$("#list").toggleClass("highlight");
	};