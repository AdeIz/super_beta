$(document).ready(function() {
	new WOW().init();

    /* banerfullslide */
    $(".openbanerfull").click(function(){
        $(".imgminimize").fadeOut("fast");
        $(".imgmaximize").slideToggle("normal");
    });
    $(".closebanerfull").click(function(){
        $(".imgminimize").slideToggle("normal");
        $(".imgmaximize").fadeOut("fast");
    });

    /* menulistradar */
    $(".menuradar").click(function(){
        $(".menu-listradar").slideToggle("normal");
        $(this).toggleClass("active");
    });
    
	/* menu mobile slide */
    $(".nav-mobile").click(function(){
        $(".mainmenu").slideToggle();
    });

    /* search */
    $(".showsearch").click(function(){
        $(".wrp-searchinput").fadeIn("slow");
    });
    $(".close-search").click(function(){
        $(".wrp-searchinput").fadeOut("slow");
    });
    

    /* carousel editor homepage */
	$("#owl-demo").owlCarousel({
		navigation : true,
		slideSpeed : 300,
		paginationSpeed : 400,
        items : 4,
        itemsDesktop : [1199,4],
        autoPlay: 4000,
        transitionStyle : "fadeUp"
	});

	/* carousel top video homepage */
	$("#top-video").owlCarousel({
		navigation : true,
		slideSpeed : 300,
		paginationSpeed : 400,
        items : 5,
        itemsDesktop : [1199,5],
        autoPlay: 3000
	});

	/* carousel top photos homepage */
	$("#top-photos").owlCarousel({
		navigation : true,
		slideSpeed : 300,
		paginationSpeed : 400,
        items : 5,
        itemsDesktop : [1199,5],
        autoPlay: 3500,
	});

});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 120) {
        $(".container-mainmenu").addClass("fixed");
    } else {
        $(".container-mainmenu").removeClass("fixed");
    }
});






