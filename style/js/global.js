$(document).ready(function(){
	// Submit global search form
	$("#searchsubmit-wrap a").click(function(){
		$("#searchform").submit();
	});
	// Local scroll
	$.localScroll({
		duration:1000,
		hash:true
	});
	// No widows
	/*$(".title").each(function() {
        var wordArray = $(this).text().split(" ");
        wordArray[wordArray.length-2] += "&nbsp;" + wordArray[wordArray.length-1];
        wordArray.pop();
        $(this).html(wordArray.join(" "));
	});*/
});