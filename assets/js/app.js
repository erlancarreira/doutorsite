 /*function footerAlign() {
  $('footer').css('display', 'block');
  $('footer').css('height', 'auto');
  var footerHeight = $('footer').outerHeight();
  $('body').css('padding-bottom', footerHeight);
  $('footer').css('height', footerHeight);
}


$(document).ready(function(){
  footerAlign();
});

$(window).resize(function() {
  footerAlign();
});

$(function(){   
var fixed = $('header');
var num = 0;   
$(window).on('scroll', function() { 
if ($(this).scrollTop() >= 80) { 
fixed.addClass("header-fix bg-white").fadeIn("slow"); 
} else { 
fixed.removeClass("bg-white"); 
}

});  
});
*/


  


function myFunction(x) {
    x.classList.toggle("change");
    $('.ativo').toggleClass('active');
}
 

 $(window).scroll(function() {
    var scrooltop = $(this).scrollTop();
    if($(this).scrollTop() >= 80 ) {
        $('.header').addClass('header-fix')
        $("a.ativo").addClass('acolor');
        $(".bg-bar").addClass('bg-barsite')
    } else {
        $('.header').removeClass('header-fix ')
        $(".bg-bar").removeClass('bg-barsite')
        $("a.ativo").removeClass('acolor');
    }     
});

 /*$(document).ready(function(){       
            var num = 0;
            $(window).on('scroll', function() { 
             
               if ($(this).scrollTop() > 100 ) {
                    $(".header").addClass('bg-white').removeClass('bg-drsite');
                } else {
                    $(".header").removeClass('bg-white');
                } 
                 if ($(this).scrollTop() > 80 ) {
                    $(".bg-bar").addClass('bg-barsite').removeClass('bg-white');
                } else {
                    $(".bg-bar").removeClass('bg-barsite');

                }
                if ($(this).scrollTop() > 80 ) {
                    $("a.ativo").addClass('acolor');
                } else {
                    $("a.ativo").removeClass('acolor');

                }
                if ($(this).scrollTop() > 80 ) {
                    $(".logo").attr("src", "assets/images/dr-site-logo-aescuro.png");
                } else {
                    $(".logo").attr("src", "assets/images/dr-site-logo.png");

                }
            });
        }); 
*/
    

