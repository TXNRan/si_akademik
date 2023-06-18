<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tb_datapengguna VALUES('', '$username', '$email', '$password')";

    if(empty($username) || empty($email) || empty($password)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'datapengguna-entry.html';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Data Pengguna Berhasil Ditambahkan');
                window.location = 'datapengguna.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'datapengguna-entry.html';
            </script>
        ";
    } 

}elseif(isset($_POST['edit'])) {
    $id         = $_POST['id'];
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $sql = "UPDATE tb_datapengguna SET username = '$username', email = '$email', password = '$password' WHERE id = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Transaction Berhasil Diubah');
                window.location = 'datapengguna.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'datapengguna-edit.php';
            </script>
        ";
    }

}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_datapengguna WHERE id = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Transaction Berhasil Dihapus');
                window.location = 'datapengguna.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Transaction Gagal Dihapus');
                window.location = 'datapengguna.php'
            </script>
        ";
    }
    
}else {
    header('location: datapengguna.php');
}

?>
