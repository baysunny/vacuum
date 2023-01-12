$(document).ready(function(){
    $(".sub-navbar-menu .nav-item a").mouseleave(function(){
        if(!$(this).hasClass("active")){
          // alert($(this).text())
            $(this).removeClass("text-white").addClass("text-darkblue").removeClass("nav-btn-darkblue")
        }
      
    })

    $(".sub-navbar-menu .nav-item a").mouseenter(function(){
        $(this).removeClass("text-darkblue").addClass("nav-btn-darkblue").addClass("text-white")
    })

    window.onscroll = function() {scrollFunction()}

    var mybutton = document.getElementById("back-to-top")
    function scrollFunction() {
        if(document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
            mybutton.style.display = "block"
        }else{
            mybutton.style.display = "none"
        }
    }
})

let items = document.querySelectorAll('.my-carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
          next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})

