<h2>Data Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Tambah Data Pelanggan</a>

<table>
      <tr>
            <th>No</th>
            <th>Golongan Pelanggan</th>
            <th>Akun Pelanggan</th>
            <th>Nomor Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>Alamat Pelanggan</th>
            <th>HP Pelanggan</th>
            <th>KTP Pelanggan</th>
            <th>Seri Pelanggan</th>
            <th>Meteran Pelanggan</th>
            <th>Keterangan Pelanggan</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>
            <?php
            $conn = mysqli_connect("localhost","root","","tugas2_azra") or die(mysqli_connect_error());
            $data = mysqli_query($conn, "SELECT * FROM tb_pelanggan
            INNER JOIN tb_golongan ON tb_golongan.gol_id = tb_pelanggan.pel_id_gol
            INNER JOIN tb_users ON tb_users.user_id = tb_pelanggan.pel_id_user");
            while($row = mysqli_fetch_array($data))
            { ?>
             <tr>
                  <td><?php echo $row['pel_id']; ?></td>
                  <td><?php echo $row['gol_nama']; ?></td>
                  <td><?php echo $row['user_nama']; ?></td>
                  <td><?php echo $row['pel_no']; ?></td>
                  <td><?php echo $row['pel_nama']; ?></td>
                  <td><?php echo $row['pel_alamat']; ?></td>
                  <td><?php echo $row['pel_hp']; ?></td>
                  <td><?php echo $row['pel_ktp']; ?></td>
                  <td><?php echo $row['pel_seri']; ?></td>
                  <td><?php echo $row['pel_meteran']; ?></td>
                  <td><?php echo ($row['pel_aktif'] == 0)? 'Tidak Aktif':'Aktif';?></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn" onclick="return confirm ('Apakah anda yakin menghapus data ini?')">Delete</a></td>
            </tr>
      <?php } ?>

</table>