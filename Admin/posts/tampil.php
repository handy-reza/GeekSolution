<?php
//memasukkan file config.php
include('config.php');
?>


<div class="container" style="margin-top:20px">
	<center>
		<font size="6">Data Mahasiswa</font>
	</center>
	<hr>
	<a href="#"><button class="btn btn-dark right">Tambah Data</button></a>
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>Title</th>
					<th>Content</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>GEEK PARTNERSHIP</td>
					<td class="col-md-12">Kami siap menjadi partner anda dalam melayani pengembangan teknologi informasi terkini yang lebih efektif dan efisien serta berkomitmen dalam memberikan support system terkait permasalahan IT.</td>
					<td>
					<a href="#" class="btn btn-secondary btn-sm">Edit</a>
					<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>GEEK SOLUTION</td>
					<td class="col-md-12">Kami menawarkan berbagai layanan Teknologi Informasi untuk mendukung serta meningkatkan kinerja bisnis dan usaha anda baik untuk perusahaan swasta, instansi pemerintahan hingga usaha kecil menengah (UKM/UMKM).</td>
					<td>
					<a href="#" class="btn btn-secondary btn-sm">Edit</a>
					<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
					</td>
				</tr>
			<tbody>
		</table>
	</div>
</div>