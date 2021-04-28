<?php
//memasukkan file config.php
include('config.php');
?>


<div class="container" style="margin-top:20px">
	<center>
		<font size="6">Data Mahasiswa</font>
	</center>
	<hr>
	<a href="../index.php?page=tambah_pricing"><button class="btn btn-dark right">Tambah Data</button></a>
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>Price</th>
					<th>Type</th>
					<th>User</th>
					<th>Project</th>
					<th>Lead</th>
					<th>Obligation</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>$ 199</td>
					<td>STARTER</td>
					<td>30</td>
					<td>150</td>
					<td>Lead Required</td>
					<td>3 year minimum</td>
					<td>
						<a href="../index.php?page=edit_post&Nim='.$data['Nim'].'" class="btn btn-secondary btn-sm">Edit</a>
						<a href="delete.php" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>$ 499</td>
					<td>PROFESSIONAL</td>
					<td>50</td>
					<td>300</td>
					<td>Lead Required</td>
					<td>2 year minimum</td>
					<td>
						<a href="../index.php?page=edit_post&Nim='.$data['Nim'].'" class="btn btn-secondary btn-sm">Edit</a>
						<a href="delete.php" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td>$ 1.999</td>
					<td>EXPERT</td>
					<td>250</td>
					<td>500</td>
					<td>Lead Required</td>
					<td>1 year minimum</td>
					<td>
						<a href="../index.php?page=edit_post&Nim='.$data['Nim'].'" class="btn btn-secondary btn-sm">Edit</a>
						<a href="delete.php" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
					</td>

				</tr>
				<tr>
					<td>4</td>
					<td>$ 12.599</td>
					<td>CORPORATE</td>
					<td>Unlimited Users</td>
					<td>Unlimited Project</td>
					<td>Lead not Required</td>
					<td>No Obligation</td>
					<td>
						<a href="../index.php?page=edit_post&Nim='.$data['Nim'].'" class="btn btn-secondary btn-sm">Edit</a>
						<a href="delete.php" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
					</td>
				</tr>
			<tbody>
		</table>
	</div>
</div>