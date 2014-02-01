 



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
	
		
		$("#me-link").click(function() {

			if(!$("#art-window, #pics-window, #blog-window").is(":animated")){

				if(document.getElementById("art-window")!==null				
				|| document.getElementById("pics-window")!==null 
				|| document.getElementById("blog-window")!==null){
					pageSlideInR("me");
				}else{
					pageSlideInR("me");
				}
				console.log("me-link");

			}	
		});
	

	//Art-sivu liuku sisään
	
		$("#art-link").click(function() {

			if(!$("#me-window, #pics-window, #blog-window").is(":animated")){

				if(document.getElementById("me-window")!==null){			
					pageSlideIn("art");
					console.log("art-link");
				}else if(document.getElementById("pics-window")!==null				
				|| document.getElementById("blog-window")!==null){
					pageSlideInR("art");
				}else{
					pageSlideInR("art");
				}

			}
			
		});
	

	//Pics-sivu liuku sisään
	
		$("#pics-link").click(function() {

			if(!$("#me-window, #art-window, #blog-window").is(":animated")){

				if(document.getElementById("blog-window")!==null){
					pageSlideInR("pics");
				}else if(document.getElementById("art-window")!==null				
				|| document.getElementById("me-window")!==null){
					pageSlideIn("pics");
				}else{
					pageSlideIn("pics");
				}
				console.log("pics-link");
			}	
		});
	

	//Blog-sivu liuku sisään
	
		$("#blog-link").click(function() {

			if(!$("#me-window, #pics-window, #me-window").is(":animated")){

				if(document.getElementById("art-window")!==null				
				|| document.getElementById("pics-window")!==null 
				|| document.getElementById("me-window")!==null){
				pageSlideIn("blog");
				}else{
					pageSlideIn("blog");
				}
				console.log("blog-link");
			}
		});
	
});


function pageSlideIn(id){

		

			if(id==="me"){
								
				if(document.getElementById("art-window")!==null				
				|| document.getElementById("pics-window")!==null 
				|| document.getElementById("blog-window")!==null) {
					console.log("me-slide");	
					
					$("#art-window, #pics-window, #blog-window").animate({"left" : "-150%"}, 800, function() {
						console.log("me-slide22");
						$(this).remove();
						
					});				
				}

		}

			if(id==="art"){
				
				if(document.getElementById("me-window")!==null 
				|| document.getElementById("pics-window")!==null
				|| document.getElementById("blog-window")!==null) {
					console.log("art-slide");
					$("#me-window, #pics-window, #blog-window").stop().animate({"left" : "-150%"}, 800, function() {
						$(this).remove();
						
					});				
				}

		}

			if(id==="pics"){
				
				if(document.getElementById("me-window")!==null 
				|| document.getElementById("art-window")!==null 
				|| document.getElementById("blog-window")!==null) {
					console.log("pics-slide");
					$("#me-window, #art-window, #blog-window").animate({"left" : "-150%"}, 800, function() {
						$(this).remove();
						
					});				
				}

		}

			if(id==="blog"){
				
				if(document.getElementById("me-window")!==null 
				|| document.getElementById("art-window")!==null 
				|| document.getElementById("pics-window")!==null) {
					console.log("blog-slide");
					$("#me-window, #art-window, #pics-window").animate({"left" : "-150%"}, 800, function() {
						$(this).remove();
						
					});				
				}

		}


		$('<div id="'+id+'-window"> </div>').appendTo('.container');
		$("#"+id+"-window").load("inc/"+id+".php");			
		$("#"+id+"-window").stop().animate({"left" : "50%"}, 800);
		

}

function pageSlideInR(id){

		

			if(id==="me"){
								
				if(document.getElementById("art-window")!==null				
				|| document.getElementById("pics-window")!==null 
				|| document.getElementById("blog-window")!==null) {
					console.log("me-slide");	
					
					$("#art-window, #pics-window, #blog-window").animate({"left" : "150%"}, 800, function() {
						console.log("me-slide22");
						$(this).remove();
						
					});				
				}

		}

			if(id==="art"){
				
				if(document.getElementById("me-window")!==null 
				|| document.getElementById("pics-window")!==null
				|| document.getElementById("blog-window")!==null) {
					console.log("art-slide");
					$("#me-window, #pics-window, #blog-window").animate({"left" : "150%"}, 800, function() {
						$(this).remove();
						
					});				
				}

		}

			if(id==="pics"){
				
				if(document.getElementById("me-window")!==null 
				|| document.getElementById("art-window")!==null 
				|| document.getElementById("blog-window")!==null) {
					console.log("pics-slide");
					$("#me-window, #art-window, #blog-window").animate({"left" : "150%"}, 800, function() {
						$(this).remove();
						
					});				
				}

		}

			if(id==="blog"){
				
				if(document.getElementById("me-window")!==null 
				|| document.getElementById("art-window")!==null 
				|| document.getElementById("pics-window")!==null) {
					console.log("blog-slide");
					$("#me-window, #art-window, #pics-window").animate({"left" : "150%"}, 800, function() {
						$(this).remove();
						
					});				
				}

		}


		$(' <div id="'+id+'-window" style="left: -50%;"> </div>').appendTo('.container');
		$("#"+id+"-window").load("inc/"+id+".php");			
		$("#"+id+"-window").stop().animate({"left" : "50%"}, 800);
		

}

