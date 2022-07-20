<?= $this->extend('layouts/page_layout'); ?>
<?= $this->section('content'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">

<!-- SweetAlert2 -->
<link rel="stylesheet" href="<?= base_url('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">


<div class="row justify-content-center align-items-center">
    <div class="col-md-12">
        <div class="card card-info shadow">
            <div class="card-header">
                <h3 class="card-title">Berita Acara</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="tableBerita" class="table table-bordered table-striped table-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Nik</th>
                            <th>Nama Karyawan</th>
                            <th>Alamat</th>
                            <th>Department</th>
                            <th>Berita</th>
                            <th>Penanggung Jawab</th>
                            <th>Keterangan</th>
                            <th>Saksi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Nik</th>
                            <th>Nama Karyawan</th>
                            <th>Alamat</th>
                            <th>Department</th>
                            <th>Berita</th>
                            <th>Penanggung Jawab</th>
                            <th>Keterangan</th>
                            <th>Saksi</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="modalBerita" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">BERITA ACARA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
                <div class="ribbon-wrapper">
                    <div class="ribbon bg-warning" id="theRibbon">
                    </div>
                </div>
            </div>
            <form id="formBerita" name="formBerita">
                <input type="hidden" id="id_berita">
                <div class="modal-body bg-light">
                    <div class="ml-2">
                        <h6><i> Yang Bertanda tangan dibawah ini : </i></h6>
                    </div>
                    <div class="col-12 row md-1">
                        <div class="col-6">
                            <div class="form-group col-sm-12">
                                <label class="col-form-label">Nik</label>
                                <input type="text" id="nik" name="nik" class="form-control form-control-sm">
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-form-label">Nama</label>
                                <input type="text" id="nama_karyawan" name="nama_karyawan"
                                    class="form-control form-control-sm">
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-form-label">Department</label>
                                <input type="text" id="department" name="department"
                                    class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group col-sm-12">
                                <label class="col-form-label">Alamat</label>
                                <textarea id="alamat_karyawan" name="alamat_karyawan"
                                    class="form-control form-control-sm" rows="3" placeholder="Alamat. . ."></textarea>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-form-label">Detail Berita</label>
                                <textarea id="detail_berita" name="detail_berita" class="form-control form-control-sm"
                                    rows="4" placeholder="Detail berita. . ."></textarea>
                            </div>
                        </div>
                    </div>
                    <hr style="background-color: white;">
                    <div class="ml-2 md-2">
                        <h6><i> Yang Bertanda tangan dibawah ini </i></h6>
                    </div>
                    <div class="col-12 row md-1">
                        <div class="form-group col-sm-6">
                            <label class="col-form-label">Nama</label>
                            <select id="karyawan_ga_id" name="karyawan_ga_id"
                                class="form-control form-control-sm"></select>
                        </div>
                        <!-- <div class="form-group col-sm-6">
                            <label class="col-form-label">Department</label>
                            <input type="hidden" id="karyawan_ga_id" name="karyawan_ga_id"
                                class="form-control form-control-sm">
                        </div> -->
                        <div class="form-group col-12 md-1">
                            <label class="col-form-label">Keterangan</label>
                            <textarea id="keterangan_security" name="keterangan_security"
                                class="form-control form-control-sm" rows="3" placeholder="Keterangan. . ."></textarea>
                        </div>
                        <div class="form-group col-12">
                            <label class="col-form-label">Saksi</label>
                            <input type="text" id="nama_saksi" name="nama_saksi" class="form-control form-control-sm">
                        </div>
                    </div>

                </div>
                <div class="modal-footer bg-light">
                    <button type="submit" id="btnSaveBerita" class="btn btn-info"><i
                            class="fa fa-upload"></i>&nbsp;Save</button>
                    <button type="button" id="btnCancelBerita" class="btn btn-danger" data-dismiss="modal"
                        aria-label="Close"><i class="fa fa-close"></i>&nbsp;Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <!-- DataTable -->
    <script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/jszip/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/pdfmake/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/pdfmake/vfs_fonts.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>

    <!-- Jquery validation -->
    <script src="<?= base_url('plugins/jquery-validation/jquery.validate.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/jquery-validation/additional-methods.min.js'); ?>"></script>

    <!-- Sweetalert2 -->
    <script src="<?= base_url('plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>

    <script>
    const Toast = Swal.mixin({
        toast: false,
        position: 'center',
        showConfirmButton: true,
    });
    $.fn.dataTable.ext.errMode = 'none';

    const dataKaryawan = () => {
        $.ajax({
            type: 'GET',
            url: '<?= base_url("MasterData/daftarKaryawan"); ?>',
            dataType: 'json'
        }).done(function(dtKaryawan) {
            console.log('dtKaryawan: ', dtKaryawan);
            if (dtKaryawan) {
                $('#karyawan_ga_id').append($('<option>', {
                    value: "",
                    text: "--Pilih Security--"
                }));
                $.each(dtKaryawan.data, function(i, item) {
                    $('#karyawan_ga_id').append($('<option>', {
                        value: item.id,
                        text: item.nama_lengkap
                    }))
                })
            }
        })
    }
    dataKaryawan();

    const tableBerita = $('#tableBerita').on('error.dt', function(e, settings, techNote, message) {
        console.log(message);
        // window.open('</?= base_url("auth/getAuth"); ?>', '_self')
    }).DataTable({
        "dom": 'rf<"toolbar">tip',
        dom: 'flrB<"toolbar">tip',
        "dom": 'lrfBtip',
        "buttons": [{
            text: 'Add New',
            action: function(e, dt, node, config) {
                $('#theRibbon').text('Add New');
                $('#id_berita').val('');
                $('#karyawan_ga_id').val('');
                $('#nik').val('');
                $('#nama_karyawan').val('');
                $('#alamat_karyawan').val('');
                $('#department').val('');
                $('#detail_berita').val('');
                $('#keterangan_security').val('');
                $('#nama_saksi').val('');
                $('#create_date').val('');
                $('#modalBerita').modal('show');
            }
        }],
        "paging": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "Scroll": true,
        "ajax": {
            url: '<?= base_url("News/daftarBerita"); ?>',
            type: 'GET',
            dataType: 'json',
        },
        "columns": [{
                'data': 'id_berita'
            },
            {
                'data': 'create_date'
            },
            {
                'data': 'nik'
            },
            {
                'data': 'nama_karyawan'
            },
            {
                'data': 'alamat_karyawan'
            },
            {
                'data': 'department'
            },
            {
                'data': 'detail_berita'
            },
            {
                'data': 'nama_lengkap'
            },
            {
                'data': 'keterangan_security'
            },
            {
                'data': 'nama_saksi'
            },
            {
                'data': null
            },
        ],
        "columnDefs": [{
                "targets": [0],
                "visible": false
            },
            {
                "targets": [10],
                "render": function(data, type, row, meta) {
                    return '<button class="btn btn-success btn-sm mx-1 btnEditBerita"><i class="fas fa-edit"></i>Edit</button>' +
                        '<button class="btn btn-danger btn-sm mx-1 btnDeleteBerita"><i class="fas fa-trash"></i>Delete</button>';
                }
            }
        ],

    });

    $('div.toolbar').html(
        '<button id="btnAddNewBerita" class="btn btn-warning btn-sm"><i class="fas fa-plus"></i>Add New</button>');

    $('#tableBerita tbody').on('click', 'button.btnEditBerita', function() {
        let selectedRow = tableBerita.row($(this).parents('tr')).data();
        console.log('selectedRow: ', selectedRow);
        $('#id_berita').val(selectedRow.id_berita);
        $('#create_date').val(selectedRow.create_date);
        $('#nik').val(selectedRow.nik);
        $('#nama_karyawan').val(selectedRow.nama_karyawan);
        $('#alamat_karyawan').val(selectedRow.alamat_karyawan);
        $('#department').val(selectedRow.department);
        $('#detail_berita').val(selectedRow.detail_berita);
        $('#karyawan_ga_id').val(selectedRow.karyawan_ga_id);
        $('#keterangan_security').val(selectedRow.keterangan_security);
        $('#nama_saksi').val(selectedRow.nama_saksi);
        $('#theRibbon').text('Edit');
        $('#modalBerita').modal('show');
    });

    $('#tableBerita tbody').on('click', 'button.btnDeleteBerita', function() {
        let selectedRow = tableBerita.row($(this).parents('tr')).data();

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Yakin akan menghapus?',
            text: "Data yang sudah dihapus tidak bisa dikembalikan lagi!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Ya, hapus saja!',
            cancelButtonText: 'Tidak, batalkan!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'DELETE',
                    url: '<?= base_url("News/Berita/delete"); ?>/' + selectedRow.id_berita,
                    dataType: 'json'
                }).done(function(dtReturn) {
                    if (dtReturn.status == 200) {
                        swalWithBootstrapButtons.fire(
                            'sudah dihapus!',
                            'Data sudah dihapus.',
                            'success'
                        );
                        loadTable();
                    }
                })
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Dibatalkan',
                    'Data tidak jadi dihapus :)',
                    'error'
                )
            }
        })
    });

    $('form[id="formBerita"]').validate({
        rules: {
            berita: {
                'required': true
            },
        },
        errorClass: 'error fail-alert',
        validClass: 'valid success-alert',
        messages: {
            berita: {
                required: 'Harus diisi!'
            },
        },
        submitHandler: function(form, e) {
            e.preventDefault();

            let data = $(form).serialize();

            const url = $('#theRibbon').text() == 'Add New' ? '<?= base_url("News/Berita/create"); ?>' :
                '<?= base_url("News/Berita/update"); ?>/' + $('#id_berita').val();
            const method = $('#theRibbon').text() == 'Add New' ? 'POST' : 'PUT';

            $.ajax({
                type: method,
                url: url,
                data: data,
                dataType: 'json'
            }).done(function(returnData) {
                console.log('returnData: ', returnData);
                if (returnData.status == 400) {
                    Toast.fire({
                        icon: 'warning',
                        title: returnData.message
                    });
                } else {
                    Toast.fire({
                        icon: 'success',
                        title: 'Berita Acara berhasil disimpan.',
                        didClose: () => {
                            $('#berita').focus();
                            $('#theRibbon').text() == 'Edit' ? $('#modalBerita').modal(
                                'hide') : $('#berita').val('');
                            loadTable();
                        }
                    });
                }
            })
        }
    });

    function loadTable() {
        tableBerita.ajax.reload();
    }
    </script>
    <?= $this->endSection(); ?>