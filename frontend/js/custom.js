 // Function to validate VIN input
 function setupVinValidation(inputId, errorId) {
  const vinInput = document.getElementById(inputId);
  const errorMessage = document.getElementById(errorId);

  // Check if the elements exist before adding the event listener
  if (!vinInput || !errorMessage) {
      console.error(`Element with ID ${inputId} or ${errorId} not found.`);
      return;
  }

  vinInput.addEventListener('input', function () {
      const vinLength = vinInput.value.length;

      // If VIN length is greater than 17, trim the input
      if (vinLength > 17) {
          vinInput.value = vinInput.value.slice(0, 17); // Limit input to 17 characters
      }

      // Check the length to show/hide error message
      if (vinInput.value.length === 17) {
          vinInput.classList.remove('invalid');
          errorMessage.style.display = 'none'; // Hide error message
      } else {
          vinInput.classList.add('invalid');
          errorMessage.style.display = 'block'; // Show error message
      }
  });
}

// Wait for the DOM to load before setting up validations
document.addEventListener('DOMContentLoaded', function () {
  setupVinValidation('vin', 'error-message-1'); // For the first input
  setupVinValidation('vinField', 'error-message-2'); // For the second input
});




document.addEventListener("DOMContentLoaded", function () {
  if (window.location.hash) {
      var targetElement = document.querySelector(window.location.hash);
      if (targetElement) {
          targetElement.scrollIntoView({ behavior: "smooth" });
      }
  }
});




   







// Gallery
// 

$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});








// Menu Js
(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1000;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);










function showVinInput() {
    document.getElementById("vinInput").classList.add("active");
    document.getElementById("plateInput").classList.remove("active");

    document.getElementById("byVin").classList.add("active");
    document.getElementById("byPlate").classList.remove("active");
}

function showPlateInput() {
    document.getElementById("plateInput").classList.add("active");
    document.getElementById("vinInput").classList.remove("active");

    document.getElementById("byPlate").classList.add("active");
    document.getElementById("byVin").classList.remove("active");
}



        $(document).ready(function () {
            $(".beforeafterdefault").cndkbeforeafter();
            $(".beforeafterdrag").cndkbeforeafter(
                {
                    mode: "drag",
                    beforeTextPosition: "top-left"
                }
            );
            $(".beforeafterhidetext").cndkbeforeafter(
                {
                    showText: false
                }
            );
            $(".beforeafterimageseperator").cndkbeforeafter(
                {
                    seperatorColor: "#ffffff",
                    seperatorWidth: "10px",
                }
            );
            $(".beforeafterautoslide").cndkbeforeafter(
                {
                  autoSliding: true
                }
            );
            $(".beforeafterthemedark").cndkbeforeafter(
                {
                  mode: "drag",
                  theme: "dark"
                }
            );
            
        });


        jQuery(document).ready(function() {
          jQuery('#car-damage').owlCarousel({
              items:1,
              loop:true,
              nav:true,
              dots:false,
              cssEase: 'ease',
              margin:20,
              autoplay:true,
              autoplaySpeed: 1000,
              speed: 800,
              stagePadding: 130,
              navText : ["<i class='fa-solid fa-angle-left'></i> ","<i class='fa-solid fa-angle-right'></i>"],
              responsive:{
                  0:{
                      items:1,
                  },
                  600:{
                      items:1
                  },
                  1000:{
                      items:1
                  }
              }
          });
      });