<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
	href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
			rel="stylesheet"
		/>
  <link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="container">
     <header>
	  <nav>
	    <input type="checkbox" id="click" />
	    <label for="click" class="menu-btn">
	       <i class="fas fa-bars"></i>
	    </label>
	    <ul>
		<li><a href="../index.php">Home</a></li>
		<li><a href="../literasi.php">Literasi</a></li>
		<li><a href="#" class="btn_login">Siswa</a>
		<ul class="dropdown">
			<li>
				<a href="../login/loginadmin.php">Admin</a>
	   		</li>
	   		<li>
	      		<a href="../login/loginguru.php">Guru</a>
	   		</li>
	   		<li>
				<a href="../login/loginsiswa.php">Siswa</a>
	   		</li>
	   		<li>
	      		<a href="../login/loginpegawai.php">Pegawai</a>
	   		</li>
	   		<li>
	     		<a href="../login/loginwali.php">Wali</a>
	   		</li>
		</ul>
		</li>
	    </ul>
    </nav>
	</header>
	<main>
	  <div class="center">
	    <div class="form-login">
		 <h3>Login</h3>
		 <form action="loginsiswa-proses.php" method="post">
		   <input class="input" type="text" name="username"
			    placeholder="Username" />
	         <input class="input" type="password" name="password"
			    placeholder="Password" />
			 <a href="../pengguna/siswa.php" class="btn_login">login</a>
		 </form>
		 <a href="../register.php" class="link-register">
                  Register Disini</a>
	    </div>
	  </div>
	</main>
	<footer>
	   <h4>&copy; SI Akademik SMAN 9 Malang 2023</h4>
      </footer>
   </div>
</body>
</html>