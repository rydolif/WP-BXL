$(function() {
  
//-------------------------------попандер---------------------------------------
  var swiper = new Swiper('.certificates__slider', {
    direction: 'vertical',
    effect: 'fade',
    spaceBetween: 0,
    pagination: {
      el: '.certificates__pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.certificates__next',
      prevEl: '.certificates__prev',
    },
  });

//-------------------------------попандер---------------------------------------
  $('.modal').popup({
    escape: false,
    blur: false,
    scrolllock: true,
    transition: 'all 0.3s'
  });

//------------------------------гамбургер-----------------------------
  $('.hamburger').click(function() {
    $(this).toggleClass('hamburger--active');
    $('.header__nav').toggleClass('header__nav--active');
    $('body').toggleClass('no-scroll');
  });

//------------------------------acardeon---------------------------
  $(".filter .sub-menu").slideUp("slow");

  $('.filter .menu-item-has-children').hover(function(event){
    $(this).toggleClass('main__filter_cat--active');

    if ($(this).hasClass('main__filter_cat--active')) {
      $(".main__filter_cat--active ul").slideDown("slow");
    }
    else {
      $(".filter .menu-item-has-children ul").slideUp("slow");
    }
  });

//-------------------------------активна ссылка меню---------------------------------------
  $('.header__nav a').each(function () {
      var location = window.location.href;
      var link = this.href; 
      if(location == link) {
          $(this).addClass('active');
      }
  });

//-------------------------------активна ссылка фильтр---------------------------------------
  $('.menu-item-has-children li a').each(function () {
      var location = window.location.href;
      var link = this.href; 
      if(location == link) {
          $(this).addClass('active');
      }
  });

//-------------------------скорость якоря---------------------------------------
  $(".click").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top - 30}, 'slow', 'swing');
  });
});

