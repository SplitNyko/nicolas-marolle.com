$(document).ready(function()
	{
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 900; // Durée de l'animation (en ms)
			$('html, body').stop().animate( { 'scrollTop': $(page).offset().top }, speed, 'swing' ); // Go
			return false;});
	});