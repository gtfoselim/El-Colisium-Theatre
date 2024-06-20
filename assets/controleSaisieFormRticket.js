console.log("hola");
/*----------------------------------------------
controlle de saisie formulaire reservation ticket
------------------------------------------------*/
const form = document.getElementById('formTicketAdmin');
console.log(form);
const CIN = document.getElementById('CINAdmin');
const Nom = document.getElementById('NomAdmin');
const Prenom = document.getElementById('PrenomAdmin');
const Email = document.getElementById('EmailAdmin');
const NomEvenement = document.getElementById('NomEvenementAdmin');
const DateReservation = document.getElementById('DateReservationAdmin');
const seatsReserver = document.getElementById('seatsReserverAdmin');


form.addEventListener('submit', (e) => {
    var valid = checkInputsTicket();
    console.log(valid);
    if(valid === false){
        e.preventDefault();
    }
});
function checkInputsTicket() {

	const cinValue = CIN.value;
	const NomValue = Nom.value;
	const PrenomValue = Prenom.value;
	const EmailValue = Email.value;
  const NomEvenementValue = NomEvenement.value;
  const DateReservationValue = DateReservation.value;
  const seatsReserverValue = seatsReserver.value;

	
	if(cinValue === '') {
		setErrorFor(CIN, 'CIN cannot be blank');
    return false;
    }else if(containsOnlyNumbers(cinValue)==false){
        setErrorFor(CIN, 'CIN contains digits only');
        return false;
	}else if(cinValue.length != 8 ){
        setErrorFor(CIN, 'CIN contains 8 digits');
        return false;
    } else {
		setSuccessFor(CIN);
	}
	
	if(EmailValue === '') {
		setErrorFor(Email, 'Email cannot be blank');
    return false;
	} else if (!isEmail(EmailValue)) {
		setErrorFor(Email, 'Not a valid email');
    return false;
	} else {
		setSuccessFor(Email);
	}
	
	if(NomValue === '') {
		setErrorFor(Nom, 'Nom cannot be blank');
        return false;
	} else if(allLetter(Nom) == false){
        setErrorFor(Nom, 'Nom contains letters only');
        return false;
    } else {
		setSuccessFor(Nom);
	}
	
	if(PrenomValue === '') {
		setErrorFor(Prenom, 'Prenom cannot be blank');
    return false;
    } else if(allLetter(Prenom) == false){
        setErrorFor(Prenom, 'Prenom contains letters only');
        return false;
    
	} else{
		setSuccessFor(Prenom);
	}
  if(NomEvenementValue === '') {
		setErrorFor(NomEvenement, 'NomEvenement cannot be blank');
    return false;
	} else{
		setSuccessFor(NomEvenement);
	}
  if(DateReservationValue === '') {
		setErrorFor(DateReservation, 'Date Reservation cannot be blank');
    return false;
	} else{
		setSuccessFor(DateReservation);
	}
  if(seatReserverValue == '') {
		setErrorFor(seatsReserver, 'select your seats');
    return false;
	} else{
		setSuccessFor(seatsReserver);
	}
  return true;
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'mb-3 form-group invalid';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'mb-3 form-group valid';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
function allLetter(inputtxt)
  {
   var letters = /^[A-Za-z]+$/;
   if(inputtxt.value.match(letters))
     {
      return true;
     }
   else
     {
     return false;
     }
  }
  function containsOnlyNumbers(str) {
    return /^[0-9]+$/.test(str);
  }
