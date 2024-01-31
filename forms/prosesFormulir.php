<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Proses pesan dan kirim melalui WhatsApp
  $phone = "6281323996824"; // Ganti dengan nomor WhatsApp yang dituju
  $message = "Pesan dari: $email\n\n$message";
  $message = urlencode($message);

  // Redirect ke WhatsApp dengan pesan yang telah dibuat
  header("Location: https://wa.me/$phone?text=$message");
}
?>
