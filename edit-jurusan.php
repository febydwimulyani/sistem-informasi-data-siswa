<?php
$id = $_GET['id'];
if (isset($_POST['nm_jurusan'])) {
   $nm_jurusan = $_POST['nm_jurusan'];

   $query = mysqli_query($koneksi,"UPDATE jurusan SET nm_jurusan='$nm_jurusan' WHERE id_jurusan='$id'");
   if ($query) {
    echo '<script>alert("Data Berhasil diupdate");location.href="?page=jurusan"</script>';
   }
}
$query = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE id_jurusan='$id'");
$data = mysqli_fetch_array($query);
?>
<h1 class="h3 mb-3"><strong>Ubah Jurusan</strong><h1>
                    <div class="row">
                        <div class="col-12">
                            <div class="card flex-fill-fill">
                                <div class="card-body">
                                    <form method="post">
                                        <div class="mb-3">
                                            <label class="form-label">Nm Jurusan</label>
                                            <div class="col-12">
                                                <input type="text" name="nm_jurusan" class="form-control"value="<?php echo $data['nm_jurusan'] ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary">simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>