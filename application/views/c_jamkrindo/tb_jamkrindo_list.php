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
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="m-0">DATA SURAT KLAIM</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="Dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Data Surat Klaim</li>
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
                        <h2 class="card-title">Surat Klaim Jamkrindo</h2>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <?php echo anchor(site_url('c_jamkrindo/create'), 'Create', 'class="btn btn-primary"'); ?>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="mytable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No Rek</th>
                                        <th>Plafon</th>
                                        <th>Nilai Penjaminan</th>
                                        <th>Payoff</th>
                                        <th>Nama Mantri</th>
                                        <th>Tanggal</th>
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
            margin-top: -80px !important;
            /* margin-bottom: 6px !important; */
            max-width: none !important;
        }

        @media (max-width: 1341px){
            .dataTables_wrapper {
                margin-top: 100px;
            }
        }
    </style>

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
                    "url": "c_jamkrindo/json",
                    "type": "POST"
                },
                columns: [{
                        "data": "id",
                        "orderable": false
                    }, {
                        "data": "nama"
                    }, {
                        "data": "no_rek"
                    }, {
                        "data": "plafon"
                    }, {
                        "data": "nilai_penjaminan"
                    }, {
                        "data": "payoff"
                    }, {
                        "data": "nama_mantri"
                    }, {
                        "data": "tgl"
                    },
                    {
                        "data": "action",
                        "orderable": false,
                        "className": "text-center"

                    }
                ],
            });
        });
    </script>
</body>

</html>