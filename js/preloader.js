(function($){"use strict";window.addEventListener('load',function(){var preloadpage=document.getElementById("page_loader");preloadpage.style.display="none";});})(jQuery);

document.body.onload = function(){ /*The onload event occurs when an object has been loaded*/
  setTimeout(function(){
    var preloader = document.getElementById('page-preloader');
    {
      preloader.classList.add('done');
    }
  }, 5000);
}