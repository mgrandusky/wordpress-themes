$(document).ready(function(){
	
    $('header>ul>li:nth-of-type(2) > ul > li').hover(function(){
        $('.sub-menu', this).toggle();
    });
    $('.toggle-search').click(function(){
        // $('header > ul > li .hidden-desktop form').slideToggle();
        $(this).toggleClass('close');
        $('form.hidden-desktop').slideToggle();

    });
    $('.toggle-menu.visible-phone').click(function(){
        $(this).toggleClass('close');
        $('.phone-menu.visible-phone').slideToggle();
    });
    $('.phone-menu.visible-phone > ul > li').click(function(){
        $('.sub-menu', this).toggle();
    })
});