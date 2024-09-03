<?php
// sisipkan file koneksi
include "../koneksi.php";

$id_kontak = $_GET['id_kontak'];


// query insert ke database
$hapus =mysqli_query($koneksi,"DELETE FROM  kontak WHERE id_kontak='$id_kontak'");

if($hapus){
    // jika query berhasil
    echo "<script>
    alert('Data Berhasil Dihapus') 
    window.location.href='../?page=kontak/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
    alert('Data Gagal Dihapus') 
    window.location.href='../?page=kontak/index'
    </script>";
}

?>