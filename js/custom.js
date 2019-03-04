
(function($) {
    'use strict';

    // Main Navigation
    $( '.hamburger-menu' ).on( 'click', function() {
        $(this).toggleClass('open');
        $('.site-navigation').toggleClass('show');
    });

    // Testimonial Slider
    var swiper = new Swiper('.testimonial-slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        effect: 'fade',
        speed: 800,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    });

    $('.gallery-wrap').masonry({
        itemSelector: '.gallery-grid'
    });

    // Accordion & Toggle
    $('.accordion-wrap.type-accordion').collapsible({
        accordion: true,
        contentOpen: 0,
        arrowRclass: 'arrow-r',
        arrowDclass: 'arrow-d'
    });

    $('.accordion-wrap .entry-title').on('click', function() {
        $('.accordion-wrap .entry-title').removeClass('active');
        $(this).addClass('active');
    });
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  4000);

// console.log(document.location.href.match(/[^\/]+$/)[0])
 function lightbox(idx) {
            //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
            var ninjaSldr = document.getElementById("ninja-slider");
            ninjaSldr.parentNode.style.display = "block";

            nslider.init(idx);

            var fsBtn = document.getElementById("fsBtn");
            fsBtn.click();
        }

        function fsIconClick(isFullscreen, ninjaSldr) { //fsIconClick is the default event handler of the fullscreen button
            if (isFullscreen) {
                ninjaSldr.parentNode.style.display = "none";
            }
        }

$('document').ready(function()
{
	$("#btnSubmit").click(function(){
		$.ajax({
		type : 'POST',
		url  : 'getData.php',
		dataType: 'json',
		data: '',
		cache: false,
		success :  function(result)
			{
				//pass data to datatable
				console.log(result); // just to see I'm getting the correct data.
				$('#alumniTable').DataTable({
					"searching": false, //this is disabled because I have a custom search.
					"aaData": [result], //here we get the array data from the ajax call.
					"aoColumns": [
						{ "sTitle": "ID" },
						{ "sTitle": "Name" },
						{ "sTitle": "Surame" },
						{ "sTitle": "Email" }
					],
					buttons: [
							'pdf','csv','excel'
					]
				});
			}
		});
	});
});
})(jQuery);


	