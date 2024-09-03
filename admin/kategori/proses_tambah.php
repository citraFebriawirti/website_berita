<?php

include "../koneksi.php";

$nama_kategori = $_POST['nama_kategori'];

// query insert ke database
$tambah =mysqli_query($koneksi,"INSERT INTO kategori (nama_kategori) VALUES ('$nama_kategori')");

if($tambah){
    // jika query berhasil
    echo "<script>
    alert('Data Berhasil Ditambahkan') 
    window.location.href='../?page=kategori/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
    alert('Data Gagal Ditambahkan') 
    window.location.href='../?page=kategori/tambah'
    </script>";
}

?>