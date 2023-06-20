<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_pelanggan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }


      public function simpan()
      {
            $pel_id_gol = $_POST ['pel_id_gol'];
            $pel_id_user = $_POST ['pel_id_user'];
            $pel_no = $_POST ['pel_no'];
            $pel_nama = $_POST ['pel_nama'];
            $pel_alamat = $_POST ['pel_alamat'];
            $pel_hp = $_POST ['pel_hp'];
            $pel_ktp = $_POST ['pel_ktp'];
            $pel_seri = $_POST ['pel_seri'];
            $pel_meteran = $_POST ['pel_meteran'];
            $pel_aktif = $_POST ['pel_aktif'];
            
            $sql = "INSERT INTO tb_pelanggan (pel_id_gol, pel_id_user, pel_no, pel_nama, pel_alamat, pel_hp, pel_ktp, pel_seri, pel_meteran, pel_aktif)
            VALUES (:pel_id_gol, :pel_id_user, :pel_no, :pel_nama, :pel_alamat, :pel_hp, :pel_ktp, :pel_seri, :pel_meteran, :pel_aktif)";
            
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id_gol", $pel_id_gol);
            $stmt->bindParam(":pel_id_user", $pel_id_user);
            $stmt->bindParam(":pel_no", $pel_no);
            $stmt->bindParam(":pel_nama", $pel_nama);
            $stmt->bindParam(":pel_alamat", $pel_alamat);
            $stmt->bindParam(":pel_hp", $pel_hp);
            $stmt->bindParam(":pel_ktp", $pel_ktp);
            $stmt->bindParam(":pel_seri", $pel_seri);
            $stmt->bindParam(":pel_meteran", $pel_meteran);
            $stmt->bindParam(":pel_aktif", $pel_aktif);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_pelanggan 
            WHERE pel_id=:pel_id";
            
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":pel_id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $pel_id = $_POST ['pel_id'];
            $pel_id_gol = $_POST ['pel_id_gol'];
            $pel_id_user = $_POST ['pel_id_user'];
            $pel_no = $_POST ['pel_no']; 
            $pel_nama = $_POST ['pel_nama'];
            $pel_alamat = $_POST ['pel_alamat'];
            $pel_hp = $_POST ['pel_hp'];
            $pel_ktp = $_POST ['pel_ktp'];
            $sql = "UPDATE tb_pelanggan SET pel_id_gol=:pel_id_gol, pel_id_user=:pel_id_user, pel_no=:pel_no, pel_nama=:pel_nama, pel_alamat=:pel_alamat, pel_hp=:pel_hp, pel_ktp=:pel_ktp
            WHERE pel_id=:pel_id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":pel_id", $pel_id);
            $stmt->bindParam(":pel_id_gol", $pel_id_gol);
            $stmt->bindParam(":pel_id_user", $pel_id_user);
            $stmt->bindParam(":pel_no", $pel_no);
            $stmt->bindParam(":pel_nama", $pel_nama);
            $stmt->bindParam(":pel_alamat", $pel_alamat);
            $stmt->bindParam(":pel_hp", $pel_hp);
            $stmt->bindParam(":pel_ktp", $pel_ktp);
            $stmt->execute();
      }
      
      public function delete($id)
      {
            $query = "DELETE FROM tb_pelanggan 
            WHERE pel_id=:pel_id";
            
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":pel_id", $id);
            $stmt->execute();

      }
}