<?php
include ("koneksi.php");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$query = "SELECT * FROM testimonials";
$result = mysqli_query($koneksi, $query);

$testimonials = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $testimonials[] = $row;
    }
}

mysqli_close($koneksi);

echo json_encode($testimonials);
?>
