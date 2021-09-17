var envoyer = document.getElementById("envoyer1");
envoyer.addEventListener("click", function verif(event) {
    let mail = document.getElementById("mail").value;
    let email = /(^[\w\.-]+@[a-z]+[\.]{1}[a-z]{2,3}$)/;
    let pass = document.getElementById("pass").value;
    // Controle de l'email
    if (!mail.test(mail)) {
        document.getElementById("c2").textContent = "Veulliez saisir votre Email";
        event.preventDefault();
    } else {
        document.getElementById("c2").textContent = "";
    }
});