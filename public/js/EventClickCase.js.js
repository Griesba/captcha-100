/*$(function() {
	var arraymsg = [];
	$('td').click(function() {
		idtr = this.id;
		//Permet de deselectionner la cellule selectionnée
		if ($(this).hasClass('selection')) {
    		$(this).removeClass('selection');
		 	arraymsg.pop(idtr);
    	}else {
    	//Permet la selection d'une cell sélectionnée	
	 $(this).addClass('selection');
	 arraymsg.push(idtr);
		}
	});
*/

//Fonction qui va gerer l'Evenement de la selection d'une case
//Grace à la méthode event.target
function tes(event) {
  if (event.target.nodeName == "TD") {
  	event.target.classList.toggle("clicked")
    //alert('TD got clicked');
  }
}