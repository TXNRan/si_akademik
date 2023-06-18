<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Home</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
	<link
		rel="stylesheet"			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
		<li><a href="../assets/literasi.php">Literatur</a></li>
		<li><a href="../assets/login.php" class="btn_login">Login</a></li>
          </ul>
	  </nav>
	</header>
	<main>
        <div class="jumbotron">
	     <div class="jumbotron-text">
		 <h1>Wanna Borrow Something?</h1>
		 <p> Pilih mobil mana yang ingin anda kendarai!</p>
		 <li><a href="register.php"><button type="button" class="btn_getStarted">Register</button></a></li>	
	     </div>
           <div class="jumbotron-img">
	       <img src="../assets/img/kolase.jpg" alt="" />
           </div>
	  </div>
	  <div class="cards-categories">
	     <h2>Vehicle Categories</h2>
	     <div class="card-categories">
		  <div class="card">
		    <img src="assets/ordinary.jfif" alt="" />
		    <h5>Ordinary</h5>
		    <p> Kategori umum untuk anda yang suka berpergian</p>
		  </div>
		  <div class="card">
			<img src="assets/truck.jfif" alt="" />
			<h5>Truck</h5>
			<p> Kategori untuk anda yang ingin mengantar barang atau pindahan</p>
		  </div>
		  <div class="card">
		      <img src="assets/sport.jfif" alt="" />
			<h5>Sport</h5>
			<p> Kategori untuk anda yang ingin memamerkan mobil anda atau meriahkan pesta</p>
		  </div>
	  </div>
    </div>
  </main>
  <footer>
    <h4>&copy; Blimbing, Malang 2023</h4>
  </footer>
</div>
</body>
</html>