<h1 class="h3 mb-3">kelas</h1>

					<div class="row">
						<div class="col-12">
							<div class="card flex-fill-fill">
								<div class="card-header">
									<a href="?page=tambah-kelas" class="btn btn-success btn-sm">+ Tambah kelas</a>
								</div>
								<div class="card-body">
									<table class="table table-bordered table-striped table-hover cell-boerder" id="kelas">
										<thead>
											<tr>
												<th>NO</th>
												<th>Nama kelas</th>
                                                <th> jurusan</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
                                            $i = 1;
                                            $query = mysqli_query($koneksi, "SELECT * FROM kelas INNER JOIN jurusan ON kelas.id_jurusan=jurusan.id_jurusan");
                                            while ($data = mysqli_fetch_array($query)) {
                                                ?>
                                                <tr>
												<td><?php  echo  $i++ ?></td>
												<td><?php  echo  $data['nm_kelas']?></td>
                                                <td><?php echo   $data['nm_jurusan']?></td>
												<td>
													<a href="?page=edit-kelas&id=<?php echo $data['id_kelas']  ?>" class="btn btn-warning btn-sm">Edit</a>
													<a href="?page=hapus-kelas&id=<?php echo $data['id_kelas']  ?>" class="btn btn-danger btn-sm">hapus</a>
												</td>
											</tr>
                                                <?php
                                            }
                                            ?>
										</tbody>
									</table> 
								</div>
							</div>
						</div>
					</div>
					<script>
						let table = new DataTable('#kelas');
					</script>