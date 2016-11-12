<!DOCTYPE html>
<html>
<head>
	<title>Data Category</title>
</head>
<body>
	<?php echo "<h2>".$this->session->flashdata('pesan')."</h2>"?>
	<table border = "1" style ="border-collapse: collapse; width: 50%;">
		<tr style="background: gray;">
			<th>ID</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
	<?php foreach ($data as $d) { ?>
		<tr>
			<td><?php echo $d['ID'];?></td>
			<td><?php echo $d['Name'];?></td>
			<td align="center">
				<a href="<?php echo base_url()."index.php/crud/edit/".$d['ID'];?>">Edit</a> ||
				<a href="<?php echo base_url()."index.php/crud/hapus/".$d['ID'];?>">Delete</a>
			</td>
		</tr>
	<?php } ?>
	</table>
	<a href=<?php echo base_url()."index.php/crud/tambah_data";?>>Tambah Data</a>
</body>
</html>