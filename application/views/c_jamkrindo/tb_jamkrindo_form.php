<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">TAMBAH DATA SURAT KLAIM</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Input Data Surat Klaim</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Surat Klaim</h3>
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
                                    <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" required />
                                    <div class="text">Contoh : Jl. Ahmad Yani</div>
                                    <div class="invalid-feedback">Alamat tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="int">No KTP <?php echo form_error('no_ktp') ?></label>
                                    <input type="number" class="form-control" name="no_ktp" id="no_ktp" placeholder="No Ktp" value="<?php echo $no_ktp; ?>" required />
                                    <div class="text">Contoh : 7471001</div>
                                    <div class="invalid-feedback">No KTP tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="varchar">No Rekening <?php echo form_error('no_rek') ?></label>
                                    <input type="text" class="form-control" name="no_rek" id="no_rek" placeholder="No Rek" value="<?php echo $no_rek; ?>" required />
                                    <div class="text">Contoh : 4927-01-01</div>
                                    <div class="invalid-feedback">No Rekening tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="varchar">No SPH <?php echo form_error('no_sph') ?></label>
                                    <input type="text" class="form-control" name="no_sph" id="no_sph" placeholder="No Sph" value="<?php echo $no_sph; ?>" required />
                                    <div class="text">Contoh : PK001A</div>
                                    <div class="invalid-feedback">No SPH tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="varchar">No Sertifikat <?php echo form_error('no_sertif') ?></label>
                                    <input type="text" class="form-control" name="no_sertif" id="no_sertif" placeholder="No Sertif" value="<?php echo $no_sertif; ?>" required />
                                    <div class="text">Contoh : KR2 2023 01</div>
                                    <div class="invalid-feedback">No Sertifikat tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="date">Tanggal Sertifikat <?php echo form_error('tgl_sertif') ?></label>
                                    <input type="date" class="form-control" name="tgl_sertif" id="tgl_sertif" placeholder="Tgl Sertif" value="<?php echo $tgl_sertif; ?>" required />
                                    <div class="text">Contoh : 2023-05-01</div>
                                    <div class="invalid-feedback">No Rekening tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="int">Plafond <?php echo form_error('plafon') ?></label>
                                    <input type="number" class="form-control" name="plafon" id="plafon" placeholder="Plafon" value="<?php echo $plafon; ?>" required />
                                    <div class="text">Contoh : 1000000</div>
                                    <div class="invalid-feedback">Plafond tidak boleh kosong</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-4">
                                    <label for="int">Nilai Penjaminan <?php echo form_error('nilai_penjaminan') ?></label>
                                    <input type="number" class="form-control" name="nilai_penjaminan" id="nilai_penjaminan" placeholder="Nilai Penjaminan" value="<?php echo $nilai_penjaminan; ?>" required />
                                    <div class="text">Contoh : 1000000</div>
                                    <div class="invalid-feedback">No Rekening tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="int">Payoff <?php echo form_error('payoff') ?></label>
                                    <input type="number" class="form-control" name="payoff" id="payoff" placeholder="Payoff" value="<?php echo $payoff; ?>" required />
                                    <div class="text">Contoh : 1000000</div>
                                    <div class="invalid-feedback">Payoff tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="int">Pokok Kredit <?php echo form_error('pokok_kredit') ?></label>
                                    <input type="number" class="form-control" name="pokok_kredit" id="pokok_kredit" placeholder="Pokok Kredit" value="<?php echo $pokok_kredit; ?>" required />
                                    <div class="text">Contoh : 1000000</div>
                                    <div class="invalid-feedback">Pokok Kredit tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="int">Tunggakan Bunga <?php echo form_error('tunggakan_bunga') ?></label>
                                    <input type="number" class="form-control" name="tunggakan_bunga" id="tunggakan_bunga" placeholder="Tunggakan Bunga" value="<?php echo $tunggakan_bunga; ?>" required />
                                    <div class="text">Contoh : 1000000</div>
                                    <div class="invalid-feedback">Tunggakan Bunga tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="varchar">Nama Kaunit <?php echo form_error('nama_kaunit') ?></label>
                                    <input type="text" class="form-control" name="nama_kaunit" id="nama_kaunit" placeholder="Nama Kaunit" value="<?php echo $nama_kaunit; ?>" required />
                                    <div class="text">Contoh : Ani</div>
                                    <div class="invalid-feedback">Nama Kaunit tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="varchar">Nama Mantri <?php echo form_error('nama_mantri') ?></label>
                                    <input type="text" class="form-control" name="nama_mantri" id="nama_mantri" placeholder="Nama Mantri" value="<?php echo $nama_mantri; ?>" required />
                                    <div class="text">Contoh : Budi</div>
                                    <div class="invalid-feedback">Nama Mantri tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="varchar">Nama CS <?php echo form_error('nama_cs') ?></label>
                                    <input type="text" class="form-control" name="nama_cs" id="nama_cs" placeholder="Nama Cs" value="<?php echo $nama_cs; ?>" required />
                                    <div class="text">Contoh : Ani</div>
                                    <div class="invalid-feedback">Nama CS tidak boleh kosong</div>
                                </div>
                                <div class="mb-4">
                                    <label for="date">Tanggal <?php echo form_error('tgl') ?></label>
                                    <input type="date" class="form-control" name="tgl" id="tgl" placeholder="Tgl" value="<?php echo $tgl; ?>" required />
                                    <div class="text">Contoh : 2023-05-01</div>
                                    <div class="invalid-feedback">Tanggal tidak boleh kosong</div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
                            <button type="submit" class="btn btn-primary mr-3"><?php echo $button ?></button> 
                            <a href="<?php echo site_url('c_jamkrindo') ?>" class="btn btn-default">Cancel</a>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>