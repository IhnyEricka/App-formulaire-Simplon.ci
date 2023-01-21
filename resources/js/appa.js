document.getElementById("prct").addEventListener("submit", function(e){
    
    var erreurs;
    var lastName= document.getElementById("lastName");
    var firstName= document.getElementById("firstName");
    var email= document.getElementById("email");
    var phone= document.getElementById("phone");
    
    if(!lastName.value){
      erreurs= "veuillez renseigner ce champs!";
    }

    if(!firstName.value){
        erreurs= "veuillez renseigner ce champs!";
      }

      if(!email.value){
        erreurs= "veuillez renseigner ce champs!";
      }

      if(!phone.value){
        erreurs= "veuillez renseigner ce champs!";
      }

      if (erreurs){
        e.preventDefault();
        document.getElementById("erreurs").innerHTML = erreurs;
        return false;
     }else {
        alert('Formulaire envoyé!');
     }

 
});