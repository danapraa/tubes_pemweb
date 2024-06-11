<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pasien</title>
    <link rel="stylesheet" href="../styles/style_Registrasi.css">
</head>
<body>
    <div class="container">
        <h1>Pendaftaran Pasien</h1>
        <form action="../action/registrasi_proses.php" method="POST">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="Male">Laki-laki</option>
                    <option value="Female">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" id="nik" name="nik" required>
            </div>
            <div class="form-group">
                <label for="birth_date">Tanggal Lahir</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" required>
            </div>
            <div class="form-group">
                <label for="phone">No HP</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="appointment_date">Tanggal Datang</label>
                <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
            </div>
            <div class="form-group">
                <label for="appointment_time">Jam Dokter</label>
                <select class="form-control" id="appointment_time" name="appointment_time" required>
                    <option value="09.00">09.00</option>
                    <option value="10.00">10.00</option>
                    <option value="11.00">11.00</option>
                    <option value="12.00">12.00</option>
                    <option value="13.00">13.00</option>
                    <option value="14.00">14.00</option>
                    <option value="15.00">15.00</option>
                    <option value="16.00">16.00</option>
                    <option value="17.00">17.00</option>
                    <option value="18.00">18.00</option>
                    <option value="19.00">19.00</option>
                    <option value="20.00">20.00</option>
                    <option value="21.00">21.00</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rehab_section">Bagian Rehabilitasi</label>
                <select class="form-control" id="rehab_section" name="rehab_section" required>
                    <option value="Rehabilitas Kesehatan Jiwa dan Mental">Rehabilitasi Kesehatan Jiwa dan Mental</option>
                    <option value="Rehabilitasi NAPZA">Rehabilitasi NAPZA</option>
                    <option value="Rehabilitasi Kognitif">Rehabilitasi Kognitif</option>
                </select>
            </div>
            <h2>Bagaimana Alur Pendaftaran Konsultasi</h2>
            <p>1. Isi formulir dengan data yang benar.</p>
            <p>2. Pilih tanggal dan waktu konsultasi yang tersedia.</p>
            <p>3. Pilih bagian rehabilitasi yang sesuai dengan kebutuhan Anda.</p>
            <p>4. Setelah mengisi formulir, nomor antrian akan otomatis keluar.</p>
            <div class="form-buttons">
                <button type="submit" class="btn btn-primary">Daftar</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
                <a href="../index.php" class="btn btn-warning">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
