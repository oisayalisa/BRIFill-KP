<!doctype html>
<html>

<head>
    <title>harviacode.com - codeigniter crud generator</title>
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" /> -->
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>" />
    <style>
        .dataTables_wrapper {
            min-height: 450px;
            margin-top: 55px;
        }

        .dataTables_processing {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            margin-left: -50%;
            margin-top: -25px;
            padding-top: 20px;
            text-align: center;
            font-size: 1.2em;
            color: grey;
        }
    </style>
</head>

<body>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">INDEXING BERKAS</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Data Berkas</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center">
                        <div style="margin-top: 4px" id="message">
                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : '';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Index Data Berkas</h2>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <?php echo anchor(site_url('c_berkas/create'), 'Create', 'class="btn btn-primary"'); ?>
                            <?php echo anchor(site_url('c_berkas/excel'), 'Excel', 'class="btn btn-primary"'); ?>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="mytable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Rek</th>
                                        <th>Nama Debitur</th>
                                        <th>Plafond</th>
                                        <th>Nama Mantri</th>
                                        <th>Lemari</th>
                                        <th>Rak</th>
                                        <th>No Berkas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <style>
        /* .row {
            display: none;
        } */

        .dataTables_info {
            display: none;
        }

        .dataTables_paginate {
            display: none;
        }

        .dataTables_length {
            display: none;
        }

        .dataTables_filter {
            display: none;
        }

        table.dataTable {
            clear: both;
            margin-top: -90px !important;
            /* margin-bottom: 6px !important; */
            max-width: none !important;
        }
        @media (max-width: 1341px){
            .dataTables_wrapper {
                margin-top: 100px;
            }
        }
    </style>


    <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
    <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
                return {
                    "iStart": oSettings._iDisplayStart,
                    "iEnd": oSettings.fnDisplayEnd(),
                    "iLength": oSettings._iDisplayLength,
                    "iTotal": oSettings.fnRecordsTotal(),
                    "iFilteredTotal": oSettings.fnRecordsDisplay(),
                    "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                    "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                };
            };

            var t = $("#mytable").dataTable({
                initComplete: function() {
                    var api = this.api();
                    $('#mytable_filter input')
                        .off('.DT')
                        .on('keyup.DT', function(e) {
                            if (e.keyCode == 13) {
                                api.search(this.value).draw();
                            }
                        });
                },
                oLanguage: {
                    sProcessing: "loading..."
                },
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "c_berkas/json",
                    "type": "POST"
                },
                columns: [{
                        "data": "id_berkas",
                        "orderable": false
                    },
                    {
                        "data": "no_rek"
                    },
                    {
                        "data": "nama_debitur"
                    },
                    {
                        "data": "plafond"
                    },
                    {
                        "data": "nama_mantri"
                    },
                    {
                        "data": "lemari"
                    },
                    {
                        "data": "rak"
                    },
                    {
                        "data": "no_berkas"
                    },
                    {
                        "data": "action",
                        "orderable": false,
                        "className": "text-center"


                    }
                ],
                order: [
                    [0, 'desc']
                ],
                rowCallback: function(row, data, iDisplayIndex) {
                    var info = this.fnPagingInfo();
                    var page = info.iPage;
                    var length = info.iLength;
                    var index = page * length + (iDisplayIndex + 1);
                    $('td:eq(0)', row).html(index);
                }
            });
        });
    </script>
</body>

</html>