<?php
  if(!defined('INDEX')) die("");
?>


<!-- Pegawai -->
<h2 class='text-center'>Semua Tabel</h2>
<hr>
<h4 class="mt-2">Data Pegawai</h4>
<hr />

<div class="table-responsive mt-3">
  <table class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal Lahir</th>
        <th>Jabatan</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>

      <?php
        $query = mysqli_query(
          $con, 
          "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan ORDER BY pegawai.id_pegawai DESC"
        );
        $no = 0;
        while ($data = mysqli_fetch_array($query)) {
            $no++;
      ?>

      <tr>
        <td><?= $no ?></td>
        <td><img src="images/<?= $data['foto'] ?>" width="64"></td>
        <td><?= $data['nama_pegawai'] ?></td>
        <td><?= $data['jenis_kelamin'] ?></td>
        <td><?= $data['tgl_lahir'] ?></td>
        <td><?= $data['nama_jabatan'] ?></td>
        <td>
          <?php
            if ($data['keterangan'] == '') echo '-';
            else echo $data['keterangan'];
          ?>
        </td>
      </tr>

      <?php
        }
      ?>

    </tbody>
  </table>
</div>
<hr>
<!-- End Pegawai -->
<h4 class="mt-2">Data Jabatan</h4>
<hr />

<div class="table-responsive mt-3">
  <table class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Jabatan</th>
      </tr>
    </thead>
    <tbody>

      <?php
        $query = mysqli_query(
          $con, 
          "SELECT * FROM jabatan ORDER BY id_jabatan DESC"
        );
        $no = 0;
        while ($data = mysqli_fetch_array($query)) {
          $no++;
      ?>

          <tr>
            <td><?= $no ?></td>
            <td><?= $data['nama_jabatan'] ?></td>

          </tr>

      <?php
        }
      ?>

    </tbody>
  </table>
</div>