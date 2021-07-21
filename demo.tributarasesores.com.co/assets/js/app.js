$(document).ready(function () {

	// responsive nav
	var responsiveNav = $('#toggle-nav');
	var navBar = $('.nav-bar');

	responsiveNav.on('click', function (e) {
		e.preventDefault();
		console.log(navBar);
		navBar.toggleClass('active')
	});

	// pseudo active
	if ($('#docs').length) {
		var sidenav = $('ul.side-nav').find('a');
		var url = window.location.pathname.split('/');
		var url = url[url.length - 1];

		sidenav.each(function (i, e) {
			var active = $(e).attr('href');

			if (active === url) {
				$(e).parent('li').addClass('active');
				return false;
			}
		});
	}

	// fix 
	// assets/js/app.js	
	// js/main.js
	function setTimeline() {
		var timelineWidth = 100;
		$(".cd-horizontal-timeline .events a").each(function (i, el) {
			$(el).css({ "left": timelineWidth + "px" });
			timelineWidth += 200;
		});
		$(".cd-horizontal-timeline .events").css({ "width": timelineWidth + "px" });
		localStorage.setItem('timelineWidth', timelineWidth);
	}
	setTimeout(setTimeline, 500);

});

hljs.configure({ tabReplace: '  ' });
hljs.initHighlightingOnLoad();

