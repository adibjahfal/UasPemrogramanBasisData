<?php
  if (!defined('INDEX')) die("");
?>

<!-- Tambah Pegawai -->
<h4 class="mt-2">Tambah Pegawai</h4>
<hr />
<form method="post" action="?hal=pegawai_insert" class="mb-5" enctype="multipart/form-data">
  <!-- Input Foto -->
  <div class="input-group row">
    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-4">
      <input type="file" class="form-control" id="foto" name="foto" />
    </div>
  </div>
  <!-- End Input Foto -->

  <!-- Input Nama -->
  <div class="input-group row mt-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nama" name="nama" />
    </div>
  </div>
  <!-- End Input Nama -->

  <!-- Input Jenis Kelamin -->
  <div class="input-group row mt-3">
    <label for="jk" class="col-sm-2">Jenis Kelamin</label>
    <div class="col-sm-4">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jk" id="jkl" value="L" />
        <label class="form-check-label" for="jkl">Laki-laki</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="jk" id="jkp" value="P" />
        <label class="form-check-label" for="jkp">Perempuan</label>
      </div>
    </div>
  </div>
  <!-- End Input Jenis Kelamin -->

  <!-- Input Tanggal -->
  <div class="input-group row mt-3">
    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
    <div class="col-sm-2">
      <input type="date" class="form-control" id="tanggal" name="tanggal" />
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
            echo "<option value='$j[id_jabatan]'>$j[nama_jabatan]</option>";
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
      <textarea class="form-control" rows="3" id="keterangan" name="keterangan"></textarea>
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
<!-- End Tambah Pegawai -->