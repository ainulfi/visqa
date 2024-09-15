<!-- DataTables -->
<link href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />
<link href="<?= base_url() ?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="<?= base_url() ?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />
<link href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css" rel="stylesheet"
    type="text/css" />
<link href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css" rel="stylesheet"
    type="text/css" />

<!-- Required datatable js -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<!-- <div class="col-lg-12">
    <div class="card">
        <p>text</p>
    </div>
</div> -->

<div class="col-lg-12">
    <div class="card m-b-30">
        <h4 class="card-header mt-0">Capaian Data Rapor Pendidikan Terbaru di Wilayah Binaan BBPPMPV Bidang Mesin dan Teknik Industri</h4>
        
        <div class="card-body">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">                       
                            <input type="text" class="small form-control global_filter" id="global_filter" placeholder="Masukkan Kata Kunci ...">                                       
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg-3 col-sm-3">
                        <div class="form-group">                        
                            <input type="text" class="form-control npsn" id="npsn" data-custom_column="1" placeholder="NPSN">
                        </div>

                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="form-group">                        
                            <input type="text" class="form-control nama_satpen" id="nama_satpen" data-custom_column="2" placeholder="Nama Satpen">
                        </div>

                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="form-group">                        
                            <input type="text" class="form-control kab_kota" id="kab_kota" data-custom_column="3" placeholder="Kab / Kota , Provinsi">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3">
                        <div class="form-group">                        
                            <input type="text" class="form-control predikat" id="predikat" data-custom_column="4" placeholder="Predikat">
                        </div>
                    </div> -->
                </div>                
            </div>
        </div>
            <p class="card-text">
                <table class="table table-bordered table-striped display nowrap" style="width:100%;" id="data_rp_all">
                    <thead>
                        <tr>
                            <!-- <th>
                                <input type="checkbox" id="centangSemua">
                            </th> -->
                            <th>No</th>
                            <th>NPSN</th>
                            <th>Nama Satpen</th>
                            <th>Kab / Kota , Provinsi</th>
                            <th>Persentase</th>
                            <th>Predikat</th>
                            <th>Tahun</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </p>
        </div>
    </div>
</div>
<div class="viewmodal" style="display: none;"></div>
<script>
function tampildatarapor() {
    table = $('#data_rp_all').DataTable({
        responsive: true,
        "destroy": true,
        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            "url": "<?= base_url('rp_all/ambildata') ?>",
            "type": "POST"
            // "data": function ( data ) {
            //         data.npsn = $('#npsn').val();
            //         data.nama_satpen = $('#nama_satpen').val();
            //         data.kab_kota = $('#kab_kota').val();
            //         data.predikat = $('#predikat').val();
            //     }
        },

        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "width": 5
        }],
    });

    // define method global search
        function filterGlobal(v) {
            jQuery('#data_rp_all').DataTable().search(
                    v,
                    false,
                    false
                    ).draw();
        }

        // define method global search
        // function filterNPSN(v) {
        //     jQuery('#data_rp_all').DataTable().search(
        //             v
        //             .columns(1)
        //             .search(this.value)
        //             ).draw();
        // }
        
        // filter keyword
        jQuery('input.global_filter').on('keyup click', function () {
            var v = jQuery(this).val();    
            filterGlobal(v);
        });

        // filter keyword
        jQuery('input.npsn').on('keyup click', function () {
            jQuery('#data_rp_all').DataTable().search(
                    $('#npsn').val(),
                    false,
                    false
                    ).draw();
        });

        jQuery('input.nama_satpen').on('keyup click', function () {
            jQuery('#data_rp_all').DataTable().search(
                    $('#nama_satpen').val(),
                    false,
                    false
                    ).draw();
        });

        jQuery('input.kab_kota').on('keyup click', function () {
            jQuery('#data_rp_all').DataTable().search(
                    $('#kab_kota').val(),
                    false,
                    false
                    ).draw();
        });

        jQuery('input.predikat').on('keyup click', function () {
            jQuery('#data_rp_all').DataTable().search(
                    $('#predikat').val(),
                    false,
                    false
                    ).draw();
        });

        // jQuery('input.column_filter').on('keyup click', function () {
        //     jQuery('#data_rp_all').DataTable().ajax.reload();
        // });
}




$(document).ready(function() {

    $('#centangSemua').click(function(e) {
        if ($(this).is(":checked")) {
            $('.centangNpsn').prop('checked', true);
        } else {
            $('.centangNpsn').prop('checked', false);
        }
    });

    tampildatarapor();

    $('#centangSemua').click(function(e) {
        if ($(this).is(':checked')) {
            $(".centangItem").prop("checked", true);
        } else {
            $(".centangItem").prop("checked", false);
        }
    });

    $('#tomboltambah').click(function(e) {
        $.ajax({
            url: "<?= site_url('rp_all/formtambah') ?>",
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modaltambah').on('shown.bs.modal', function(e) {
                        $('#npsn').focus();
                    })
                    $('#modaltambah').modal('show');
                }
            }
        });
    });

    $('.formhapus').submit(function(e) {
        e.preventDefault();

        let jmldata = $('.centangNpsn:checked');

        if (jmldata.length === 0) {
            Swal.fire({
                icon: 'warning',
                title: 'Perhatian',
                text: 'Maaf tidak ada yang bisa dihapus, silahkan dicentang !'
            })
        } else {
            Swal.fire({
                title: 'Hapus Data',
                text: `Ada ${jmldata.length} data rapor pendidikan yang akan dihapus, yakin ?`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "post",
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        dataType: "json",
                        success: function(response) {
                            if (response.sukses) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.sukses
                                })
                                tampildatarapor();
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(xhr.status + "\n" + xhr.responseText + "\n" +
                                thrownError);
                        }
                    });
                }
            })
        }
        return false;
    });
});

function lihat(npsn) {
    $.ajax({
        type: 'post',
        url: "<?= site_url('rp_all/lihatdata') ?>",
        data: {
            npsn: npsn
        },
        dataType: "json",
        success: function(response) {
            if (response.sukses) {
                $('.viewmodal').html(response.sukses).show();
                $('#modallihat').on('shown.bs.modal', function(e) {
                    $('#nama_satpen').focus();
                })
                $('#modallihat').modal('show');
            }
        }
    });
    // alert(id);
}

function edit(npsn) {
    $.ajax({
        type: 'post',
        url: "<?= site_url('rp_all/formedit') ?>",
        data: {
            npsn: npsn
        },
        dataType: "json",
        success: function(response) {
            if (response.sukses) {
                $('.viewmodal').html(response.sukses).show();
                $('#modaledit').on('shown.bs.modal', function(e) {
                    $('#nama_satpen').focus();
                })
                $('#modaledit').modal('show');
            }
        }
    });
}

function hapus(id) {
    Swal.fire({
        title: 'Hapus',
        text: `Yakin menghapus data rapor dari NPSN Sekolah =${id} ?`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: "post",
                url: "<?= site_url('rp_all/hapus') ?>",
                data: {
                    id: id,
                },
                dataType: "json",
                success: function(response) {
                    if (response.sukses) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Konfirmasi',
                            text: response.sukses
                        });
                        tampildatarapor();
                    }
                }
            });
        }
    })
}
</script>