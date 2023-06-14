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
                    <table class="table">
                        <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
                        <tr><td>Username</td><td><?php echo $username; ?></td></tr>
                        <tr><td>Level</td><td><?php echo $level; ?></td></tr>
                        <tr><td>Unit</td><td><?php echo $unit; ?></td></tr>
                        <tr><td>No Hp</td><td><?php echo $no_hp; ?></td></tr>
                        <tr><td>Password</td><td><?php echo $password; ?></td></tr>
                        <tr><td></td><td><a href="<?php echo site_url('c_user') ?>" class="btn btn-default">Cancel</a></td></tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>