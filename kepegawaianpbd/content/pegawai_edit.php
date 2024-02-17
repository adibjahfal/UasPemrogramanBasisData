<?php
  if (!defined('INDEX')) die("");

  $query = mysqli_query(
    $con, 
    "SELECT * FROM pegawai WHERE id_pegawai='$_GET[id]'"
  );
  $data = mysqli_fetch_array($query);
?>

<!-- Edit Pegawai -->
<h4 class="mt-2">Edit Pegawai</h4>
<hr />

<form method="post" action="?hal=pegawai_update" class="mb-5" enctype="multipart/form-data">
  <!-- Id Pegawai -->
  <input type="hidden" name="id" value="<?= $data['id_pegawai'] ?>">

  <!-- Input Foto -->
  <div class="input-group row">
    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-4">
      <input type="file" class="form-control" id="foto" name="foto" />
      <img class="img-thumbnail mt-2" src="images/<?= $data['foto'] ?>" width="150">
    </div>
  </div>
  <!-- End Input Foto -->

  <!-- Input Nama -->
  <div class="input-group row mt-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama_pegawai'] ?>" />
    </div>
  </div>
  <!-- End Input Nama -->

  <!-- Input Jenis Kelamin -->
  <div class="input-group row mt-3">
    <label for="jk" class="col-sm-2">Jenis Kelamin</label>
    <div class="col-sm-4">
      <?php 
        if ($data['jenis_kelamin'] == "L") {
          $l = " checked";
          $p = "";
        } else {
          $l = "";
          $p = "checked";
        }
      ?>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jk" id="jkl" value="L" <?= $l ?> />
        <label class="form-check-label" for="jkl">Laki-laki</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jk" id="jkp" value="P" <?= $p ?> />
        <label class="form-check-label" for="jkp">Perempuan</label>
      </div>
    </div>
  </div>
  <!-- End Input Jenis Kelamin -->

  <!-- Input Tanggal -->
  <div class="input-group row mt-3">
    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-2">
      <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data['tgl_lahir'] ?>" />
    </div>
  </div>
  <!-- End Input Tanggal -->

  <!-- Input Jabatan -->
  <div class="input-group row mt-3">
    <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-4">
      <select class="form-select" id="jabatan" name="jabatan">
        <option selected>Pilih Jabatan</option>
        <?php
          $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
          while ($j = mysqli_fetch_array($queryjabatan)) {
              echo "<option value='$j[id_jabatan]'";
              if ($j['id_jabatan'] == $data['id_jabatan']) echo " selected";
              echo ">$j[nama_jabatan]</option>";
          }
        ?>
      </select>
    </div>
  </div>
  <!-- End Input Jabatan -->

  <!-- Input Keterangan -->
  <div class="input-group row mt-3">
    <label for="keterangan" class="col-sm-2">Keterangan</label>
    <div class="col-sm-4">
      <textarea class="form-control" rows="3" id="keterangan" name="keterangan"><?= $data['keterangan'] ?></textarea>
    </div>
  </div>
  <!-- End Input Keterangan -->

  <!-- Button -->
  <div class="input-group row mt-3">
    <label class="col-sm-2"></label>
    <div class="col-sm-4">
      <button type="submit" class="btn btn-info"><i class="bi bi-save"></i> Simpan</button>
      <button type="reset" class="btn btn-warning"><i class="bi bi-x-circle"></i> Batal</button>
    </div>
  </div>
  <!-- End Button -->
</form>
<!-- End Edit Pegawai -->