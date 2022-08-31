<?php
$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = ''; 
$db_name = 'skdsevyra'; 

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT password FROM `user`';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
		
while ($row = mysqli_fetch_array($query))

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="logo.png">
    <title>Tugas Encrypted Sevyra</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">

        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>That Plain Text!</h1>
                    <p> "<?php echo $password = $_POST["password"]; ?>"</p>
                    <button class="ghost" id="signIn">Plain Text</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>This Chiper Text!</h1>
                    <p>"<?php echo $password_encrypted = sha1($password); ?>"</p>
                    <button class="ghost" id="signUp">Chiper Text</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
    </script>

</body>

</html>