//====================for smooth scrooling header-bottom effect=============//
$(window).on('scroll', function (event) {
    var scrollValue = $(window).scrollTop();
    if (scrollValue>0){
        $('.header-top').addClass('fixed-top');
        $('.header-bottom').addClass('margin-top');
    }else{
        $('.header-top').removeClass('fixed-top');
        $('.header-bottom').removeClass('margin-top');
    }
});



/*======================for countdown timer=======================*/
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  /* var days = Math.floor(distance / (1000 * 60 * 60 * 24)); */
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + ": " + minutes + ": " + seconds + ": " + "Left";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);


//====================Index page owl curosel=============//
$(document).ready(function(){
  // top sale owl carousel
  $("#top-sale .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    responsive : {
        0 : {
            items: 2
        },
        480: {
            items: 3
        },
        768 : {
            items: 4
        },
        1280 : {
            items: 6
        }
    }
    });


    // isotope filter
    var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    })

    // new phones owl carousel
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0 : {
                items: 2
            },
            480: {
                items: 3
            },
            768 : {
                items: 4
            },
            1280 : {
                items: 6
            }
        }
    });

    // Men footwear owl carousel
    $("#shoes .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0 : {
                items: 2
            },
            480: {
                items: 3
            },
            768 : {
                items: 4
            },
            1280 : {
                items: 6
            }
        }
    });

    // electronic owl carousel
    $("#electronic .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0 : {
            items: 2
        },
        480: {
            items: 3
        },
        768 : {
            items: 4
        },
        1280 : {
            items: 6
        }
        }
    });

    // fashion owl carousel
    $("#fashion .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0 : {
            items: 2
        },
        480: {
            items: 3
        },
        768 : {
            items: 4
        },
        1280 : {
            items: 6
        }
        }
    });

    // electronic owl carousel
    $("#laptop .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive : {
            0 : {
            items: 2
        },
        480: {
            items: 3
        },
        768 : {
            items: 4
        },
        1280 : {
            items: 6
        }
        }
    });


    //=================== product qty section===============//
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() >= 1 && $input.val() <= 9){
            $input.val(function(i, oldval){
                return ++oldval;
            });
        }
    });

       // click on qty down button
       $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <= 10){
            $input.val(function(i, oldval){
                return --oldval;
            });
        }
    });

});

//=========================search filter page start ====================//
$(document).on('click','.clos', function () {
    $(this).hide();
})
//clear all btn
$(document).on('click','.clear-all', function () {
    $(".clos").hide();
    $(this).hide();
})

//====================shopping cart start==============//
