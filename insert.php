<?php
ob_start();

include "koneksi.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$angkatan = $_POST['angkatan'];
$email = $_POST['email'];
$kontak = $_POST['kontak'];
// foreach ($_POST['seni'] as $senivalue){  
//     $seni .= $senivalue.", ";
// }
$seni = implode(', ', $_POST['seni']);
$alat_musik = $_POST['alat_musik'];
// foreach ($_POST['olahraga'] as $olahragavalue){  
//     $olahraga .= $olahragavalue.", ";
// }
$olahraga = implode(', ', $_POST['olahraga']);


$insert="INSERT INTO minat (nama, nim, angkatan, email, kontak, seni, alat_musik, olahraga)
VALUES ('$nama', '$nim', '$angkatan', '$email', '$kontak', '$seni', '$alat_musik','$olahraga')";


if ($conn->query($insert) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: " . $insert . "<br>" . $conn->error;
}
$conn->close();

header("location: index.php");
exit;

?>