
  $(function() {
   $.fn.scrollToTop = function() {
    $(this).hide().removeAttr("href");
    if ($(window).scrollTop() >= "250") $(this).fadeIn("slow")
    var scrollDiv = $(this);
    $(window).scroll(function() {
     if ($(window).scrollTop() <= "250") $(scrollDiv).fadeOut("slow")
     else $(scrollDiv).fadeIn("slow")
    });
    $(this).click(function() {
     $("html, body").animate({scrollTop: 0}, "slow")
    })
   }
  });

  $(function() {
   $("#go-top").scrollToTop();
  });





  function day(){
    $(".s1bg").css("background-image", "url('http://pashkov.wp/wp-content/themes/pashkov/img/bg2.jpg')");
    $(".me").animate({
      backgroundColor: "rgba(180,180,180,0.60)",
    }, 600 );
    $(".skills").animate({
      backgroundColor: "rgba(150,150,150,0.60)",
    }, 600 );
    $(".wtl").animate({
      backgroundColor: "rgba(200,200,200,0.60)",
    }, 600 );
    $(".content").animate({
      backgroundColor: "rgba(160,160,160,0.75)",
    }, 600 );
    $(".txt").animate({
      color: "black",
    }, 600);
    $(".posts").animate({
      backgroundColor: "rgba(180,180,180,0.75)",
    }, 600);
    $(".ghlink").css("filter","invert(0)");
   
  };

  function night(){

    $(".me").animate({
      backgroundColor: "rgba(20,20,20,0.80)",
    }, 600 );
    $(".skills").animate({
      backgroundColor: "rgba(12,12,12,0.80)",
    }, 600 );
    $(".wtl").animate({
      backgroundColor: "rgba(25,25,25,0.80)",
    }, 600 );
    $(".content").animate({
      backgroundColor: "rgba(20,20,20,0.85)",
    }, 600 );
    $(".posts").animate({
      backgroundColor: "rgba(15,15,15,0.80)",
    }, 600);
    $(".txt").animate({
      color: "white",
    }, 600);
    $(".ghlink").css("filter","invert(1)")
    $(".s1bg").css("background-image", "url('http://pashkov.wp/wp-content/themes/pashkov/img/bg.jpg')");
  
  };

  $(".day").click(function(){
   day();
  });
  $(".night").click(function(){
   night();
  });

  var d = new Date();
  var h = d.getHours();
  var m = d.getMinutes(); 
  var s = d.getSeconds(); 

    if(h > 5 && h < 21) {
      day();  
    } else{
      night();
    }
 if(h>5 && h < 21){
  if(h != 20){
    var nh = (((21 - h)*60 -(60- m))*60+(60 - s))*1000;
    setTimeout(night, nh);
    console.log(nh);
  } else if (h == 20){
      if(m !=59){
        var nhh = ((60 - m)*60 - s)*1000;
        setTimeout(night, nhh)
      } else if(m == 59){
        var nm = (60 - s)*1000;
        setTimeout(night, nm)
};
};
 }/* else{
    if(h !=4){

    } else if (h==4){
      if (m!=59){

      }else if(m ==59){

      }
    }
 }
*/

  window.onload = function(){
    $(".s1bg").css("transition", ".5s");
  }