$(function () {

    let slideshow = $('.slideshow');
    let slideshowSliders = slideshow.find('.slideshow_sliders');
    let slides = slideshowSliders.find('a');
    let nav = slideshow.find('.slideshow_nav');
    let prev = nav.find('.prev');
    let next = nav.find('.next');
    let currentIndex = 0;
    let slideshowIndicator = slideshow.find('.slideshow_indicator');
    let indicatorPage = slideshowIndicator.find('a');
    let intervalSec = 3000;
    let intervalObject = null;
    let increamentValue = 1;
  
    function gotoSlide(index) {
      slideshowSliders.animate({left : (-100 * index) + '%'}, 800, 'easeInOutExpo');
      currentIndex = index;
      if(currentIndex === 0) {
          prev.addClass('disabled');
      } else {
          prev.removeClass('disabled');
      }
  
      if(currentIndex === (slides.length-1)) {
          next.addClass('disabled');
      } else {
          next.removeClass('disabled');
      }
      indicatorPage.removeClass('active');
      indicatorPage.eq(currentIndex).addClass('active');
    }
  
    slides.each(function(i) {
      let newLeft = (i*100) + '%';
      $(this).css({left: newLeft});
    });
  
    prev.click(function (e) { 
      e.preventDefault();
      if(currentIndex !== 0) {
          currentIndex -= 1
      }
      gotoSlide(currentIndex);
    });
  
    next.click(function (e) { 
      e.preventDefault();
      if(currentIndex !== (slides.length-1)) {
          currentIndex += 1
      }
      gotoSlide(currentIndex);
    });
    
    indicatorPage.click(function(e) {
      e.preventDefault();
      let clickCurrentIndex = $(this).index();
      gotoSlide(clickCurrentIndex);
    });   
  
    function autoDisplayStart(){
      intervalObject = setInterval(function() {
          if(currentIndex === 3) {
              increamentValue = -1;
          } else if(currentIndex === 0){
              increamentValue = 1;
          }
          let nextIndex = (currentIndex + increamentValue) % (slides.length);
          gotoSlide(nextIndex);
      }, intervalSec);
    }
    function autoDisplayStop() {
        clearInterval(intervalObject);
    }
  
    slideshow.mouseenter(function () { 
      autoDisplayStop();
    });
    slideshow.mouseleave(function() {
        autoDisplayStart();
    });
    gotoSlide(currentIndex);
    autoDisplayStart();
  
  });
  