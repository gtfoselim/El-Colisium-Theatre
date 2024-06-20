/*----------------------------------------------
controlle de saisie formulaire reservation ticket
------------------------------------------------*/
console.log("hola");
const form = document.getElementById('formTicket');
const CIN = document.getElementById('CIN');
const Nom = document.getElementById('Nom');
const Prenom = document.getElementById('Prenom');
const Email = document.getElementById('Email');
const NomEvenement = document.getElementById('NomEvenement');
const DateReservation = document.getElementById('DateReservation');
const seatReserver = document.getElementById('seatReserver');

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
  const seatReserverValue = seatReserver.value;

	
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
		setErrorFor(seatReserver, 'select your seats');
    return false;
	} else{
		setSuccessFor(seatReserver);
	}
  return true;
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'col-lg-4 col-md-6 form-group invalid';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'col-lg-4 col-md-6 form-group valid';
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

/*----------------------------------------------
controlle de saisie formulaire reservation place
------------------------------------------------*/

const formPlace = document.getElementById('formPlace');
const CINplace = document.getElementById('CINplace');
const NomPlace = document.getElementById('NomPlace');
const PrenomPlace = document.getElementById('PrenomPlace');
const EmailPlace = document.getElementById('EmailPlace');
const TypeEvenementPlace = document.getElementById('typeEvenementPlace');
const NomEvenementPlace = document.getElementById('NomEvenementPlace');
const DateEvenementPlace = document.getElementById('DateEvenementPlace');
const nbPersonneEstimePlace = document.getElementById('nbPersonneEstimePlace');
const PrixTicketPlace = document.getElementById('PrixTicketPlace');

formPlace.addEventListener('submit', (e) => {
    var valid = checkInputsPlace();
    console.log(valid);
    if(valid === false){
        e.preventDefault();
    }
});
function checkInputsPlace() {

	const cinValue = CINplace.value;
	const NomValue = NomPlace.value;
	const PrenomValue = PrenomPlace.value;
	const EmailValue = EmailPlace.value;
    const typeEvenementValue = TypeEvenementPlace.value;
  const NomEvenementValue = NomEvenementPlace.value;
  const DateEvenementValue = DateEvenementPlace.value;
  const nbPersonneEstimePlaceValue = nbPersonneEstimePlace.value;
  const PrixTicketPlaceValue = PrixTicketPlace.value;

	
	if(cinValue === '') {
		setErrorFor(CINplace, 'CIN cannot be blank');
    return false;
    }else if(containsOnlyNumbers(cinValue)==false){
        setErrorFor(CINplace, 'CIN contains digits only');
        return false;
	}else if(cinValue.length != 8 ){
        setErrorFor(CINplace, 'CIN contains 8 digits');
        return false;
    } else {
		setSuccessFor(CINplace);
	}
	
	if(EmailValue === '') {
		setErrorFor(EmailPlace, 'Email cannot be blank');
    return false;
	} else if (!isEmail(EmailValue)) {
		setErrorFor(EmailPlace, 'Not a valid email');
    return false;
	} else {
		setSuccessFor(EmailPlace);
	}
	
	if(NomValue === '') {
		setErrorFor(NomPlace, 'Nom cannot be blank');
        return false;
	} else if(allLetter(NomPlace) == false){
        setErrorFor(NomPlace, 'Nom contains letters only');
        return false;
    } else {
		setSuccessFor(NomPlace);
	}
	
	if(PrenomValue === '') {
		setErrorFor(PrenomPlace, 'Prenom cannot be blank');
    return false;
    } else if(allLetter(PrenomPlace) == false){
        setErrorFor(PrenomPlace, 'Prenom contains letters only');
        return false;
    
	} else{
		setSuccessFor(PrenomPlace);
	}
  if(NomEvenementValue === '') {
		setErrorFor(NomEvenementPlace, 'NomEvenement cannot be blank');
    return false;
	} else{
		setSuccessFor(NomEvenementPlace);
	}
  if(DateEvenementValue === '') {
		setErrorFor(DateEvenementPlace, 'Date Reservation cannot be blank');
    return false;
	} else{
		setSuccessFor(DateEvenementPlace);
	}
  if(nbPersonneEstimePlaceValue === '') {
		setErrorFor(nbPersonneEstimePlace, 'nbPlace cannot be blank');
    return false;
	} else{
		setSuccessFor(nbPersonneEstimePlace);
	}
  if(PrixTicketPlaceValue == '') {
		setErrorFor(PrixTicketPlace, 'typePlace cannot be blank');
    return false;
	} else{
		setSuccessFor(PrixTicketPlace);
	}
    if(typeEvenementValue == '0') {
		setErrorFor(TypeEvenementPlace, 'typePlace cannot be blank');
    return false;
	} else{
		setSuccessFor(TypeEvenementPlace);
	}
  return true;
  
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'col-lg-4 col-md-6 form-group invalid';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'col-lg-4 col-md-6 form-group valid';
}