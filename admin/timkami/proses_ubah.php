<?php
// Sisipkan file koneksi
include "../koneksi.php";

$id_tim = $_POST['id_tim'];
$nama_tim = $_POST['nama_tim'];
$jabatan = $_POST['jabatan'];

$foto = $_FILES['foto']['name'];

if (!empty($foto)) {
    // Pindahkan file gambar yang diupload ke folder uploads
    move_uploaded_file($_FILES['foto']['tmp_name'], "gambar_tim/$foto");
    
    // Query untuk mengupdate data dengan gambar baru
    $sql = "UPDATE tim_kami SET 
                nama_tim='$nama_tim', 
                jabatan='$jabatan', 
                foto='$foto' 
            WHERE id_tim=$id_tim";
} else {
    // Query untuk mengupdate data tanpa mengganti gambar
    $sql = "UPDATE tim_kami SET 
               nama_tim='$nama_tim', 
                jabatan='$jabatan' 
            WHERE id_tim=$id_tim";
}

// Eksekusi query
$ubah = mysqli_query($koneksi, $sql);




// Jika query berhasil
if ($ubah) {
    echo "<script>
            alert('Data Berhasil Diupdate');
            window.location.href='../?page=timkami/index';
          </script>";
} else {
    // Jika query gagal
    echo "<script>
            alert('Data Gagal Diupdate');
            window.location.href='../?page=timkami/ubah&id_tim=$id_tim';
          </script>";
}
?>