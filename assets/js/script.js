// 'Load More' 
$(function(){
    $(".hidden-images li").slice(0, 5).show(); // select the first five
    $("#loadMore").click(function(e){ // click event for load more
        e.preventDefault();
        $("li:hidden").slice(0, 5).show(); // select next 10 hidden divs and show them
        if($("li:hidden").length == 0){ // check if any hidden divs still exist
            $("#loadMore").hide(); // alert if there are none left
        }
    });
});

// 'Back to Top'
var amountScrolled = 100;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('.back_to_top').fadeIn('slow');
	} else {
		$('.back_to_top').fadeOut('slow');
	}
});