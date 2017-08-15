// Custom JS
$(document).ready(function(){
  $('.toggle-menu').click(function(){
    $(this).toggleClass('st-menu');
    $('.sidebar').slideToggle('1000');
    $('.main-content').toggleClass('fuller');
  });

  $('.sidebar .nav a.collapsed').click(function(){
    $(this).toggleClass('non-collapsed');
  });
});