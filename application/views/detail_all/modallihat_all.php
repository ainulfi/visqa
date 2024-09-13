
<div class="modal fade" id="modallihat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Lihat Detail Data Rapor Satpen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="pesan" style="display: none;"></div>
            <div class="modal-body">
                <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="<?= base_url() ?>assets/images/school.jpg" alt="Admin" class="rounded-circle" width="120">
                        <div class="mt-3">
                          <h5><?= $nama_satpen ?></h5>
                          <h6>Provinsi : <?= $provinsi ?></h6>
                          <h6>NPSN : <?= $npsn ?></h6>
                          <!-- <button class="btn btn-primary">NPSN : <?= $npsn ?></button> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Keterangan Indikator : </h6>
                    <!-- <span class="text-secondary">https://bootdey.com</span> -->
                  </li>
                  <li class="list-group-item d-flex flex-wrap">
                    <h6 class="d-flex  mb-3"><i class="material-icons text-success mr-2"> A1 </i></h6>
                    <span class="text-secondary">Kemampuan Literasi</span>
                  </li>
                  <li class="list-group-item d-flex flex-wrap">
                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-success mr-2"> A2 </i></h6>
                    <span class="text-secondary">Kemampuan Numerasi</span>
                  </li>
                  <li class="list-group-item d-flex flex-wrap">
                    <h6 class="d-flex  mb-3"><i class="material-icons text-success mr-2"> A3 </i></h6>
                    <span class="text-secondary">Karakter</span>
                  </li>
                  <li class="list-group-item d-flex flex-wrap">
                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-success mr-2"> A4 </i></h6>
                    <span class="text-secondary">Penyerapan Lulusan <br> SMK</span>
                  </li>
                  <li class="list-group-item d-flex flex-wrap">
                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-success mr-2"> D1 </i></h6>
                    <span class="text-secondary">Kualitas Pembelajaran</span>
                  </li>
                  <li class="list-group-item d-flex flex-wrap">
                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-success mr-2"> D4 </i></h6>
                    <span class="text-secondary">Iklim Keamanan <br> Sekolah</span>
                  </li>
                  <li class="list-group-item d-flex flex-wrap">
                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-success mr-2"> D8 </i></h6>
                    <span class="text-secondary">Iklim Kebinekaan</span>
                  </li>
                  <li class="list-group-item d-flex flex-wrap">
                    <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-success mr-2"> D17 </i></h6>
                    <span class="text-secondary">Link & Match <br> dengan Dunia Kerja</span>
                  </li>
                </ul>
              </div>
                </div>

                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Jenis Satpen</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                          <?= $jenis_satpen ?>
                        </div>
                        <div class="col-sm-3">
                          <h6 class="mb-0">Status Satpen</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                          <?= $status_satpen ?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Kab / Kota</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                          <?= $kab_kota ?>
                        </div>
                        <div class="col-sm-3">
                          <h6 class="mb-0">Kecamatan</h6>
                        </div>
                        <div class="col-sm-3 text-secondary">
                          <?= $kecamatan ?>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                      <div class="col-md-6">
                          <div class="card mb-3">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-6">
                                  <h6 class="mb-0">Capaian Tahun <?= $tahun ?></h6>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                  <?= abs(number_format(($persen),2)) ?> % <br> <?= $predikat ?>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="card mb-3">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-6">
                                  <h6 class="mb-0">Capaian Tahun <?= $tahun_2 ?></h6>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                  <?= abs(number_format(($persen_2),2)) ?> % <br> <?= $predikat_2 ?>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                

                  <div class="row gutters-sm">
                    <div class="col-sm-12 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <h6 class="d-flex align-items-center mb-3">Detail Capaian Tahun <i class="material-icons text-info mr-2"> : <?=  $tahun?></i></h6>
                          <!-- <canvas id="chart" style="width: 500px; height: 150px;"></canvas> -->
                          <canvas id="chart" width="500" height="350"></canvas>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="col-sm-4 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <h6 class="d-flex align-items-center mb-3">Detail Capaian Tahun <i class="material-icons text-info mr-2"> : <?=  $tahun?></i></h6>
                          
                          
                        </div>
                      </div>
                    </div> -->
                  </div>
                  <div class="row gutters-sm">
                    <div class="col-sm-12 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <h6 class="d-flex align-items-center mb-3">Detail Capaian Tahun <i class="material-icons text-info mr-2"> : <?=  $tahun_2?></i></h6>
                          <canvas id="chart3" width="500" height="350"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>



            </div>
          </div>
                <!-- <div class="col-lg-12">
                    <div class="card">
                        <div class="col-lg-4">
                            <div class="card m-b-30">
                            
                            </div> 
                        </div>    
                    </div>
                </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
