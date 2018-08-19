// Modal img section inspiracion
$(function(){
	$(".inspiracion__big").attr("src", "https://picsum.photos/500/500?image=3");

	$(".inspiracion__litle").on("click", function(){
		click = $(this).attr("src");
		$(".inspiracion__big").attr("src", click);

	})
})

// $(function(){
// 	$("a[href='#top']").on("click", function(){
// 		$("html, body").animate({ scrollTop: auto }, "slow");
//   		return false;
// 	})
// })

// Scroll to...
$(function(){
	$(".cover__icon").on("click", function() {
	    $('html, body').animate({
	        scrollTop: $("#top").offset().top
	    }, 1000);
	});
})
