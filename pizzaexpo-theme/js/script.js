$('document').ready(function(){
    // $('#sidebar').load('sidebar.html');
    // $('#head').load('header.html');
    // $('footer').load('footer.html');

    setTimeout(function(){
        
    $('.top-menu > li').hover(function(){
        var windowsize = $(window).width();
        if(windowsize > 959){
            $(this).toggleClass('open');
        }
    });
    $('.top-menu > li').click(function(){
        var windowsize = $(window).width();
        if(windowsize < 960){
            $('.sub-menu', this).toggle();
        }
    });

    $('.toggle-menu').click(function(e){
        e.preventDefault();
        $(this).toggleClass('open');
        $('.top-menu').slideToggle();
    });
    $('.btn-search').click(function(e){
        e.preventDefault();
        $('.search-thing').toggleClass('open');
        $('#search').toggle();
    });
    }, 1000);

    
});