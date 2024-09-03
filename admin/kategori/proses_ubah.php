<?php
// sisipkan file koneksi

include "../koneksi.php";

$id_kategori = $_POST ['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

// query insert ke database
$ubah= mysqli_query($koneksi, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");

// jika query berhasil 
if ($ubah) {
    echo "<script>
    alert('Data Berhasil Di update'); window.location.href='../?page=kategori/index'
    </script>";
    // jika query gagala
    } else { 
        echo "<script>
    alert('Data Gagal Ditambahkan'); 
    window.location.href='../?page=kategori/ubah&id_kategori=$id_kategori'
    </script>";
    }
    ?>