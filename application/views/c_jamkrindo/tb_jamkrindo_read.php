<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">DATA SURAT KLAIM</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Data Surat Klaim</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

	<section class="content">
        <div class="container-fluid"> 
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Surat Klaim</h3>
                </div>
                <div class="card-body">     
					<table class="table">
						<tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
						<tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
						<tr><td>No KTP</td><td><?php echo $no_ktp; ?></td></tr>
						<tr><td>No Rekeking</td><td><?php echo $no_rek; ?></td></tr>
						<tr><td>No SPH</td><td><?php echo $no_sph; ?></td></tr>
						<tr><td>No Sertifikat</td><td><?php echo $no_sertif; ?></td></tr>
						<tr><td>Tanggal Sertifikat</td><td><?php echo $tgl_sertif; ?></td></tr>
						<tr><td>Plafon</td><td><?php echo $plafon; ?></td></tr>
						<tr><td>Nilai Penjaminan</td><td><?php echo $nilai_penjaminan; ?></td></tr>
						<tr><td>Payoff</td><td><?php echo $payoff; ?></td></tr>
						<tr><td>Pokok Kredit</td><td><?php echo $pokok_kredit; ?></td></tr>
						<tr><td>Tunggakan Bunga</td><td><?php echo $tunggakan_bunga; ?></td></tr>
						<tr><td>Nama Kaunit</td><td><?php echo $nama_kaunit; ?></td></tr>
						<tr><td>Nama Mantri</td><td><?php echo $nama_mantri; ?></td></tr>
						<tr><td>Nama Cs</td><td><?php echo $nama_cs; ?></td></tr>
						<tr><td>Tanggal</td><td><?php echo $tgl; ?></td></tr>
						<tr><td></td><td><a href="<?php echo site_url('c_jamkrindo') ?>" class="btn btn-default">Cancel</a></td></tr>
					</table>
				</div>
            </div>
        </div>
    </section>
</div>