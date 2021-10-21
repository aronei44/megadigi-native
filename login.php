
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
					<h3 class="text-primary">Masuk Ke Akun Anda</h3>
				</div>
				<div class="col-md-6"><br>
					<h2 >Login</h2><br>
					<hr class="my-4"><br>
					<form>
						<div class="form-group row myform">
							<label for="email"  class="col-form-label"><i class="fas fa-at"></i></label>
							<div>
								<input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email">
							</div>
						</div>
						<div class="form-group row myform">
							<p class=" col-form-label" onclick="unlock()" id="pass"><i class="fas fa-lock"></i></p>
							<div>
								<input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
							</div>
						</div><br><br>
						<div class="row" id="btn">
							<div class="col">
								<button class="bg-primary form-control form2 text-white" type="submit">Login</button>
							</div>
							<div class="col">
								<button class="bg-danger form-control form2 text-white" type="reset">Reset</button>
							</div>
						</div>
						<br><br>
						<p>Belum punya akun? <a href="register.php">Buat</a></p>
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