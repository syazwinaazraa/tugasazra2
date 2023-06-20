<h2>Input Data Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/simpan" method="post">
    <table>
        <tr>
            <td>Golongan Pelanggan</td>
            <td><select class="input-data" name="pel_id_gol">
                        <option value="">Dipilih Qaqa</option>
                        <?php
                            $conn = mysqli_connect("localhost","root","","tugas2_azra") or die(mysqli_connect_error());
                            $golongan = mysqli_query($conn, "SELECT * FROM tb_golongan ORDER BY gol_id DESC");
                            while($gol = mysqli_fetch_array($golongan)){
                        ?>
                        <option value="<?php echo $gol['gol_id'] ?>"><?php echo $gol['gol_nama']?></option>
                        <?php } ?>
            </select>        
            </td>
        </tr>
        <tr>
            <td>Akun Pelanggan</td>
            <td><select class="input-data" name="pel_id_user">
                        <option value="">Dipilih Qaqa</option>
                        <?php
                            $conn = mysqli_connect("localhost","root","","tugas2_azra") or die(mysqli_connect_error());
                            $users = mysqli_query($conn, "SELECT * FROM tb_users ORDER BY user_id DESC");
                            while($user = mysqli_fetch_array($users)){
                        ?>
                        <option value="<?php echo $user['user_id'] ?>"><?php echo $user['user_nama']?></option>
                        <?php } ?>
            </select>        
            </td>
        </tr>
        <tr>
            <td>Nomor Pelanggan</td>
            <td><input type="text" name="pel_no"></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="pel_nama"></td>
        </tr>
        <tr>
            <td>Alamat Pelanggan</td>
            <td><input type="text" name="pel_alamat"></td>
        </tr>
        <tr>
            <td>HP Pelanggan</td>
            <td><input type="text" name="pel_hp"></td>
        </tr>
        <tr>
            <td>KTP Pelanggan</td>
            <td><input type="text" name="pel_ktp"></td>
        </tr>
        <tr>
            <td>Seri Pelanggan</td>
            <td><input type="text" name="pel_seri"></td>
        </tr>
        <tr>
            <td>Meteran Pelanggan</td>
            <td><input type="text" name="pel_meteran"></td>
        </tr>
        <tr>
            <td>Keterangan Pelanggan</td>
            <td>
                <select class= "input-data" name="pel_aktif" id="">
                    <option value="">Dipilih Qaqa</option>
                    <option value="Y">Aktif</option>
                    <option value="N">Tidak Aktif</option>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>