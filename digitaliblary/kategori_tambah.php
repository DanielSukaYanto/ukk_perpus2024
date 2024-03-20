<h1 class="mt-4">Kategori Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if (isset ($_POST['submit'])) {
                        $kategori = $_POST['kategori'];
                        $query = mysqli_query($koneksi, "INSERT INTO kategori(kategori) values('$kategori')");

                        if ($query) {
                            echo '<script>alert("Tambah data berhasil.");</script>';
                        } else {
                            echo '<script>alert("Tambah data gagal.");</script>';
                        }
                    }
                    ?>
                    <div class="row mb-3">
                        <div class="col-md-2">Nama Kategori</div>
                        <div class="col-md-8"><input type="text" class="form-control" name="kategori"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <button type="submit"span class=" badge btn btn-primary" name="submit" value="submit">Simpan</button></span>
                            <button type="reset" span class=" badge btn btn-secondary">Reset</button>
                            <a href="?page=kategori" span class=" badge btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>