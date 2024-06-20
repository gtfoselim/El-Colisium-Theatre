<?php
    include '../../config.php';
    class UserC{

        public function addUser($User){
            $db = config::getConnexion();
            try{
                $req = $db->prepare("
                    INSERT INTO users (username, firstname, lastname, password, email, phone, role, photo)
                     VALUES (:username, :firstname, :lastname, :password, :email, :phone, :role, :photo)
                ");
                $req->execute([
                    'username' => $User->getusername(),
                    'firstname' => $User->getFirstname(),
                    'lastname' => $User->getLastname(),
                    'password' => $User->getPassword(),
                    'email' => $User->getEmail(),
                    'phone' => $User->getPhone(),
                    'role' => "user",
                    'photo' => $User->getphoto()
                ]);
            } catch (Exeption $e){
                die('error: ' . $e->getMesssage());
            }
        }
       /*public function addUser($User){
        $db = config::getConnexion();
			$sql="INSERT INTO users (username, firstname, lastname,  email, phone,password, role, photo) 
			VALUES ( :username, :firstname, :lastname,  :email, :phone,:password, :role, :photo)";
			
			try{
				$query = $db->prepare($sql);
				$query->execute([
                    'username' => $User->getuserName(),
                    'firstname' => $User->getFirstName(),
                    'lastname' => $User->getLastName(),
                    'email' => $User->getEmail(),
                    'phone' => $User->getphone(),                    
                    'password' => $User->getpassword(),
                    'role' => "user",
                    'photo' => $User->getphoto()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}*/

        function authenticate($params) {
            $db = config::getConnexion();
            $sql = "select * from users where email=:email and password=:password";
            $request = $db->prepare($sql);
            $request->execute($params);
            $rawUser = $request->fetch();
            if($rawUser) return array("id"=>$rawUser["id"]);
            return false;
          }

        function getUserById($id) {
            $db = config::getConnexion();
            $sql = "select * from users where id=:id";
            $request = $db->prepare($sql);
            $request->execute($id);
            $rawUser = $request->fetch();
            return User::rawToUser($rawUser);
          }

        public function listUser(){
            $db = config::getConnexion();
            try{
                $list=$db->query('SELECT * FROM users');
                return $list;
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }

        public function AffUser($id){
            $db = config::getConnexion();
            try{
                $list=$db->query('SELECT * FROM users WHERE id = :id' );
                return $list;
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }

        public function getUser($id){
            $db = config::getConnexion();
            try{
                $resultat=$db->prepare('SELECT * FROM users WHERE id = :id');
                $resultat->execute([
                    'id' => $id
                ]);
                return $resultat->fetch();
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }

        

        function recupererusername($username){
			$db = config::getConnexion();
			
			
		
			try{
				$reponse = $db->prepare('SELECT username FROM users WHERE username = :username ');
			$reponse->execute(array('username' => $username));
				$user=$reponse->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

        public function updateUser($id,$User){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('UPDATE  users SET username = :username, firstname = :firstname, lastname = :lastname, email = :email, phone = :phone, password = :password, photo = :photo   WHERE id = :id
                ');
                $req->execute([
                    'id' => $id,
                    'username' => $User->getusername(),
                    'firstname' => $User->getFirstName(),
                    'lastname' => $User->getLastName(),
                    
                    'email' => $User->getEmail(),
                    'phone' => $User->getPhone(),
                    'password' => $User->getPassword(),
                    'photo' => $User->getphoto()
                    
                ]);
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }
       /* public function updateUser($id,$User){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('UPDATE  users SET username = :username, firstname = :firstname, lastname = :lastname, email = :email, phone = :phone, password = :password, photo= :photo    WHERE id = :id
                ');
                $req->execute([
                    'id' => $id,
                    'username' => $User->getusername(),
                    'firstname' => $User->getFirstname(),
                    'lastname' => $User->getLastname(),
                    'password' => $User->getPassword(),
                    'email' => $User->getEmail(),
                    'phone' => $User->getPhone(),
                    'photo' => $User->getphoto()
                ]);
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }*/
        public function deleteUser($id){
            $db = config::getConnexion();
            echo 'aasba';
            try{
                $req = $db->prepare('DELETE FROM users  WHERE id = :id');
                    
                $req->execute([
                    'id' => $id
                ]);
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }

        function recupererUser($id){
			$sql="SELECT * from users where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}




        function setpass($pass, $email){
        
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE users SET 
		            
					code= :pass
					WHERE email= :email'
				);
				$query->execute([
                    'pass' => $pass,
                    'email' => $email
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

		function setpassword($email, $password){
        
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE users SET 
		            code=null,
					password= :password
					WHERE email= :email'
				);
				$query->execute([
                    'password' => $password,
                    'email' => $email
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}


        function recupereremail($email){
			$db = config::getConnexion();
			
			try{
				$reponse = $db->prepare('SELECT email FROM users WHERE email = :email ');
			$reponse->execute(array('email' => $email));
				$user=$reponse->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


        function signin($password,$email){
			$db = config::getConnexion();
			
			
			try{
				$reponse = $db->prepare('SELECT * FROM users WHERE email = :email AND password =:password');
			$reponse->execute(array('email' => $email,'password' => $password));
				$user=$reponse->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
function banuser( $id){
        
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE users SET 
		            
                        active=0
					WHERE id= :id'
				);
				$query->execute([
                    
                    'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}


		function unbanuser( $id){
        
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE users SET 
		            
                        active=1
					WHERE id= :id'
				);
				$query->execute([
                    
                    'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}



        function modifierrole($role, $id){
        
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE users SET 
		            
                        role= :role
					WHERE id= :id'
				);
				$query->execute([
                    'role' => $role,
                    'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}
    }
?>