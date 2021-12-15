<?php

require_once 'includes/koneksi.php';

?>

<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$saran =$_POST['saran'];

$sql = "INSERT INTO saran (firstname, lastname, email, saran)VALUES('$firstname', '$lastname', '$email', '$saran')";
if($koneksi->query($sql)===TRUE){
    echo "<script>alert('Terimakasih atas Saran dan Kritikannya');history.go(-1) </script> ";    
} else {
    echo "Terjadi kesalahan:". $sql."<br/>".$koneksi->error;
}
$koneksi->close();

?>