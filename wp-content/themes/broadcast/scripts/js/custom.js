// JavaScript Document
$(function() {
$(".imgf").css("opacity","1.0");
$(".imgf").hover(function () {
$(this).stop().animate({
opacity:0.5
}, "slow");
},
function () {
$(this).stop().animate({
opacity: 1.0
}, "slow");
});
});

$(function() {
$(".shareimg").css("opacity","0.7");
$(".shareimg").hover(function () {									  
$(this).stop().animate({
opacity: 1.0
}, "slow");
},	
function () {		
$(this).stop().animate({
opacity: 0.5
}, "slow");
});
});

$(document).ready(function(){ 
$("ul.firstnav-menu").superfish({ 
animation: {opacity:'show', height:'show', width:'show'},   // slide-down effect without fade-in 
delay:200,               // 1.2 second delay on mouseout 
autoArrows: false, 
speed: 'fast',
dropShadows: false
}); 
})

$(document).ready(function(){ 
$("ul.secondnav-menu").superfish({ 
animation: {opacity:'show', height:'show', width:'show'},   // slide-down effect without fade-in 
delay:200,               // 1.2 second delay on mouseout 
autoArrows: false, 
speed: 'fast',
dropShadows: false
}); 
})


$(document).ready(function(){
$("a[rel^='prettyPhoto']").prettyPhoto();
});

/* plugin */
jQuery.fn.dwFadingLinks = function(settings) {
  settings = jQuery.extend({
    duration: 500
  }, settings);
  return this.each(function() {
    var original = $(this).css('color');
    $(this).mouseover(function() { $(this).animate({ color: settings.color },settings.duration); });
    $(this).mouseout(function() { $(this).animate({ color: original },settings.duration); });
  });
};

/* usage */
$(document).ready(function() {
  $('.list_category_new h3 a').dwFadingLinks({
    color: '#dbdbdb',
    duration: 700
  });

});

$(function(){
$("#spotlight").carouFredSel({
	auto : false,
	prev : "#foo1_prev",
	next : "#foo1_next"
});
});

$(function(){
$(".shorttitle").tipTip({maxWidth: "auto", edgeOffset: 10});
});

/* User's Time */

function getClockTime()
{
   var now    = new Date();
   var hour   = now.getHours();
   var minute = now.getMinutes();
   var second = now.getSeconds();
   var ap = "A.M.";
   if (hour   > 11) { ap = "P.M.";             }
   if (hour   > 12) { hour = hour - 12;      }
   if (hour   == 0) { hour = 12;             }
   if (hour   < 10) { hour   = "" + hour;   }
   if (minute < 10) { minute = "0" + minute; }
   if (second < 10) { second = "0" + second; }
   var timeString = hour +
                    ':' +
                    minute +
                    ' ' +
                    
                    ap;
   return timeString;
} 

function user_time(){
	var clockTime = getClockTime();
document.write('' + clockTime);
}

/* Other Categories Tabs */

$(document).ready(function () {
$('#other_categories').tabify();
});