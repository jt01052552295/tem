$(function() {

    $('#fdnav_accord').dcAccordion({
        eventType: 'click',
        autoClose: true,
        saveState: true,
        disableLink: true,
        speed: 'slow',
        showCount: false,
        autoExpand: true,
        classExpand: 'dcjq-current-parent'
    });	
    $('#accordion').dcAccordion({
        eventType: 'click',
        autoClose: true,
        saveState: false,
        disableLink: true,
        showCount: false,
        speed: 'slow'
    }); 

    $('#fd_find_close').click(function () {
       var $fd_find = $('#fd_find');
       var visible = $fd_find.css('display');
       if(visible == 'block'){
          $fd_find.hide();
       } else {
         return false;
       }
    });

    $('#findToggle').click(function () {
       $('#fd_find').toggle();
    });

    $('#m_findToggle').click(function () {
       $('#m_fd_find').toggle();
    });

    $('#navToggle').click(function () {
       $('#fd_nav').toggle();
    });

    $('.invest-figure').each(function(){
        var $_portInfo = $(this).find(".figure-overlay");

        $(this).bind("mouseenter", function(event){
            $_portInfo.fadeIn(100);
        });

        $(this).bind("mouseleave", function(event){
            $_portInfo.fadeOut(100);
        });

    });

    $('.portfolio-figure').each(function(){
        var $_portInfo = $(this).find(".figure-overlay");

        $(this).css({'cursor':'pointer'});
        $(this).bind("mouseenter", function(event){
            $_portInfo.fadeIn(100);
        });

        $(this).bind("mouseleave", function(event){
            $_portInfo.fadeOut(100);
        });

    });

    $('.figure').each(function(){
        var $_portInfo = $(this).find(".figure-overlay");

        $(this).css({'cursor':'pointer'});
        $(this).bind("mouseenter", function(event){
            $_portInfo.fadeIn(100);
        });

        $(this).bind("mouseleave", function(event){
            $_portInfo.fadeOut(100);
        });

    });    

    $('.post-grid-overlay').each(function(){
        var $_portInfo = $(this).find(".post-grid-content");

        $(this).bind("mouseenter", function(event){
            $_portInfo.stop().animate({
              bottom: "0px"
            },500);
        });

        $(this).bind("mouseleave", function(event){
            $_portInfo.stop().animate({
              bottom: "-57px"
            },500);
        });

    });  

    $('#go-Top-Btn').click(function(){
        $('html, body').animate({
            scrollTop:0
        }, 'slow');
    });

    $.fn.goTopFade = function(scTop){
        var goTopBtn = $('.go-Top');
        if(scTop > 1000) {
            goTopBtn.fadeIn();
          } else {
            goTopBtn.fadeOut();
          }
    }

    $.fn.navTopFixed = function(scTop){
        var $topFixedNav = $('#topFixedNav');
        var fixHeight = $('.fd_topFixMenu').outerHeight();

        if(scTop >= fixHeight) {
          $topFixedNav.addClass('fixedTopNav');        
        } else {
          $topFixedNav.removeClass('fixedTopNav');
        }            
    }

    $(window).scroll(function() {
      var win = $(window);
      var winHeight = win.height();
      var scTop = $(this).scrollTop();

      $.fn.goTopFade(scTop);
      $.fn.navTopFixed(scTop);

    });
    

});

$(document).ready(function(){
    $('#mainBanner').skdslider({
        'delay':5000, 
        'animationSpeed': 2000,
        'showNextPrev':true,
        'showPlayButton':false,
        'autoSlide':true,
        'animationType':'fading'
    });

    $('.bxslider').bxSlider({
      minSlides: 3,
      maxSlides: 4,
      slideWidth: 400,
      moveSlides: 1,
      slideMargin: 10,
      pager: false
    });
    
});