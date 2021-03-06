<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatable/datatables.min.js">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container-fluid">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="<?php echo site_url('hero') ?>">Home</a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
										<li class="active"><a href="<?php echo site_url('jenishero') ?>">Daftar Jenis Hero</a></li>
										
									</ul>

									
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>
					</div>	


					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Daftar Hero</h1>	
						</div>

							<table class="table table-hover" id="example">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Tanggal Lahir</th>
										<th>Foto</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($hero_list as $key) { ?>
									<tr>
										<td><?php echo $key->nama ?></td>
										<td><?php echo $key->tanggalLahir ?></td>
										<td> <?php echo "<img src='http://localhost:8080/UTS_ROKI/assets/uploads/$key->foto' height='75px' width='50px'>" ?></td>
										<td><?php echo $key->keterangan ?></td>
										
										<!-- <td><?php echo $key->foto ?></td> -->
									</tr>
								<?php } ?>
								<!-- <tr>
									<td>
										<a href="<?php echo site_url('pegawai/create') ?>" type="button" class="btn btn-warning">Tambah Pegawai</a>	
									</td>
								</tr> -->
								</tbody>
							</table>
						</div>
					</div>


					<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a href="<?php echo site_url('pegawai/create') ?>" type="button" class="btn btn-warning">Tambah Pegawai</a>	
					</div> -->
					<!-- <div>
						<table id="example">
							<tr>
								<td>a</td>
								<td>b</td>
							</tr>
							<tr>
								<td>c</td>
								<td>d</td>
							</tr>
							<tr>
								<td>e</td>
								<td>f</td>
							</tr>
							<tr>
								<td>g</td>
								<td>h</td>
							</tr>
							<tr>
								<td>i</td>
								<td>j</td>
							</tr>
						</table>
					</div> -->




		<script src="//code.jquery.com/jquery.js"></script>

		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>

		<script src="<?php echo base_url('') ?>assets/datatable/datatables.min.js"></script>

		<script type="text/javascript"> 
		$(document).ready(function(){
			$('#example').DataTable();
			});
		</script>
	</body>
</html>