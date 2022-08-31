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

            <form method="POST" action="login.php">
                <h1>Gass Input yaw</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa fa-google"></i></a>
                    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button>Signup</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Be patient!</h1>
                    <p>Untuk mengetahui apakah password yang diinputkan sudah di decryptor, mari input form disamping :)
                    </p>
                    <button class="ghost" id="signIn">Back</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Welcome in Tugas SKD encrypted by Sevyra Nanda - V3921034 </p>
                    <button class="ghost" id="signUp">Let's Next The Journey</button>
                </div>
            </div>
        </div>
    </div>
    <a class="nav-link" href="login.php"><button type="button" class="btn btn-warning">Bisa Login disini!</button></a>

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