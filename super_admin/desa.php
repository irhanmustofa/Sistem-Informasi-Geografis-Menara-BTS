<?php 
include "header.php";
$desa = array();
$ambil_desa = $koneksi -> query("SELECT * FROM desa");
while ($tiap_desa = $ambil_desa -> fetch_assoc()){
  $desa[]=$tiap_desa;
}
?>
<div class="row">
  <div class="card mt-4" >
    <h4 class="card-title mt-3 ms-3">Daftar Desa</h4>
    <p class="card-category ms-3">Data Desa</p>

    <div class="card-body">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end pb-3">
        <a href="tambahpetugas.php" class="btn btn-success " type="button">
          <i class="bi bi-plus"></i>Tambah Desa</a>
        </div>
        <div class="table table-responsive">
          <table id="datatabel" class="table table-bordered table-striped table-sm table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Id Kecamatan</th>
                <th>Kode Desa</th>
                <th>Nama Desa</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($desa as $key => $value): ?>

                <tr>
                  <td><?php echo $key+1; ?></td>
                  <td><?php echo $value["id_kecamatan"]; ?></td>
                  <td><?php echo $value["kode_desa"]; ?></td>
                  <td><?php echo $value["nama_desa"]; ?> </td>
                  <td>
                    <a href="" class="btn-sm btn btn-primary text-white">
                      <span class="bi bi-gear-fill"></span>
                    </a>
                    <a href="" class="btn-sm btn btn-danger">
                      <span class="bi bi-trash-fill"></span>
                    </a>
                  </td>
                </tr>
                
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php 
  include "footer.php";
?>