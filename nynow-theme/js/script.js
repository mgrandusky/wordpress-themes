$('document').ready(function(){
    // $('footer').hide();
    $('#top-nav #menu-main-menu > li .sub-menu').hide();
    $('#top-nav #menu-main-menu > li').hover(function(){
        if($( window ).width() > 960){
            $('.sub-menu', this).toggle();
        }
    });

    $('.toggle.menu').click(function(){
        $(this).toggleClass('open');
        $('#top-nav > ul ').toggle();
    });

    $('.toggle.search').click(function(){
        $(this).toggleClass('open');
        $('#searchform').toggle();
    });

    $('#top-nav > ul > li').click(function(){
        if($( window ).width() < 968){
            $(this).toggleClass('open');
            $('.sub-menu', this).slideToggle();
        }
        setTimeout(function(){
            if($('.sub-menu', this).css('display') == 'none'){
                $('.sub-menu', this).css('display', 'block');
                console.log($('.sub-menu', this).css('display'));
            }
            console.log($('.sub-menu', this).css('display', 'inherit'));
            $('.sub-menu', this).hide();

        }, 2000);
        
    });

    $('body').hover(function(){
        if($( window ).width() > 967){
            $('#top-nav > ul > li .sub-menu').hide();
        }
    });
    // setInterval(function(){
    //     if($( window ).width() > 967){
    //         $('#top-nav > ul > li .sub-menu').hide();
    //     }
    // }, 500);

    $('#top-nav > ul > li > a, .toggle').click(function(event){
        event.preventDefault();
    });

    $('.faqs > div  h3 > span').attr('class', 'fa fa-angle-right');
    $('.faqs > div  h3').click(function(){
        $('.faqs > div > h3 > span').attr('class', 'fa fa-angle-right');
        if($('span', this).attr('class') == 'fa fa-angle-right' && $(this).attr('class') == 'ui-accordion-header ui-state-default ui-corner-all ui-accordion-icons'){
            $('span', this).attr('class', 'fa fa-angle-down')
        } else {
            $('span', this).attr('class', 'fa fa-angle-down')
        }
    });
});