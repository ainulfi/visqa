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
        <h4 class="card-header mt-0">Detail Data Rapor Pendidikan Provinsi Bengkulu Tahun 2023</h4>
        <?= form_open('rp2023_bengkulu/deletemultiple', ['class' => 'formhapus']) ?>
        <div class="card-body">
            <button type="button" class="btn btn-primary" id="tomboltambah">
                <i class="fa fa-plus-circle"></i> Tambah Data
            </button>

            <button type="submit" class="btn btn-sm btn-danger tombolHapusBanyak">
                <i class="fa fa-trash-o"></i> Hapus Banyak
            </button>

            <p class="card-text">
                <table class="table table-bordered table-striped display nowrap" style="width:100%;" id="data_rpbengkulu2023">
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox" id="centangSemua">
                            </th>
                            <th>No</th>
                            <th>NPSN</th>
                            <th>Nama Satpen</th>
                            <!-- <th>Jenis</th>
                            <th>Status</th> -->
                            <th>Kab / Kota</th>
                            <th>Kecamatan</th>
                            <!-- <th style="word-wrap: break-word">A.1 Kemampuan literasi</th>
                            <th style="word-wrap: break-word">A.2 Kemampuan numerasi</th>
                            <th style="word-wrap: break-word">A.3 Karakter</th>
                            <th style="word-wrap: break-word">A.4 Penyerapan Lulusan</th>
                            <th style="word-wrap: break-word">D.1 Kualitas pembelajaran</th>
                            <th style="word-wrap: break-word">D.4 Iklim keamanan satuan pendidikan</th>
                            <th style="word-wrap: break-word">D.8 Iklim Kebinekaan</th>
                            <th style="word-wrap: break-word">D.17 Link and match dengan dunia kerja</th>
                            <th>Skor</th> -->
                            <th>Persentase</th>
                            <th>Predikat</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </p>
        </div>
        <?= form_close(); ?>
    </div>
</div>
<div class="viewmodal" style="display: none;"></div>
<script>
function tampildatarapor() {
    table = $('#data_rpbengkulu2023').DataTable({
        responsive: true,
        "destroy": true,
        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            "url": "<?= site_url('rp2023_bengkulu/ambildata') ?>",
            "type": "POST"
        },


        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "width": 5
        }],

    });
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
            url: "<?= site_url('rp2023_bengkulu/formtambah') ?>",
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
        url: "<?= site_url('rp2023_bengkulu/lihatdata') ?>",
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
        url: "<?= site_url('rp2023_bengkulu/formedit') ?>",
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
                url: "<?= site_url('rp2023_bengkulu/hapus') ?>",
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