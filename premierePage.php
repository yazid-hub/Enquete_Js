<html>
    <head>
        <link href='Style2.css' rel='stylesheet' type='text/css' />
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <script language="javascript" src="calcul.js"></script>
      
    </head>
    <script>

        function validate(){
  var name = document.getElementById("name").value;
  var subject = document.getElementById("subject").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 5){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if(subject.length < 10){
    text = "Please Enter Correct Subject";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <= 140){
    text = "Please Enter More Than 140 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}

function traiterNom(){
    var nom =document.getElementById("nom").value;
    if(nom.length<3 ||nom.length>20){
        alert("votre nom n est pas valide");
    }
}

function traiterPrenom(){
    var Prenom =document.getElementById("Prenom").value;
    if(Prenom.length<3 ||Prenom.length>20){
        alert("votre Prénom n'est pas valide");
    }
}
function traiterProfission(){
    var Profession =document.getElementById("Profession").value;
    if(Profession.length<3 ||Profession.length>30){
        alert("votre Profession n'est pas valide");
    }
}
        
   function traiterEmail(){
                var mail = document.getElementById("email").value;         
               
             if(mail.indexOf("@") == -1 || mail.length < 6 || mail.indexOf(".")== -1) {
            alert ("Entrez un email valide");
            }else{
                mail.value.trim();
            }

   }
            function traiterNumero(){
    var num = document.getElementById("telephone").value;
    if(num.length != 10 || isNaN(num) )
        

    {
        alert ("Entrez un numéro valide svp");
    }
}

   function traiterAge(){
    var age = document.getElementById("age").value;
    if(age.length< 2 )
    {
        alert ("Votre age n'est pas valide!");
    }
}



function validation(){
    var nom = document.getElementById("nom");
    var prenom = document.getElementById("Prenom");
    var prof= document.getElementById("Profession");
    var age = document.getElementById("age");
    var mail = document.getElementById("email");
    var genre = document.getElementById("genre");
  

    if(nom.validity.valueMissing || prenom.validity.valueMissing || prof.validity.valueMissing || age.validity.valueMissing || mail.validity.valueMissing || genre.validity.valueMissing)
    {
        alert ("veuillez remplir tout les champs")
    }else{
        document.location.href="Questionnaire.html"
    }
   

}

var myCookies= [];
function  saveCookies(name)
{ 

    myCookies ["_nom"]  = document.getElementById ("nom").value;
	myCookies ["_prenom"]  = document.getElementById ("Prenom").value;
    myCookies ["genre"]=document.getElementById("genre").value;
    myCookies ["age"]=document.getElementById("age").value;
	myCookies ["_telephone"]  = document.getElementById ("telephone").value;
    myCookies ["_email"]  = document.getElementById ("email").value;
    myCookies ["_profession"]  = document.getElementById ("Profession").value;
    myCookies ["note"]  ="0" ;
    myCookies ["_note"]  ="0" ;
    myCookies ["_note2"]  ="0" ;
    myCookies ["_note3"]  ="0" ;
    myCookies ["_note4"]  ="0" ;
    myCookies ["_note5"]  ="0" ;
    myCookies ["_note6"]  ="0" ;
    myCookies["moyenne"]="0";

    // Démarrer la section réutilisable
    // Démarrer la section réutilisable
    document.cookie  =  "" ;
    var  expiresAttrib  =  new  Date( Date.now() + 60 * 1000 ).toString();
    var  cookieString  =  "" ;
    for  ( var  key  in  myCookies )
    {
        cookieString  =  key+"="+myCookies[key]+";"+expiresAttrib+";" ;
        document.cookie = cookieString ;
    }
}



</script>
     

            
    </script>
    <body>
        <header>
            <nav>
                <ul>
                    <li ><a id="bouton_envoi" href="index.html">ACCUEIL</a></li>
                    <li ><a id="bouton_envoi" href="#">MENU</a></li>
                    <li><a  href="#"><img id="logo" src="logo.png" alt="logo"/></a></li>
                    <li><a id="bouton_envoi"  href="#">GALERIE</a></li>
                    <li><a id="bouton_envoi"  href="#">CONTACT</a></li>
                </ul>
            </nav>
        </header>
    </br></br>
<div class="formulaireP1">
<form action="Modification.php" name="Enquete" method="post">
    <p class="obligation"><i>Complétez le formulaire. Tout les champs sont obligatiore </i><em>*</em> sont <em>obligatoires</em></p>
</br></br>
<div class="classy">
    <fieldset>
         <legend>Enquête de satisfaction</legend>
      <label>Genre </label>
         <SELECT NAME="Genre" id="genre" style="font-size: 25px;">
        <option value="Female">Femme</option>
        <option value="Male">Homme</option>
        </select>
    </br>
    <br>
        <label for="nom">Nom <em>*</em></label>
        <input id="nom" placeholder=" Serre" autofocus="" required="" onblur="traiterNom()" style="font-size: 25px;" >
        <br><br>

        <label for="prenom">Prenom <em>*</em></label>
        <input id="Prenom" placeholder="Olivier " autofocus="" required="" onblur="traiterPrenom()" style="font-size: 25px;"><br>
        <span id='missPrenom'></span><br>
        
        <label for="telephone">Portable <em>*</em></label>
        <input id="telephone"  placeholder="06xxxxxxxx" pattern="06[0-9]{8}" maxlength="10" onblur="traiterNumero()" style="font-size: 25px;"><br><br>

        <label for="email">Email <em>*</em></label>
        <input id="email" type="email" placeholder="prenom.nom@polytechnique.edu" required="" onblur="traiterEmail()" pattern="[a-zA-Z]*.[a-zA-Z]*@polytechnique.edu"  style="font-size: 25px;"><br>
        <span id="missemail"></span></br>

        <label for="age">Age<em>*</em></label>
        <input id="age" type="number" placeholder="xx" pattern="[0-9]{2}"  required="" style="-moz-appearance: textfield; height: 40px; font-size: 25px;"  onblur="traiterAge()" style="font-size: 25px;"><br>
        <span id=''></span><br>

        <label for="nom">Profession<em>*</em> </label>
        
        <input id="Profession" placeholder=" Garagiste" autofocus="" required="" onblur="traiterProfission()" style="font-size: 25px;"><br>
    </br></br>

        <div class="div_input_form">
        <input type="button" name="valid_inscr" id="bouton_envoi" class="input_form" value="Valider" onclick="validation(), saveCookies()" style="font-size: 25px;" />
        </div>

        

    </fieldset>
</div>
</form>
</div>
<?php
include('Modification.php');
?>



<footer>
    <p style="background-color: white; padding: 20px; margin-top: 200px ; border-radius: 20px; border:2px solid green; "> &copy; santé pour tous, Tous droits réservés</p>
</footer>
           
    </body>
</html>

