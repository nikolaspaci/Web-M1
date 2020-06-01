$(document).ready(function () {
    var inputCV=document.getElementById("AttachLM");
    inputCV.onchange = function(e) { 
    readFile();
    };
});

function controleFormulaire(){
    supprimerToutesLesErreurs()
    var pasDeChampvide=controleChampVide()
    var reglesOk=regleSpeciales()
    return (pasDeChampvide && reglesOk)
}

function regleSpeciales(){
    var prenom=document.getElementById("InputPrenom");
    var nom=document.getElementById("InputNom");
    var dateNaissance=document.getElementById("DateNaissanceInput");   
    var noteMaths=document.getElementById("NoteMathsInput"); 
    var noteInfo=document.getElementById("NoteInfoInput"); 
    var noteAnglais=document.getElementById("NoteAnglaisInput"); 
    var noteMoyenne=document.getElementById("NoteMoyenneInput"); 
    var noProblem=true;    
    
    if(!controleAgeEtudiant(dateNaissance.value)){
        noProblem=false;
        ajouterErreurFormControl(dateNaissance.id,"L'âge doit être compris entre 20 et 35 ans.")
    }    
    
    if(!controleLongeur(3,20,prenom.value)){
        noProblem=false;
        ajouterErreurFormControl(prenom.id,"Le prénom doit avoir une longeur comprise entre 3 et 20 caractères.")
    }else{
        if(!controleLettreUniquement(prenom.value)){
            noProblem=false;
            ajouterErreurFormControl(prenom.id,"Le prénom doit exclusivement être composé de lettres.")
        }
    }   
    
    if(!controleLongeur(3,20,nom.value)){
        noProblem=false;
        ajouterErreurFormControl(nom.id,"Le nom doit avoir une longeur comprise entre 3 et 20 caractères.")
    }else{
        if(!controleLettreUniquement(nom.value)){
            noProblem=false;
            ajouterErreurFormControl(nom.id,"Le nom doit exclusivement être composé de lettres.")
        }
    }
    
    if(!mustBeGreaterThan(noteMaths.value,10)){
        noProblem=false;
        ajouterErreurFormControl(noteMaths.id,"La note en mathématiques doit être supérieur à 10.")
    }
    
    if(!mustBeGreaterThan(noteInfo.value,15)){
        noProblem=false;
        ajouterErreurFormControl(noteInfo.id,"La note en informatique doit être supérieur à 15.")
    }
    
    if(!mustBeGreaterThan(noteAnglais.value,12)){
        noProblem=false;
        ajouterErreurFormControl(noteAnglais.id,"La note en anglais doit être supérieur à 12.")
    }
    
    if(!mustBeGreaterThan(noteMoyenne.value,14)){
        noProblem=false;
        ajouterErreurFormControl(noteMoyenne.id,"La moyenne doit être supérieur à 14.")
    }
    
    return noProblem;
}

function ajouterErreurFormControl(idFormControl,msgErreur){
    fctrl=document.getElementById(idFormControl);
    fctrl.className=fctrl.className + " is-invalid";
    
    var newElement = document.createElement("div");
    newElement.setAttribute('id', idFormControl + "erreurFormat");
    newElement.innerHTML = "<div class='invalid-feedback d-block'>" + msgErreur + "</div>";
    fctrl.after(newElement);
}

function supprimerToutesLesErreurs(){    
    
    var borderRouge=document.getElementsByClassName("form-control is-invalid");
    
    while(borderRouge[0]){
        borderRouge[0].className="form-control"
    }
    
    var msgErreur = document.getElementsByClassName("invalid-feedback d-block");
    
    while(msgErreur[0]){
        msgErreur[0].parentNode.removeChild(msgErreur[0]);
    }
}

function controleChampVide(){
    var pasDeChampVide=true;
    var textInput = document.getElementsByClassName("form-control");
    
    for (var i = 0; i < textInput.length; ++i) {
        if(textInput[i].value==""){
            pasDeChampVide=false;
            textInput[i].className = textInput[i].className + " is-invalid";
        }else{
            textInput[i].className ="form-control";
        }
    }
    
    return pasDeChampVide
}

function mustBeGreaterThan(valeur,borne){
    if(valeur>borne){
        return true;
    }else{
        return false;
    }
}

function controleLongeur(min,max,mot){
    if(mot.length>=min && mot.length<=max){
        return true;
    }else{
        return false;
    }
}

function controleLettreUniquement(chaine){
    var letters = /^[a-zéèëàï]+$/;
    
    if(chaine.toLowerCase().match(letters)){
        return true;
    }else{
        return false;
    }
}

function controleAgeEtudiant(dateNaissance){
    
    var age =calculateAge(dateNaissance);
    if(age>=20 && age<=35){
        return true;
    }else{
        return false;
    }
}

function calculateAge(birthday) {
    var ageDifMs = Date.now() - Date.parse(birthday);
    var ageDate = new Date(ageDifMs);
    return Math.abs(ageDate.getUTCFullYear() - 1970);
}

function readFile(){
    var cv=document.getElementById("LMText");
    var filecv=document.getElementById("AttachLM").files[0];
    var reader  = new FileReader();
    reader.onload=function(event){
        cv.value=reader.result;
    };
    reader.readAsText(filecv,"utf8");
}

