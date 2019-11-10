$(document).ready(function(){
		$('#Connexion').modal('hide')
		$('#Inscription').modal('show')

		$('#Connexion').modal('show')



});






var popup = (function() 
{

	function init() {
        






		
		//var overlay = $('.overlay');

		/*$('.popup-button').each(function(i, el)
		{	
			
			
			var modal = $('#popup');
			var modal1 = $('#inpopup');
			var modal2 = $('#inpopup2');
			
			//var close = $('.close');

			// fonction qui enleve la class .show de la popup et la fait disparaitre
			function removeModal() {
				modal.removeClass('show');
				
			}

			// evenement qui appelle la fonction removeModal()
			function removeModalHandler() {
				removeModal(); 
			}

			$(".popup-button-connexion").click(function(){

			modal1.addClass('show');
			modal2.removeClass('show');
			});
			$(".popup-button-inscription").click(function(){

			modal2.addClass('show');
			modal1.removeClass('show');
			});*/
			
				
			

			// au clic sur le bouton on ajoute la class .show a la div de la popup qui permet au CSS3 de prendre le relai
			/*$(el).click(function()
			{	
				modal.addClass('show');
				
				//overlay.unbind("click");
				// on ajoute sur l'overlay la fonction qui permet de fermer la popup
				//overlay.bind("click", removeModalHandler);
			});*/

			// en cliquant sur le bouton close on ferme tout et on arrête les fonctions
			/*close.click(function(event)
			{
				event.stopPropagation();
				removeModalHandler();
			});*/

		//});
	}

	init();

})();