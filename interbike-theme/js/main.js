// JavaScript Document


/* -------------------------------------------------- Mobile Nav Toggles ---- */
//Toggles search open and close on click
$(document).ready (function () {
    $('nav#main #search h5 a').click(function(){
        if ($('#search form').hasClass('show')) {
            $('#search form').removeClass('show');
            $('nav#main #search h5 a').removeClass('active');
        } else {
            $('#search form').addClass('show');
            $('nav#main #search h5 a').addClass('active');
            $('nav#main ul:nth-of-type(1)').removeClass('show');
            $('nav#main a').removeClass('toggle');
            $('nav#main h4 > a').removeClass('toggle');
            $('nav#main h4').removeClass('toggle');
            $('nav#main > ul').removeClass('show');
        }
    });
});


//Toggles main nav open and close on click
$(document).ready (function () {
    $('nav#main h4 a').click(function(){
        if ($('nav#main ul:nth-of-type(1)').hasClass('show')) {
            $('nav#main ul:nth-of-type(1)').removeClass('show');
            $('nav#main h4 > a').removeClass('toggle');
            $('nav#main h4').removeClass('toggle');
        } else {
            $('nav#main ul:nth-of-type(1)').addClass('show');
            $('nav#main a').addClass('toggle');
            $('nav#main h4').addClass('toggle');
            $('#search form').removeClass('show');
            $('nav#main #search h5 a').removeClass('active');
        }
    });
});


//Toggles mobile sub nav open and close on click
$(document).ready (function () {
    $('.sub-toggle').click(function(){
        if ($(this).parent('li').children('ul').hasClass('active')) {
            $(this).parent('li').children('ul').removeClass('active');
        } else {
            $(this).parent('li').children('ul').addClass('active');
        }
    });
    
    $('nav#main ul li a').click(function(){
        if ($(this).parent('li').children('ul').hasClass('active')) {
            $(this).parent('li').children('ul').removeClass('active');
        } else {
            $(this).parent('li').children('ul').addClass('active');
        }
    });        
});


//Toggles top nav open and close on click
$(document).ready (function () {
    $('#network-container nav h5 a').click(function(){
        if ($('#network-container nav ul').hasClass('show')) {
            $('#network-container nav ul').removeClass('show');
            $('#network-container nav h5 a').removeClass('active');
            $('#network-container nav h5').removeClass('active');
        } else {
            $('#network-container nav ul').addClass('show');
            $('#network-container nav a').addClass('active');
            $('#network-container nav h5').addClass('active');
           			
        }
    });
});


/* -------------------------------------------------- FAQ Toggles ---- */
$(document).ready (function () {
    $('.info-box-link a').click(function(){
        $(this).parent('p').siblings('div.info').toggle();
        if($(this).hasClass('open')) {
            $(this).removeClass('open');
        } else {
            $(this).addClass('open');
        }
    });
    
});



/* -------------------------------------------- exhibitors list ------------*/
$(document).ready (function () {
   
   $("#myList-nav").appendTo(".sort-letter");
   
$(".headerOptions").click(function () {

	    $header = $(this);
	    //getting the next element
	    $content = $header.next();
		if($(this).hasClass('open-options') == true){
			$(this).removeClass('open-options');
		} else{
		    $(this).addClass('open-options');
		}
		
	    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    	$content.slideToggle(500, function () {
        //execute this after slideToggle is done

        });

});
   
   
   
   
$('.sort-letter').click(function(event) {
    event.preventDefault();
	 $("#myList-nav").toggle();
    // run my code
});   
   
$('.el-firstrow a').click(function(event) {
        $(this).parent('div').siblings('div.el-detail').toggle();
        if($(this).hasClass('open')) {
            $(this).removeClass('open');
        } else {
            $(this).addClass('open');
        }

	});      
   
});


// $( window ).load(function() {
//     // Handler for .ready() called.
	

// 	var currentIndex = 20;
// 	var numMore = 20;
// 	var totalItems = $("ul#myList li").length;
// 	var maxCount = 1000;
	
	
// 	$("ul#myList li").hide();
// 	$("ul#myList li").addClass("firstLoad");
// 	if ($( "ul#myList li" ).hasClass( "firstLoad" )) { 
// 		$("ul#myList li.firstLoad").slice(0,20).show();
// 		clickButton();
// 	}
	
// 	function clickButton() {
//     var currentLength = $("ul#myList li.firstLoad:visible").length;
//         if (currentLength >= totalItems || currentLength >= maxCount) {
//             $("#loadMore").hide();     
//             $(".lm-block").hide();       
//    	        $("ul#myList li").removeClass("firstLoad");			
//         } else {
//             $("#loadMore").show();
//             $(".lm-block").show();   
//         }
        
// 	}
// 	$("#loadMore").on('click', function (e) { 
//     	e.preventDefault();


// 		if ($( "ul#myList li" ).hasClass( "firstLoad" )) { 
// 			    $("ul#myList li.firstLoad").slice(currentIndex, currentIndex + 20).show();	

// 			    currentIndex += 20;
// 		    	clickButton();			   
// 	    } 

// 	});
// });


$(document).ready(function () {
    /* vp_h will hold the height of the browser window */
    var vp_h = $(window).height();
	var vp_w = $(window).width();

	if (vp_h > 900) {
		if (vp_w > 748 && vp_w < 1140 ) {
        $('.error-block section').css("padding-bottom", "20%");		
		}

        $('.footer-container footer').css("min-height", "310px");
		}
	else {
		$('.footer-container footer').css("min-height", "240px");		
        $('.error-block section').css("padding-bottom", "10%");			
		}	

});

$(document).ready (function () {
    $('#tabs h5 a').click(function(){
        if ($('#tabs ul').hasClass('show')) {
            $('#tabs ul').removeClass('show');
            $('#tabs h5 a').removeClass('active');
            $('#tabs h5').removeClass('active');
        } else {
            $('#tabs ul').addClass('show');
            $('#tabs a').addClass('active');
            $('#tabs h5').addClass('active');
        }
    });
});

$(document).ready (function () {
    
	//#gallery-tabs ul li.ui-tabs-active a
    $('#tabs ul.tab-list li a').click(function(){
        var title = $(this).attr('alt');
        $('#tabs h5 a').text(title);
         if ($('#tabs ul').hasClass('show')) {
            $('#tabs ul').removeClass('show');
            $('#tabs h5 a').removeClass('active');
            $('#tabs h5').removeClass('active');
						
        }        
        
    });
});
