<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="mts.png" type="image/x-icon">
    <title> Login </title>
</head>

<body>
    <style>
        /* POPPINS FONT */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: url("gipp.gif");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            overflow: hidden;

        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 110vh;
            background: rgba(39, 39, 39, 0.4);
        }

        .nav {
            position: fixed;
            top: 0;
            display: flex;
            justify-content: space-around;
            width: 100%;
            height: 100px;
            line-height: 100px;
            background: linear-gradient(rgba(39, 39, 39, 0.6), transparent);
            z-index: 100;
        }

        .nav-logo p {
            color:white;
            font-size: 25px;
            font-weight: 600;
        }

        .nav-menu ul {
            display: flex;
        }

        .nav-menu ul li {
            list-style-type: none;
        }

        .nav-menu ul li .link {
            text-decoration: none;
            font-weight: 500;
            color: #fff;
            padding-bottom: 15px;
            margin: 0 25px;
        }

        .nav-menu-btn {
            display: none;
        }

        .form-box {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 512px;
            height: 420px;
            overflow: hidden;
            z-index: 2;
        }

        .login-container {
            position: absolute;
            left: 4px;
            width: 500px;
            display: flex;
            flex-direction: column;
            transition: .5s ease-in-out;
        }

        .top span {
            color: #fff;
            font-size: small;
            padding: 10px 0;
            display: flex;
            justify-content: center;
        }

        .top span a {
            font-weight: 500;
            color: #fff;
            margin-left: 5px;
        }

        header {
            color: #fff;
            font-size: 30px;
            text-align: center;
            padding: 10px 0 30px 0;
        }


        .input-field {
            font-size: 15px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            height: 50px;
            width: 100%;
            padding: 0 10px 0 45px;
            border: none;
            border-radius: 30px;
            outline: none;
            transition: .2s ease;
        }

        .input-box i {
            position: relative;
            top: -35px;
            left: 17px;
            color: #fff;
        }

        .submit {
            font-size: 15px;
            font-weight: 500;
            color: black;
            height: 45px;
            width: 100%;
            border: none;
            border-radius: 30px;
            outline: none;
            background: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            transition: .3s ease-in-out;
        }

        .submit:hover {
            background: rgba(255, 255, 255, 0.5);
            box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
        }

    </style>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <p>E-PERPUS .</p>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>
        <div class="form-box">
            <div class="login-container" id="login">
                <div class="top">
                    <span>Don't have an account? <a href="register.php" onclick="register()">Sign Up</a></span>
                    <header>LOGIN</header>
                </div>
                <?php
                if (isset($_POST['login'])) {
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);

                    $data = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");
                    $cek = mysqli_num_rows($data);
                    if ($cek > 0) {
                        $_SESSION['user'] = mysqli_fetch_array($data);
                        echo '<script>alert("Selamat datang, Login Berhasil"); location.href="index.php";</script>';
                    } else {
                        echo '<script>alert("Maaf, Username/Password salah")</script>';
                    }
                }
                ?>
                <form method="post">
                    <div class="input-box">
                        <input type="text" name="username" class="input-field" placeholder="Username or Email" required
                            id="exampleInputEmaill" aria-describedby="emailHelp">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" class="input-field" placeholder="Password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" name="login" class="submit" value="Login">
                    </div>
                </form>
</body>

</html>