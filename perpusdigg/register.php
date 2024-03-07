<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
	<div class="container">
		<h2>Silahkan masukan data untuk register!</h2>
		<form action="aksi/proses_daftar.php">
			<div class="mb-3">
				<label for="ExampleInputEmail" class="form-label">ID User</label>
				<input type="text" name="IDuser" class="form-control" required id="ExampleInputEmailHelp">
			</div>
			<div class="mb-3">
				<label for="ExampleInputEmail">Username</label>
				<input type="text" name="username" class="form-control" required id="ExampleInputEmailHelp">
			</div>
			<div class="mb-3">
		        <label for="ExampleInputEmail">Email</label>
			    <input type="text" name="email" class="form-control" required id="ExampleInputEmailHelp">
			</div>
			<div class="mb-3">
				<label for="ExampleInputPassword">Password</label>
				<input type="password" name="password" class="form-control" required id="ExampleInputPasswordHelp">
			</div>
			<div class="mb-3">
				<label for="ExampleInputPassword">Alamat</label>
				<input type="text" name="password" class="form-control" required id="ExampleInputPasswordHelp">
			</div>
			<div class="mb-3">
				<label for="ExampleInputPassword">Nama Lengkap</label>
				<input type="text" name="namalengkap" class="form-control" required id="ExampleInputPasswordHelp">
			</div>
			<a href="aksi/proses_daftar.php"></a>
			<button class="btn btn-primary">Simpan</button>
			<p class="btn btn-primary">Sudah punya akun? <button class="btn btn-warning">Login</button></p>
		</form>
	</div>
</body>
</html>