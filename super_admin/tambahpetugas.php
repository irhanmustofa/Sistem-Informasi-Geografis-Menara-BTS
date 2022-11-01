<?php 
include "header.php";
 ?>
			<div class="row">
				<div class="card mt-4">
					<h4 class="card-title mt-3 ms-3">Input Data Petugas</h4>
					<p class="card-category ms-3">Masukkan Data Petugas Lapangan</p>
					
					<div class="card-body">
						<form>
							<div class="row">
								<div class="col-sm-6 col-md-5 col-lg-6">
									<div class="mb-3">
										<label class="form-label">ID/NIK</label>
										<input type="text" class="form-control" id="">
									</div>
									<div class="mb-3">
										<label class="form-label">Nama Lengkap</label>
										<input type="text" class="form-control" id="">
									</div>
									<div class="mb-3">
										<label class="form-label">Alamat</label>
										<input type="text" class="form-control" id="">
									</div>

								</div>
								<div class="col-sm-6 col-md-5 col-lg-6">
									<div class="mb-3">
										<label class="form-label">Username</label>
										<input type="text" class="form-control" id="">
									</div>
									<div class="mb-3">
										<label class="form-label">Password</label>
										<input type="Password" class="form-control" id="">
									</div>
									<div class="mb-3">
										<label class="form-label">Upload Foto</label>
										<input type="file" class="form-control" id="inputGroupFile02">

									</div>
								</div>
							</div>
							<div class="d-grid gap-2 d-md-block">
								<button class="btn btn-primary" type="button">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		<?php 
include "footer.php";
		 ?>