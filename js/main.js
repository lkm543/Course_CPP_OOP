$(document).ready( function() {

    $('.tab').removeClass('active');
    $('.tab').removeClass('clicked');

    if(!document.location.href.includes('#')){
        $('.wrapper').find("[data-id=News]").show();
    }
    else{
        var index = document.location.href.substring(document.location.href.indexOf('#')+1);
        // Remove all instances of "current" class from tabs
        $('.main').find("[data-tabid="+index+"]").addClass('active');
        $('.sb_menu').find("[data-tabid="+index+"]").addClass('clicked');
        
        if(index.includes("Chapter") || index.includes("HW")){
            $('.main').find("[data-tabid=Chapter]").addClass('active');
        }
        $('.wrapper').find("[data-id="+index+"]").show();
    }
    //alert(index);

    $('.tab').click(function(){
      var tabID = $(this).data('tabid'); // Get the tab ID data attribute

      // Remove all instances of "current" class from tabs
      $('.tab').removeClass('active');
      $('.tab').removeClass('clicked');

      // Add "current" class to selected tab
      $('.main').find("[data-tabid="+tabID+"]").addClass('active');
      $('.sb_menu').find("[data-tabid="+tabID+"]").addClass('clicked');

      if(tabID.includes("Chapter") || tabID.includes("HW")){
        $('.main').find("[data-tabid=Chapter]").addClass('active');
      }
      if(tabID=="Chapter"){
        $('.sb_menu').find("[data-tabid=Chapter00]").addClass('clicked');
      }

      // Hide all elements under the wrapper class
      // Same thing can be achieved with .children().css("display", "none");
      $('.wrapper').children().hide(); 

      // Show the container using the data attribute "blockid" as a selector
      // Again same thing with .find("[data-blockid="+tabID+"]").css("display", "block");
      $('.wrapper').find("[data-id="+tabID+"]").show();

      if(tabID=="Chapter"){
        $('.wrapper').find("[data-id=Chapter00]").show();
      }

    });
    /*
    $(function() {
      var nav = $('#nav');
      var win = $(window);
      
      $('#menu').on('click', function(e) {
        e.preventDefault();
        nav.slideToggle();
      });

      win.resize(function() {
        if (win.width() > 480 && nav.is(':hidden')) {
          nav.removeAttr('style');
        }
      });
    });
    */
});	

