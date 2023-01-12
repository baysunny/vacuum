var articleCarousel = document.querySelector(
  "#articleCarousel"
);


if($(window).width() > 480){
    var carousel = new bootstrap.Carousel(articleCarousel, {
        interval: false,
    });
  
    var carouselWidth = $("#articleCarousel .carousel-inner")[0].scrollWidth;
    var cardWidth = $("#articleCarousel .carousel-item").width();
    var scrollPosition = 0;
    $("#articleCarousel .carousel-control-next").on("click", function () {

        if (scrollPosition < carouselWidth - cardWidth * 2) {
            scrollPosition += cardWidth;
            $("#articleCarousel .carousel-inner").animate(
                { scrollLeft: scrollPosition },
                600
            );
        }
    });

    $("#articleCarousel .carousel-control-prev").on("click", function () {
        if (scrollPosition > 0) {
            scrollPosition -= cardWidth;
            $("#articleCarousel .carousel-inner").animate(
                { scrollLeft: scrollPosition },
                600
            );
        }
    });
}else {
    $(articleCarousel).addClass("slide");
}