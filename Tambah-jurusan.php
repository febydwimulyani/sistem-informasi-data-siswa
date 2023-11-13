<?php
if (isset($_POST['nm_jurusan'])) {
   $nm_jurusan = $_POST['nm_jurusan'];

   $query = mysqli_query($koneksi,"INSERT INTO jurusan (nm_jurusan) VALUES('$nm_jurusan')");
   if ($query) {
    echo '<script>alert("Data Berhasil di Tambah");location.href="?page=jurusan"</script>';
   }
}
?>
<div class="row">
                        <div class="col-12">
                            <div class="card flex-fill-fill">
                                <div class="card-body">
                                    <form method="post">
                                        <div class="mb-3">
                                            <label class="form-label">Nm Jurusan</label>
                                            <div class="col-12">
                                                <input type="text" name="nm_jurusan" class="form-control">
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