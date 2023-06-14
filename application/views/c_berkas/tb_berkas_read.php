<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">DATA BERKAS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Data Berkas</li>
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
                    <table class="table">
                        <tr><td>No Rek</td><td><?php echo $no_rek; ?></td></tr>
                        <tr><td>Nama Debitur</td><td><?php echo $nama_debitur; ?></td></tr>
                        <tr><td>Plafond</td><td><?php echo $plafond; ?></td></tr>
                        <tr><td>Nama Mantri</td><td><?php echo $nama_mantri; ?></td></tr>
                        <tr><td>Lemari</td><td><?php echo $lemari; ?></td></tr>
                        <tr><td>Rak</td><td><?php echo $rak; ?></td></tr>
                        <tr><td>No Berkas</td><td><?php echo $no_berkas; ?></td></tr>
                        <tr><td></td><td><a href="<?php echo site_url('c_berkas') ?>" class="btn btn-default">Cancel</a></td></tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>