// Change default options for ALL charts
Chart.helpers.merge(Chart.defaults.global.plugins.datalabels, {
  opacity: 1,
  textAlign: 'left',
  color: 'white',
  borderColor: '#11469e',
  borderWidth: 2,
  borderRadius: 100,
  font: {
    weight: 'bold',
    size: 12,
    lineHeight: 1 /* align v center */
  },
  padding: {
    top: 5
  },
  /* hover styling */
  backgroundColor: function(context) {
    return context.hovered ? context.dataset.borderColor : 'white';
  },
  color: function(context) {
    return context.hovered ? 'white' : context.dataset.borderColor;
  },
  listeners: {
    enter: function(context) {
      context.hovered = true;
      return true;
    },
    leave: function(context) {
      context.hovered = false;
      return true;
    }
  }
});


var data = {
  labels: ["A1", "A2", "A3", "A4", "D1", "D4", "D8", "D17"],
  // labels: ["A1"],
  datasets: [{
    label: "Capaian 2023",
    backgroundColor: "rgba(38,120,255,0.2)",
    borderColor: "rgba(38,120,255, 1)",
    data: ["<?php echo $a1 ?>","<?php echo $a2 ?>","<?php echo $a3 ?>","<?php echo $a4 ?>","<?php echo $d1 ?>","<?php echo $d4 ?>","<?php echo $d8 ?>","<?php echo $d17 ?>"]
  }]
};

var options = {
  responsive: true,
  tooltips: false,
  title: {
    text: 'Sebaran Data Capaian Rapor Pendidikan',
    display: true,
    position: `bottom`,
  },
  plugins: {
    /* ######### https://chartjs-plugin-datalabels.netlify.com/ #########*/
    datalabels: {
      /* formatter */
      formatter: function(value, context) {
        return context.chart.data.labels[context.value];
      }
    }
  },
  /* scale: https://www.chartjs.org/docs/latest/axes/radial/linear.html#axis-range-settings */
  scale: {
    angleLines: {
      display: true
    },
    pointLabels:{
      /* https://www.chartjs.org/docs/latest/axes/radial/linear.html#point-label-options */
      fontSize: 15,
      fontColor: 'black',
      fontStyle: 'bold',
      callback: function(value, index, values) {
        return value;
      }
    },
    ticks: {
      /* https://www.chartjs.org/docs/latest/axes/styling.html#tick-configuration */
      /* suggestedMax and suggestedMin settings only change the data values that are used to scale the axis */
      suggestedMin: 0,
      suggestedMax: 4,
      stepSize: 20, /* 25 - 50 - 75 - 100 */
      maxTicksLimit: 8, /* Or use maximum number of ticks and gridlines to show */
      display: false, // remove label text only,
    }
  },
  legend: {
    labels: {
      padding: 10,
      fontSize: 14,
      lineHeight: 30,
    },
  },
};

var myChart = new Chart(document.getElementById("chart"), {
  type: 'radar',
  data: data,
  options: options
});
</script>

<script type="text/javascript">
// Change default options for ALL charts
Chart.helpers.merge(Chart.defaults.global.plugins.datalabels, {
  opacity: 1,
  textAlign: 'left',
  color: 'white',
  borderColor: '#11469e',
  borderWidth: 2,
  borderRadius: 100,
  font: {
    weight: 'bold',
    size: 12,
    lineHeight: 1 /* align v center */
  },
  padding: {
    top: 5
  },
  /* hover styling */
  backgroundColor: function(context) {
    return context.hovered ? context.dataset.borderColor : 'white';
  },
  color: function(context) {
    return context.hovered ? 'white' : context.dataset.borderColor;
  },
  listeners: {
    enter: function(context) {
      context.hovered = true;
      return true;
    },
    leave: function(context) {
      context.hovered = false;
      return true;
    }
  }
});


var data = {
  labels: ["A1", "A2", "A3", "A4", "D1", "D4", "D8", "D17"],
  // labels: ["A1"],
  datasets: [{
    label: "Capaian 2024",
    backgroundColor: "rgba(38,120,255,0.2)",
    borderColor: "rgba(38,120,255, 1)",
    data: ["<?php echo $a1_2 ?>","<?php echo $a2_2 ?>","<?php echo $a3_2 ?>","<?php echo $a4_2 ?>","<?php echo $d1_2 ?>","<?php echo $d4_2 ?>","<?php echo $d8_2 ?>","<?php echo $d17_2 ?>"]
  }]
};

