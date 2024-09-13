<?php
  $TrenBaikJabar = ((($SMK_PredikatBaikJabar2024 - $SMK_PredikatBaikJabar2023) / $countSMKPredikatAllJabar2024 )*100);
  $TrenSedangJabar = ((($SMK_PredikatSedangJabar2024 - $SMK_PredikatSedangJabar2023) / $countSMKPredikatAllJabar2024 )*100);
  $TrenKurangJabar = ((($SMK_PredikatKurangJabar2024 - $SMK_PredikatKurangJabar2023) / $countSMKPredikatAllJabar2024 )*100);

  $TrenBaikBengkulu = ((($SMK_PredikatBaikBengkulu2024 - $SMK_PredikatBaikBengkulu2023) / $countSMKPredikatAllBengkulu2024 )*100);
  $TrenSedangBengkulu = ((($SMK_PredikatSedangBengkulu2024 - $SMK_PredikatSedangBengkulu2023) / $countSMKPredikatAllBengkulu2024 )*100);
  $TrenKurangBengkulu = ((($SMK_PredikatKurangBengkulu2024 - $SMK_PredikatKurangBengkulu2023) / $countSMKPredikatAllBengkulu2024 )*100);

  $TrenBaikLampung = ((($SMK_PredikatBaikLampung2024 - $SMK_PredikatBaikLampung2023) / $countSMKPredikatAllLampung2024 )*100);
  $TrenSedangLampung = ((($SMK_PredikatSedangLampung2024 - $SMK_PredikatSedangLampung2023) / $countSMKPredikatAllLampung2024 )*100);
  $TrenKurangLampung = ((($SMK_PredikatKurangLampung2024 - $SMK_PredikatKurangLampung2023) / $countSMKPredikatAllLampung2024 )*100);
?>


