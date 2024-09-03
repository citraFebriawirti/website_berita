<?php
include "../koneksi.php";

$id_tim = $_GET['id_tim'];


// query insert ke database
$hapus =mysqli_query($koneksi,"DELETE FROM  tim_kami WHERE id_tim='$id_tim'");

if($hapus){
    // jika query berhasil
    echo "<script>
    alert('Data Berhasil Dihapus') 
    window.location.href='../?page=timkami/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
    alert('Data Gagal Dihapus') 
    window.location.href='../?page=timkami/index'
    </script>";
}

?>