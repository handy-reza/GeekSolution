<?php
//memasukkan file config.php
include('config.php');
?>


<div class="container" style="margin-top:20px">
	<center>
		<font size="6">Data Mahasiswa</font>
	</center>
	<hr>
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th >Company</th>
					<th>Subject</th>
					<th>Message</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Elfonda Risky </td>
					<td>raefangga20@gmail.com</td>
					<td>08188819212</td>
					<td>raeplus</td>
					<td>Bikinin Web Company Profile Dong</td>
					<td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet quibusdam vel est perspiciatis iusto, recusandae tempora! Tempora corrupti ullam quas aspernatur fuga in earum inventore hic voluptatem beatae, fugiat saepe explicabo ab vitae possimus nesciunt ea. Labore, saepe dolorem quisquam soluta, laborum, vero quasi possimus ab molestias fuga sed reprehenderit.</td>
					<td>
					<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Hendra Setiawan</td>
					<td>hentset@gmail.com</td>
					<td>08188812322</td>
					<td>Nawaites</td>
					<td>Bikinin Aplikasi Mobile Dong</td>
					<td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet quibusdam vel est perspiciatis iusto, recusandae tempora! Tempora corrupti ullam quas aspernatur fuga in earum inventore hic voluptatem beatae, fugiat saepe explicabo ab vitae possimus nesciunt ea. Labore, saepe dolorem quisquam soluta, laborum, vero quasi possimus ab molestias fuga sed reprehenderit.</td>
					<td>
					<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
					</td>
				</tr>

			<tbody>
		</table>
	</div>
</div>