<?php


include "logic.php";

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!--
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

-->
	<!--Google fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<!--Font Awesome-->
	<script src="https://kit.fontawesome.com/46e4b148dc.js" crossorigin="anonymous"></script>
	<!--My Stylesheet-->
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Covid-19 Tracker</title>
</head>
<body>
	<div class="container-fluid p-5 text-center my-3" style = "background-color: #E6E6FA;">
		<h1>COVID19-TRACKER</h1>
		<h5 class="text-info">An opensource project to keep track of all the COVID-19 cases around the world.</h5>

	</div>
	<div class="container my-5">
		<div class="row text-center">
			<div class="col-4 text-warning">
				<h5>Confirmed</h5>
				<?php echo $total_confirmed;?>
			</div>
			<div class="col-4 text-success">
				<h5>Recovered</h5>
				<?php echo $total_recovered;?>
			</div>
			<div class="col-4 text-danger">
				<h5>Deceased/Deaths</h5>
				<?php echo $total_deaths;?>
			</div>
		</div>
	</div>

<div class="container text-center p-3 my-3" style = "background-color: #F0F8FF;">
	<h5 class="text-primary">"Prevention is the Cure."</h5>
	<p class="text-muted">Stay Indoors Stay Stafe.</p>
</div>

	<div class="container-fluid">
		<div class="table-responsive" >
			<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">COUNTRIES</th>
					<th scope="col">CONFIRMED</th>
					<th scope="col">RECOVERED</th>
					<th scope="col">DEATHS</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($data as $key => $value) {
					$increase = $value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed'];//present cases minus cases before day
					?>
					<tr>
						<th style="text-transform:uppercase;">
						<?php echo $key;?></th>
						<td>
							<?php echo $value[$days_count]['confirmed']; ?>
							<?php if($increase != 0){?>
							<small class="text-danger  pl-3"><i class="fas fa-arrow-up"></i><?php 	echo $increase;	?></small>
							<?php }?>
						</td>
						<td>
							<?php echo $value[$days_count]['recovered']; ?>
						</td>
						<td>
							<?php echo $value[$days_count]['deaths']; ?>
						</td>
					</tr>

				<?php }	?>
			</tbody>
		</table>
		</div>
	</div>
	<footer class="footre mt-auto py-3 bg-light">
		<div class="container text-center">
			<span class="text-muted">Copyright &copy;2020 Tanuja Sontakke</span>
		</div>
	</footer>
</body>
</html>