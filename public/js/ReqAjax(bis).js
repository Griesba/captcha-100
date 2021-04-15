//Création d'un objet qui va contenir les données que l'on veut envoyés.
let formData = new FormData();
		//Ajoute une nouvelle valeur à une clé existante dans un objet FormData ou ajoute la clé si elle n'existe pas déjà.
        formData.append('id', selected.id) //<!-- clicked.id-->);
        fetch('../model/captchaModel.php', {
            method: 'POST',
            body: formData
        });

                /*let response = await fetch('../model/captchaModel.php', {
        method: 'POST',
        body: formData
      	});
      	let result = await fetch('../model/captchaModel.php');
      	console.log(result);
    	}*/


        //Gestion message dans le cas où l'envoie s'est bien effectué.
        .then(console.log, console.error)

        //Ce bout de code si il devait être utilisé, il doit être mis à la suite
        //Du code qui gere l'evenement de la selection des cases.