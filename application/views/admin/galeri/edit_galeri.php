<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>crud USER</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">USER</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Edit Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<?php extract($galeri); ?>
			<form method="POST" enctype="multipart/form-data" action="<?php echo base_url('update_galeri/') . $id_galeri; ?>">
				<div class="form-group">
					<label>Galeri:</label>
					<input type="file" id="foto_galeri" name="img" required>
				</div>
				<div class="form-group">
					<label>Deskripsi:</label>
					<input type="text" class="form-control" value="<?php echo $deskripsi; ?>" name="deskripsi">
				</div>
				<div class="form-group">
					<label>Title:</label>
					<input type="text" class="form-control" value="<?php echo $title; ?>" name="title">
				</div>
				<div class="form-group">
					<label>Id User:</label>
					<input type="number" class="form-control" value="<?php echo $id_user; ?>" name="id_user">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>