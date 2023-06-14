<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">DATA USER</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Data User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid"> 
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Index Data Berkas</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo $action; ?>" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="mb-4">
                                    <label for="varchar">Nama <?php echo form_error('nama') ?></label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" required />
                                    <div class="text">Contoh : Budi</div>
                                    <div class="invalid-feedback">Nama tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="varchar">Username <?php echo form_error('username') ?></label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" required />
                                    <div class="text">Contoh : Budi@gmail.com</div>
                                    <div class="invalid-feedback">Username tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="int">Level <?php echo form_error('level') ?></label>
                                    <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" required />
                                    <div class="text">Level : 1 - admin | 2 - cskur | 3 - kaunit</div>
                                    <div class="invalid-feedback">Level tidak boleh kosong</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-4">
                                    <label for="varchar">Unit <?php echo form_error('unit') ?></label>
                                    <input type="text" class="form-control" name="unit" id="unit" placeholder="Unit" value="<?php echo $unit; ?>" required />
                                    <div class="text">Unit : Anduonohu</div>
                                    <div class="invalid-feedback">Unit tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="int">Nomor HP <?php echo form_error('no_hp') ?></label>
                                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp" value="<?php echo $no_hp; ?>" required />
                                    <div class="text">Contoh : 0812234</div>
                                    <div class="invalid-feedback">Nomor HP tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="varchar">Password <?php echo form_error('password') ?></label>
                                    <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" required />
                                    <div class="text">Contoh : #81@234</div>
                                    <div class="invalid-feedback">Password tidak boleh kosong</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" /> 
                            <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                            <a href="<?php echo site_url('c_user') ?>" class="btn btn-default">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>