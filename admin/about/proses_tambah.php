<?php
// sisipkan file koneksi
include "../koneksi.php";


$id_about = $_POST['id_about'];
$visi_about = $_POST['visi_about'];
$misi_about = $_POST['misi_about'];

$gambar_about = $_FILES['gambar_about']['name'];

move_uploaded_file($_FILES['gambar_about']['tmp_name'], "gambar_about/$gambar_about");
// query insert ke database
$tambah = mysqli_query($koneksi, "INSERT INTO about (id_about, visi_about, misi_about, gambar_about) 
VALUES ('$id_about', '$visi_about', '$misi_about', '$gambar_about')");

if($tambah){
    // jika query berhasil
    echo "<script>
    alert('Data Berhasil Ditambahkan') 
    window.location.href='../?page=about/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
    alert('Data Gagal Ditambahkan') 
    window.location.href='../?page=about/tambah'
    </script>";
}

?>