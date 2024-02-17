<?php
  if (!defined('INDEX')) die("");
?>

<!-- Pegawai -->
<h4 class="mt-2">Data Pegawai</h4>
<hr />
<a href="?hal=pegawai_tambah" class="btn btn-success"><i class="bi bi-plus"></i> Tambah</a>

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
        <th>Aksi</th>
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
        <td>
          <a href="?hal=pegawai_edit&id=<?= $data['id_pegawai'] ?>" class="btn btn-sm btn-info"><i class="bi bi-pencil-square"></i> Edit</a>
          <a href="?hal=pegawai_hapus&id=<?= $data['id_pegawai'] ?>&foto=<?= $data['foto'] ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</a>
        </td>
      </tr>

      <?php
        }
      ?>

    </tbody>
  </table>
</div>
<!-- End Pegawai -->