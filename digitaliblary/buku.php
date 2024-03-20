<h1 class="mt-4">Buku</h1>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=buku_tambah" span class=" badge btn btn-primary">+ Tambah Data</a>
                <a href="index.php" span class="badge btn btn-success">KEMBALI</a></span>
                <br>
                <br>
                
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM buku LEFT JOIN kategori on buku.id_kategori = kategori.id_kategori");
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $i++; ?>
                            </td>
                            <td>
                                <?php echo $data['kategori']; ?>
                            </td>
                            <td>
                                <?php echo $data['judul']; ?>
                            </td>
                            <td>
                                <?php echo $data['penulis']; ?>
                            </td>
                            <td>
                                <?php echo $data['penerbit']; ?>
                            </td>
                            <td>
                                <?php echo $data['tahun_terbit']; ?>
                            </td>
                            <td>
                                <?php echo $data['deskripsi']; ?>
                            </td>
                            <td>
                                <a onclick="return confirm('Apakah Anda Yakin Data Ini Ingin Dirubah?')"
                                    href="?page=buku_ubah&&id=<?php echo $data['id_buku']; ?>"
                                    span class=" badge btn btn-warning mt-4">DIUBAH</a></span>
                                <a onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                                    href="?page=buku_hapus&&id=<?php echo $data['id_buku']; ?>"
                                    span class=" badge btn btn-danger mt-4">HAPUSS</a></span>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>