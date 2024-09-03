<?php
// Sisipkan file koneksi
include "../koneksi.php";

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];

$foto = $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'], "gambar_register/$foto");

// Cek apakah username sudah ada di database
$cek_username = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
if(mysqli_num_rows($cek_username) > 0){
    // Jika username sudah digunakan
    echo "<script>
    alert('Username sudah digunakan');
    window.location.href='../index.php';
    </script>";
} else {
    // Jika username belum digunakan, lakukan insert
    $tambah = mysqli_query($koneksi, "INSERT INTO user (id_user, username, password, nama_lengkap, foto) 
    VALUES ('$id_user', '$username', '$password','$nama_lengkap', '$foto')");

    var_dump($tambah);

    if($tambah){
        // Jika query berhasil
        echo "<script>
        alert('Data Berhasil Ditambahkan');
        window.location.href='../index.php';
        </script>";
    } else {
        // Jika query gagal
        echo "<script>
        alert('Data Gagal Ditambahkan');
        window.location.href='../index.php';
        </script>";
    }
}
?>