<!DOCTYPE html>
<html>
<head>
	<title>Data Category</title>
</head>
<body>
	<table>
		<form method="POST" action="<?php echo base_url()."index.php/crud/tambah"; ?>">
		<tr>
			<td>ID</td>
			<td><input type="text" name="ID" /></td>
		</tr>
		<tr><td>Name</td>
			<td><input type="text" name="Name"/></td>
		</tr>
		<tr>
		<td></td>
			<td><input type="submit" name="btnSubmit" value="Simpan"></input></td>
		</tr>
	</table>
	</form>
	
</body>
</html>