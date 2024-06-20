<?php
    class User{
       // public int $id;
        public  $username;
        public  $firstname;
        public  $lastname;
        public  $pass;
        public  $email;
        public  $phone;
        private $active; 
        private  $code_recup; 
		private $role;
        private $photo;
        private  $code;

        public function __construct($username, $firstname, $lastname, $email,  $phone,$password, $photo){
           // $this->id=$id;
    $this->username=$username;
    $this->firstname=$firstname;
    $this->lastname=$lastname;
     $this->email=$email;
    $this->phone=$phone;
    $this->password=$password;
    $this->photo=$photo;
        }
        
        public function getId()
  {
      return $this->id;
  }

  public function getFirstName()
  {
      return $this->firstname;
  }

        public function getLastName()
        {
            return $this->lastname;
        }

        public function getuserName()
        {
            return $this->username;
        }

        public function getEmail(){
            return $this->email;
        }

         public function getpassword()
  {
      return $this->password;
  }

  public function getphone()
  {
      return $this->phone;
  }
  public function getrole(){
    return $this->role;
}

public function getactive(){
    return $this->active;
}
public function getcode_recup(){
    return $this->code_recup;
}
public function getphoto(){
    return $this->photo;
}
public function getcode(){
    return $this->code;
}



function setrole($role){
    $this->role=$role;
}


        public function setUsername($username){
            $this->username = $username;
        }
        
        public function setFirstname($firstname){
            $this->firstname = $firstname;
        }

        public function setLastname($lastname){
            $this->lastname = $lastname;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function setPhone($phone){
            $this->phone = $phone;
        }

        function setactive($active){
			$this->active=$active;
		}
		function setcode_recup( $code_recup){
			$this->code_recup=$code_recup;
		}
        function setphoto( $photo){
			$this->photo=$photo;
        }

        function setcode( $code){
			$this->code=$code;
		}
    }
?>