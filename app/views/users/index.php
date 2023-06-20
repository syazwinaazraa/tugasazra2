<h2>Data Pengguna</h2>

<a href="<?php echo URL; ?>/users/input" class="btn">Tambah Data Pengguna</a>

<table>
      <tr>
            <th>No</th>
            <th>Email Pengguna</th>
            <th>Password Pengguna</th>
            <th>Nama Pengguna</th>
            <th>Alamat Pengguna</th>
            <th>HP Pengguna</th>
            <th>POS Pengguna</th>
            <th>Akun Pengguna</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['user_id']; ?></td>
                  <td><?php echo $row['user_email']; ?></td>
                  <td><?php echo $row['user_password']; ?></td>
                  <td><?php echo $row['user_nama']; ?></td>
                  <td><?php echo $row['user_alamat']; ?></td>
                  <td><?php echo $row['user_hp']; ?></td>
                  <td><?php echo $row['user_pos']; ?></td>
                  <td><?php echo ($row['user_aktif'] == 0)? 'Tidak Aktif':'Aktif';?></td>
                  <td><a href="<?php echo URL; ?>/users/edit/<?php echo $row['user_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/users/delete/<?php echo $row['user_id']; ?>" class="btn" onclick="return confirm('Apakah benar ingin dihapus?')">Delete</a></td>
            </tr>
      <?php } ?>

</table>