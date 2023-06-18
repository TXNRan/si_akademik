<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="stylesheet" href="../css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>SMAN 9 Wali Murid | Pengguna</title>
</head>
   <body>
   <div class="sidebar">
     <div class="logo-details">
	   <i class="bx bx-category"></i>
	   <span class="logo_name">SMAN 9 MALANG</span>
     </div>
	<ul class="nav-links">
	   <li>
		<a href="#" >
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">User</span>
		</a>
		<ul class="dropdown">
	   		
		</ul>
		</li>
		
		<li>
		<a href="#" >
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">Penilaian</span>
		</a>
		<ul class="dropdown">
	   		<li>
	      		<a href="../data wali/datanilai.php">
		   		<i class="bx bx-grid-alt"></i>
		   		<span class="links_name">Data Nilai</span>
				</a>
	   		</li>
	   		<li>
	      		<a href="../data wali/datajenisnilai.php">
		   		<i class="bx bx-grid-alt"></i>
		   		<span class="links_name">Data Jenis Nilai</span>
				</a>
	   	    </li>
		</ul>
		</li>
	   	<li>
	      	<a href="../data wali/datatahunajar.php">
		  	<i class="bx bx-grid-alt"></i>
		   	<span class="links_name">Data Tahun Ajar</span>
			</a>
	   	</li>
	   	<li>
			<a href='../login.php'>
			<i class="bx bx-log-out"></i>
	   		<span class="links_name">Log Out</span>
			</a>
	   		</li>		
		</ul>
    </div>
	<section class="home-section">
	   <nav>
		<div class="sidebar-button">
		   <i class="bx bx-menu sidebarBtn"></i>
		</div>
		<div class="profile-details">
		   <span class="admin_name">SMAN 9 Malang Wali Murid</span>
		</div>
	   </nav>
	   <div class="home-content">
		<h3>Data Nilai SIAKAD</h3>
		<table class="table-data">
		   <thead>
			<tr>
			  <th style="width: 20%">ID Nilai</th>
			  <th style="width: 20%">Nama Mapel</th>
			  <th style="width: 20%">Nama Siswa</th>
			  <th style="width: 20%">Nilai</th>
			</tr>
		   </thead>
		   <tbody>
			<tr>
			   <td>ni123</td>
			   <td>Fisika</td>
			   <td>Bambang</td>
			   <td>100</td>
			</tr>
		   </tbody>
		</table>
	   </div>
	</section>
   <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
		 sidebar.classList.toggle("active");
		  if (sidebar.classList.contains("active")) {
					sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
		  } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
			};
   </script>
</body>
</html>