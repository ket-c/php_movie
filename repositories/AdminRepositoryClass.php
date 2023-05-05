<?php
namespace respositiories;
include_once __DIR__.'/../configs/Database.php';
use configs\Database as DatabaseConnection;
class AdminRepositoryClass extends DatabaseConnection
{
    public function saveNewAdmin($name, $email, $phone, $address, $about, $password){

        $sqlQ = 'INSERT INTO admins (name, email, phone, address, about, password) VALUE(?,?,?,?,?,?)';
        if (!$bindP= $this->db->prepare($sqlQ)) {
           return false;
        }
        else{
            $bindP -> bindParam(1, $name);
            $bindP -> bindParam(2, $email);
            $bindP -> bindParam(3, $phone);
            $bindP -> bindParam(4, $address);
            $bindP -> bindParam(5, $about);
            $bindP -> bindParam(6, $password);
            if ($bindP->execute()) {
                return true;
            }
            else{
                return false;
            }
        }
    }
    //authenticate admin login
    public function authentication($nickname, $password)
    {
        $sqlQ = 'SELECT * FROM admins WHERE email =? AND password =? LIMIT 1';
        if (!($bindP = $this->db->prepare($sqlQ))) {
            $result = false;
        } else {
            //bind and removev sql injection
            $bindP->bindParam(1, $nickname);
            $bindP->bindParam(2, $password);

            if ($bindP->execute()) {
                $result = $bindP->fetch();
                if($result['id'] != null){
                session_start();
                $_SESSION['loggedin_id']= $result['id'];
                return true;
                } else{
                    return false;
                }
                
               
            } else {
                $result = false;
            }
        }
        return $result;
    }

    //fetch admins
    public function fetchAllAdmins()
    {
        $sqlQ = 'SELECT * FROM admins ORDER BY id DESC LIMIT 30';
        if (!($bindP = $this->db->prepare($sqlQ))) {
            $result = false;
        } else {
            if ($bindP->execute()) {
                $result = $bindP->fetchAll();
            } else {
                $result = false;
            }
        }
        return $result;
    }
    public function fetchAdmin($id)
    {
        $sqlQ = 'SELECT * FROM admins WHERE id = ? LIMIT 1';
        if (!($bindP = $this->db->prepare($sqlQ))) {
            $result = null;
        } else {
            $bindP->bindParam(1, $id);
            if ($bindP->execute()) {
                $result = $bindP->fetch();
            } else {
                $result = null;
            }
        }
        return $result;
    }
    public function updateAdmin($id, $name, $email, $phone, $address, $about){
    
        // $date_created = date ('Y-m-d H:i:s');
        $sqlQ = 'UPDATE admins SET name = ?, email =?, phone = ?, address =?, about = ? WHERE id =?';
        if (!$bindP= $this->db->prepare($sqlQ)) {
            return false;
        }
        else{
            $bindP->bindParam(1, $name);
            $bindP->bindParam(2, $email);
            $bindP->bindParam(3, $phone);
            $bindP->bindParam(4, $address);
            $bindP->bindParam(5, $about);
            $bindP->bindParam(6, $id);
            if ($bindP->execute()) {
               return true;
            }
            else{
                return false;
            }
        }
    }
}
