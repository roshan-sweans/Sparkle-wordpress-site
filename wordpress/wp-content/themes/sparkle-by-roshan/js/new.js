jQuery(document).ready(function($) {
    $(".search-section").hide()
    $(".search-toggle").on("click",function(){
        $(".search-section").slideToggle()
    })
    $('#services').owlCarousel({
        loop:false,
        margin:0,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1100:{
                items:3
            },
            1200:{
                items:4
            }
        }
    })
    $('#docs').owlCarousel({
        loop:false,
        margin:0,
        items:1
    })
})
