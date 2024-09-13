<div class="modal fade" id="modallihat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Lihat Detail Data Rapor Satpen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('rp2023_bengkulu/simpandata', ['class' => 'formsimpan']) ?>
            <div class="pesan" style="display: none;"></div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Data ID</label>
                    <div class="col-sm-4">
                        <input type="text" name="id" id="id" class="form-control" maxlength="7" readonly value="<?= $id ?>">
                    </div>
                    <label for="npsn" class="col-sm-2 col-form-label">NPSN</label>
                    <div class="col-sm-4">
                        <input type="text" name="npsn" id="npsn" class="form-control" maxlength="7" readonly value="<?= $npsn ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_satpen" class="col-sm-2 col-form-label">Nama Satpen</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_satpen" id="nama_satpen" class="form-control" readonly value="<?= $nama_satpen ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_satpen" class="col-sm-2 col-form-label">Jenis Satpen</label>
                    <div class="col-sm-4">
                        <input type="text" name="jenis_satpen" id="jenis_satpen" class="form-control" maxlength="7" readonly value="<?= $jenis_satpen ?>">
                    </div>
                    <label for="status_satpen" class="col-sm-2 col-form-label">Status Satpen</label>
                    <div class="col-sm-4">
                        <input type="text" name="status_satpen" id="status_satpen" class="form-control" maxlength="7" readonly value="<?= $status_satpen ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kab_kota" class="col-sm-2 col-form-label">Kab / Kota</label>
                    <div class="col-sm-4">
                        <input type="text" name="kab_kota" id="kab_kota" class="form-control" maxlength="7" readonly value="<?= $kab_kota ?>">
                    </div>
                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-4">
                        <input type="text" name="kecamatan" id="kecamatan" class="form-control" maxlength="7" readonly value="<?= $kecamatan ?>">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="a1" class="col-sm-2 col-form-label">A.1 Kemampuan literasi</label>
                    <div class="col-sm-4">
                        <input type="text" name="a1" id="a1" class="form-control" maxlength="7" readonly value="<?= $a1 ?>">
                    </div>
                    <label for="a2" class="col-sm-2 col-form-label">A.2 Kemampuan numerasi</label>
                    <div class="col-sm-4">
                        <input type="text" name="a2" id="a2" class="form-control" maxlength="7" readonly value="<?= $a2 ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="a3" class="col-sm-2 col-form-label">A.3 Karakter</label>
                    <div class="col-sm-4">
                        <input type="text" name="a3" id="a3" class="form-control" maxlength="7" readonly value="<?= $a3 ?>">
                    </div>
                    <label for="a4" class="col-sm-2 col-form-label">A.4 Penyerapan lulusan</label>
                    <div class="col-sm-4">
                        <input type="text" name="a4" id="a4" class="form-control" maxlength="7" readonly value="<?= $a4 ?>">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="d1" class="col-sm-2 col-form-label">D.1 Kualitas pembelajaran</label>
                    <div class="col-sm-4">
                        <input type="text" name="d1" id="d1" class="form-control" maxlength="7" readonly value="<?= $d1 ?>">
                    </div>
                    <label for="d4" class="col-sm-2 col-form-label">D.4 Iklim keamanan sekolah</label>
                    <div class="col-sm-4">
                        <input type="text" name="d4" id="d4" class="form-control" maxlength="7" readonly value="<?= $d4 ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="d8" class="col-sm-2 col-form-label">D.8 Iklim Kebinekaan</label>
                    <div class="col-sm-4">
                        <input type="text" name="d8" id="d8" class="form-control" maxlength="7" readonly value="<?= $d8 ?>">
                    </div>
                    <label for="d17" class="col-sm-2 col-form-label">D.17 Link and match-dunia kerja</label>
                    <div class="col-sm-4">
                        <input type="text" name="d17" id="d17" class="form-control" maxlength="7" readonly value="<?= $d17 ?>">
                    </div>
                </div>
                <hr>
                <div class="form-group row">
                    <label for="skor" class="col-sm-2 col-form-label">Skor</label>
                    <div class="col-sm-2">
                        <input type="text" name="skor" id="skor" class="form-control" maxlength="7" readonly value="<?= $skor ?>">
                    </div>
                    <label for="persen" class="col-sm-2 col-form-label">Persentase</label>
                    <div class="col-sm-2">
                        <input type="text" name="persen" id="persen" class="form-control" maxlength="7" readonly value="<?= $persen ?>">
                    </div>
                    <label for="predikat" class="col-sm-2 col-form-label">Predikat</label>
                    <div class="col-sm-2">
                        <input type="text" name="predikat" id="predikat" class="form-control" maxlength="7" readonly value="<?= $predikat ?>">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('.formsimpan').submit(function(e) {
        $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                if (response.error) {
                    $('.pesan').html(response.error).show();
                }

                if (response.sukses) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: response.sukses
                    });
                    tampildatarapor();
                    $('#modallihat').modal('hide');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
        return false;
    });
});
</script>