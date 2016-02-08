// tabs
$('ul.tabs').each(function(){
    // For each set of tabs, we want to keep track of
    // which tab is active and its associated content
    var $active, $content, $links = $(this).find('a');

    // If the location.hash matches one of the links, use that as the active tab.
    // If no match is found, use the first link as the initial active tab.
    $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
    $active.addClass('active');

    $content = $($active[0].hash);

    // Hide the remaining content
    $links.not($active).each(function () {
      $(this.hash).hide();
    });

    // Bind the click event handler
    $(this).on('click', 'a', function(e){
      // Make the old tab inactive.
      $active.removeClass('active');
      $content.hide();

      // Update the variables with the new link and content
      $active = $(this);
      $content = $(this.hash);

      // Make the tab active.
      $active.addClass('active');
      $content.show();

      // Prevent the anchor's default click action
      e.preventDefault();
    });
  });


// Carrousel
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
      autoPlay: 4000,
      slideSpeed:4000,
      autoHeight:true,
      pagination:false,
      items : 3.5,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });

  $("#owl-demo2").owlCarousel({
      autoPlay: 6000,
      slideSpeed:6000,
      autoHeight:true,
      pagination:false,
      items : 3.5,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});

// Toggle mapa
$(document).ready(function() {
        $('.nav-toggle').click(function(){
          //get collapse content selector
          var collapse_content_selector = $(this).attr('href');         
          
          //make the collapse content to be shown or hide
          var toggle_switch = $(this);
          $(collapse_content_selector).slideDown(1000,function(){
            /*
            if($(this).css('display')=='none'){
              toggle_switch.html('CLIC PARA VER NUESTRA UBICACIÓN');//change the button label to be 'Show'
            }else{
              toggle_switch.html('CLIC PARA CERRAR NUESTRA UBICACIÓN');//change the button label to be 'Hide'
            } */
          });
        });
        
      });


// Chat Zopim

      window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
      d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
      _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
      $.src="//v2.zopim.com/?2rJDfaFLtCVN6m1ePW5weRcFRSEhchJf";z.t=+new Date;$.
      type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");

      
// Google Analytics 

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-19277740-1', 'auto');
      ga('send', 'pageview');


