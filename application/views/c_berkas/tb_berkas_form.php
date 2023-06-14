<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">TAMBAH DATA BERKAS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Input Data Berkas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Data Berkas</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo $action; ?>" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="mb-4">
                                    <label for="varchar">No Rekening <?php echo form_error('no_rek') ?></label>
                                    <input type="text" class="form-control" name="no_rek" id="no_rek" placeholder="No Rek" value="<?php echo $no_rek; ?>" required />
                                    <div class="text">Contoh : 4927-01-01</div>
                                    <div class="invalid-feedback">No Rekening tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="varchar">Nama Debitur <?php echo form_error('nama_debitur') ?></label>
                                    <input type="text" class="form-control" name="nama_debitur" id="nama_debitur" placeholder="Nama Debitur" value="<?php echo $nama_debitur; ?>" required />
                                    <div class="text">Contoh : Budi</div>
                                    <div class="invalid-feedback">Nama Debitur tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="int">Plafond <?php echo form_error('plafond') ?></label>
                                    <input type="number" class="form-control" name="plafond" id="plafond" placeholder="Plafond" value="<?php echo $plafond; ?>" />
                                    <div class="text">Contoh : 25000000</div>
                                    <div class="invalid-feedback">Plafond tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="varchar">Nama Mantri <?php echo form_error('nama_mantri') ?></label>
                                    <input type="text" class="form-control" name="nama_mantri" id="nama_mantri" placeholder="Nama Mantri" value="<?php echo $nama_mantri; ?>" required />
                                    <div class="text">Contoh : Budi</div>
                                    <div class="invalid-feedback">Nama Mantri tidak boleh kosong</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-4">
                                    <label for="varchar">Lemari <?php echo form_error('lemari') ?></label>
                                    <input type="text" class="form-control" name="lemari" id="lemari" placeholder="Lemari" value="<?php echo $lemari; ?>" required />
                                    <div class="text">Contoh : A</div>
                                    <div class="invalid-feedback">Lemari tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="int">Rak <?php echo form_error('rak') ?></label>
                                    <input type="number" class="form-control" name="rak" id="rak" placeholder="Rak" value="<?php echo $rak; ?>" required />
                                    <div class="text">Contoh : 1</div>
                                    <div class="invalid-feedback">Rak tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="int">No Berkas <?php echo form_error('no_berkas') ?></label>
                                    <input type="number" class="form-control" name="no_berkas" id="no_berkas" placeholder="No Berkas" value="<?php echo $no_berkas; ?>" required />
                                    <div class="text">Contoh : 1</div>
                                    <div class="invalid-feedback">No Berkas tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">

                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="hidden" name="id_berkas" value="<?php echo $id_berkas; ?>" />
                            <button type="submit" class="btn btn-primary mr-3"><?php echo $button ?></button>
                            <a href="<?php echo site_url('c_berkas') ?>" class="btn btn-default">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>