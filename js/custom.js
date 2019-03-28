
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
	
	function generate_table(data){
	var blank_row;
	$('#log_table_container').remove();
	$('#test_tables').append("<div class='container' id='log_table_container'><div class='table-responsive'><table id='log_table' class='display' cellspacing='0' width='100%' style='float:right;'> <thead><tr> <th data-field='ID'>ID</th>  <th data-field='firstname'>First Name</th><th data-field='surname'>Surname</th><th data-field='email_id'>Email ID</th><th data-field='batchyear'>Batch Year</th><th data-field='address'>Address</th><th data-field='marital_status'>Marital Status</th><th data-field='profession'>Profession</th><th data-field='afterssscop'>After SSSCOPS</th></thead><tbody id='log_table_body'></tbody></table></div></div>");
	var table;
	$("#log_table_container").show();
	var newData = JSON.stringify(data)
	var response = $.parseJSON(newData);
	$.each(response, function(i, item) {
		if(item.ID==null)item.ID='';
		if(item.firstname==null)item.firstname='';
		if(item.surname==null)item.surname='';
		if(item.email==null)item.email='';
		if(item.batchyear==null)item.batchyear='';
		if(item.address==null)item.address='';
		if(item.marital_status==null)item.marital_status='';
		if(item.profession==null)item.profession='';
		if(item.after_ssscop==null)item.after_ssscop='';
		if(item.ID=='' && item.firstname=='' && item.surname=='' && item.email=='' && item.batchyear=='' && item.address=='' && item.marital_status=='' && item.after_ssscop=='' && item.profession=='')
		{blank_row=1; console.log('blank');}
		if(blank_row==1){
			 return true;
		}
		else{
        var $tr = $('<tr>').append(
            $('<td width=15%>').text(item.ID),
            $('<td>').text(item.firstname),
            $('<td>').text(item.surname),
			$('<td>').text(item.email),
			$('<td>').text(item.batchyear),
			$('<td>').text(item.address),
			$('<td>').text(item.marital_status),
			$('<td>').text(item.profession),
			$('<td>').text(item.after_ssscop)
        ).appendTo('#log_table_body');
	}
    });
	$("#log_table").DataTable({
		"language": {
			"searchPlaceholder": "Type Email..."
		},
		"dom": 'Bfrtip',
		"buttons": [
			'csv'
        ]
	});
}
	var data;
	$("#btnSubmit").click(function(){
		var name = $('#usr').val();
		var pwd = $('#pwd').val();
		if(name=='' || pwd ==''){alert('enter the details');}
		else{
		$.ajax({
		type : 'POST',
		url  : 'getData.php',
		dataType: 'json',
		data: {nam:name,passwrd:pwd},
		cache: false,
		success :  function(result)
			{
				//pass data to datatable
				console.log(result)
				if(result['result']=='inaccess'){alert('Enter correct details'); $('#log_table_container').remove();}
				else{
					console.log($.type(result)); // just to see I'm getting the correct data.
					generate_table(result);
				}
			
		}
		});
	}
	});
})
})(jQuery);


	