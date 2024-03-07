<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="container">
        	<h1>LOGIN</h1>
        	<form action="aksi/cek_login.php">
        		<br><label for="exampleInputEmail">Username :</label></br>
        		<input type="text" class="username" required id="exampleInputEmail"><br>
        		<br><label for="exampleInputPassword">Password :</label></br>
        		<input type="password" class="password" required id="exampleInputPassword"><br>
        		<br><button>Login</button></br>
        		<br><button>Register</button></br>
        	</form>
        </div>     
</body>
</html>