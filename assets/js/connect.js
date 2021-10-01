var envoyer = document.getElementById("envoyer1");
envoyer.addEventListener("click", function verif(event) {
    //recuperer tous les données
    let mail = document.getElementById("mail").value;
    let pass1=document.getElementById("pass").value;
    let pass2=document.getElementById("pass2").value;
    let prenom=document.getElementById("prenom").value;
    let nom=document.getElementById("nom").value;
    let adresse=document.getElementById("adresse").value;
    let cp=document.getElementById("cp").value;
    let ville=document.getElementById("ville").value;
    let pays=document.getElementById("pays").value;
    //
    let alpha = /^[A-Za-zéèàç]+$/;
    // regex controlant le code postal, on controle s'il y a bien 5 chiffres.
    let cpostal = /^[0-9]{5,10}$/;
    //regex controlant le mail:
    let email = /(^[\w\.-éàçè]+@[a-z]+[\.]{1}[a-z]{2,3}$)/;

    // Controle de l'email
    if (!email.test(mail)) {
        document.getElementById("c1").textContent = "Veulliez saisir votre Email";
        event.preventDefault();
    } else {
        document.getElementById("c1").textContent = "";

    }
    // Controle du mots de pass
    if (pass1=="") {
        document.getElementById("c2").textContent = "Veulliez saisir votre mot de pass";
        event.preventDefault();
    } else {
        document.getElementById("c2").textContent = "";

    }
    // Controle du mots de pass
    if (pass2!=pass1||pass2=="") {
        document.getElementById("c3").textContent = "Veulliez saisir votre mot de pass ou Mot de passe non conforme ";
        event.preventDefault();
    } else {
        document.getElementById("c3").textContent = "";

    }

    // confirmation du prenom
    if (!alpha.test(nom)||nom=="") {
        document.getElementById("c5").textContent = "Veulliez saisir votre nom";
        event.preventDefault();
    } else {
        document.getElementById("c5").textContent = "";

    }
    if (!alpha.test(prenom)||prenom=="") {
        document.getElementById("c4").textContent = "Veulliez saisir votre prenom";
        event.preventDefault();
    } else {
        document.getElementById("c4").textContent = "";

    }
    if (!alpha.test(ville)) {
        document.getElementById("c8").textContent = "Ce champ est obligatoire";
        event.preventDefault();
    } else {
        document.getElementById("c8").textContent = "";

    }
    if (!cpostal.test(cp)||cp=="") {
        document.getElementById("c7").textContent = "Ce champ est obligatoire";
        event.preventDefault();
    } else {
        document.getElementById("c7").textContent = "";
    }
    if (!alpha.test(pays)||pays=="") {
        document.getElementById("c9").textContent = "Ce champ est obligatoire";
        event.preventDefault();
    } else {
        document.getElementById("c9").textContent = "";

    }
    if(adresse==""){
        document.getElementById("c6").textContent="Ce champ est obligataoire";
        event.preventDefault();
    } else {
        document.getElementById("c6").textContent = "";
    }
});