<?php
include '../db/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $pekerjaan = $_POST['pekerjaan'];
    $email = $_POST['email'];
    $keluhan = $_POST['keluhan'];

    if (!empty($nama) && !empty($pekerjaan) && !empty($email) && !empty($keluhan)) {
        $sql = "INSERT INTO konsultasi (nama, pekerjaan, email, keluhan) VALUES (?, ?, ?, ?)";
        
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ssss", $nama, $pekerjaan, $email, $keluhan);

            if ($stmt->execute()) {
                $message = urlencode("Data berhasil disimpan!");
            } else {
                $message = urlencode("Error: " . $stmt->error);
            }

            $stmt->close();
        } else {
            $message = urlencode("Error: " . $conn->error);
        }
    } else {
        $message = urlencode("Harap isi semua kolom.");
    }

    $conn->close();
    header("Location: ../pages/konsultasi.php?message=$message");
    exit();
}
?>
