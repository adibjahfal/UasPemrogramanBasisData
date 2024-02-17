<?php
  if (!defined('INDEX')) die("");

  $query = mysqli_query(
    $con, 
    "SELECT * FROM jabatan WHERE id_jabatan='$_GET[id]'"
  );
  $data = mysqli_fetch_array($query);
?>

<!-- Edit Jabatan -->
<h4 class="mt-2">Edit Jabatan</h4>
<hr />

<form method="post" action="?hal=jabatan_update" class="mb-5">
  <!-- Id Jabatan -->
  <input type="hidden" name="id" value="<?= $data['id_jabatan'] ?>">

  <!-- Input Nama -->
  <div class="input-group row mt-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama_jabatan'] ?>" />
    </div>
  </div>
  <!-- End Input Nama -->

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
<!-- End Edit Jabatan -->