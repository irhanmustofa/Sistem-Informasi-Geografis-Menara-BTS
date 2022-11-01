<?php 
include "header.php";
$petugas = array();
$ambil_petugas = $koneksi -> query("SELECT * FROM user WHERE level_user = 'petugas'");
while ($tiap_petugas = $ambil_petugas -> fetch_assoc()){
  $petugas[]=$tiap_petugas;
}
?>
<div class="row">
  <div class="card mt-4" >
    <h4 class="card-title mt-3 ms-3">Daftar Data Petugas</h4>
    <p class="card-category ms-3">Data Petugas Lapangan</p>

    <div class="card-body">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end pb-3">
        <a href="tambahpetugas.php" class="btn btn-success " type="button">
          <i class="bi bi-plus"></i>Tambah Petugas</a>
        </div>
        <div class="table table-responsive">
          <table id="datatabel" class="table table-bordered table-striped table-sm table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Hp</th>
                <th>Level</th>
                <th>Status</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($petugas as $key => $value): ?>

                <tr>
                  <td><?php echo $key+1; ?></td>
                  <td><?php echo $value["nama_user"]; ?></td>
                  <td><?php echo $value["no_hp_user"]; ?> </td>
                  <td><?php echo $value["level_user"] ?></td>
                  <td><?php echo $value["status_user"] ?></td>
                  <td>
                    <img src="../assets/img/<?php echo $value["foto_user"]; ?>">
                  </td>
                  <td>
                    <a href="" class="btn-sm btn btn-info text-white">
                      <span class="bi bi-clipboard-fill"></span>
                    </a>
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