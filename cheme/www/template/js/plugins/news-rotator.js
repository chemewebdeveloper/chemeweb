	$(document).ready(function(){
	setInterval("rotateNewsItems()", 5000);		
	});
       	
		
		function rotateNewsItems(){
			//Original Item that I need to hide
			var originalItem = $("#current.news-item");
				originalItem.removeClass("news-item");
				originalItem.addClass("news-item omega");
				originalItem.removeAttr("id");
				originalItem.hide(2000);
			//News Item - this was the news item omega
			var newsItem = originalItem.next();
			newsItem.removeClass("news-item omega");
			newsItem.addClass("news-item");
			var newsItemOmega = newsItem.next();
			//News Item Omega - I have to show this
			if(newsItemOmega.length == 0){
						newsItem.hide();
						newsItem.removeClass("news-item");
						newsItem.addClass("news-item omega")
			 			newsItemOmega = $(".news-item:first");
						newsItemOmega.removeAttr("id");
						newsItemOmega.attr('id', 'current');
						newsItem = newsItemOmega.next();
			 		}else{	
				newsItem.attr('id', 'current');
		    }
			newsItem.show(2500);
			newsItemOmega.show(2500);
	
			}
