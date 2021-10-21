
<!doctype html>
<html lang="en">
	<head>
		<?php require 'aset/head.php';?>
	</head>
	<body class="bg-light">
		<div class="container">
			<div class="row text-center bg-white align-items-center" style="margin: 100px auto; width: 80%; border-radius: 25px;">
				<div class="col-md-6" id="blnk">
					<h1 class="text-primary"><i class="fas fa-users fa-5x"></i></h1>
					<h3 class="text-primary">Buat Akun</h3>
				</div>
				<div class="col-md-6"><br>
					<h2>Register</h2><br>
					<hr class="my-4"><br>
					<form>
						<div class="form-group row myform">
							<label for="username"  class="col-form-label"><i class="fas fa-user"></i></label>
							<div>
								<input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username">
							</div>
						</div>
						<div class="form-group row myform">
							<label for="email"  class="col-form-label"><i class="fas fa-at"></i></label>
							<div>
								<input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email">
							</div>
						</div>
						<div class="form-group row myform">
							<label for="no"  class="col-form-label"><i class="fas fa-at"></i></label>
							<div>
								<input type="number" name="no" id="no" class="form-control" placeholder="Masukan No HP">
							</div>
						</div>
						<div class="form-group row myform">
							<p class=" col-form-label" onclick="unlock()" id="pass"><i class="fas fa-lock"></i></p>
							<div>
								<input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
							</div>
						</div>
						<div class="form-group row myform">
							<label for="foto"  class="col-form-label"><i class="fas fa-user-circle"></i></label>
							<div>
								<input type="file" name="foto" id="foto" class="form-control">
							</div>
						</div>
						<p class="text-left"><i>*Foto Profil (jpg/png)</i></p>
						<br><br>
						<div class="row" id="btn">
							<div class="col">
								<button class="bg-primary form-control form2 text-white" type="submit">Buat Akun</button>
							</div>
							<div class="col">
								<button class="bg-danger form-control form2 text-white" type="reset">Reset</button>
							</div>
						</div>
						<br><br>
						<p>Sudah punya akun? <a href="login.php">Masuk</a></p>
					</form>
				</div>
			</div>
		</div>
		<?php require 'aset/js.php';?>
		<script type="text/javascript">
			let lock = true;
			let lid  = document.getElementById('password');
			let pid  = document.getElementById('pass');
			function unlock(){
			  if(lock == true){
			    lid.setAttribute('type','text');
			    pid.innerHTML =`<i class="fas fa-unlock"></i>`;
			    lock = false;
			  }else{

			    lid.setAttribute('type','password');
			    pid.innerHTML =`<i class="fas fa-lock"></i>`;
			    lock = true;
			  }
			}

		</script>
	</body>
</html>