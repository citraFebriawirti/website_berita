<?php
// Sisipkan file koneksi
include "../koneksi.php";

$id_berita = $_POST['id_berita'];
$id_kategori = $_POST['id_kategori'];
$judul_berita = $_POST['judul_berita'];
$tgl_berita = $_POST['tgl_berita'];
$isi_berita = str_replace("'",'',$_POST['isi_berita']);

$gambar_berita = $_FILES['gambar_berita']['name'];

if (!empty($gambar_berita)) {
    // Pindahkan file gambar yang diupload ke folder uploads
    move_uploaded_file($_FILES['gambar_berita']['tmp_name'], "uploads/$gambar_berita");
    
    // Query untuk mengupdate data dengan gambar baru
    $sql = "UPDATE berita SET 
                id_kategori='$id_kategori', 
                judul_berita='$judul_berita', 
                isi_berita='$isi_berita', 
                gambar_berita='$gambar_berita', 
                tgl_berita='$tgl_berita'
            WHERE id_berita=$id_berita";
} else {
    // Query untuk mengupdate data tanpa mengganti gambar
    $sql = "UPDATE berita SET 
                id_kategori='$id_kategori', 
                judul_berita='$judul_berita', 
                isi_berita='$isi_berita', 
                tgl_berita='$tgl_berita'
            WHERE id_berita='$id_berita'";
}

// Eksekusi query
$ubah = mysqli_query($koneksi, $sql);

// $gambar_berita = $_FILES['gambar_berita']['name'];
// move_uploaded_file($_FILES['gambar_berita']['tmp_name'], "uploads/$gambar_berita"); 



// Jika query berhasil
if ($ubah) {
    echo "<script>
            alert('Data Berhasil Diupdate');
            window.location.href='../?page=berita/index';
          </script>";
} else {
    // Jika query gagal
    echo "<script>
            alert('Data Gagal Diupdate');
            window.location.href='../?page=berita/ubah&id_berita=$id_berita';
          </script>";
}
?>