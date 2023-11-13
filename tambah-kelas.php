<?php
if (isset($_POST['nama_kelas'])) {
    $nama_kelas = $_POST['nama_kelas'];
    $id_jurusan = $_POST['id_jurusan'];


   $query = mysqli_query($koneksi,"INSERT INTO kelas (nm_kelas,id_jurusan) VALUES ('$nama_kelas','$id_jurusan')");
   
   if ($query) {
      echo '<script>alert("data berhasil ditambah");location.href="?page=kelas";</script>';
   }
}

?>

<h1 class="h3 mb-3"> tambah kelas</h1>

                    <div class="row">
                        <div class="col-12">
                            <div class="card flex-fill-fill">
                                <div class="card-body">
                                    <form method="post">
                                        <div class="mb-3">
                                            <label class="form-label">Nama kelas</label>
                                            <div class="col-12">
                                                <input type="text" name="nama_kelas" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label"> jurusan</label>
                                            <select name="id_jurusan"class="form-select">
                                                <?php
                                                $query = mysqli_query($koneksi,"SELECT *FROM jurusan");
                                                while ($data = mysqli_fetch_array($query)) {
                                                   ?>
                                                   <option value="<?php echo $data['id_jurusan']?>"><?php  echo $data['nm_jurusan']?></option>

                                                   <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary">simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>