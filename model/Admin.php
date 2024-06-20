<?php
    class Admin{
       // public int $id;
        public  $username_admin;
        public  $firstname_admin;
        public  $lastname_admin;
        public  $pass_admin;
        public  $email_admin;
        public  $phone_admin;
        private $active_admin; 
        private  $code_recup_admin; 
		private $poste_admin;
        private $photo_admin;

        public function __construct($username_admin, $firstname_admin, $lastname_admin, $email_admin,  $phone_admin,$password_admin, $photo_admin){
           // $this->id=$id;
    $this->username_admin=$username_admin;
    $this->firstname_admin=$firstname_admin;
    $this->lastname_admin=$lastname_admin;
     $this->email_admin=$email_admin;
    $this->phone_admin=$phone_admin;
    $this->password_admin=$password_admin;
    $this->photo_admin=$photo_admin;
        }
        
        public function getId_admin()
  {
      return $this->id_admin;
  }

  public function getFirstName_admin()
  {
      return $this->firstname_admin;
  }

        public function getLastName_admin()
        {
            return $this->lastname_admin;
        }

        public function getuserName_admin()
        {
            return $this->username_admin;
        }

        public function getEmail_admin(){
            return $this->email_admin;
        }

         public function getpassword_admin()
  {
      return $this->password_admin;
  }

  public function getphone_admin()
  {
      return $this->phone_admin;
  }
  public function getposte_admin(){
    return $this->poste_admin;
}

public function getactive_admin(){
    return $this->active_admin;
}
public function getcode_recup_admin(){
    return $this->code_recup_admin;
}
public function getphoto_admin(){
    return $this->photo_admin;
}



function setposte_admin($poste_admin){
    $this->poste_admin=$poste_admin;
}


        public function setUsername_admin($username_admin){
            $this->username_admin = $username_admin;
        }
        
        public function setFirstname_admin($firstname_admin){
            $this->firstname_admin = $firstname_admin;
        }

        public function setLastname_admin($lastname_admin){
            $this->lastname_admin = $lastname_admin;
        }

        public function setEmail_admin($email_admin){
            $this->email_admin = $email_admin;
        }

        public function setPassword_admin($password_admin){
            $this->password_admin = $password_admin;
        }

        public function setPhone_admin($phone_admin){
            $this->phone_admin = $phone_admin;
        }

        function setactive_admin($active_admin){
			$this->active_admin=$active_admin;
		}
		function setcode_recup_admin( $code_recup_admin){
			$this->code_recup_admin=$code_recup_admin;
		}
        function setphoto_admin( $photo_admin){
			$this->photo_admin=$photo_admin;
		}
    }
?>