<!-- Modal Bengkulu -->
<div class="modal fade" id="bengkuluModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h6 class="modal-title" id="exampleModalLabel">Informasi Penjaminan Mutu Wilayah Provinsi Bengkulu</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="pesan" style="display: none;"></div>
            <div class="modal-body">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card m-b-28">
                            <div class="card-body ">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-elevation-rise"></i>
                                        </div>
                                        <br>
                                        <span class="badge badge-primary text-center">Capaian <br> Baik</span>
                                    </div>
                                    <div class="col-7 align-self-center text-center">
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatBaikBengkulu2023"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">Tahun 2023</p>   
                                        </div>
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatBaikBengkulu2024"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">Tahun 2024</p>   
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span><?php echo abs(number_format(("$TrenBaikBengkulu"),2)) ?>%</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card m-b-28">
                            <div class="card-body ">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-pulse"></i>
                                        </div>
                                        <span class="badge badge-primary text-center">Capaian <br> Sedang</span>
                                    </div>
                                    <div class="col-7 align-self-center text-center">
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatSedangBengkulu2023"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">Tahun 2023</p>   
                                        </div>
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatSedangBengkulu2024"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">Tahun 2024</p>  
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span><?php echo abs(number_format(("$TrenSedangBengkulu"),2)) ?>%</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card m-b-28">
                            <div class="card-body ">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-elevation-decline"></i>  
                                        </div>
                                        <br>
                                        <span class="badge badge-primary text-center">Capaian <br> Kurang</span>
                                    </div>
                                    <div class="col-7 align-self-center text-center">
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatKurangBengkulu2023"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">Tahun 2023</p>   
                                        </div>
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatKurangBengkulu2024"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">Tahun 2024</p>  
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span><?php echo abs(number_format(("$TrenKurangBengkulu"),2)) ?>%</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            <div class="col-lg-12">
                  <div class="card m-b-28">
                    <h4 class="card-header card-title font-20 mt-0">Grafik Persentase Capaian Rapor Pendidikan SMK dengan Predikat Baik di Provinsi Bengkulu </h4>
                        <div class="card-body">
                            <canvas id="ChartBengkuluBaik" style="width: 500px; height: 150px;"></canvas>
                           
                        </div>
                  </div>
                </div>
                <br>
                  <div id="div_tbl_bengkulu23" style="display:none">
                    <div class="col-lg-12">
                        <div class="general-label">
                            <hr>
                            <h6 style="text-align: center;">Data Predikat Baik Tahun 2023</h6>
                            <hr>
                            <table class="table table-bordered table-striped display wrap" style="width:100%;" id="databaik_bengkulu2023">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NPSN</th>
                                        <th>Nama Satpen</th>
                                        <th>Kab / Kota</th>
                                        <th>Persentase</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>        
                        </div>
                    </div>
                </div>
                <div id="div_tbl_bengkulu24" style="display:none">
                    <div class="col-lg-12">
                        <div class="general-label">
                            <hr>
                            <h6 style="text-align: center;">Data Predikat Baik Tahun 2024</h6>
                            <hr>
                            <table class="table table-bordered table-striped display wrap" style="width:100%;" id="databaik_bengkulu2024">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NPSN</th>
                                        <th>Nama Satpen</th>
                                        <th>Kab / Kota</th>
                                        <th>Persentase</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>         
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- Modal Lampung -->
<div class="modal fade" id="lampungModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h6 class="modal-title" id="exampleModalLabel">Informasi Penjaminan Mutu Wilayah Provinsi Lampung</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="pesan" style="display: none;"></div>
            <div class="modal-body">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card m-b-28">
                            <div class="card-body ">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-elevation-rise"></i>  
                                        </div>
                                        <br>
                                        <span class="badge badge-primary text-center">Capaian <br> Baik</span>
                                        <!-- <p class="mb-0 text-muted text-center">Capaian Baik</p> -->
                                    </div>
                                    <div class="col-7 align-self-center text-center">
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatBaikLampung2023"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">Tahun 2023</p>   
                                        </div>
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatBaikLampung2024"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">Tahun 2024</p>   
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span><?php echo abs(number_format(("$TrenBaikLampung"),2)) ?>%</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card m-b-28">
                            <div class="card-body ">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-pulse"></i>
                                        </div>
                                        <span class="badge badge-primary text-center">Capaian <br> Sedang</span>
                                    </div>
                                    <div class="col-7 align-self-center text-center">
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatSedangLampung2023"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">Tahun 2023</p>   
                                        </div>
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatSedangLampung2024"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">Tahun 2024</p>  
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span><?php echo abs(number_format(("$TrenSedangLampung"),2)) ?>%</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card m-b-28">
                            <div class="card-body ">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-elevation-decline"></i>  
                                        </div>
                                        <br>
                                        <span class="badge badge-primary text-center">Capaian <br> Kurang</span>
                                    </div>
                                    <div class="col-7 align-self-center text-center">
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatKurangLampung2023"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">Tahun 2023</p>   
                                        </div>
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatKurangLampung2024"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">Tahun 2024</p>  
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span><?php echo abs(number_format(("$TrenKurangLampung"),2)) ?>%</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-lg-12">
                  <div class="card m-b-28">
                    <h4 class="card-header card-title font-20 mt-0">Grafik Persentase Capaian Rapor Pendidikan SMK dengan Predikat Baik di Provinsi Lampung </h4>
                        <div class="card-body">
                            <canvas id="ChartLampungBaik" style="width: 500px; height: 150px;"></canvas>
                           
                        </div>
                  </div>
                </div>
                <br>
                <div id="div_tbl_lampung23" style="display:none">
                    <div class="col-lg-12">
                        <div class="general-label">
                            <hr>
                            <h6 style="text-align: center;">Data Predikat Baik Tahun 2023</h6>
                            <hr>
                            <table class="table table-bordered table-striped display wrap" style="width:100%;" id="databaik_lampung2023">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NPSN</th>
                                        <th>Nama Satpen</th>
                                        <th>Kab / Kota</th>
                                        <th>Persentase</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>        
                        </div>
                    </div>
                </div>
                <div id="div_tbl_lampung24" style="display:none">
                    <div class="col-lg-12">
                        <div class="general-label">
                            <hr>
                            <h6 style="text-align: center;">Data Predikat Baik Tahun 2024</h6>
                            <hr>
                            <table class="table table-bordered table-striped display wrap" style="width:100%;" id="databaik_lampung2024">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NPSN</th>
                                        <th>Nama Satpen</th>
                                        <th>Kab / Kota</th>
                                        <th>Persentase</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>         
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<!-- Modal jabar -->
<div class="modal fade" id="jabarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h6 class="modal-title" id="exampleModalLabel">Informasi Penjaminan Mutu Wilayah Provinsi Jawa Barat</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="pesan" style="display: none;"></div>
            <div class="modal-body">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card m-b-28">
                            <div class="card-body ">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-elevation-rise"></i>  
                                        </div>
                                        <br>
                                        <span class="badge badge-primary text-center">Capaian <br> Baik</span>
                                        <!-- <p class="mb-0 text-muted text-center">Capaian Baik</p> -->
                                    </div>
                                    <div class="col-7 align-self-center text-center">
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatBaikJabar2023"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">2023</p>   
                                        </div>
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatBaikJabar2024"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">2024</p>   
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span><?php echo abs(number_format(("$TrenBaikJabar"),2)) ?>%</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card m-b-28">
                            <div class="card-body ">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-pulse"></i>
                                        </div>
                                        <span class="badge badge-primary text-center">Capaian <br> Sedang</span>
                                    </div>
                                    <div class="col-7 align-self-center text-center">
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatSedangJabar2023"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">2023</p>   
                                        </div>
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatSedangJabar2024"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">2024</p>  
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span><?php echo abs(number_format(("$TrenSedangJabar"),2)) ?>%</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-4">
                        <div class="card m-b-28">
                            <div class="card-body ">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-elevation-decline"></i>  
                                        </div>
                                        <br>
                                        <span class="badge badge-primary text-center">Capaian <br> Kurang</span>
                                    </div>
                                    <div class="col-7 align-self-center text-center">
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatKurangJabar2023"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">2023</p>   
                                        </div>
                                        <div class="m-l-12">
                                            <h6 class="mt-0 round-inner"><?php echo "$SMK_PredikatKurangJabar2024"; ?> SMK</h6>
                                            <p class="mb-0 text-muted">2024</p>  
                                        </div>
                                    </div>
                                    <div class="col-3 align-self-end align-self-center">
                                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i>
                                        <br>
                                        <span><?php echo abs(number_format(("$TrenKurangJabar"),2)) ?>%</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-lg-12">
                  <div class="card m-b-28">
                    <h4 class="card-header card-title font-20 mt-0">Grafik Capaian Rapor Pendidikan SMK dengan Predikat Baik di Provinsi Jawa Barat </h4>
                        <div class="card-body">
                            <canvas id="ChartJabarBaik" style="width: 500px; height: 150px;"></canvas>
                        </div>
                  </div>
                </div>
                <br>
                <div id="div_tbl_jabar23" style="display:none">
                    <div class="col-lg-12">
                        <div class="general-label">
                            <hr>
                            <h6 style="text-align: center;">Data Predikat Baik Tahun 2023</h6>
                            <hr>
                            <table class="table table-bordered table-striped display wrap" style="width:100%;" id="databaik_jabar2023">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NPSN</th>
                                        <th>Nama Satpen</th>
                                        <th>Kab / Kota</th>
                                        <th>Persentase</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>        
                        </div>
                    </div>
                </div>
                <div id="div_tbl_jabar24" style="display:none">
                    <div class="col-lg-12">
                        <div class="general-label">
                            <hr>
                            <h6 style="text-align: center;">Data Predikat Baik Tahun 2024</h6>
                            <hr>
                            <table class="table table-bordered table-striped display wrap" style="width:100%;" id="databaik_jabar2024">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NPSN</th>
                                        <th>Nama Satpen</th>
                                        <th>Kab / Kota</th>
                                        <th>Persentase</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>         
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--  -->

