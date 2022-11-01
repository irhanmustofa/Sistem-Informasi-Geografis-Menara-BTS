<?php 
include "header.php";

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
                <th>Foto</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Foto</td>
                <td>NIK</td>
                <td>Nama Lengkap</td>
                <td>Alamat</td>
                <td>Username</td>
                <td>Password</td>
                <td>
                  <div class="d-grid gap-2 d-md-flex justify-content ms-4">
                    <a class="btn btn-primary btn-sm" type="button">
                      <i class="bi bi-gear-fill"></i>
                    </a>
                    <button class="btn btn-danger btn-sm" type="button">
                      <i class="bi bi-trash-fill"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Foto</td>
                <td>NIK</td>
                <td>Nama Lengkap</td>
                <td>Alamat</td>
                <td>Username</td>
                <td>Password</td>
                <td>
                  <div class="d-grid gap-2 d-md-flex justify-content ms-4">
                    <a class="btn btn-primary btn-sm" type="button">
                      <i class="bi bi-gear-fill"></i>
                    </a>
                    <button class="btn btn-danger btn-sm" type="button">
                      <i class="bi bi-trash-fill"></i>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php 
  include "footer.php";
?>