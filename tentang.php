<?php 
$tim = [
	[
		'nama'	=>'Muhamad Arwani Maulana',
		'gambar'=>'awang.jpg',
		'peran'	=>'Web Developer | Python Programmer',
		'fb' 	=>'https://www.facebook.com/arwani.maulana.5',
		'ig'	=>'https://www.instagram.com/tachibana_shinsuke',
		'lkdn'	=>'',
		'yt'	=>''
	],[
		'nama'	=>'Muhamad Saefuloh',
		'gambar'=>'seno.jpg',
		'peran'	=>'UI / UX DESIGNER',
		'fb' 	=>'https://www.facebook.com/muhamad.saepuloh.927',
		'ig'	=>'https://www.instagram.com/muhammad_syaefullah_khan/',
		'lkdn'	=>'',
		'yt'	=>''
	]
];


 ?>



<!doctype html>
<html lang="en">
	<head>
		<?php require 'aset/head.php';?>
	</head>
	<body>
		<?php require 'aset/nav.php';?><br><br>


		<div class="container">
			<h1 class="bg-primary text-white container anim"><i class="fas fa-users"></i> Tim Kami</h1><br><br>
			<div class="row text-center">
			<?php foreach($tim as $person):?>
				<div class="col-md-6 anim">
					<img src="img/<?= $person['gambar'];?>" class="img-thumbnail rounded-circle" style="width: 300px;">
					<p>
						<a href="<?= $person['fb'];?>" style="margin: 15px;" class="text-secondary"><i class="fab fa-facebook-f"></i></a>
						<a href="<?= $person['ig'];?>" style="margin: 15px;" class="text-secondary"><i class="fab fa-instagram"></i></a>
						<a href="<?= $person['lkdn'];?>" style="margin: 15px;" class="text-secondary"><i class='fab fa-linkedin-in'></i></a>
						<a href="<?= $person['yt'];?>" style="margin: 15px;" class="text-secondary"><i class="fab fa-youtube"></i></a>
					</p><br>
					<h2><?= $person['nama'];?></h2><br>
					<p class="lead"><?= $person['peran'];?></p>
				</div>
			<?php endforeach;?>	
			</div>
			
		</div>

<br><br>

		<?php require 'aset/footer.php';?>
		<?php require 'aset/js.php';?>
	</body>
</html>