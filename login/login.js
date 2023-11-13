function verifier() {
    var login = document.getElementById("Email").value;
    var cin = document.getElementById("cin").value;
    var pwd = document.getElementById("Password").value;
    var a="@";


    if (login.length === 0 || cin.length === 0) {
        alert("Vérifier votre login et votre de mot de passe");
        return false;
    }

    else {
        if (cin.length < 8 || cin.length > 8) {
            alert("Votre cin doit avoir une longueur égale à 8 chiffres");
            return false;
        }

        if (login.substring(login.indexOf(a)) != '@isikef.u-jendouba.tn') {
            alert("Votre adresse gmail termine par @isikef.u-jendouba.tn");
            return false;
        } 
        if(pwd != cin)
        {
             alert("cin et le mot de passe sont le même")
        }
    }





}