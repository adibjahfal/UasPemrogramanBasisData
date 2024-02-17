<?php
  if (!defined('INDEX')) die("");
?>

<!-- Tambah Jabatan -->
<h4 class="mt-2">Tambah Jabatan</h4>
<hr />

<form method="post" action="?hal=jabatan_insert" class="mb-5">
  <!-- Input Nama -->
  <div class="input-group row mt-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nama" name="nama" />
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
<!-- End Tambah Jabatan -->