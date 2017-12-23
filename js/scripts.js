$(function(){

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
    $("#button").css("display", "none");

});
});