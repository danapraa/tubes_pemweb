<?php
include '../db/connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $nik = $_POST['nik'];
    $birth_date = $_POST['birth_date'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $rehab_section = $_POST['rehab_section'];

    if (!empty($name) && !empty($gender) && !empty($nik) && !empty($birth_date) && 
        !empty($phone) && !empty($address) && !empty($appointment_date) && 
        !empty($appointment_time) && !empty($rehab_section)) {

        $sql = "INSERT INTO patients (name, gender, nik, birth_date, phone, address, appointment_date, appointment_time, rehab_section)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sssssssss", $name, $gender, $nik, $birth_date, $phone, $address, $appointment_date, $appointment_time, $rehab_section);

            if ($stmt->execute()) {
                echo "Pendaftaran berhasil. Nomor antrian Anda adalah: " . $stmt->insert_id;
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Harap isi semua kolom.";
    }
}
$conn->close();
?>