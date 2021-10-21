<!doctype html>
<html lang="en">
	<head>
		<?php require 'aset/head.php';?>
		<style type="text/css">
			.flex{
				display: flex;
				height: 60px;
				flex-wrap: nowrap;
			}
			.flex .satu{
				height:0px;
				width:0px;
				border-bottom:solid 60px #007bff;
				border-left:solid 80px #007bff;
				border-right:solid 80px white;
			}
			.flex .dua{
				width: 20%;
			}
			.flex .tiga{
				width: 30%;
			}
			.flex .empat{
				width: 40%;
			}
			.flex .lima{
				width: 50%;
			}
			.flex .enam{
				width: 60%;
			}
			.flex .tujuh{
				width: 70%;
			}
			.flex .delapan{
				width: 80%;
			}
			.flex .sembilan{
				width: 90%;
			}
		</style>
	</head>
	<body>
		<?php require 'aset/nav.php';?><br><br>

		<div class="container">
			<div class="flex anim">
				<div class="enam bg-primary text-white" style="padding-top: 10px;">
					<h2 class="container">Selamat Datang</h2><br><br>
				</div>
				<div class="satu"></div>
					<h1></h1>
				</div>
			</div>
		</div><br><br>
		<div class="container">
			<div class="row align-items-center anim">
				<div class="col-md-6 text-center">
					<img src="img/awang.jpg" class="img-thumbnail rounded-circle" width="300px">
				</div>
				<div class="col-md-6">
					<table>
						<tr>
							<td><h2><i class="fas fa-user"></i></h2></td>
							<td><h2>Muhamad Arwani Maulana</h2></td>
						</tr>
						<tr>
							<td><h4><i class="fas fa-at"></i></h4></td>
							<td><h4>arwanimaulana89@gmail.com</h4></td>
						</tr>
						<tr>
							<td><h4><i class="fas fa-phone"></i></h4></td>
							<td><h4>081210693426</h4></td>
						</tr>
					</table>
				</div>
			</div>
		</div><br><br>
		<div class="container">
			<div class="flex anim">
				<div class="enam bg-primary text-white" style="padding-top: 10px;">
					<h2 class="container">Pesanan Anda</h2><br><br>
				</div>
				<div class="satu"></div>
					<h1></h1>
				</div>
			</div>
		</div><br><br>

		<div class="container">
			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama Pesanan</th>
						<th scope="col">Dipesan Tanggal</th>
						<th scope="col">Harga</th>
						<th scope="col">Status</th>
						<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Website</td>
						<td>28 - 07 - 2021</td>
						<td>Rp. 700.000,-</td>
						<td>Menunggu Konfirmasi Anda</td>
						<td>
							<a href="" onclick="return confirm('Anda Yakin? Anda tidak dapat membatalkan pesanan setelah konfirmasi')" class="btn btn-primary btn-sm"> <i class="fas fa-plus"></i> Konfirmasi </a> 
							<a href="" onclick="return confirm('Anda Yakin? Pesanan akan dihapus permanen. Anda dapat menambahkan pesanan baru')" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> Hapus </a></td>
					</tr>
				</tbody>
			</table><br><br>
			<div class="bg-light">
				<div class="container">
					<p><strong>Keterangan Status</strong> :</p>
					<ol>
						<li><strong>Menunggu Konfirmasi Anda</strong> : Pesanan anda harus dikonfirmasi terlebih dahulu. Di status ini anda masih dapat menghapus pesanan anda.</li>
						<li><strong>Terkonfirmasi</strong> : Anda sudah mengkonfirmasi pesanan. dari tahap ini anda tidak dapat membatalkan pesanan. Kami akan mengkonfirmasi detail pesanan anda melalui Whatsapp.</li>
						<li><strong>Sedang Diproses</strong> : Kami sedang mengerjakan pesanan anda.</li>
						<li><strong>Menunggu Pembayaran</strong> : Kami sudah selesai mengerjakan pesanan anda. Kami akan berikan review dalam bentuk video yang kami serahkan lewat Whatsapp atau jika anda berkenan kami akan upload di Youtube kami.</li>
						<li><strong>Selesai</strong> : Pesanan sudah selesai dan anda sudah menyelesaikan pembayaran.</li>
					</ol>
				</div>
			</div>
		</div>







<br><br>

		<?php require 'aset/footer.php';?>
		<?php require 'aset/js.php';?>
	</body>
</html>