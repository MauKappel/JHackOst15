$(document).ready(function(){
     $("#bild2").mouseenter(function(){
         $("#bild1").css("display", "none");
         $("#bild2").css("width", "700");
	 $("#bild2").css("height", "525");
	 $("#bild2").css("float", "right");
     });
     $("#bild2").mouseleave(function(){
         $("#bild1").css("display", "inline-block");
	 $("#bild2").css("width", "500");
         $("#bild2").css("height", "375");
     });     
});

