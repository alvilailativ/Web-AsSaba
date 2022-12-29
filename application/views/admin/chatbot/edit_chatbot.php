<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>crud USER</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">CHATBOT</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Edit Form
				<span class="pull-right"><a href="<?php echo base_url('update_chatbot'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<?php extract($chatbot); ?>
			<form method="POST" action="<?php echo base_url('update_chatbot/') . $id_chatbot; ?>">
				<div class="form-group">
					<label>Pertanyaan:</label>
					<input type="text" class="form-control" value="<?php echo $pertanyaan; ?>" name="pertanyaan">
				</div>
				<div class="form-group">
					<label>Response:</label>
					<input type="text" class="form-control" value="<?php echo $response; ?>" name="response">
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