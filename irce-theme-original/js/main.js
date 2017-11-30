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


/*--------------------------------------------------- Carousels ----*/
$(document).ready (function () {
   

    $('.flexslider-main').flexslider({
        
        startAt: 0,
        animation: "fade",
        slideshow: true,
        prevText: "",      
        nextText: "",
        start: function(slider){
          $('body').removeClass('loading');
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


$( window ).load(function() {
    // Handler for .ready() called.
	

	var currentIndex = 10;
	var numMore = 10;
	var totalItems = $("ul#myList li").length;
	var maxCount = 200;
	
	
	$("ul#myList li").hide();
	$("ul#myList li").addClass("firstLoad");
	if ($( "ul#myList li" ).hasClass( "firstLoad" )) { 
		$("ul#myList li.firstLoad").slice(0,10).show();
		clickButton();
	}
	
	function clickButton() {
    var currentLength = $("ul#myList li.firstLoad:visible").length;
        if (currentLength >= totalItems || currentLength >= maxCount) {
            $("#loadMore").hide();     
            $(".lm-block").hide();       
   	        $("ul#myList li").removeClass("firstLoad");			
        } else {
            $("#loadMore").show();
            $(".lm-block").show();   
        }
        
	}
	$("#loadMore").click(function (e) { 
    	e.preventDefault();


		if ($( "ul#myList li" ).hasClass( "firstLoad" )) { 
			    $("ul#myList li.firstLoad").slice(currentIndex, currentIndex + 10).show();	

			    currentIndex += 10;
		    	clickButton();			   
	    } 

	});
});


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
