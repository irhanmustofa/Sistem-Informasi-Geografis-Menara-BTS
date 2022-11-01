<?php 
include "header.php";
 ?>
			<div class="row">
				<div class="card mt-4">
					<h4 class="card-title mt-3 ms-3">Dashboard</h4>
					<p class="card-category ms-3">Informasi data menara</p>
					
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<div class="card text-bg-success mb-3">
									<div class="card-header">Jumlah Menara</div>
									<div class="card-body">
										<h5 class="card-title">Jumlah Seluruh Menara</h5>
										<h1 class="card-text">409</h1>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card text-bg-warning mb-3">
									<div class="card-header">Jumlah Kecamatan</div>
									<div class="card-body">
										<h5 class="card-title">Total Jumlah Kecamatan</h5>
										<h1 class="card-text">409</h1>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card text-bg-primary mb-3">
									<div class="card-header">Jumlah Pemilik Menara</div>
									<div class="card-body">
										<h5 class="card-title">Total Jumlah Pemilik Menara</h5>
										<h1 class="card-text">409</h1>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card chart-container pt-3">
									<h3 class="text-center">Data Menara Tiap Kecamatan</h3>
									<canvas id="chart"></canvas>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card chart-container pt-3">
									<h3 class="text-center">Data Menara Sesuai Pemilik</h3>
									<canvas id="chart"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
	<script
	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
	</script>
	<script>
		const ctx = document.getElementById("chart").getContext('2d');
		const myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["rice", "yam", "tomato", "potato",
				"beans", "maize", "oil"],
				datasets: [{
					label: 'food Items',
					backgroundColor: 'dark',
					borderColor: 'rgb(47, 128, 237)',
					data: [300, 400, 200, 500, 800, 900, 200],
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true,
						}
					}]
				}
			},
		});
	</script>
<?php 
include "footer.php";
 ?>