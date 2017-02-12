$(document).ready(function(){

  $().UItoTop({ easingType: 'easeOutQuart' });

  var menuOffset = $('#nav').offset().top; 

  $(document).bind('ready scroll',function() {
    var docScroll = $(document).scrollTop();
    var navHeight = $('#nav').outerHeight()-7;

    if (docScroll >= menuOffset) {
      $('#nav').addClass('fixed');
      $('#main').css('padding-top', navHeight+'px');
    } else {
      $('#nav').removeClass('fixed');
      $('#main').css('padding-top', '0')
    }
   });

  // Create the dropdown base
  $("<select />").appendTo("nav");

  // Create default option "Go to..."
  $("<option />", {
     "selected": "selected",
     "value"   : "",
     "text"    : "Mine.."
  }).appendTo("nav select");

  // Populate dropdown with menu items
  $("nav a").each(function() {
   var el = $(this);
   $("<option />", {
       "value"   : el.attr("href"),
       "text"    : el.text()
   }).appendTo("nav select");
  });

  $("nav select").change(function() {
    window.location = $(this).find("option:selected").val();
  });

  //Accordion
  $( "#accordion" ).accordion({
      collapsible: false,
      heightStyle: "content"
    });

  // News box width calculation
  var winwidth = $(window).width();
  var newsbox = $('.main-hover-img');
  var rubriikTop = $('.rubriik-hover-img');
  var postbox = $('.post_img_container');
  var recbox = $('.rec_scal_img_wrap');
  var imgwidth  = newsbox.width();
  var rubriikTopWidth  = rubriikTop.width();
  var postimgwidth = postbox.width();
  var recboxwidth = recbox.width();
  newsbox.css('height', imgwidth*0.5);
  rubriikTop.css('height', rubriikTopWidth*0.5);
  postbox.css('height', postimgwidth*0.5);
  recbox.css('height', recboxwidth*0.5);
  $('.img-desc p').css('height', imgwidth*0.5);
  
  $(window).resize(function(){
     if($(this).width() != winwidth){
        winwidth = $(this).width();
        var newsbox = $('.main-hover-img');
        var rubriikTop = $('.rubriik-hover-img');
        var postbox = $('.post_img_container');
        var recbox = $('.rec_scal_img_wrap');
        imgwidth = newsbox.width();
        postimgwidth = postbox.width();
        var rubriikTopWidth  = rubriikTop.width();
        recboxwidth = recbox.width();
        newsbox.css('height', imgwidth*0.5);
        postbox.css('height', postimgwidth*0.5);
        rubriikTop.css('height', rubriikTopWidth*0.5);
        recbox.css('height', recboxwidth*0.5);
        $('.img-desc p').css('height', imgwidth*0.5);
     }
  });


  //Image hover
  $(".main-hover-img").on('mouseover',function(){
      var info=$(this).find(".news-css-image");
      info.stop().animate({opacity:0.1},100);
    }
  );
  $(".main-hover-img").on('mouseout',function(){
      var info=$(this).find(".news-css-image");
      info.stop().animate({opacity:1},100);
    }
  );
  
  //Searchbox
  $('.h-search').focus(function(){
     var box = $(this);
     if ( !$(this).val() ) {
        $(this).addClass("focus");
        $(".icon-search").css('color','#fff')
     }
  });
  $('.h-search').focusout(function() {
    var box = $(this);
    
    if ( !$(this).val() ) {
        $(this).removeClass("focus");
        $(".icon-search").css('color','#b3b3b3')
      }
  });

  //Tabbs
  $( ".tabbable" ).tabs();

  //Camera slider
  $("#camera_wrap_1").camera({
    fx: 'mosaicRandom',
    height: '420px',
    thumbnails: false,
    loader: 'none',
    hover: true,
    navigationHover: true,
    overlayer: true,
    pagination: false,
    playPause: false,
    transPeriod: 1000
  });


});
