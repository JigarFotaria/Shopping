  $(document).ready(function() {


      

    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    });


    $('.fa-heart-o').on('click', function(){
        $(this).toggleClass('color-red');
        return false;
    });

    $('.remove').on('click',function(){
        $(this).parents('.col-sm-6.col-xs-6.col-md-4').fadeOut();
        return false;
    });

    
    $(window).load(function(){
        setTimeout(function(){
       $('#sub-email').modal('show');
            }, 3000);
        });


    // $(document).ready(function(){

    //     $('.filter').click(function(){
    //          $('.l-pannel').toggleClass('active');
    //          $('.filter').toggleClass('toggle');
    //          $('.close').removeClass('active);
    //          return false;
    //       });


    // });



    $('.bag').on('click', function(){
        window.location = "cart.php"
    });
    $('.removeItem').on('click', function(){
        $(this).parents('.itemRow').remove();
    });
    $('.ol1').owlCarousel({
        loop:true,
        margin:10,
        rewind: true,
        navText: ["<i class='fa fa-long-arrow-left' aria-hidden='true'></i>","<i class='fa fa-long-arrow-right' aria-hidden='true'></i>"],
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:10000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:3,
                nav:false
            },
            600:{
                items:2,
                nav:false,
            },
            1000:{
                items:4,
                nav:false,
                loop:true
            }
        }
    });

    $('.discount').owlCarousel({
        loop:true,
        margin:10,
        rewind: true,
        navText: ["<i class='fa fa-long-arrow-left' aria-hidden='true'></i>","<i class='fa fa-long-arrow-right' aria-hidden='true'></i>"],
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:10000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false,
            },
            1000:{
                items:1,
                nav:false,
                loop:true
            }
        }
    });

    $('.ol2').owlCarousel({
        loop:true,
        margin:10,
        rewind: true,
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:10000,
        autoplayHoverPause:false,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:false,
                loop:true
            }
        }
    });


   

   
});
    


         
