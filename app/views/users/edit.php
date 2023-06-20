<h2>Edit Data Pengguna</h2>

<form action="<?php echo URL; ?>/users/update" method="post">
<input type="hidden" name="user_id" id="" value="<?php echo $data['user_id']?>">
    <table>
         <tr>
            <td>Email Pengguna</td>
            <td><input type="text" name="user_email" value="<?php echo $data['user_email']; ?>" ></td>
        </tr>
        <tr>
            <td>Password Pengguna</td>
            <td><input type="text" name="user_password" value="<?php echo $data['user_password']; ?>" ></td>
        </tr>
        <tr>
            <td>Nama Pengguna</td>
            <td><input type="text" name="user_nama" value="<?php echo $data['user_nama']; ?>" ></td>
        </tr>
        <tr>
            <td>HP Pengguna</td>
            <td><input type="text" name="user_hp" value="<?php echo $data['user_hp']; ?>" ></td>
        </tr>
        <tr>
            <td>Akun Pengguna</td>
            <td>
                <select class= "input-data" name="user_aktif" id="">
                    <option value="">Dipilih Qaqa</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
            </td>
        </tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>