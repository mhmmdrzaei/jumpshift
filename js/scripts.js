$(function(){
	$('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }

	    }

	  });

	console.log("It's working");

	        $('label').on('click', function(event) {
	 
            
            $('nav menu').toggleClass('away');



        });

	        $("li.menu-item a").on("click", function(){
				// console.log('fuckyou');
				// $("nav menu").hide();
				location.reload();

			})

	$("#button").on("click",function(){

    $("#about h2 p:nth-child(2)").css("display","block");
    $("#about h2 p:nth-child(3)").css("display","block");
    $("#button").css("display", "none");

});
});