<br>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Selamat Datang Di Halaman Dashboard Admin.</li>
</ol>
<hr class="border border-dark border-3 opacity-75">
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">
                <?php
                echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM kategori"));
                ?>
                Total Kategori
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=kategori">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">
                <?php
                echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM buku"));
                ?>
                Total Buku
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=buku">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <?php
                echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM ulasan"));
                ?>
                Total Ulasan
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=ulasan">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">
                <?php
                echo mysqli_num_rows(mysqli_query($koneksi, "SELECT*FROM peminjaman"));
                ?>
                Peminjaman
            </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="?page=peminjaman">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <td width="200">Nama</td>
                <td width="1">:</td>
                <td>
                    <?php echo $_SESSION['user']['nama']; ?>
                </td>
            </tr>
            <tr>
                <td width="200">Level User</td>
                <td width="1">:</td>
                <td>
                    <?php echo $_SESSION['user']['level']; ?>
                </td>
            </tr>
            <tr>
                <td width="200">Tanggal Login</td>
                <td width="1">:</td>
                <td>
                    <?php echo date('d-m-y'); ?>
                </td>
            </tr>
        </table> 
    </div>
</div>
<hr class="border border-dark border-3 mt-5 opacity-75">

<div class="card h-10">
    <div class="row g-0">
        <div class="col md-5">
            <img src="mtss.jpg" class="img-fluid rounded-start mt-3" alt="">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">SMK MANAGEMENT TRAINING SYSTEMS BATAM.</h5>
                <p class="card-text">SMK Management Training Systems Bata berkomitmen untuk terus meningkatkan  pelayanan  kepada masyarakat luas dibidang pendidikan melalui Teknologi Informasi.</p>
                    <hr class="border border-dark border-1 opacity-75">
                <p class="card-text"><small class="text-body-secondary mt-5">Uploaded March 2013,Eddy Lubis.</p>
            </div>
        </div>
    </div>
</div>