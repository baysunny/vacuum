var multipleCardCarousel = document.querySelector(
  "#servicesCarousel"
);


// window_width = $(window).width();
// $(window).on("resize", function(){
// 		var window_width = $(window).width();
// });

if($(window).width() > 768){
  	var carousel = new bootstrap.Carousel(multipleCardCarousel, {
	    	interval: false,
		});
	  
		var carouselWidth = $(".carousel-inner")[0].scrollWidth;
		var cardWidth = $(".carousel-item").width();
		var scrollPosition = 0;
		$("#servicesCarousel .carousel-control-next").on("click", function () {

				if (scrollPosition < carouselWidth - cardWidth * 4) {
	      		scrollPosition += cardWidth;
	      		$("#servicesCarousel .carousel-inner").animate(
	        			{ scrollLeft: scrollPosition },
	        		600
	      		);
	    	}
		});

		$("#servicesCarousel .carousel-control-prev").on("click", function () {
				if (scrollPosition > 0) {
	      		scrollPosition -= cardWidth;
	      		$("#servicesCarousel .carousel-inner").animate(
	        			{ scrollLeft: scrollPosition },
	        			600
	      		);
	    	}
		});
}else {
  	$(multipleCardCarousel).addClass("slide");
}