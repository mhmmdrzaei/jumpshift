$(function(){

	console.log("It's working");

	        $('label').on('click', function(event) {
            // event.preventDefault();
            $('nav menu').toggleClass('away');

        });

	$("#button").on("click",function(){

    $("#about h2 p:nth-child(2)").css("display","block");
    $("#button").css("display", "none");

});
});