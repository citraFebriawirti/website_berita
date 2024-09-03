<?php
// Sisipkan file koneksi
include "../koneksi.php";


$id_about = $_POST['id_about'];
$visi_about = $_POST['visi_about'];
$misi_about = $_POST['misi_about'];

$gambar_about = $_FILES['gambar_about']['name'];

if (!empty($gambar_about)) {
    // Pindahkan file gambar yang diupload ke folder uploads
    move_uploaded_file($_FILES['gambar_about']['tmp_name'], "gambar_about/$gambar_about");
    
    // Query untuk mengupdate data dengan gambar baru
    $sql = "UPDATE about SET 
              
                visi_about='$visi_about', 
                misi_about='$misi_about', 
                gambar_about='$gambar_about'
              
            WHERE id_about=$id_about";
} else {
    // Query untuk mengupdate data tanpa mengganti gambar
    $sql = "UPDATE about SET 
               
                visi_about='$visi_about', 
                misi_about='$misi_about' 
              
            WHERE id_about='$id_about'";
}

// Eksekusi query
$ubah = mysqli_query($koneksi, $sql);

// $gambar_about = $_FILES['gambar_about']['name'];
// move_uploaded_file($_FILES['gambar_about']['tmp_name'], "uploads/$gambar_about"); 



// Jika query berhasil
if ($ubah) {
    echo "<script>
            alert('Data Berhasil Diupdate');
            window.location.href='../?page=about/index';
          </script>";
} else {
    // Jika query gagal
    echo "<script>
            alert('Data Gagal Diupdate');
            window.location.href='../?page=about/ubah&id_about=$id_about';
          </script>";
}
?>