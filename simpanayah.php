<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tahun_lahir'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$penghasilan_bulan = $_POST['penghasilan_bulan'];
$berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];

// Menyimpan ke database
$sql = mysqli_query($conn, "INSERT INTO ayah (nama, tahun_lahir, pendidikan, pekerjaan, penghasilan_bulan, berkebutuhan_khusus) 
VALUES ('$nama', '$tanggal_lahir', '$pendidikan', '$pekerjaan', '$penghasilan_bulan', '$berkebutuhan_khusus')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Data Keseluruhan Berhasil Disimpan!'); window.location.href='formdatayah.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ayah Gagal Ditambahkan!!');";
        }
?>