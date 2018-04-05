jQuery(document).ready(function($){

	AOS.init({
	 duration: 1200
	});

	var numb = window.location.href.match(/^.*\//);; //Home url

	$('a[href^="#"]').on('click',function (e) {
		var pathname = window.location.href; //current url
		var arr = pathname.split('#');

	    e.preventDefault();
	    if(numb == arr[0]){
		    var target = this.hash;
		    var $target = $(target);

		    $('html, body').stop().animate({
		        'scrollTop': $target.offset().top
		    }, 900, 'swing', function () {
		        window.location.hash = target;
		    });
		}
		else{
			var bang = ($(this).attr('href'));
			window.location.replace( numb + bang);
		}
	});

	$('.img_container').magnificPopup({
	  delegate: 'a', // child items selector, by clicking on it popup will open
	  type: 'image',
		gallery:{enabled:true},
	  // other options
		removalDelay: 500
		});

	if ($('.last_project .btn_container').length) {
		var waypoint = new Waypoint({
		  //element: document.getElementById('the_btn'),
		  element: jQuery('.last_project .btn_container'),
		  handler: function(direction) {
		    jQuery('.last_project .btn_container a').addClass('creative');
		  },
			offset: '75%'
		});
	}

	jQuery('#menu_button').click(function() {
		jQuery( ".navbar .navbar-collapse" ).slideToggle();
		jQuery('.navbar-header').toggleClass('menu_open');
		jQuery('html, body').toggleClass('overflowClass');
	});

});

jQuery(window).load(function() {
	/*jQuery('.the_loader').addClass('off');
	jQuery('.home_banner .a-btn.anima').addClass('creative');*/

	jQuery('.the_loader').addClass('off').delay(800).queue(function(next){
		jQuery('.home_banner .a-btn.anima').addClass('creative');
		next();
	 });

});
