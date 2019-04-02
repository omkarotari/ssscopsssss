
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
	$('#test_tables').append("<div class='container' id='log_table_container'><div class='table-responsive'><table id='log_table' class='display'  width='100%' style='float:right;'> <thead><tr> <th style='visibility:hidden;' data-field='ID'>ID</th>  <th data-field='name'>Name</th><th data-field='contact'>Contact</th><th data-field='email_id'>Email ID</th><th data-field='batchyear'>Batch Year</th><th data-field='address'>Address</th><th data-field='pharmacist_registration_no'>Pharmicist Regd No</th><th data-field='profession'>Profession</th><th data-field='afterssscop'>After SSSCOPS</th><th data-field='achievements'>Achievements</th></thead><tbody id='log_table_body'></tbody></table></div></div>");
	var table;
	$("#log_table_container").show();
	var newData = JSON.stringify(data)
	var response = $.parseJSON(newData);
	$.each(response, function(i, item) {
		if(item.ID==null)item.ID='';
		if(item.Name==null)item.Name='';
		if(item.Contact==null)item.Contact='';
		if(item.email==null)item.email='';
		if(item.batchyear==null)item.batchyear='';
		if(item.address==null)item.address='';
		if(item.pharmacist_registration_no==null)item.pharmacist_registration_no='';
		if(item.profession==null)item.profession='';
		if(item.after_ssscop==null)item.after_ssscop='';
		if(item.achievements==null)item.achievements=='';
		if(item.ID=='' && item.Name=='' && item.Contact=='' && item.email=='' && item.batchyear=='' && item.address=='' && item.pharmacist_registration_no=='' && item.after_ssscop=='' && item.profession=='' && item.achievements=='')
		{blank_row=1; console.log('blank');}
		if(blank_row==1){
			 return true;
		}
		else{
        var $tr = $('<tr>').append(
            $('<td style="visibility:hidden;">').text(item.ID),
            $('<td>').text(item.Name),
            $('<td>').text(item.Contact),
			$('<td>').text(item.email),
			$('<td>').text(item.batchyear),
			$('<td>').text(item.address),
			$('<td>').text(item.pharmacist_registration_no),
			$('<td>').text(item.profession),
			$('<td>').text(item.after_ssscop),
			$('<td>').text(item.achievements)
        ).appendTo('#log_table_body');
	}
    });
	var table = $("#log_table").DataTable({
		"language": {
			"searchPlaceholder": "Type Email..."
		},
		"dom": 'Bfrtip',
		"buttons": [
			'csv'
        ]
	});
	//table.columns.adjust().draw();
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


	