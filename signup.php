<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "skdsevyra";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "skdsevyra";
$password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO user (nama, email, password) 
VALUES ('$nama', '$email', '$password_encrypted')";

$result = mysqli_query($conn, $sql);

if($conn->query($sql) === TRUE){
	?>
<script>
alert('Berhasil diinput');
window.location.href = 'berhasil.php';
</script>
<?php
}
else{
	?>
<script>
alert('Gagal diinput');
</script>
<?php
}