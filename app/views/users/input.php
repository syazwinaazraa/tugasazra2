<h2>Input Data Pengguna</h2>

<form action="<?php echo URL; ?>/users/simpan" method="post">
    <table>
        <tr>
            <td>Email Pengguna</td>
            <td><input type="text" name="user_email"></td>
        </tr>
        <tr>
            <td>Password Pengguna</td>
            <td><input type="text" name="user_password"></td>
        </tr>
        <tr>
            <td>Nama Pengguna</td>
            <td><input type="text" name="user_nama"></td>
        </tr>
        <tr>
            <td>Alamat Pengguna</td>
            <td><input type="text" name="user_alamat"></td>
        </tr>
        <tr>
            <td>HP Pengguna</td>
            <td><input type="text" name="user_hp"></td>
        </tr>
        <tr>
            <td>POS Pengguna</td>
            <td><input type="text" name="user_pos"></td>
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
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>