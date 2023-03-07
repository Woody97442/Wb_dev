// Déclaration des variables
let sendMessage = document.getElementById("sendMessage"); // L'élément HTML qui affiche le message de confirmation ou d'erreur
let errorName = document.getElementById("errorName"); // L'élément HTML qui affiche une erreur si le champ "Nom" est vide
let errorEmail = document.getElementById("errorEmail"); // L'élément HTML qui affiche une erreur si le champ "Email" est vide
let errorMessage = document.getElementById("errorMessage"); // L'élément HTML qui affiche une erreur si le champ "Message" est vide
let cancelForm = document.getElementById("cancelForm"); // L'élément HTML qui représente le bouton "Annuler" dans le formulaire

let formContact = document.forms["formContact"]; // Le formulaire HTML (nommé "formContact") qui sera soumis

// Assignation des événements aux éléments HTML
formContact.addEventListener("submit", SendForm); // Lorsque le formulaire est soumis, appelle la fonction "SendForm"
cancelForm.addEventListener("click", cancel); // Lorsque le bouton "Annuler" est cliqué, appelle la fonction "cancel"

// Fonction pour annuler le formulaire
function cancel(){
    sendMessage.innerHTML = "";
    errorName.innerHTML = "";
    errorEmail.innerHTML = "";
    errorMessage.innerHTML = "";
}

// Fonction pour envoyer le formulaire
function SendForm(form) {
    
    // Annule le comportement par défaut (envoyer le formulaire)
    form.preventDefault();
    
    let error = false; // Initialisation de la variable "error" à "false"
    let inputs = this; // Récupère tous les champs du formulaire
    
    // Vérifie si le champ "Nom" est vide
    if(!inputs["name"].value){
        errorName.innerHTML = "Vous devez saisir un Nom";
        error = true;
    }else{
        errorName.innerHTML = "";
    }
    
    // Vérifie si le champ "Email" est vide
    if(!inputs["email"].value){
        errorEmail.innerHTML = "Vous devez saisir Email";
        error = true;
    }else{
        errorEmail.innerHTML = "";
    }
    
    // Vérifie si le champ "Message" est vide
    if(!inputs["message"].value){
        errorMessage.innerHTML = "Vous devez saisir un Message";
        error = true;
    }else{
        errorMessage.innerHTML = "";
    }
    
    // Si une erreur a été détectée, arrête la fonction
    if(error){ 
        return;
    }else{ // Sinon, continue l'exécution du code
        SendRequest();
        errorName.innerHTML = "";
        errorEmail.innerHTML = "";
        errorMessage.innerHTML = "";
    }
    
};

// Fonction pour envoyer une requête au serveur
function SendRequest() {
    
    // Récupère les valeurs du formulaire
    let data = new FormData(formContact);
    let option = {
        method : "POST",
        dataType: "JSON",
        body: data
    }


    // Envoie une requête au serveur avec les valeurs du formulaire
    fetch('Models/execution.php', option)
    .then(function(response){
        return response.json();
    })
    .then(function(json){
        // Si une réponse est renvoyée par le serveur
        console.log(json);

        if (json.reponse != null) {
            sendMessage.innerHTML = json.reponse;
            sendMessage.css({
                "color": "red"
            });
        }
        if (json.reponse == "Good") {
            sendMessage.innerHTML = "Données insérées avec succés !!!";
            sendMessage.css({
                "color": "green"
            });
        }
    })
    .catch((err) => {
            console.log('Erreur : ');
            sendMessage.innerHTML = 'Erreur : Un incident réseau ne permet pas de répondre favorablement à votre requête !!!';
    });
}