/*----------------------------------------------
controlle de saisie formulaire reservation ticket
------------------------------------------------*/

const form = document.getElementById('formAdmin');
const Username = document.getElementById('username_admin');
const Nom = document.getElementById('firstname_admin');
const Prenom = document.getElementById('lastname_admin');
const Email = document.getElementById('email_admin');
const Phone = document.getElementById('phone_admin');
const Password = document.getElementById('password_admin');
const Cpassword = document.getElementById('cpassword_admin');
//var myButton = document.querySelector('submit');

form.addEventListener('submit', (e) => {
    var valid = checkInputsUser();
    console.log(valid);
    if(valid === false){
        e.preventDefault();
    }
});

function checkInputsUser() {

	const UsernameValue = Username.value;
	const NomValue = Nom.value;
	const PrenomValue = Prenom.value;
	const EmailValue = Email.value;
  const PhoneValue = Phone.value;
  const PasswordValue = Password.value;
  const CpasswordValue = Cpassword.value;
 

	
	
  if( UsernameValue=== '') {
    setErrorFor(Username, 'Username cannot be blank');
return false;
} else{
    setSuccessFor(Username);
}
if(NomValue === '') {
    setErrorFor(Nom, 'Last Name cannot be blank');
    return false;
} else if(allLetter(Nom) == false){
    setErrorFor(Nom, 'Last Name contains letters only');
    return false;
} else {
    setSuccessFor(Nom);
}

if(PrenomValue === '') {
    setErrorFor(Prenom, 'First Name cannot be blank');
return false;
} else if(allLetter(Prenom) == false){
    setErrorFor(Prenom, 'First Name contains letters only');
    return false;

} else{
    setSuccessFor(Prenom);
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
	
	
	if(PhoneValue === '') {
		setErrorFor(Phone, 'Phone cannot be blank');
    return false;
    }else if(containsOnlyNumbers(PhoneValue)==false){
        setErrorFor(Phone, 'Phone contains digits only');
        return false;
	}else if(PhoneValue.length != 8 ){
        setErrorFor(Phone, 'Phone contains 8 digits');
        return false;
    } else {
		setSuccessFor(Phone);
	}

  if(PasswordValue === '') {
		setErrorFor(Password, 'Password cannot be blank');
    return false;
	} else{
		setSuccessFor(Password);
	}
  if(CpasswordValue === '') {
		setErrorFor(Cpassword, 'Confirm Password cannot be blank');
    return false;
  }
    else if(CpasswordValue !== PasswordValue){
        setErrorFor(Cpassword, "Passwords don't match");
        return false;
    }
	 else{
		setSuccessFor(Cpassword);
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