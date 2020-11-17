 function test() {
     
    var valueNom = document.getElementById('nom').value;
    var valueEmail = document.getElementById('email').value;
    var valueTel = document.getElementById('tel').value;
    
    if (valueNom != "" && valueEmail != "" && valueTel != "") {
        alert("Votre message a été envoyé");
    }
    else {
        alert("Tous les champs ne sont pas rempli");
    }
}

