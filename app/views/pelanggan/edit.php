<h2>Edit Data Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="post">
<input type="hidden" name="pel_id" id="" value="<?php echo $data['pel_id']?>"> 
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
            <td><input type="text" name="pel_no" value="<?php echo $data['pel_no']; ?>" ></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="pel_nama" value="<?php echo $data['pel_nama']; ?>" ></td>
        </tr>
        <tr>
            <td>Alamat Pelanggan</td>
            <td><input type="text" name="pel_alamat" value="<?php echo $data['pel_alamat']; ?>" ></td>
        </tr>
        <tr>
            <td>HP Pelanggan</td>
            <td><input type="text" name="pel_hp" value="<?php echo $data['pel_hp']; ?>" ></td>
        </tr>
        <tr>
            <td>KTP Pelanggan</td>
            <td><input type="text" name="pel_ktp" value="<?php echo $data['pel_ktp']; ?>" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>