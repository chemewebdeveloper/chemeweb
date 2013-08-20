$(function(){ 
//I've put this first one this way just so it is easier to see the layout of the javascript functions
$("#one").mouseenter(function(){
	timer = setTimeout(function(){
		$("#job").fadeIn(300);
		}, 600);//Ent Time Function
	});//End Mouse Enter Function
$("#one").mouseleave(function(){$("#job").fadeOut(300);clearTimeout(timer);});
$("#two").mouseenter(function(){timer = setTimeout(function(){$("#mit").fadeIn(300);}, 600);})
$("#two").mouseleave(function(){$("#mit").fadeOut(300);clearTimeout(timer);});
$("#three").mouseenter(function(){timer = setTimeout(function(){$("#publications").fadeIn(300);}, 600);})
$("#three").mouseleave(function(){$("#publications").fadeOut(300);clearTimeout(timer);});
$("#four").mouseenter(function(){timer = setTimeout(function(){$("#baxter").fadeIn(300);}, 600);})
$("#four").mouseleave(function(){$("#baxter").fadeOut(300);clearTimeout(timer);});
$("#five").mouseenter(function(){timer = setTimeout(function(){$("#chem513").fadeIn(300);}, 600);})
$("#five").mouseleave(function(){$("#chem513").fadeOut(300);clearTimeout(timer);});
$("#six").mouseenter(function(){timer = setTimeout(function(){$("#newfaculty").fadeIn(300);}, 600);})
$("#six").mouseleave(function(){$("#newfaculty").fadeOut(300);clearTimeout(timer);});
});//End Function