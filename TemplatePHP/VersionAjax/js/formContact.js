// import


// Declaration des variable
let sendMessage = document.getElementById("sendMessage");
let errorName = document.getElementById("errorName");
let errorEmail = document.getElementById("errorEmail");
let errorMessage = document.getElementById("errorMessage");

let formContact = document.forms["formContact"];


// Asignation au boutton / Autre
formContact.addEventListener("submit", SendForm);



// Les function
function RequestAjax() {
    
    // Set les valeur du formulaire
    let data = new FormData(formContact);

    // Créer l'objet Xhr
    let xhr = new XMLHttpRequest();

    // Ecoute le changement d'état de la requête
    xhr.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            
            let res = this.response;

            if(res.success){
                sendMessage.innerHTML = res.msg;
            }

        }else if(this.readyState == 4){
            sendMessage.innerHTML = "Une erreur est survenue...";
        }
    
    };

    xhr.open("POST", "Models/contact.class.php", true);
    xhr.responseType = "json";
    xhr.send(data);
    return false;
}


function SendForm(form) {

    // Annule le comportement par defaut
    form.preventDefault();
    
    let error = false;
    let inputs = this;

    if(!inputs["name"].value){
        errorName.innerHTML = "Vous devez saisir un Nom";
        error = true;
    }else{
        errorName.innerHTML = "";
    }
    
    if(!inputs["email"].value){
        errorEmail.innerHTML = "Vous devez saisir Email";
        error = true;
    }else{
        errorEmail.innerHTML = "";
    }
    
    if(!inputs["message"].value){
        errorMessage.innerHTML = "Vous devez saisir un Message";
        error = true;
    }else{
        errorMessage.innerHTML = "";
    }

    if(error){ // si pas d'érreur on stop le code le code

        return;
    }else{ // si pas d'érreur on continu le code
        RequestAjax();
        errorName.innerHTML = "";
        errorEmail.innerHTML = "";
        errorMessage.innerHTML = "";
        // inputs["name"].value = "";
        // inputs["firstName"].value = "";
        // inputs["email"].value = "";
        // inputs["message"].value = "";
    }

};