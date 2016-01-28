/**
 * Author  Dennis Hafemann
 * URL     https://github.com/dennishafemann/jquery.innermovement
 */
(function($) {
		
		// Name attribute of "animation is going on"
		var attrAnimating='data-is-animating';

	$.fn.innerMovement=function(options) {

		// Set default and extend with given options
		var settings=$.extend({
			// Vertical padding
			"vPadding": 50,
			// Horizontal Padding
			"hPadding": 50,
			// Animation duration
			"animationDuration": 500
		}, options);

		this.each(function() {
			var $this=$(this);

			// Get sizes
			var width=$this.outerWidth();
			var newWidth=$this.innerWidth()+(settings.hPadding*2);

			var height=$this.outerHeight();
			var newHeight=$this.innerHeight()+(settings.vPadding*2);

			// Sourround with div
			var $div=$('<div></div>');
			$div.append($this.clone());

			// Set dimensions
			$div
				.css('width', $this.outerWidth())
				.css('height', $this.outerHeight())
				.css('position', 'relative')
				.css('overflow', 'hidden')
			;
			$div.find(':first-child')
				.css('position', 'absolute')
				// Set new padding-sizes
				.css('width', newWidth)
				.css('height', newHeight)
				// Re-Center image
				.css('top', -settings.vPadding)
				.css('left', -settings.hPadding)
			;

			// Calculate the sizes-factor
			var xFactor=newWidth/width;
			var yFactor=newHeight/height;

			// Set move movement
			$div.mousemove(function(e) { // Mouse movement
				var $this=$(this);

				// Get mouse position
				var x=e.pageX-$this.offset().left;
				var y=e.pageY-$this.offset().top;

				// Calculate new position
				var newX=((((x*xFactor)*100)/newWidth)/100)*(settings.hPadding*2);
				var newY=((((y*yFactor)*100)/newHeight)/100)*(settings.vPadding*2);

				// Check if it's animating
				var isAnimating=$this.attr(attrAnimating);

				if (!isAnimating) {
					$this.attr(attrAnimating, 'true');

					// Position with animation
					$this.find(':first-child').animate({
							'left': -newX,
							'top': -newY
						}, (isAnimating==undefined?settings.animationDuration:0), function() {
							$this.attr(attrAnimating, '');
						}
					);
				}
			}).mouseleave(function(e) { // Re-center inner
				var $this=$(this);

				// Re-center with animation
				$this.find(':first-child').animate({
						'left': -settings.hPadding,
						'top': -settings.vPadding
					}, settings.animationDuration
				);

				$this.removeAttr(attrAnimating);
			});;

			// Replace with new container
			$div.replaceAll($this);
		});

		return this;
	};

}(jQuery));
