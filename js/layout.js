(function($){
	var initLayout = function() {
		
		$('a.customGal').zoomimage({
			controlsTrigger: 'mouseover',
			className: 'custom',
			shadow: 40,
			controls: false,
			opacity: 1,
			beforeZoomIn: function(boxID) {
				$('#' + boxID)
					.find('img')
					.css('opacity', 0)
					.animate(
						{'opacity':1},
						{ duration: 500, queue: false }
					);
			},
			beforeZoomOut: function(boxID) {
				$('#' + boxID)
					.find('img')
					.css('opacity', 1)
					.animate(
						{'opacity':0},
						{ duration: 500, queue: false }
					);
			}
		});
	};
	
	EYE.register(initLayout, 'init');
})(jQuery)