<script>
    $(document).ready(function(){
    })

    const ctx_bengkulu_baik = document.getElementById('ChartBengkuluBaik');
    // const labels = [
    // '2023','2024'];
    const chart1 = new Chart(ctx_bengkulu_baik, {
    type: 'bar',
    data: {
      labels: ["Data"],
      datasets: [{
        label: ["Tahun 2023"],
        data: ["<?php echo $SMK_PredikatBaikBengkulu2023 ?>",""],
        borderColor: ['#FF6384'],
        backgroundColor: ['#FF6384'],
        borderWidth: 1
      },
      {
        label: ["Tahun 2024"],
        data: ["<?php echo $SMK_PredikatBaikBengkulu2024 ?>"],
        borderColor: ['#4919f7'],
        backgroundColor: ['#4919f7'],
        borderWidth: 1 
      }]
    },
    options: {
      scales: {
        y: {
            beginAtZero:true,
            responsive: true,
            maintainAspectRatio: true
        }
      }
    }
  });

    ctx_bengkulu_baik.onclick = (evt) => {
      var activePoint = chart1.getElementAtEvent(event);

      // make sure click was on an actual point
      if (activePoint.length > 0) {
            var clickedDatasetIndex = activePoint[0]._datasetIndex;
            var clickedElementindex = activePoint[0]._index;
            var label = chart1.data.labels[clickedElementindex];
            var value = chart1.data.datasets[clickedDatasetIndex].data[clickedElementindex];     
            // alert("Clicked: " + label + " - " + value); 
            if (clickedDatasetIndex == 0 && clickedElementindex == 0) {
                // alert ("tahun 2023");
                $("#div_tbl_bengkulu23").show();
                $("#div_tbl_bengkulu24").hide();
            }
            else if (clickedDatasetIndex == 1 && clickedElementindex == 0) {
                // alert ("tahun 2024");
                $("#div_tbl_bengkulu23").hide();
                $("#div_tbl_bengkulu24").show();
            }
        }
    }
