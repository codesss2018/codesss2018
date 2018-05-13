$(document).ready(function () {

    $('#da-slider').cslider({
        autoplay : true,
        bgincrement : 450
    });

    $("#owl-demo").owlCarousel({
        items : 4,
        lazyLoad : true,
        autoPlay : true,
        navigation : true,
        navigationText : ["", ""],
        rewindNav : false,
        scrollPerPage : false,
        pagination : false,
        paginationNumbers : false,
    });

    $('#loginRegisterCancel').on('click', function(){

    });
    $('#loginRegister').on('click', function(){
    	cookieValue = getCookie("sessionId");
    	if (cookieValue!="") {

		}else{
			$('#myModal88').modal('show');
		}
    });

    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion
        width: 'auto', //auto or any width like 600px
        fit: true   // 100% fit in a container
    });
});
