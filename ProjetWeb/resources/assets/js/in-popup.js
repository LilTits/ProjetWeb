/*
var inpopup = (function() 
{
	function ininit() {
        
		
		$('.in-popup-button').each(function(i, el)
		{
			 
			var modal = $('#inpopup');
			var modal2 = $('#inpopup2');

            var close = $('.close');
            

			// fonction qui enleve la class .show de la popup et la fait disparaitre
			function removeModal() {
				modal.removeClass('show');
				modal2.removeClass('show');
				
			}

			// evenement qui appelle la fonction removeModal()
			function removeModalHandler() {
				removeModal(); 
			}

			// au clic sur le bouton on ajoute la class .show a la div de la popup qui permet au CSS3 de prendre le relai
			$(el).click(function()
			{	
				modal.addClass('show');
				modal2.addClass('show');
				
			});

			// en cliquant sur le bouton close on ferme tout et on arrête les fonctions
			close.click(function(event)
			{
				event.stopPropagation();
				removeModalHandler();
			});

		});

		
	}

	ininit();

})();*/