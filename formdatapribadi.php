<?php
    include 'koneksidb.php';
?>
<html>

<head>
    <title>FORMULIR PESERTA DIDIK</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

    <?php
    $error_nama = "";
    $error_jenis_kelamin = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tempat_lahir = "";
    $error_tanggal_lahir = "";
    $error_agama = "";
    $error_berkebutuhan_khusus = "";
    $error_alamat_jalan = "";
    $error_rt = "";
    $error_rw = "";
    $error_nama_dusun = "";
    $error_nama_kelurahan_desa = "";
    $error_kecamatan = "";
    $error_kode_pos = "";
    $error_tempat_tinggal = "";
    $error_moda_transportasi = "";
    $error_nomor_hp = "";
    $error_email = "";
    $error_penerima_kip = "";
    $error_no_kip = "";
    $error_kewarganegaraan = "";
    $error_negara = "";

    $nama = "";
    $jenis_kelamin = "";
    $nisn = "";
    $nik = "";
    $tempat_lahir = "";
    $tanggal_lahir = "";
    $agama = "";
    $berkebutuhan_khusus = "";
    $alamat_jalan = "";
    $rt = "";
    $rw = "";
    $nama_dusun = "";
    $nama_kelurahan_desa = "";
    $kecamatan = "";
    $kode_pos = "";
    $tempat_tinggal = "";
    $moda_transportasi = "";
    $nomor_hp = "";
    $email = "";
    $penerima_kip = "";
    $no_kip = "";
    $kewarganegaraan = "";
    $negara = "";

   


    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <br>
    <h1 class="text-center">Formulir Registrasi</h1><br>
    <div class="card">
        <p>Tanggal : <?php echo date('d F Y'); ?></p>
        <div class="card-header bg-primary text-white">
            REGISTRASI PESERTA DIDIK
        </div>
        <div class="card-body">
            <form method="post" action="formdataayah.php">


            <div class="form-group row">
                    <label for="nis" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" name="namalengkap" id="namalengkap"
                            class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>"
                            placeholder="Nama Lengkap" value="<?php echo $nama; ?>"> <span
                            class="warning"><?php echo $error_nama ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <input type="radio" name="jeniskelamin" value="Laki Laki">Laki - Laki</label>
                        <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</label>
                        <span class="warning"><?php echo $error_jenis_kelamin; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nis" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-10">
                        <input type="text" name="nisn" id="nisn"
                            class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>"
                            placeholder="NISN" value="<?php echo $nisn; ?>"> <span
                            class="warning"><?php echo $error_nisn ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" name="nik" id="nik"
                            class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>"
                            placeholder="NIK" value="<?php echo $nik; ?>"> <span
                            class="warning"><?php echo $error_nik ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" name="tempatlahir" id="tempatlahir"
                            class="form-control <?php echo ($error_tempat_lahir !="" ? "is-invalid" : ""); ?>"
                            placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>"> <span
                            class="warning"><?php echo $error_tempat_lahir ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <td>
                            <input type="date" name="tanggallahir">
                        </td>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="agama" class="col-sm-2 col-form-label "> Agama </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="agama">
                            <option value=""></option>
                            <option value="Islam"> Islam </option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budah">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $error_agama; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="berkebutuhan khusus" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="berkebutuhan khusus">
                            <option value=""></option>
                            <option value="Tidak"> Tidak </option>
                            <option value="Netra">Netra</option>
                            <option value="Rungu">Rungu</option>
                            <option value="Grahita Ringan">Grahita Ringan</option>
                            <option value="Grahita Sedang">Grahita Sedang</option>
                            <option value="Daksa Ringan">Daksa Ringan</option>
                            <option value="Daksa Sedang">Daksa Sedang</option>
                            <option value="Laras">Laras</option>
                            <option value="Wicara">Wicara</option>
                            <option value="Tuna Ganda">Tuna Ganda</option>
                            <option value="Hiper Aktif">Hiper Aktif</option>
                            <option value="Cerdas Istimewa">Cerdas Istimewa</option>
                            <option value="Bakat Istimewa">Bakat Istimewa</option>
                            <option value="Kesulitan Belajar">Kesulitan Belajar</option>
                            <option value="Indigo">Indigo</option>
                            <option value="Down Sindrome">Down Sindrome</option>
                            <option value="Autis">Autis</option>
                        </select>
                        <span class="warning"><?php echo $error_berkebutuhan_khusus; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="alamatjalan" class="col-sm-2 col-form-label">Alamat Jalan</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamatjalan" id="alamatjalan"
                            class="form-control <?php echo ($error_alamat_jalan !="" ? "is-invalid" : ""); ?>"
                            placeholder="Alamat Jalan" value="<?php echo $alamat_jalan; ?>"> <span
                            class="warning"><?php echo $error_alamat_jalan ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rt" class="col-sm-2 col-form-label">RT</label>
                    <div class="col-sm-10">
                        <input type="text" name="rt" id="rt"
                            class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>"
                            placeholder="RT" value="<?php echo $rt; ?>"> <span
                            class="warning"><?php echo $error_rt ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="rw" class="col-sm-2 col-form-label">RW</label>
                    <div class="col-sm-10">
                        <input type="text" name="rw" id="rw"
                            class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>"
                            placeholder="RT" value="<?php echo $rw; ?>"> <span
                            class="warning"><?php echo $error_rw ?></span>
                    </div>
                </div>

                
                    <div class="form-group row">
                    <label for="dusun" class="col-sm-2 col-form-label">Nama Dusun</label>
                    <div class="col-sm-10">
                        <input type="text" name="dusun" id="dusun"
                            class="form-control <?php echo ($error_nama_dusun !="" ? "is-invalid" : ""); ?>"
                            placeholder="Dusun" value="<?php echo $nama_dusun; ?>"> <span
                            class="warning"><?php echo $error_nama_dusun ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelurahan" class="col-sm-2 col-form-label">Nama Kelurahan/ Desa</label>
                    <div class="col-sm-10">
                        <input type="text" name="kelurahan" id="kelurahan"
                            class="form-control <?php echo ($error_nama_kelurahan_desa !="" ? "is-invalid" : ""); ?>"
                            placeholder="Kelurahan" value="<?php echo $nama_kelurahan_desa; ?>"> <span
                            class="warning"><?php echo $error_nama_kelurahan_desa ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <input type="text" name="kecamatan" id="kecamatan"
                            class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>"
                            placeholder="Kecamatan" value="<?php echo $kecamatan; ?>"> <span
                            class="warning"><?php echo $error_kecamatan ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
                    <div class="col-sm-10">
                        <input type="text" name="kode_pos" id="kode_pos"
                            class="form-control <?php echo ($error_kode_pos !="" ? "is-invalid" : ""); ?>"
                            placeholder="Kode Pos" value="<?php echo $kode_pos; ?>"> <span
                            class="warning"><?php echo $error_kode_pos ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_tinggal" class="col-sm-2 col-form-label "> Tempat Tinggal </label>
                <div class="col-sm-10">
                        <select class="form-control" name="tempat_tinggal">
                            <option value=""></option>
                            <option value="Bersama orang tua">Bersama Orang Tua</option>
                            <option value="Wali">Wali</option>
                            <option value="Kos">Kos</option>
                            <option value="Asrama">Asrama</option>
                            <option value="Panti Asuhan">Panti Asuhan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $error_tempat_tinggal; ?></span>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="moda_transportasi" class="col-sm-2 col-form-label ">  Moda Transportasi </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="moda_transportasi">
                            <option value=""></option>
                            <option value="Jalan Kaki">Jalan Kaki</option>
                            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                            <option value="Kendaraan Umum/Angkot/Pete-pete">Kendaraan Umum/Angkot/Pete-pete</option>
                            <option value="Jemput Sekolah">Jemput Sekolah</option>
                            <option value="Kereta Api">Kereta Api</option>
                            <option value="Ojek">Ojek</option>
                            <option value="Andong/Bendi/Dokar/Delman/Becak">Andong/Bendi/Dokar/Delman/Becak</option>
                            <option value="Perahu Penyebrangan/Rakit/Getek">Perahu Penyebrangan/Rakit/Getek</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <span class="warning"><?php echo $error_moda_transportasi; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_hp" id="no_hp"
                            class="form-control <?php echo ($error_nomor_hp !="" ? "is-invalid" : ""); ?>"
                            placeholder="Nomor HP" value="<?php echo $no_hp; ?>"> <span
                            class="warning"><?php echo $error_nomor_hp ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email Pribadi</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" id="email"
                            class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>"
                            placeholder="Email" value="<?php echo $email; ?>"> <span
                            class="warning"><?php echo $error_email ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerimakip" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
                    <div class="col-sm-10">
                        <input type="radio" name="penerimakip" value="Ya">Ya</label>
                        <input type="radio" name="penerimakip" value="Tidak">Tidak</label>
                        <span class="warning"><?php echo $error_penerima_kip; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nokip" class="col-sm-2 col-form-label">No. KPS/KKS/KIP</label>
                    <div class="col-sm-10">
                        <input type="text" name="nokip" id="nokip"
                            class="form-control <?php echo ($error_no_kip !="" ? "is-invalid" : ""); ?>"
                            placeholder="RT" value="<?php echo $rw; ?>"> <span
                            class="warning"><?php echo $error_no_kip ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                    <div class="col-sm-10">
                        <input type="radio" name="kewarganegaraan" value="Ya">Indonesia</label>
                        <input type="radio" name="kewarganegaraan" value="Tidak">Asing (WNA)</label>
                        <span class="warning"><?php echo $error_kewarganegaraan; ?></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="namanegara" class="col-sm-2 col-form-label">Nama Negara</label>
                    <div class="col-sm-10">
                        <input type="text" name="namanegara" id="namanegara"
                            class="form-control <?php echo ($error_namanegara !="" ? "is-invalid" : ""); ?>"
                            placeholder="Nama Negara" value="<?php echo $namanegara; ?>"> 
                    </div>
                </div>
                <div class="form-group row">
                    <label for="negara" class="col-sm-2 col-form-label">Nama Negara</label>
                    <div class="col-sm-10">
                        <input type="text" name="negara" id="negara"
                            class="form-control <?php echo ($error_negara !="" ? "is-invalid" : ""); ?>"
                            placeholder="Nama Negara" value="<?php echo $negara; ?>"> <span
                            class="warning"><?php echo $error_negara ?></span>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
