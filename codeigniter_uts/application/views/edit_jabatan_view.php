<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

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
									<a class="navbar-brand" href="#">CRUD Framework</a>
								</div>
						
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
										<li class="dropdown active">
								          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Biodata Pegawai <span class="caret"></span></a>
								          <ul class="dropdown-menu">
								            <li><a href="<?php echo site_url('pegawai') ?>">Lihat Data</a></li>
								            <li><a href="<?php echo site_url('pegawai/create') ?>">Tambah Data</a></li>
								          </ul>
								        </li>
									</ul>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
						</div>
						</nav>

					</div>	

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php echo form_open_multipart('jabatan/update/'.$this->uri->segment(3)); ?>
								<center><h1>Edit Data Jabatan</h1></center><br>
								<?php var_dump($jabatan) ;?>
								<?php echo validation_errors(); ?>
								<table class="" border=0 width="700" cellpadding="0" cellspacing="0" align="center">
							
								<tr>
									<td>
									<div class="form-group input-group">
									<span class="input-group-addon" id="basic-addon3">Nama Jabatan</span>
									<input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan Jabatan" aria-describedby="basic-addon3"  value="<?php echo $jabatan[0]->namaJabatan ?>">
									</td>
								</tr>
								
								<tr>
									<td>
									<div class="form-group input-group">
									<span class="input-group-addon" id="basic-addon3">Tanggal Mulai</span>
									<input type="date" format="dd/mm/yyyy" placeholder="Masukkan Tanggal Lahir" class="form-control" id="tanggalmulai" name="tanggalMulai" aria-describedby="basic-addon3"  value="<?php echo $jabatan[0]->tanggalMulai ?>">
									</td>
								</tr>

								<tr>
									<td>
									<div class="form-group input-group">
									<span class="input-group-addon" id="basic-addon3">Tanggal Selesai</span>
									<input type="date" format="dd/mm/yyyy" placeholder="Masukkan Tanggal Lahir" class="form-control" id="tanggalSelesai" name="tanggalSelesai" aria-describedby="basic-addon3"  value="<?php echo $jabatan[0]->tanggalSelesai ?>">
									</td>
								</tr>
								
								<tr>
									<td align="center">
									<button type="submit" class="btn btn-primary">Submit</button>
									<button type="reset" class="btn btn-primary btn-danger">Reset</button>
									</td>
								</tr>

								</table>								

					<?php echo form_close(); ?>
					</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>