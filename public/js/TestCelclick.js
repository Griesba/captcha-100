function clicked(){
	var cl = this.className;
	
	if (/selected/.test(cl)) {
		this.className = cl.replace(" selected", "");
		selected.splice(selected.indexOf(this), 2);
	}else {
		this.className += " selected";
		selected.push(this, [this.children[0].innerHTML, this.children[1].innerHTML]);
	}
}

function valider(e){
	e.preventDefault();
	
	var confirmation = "Vous avez choisi :  \n",
		i = 0,
		l = selected.length;
	
	l == 0 && (confirmation = "Vous n'avez rien choisi :(");
	
	alert(confirmation);
}

var tr = document.querySelectorAll("#table tr"),
	a = document.querySelector("a"),
	selected = [],
	i = 0,
	l = tr.length;

for ( ; i<l; i++) tr[i].addEventListener("click", clicked, false);

a.addEventListener("click", valider, false);