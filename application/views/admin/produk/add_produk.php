<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Crud USER</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Produk</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Add Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" enctype="multipart/form-data" action="<?= base_url('insert_produk') ?>">
				<label>Foto:</label>	
				<input type="file" id="foto" name="img" required>
				<div class="form-group">
					<label>Nama:</label>
					<input type="text" class="form-control" name="nama">
				</div>
				<div class="form-group">
					<label>Link:</label>
					<input type="text" class="form-control" name="link">
				</div>
				<div class="form-group">
					<label>Id:</label>
					<input type="text" class="form-control" name="id_user">
				</div>
				<button type="submit" class="btn btn-danger btn-block">Submit</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>