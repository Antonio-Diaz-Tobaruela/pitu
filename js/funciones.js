jQuery(window).load(
    function(){
        jQuery(".loader").fadeOut();
        jQuery(".preloader").delay(1000).fadeOut("slow");
    })
$(window).on('load', function () {
    $('.outer-loader').delay(1000).fadeOut('slow');
});
$(window).scroll(function() {
    if ($(this).scrollTop() > 300) {
        $('a.scroll-top').fadeIn('slow');
        //$('#overbox3').fadeIn('slow');
    } else {
        $('a.scroll-top').fadeOut('slow');
        //$('#overbox3').fadeOut('slow');
    }
});
$('a.scroll-top').click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0});
});

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
function getCookie(name) {
    var arg=name+"=";
    var alen=arg.length;
    var clen=document.cookie.length;
    var i=0;
 
    while (i<clen) {
        var j=i+alen;
 
        if (document.cookie.substring(i,j)==arg)
            return "1";
        i=document.cookie.indexOf(" ",i)+1;
        if (i==0)
            break;
    }
 
    return null;
}

function aceptar_cookies(){
    var expire=new Date();
    expire=new Date(expire.getTime()+7776000000);
    document.cookie="cookies_surestao=aceptada; expires="+expire;
 
    var visit=getCookie("cookies_surestao");
 
    if (visit==1){
        popbox3();
    }
}
 
$(function() {
    var visit=getCookie("cookies_surestao");
    if (visit==1){ popbox3(); }
});
 
function popbox3() {
    $('#overbox3').toggle();
}