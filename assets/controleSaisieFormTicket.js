/*----------------------------------------------
controlle de saisie formulaire reservation ticket
------------------------------------------------*/
console.log("hola");
const form = document.getElementById('formTicket');
const Nom = document.getElementById('Nom');
const Prenom = document.getElementById('Prenom');
const NomEvenement = document.getElementById('NomEvenement');
const DateReservation = document.getElementById('DateReservation');
const seatReserver = document.getElementById('seat');

form.addEventListener('submit', (e) => {
    var valid = checkInputsTicket();
    console.log(valid);
    if(valid === false){
        e.preventDefault();
    }
});
function checkInputsTicket() {

	const NomValue = Nom.value;
	const PrenomValue = Prenom.value;
  const NomEvenementValue = NomEvenement.value;
  const DateReservationValue = DateReservation.value;
  const seatReserverValue = seatReserver.value;

	
	
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