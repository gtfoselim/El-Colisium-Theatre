
<?php
    include '../../config.php';
    class ProfileC{


public function listProfile(){
            $db = config::getConnexion();
            try{
                $list=$db->query('SELECT * FROM admin UNION ALL SELECT * FROM users');
                return $list;
            }
            catch (exception $e){
                die('error: ' .$e->getMessage());
            }
        }

    }