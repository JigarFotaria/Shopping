  $(document).ready(function() {
    $('.fa-heart-o').on('click', function(){
        $(this).toggleClass('color-red');
        return false;
    });
    $('.bag').on('click', function(){
        window.location = "cart.html"
    });
    $('.removeItem').on('click', function(){
        $(this).parents('.itemRow').remove();
    });
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        navText: ["<i class='fa fa-long-arrow-left' aria-hidden='true'></i>","<i class='fa fa-long-arrow-right' aria-hidden='true'></i>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:true,
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })

});
         
