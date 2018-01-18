function validateForm() {
    var x = document.forms["nieuwsbrief"]["email"].value;

    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");


//---------------------------------- Email ----------------------------------//
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("U heeft geen geldig e-mail adres ingevoerd.");
        return false;
    }

}
