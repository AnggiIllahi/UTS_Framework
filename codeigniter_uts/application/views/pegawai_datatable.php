
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">

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
						
								<div class="collapse navbar-collapse navbar-ex1-collapse">
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<ul class="nav navbar-nav">
								        <li><a href="<?php echo site_url('pegawai/DataTable') ?>">DataTable</a></li>
									</ul>

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
						<h1>Daftar Jenis Hero <br> <a href="<?php echo site_url()?>/pegawai/create/<?php echo $this->uri->segment(3)?>" class="btn btn-warning"> <span class="glyphicon glyphicon-plus"></span> Tambah Jenis Hero</a> </h1>
						<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>
										<th>Id</th>
										<th>Keterangan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($pegawai_list as $key) { ?>
									<tr>
										<td><?php echo $key->id ?></td>
										<td><?php echo $key->keterangan ?></td>
										<td align="center">
											<a href="<?php echo site_url('anak/index/').$key->id ?>" class="btn btn-success" role="button"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Hero</a>
											<a href="<?php echo site_url('pegawai/update/').$key->id ?>" type="button" class="btn btn-info"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</a>
											<a type="button" class="btn btn-danger " href="<?php echo site_url('pegawai/delete/').$key->id ?>" onClick="return confirm('Apakah Anda Yakin?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus </button>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>

						</div>
					</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url('') ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url('') ?>assets/datatables.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script type="text/javascript">
		$(document).ready(function() {
    		$('#example').DataTable();
		} );	
		</script>
	</body>
</html>