<?php
// sisipkan file koneksi
include "../koneksi.php";



$nama_tim = $_POST['nama_tim'];
$jabatan = $_POST['jabatan'];

$foto = $_FILES['foto']['name'];

move_uploaded_file($_FILES['foto']['tmp_name'], "gambar_tim/$foto");
// query insert ke database
$tambah = mysqli_query($koneksi, "INSERT INTO tim_kami (nama_tim,jabatan, foto) 
VALUES ('$nama_tim', '$jabatan', '$foto')");

if($tambah){
    // jika query berhasil
    echo "<script>
    alert('Data Berhasil Ditambahkan') 
    window.location.href='../?page=timkami/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
    alert('Data Gagal Ditambahkan') 
    window.location.href='../?page=timkami/tambah'
    </script>";
}

?>