<?php 

include '../koneksi.php';
if(isset($_POST['login'])) {
  $requestUsername = $_POST['username'];
  $requestPassword = $_POST['password'];

  $sql = "SELECT * FROM tb_datapengguna WHERE username = '$requestUsername'";
  list($id, $email, $password,  $username) = mysqli_fetch_row(mysqli_query($koneksi, $sql));
  $result = mysqli_query($koneksi, $sql);

  if(mysqli_num_rows($result) > 0) {
    if ("SELECT * FROM tb_datapengguna WHERE password = '$requestPassword', '$password'") {
        while($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['username'] = $row['username'];
            header('location:../pengguna/admin.php');
        }

      } else { 
          echo "
          <script>
            alert('email atau password anda salah, Silahkan coba lagi');
            window.location = 'loginadmin.php';
          </script>
          ";
      }
    } else { 
        echo "
        <script>
          alert('email atau password anda aneh, Silahkan coba lagi');
          window.location = 'loginadmin.php';
        </script>
        ";
    }
}
?>