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

        public function __construct($username, $firstname, $lastname, $email,  $phone,$password, $photo,$username_admin, $firstname_admin, $lastname_admin, $email_admin,  $phone_admin,$password_admin, $photo_admin){
           // $this->id=$id;
    $this->username=$username;
    $this->firstname=$firstname;
    $this->lastname=$lastname;
     $this->email=$email;
    $this->phone=$phone;
    $this->password=$password;
    $this->photo=$photo;
    $this->username_admin=$username_admin;
    $this->firstname_admin=$firstname_admin;
    $this->lastname_admin=$lastname_admin;
     $this->email_admin=$email_admin;
    $this->phone_admin=$phone_admin;
    $this->password_admin=$password_admin;
    $this->photo_admin=$photo_admin;
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