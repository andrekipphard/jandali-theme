var swiper = new Swiper(".mySwiper", {
  slidesPerView: 4,
  spaceBetween: 30,
  speed: 1000,
  centeredSlides: true,
  navigation: {
    nextEl: "#swiper-controls-desktop .swiper-button-next",
    prevEl: "#swiper-controls-desktop .swiper-button-prev",
  },
});
var swiper = new Swiper(".mySwiperMobile", {
  slidesPerView: 1.5,
  spaceBetween: 0,
  speed: 1000,
  centeredSlides: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});



$(document).ready(function() {
    var prevIcon = $('#swiper-controls-desktop .carousel-control-prev-icon');
    var nextIcon = $('#swiper-controls-desktop .carousel-control-next-icon');
    var prevLink = $('#swiper-controls-desktop .swiper-button-prev');
    var nextLink = $('#swiper-controls-desktop .swiper-button-next');
    
    var prevWidth = prevLink.width();
    var nextWidth = nextLink.width();
    var prevHeight = prevLink.height();
    var nextHeight = nextLink.height();
    var prevIconWidth = prevIcon.width();
    var nextIconWidth = nextIcon.width();
  
    prevLink.mousemove(function(e) {
      var offset = prevLink.offset();
      var xPos = e.pageX - offset.left;
      var yPos = e.pageY - offset.top;
      if (xPos >= 0 && xPos <= nextWidth && yPos >= 0 && yPos <= nextHeight) {
        prevIcon.css('transform', 'translate(' + (xPos - 130) + 'px, ' + (yPos-230) + 'px)');
      }
    });
  
    nextLink.mousemove(function(e) {
      var offset = nextLink.offset();
      var xPos = e.pageX - offset.left;
      var yPos = e.pageY - offset.top;
      if (xPos >= 0 && xPos <= nextWidth && yPos >= 0 && yPos <= nextHeight) {
        nextIcon.css('transform', 'translate(' + (xPos - 130) + 'px, ' + (yPos - 230) + 'px)');
    }
    
    });
  
    prevLink.mouseleave(function() {
      prevIcon.css('transform', '');
    });
  
    nextLink.mouseleave(function() {
      nextIcon.css('transform', '');
    });
  });
  $(document).ready(function() {
    $("#swiper-controls-desktop .swiper-button-prev, #swiper-controls-desktop .swiper-button-next").hover(function() {
      var x = event.pageX - $(this).offset().left;
      var y = event.pageY - $(this).offset().top;
      $(this).css('cursor', 'none').find('i').css({'transform': 'translate(' + x + 'px,' + y + 'px)'});
    }, function() {
      $(this).css('cursor', 'default').find('i').css({'transform': 'none'});
    });
  });
  
  
