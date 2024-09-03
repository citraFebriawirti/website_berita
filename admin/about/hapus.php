<?php
// sisipkan file koneksi
include "../koneksi.php";

$id_about = $_GET['id_about'];


// query insert ke database
$hapus =mysqli_query($koneksi,"DELETE FROM  about WHERE id_about='$id_about'");

if($hapus){
    // jika query berhasil
    echo "<script>
    alert('Data Berhasil Dihapus') 
    window.location.href='../?page=about/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
    alert('Data Gagal Dihapus') 
    window.location.href='../?page=about/index'
    </script>";
}

?>