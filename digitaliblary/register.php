<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .nav-logo p {
        color: white;
        font-size: 25px;
        font-weight: 600;
    }

    body {
        background: url("gip.gif");
    }

    .wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(39, 39, 39, 0.4);
    }

    .top span {
        color: #fff;
        font-size: small;
        padding: 10px 0;
        display: flex;
        justify-content: center;
    }

</style>

<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <p>E-PERPUS .</p>
            </div>
        </nav>
    </div>
    <div class="top">
        <span><span> Have an account? <a href="login.php" onclick="login()">Sign In</a></span></span>
    </div>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="opacity-50">
                                <div class="card shadow-lg border-0 rounded-lg mt-5"></div>
                                <div class="card-header">

                                    <div class="card-body">
                                        <?php
                                        if (isset ($_POST['register'])) {
                                            $nama = $_POST['nama'];
                                            $email = $_POST['email'];
                                            $alamat = $_POST['alamat'];
                                            $no_telepon = $_POST['no_telepon'];
                                            $username = $_POST['username'];
                                            $level = $_POST['level'];
                                            $password = md5($_POST['password']);

                                            $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

                                            if ($insert) {
                                                echo '<script>alert("Selamat datang, Register Berhasil"); location.href="login.php";</script>';
                                            } else {
                                                echo '<script>alert("Register gagal, silahkan ulangi lagi");</script>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="nav-menu-btn">
                                        <i class="bx bx-menu" onclick="myMenuFunction()"></i>
                                    </div>
                                    </nav>
                                    <form method="post">
                                        <div class="form-group">
                                            <input class="form-control py-2" type="text" required name="nama"
                                                placeholder="Masukan Nama Lengkap">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input class="form-control py-2" type="text" required name="email"
                                                placeholder="Masukan Email">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input class="form-control py-2" type="text" required name="no_telepon"
                                                placeholder="Masukan No. Telepon">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <textarea name="alamat" rows="5" required
                                                class="form-control py-2"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <input class="form-control py-2" type="text" required name="username"
                                                placeholder="Masukan Username">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <input class="form-control py-2" id="inputPassword" required type="password"
                                                name="password" placeholder="Enter Password">
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <select name="level" required class="form-select py-2">
                                                <option value="peminjam">Peminjam</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button span class="badge btn btn-primary" type="submit" name="register"
                                                value="register">REGISTER</button>
                                            <button type="reset" span
                                                class=" badge btn btn-secondary">RESET</button></span>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small">
                                        &copy; 2024 Perpustakaan Digital
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>