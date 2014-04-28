// JavaScript Document

/*NAVIGATION TOGGLE*/
$( ".menu-action" ).click(function(){
	var status = $("#navigation").css('display' );
	$('#navigation').toggle(0);
	if(status=="block"){
		$('#sidebar').css('padding-top','20px');
		}else{
			$('#sidebar').css('padding-top','200px');
			}
	//alert(status);
	
});
/*FOOTER AFFIX*/
$(document).ready(function() {
    var s = $(".footer");
    var pos = s.position();                    
    $(window).scroll(function() {
        var windowpos = $(window).scrollTop();
		var navHeight=$('#navigation').height()+75;
        if (windowpos >= pos.top-navHeight) {
			var status = $("#navigation").css('display' );
			if(status=="block"){
				s.css({ 'top':navHeight ,'position':'fixed'});
				}			
			} else {
				s.css({ 'top':'' ,'position':''});
			}
    });
});
