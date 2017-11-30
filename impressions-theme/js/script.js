$(document).ready(function(){
  
  $('header .toggle .menu').click(function(){
    $('header nav .menu').toggleClass('open');
  });

  $('header .menu > li').click(function(){
    $('ul', this).toggleClass('open');
  });

  $('header nav .toggle a.search').click(function(){
    $('#search-s').toggleClass('open');
    $('#search-s form').toggleClass('open');
  })
  $('header nav #search-s a.search').click(function(){
    $('#search-s').toggleClass('open');
    $('#search-s form').toggleClass('open');
  })

}); 

$('document').ready(function(){

  $('#network-container nav h5.left a').click(function(){
      if ($('nav#network div.left-nav ul').hasClass('show')) {
          $('nav#network div.left-nav ul').removeClass('show');
          $('nav#network h5.left a').removeClass('active');
          $('nav#network h5.left').removeClass('active');
          $('nav#network h5.left a .fa-angle-up').addClass('fa-angle-down');             
          $('nav#network h5.left a .fa-angle-down').removeClass('fa-angle-up');            
      } else {
          $('nav#network div.left-nav ul').addClass('show');
          $('nav#network div.right-nav ul').removeClass('show');      
          $('nav#network h5.left a .fa-angle-down').addClass('fa-angle-up');
          $('nav#network h5.left a .fa-angle-up').removeClass('fa-angle-down');
    $('nav#network h5.right a .fa-angle-up').addClass('fa-angle-down');           
    $('nav#network h5.right a .fa-angle-down').removeClass('fa-angle-up');

      }
  });
  
  $('#network-container nav h5.right a').click(function(){
      if ($('nav#network div.right-nav ul').hasClass('show')) {
          $('nav#network div.right-nav ul').removeClass('show');
          $('nav#network h5.right a').removeClass('active');
          $('nav#network h5.right').removeClass('active');
          $('nav#network h5.right a .fa-angle-up').addClass('fa-angle-down');             
          $('nav#network h5.right a .fa-angle-down').removeClass('fa-angle-up');            
      } else {
          $('nav#network div.right-nav ul').addClass('show');
          $('nav#network h5.right a .fa-angle-down').addClass('fa-angle-up');
          $('nav#network h5.right a .fa-angle-up').removeClass('fa-angle-down');
          $('nav#network div.left-nav ul').removeClass('show');     
    $('nav#network h5.left a .fa-angle-up').addClass('fa-angle-down');          
    $('nav#network h5.left a .fa-angle-down').removeClass('fa-angle-up');
      }
  }); 
  
  $('#network-container h5 a').hover(function(){
     $(this).toggleClass('hover');       
  });

  $('#network-container h5 a').on("touchstart", function(){
      $(this).removeClass('hover');             
  });

  function marketchange(){
    $('header .dates').on('change', 'select', function(){
      console.log('change');
    });
  }

});