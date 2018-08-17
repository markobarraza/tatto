
$(function(){
	$(".inspiracion__big").attr("src", "https://picsum.photos/500/500?image=3");

	$(".inspiracion__litle").on("click", function(){
		click = $(this).attr("src");
		$(".inspiracion__big").attr("src", click);

	})
})
