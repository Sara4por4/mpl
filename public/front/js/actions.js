
// scroll

$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});


 // animations
 function isScrolledIntoView(el){
 	var $el = $(el);
 	return ($el.offset().top <= $(window).scrollTop() + $(window).height());
 }

 function isScrolledOutOfView(el){
 	var $el = $(el);
 	return ($el.offset().top >= $(window).scrollTop() + $(window).height());
 }

 function elementAnimation(el, fx){
 	var $el = $(el);

 	var setElsPositions = function(){
 		$el.each(function(){
 			$this = $(this);
 			if(isScrolledIntoView($this)){
 				$this.addClass(fx);
 			}else if(isScrolledOutOfView($this)){
 				$this.removeClass(fx);
 			}
 		});
 	}

 	$(window).on('load scroll', function(){
 		setElsPositions();
 	});

 	setElsPositions();
 }


// star rating

$(document).ready(function(){

  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });

  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });


  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');

    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }

    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }

    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);

  });


});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
} 
