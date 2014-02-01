pageSlideIn function(id){

	$("#"+id+"-link").click(function() {

			if(id==="me"){
				if(document.getElementById("art-window")!==null) 
				|| if(document.getElementById("pics-window")!==null) 
				|| if(document.getElementById("blog-window")!==null) {
					$("#art-window").animate({"left" : "-150%"}, 800, function() {
						$(this).remove();
					});				
				}

		}

		$('<div id='+id+'"-window"> </div>').appendTo('.container');
		$("#me-window").load("inc/"+id+".php");			
		$("#me-window").animate({"left" : "50%"}, 800);
		});

}



$(document).ready(function(){
	//Poistaa blogin puolella boydsta "overflow : hidden".
	if(document.getElementById("wrapper")!==null){
		$('html, body').css('overflow', 'auto');
	}
	// Liikuttaa navi palkin sivun yläkulmaan kun linkkiä painetaan
	$(".nav li ").click(function(){
		$(".nav").animate({"top" : "75px"}, 500);
		$("#port, #nimi").addClass("blurr");		
	});

	
	//Me-sivu liuku sisään
	if(document.getElementById("me-window")===null){

		$("#me-link").click(function() {

			if(document.getElementById("art-window")!==null){
				$("#art-window").animate({"left" : "-150%"}, 800, function() {
					$(this).remove();
				});				
			}
			if(document.getElementById("pics-window")!==null){
				$("#pics-window").animate({"left" : "-150%"}, 800, function() {
					$(this).remove();
				});				
			}
			if(document.getElementById("blog-window")!==null){
				$("#blog-window").animate({"left" : "-150%"}, 800, function() {
					$(this).remove();
				});				
			}

		$('<div id="me-window"> </div>').appendTo('.container');
		$("#me-window").load("inc/me.php");			
		$("#me-window").animate({"left" : "50%"}, 800);
		});
	}

	//Art-sivu liuku sisään
	if(document.getElementById("art-window")===null){
		$("#art-link").click(function() {

			if(document.getElementById("me-window")!==null){
				$("#me-window").animate({"left" : "-150%"}, 800, function() {
					$(this).remove();
				});				
			}
			if(document.getElementById("pics-window")!==null){
				$("#pics-window").animate({"left" : "-150%"}, 800, function() {
					$(this).remove();
				});				
			}
			if(document.getElementById("blog-window")!==null){
				$("#blog-window").animate({"left" : "-150%"}, 800, function() {
					$(this).remove();
				});				
			}

			$('<div id="art-window"> </div>').appendTo('.container');
			$("#art-window").load("inc/art.php");	
			$("#art-window").animate({"left" : "50%"}, 800);
		});
	}

	//Pics-sivu liuku sisään
	if(document.getElementById("pics-window")===null){
		$("#pics-link").click(function() {

			if(document.getElementById("me-window")!==null){
				$("#me-window").animate({"left" : "-150%"}, 800, function() {
					$(this).remove();
				});				
			}
			if(document.getElementById("art-window")!==null){
				$("#art-window").animate({"left" : "-150%"}, 800, function() {
					$(this).remove();
				});				
			}
			if(document.getElementById("blog-window")!==null){
				$("#blog-window").animate({"left" : "-150%"}, 800, function() {
					$(this).remove();
				});				
			}

			$('<div id="pics-window"> </div>').appendTo('.container');
			$("#pics-window").load("inc/pics.php");	
			$("#pics-window").animate({"left" : "50%"}, 800);
		});
	}

	//Blog-sivu liuku sisään
	if(document.getElementById("blog-window")===null){
		$("#blog-link").click(function() {

			if(document.getElementById("me-window")!==null){
				$("#me-window").animate({"left" : "-150%"}, 800, function() {
					$(this).remove();
				});				
			}
			if(document.getElementById("art-window")!==null){
				$("#art-window").animate({"left" : "-150%"}, 800, function() {
					$(this).remove();
				});				
			}
			if(document.getElementById("pics-window")!==null){
				$("#pics-window").animate({"left" : "-150%"}, 800, function() {
					$(this).remove();
				});				
			}

			$('<div id="blog-window"> </div>').appendTo('.container');
			$("#blog-window").load("inc/blog.php");	
			$("#blog-window").animate({"left" : "50%"}, 800);
		});
	}



});