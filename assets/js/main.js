$(document).ready(function(){


	init();
});

function init(){

	var $container = $('.images ul');
	$(window).load(function(){
		// init
		$container.packery({
		  itemSelector: 'li',
		  gutter: 10
		});
	})




}
