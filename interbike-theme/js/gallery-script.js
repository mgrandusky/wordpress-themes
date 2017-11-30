/* -------------------------------------------------- Gallery -- */
$(window).load(function() {
	
	
   //The slider being synced must be initialized first
  $('#carouselexhibition').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 150,
    itemMargin: 15,
    asNavFor: '#sliderexhibition'
  });
   
  $('#sliderexhibition').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    smoothHeight:true,
    sync: "#carouselexhibition",
    start: function(slider){

		getImageHeight('#sliderexhibition');				 					
	},
	after: function(slider) {
		getImageHeight('#sliderexhibition');			

    }			
	
  });
}); 
$(window).load(function() {
$('#gallery-tabs').tabs({
	  
            show: function(event, ui){

                switch(ui.index){
                    case 1: 
                    if(!$('#conference #sliderconference .flex-viewport').length && !$('#conference #carouselconference .flex-viewport').length ){
                        $('#conference #carouselconference').flexslider({
                            animation: "slide",
                            controlNav: false,
                            animationLoop: false,
                            slideshow: false,
                            itemWidth: 150,
                            itemMargin: 15,
                            asNavFor: '#sliderconference'
                          });
                        $('#conference #sliderconference').flexslider({animation: "slide",
                            controlNav: false,
                            animationLoop: false,
                            slideshow: false,
                            smoothHeight:true,
                            sync: "#carouselconference",
					        start: function(slider){
								getImageHeight("#sliderconference");	
					        },
							after: function(slider) {
								getImageHeight("#sliderconference");					
                			}		
							
							});
                    }
                    break;
                    case 2: 
                    if(!$('#event #sliderevent .flex-viewport').length && !$('#event #carouselevent .flex-viewport').length ){
                        $('#event #carouselevent').flexslider({
                            animation: "slide",
                            controlNav: false,
                            animationLoop: false,
                            slideshow: false,
                            itemWidth: 150,
                            itemMargin: 15,
                            asNavFor: '#sliderevent'
                          });
                        $('#event #sliderevent').flexslider({
                            animation: "slide",
                            controlNav: false,
                            animationLoop: false,
                            slideshow: false,
                            smoothHeight:true,
                            sync: "#carouselevent",
							start: function(slider){
								getImageHeight('#sliderevent');				 					
							},
							after: function(slider) {
								getImageHeight('#sliderevent');				
							}							
							
							
                          });
                    }
                    break;
                }
            }
    });
});

//Toggles top nav open and close on click
$(document).ready (function () {
    $('#gallery-tabs h5 a').click(function(){
        if ($('#gallery-tabs ul').hasClass('show')) {
            $('#gallery-tabs ul').removeClass('show');
            $('#gallery-tabs h5 a').removeClass('active');
            $('#gallery-tabs h5').removeClass('active');
        } else {
            $('#gallery-tabs ul').addClass('show');
            $('#gallery-tabs a').addClass('active');
            $('#gallery-tabs h5').addClass('active');
        }
    });
});
//Toggles top nav open and close on click
$(document).ready (function () {
    
	//#gallery-tabs ul li.ui-tabs-active a
    $('#gallery-tabs ul.tab-list li a').click(function(){
        var title = $(this).attr('alt');
        $('#gallery-tabs h5 a').text(title);
         if ($('#gallery-tabs ul').hasClass('show')) {
            $('#gallery-tabs ul').removeClass('show');
            $('#gallery-tabs h5 a').removeClass('active');
            $('#gallery-tabs h5').removeClass('active');
						
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
});

//Toggles top nav open and close on click
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
//Toggles top nav open and close on click
$(document).ready (function () {
    
    $('#tabs ul.addopps li a').click(function(){
        var title = $(this).attr('alt');
        $('#tabs h5 a').text(title);
         if ($('#tabs ul').hasClass('show')) {
            $('#tabs ul').removeClass('show');
            $('#tabs h5 a').removeClass('active');
            $('#tabs h5').removeClass('active');
        }        
        
    });
	
	
	$(function() {
	$( "#tabs" ).css("opacity", 0); 
    		 setTimeout(function(){ $( "#tabs" ).tabs();$( "#tabs" ).css("opacity", 1); }, 300);
	});	
	
	
});

function getImageHeight(id) {

	var navID = id + " .flex-direction-nav a";
	var imageID = id + " li.flex-active-slide img";	
	var imageHeight = $(imageID).height();
		imageHeight= imageHeight / 2 + 27;
		$(navID).css('top', imageHeight);
		

}







/*$(document).ready (function () {
	
		var width = $(document).width();
	    if (width > 768 ) {	 

		$(window).bind('resize', function(e)
		{

	  if (window.RT) clearTimeout(window.RT);
	  window.RT = setTimeout(function()
	  {
		var tabTitle = $('#gallery-tabs ul li a').text();
		var tabActive = tabTitle.toLowerCase();	
		if (tabActive == "special events") {
			tabActive = "event";
			}
	
    	$('#gallery-tabs h5 a').text(tabTitle);
	
		window.location.hash = "#" +tabActive;
		  location.reload(false); 
			//$("#gallery-tabs").load(location.href + " #gallery-tabs");
		 
  }, 50);
  
});			
		
		}
	
});*/	


	


 
