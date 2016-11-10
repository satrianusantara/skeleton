<!DOCTYPE html>
<html>
<head>
	<title>Edit Category</title>
</head>
<body>
	<table>
		<form method="POST" action="<?php echo base_url()."index.php/crud/edit_data"; ?>">
		<tr>
			<td>ID</td>
			<td><input type="text" name="ID" value="<?php echo $id; ?>" readonly /></td>
		</tr>
		<tr><td>Name</td>
			<td><input type="text" name="Name" value="<?php echo $nama; ?>" /></td>
		</tr>
		<tr>
		<td></td>
			<td><input type="submit" name="btnSubmit" value="Simpan"></input></td>
		</tr>
	</table>
	</form>
</body>
</html>