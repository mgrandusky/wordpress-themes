// JavaScript Document





/* -------------------------------------------------- Mobile Nav Toggles ---- */

//Toggles search open and close on click

$(document).ready (function () {

    $('#search h5 a').click(function(){

        if ($('#search form').hasClass('show')) {

            $('#search form').removeClass('show');

            $('#search h5 a').removeClass('active');

			$('#search ul').removeClass('show');

        } else {

            $('#search form').addClass('show');

            $('#search h5 a').addClass('active');

			$('#search ul').addClass('show');

            $('nav#menu ul:nth-of-type(1)').removeClass('show');

            $('nav#menu a').removeClass('toggle');

            $('nav#menu h4 > a').removeClass('toggle');

            $('nav#menu h4').removeClass('toggle');

            $('nav#menu > ul').removeClass('show');

        }

    });

});





//Toggles main nav open and close on click

$(document).ready (function () {

    $('nav#menu h4 a').click(function(){

        if ($('nav#menu ul.responsive_menu').hasClass('show')) {

            $('nav#menu ul.responsive_menu').removeClass('show');

            $('nav#menu h4 > a').removeClass('toggle');

            $('nav#menu h4').removeClass('toggle');

        } else {

            $('nav#menu ul.responsive_menu').addClass('show');

            $('nav#menu a').addClass('toggle');

            $('nav#menu h4').addClass('toggle');

            $('#search form').removeClass('show');

            $('#search h5 a').removeClass('active');

			$('#search ul').removeClass('show');

        }

    });

});





//Toggles mobile sub nav open and close on click

$(document).ready (function () {

/*    $('.tab-nav').click(function(){

        if ($(this).parent('li').children('ul').hasClass('active')) {

            $(this).parent('li').children('ul').removeClass('active');

			$(this).parent('li').children('span.tab-nav').removeClass('button-active');			

        } else {

            $(this).parent('li').children('ul').addClass('active');

			$(this).parent('li').children('span.tab-nav').addClass('button-active');				

        }

    });

    

    $('.tab-nav-two').click(function(){

        if ($(this).parent('li').children('ul').hasClass('active-level2')) {

            $(this).parent('li').children('ul').removeClass('active-level2');

			$(this).parent('li').children('span.tab-nav-two').removeClass('button-active-level2');			

        } else {

            $(this).parent('li').children('ul').addClass('active-level2');

			$(this).parent('li').children('span.tab-nav-two').addClass('button-active-level2');				

        }

    });*/

    	

	

	//Toggles mobile sub nav open and close on click






	$('nav#menu ul li span a').click(function(){
 
               if ($(this).parent('span').parent('li').children('ul').hasClass('active')) {
 
               $(this).parent('span').parent('li').children('ul').removeClass('active');
               $(this).parent('span').parent('li').removeClass('open');    
               $(this).parent('span').parent('li').first().find('a i').removeClass('fa-chevron-up').addClass('fa-chevron-down');    
                                                            
 
               } else {
 
               $(this).parent('span').parent('li').children('ul').addClass('active');
               $(this).parent('span').parent('li').children('ul').addClass('active');
               $(this).parent('span').parent('li').addClass('open');
               $(this).parent('span').parent('li').first().find('a i').removeClass('fa-chevron-down').addClass('fa-chevron-up');                    $('nav#menu ul.sub-menu li').find('a i').removeClass('fa-chevron-up');
 
               $('nav#menu ul.plain-drop li').find('a i').removeClass('fa-chevron-up');  
 
               }

		



	});	





	

   /* $('nav#menu ul li a').click(function(){

        if ($(this).parent('li').children('ul').hasClass('active')) {

            $(this).parent('li').children('ul').removeClass('active');

		    $(this).parent('li').removeClass('open');

									

			

        } else {

            $(this).parent('li').children('ul').addClass('active');

            $(this).parent('li').addClass('open');	

							

        }

    });        */

});





//Toggles main nav open and close on click

$(document).ready (function () {

    $('nav.product-nav h4 a').click(function(){

        if ($('nav.product-nav ul:nth-of-type(1)').hasClass('show')) {

            $('nav.product-nav ul:nth-of-type(1)').removeClass('show');

            $('nav.product-nav h4 > a').removeClass('toggle');

            $('nav.product-nav h4').removeClass('toggle');

        } else {

            $('nav.product-nav ul:nth-of-type(1)').addClass('show');

            $('nav.product-nav a').addClass('toggle');

            $('nav.product-nav h4').addClass('toggle');

        }

    });

});













/* ------------------------------------------------- Nav Current Link ---- */



 $(function(){

   var url = window.location.href;

	url = url.substr(url.lastIndexOf("/") + 1);

	$("nav#menu").find("a[href='" + url + "']").closest("li").addClass("active");

	

	$('li.active').parent().parent().addClass("active");

 });





//Toggles top nav open and close on click

$(document).ready (function () {

    $('.magazine #tabs i').click(function(){

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

    $('.magaxine #tabs i').click(function(){

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

});


$('document').ready(function(){

    $('#network-container h5 a').click(function(){
        if ($('#network-container ul').hasClass('show')) {
            $('#network-container ul').removeClass('show');
            $('#network-container h5 a').removeClass('active');
            $('#network-container h5').removeClass('active');
            $('#network-container nav').removeClass('active');
        } else {
            $('#network-container ul').addClass('show');
            $('#network-container h5 a').addClass('active');
            $('#network-container h5').addClass('active');
            $('#network-container nav').addClass('active');
        }

    });
    
    $('#network-container h5 a').hover(function(){
       $(this).toggleClass('hover');       
    });

    $('#network-container h5 a').on("touchstart", function(){
        $(this).removeClass('hover');             
    });

});