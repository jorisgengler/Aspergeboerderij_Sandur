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

function validateForm2() {
    var x = document.forms["nieuwsbrief"]["email"].value;

    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");


//---------------------------------- Email ----------------------------------//
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("U heeft geen geldig e-mail adres ingevoerd.");
        return false;
    }

}


function validateFormreserrveren() {

//---------------------------------- firstname ----------------------------------//
  var name = document.forms["reserrveren"]["firstname"].value;
  if (name == "") {
      alert("U heeft geen naam ingevoerd");
      return false;
  }
//---------------------------------- Email ----------------------------------//
  var x = document.forms["reserrveren"]["email"].value;
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");

  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
      alert("U heeft geen geldig e-mail adres ingevoerd.");
      return false;
  }
//---------------------------------- Datum ----------------------------------//
  var persoon = document.forms["reserrveren"]["personen"].value;
  if (persoon == "") {
      alert("U heeft geen personen ingevoerd");
      return false;
  }
//---------------------------------- Datum ----------------------------------//
  var datum = document.forms["reserrveren"]["maand"].value;
  if (datum == "") {
      alert("U heeft geen datum ingevoerd");
      return false;
  }
}
