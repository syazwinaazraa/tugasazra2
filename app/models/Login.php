<?php 
namespace App\Models;

use App\Core\Model;

class Login extends Model
{
    public function getUser($user_nama, $user_password)
    {
        $query = "SELECT * FROM tb_users WHERE user_nama=:user_nama AND user_password=:user_password";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":user_nama", $user_nama);
        $stmt->bindParam(":user_password", $user_password);
        $stmt->execute();

        return $this->selects($stmt);
    }
}