</script>

<script>
    $(document).ready(function(){
    })

    const ctx_lampung_baik = document.getElementById('ChartLampungBaik');
    // const labels = [
    // '2023','2024'];
    const chart2 = new Chart(ctx_lampung_baik, {
    type: 'bar',
    data: {
      labels: ["Data"],
      datasets: [{
        label: ["Tahun 2023"],
        data: ["<?php echo $SMK_PredikatBaikLampung2023 ?>",""],
        borderColor: ['#FF6384'],
        backgroundColor: ['#FF6384'],
        borderWidth: 1
      },
      {
        label: ["Tahun 2024"],
        data: ["<?php echo $SMK_PredikatBaikLampung2024 ?>",""],
        borderColor: ['#4919f7'],
        backgroundColor: ['#4919f7'],
        borderWidth: 1 
      }]
    },
    options: {
      scales: {
        y: {
            beginAtZero:true,
            responsive: true,
            maintainAspectRatio: true
        }
      },
    }

    // 
  
  });

    ctx_lampung_baik.onclick = (evt) => {
      var activePoint = chart2.getElementAtEvent(event);

      // make sure click was on an actual point
      if (activePoint.length > 0) {
            var clickedDatasetIndex = activePoint[0]._datasetIndex;
            var clickedElementindex = activePoint[0]._index;
            var label = chart2.data.labels[clickedElementindex];
            var value = chart2.data.datasets[clickedDatasetIndex].data[clickedElementindex];     
            // alert("Clicked: " + label + " - " + value); 
            if (clickedDatasetIndex == 0 && clickedElementindex == 0) {
                // alert ("tahun 2023");
                $("#div_tbl_lampung23").show();
                $("#div_tbl_lampung24").hide();
            }
            else if (clickedDatasetIndex == 1 && clickedElementindex == 0) {
                // alert ("tahun 2024");
                $("#div_tbl_lampung23").hide();
                $("#div_tbl_lampung24").show();
            }
        }
    }
