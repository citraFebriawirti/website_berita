<?php
// sisipkan file koneksi
include "../koneksi.php";


$id_kategori = $_POST['id_kategori'];
$judul_berita = $_POST['judul_berita'];
$isi_berita = $_POST['isi_berita'];
$tgl_berita =date('Y-m-d');
$gambar_berita = $_FILES['gambar_berita']['name'];

move_uploaded_file($_FILES['gambar_berita']['tmp_name'], "uploads/$gambar_berita");
// query insert ke database
$tambah = mysqli_query($koneksi, "INSERT INTO berita (id_kategori, judul_berita, isi_berita, gambar_berita, tgl_berita) 
VALUES ('$id_kategori', '$judul_berita', '$isi_berita', '$gambar_berita', '$tgl_berita')");

if($tambah){
    // jika query berhasil
    echo "<script>
    alert('Data Berhasil Ditambahkan') 
    window.location.href='../?page=berita/index'
    </script>";
}else{
    // jika query gagal
    echo "<script>
    alert('Data Gagal Ditambahkan') 
    window.location.href='../?page=kategori/tambah'
    </script>";
}

?>