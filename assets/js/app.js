$(document).ready(function(){
  
  // Google code prettifier
  $('#php').addClass('prettyprint linenums lang-php');
  $('#html').addClass('prettyprint linenums lang-html');
  $('#css').addClass('prettyprint linenums lang-css');
  $('#js').addClass('prettyprint linenums lang-js');
  prettyPrint();

  // Menu reveal
  $('#mainmenu').addClass('hidden'); 
  $('#menutoggle').click(function(){
    $('#mainmenu').toggleClass('hidden'); 
  }); 
  
});