</script>

<script>
    $(document).ready(function(){
    })

    const ctx_jabar_baik = document.getElementById('ChartJabarBaik');
    // const labels = [
    // '2023','2024'];
    const chart3 = new Chart(ctx_jabar_baik, {
    type: 'bar',
    data: {
      labels: ["Data"],
      datasets: [{
        label: ["Tahun 2023"],
        data: ["<?php echo $SMK_PredikatBaikJabar2023 ?>",""],
        borderColor: ['#FF6384'],
        backgroundColor: ['#FF6384'],
        borderWidth: 1
      },
      {
        label: ["Tahun 2024"],
        data: ["<?php echo $SMK_PredikatBaikJabar2024 ?>"],
        borderColor: ['#4919f7'],
        backgroundColor: ['#4919f7'],
        borderWidth: 1 
      }]
    },
    options: {
      scales: {
        y: {
            beginAtZero:true,
            responsive: true,
            maintainAspectRatio: true
        }
      }
    }
  });

    ctx_jabar_baik.onclick = (evt) => {
      var activePoint = chart3.getElementAtEvent(event);

      // make sure click was on an actual point
      if (activePoint.length > 0) {
            var clickedDatasetIndex = activePoint[0]._datasetIndex;
            var clickedElementindex = activePoint[0]._index;
            var label = chart3.data.labels[clickedElementindex];
            var value = chart3.data.datasets[clickedDatasetIndex].data[clickedElementindex];     
            // alert("Clicked: " + label + " - " + value); 
            if (clickedDatasetIndex == 0 && clickedElementindex == 0) {
                // alert ("tahun 2023");
                $("#div_tbl_jabar23").show();
                $("#div_tbl_jabar24").hide();
            }
            else if (clickedDatasetIndex == 1 && clickedElementindex == 0) {
                // alert ("tahun 2024");
                $("#div_tbl_jabar23").hide();
                $("#div_tbl_jabar24").show();
            }
        }
    }
         
</script>

<script>
    table = $('#databaik_lampung2023').DataTable({
        responsive: true,
        paging: true,
        "destroy": true,
        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            "url": "<?= site_url('home/data_lampung_2023') ?>",
            "type": "POST",
        },


        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "width": 5
        }],

    });
</script>

<script>
    table = $('#databaik_lampung2024').DataTable({
        responsive: true,
        "destroy": true,
        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            "url": "<?= site_url('home/data_lampung_2024') ?>",
            "type": "POST",
        },


        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "width": 5
        }],

    });
</script>

<script>
    table = $('#databaik_bengkulu2023').DataTable({
        responsive: true,
        paging: true,
        "destroy": true,
        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            "url": "<?= site_url('home/data_bengkulu_2023') ?>",
            "type": "POST",
        },


        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "width": 5
        }],

    });
</script>

<script>
    table = $('#databaik_bengkulu2024').DataTable({
        responsive: true,
        "destroy": true,
        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            "url": "<?= site_url('home/data_bengkulu_2024') ?>",
            "type": "POST",
        },


        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "width": 5
        }],

    });
</script>

<script>
    table = $('#databaik_jabar2023').DataTable({
        responsive: true,
        paging: true,
        "destroy": true,
        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            "url": "<?= site_url('home/data_jabar_2023') ?>",
            "type": "POST",
        },


        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "width": 5
        }],

    });
</script>

<script>
    table = $('#databaik_jabar2024').DataTable({
        responsive: true,
        "destroy": true,
        "processing": true,
        "serverSide": true,
        "order": [],

        "ajax": {
            "url": "<?= site_url('home/data_jabar_2024') ?>",
            "type": "POST",
        },


        "columnDefs": [{
            "targets": [0],
            "orderable": false,
            "width": 5
        }],

    });
</script>

