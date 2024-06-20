<?php
    include '../../config.php';
    class AdminC{

        public function addAdmin($Admin){
            $db = config::getConnexion();
            try{
                $req = $db->prepare("
                    INSERT INTO admin (username_admin, firstname_admin, lastname_admin, password_admin, email_admin, phone_admin, poste_admin, photo_admin)
                     VALUES (:username_admin, :firstname_admin, :lastname_admin, :password_admin, :email_admin, :phone_admin, :poste_admin, :photo_admin)
                ");
                $req->execute([
                    'username_admin' => $Admin->getusername_admin(),
                    'firstname_admin' => $Admin->getFirstname_admin(),
                    'lastname_admin' => $Admin->getLastname_admin(),
                    'password_admin' => $Admin->getPassword_admin(),
                    'email_admin' => $Admin->getEmail_admin(),
                    'phone_admin' => $Admin->getPhone_admin(),
                    'poste_admin'=> "admin",
                    'photo_admin' => $Admin->getphoto_admin()
                ]);
            } catch (Exception $e){
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
            $sql = "select * from admin where email_admin=:email_admin and password_admin=:password_admin";
            $request = $db->prepare($sql);
            $request->execute($params);
            $rawUser = $request->fetch();
            if($rawUser) return array("id_admin"=>$rawUser["id_admin"]);
            return false;
          }

        function getAdminById($id) {
            $db = config::getConnexion();
            $sql = "select * from admin where id_admin=:id_admin";
            $request = $db->prepare($sql);
            $request->execute($id);
            $rawUser = $request->fetch();
            return Admin::rawToUser($rawUser);
          }

        public function listAdmin(){
            $db = config::getConnexion();
            try{
                $list=$db->query('SELECT * FROM admin');
                return $list;
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }

        public function AffAdmin($id_admin){
            $db = config::getConnexion();
            try{
                $list=$db->query('SELECT * FROM admin WHERE id_admin = :id_admin' );
                return $list;
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }

        public function getAdmin($id_admin){
            $db = config::getConnexion();
            try{
                $resultat=$db->prepare('SELECT * FROM admin WHERE id_admin = :id_admin');
                $resultat->execute([
                    'id_admin' => $id_admin
                ]);
                return $resultat->fetch();
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }

        

        function recupererAdminname($username_admin){
			$db = config::getConnexion();
			
			
		
			try{
				$reponse = $db->prepare('SELECT username_admin FROM admin WHERE username_admin = :username_admin ');
			$reponse->execute(array('username_admin' => $username_admin));
				$user=$reponse->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

        public function updateAdmin($id_admin,$Admin){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('UPDATE  admin SET username_admin = :username_admin, firstname_admin = :firstname_admin, lastname_admin = :lastname_admin, email_admin = :email_admin, phone_admin = :phone_admin, password_admin = :password_admin, photo_admin = :photo_admin   WHERE id_admin = :id_admin
                ');
                $req->execute([
                    'id_admin' => $id_admin,
                    'username_admin' => $Admin->getusername_admin(),
                    'firstname_admin' => $Admin->getFirstname_admin(),
                    'lastname_admin' => $Admin->getLastname_admin(),
                    
                    'email_admin' => $Admin->getEmail_admin(),
                    'phone_admin' => $Admin->getPhone_admin(),
                    'password_admin' => $Admin->getPassword_admin(),
                    'photo_admin' => $Admin->getphoto_admin()
                    
                ]);
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }





        public function updateAdminC($id,$Admin){
            $db = config::getConnexion();
            try{
                $req = $db->prepare('UPDATE  users SET username_admin = :username_admin, firstname_admin = :firstname_admin, lastname_admin = :lastname_admin, email_admin = :email_admin, phone_admin = :phone_admin, password_admin = :password_admin, photo_admin= :photo_admin    WHERE id_admin = :id_admin
                ');
                $req->execute([
                    'id_admin' => $id_admin,
                    'username_admin' => $Admin->getusername_admin(),
                    'firstname_admin' => $Admin->getFirstname_admin(),
                    'lastname_admin' => $Admin->getLastname_admin(),
                    'password_admin' => $Admin->getPassword_admin(),
                    'email_admin' => $Admin->getEmail_admin(),
                    'phone_admin' => $Admin->getPhone_admin(),

                    'photo_admin' => $Admin->getphoto_admin()
                ]);
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }



        
        public function deleteAdmin($id_admin){
            $db = config::getConnexion();
            
            try{
                $req = $db->prepare('DELETE FROM admin  WHERE id_admin = :id_admin');
                    
                $req->execute([
                    'id_admin' => $id_admin
                ]);
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }





        function recupererAdmin($id_admin){
			$sql="SELECT * from admin where id_admin=$id_admin";
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

        function recupereremailAdmin($email_admin){
			$db = config::getConnexion();
			
			try{
				$reponse = $db->prepare('SELECT email FROM admin WHERE email_admin = :email_admin ');
			$reponse->execute(array('email_admin' => $email_admin));
				$user=$reponse->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


        function signinAdmin($password_admin,$email_admin){
			$db = config::getConnexion();
			
			
			try{
				$reponse = $db->prepare('SELECT * FROM admin WHERE email_admin = :email_admin AND password_admin =:password_admin');
			$reponse->execute(array('email_admin' => $email_admin,'password_admin' => $password_admin));
				$user=$reponse->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}


        function SwitchToUser($id_admin){
        
    
			
				$db = config::getConnexion();
				/*$query = $db->prepare(
					'UPDATE users SET 
		            
                        role= :role
					WHERE id= :id'
				);
                
                'UPDATE users, admin SET 
		            
                        role= :role
					WHERE id_admin= :id_admin'
                
                
                */
                try{
                    $query = $db->prepare(
					"UPDATE admin SET poste_admin ='user' WHERE id_admin=:id_admin
                    INSERT INTO users (username, firstname, lastname, password, email, phone, role, photo)
                    
                    SELECT username_admin, firstname_admin, lastname_admin, password_admin, email_admin, phone_admin, poste_admin, photo_admin
                       FROM admin WHERE id_admin = ?"
                    );
                   // $query->bind_param( $admin_id);
				    $query->execute([
                    
                    'id_admin' => $id_admin,
				      ]);
				       //echo $query->rowCount() . " records UPDATED successfully <br>";
			}        catch (Exception $e) {
				    $e->getMessage();
			}
          
	
        }






    }
?>