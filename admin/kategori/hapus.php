<?php
// sisipkan file koneksi
include "../koneksi.php";

$id_kategori = $_GET['id_kategori'];


// query insert ke database
$hapus =mysqli_query($koneksi,"DELETE FROM  kategori WHERE id_kategori='$id_kategori'");

if($hapus){
    // jika query berhasil
    echo "<script>
    alert('Data Berhasil Dihapus') 
    window.location.href='../?page=kategori/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
    alert('Data Gagal Dihapus') 
    window.location.href='../?page=kategori/index'
    </script>";
}

?>