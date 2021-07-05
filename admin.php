<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>

	<style type="text/css">
body {
  font-family: "Trebuchet MS";
  background:grey;
}

h1 {
  text-transform: uppercase;
  color: #20416a;
  text-align: center;
}

p{
  text-align: center;
  text-transform: uppercase; /*membuat semua huruf jadi kapital*/
}

label {
  font-size: 11pt;
}
 
.kotaklog{
  width: 350px;
  background: white;
  margin: 80px auto; /*meletakan form ke tengah*/
  padding: 30px 20px;
}

.form_login{
  /*membuat lebar form penuh*/
  box-sizing: border-box;
  width: 100%;
  padding: 10px;
  font-size: 11pt;
  margin-bottom: 20px;
}
.tombollogin{
  background: #6A5ACD;
  color: white;
  font-size: 11pt;
  width: 100%;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
}
    </style>

</head>
<body>
<h1>Login</h1>

	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<br/>
  <div class="kotaklog">
     <p><b>Admin login</b></p>
	<form method="post" action="cek_login.php">  
		<label><b>Username</b></label>
      <br>
				<td><input class="form_login" type="text" name="username" placeholder="Masukkan username">
			<br>
      <br>
				<label><b>Password</b></label>
      <br>
				<input class="form_login" type="password" name="password" placeholder="Masukkan password">
			
			<tr>
				<td></td>
				<td></td>
				<td><button class="tombollogin" type="submit" value="LOGIN">LOGIN</button></td>
			</tr>
		</table>			
	</form>
	</div>
</body>
</html>