var options = {
  responsive: true,
  tooltips: false,
  title: {
    text: 'Sebaran Data Capaian Rapor Pendidikan',
    display: true,
    position: `bottom`,
  },
  plugins: {
    /* ######### https://chartjs-plugin-datalabels.netlify.com/ #########*/
    datalabels: {
      /* formatter */
      formatter: function(value, context) {
        return context.chart.data.labels[context.value];
      }
    }
  },
  /* scale: https://www.chartjs.org/docs/latest/axes/radial/linear.html#axis-range-settings */
  scale: {
    angleLines: {
      display: true
    },
    pointLabels:{
      /* https://www.chartjs.org/docs/latest/axes/radial/linear.html#point-label-options */
      fontSize: 15,
      fontColor: 'black',
      fontStyle: 'bold',
      callback: function(value, index, values) {
        return value;
      }
    },
    ticks: {
      /* https://www.chartjs.org/docs/latest/axes/styling.html#tick-configuration */
      /* suggestedMax and suggestedMin settings only change the data values that are used to scale the axis */
      suggestedMin: 0,
      suggestedMax: 4,
      stepSize: 20, /* 25 - 50 - 75 - 100 */
      maxTicksLimit: 8, /* Or use maximum number of ticks and gridlines to show */
      display: false, // remove label text only,
    }
  },
  legend: {
    labels: {
      padding: 10,
      fontSize: 14,
      lineHeight: 30,
    },
  },
};

var myChart = new Chart(document.getElementById("chart3"), {
  type: 'radar',
  data: data,
  options: options
});
</script>

<!-- <script>
    $(document).ready(function(){
    })

    const ctx_cp_2024 = document.getElementById('chart2');
    // const labels = [
    // '2023','2024'];
    new Chart(ctx_cp_2024, {
    type: 'radar',
    data: {
      labels: ["A1", "A2", "A3", "A4", "D1", "D4", "D8", "D17"],
      datasets: [{
        label: ["Tahun 2023"],
        data: ["<?php echo $a1 ?>","<?php echo $a2 ?>","<?php echo $a3 ?>","<?php echo $a4 ?>","<?php echo $d1 ?>","<?php echo $d4 ?>","<?php echo $d8 ?>","<?php echo $d17 ?>"],
        borderColor: ['#FF6384'],
        backgroundColor: ['#FF6384'],
        borderWidth: 1
      },
      {
        label: ["Tahun 2024"],
        data: ["<?php echo $a1_2 ?>","<?php echo $a2_2 ?>","<?php echo $a3_2 ?>","<?php echo $a4_2 ?>","<?php echo $d1_2 ?>","<?php echo $d4_2 ?>","<?php echo $d8_2 ?>","<?php echo $d17_2 ?>"],
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
         
</script> -->


<!-- referensi chartjs radar fix -->
<!-- <script type="text/javascript">
// Change default options for ALL charts
Chart.helpers.merge(Chart.defaults.global.plugins.datalabels, {
  opacity: 1,
  textAlign: 'left',
  color: 'white',
  borderColor: '#11469e',
  borderWidth: 2,
  borderRadius: 100,
  font: {
    weight: 'bold',
    size: 12,
    lineHeight: 1 /* align v center */
  },
  padding: {
    top: 5
  },
  /* hover styling */
  backgroundColor: function(context) {
    return context.hovered ? context.dataset.borderColor : 'white';
  },
  color: function(context) {
    return context.hovered ? 'white' : context.dataset.borderColor;
  },
  listeners: {
    enter: function(context) {
      context.hovered = true;
      return true;
    },
    leave: function(context) {
      context.hovered = false;
      return true;
    }
  }
});

var data = {
  labels: ["Ball Skills", "Shooting", "Physical", "Defence", "Passing"],
  datasets: [{
    label: "De maria",
    backgroundColor: "rgba(38,120,255,0.2)",
    borderColor: "rgba(38,120,255, 1)",
    data: [90, 86, 76, 65, 82]
  }]
};

var options = {
  responsive: true,
  tooltips: false,
  title: {
    text: 'chartjs-plugin-datalabels - basic example',
    display: true,
    position: `bottom`,
  },
  plugins: {
    /* ######### https://chartjs-plugin-datalabels.netlify.com/ #########*/
    datalabels: {
      /* formatter */
      formatter: function(value, context) {
        return context.chart.data.labels[context.value];
      }
    }
  },
  /* scale: https://www.chartjs.org/docs/latest/axes/radial/linear.html#axis-range-settings */
  scale: {
    angleLines: {
      display: true
    },
    pointLabels:{
      /* https://www.chartjs.org/docs/latest/axes/radial/linear.html#point-label-options */
      fontSize: 15,
      fontColor: 'black',
      fontStyle: 'bold',
      callback: function(value, index, values) {
        return value;
      }
    },
    ticks: {
      /* https://www.chartjs.org/docs/latest/axes/styling.html#tick-configuration */
      /* suggestedMax and suggestedMin settings only change the data values that are used to scale the axis */
      suggestedMin: 0,
      suggestedMax: 100,
      stepSize: 25, /* 25 - 50 - 75 - 100 */
      maxTicksLimit: 11, /* Or use maximum number of ticks and gridlines to show */
      display: false, // remove label text only,
    }
  },
  legend: {
    labels: {
      padding: 10,
      fontSize: 14,
      lineHeight: 30,
    },
  },
};

var myChart = new Chart(document.getElementById("chart2"), {
  type: 'radar',
  data: data,
  options: options
});
</script> -->