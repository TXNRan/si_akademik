<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
	href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
			rel="stylesheet"/>
  <link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="container">
	<header>
   	  <nav>
	    <div class="logo">
		<img src="assets/logo.png" alt="" />
	    </div>
	      <input type="checkbox" id="click" />
		<label for="click" class="menu-btn">
		  <i class="fas fa-bars"></i>
		</label>
		<ul>
		  <li><a href="../assets/index.php">Home</a></li>
		  <li><a href="../assets/literasi.php">literatur</a></li>
		  <li><a href="../assets/login.php" class="btn_login">Login</a></li>
		</ul>
	   </nav>
      </header>
	<main>
  	  <div class="center">
	     <div class="form-login">
		  <h3>Register</h3>
		  <form action="register-proses.php" method="post">
		  <form action="register-proses.php" method="post">
		    <input class="input" type="email" name="email"
					placeholder="Email" />
		    <input class="input" type="text" name="username"
					placeholder="Username"/>
		    <input class="input" type="password" name="password"
				      placeholder="Password" />
  		    <button type="submit" class="btn_login" name="register"
				id="register">
				Register
		    </button>
		  </form>
	     </div>
	   </div>
	</main>
	<footer>
	  <h4>&copy; Blimbing Malang </h4>
	</footer>
   </div>
</body>
</html>