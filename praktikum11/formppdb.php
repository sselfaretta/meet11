<!DOCTYPE html>
<html lang="en">
<head>
    <title>Penerimaan Peserta Didik Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container p-3 my-3 border">
    <h1 class="text-center">Form Pendaftaran Siswa Baru</h1>
    <?php
        //Include file koneksi, untuk koneksikan ke database
        include "koneksidb.php";

        //Fungsi untuk mencegah inputan karakter yang tidak sesuai
        function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jenis=input($_POST["jenis"]);
            $masuk=input($_POST["masuk"]);
            $nis=input($_POST["nis"]);
            $ujian=input($_POST["ujian"]);
            $paud=input($_POST["paud"]);
            $tk=input($_POST["tk"]);
            $skhun=input($_POST["skhun"]);
            $ijazah=input($_POST["nama_ibu"]);
            $hobi=input($_POST["hobi"]);
            $cita=input($_POST["cita"]);
            $nama=input($_POST["nama"]);
            $kelamin=input($_POST["kelamin"]);
            $nisn=input($_POST["nisn"]);
            $nik=input($_POST["nik"]);
            $tempat=input($_POST["tempat"]);
            $tgl=input($_POST["tgl"]);
            $agama=input($_POST["agama"]);
            $kebutuhan=input($_POST["kebutuhan"]);
            $alamat=input($_POST["alamat"]);
            $rt=input($_POST["rt"]);
            $rw=input($_POST["rw"]);
            $dusun=input($_POST["dusun"]);
            $kelurahan=input($_POST["kelurahan"]);
            $kecamatan=input($_POST["kecamatan"]);
            $pos=input($_POST["pos"]);
            $tinggal=input($_POST["tinggal"]);
            $transportasi=input($_POST["transportasi"]);
            $hp=input($_POST["hp"]);
            $telp=input($_POST["telp"]);
            $email=input($_POST["email"]);
            $kip=input($_POST["kip"]);
            $nokip=input($_POST["nokip"]);
            $warga=input($_POST["warga"]);

            //Query input menginput data ke dalam tabel regis_peserta
            $sql="insert into regis_peserta (jenis, masuk, nis, ujian, paud, tk, skhun, ijazah, hobi, cita, nama, kelamin, nisn, nik, tempat, tgl, agama, kebutuhan, alamat, rt, rw, dusun, kelurahan, kecamatan, pos, tinggal, transportasi, hp, telp, email, kip, nokip, warga) values ('$jenis', '$masuk', '$nis', '$ujian', '$paud', '$tk', '$skhun', '$ijazah', '$hobi', '$cita', '$nama', '$kelamin', '$nisn', '$nik', '$tempat', '$tgl', '$agama', '$kebutuhan', '$alamat', '$rt', '$rw', '$dusun', '$kelurahan', '$kecamatan', '$pos', '$tinggal', '$transportasi', '$hp', '$telp', '$email', '$kip', '$nokip', '$warga')";

            //Mengeksekusi/menjalankan query di atas
            $hasil=mysqli_query($kon,$sql);

            //Kondisi apakah berhasil atau tidak dalam mengeksekusi query di atas
            if ($hasil) { 
                echo "<div class='alert alert-success'> Selamat $nama Anda telah berhasil mendaftar.</div>"; 
            }
            else {
                echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
            }
        }
    ?>
        
        <form id="form" method="post">
            <div class="alert alert-primary">
                <strong>Registrasi Peserta Didik</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">

                    <div class="form-group">
                        <label>Jenis Pendaftaran:</label>
                        <input type="text" name="jenis" class="form-control" placeholder="Siswa Baru atau Pindahan">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Tanggal Masuk Sekolah:</label>
                        <input type="date" name="masuk" class="form-control" placeholder="Masukkan tanggal masuk">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>NIS:</label>
                        <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nomor Peserta Ujian:</label>
                        <input type="text" name="ujian" class="form-control" placeholder="20 digit SKHUN SD">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Apakah pernah PAUD:</label>
                        <select class="form-control" name="paud">
                            <option>Pilih</option>
                            <option value="1">Ya</option>
                            <option value="2">Tidak</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Apakah pernah TK:</label>
                        <select class="form-control" name="tk">
                            <option>Pilih</option>
                            <option value="1">Ya</option>
                            <option value="2">Tidak</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No. Seri SKHUN sebelumnya:</label>
                        <input type="text" name="skhun" class="form-control" placeholder="Masukkan Seri SKHUN">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No. Seri ijazah sebelumnya:</label>
                        <input type="text" name="ijazah" class="form-control" placeholder="Masukkan Seri Ijazah">
                    </div>
                </div>

                <div class="form-group">
                        <label>Hobi:</label>
                        <input type="text" name="hobi" class="form-control" placeholder="Masukkan Hobi">
                </div>

                <div class="form-group">
                        <label>Cita-Cita:</label>
                        <input type="text" name="cita" class="form-control" placeholder="Masukkan Cita-Cita">
                </div>
            </div>
                
            <div class="alert alert-primary">
                <strong>Data Pribadi</strong>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                    </div>
                </div>
                
            <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama">
                            <option>Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen/Protestan</option>
                            <option value="Katolik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Katolik">Khong Hu Chu</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>

            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>