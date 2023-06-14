<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">MANAJEMEN DATA USER</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Data User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 cursor-hover">
                    <div class="card">
                        <div class="card-header cursor-hover">
                            <h3 class="card-title">Daftar Data User Aktif</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body cursor-hover">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 cursor-hover">
                                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline cursor-hover" role="grid" aria-describedby="example2_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting pointer-hover" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending">No</th>    
                                                    <th class="sorting pointer-hover sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Nama</th>
                                                    <th class="sorting pointer-hover" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Username: activate to sort column descending" aria-sort="ascending">Username</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Level: activate to sort column ascending">Level</th>
                                                    <th class="sorting pointer-hover" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Unit: activate to sort column ascending">Unit</th>
                                                    <th class="sorting pointer-hover" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="No Telepon: activate to sort column ascending">No Telepon</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $no = 1; 
                                                foreach ($data_user ->result() as $db): 
                                                ?>
                                                <tr role="row">
                                                    <th><?= $no++ ?></th>
                                                    <td><?= $db->nama ?></td>
                                                    <td><?= $db->username ?></td>
                                                    <td>
                                                        <?php 
                                                        // Mengambil data nama_level dari tabel tb_level berdasarkan id_level
                                                        $id_level = $db->level;
                                                        $level = $this->db->get_where('tb_level', ['id_level' => $id_level])->row();
                                                        echo $level->nama_level;
                                                        ?>
                                                    </td>
                                                    <td><?= $db->unit ?></td>
                                                    <td><?= $db->no_hp ?></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
</div>