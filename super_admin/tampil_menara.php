<?php 	
include "header.php";

$menara = array();
$ambil_menara = $koneksi -> query("SELECT * FROM menara");
while ($tiap_menara = $ambil_menara -> fetch_assoc()){
	$menara[]=$tiap_menara;
}
// echo "<pre>";
// print_r ($menara);
// echo "</pre>";
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
								<th>Pemilik Menara</th>
								<th>Latitude</th>
								<th>Longitude</th>
								<th>Alamat</th>
								<th>Tanggal survey</th>
								<th>Status Menara</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($menara as $key => $value): ?>

								<tr>
									<td><?php echo $key+1 ?></td>
									<td><?php echo $value["pemilik_menara"]; ?></td>
									<td><?php echo $value["latitude_menara"]; ?></td>
									<td><?php echo $value["longitude_menara"]; ?></td>
									<td><?php echo $value["alamat_menara"]; ?></td>
									<td><?php echo $value["tanggal_survei"] ?></td>
									<td><?php echo $value["status_menara"] ?></td>
									<td>
										<div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3">
											<a href="" class="btn-sm btn btn-info text-white">
												<span class="bi bi-clipboard-fill"></span>
											</a>
											<a class="btn btn-primary btn-sm" type="button">
												<i class="bi bi-gear-fill"></i>
											</a>
											<button class="btn btn-danger btn-sm" type="button">
												<i class="bi bi-trash-fill"></i>
											</button>
										</div>
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
