<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $appointment_date = $_POST['appointment_date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO appointments (name, email, phone, appointment_date, message)
    VALUES ('$name', '$email', '$phone', '$appointment_date', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Appointment booked successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
