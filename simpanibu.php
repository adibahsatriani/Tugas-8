<?php 
include 'koneksi.php';
$nama = $_POST['nama_ibu'];
$tanggal_lahir = $_POST['tahun_lahir'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$penghasilan_bulan = $_POST['penghasilan_bulan'];
$berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];

// Menyimpan ke database
$sql = mysqli_query($conn, "INSERT INTO ibu (nama_ibu, tahun_lahir, pendidikan, pekerjaan, penghasilan_bulan, berkebutuhan_khusus) 
VALUES ('$nama_ibu', '$tahun_lahir', '$pendidikan', '$pekerjaan', '$penghasilan_bulan', '$berkebutuhan_khusus')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Data Keseluruhan Berhasil Disimpan!'); window.location.href='simpanibu.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ibu Gagal Ditambahkan!!');";
        }
?>