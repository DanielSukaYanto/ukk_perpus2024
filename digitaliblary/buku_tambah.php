<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <form method="post">
                <!-- function sekumpulan kode-kode js yang jika dijalankan akan menghasilkan sesuatu -->
                <!-- fungsi di bawah ini Mengambil nilai dari masing masing input form dengan menggunakan method post-->
                <?php
                    if(isset($_POST['submit'])) {
                        $id_kategori = $_POST['id_kategori'];
                        $judul = $_POST['judul'];
                        $penulis = $_POST['penulis'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        $deskripsi = $_POST['deskripsi'];
                        $query = mysqli_query($koneksi, "INSERT INTO buku(id_kategori,judul,penulis,penerbit,tahun_terbit,deskripsi) values ('$id_kategori','$judul','$penulis','$penerbit','$tahun_terbit','$deskripsi') ");
                        
                        if ($query) {
                            echo '<script>alert("Tambah data berhasil.");</script>';
                        }else {
                            echo '<script>alert("Tambah data gagal.");</script>';
                        }
                    }
                    
                ?>
                 <!-- $query menjalankan query sql dan untuk menambahkan data baru ke dalam tble baru dengan nilai 
                yang ada di folder.-->
                <div class="row mb-3">
                    <div class="col-md-2">Kategori</div>
                    <div class="col-md-8">
                        <select name="id_kategori" class="form-control">
                            <?php
                                $kat = mysqli_query($koneksi, "SELECT*FROM kategori");
                                while ($kategori = mysqli_fetch_array($kat)) {
                                    ?>
                                    <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>
                                    <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Judul</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="judul"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Penulis</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="penulis"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Penerbit</div>
                    <div class="col-md-8"><input type="text" class="form-control" name="penerbit"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Tahun Terbit</div>
                    <div class="col-md-8"><input type="number" class="form-control" name="tahun_terbit"></div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Deskripsi</div>
                    <div class="col-md-8">
                        <textarea name="deskripsi" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <button type="submit" span class=" badge btn btn-primary" name="submit" value="submit">Simpan</button>
                        <button type="reset"  span class=" badge btn btn-secondary">Reset</button></span>
                        <a href="?page=buku" span class="badge btn btn-danger">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>