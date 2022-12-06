(function($) {
$(function() {

	$('ul.tabs__caption').on('click', 'li:not(.active)', function() {
		$(this)
			.addClass('active').siblings().removeClass('active')
			.closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
	});

});

$( "body" ).on( "click", "._continue, ._cart", function() {
    var trackerName = ga.getAll()[0].get('name');
    ga(trackerName + '.send', 'event', 'tocart', 'click'); // не известно название цели
	
});
$( "body" ).on( "submit", ".popup__content form", function() {
    var trackerName = ga.getAll()[0].get('name');
    ga(trackerName + '.send', 'event', 'buy', 'click'); // не известно название цели
    
});
$( "body" ).on( "submit", "#kredit-modal form", function() {
    var trackerName = ga.getAll()[0].get('name');
    ga(trackerName + '.send', 'event', 'credit', 'click'); // не известно название цели
	
});
$( "body" ).on( "submit", "form#shopOrderForm1", function() {
    var trackerName = ga.getAll()[0].get('name');
    ga(trackerName + '.send', 'event', 'order', 'click'); // не известно название цели

});
})(jQuery);
