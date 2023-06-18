<?php 
  include '../koneksi.php';
  $id = $_GET['id'];
  if(!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'categories.php';
      </script>
    ";
  }

  $sql = "SELECT * FROM tb_datapengguna WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($result);

?>
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
   <title>SMAN 9 Admin | Pengguna</title>
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
	   		<li>
				<a href="../data admin/datapengguna.php">
		   		<i class="bx bx-grid-alt"></i>
		   		<span class="links_name">Data Pengguna</span>
				</a>
	   		</li>
	   		<li>
	      		<a href="../data admin/datapegawai.php">
		   		<i class="bx bx-grid-alt"></i>
		   		<span class="links_name">Data Pegawai</span>
				</a>
	   		</li>
	   		<li>
				<a href="../data admin/dataguru.php">
		   		<i class="bx bx-grid-alt"></i>
		   		<span class="links_name">Data Guru</span>
				</a>
	   		</li>
	   		<li>
	      		<a href="../data admin/datasiswa.php">
		  		<i class="bx bx-grid-alt"></i>
		   		<span class="links_name">Data Siswa</span>
				</a>
	   		</li>
	   		<li>
	     		<a href="../data admin/datawali.php">
		   		<i class="bx bx-grid-alt"></i>
		   		<span class="links_name">Data Wali</span>
				</a>
	   		</li>
		</ul>
		</li>
		<li>
		<a href="#" >
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">Penjadwalan</span>
		</a>
		<ul class="dropdown">
       		<li>
	      		<a href="../data admin/datajadwal.php">
		   		<i class="bx bx-grid-alt"></i>
		   		<span class="links_name">Data Jadwal</span>
				</a>
	   		</li>
       		<li>
	      		<a href="../data admin/datakelas.php">
		   		<i class="bx bx-grid-alt"></i>
		   		<span class="links_name">Data Kelas</span>
				</a>
	   		</li>
	   		<li>
	      		<a href="../data admin/dataekstra.php">
		   		<i class="bx bx-grid-alt"></i>
		   		<span class="links_name">Data Ekstra</span>
				</a>
	   		</li>
		</ul>
		</li>
		<li>
		<a href="#" >
		   <i class="bx bx-list-ul"></i>
		   <span class="links_name">Penilaian</span>
		</a>
		<ul class="dropdown">
	   		<li>
	      		<a href="../data admin/datanilai.php">
		   		<i class="bx bx-grid-alt"></i>
		   		<span class="links_name">Data Nilai</span>
				</a>
	   		</li>
	   		<li>
	      		<a href="../data admin/datajenisnilai.php">
		   		<i class="bx bx-grid-alt"></i>
		   		<span class="links_name">Data Jenis Nilai</span>
				</a>
	   	    </li>
		</ul>
		</li>
	   	<li>
	      	<a href="../data admin/datatahunajar.php">
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
		   <span class="admin_name">SMAN 9 Malang Admin</span>
		</div>
	   </nav>
	   <div class="home-content">
	   <h3>Hapus Data</h3>
         <div class="form-login">
            <h4>Ingin Menghapus Data ?</h4>
            <form
              action="datapengguna-proses.php"
              method="post"
              enctype="multipart/form-data"
            >
              <input type="hidden" name="id" value="<?= $data['id'] ?>">
              <button type="submit" class="btn" name="hapus" style="margin-top: 50px;">
			Yes
		  </button>
		  <button type="submit" class="btn" name="tidak">
			No
		  </button>
            </form>
          </div>
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