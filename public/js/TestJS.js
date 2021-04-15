//utilisation d'un querySelector afin de stocker tout les elements qui correspondent au selecteur.
//Pour le cas la, le selecteur c'est td.selected.
var selected = document.querySelectorAll('td.selected')
      for(var i=0; i< selected.length; i++){
        //Stockage de tout les elements existants 
      	var selec = selected[i];
        //Evenement click gerer à l'aide de la methode addEventListener.
          selec.addEventListener('click', function(event){
          	if(selected.length == 0){
              //Si aucune case ne sont cocher renvoie un message d'erreur sinon stock les cases sélectionnés
          		var confirmation = "Vous n'avez pas choisi de de réponse.";
          		alert(confirmation);
          	}
          	else{
          		confirmation = selected[i].children[0].innerHTML
          	}
          });
      }
      

/*
function cliquer(){
        this.className = /selected/.test(this.className) ? this.className.replace(" selected", "") : this.className+" selected";
    }
        function valider(e){
            var confirmation = "Vous avez choisi :  \n",
                selected = document.querySelectorAll("td.selected");

            for(var i=0, l=selected.length; i<l; i++) confirmation += "- L'article " + selected[i].children[0].innerHTML + " qui a pour prix " + selected[i].children[1].innerHTML + "\n";

            l == 0 && (confirmation = "Vous n'avez rien choisi :(");

            alert(confirmation);
        }
        
        var td = document.querySelectorAll("#table td");

        for (var i=0, l=td.length ; i<l; i++) td[i].addEventListener("click", clicked, false);
*/