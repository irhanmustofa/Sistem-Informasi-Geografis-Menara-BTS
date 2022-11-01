<?php 	
include "header.php";
?>
<div class="row">
	<div class="card mt-4" >
		<h4 class="card-title mt-3 ms-3">Daftar Data Menara</h4>
		<p class="card-category ms-3">Data Menara BTS Kota Yogyakarta</p>

		<div class="card-body">
			<div class="d-grid gap-2 d-md-flex justify-content-md-end pb-3">
				<a href="tambah_menara.php" class="btn btn-success " type="button">
					<i class="bi bi-plus"></i>Tambah Data</a>
				</div>
				<div class="table table-responsive">
					<table id="datatabel" class="table table-bordered table-striped table-sm table-hover">

						<thead>
							<tr>
								<th>No</th>
								<th>Foto</th>
								<th>Id Menara</th>
								<th>Pemilik Menara</th>
								<th>Kecamatan</th>
								<th>Alamat</th>
								<th>Latitude</th>
								<th>Longitude</th>
								<th>Jenis Menara</th>
								<th>Tinggi Menara</th>
								<th>Keterangan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Foto</td>
								<td>112233</td>
								<td>KIN</td>
								<td>Danurejan</td>
								<td>Hotel Grand Inna</td>
								<td>2131313</td>
								<td>1313131</td>
								<td>Grenfield</td>
								<td>30 Meter</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
								<td>
									<div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3">
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
