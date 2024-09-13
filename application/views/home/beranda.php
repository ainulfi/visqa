<div class="col-lg-12">
    <div class="card m-b-30">
        <h4 class="card-header mt-0">Persebaran Wilayah Penjaminan Mutu</h4>
        <div class="card-body">
            <p class="card-text">
                <div id="vmap" style="width: 1250px; height: 400px;"></div>
        </div>
    </div>
</div>

<div class="col-lg-12">
  <div class="card m-b-30">
        <h4 class="card-header mt-0">Rekap Data Capaian Rapor Pendidikan</h4>
        <div class="card-body" style="overflow-x:auto;">
            <p class="card-text">
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

              <table class="table table-bordered">
                <tr>
                  <td rowspan="2" align="center"><b>Capaian</b></td>
                  <td colspan="3" align="center"><b>Jumlah SMK di Provinsi Jawa Barat</b></td>
                  <td colspan="3" align="center"><b>Jumlah SMK di Provinsi Bengkulu</b></td>
                  <td colspan="3" align="center"><b>Jumlah SMK di Provinsi Lampung</b></td>
                </tr>
                <tr>
                  <td align="center"><b>Th 2023</b></td>
                  <td align="center"><b>Th 2024</b></td>
                  <td align="center"><b>Tren (%)</b></td>
                  <td align="center"><b>Th 2023</b></td>
                  <td align="center"><b>Th 2024</b></td>
                  <td align="center"><b>Tren (%)</b></td>
                  <td align="center"><b>Th 2023</b></td>
                  <td align="center"><b>Th 2024</b></td>
                  <td align="center"><b>Tren (%)</b></td>
                </tr>
                <tr>
                  <td>Baik</td>
                  <td><?php echo "$SMK_PredikatBaikJabar2023" ?></td>
                  <td><?php echo "$SMK_PredikatBaikJabar2024" ?></td>
                  <td><?php echo abs(number_format($TrenBaikJabar,2)) ?> %</td>
                  <td><?php echo "$SMK_PredikatBaikBengkulu2023" ?></td>
                  <td><?php echo "$SMK_PredikatBaikBengkulu2024" ?></td>
                  <td><?php echo abs(number_format($TrenBaikBengkulu,2)) ?> %</td>
                  <td><?php echo "$SMK_PredikatBaikLampung2023" ?></td>
                  <td><?php echo "$SMK_PredikatBaikLampung2024" ?></td>
                  <td><?php echo abs(number_format($TrenBaikLampung,2)) ?> %</td>
                </tr>
                <tr>
                  <td>Sedang</td>
                  <td><?php echo "$SMK_PredikatSedangJabar2023" ?></td>
                  <td><?php echo "$SMK_PredikatSedangJabar2024" ?></td>
                  <td><?php echo abs(number_format($TrenSedangJabar,2)) ?> %</td>
                  <td><?php echo "$SMK_PredikatSedangBengkulu2023" ?></td>
                  <td><?php echo "$SMK_PredikatSedangBengkulu2024" ?></td>
                  <td><?php echo abs(number_format($TrenSedangBengkulu,2)) ?> %</td>
                  <td><?php echo "$SMK_PredikatSedangLampung2023" ?></td>
                  <td><?php echo "$SMK_PredikatSedangLampung2024" ?></td>
                  <td><?php echo abs(number_format($TrenSedangLampung,2)) ?> %</td>
                </tr>
                <tr>
                  <td>Kurang</td>
                  <td><?php echo "$SMK_PredikatKurangJabar2023" ?></td>
                  <td><?php echo "$SMK_PredikatKurangJabar2024" ?></td>
                  <td><?php echo abs(number_format($TrenKurangJabar,2)) ?> %</td>
                  <td><?php echo "$SMK_PredikatKurangBengkulu2023" ?></td>
                  <td><?php echo "$SMK_PredikatKurangBengkulu2024" ?></td>
                  <td><?php echo abs(number_format($TrenKurangBengkulu,2)) ?> %</td>
                  <td><?php echo "$SMK_PredikatKurangLampung2023" ?></td>
                  <td><?php echo "$SMK_PredikatKurangLampung2024" ?></td>
                  <td><?php echo abs(number_format($TrenKurangLampung,2)) ?> %</td>
                </tr>
                <tr>
                  <td><b>Jumlah</b></td>
                  <td><?php echo "$countSMKPredikatAllJabar2023" ?></td>
                  <td><?php echo "$countSMKPredikatAllJabar2024" ?></td>
                  <td></td>
                  <td><?php echo "$countSMKPredikatAllBengkulu2023" ?></td>
                  <td><?php echo "$countSMKPredikatAllBengkulu2024" ?></td>
                  <td></td>
                  <td><?php echo "$countSMKPredikatAllLampung2023" ?></td>
                  <td><?php echo "$countSMKPredikatAllLampung2024" ?></td>
                  <td></td>
                </tr>
              </table>
        </div>
    </div>
</div>


<div class="row">
  <div class="col-lg-6">
    <div class="card m-b-30">
        <h4 class="card-header card-title font-20 mt-0">Tabel Rekap Data Capaian Rapor Pendidikan Berdasarkan Jumlah Sekolah di Seluruh Wilayah Binaan</h4>
        <div class="card-body">
              <?php

              $TotalSMKbyPredikat2023 = $getSMKBaik2023+$getSMKSedang2023+$getSMKKurang2023;
              $TotalSMKbyPredikat2024 = $getSMKBaik2024+$getSMKSedang2024+$getSMKKurang2024;

              $TrenBaikbySMK = ((($getSMKBaik2024 - $getSMKBaik2023) / $countSMKPredikatAllJabar2024 )*100);
              $TrenSedangbySMK = ((($getSMKSedang2024 - $getSMKSedang2023) / $countSMKPredikatAllJabar2024 )*100);
              $TrenKurangbySMK = ((($getSMKKurang2024 - $getSMKKurang2023) / $countSMKPredikatAllJabar2024 )*100);
              ?>
              <table class="table table-bordered">
                <tr>
                  <td align="center"><b>Capaian</b></td>
                  <td align="center"><b>Tahun 2023</b></td>
                  <td align="center"><b>Tahun 2024</b></td>
                  <td align="center"><b>Tren (%)</b></td>
                </tr>
                <tr>
                  <td>Baik</td>
                  <td><?php echo "$getSMKBaik2023" ?></td>
                  <td><?php echo "$getSMKBaik2024" ?></td>
                  <td><?php echo abs(number_format(("$TrenBaikbySMK"),2)) ?></td>
                </tr>
                <tr>
                  <td>Sedang</td>
                  <td><?php echo "$getSMKSedang2023" ?></td>
                  <td><?php echo "$getSMKSedang2024" ?></td>
                  <td><?php echo abs(number_format(("$TrenSedangbySMK"),2)) ?></td>
                </tr>
                <tr>
                  <td>Kurang</td>
                  <td><?php echo "$getSMKKurang2023" ?></td>
                  <td><?php echo "$getSMKKurang2024" ?></td>
                  <td><?php echo abs(
                    number_format(("$TrenKurangbySMK"),2)) ?></td>
                </tr>
                <tr>
                  <td><b>Jumlah</b></td>
                  <td><?php echo $TotalSMKbyPredikat2023 ?></td>
                  <td><?php echo $TotalSMKbyPredikat2024 ?></td>
                </tr>
              </table>
        </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card m-b-30">
        <h4 class="card-header card-title font-20 mt-0">Tabel Rekap Data Capaian Rapor Pendidikan Berdasarkan Persentase di Seluruh Wilayah Binaan</h4>
        <div class="card-body">
          <?php
            $PersenBaik2023 = ($getSMKBaik2023/$TotalSMKbyPredikat2023)*100;
            $PersenSedang2023 = ($getSMKSedang2023/$TotalSMKbyPredikat2023)*100;
            $PersenKurang2023 = ($getSMKKurang2023/$TotalSMKbyPredikat2023)*100;

            $PersenBaik2024 = ($getSMKBaik2024/$TotalSMKbyPredikat2024)*100;
            $PersenSedang2024 = ($getSMKSedang2024/$TotalSMKbyPredikat2024)*100;
            $PersenKurang2024 = ($getSMKKurang2024/$TotalSMKbyPredikat2024)*100;

            $TrenPersenBaik = $PersenBaik2024 - $PersenBaik2023;
            $TrenPersenSedang = $PersenSedang2024 - $PersenSedang2023;
            $TrenPersenKurang = $PersenKurang2024 - $PersenKurang2023;

            $TotalPersen2023 = $PersenBaik2023+$PersenSedang2023+$PersenKurang2023;
            $TotalPersen2024 = $PersenBaik2024+$PersenSedang2024+$PersenKurang2024;
          ?>
          <table class="table table-bordered">
            <tr>
              <td align="center"><b>Capaian</b></td>
              <td align="center"><b>Tahun 2023</b></td>
              <td align="center"><b>Tahun 2024</b></td>
              <td align="center"><b>Tren (%)</b></td>
            </tr>
            <tr>
              <td>Baik</td>
              <td><?php echo abs(number_format(("$PersenBaik2023"),2))?> %</td>
              <td><?php echo abs(number_format(("$PersenBaik2024"),2))?> %</td>
              <td><?php echo abs(number_format(("$TrenPersenBaik"),2))?> %</td>
            </tr>
            <tr>
              <td>Sedang</td>
              <td><?php echo abs(number_format(("$PersenSedang2023"),2))?> %</td>
              <td><?php echo abs(number_format(("$PersenSedang2024"),2))?> %</td>
              <td><?php echo abs(number_format(("$TrenPersenSedang"),2))?> %</td>
            </tr>
            <tr>
              <td>Kurang</td>
              <td><?php echo abs(number_format(("$PersenKurang2023"),2))?> %</td>
              <td><?php echo abs(number_format(("$PersenKurang2024"),2))?> %</td>
              <td><?php echo abs(number_format(("$TrenPersenKurang"),2))?> %</td>
            </tr>
            <tr>
              <td><b>Jumlah</b></td>
              <td><?php echo abs(number_format(("$TotalPersen2023"),2))?> %</td>
              <td><?php echo abs(number_format(("$TotalPersen2024"),2))?> %</td>
            </tr>
          </table>
        </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6">
    <div class="card m-b-30">
        <h4 class="card-header card-title font-20 mt-0">Tabel Rekap Data Capaian Rapor Pendidikan Berdasarkan Jumlah Sekolah di Seluruh Wilayah Binaan dengan Predikat Baik</h4>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                  <td rowspan="2" align="center"><b>Provinsi</b></td>
                  <td colspan="3" align="center"><b>Capaian Rapor Pendidikan dengan Predikat Baik</b></td>
                </tr>
                <tr>
                  <td align="center"><b>Th 2023</b></td>
                  <td align="center"><b>Th 2024</b></td>
                  <td align="center"><b>Tren (Jumlah)</b></td>
                </tr>
                <tr>
                  <td>Jawa Barat</td>
                  <td><?php echo "$SMK_PredikatBaikJabar2023" ?></td>
                  <td><?php echo "$SMK_PredikatBaikJabar2024" ?></td>
                  <td><?php echo abs($SMK_PredikatBaikJabar2024 - $SMK_PredikatBaikJabar2023) ?> </td>
                </tr>
                <tr>
                  <td>Bengkulu</td>
                  <td><?php echo "$SMK_PredikatBaikBengkulu2023" ?></td>
                  <td><?php echo "$SMK_PredikatBaikBengkulu2024" ?></td>
                  <td><?php echo abs($SMK_PredikatBaikBengkulu2024 - $SMK_PredikatBaikBengkulu2023) ?> </td>
                </tr>
                <tr>
                  <td>Lampung</td>
                  <td><?php echo "$SMK_PredikatBaikLampung2023" ?></td>
                  <td><?php echo "$SMK_PredikatBaikLampung2024" ?></td>
                  <td><?php echo abs($SMK_PredikatBaikLampung2024 - $SMK_PredikatBaikLampung2023) ?> </td>
                </tr>
                <tr>
                  <td><b>Total</b></td>
                  <td><?php echo "$getSMKBaik2023" ?></td>
                  <td><?php echo "$getSMKBaik2024" ?></td>
                  <td><?php echo abs($getSMKBaik2024 - $getSMKBaik2023) ?> </td>
                </tr>
              </table>
        </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card m-b-30">
        <h4 class="card-header card-title font-20 mt-0">Tabel Rekap Data Capaian Rapor Pendidikan Berdasarkan Persentase di Seluruh Wilayah Binaan dengan Predikat Baik</h4>
        <div class="card-body">
          <?php
            $PersenBaikJabar2023 = ($SMK_PredikatBaikJabar2023/$countSMKPredikatAllJabar2023)*100;
            $PersenBaikBengkulu2023 = ($SMK_PredikatBaikBengkulu2023/$countSMKPredikatAllBengkulu2023)*100;
            $PersenBaikLampung2023 = ($SMK_PredikatBaikLampung2023/$countSMKPredikatAllLampung2023)*100;

            $PersenBaikJabar2024 = ($SMK_PredikatBaikJabar2024/$countSMKPredikatAllJabar2024)*100;
            $PersenBaikBengkulu2024 = ($SMK_PredikatBaikBengkulu2024/$countSMKPredikatAllBengkulu2024)*100;
            $PersenBaikLampung2024 = ($SMK_PredikatBaikLampung2024/$countSMKPredikatAllLampung2024)*100;

            $TrenPersenBaikJabar = $PersenBaikJabar2024 - $PersenBaikJabar2023;
            $TrenPersenBaikBengkulu = $PersenBaikBengkulu2024 - $PersenBaikBengkulu2023;
            $TrenPersenBaikLampung = $PersenBaikLampung2024 - $PersenBaikLampung2023;

            $TotalPersenBaik2023 = ($getSMKBaik2023/$TotalSMKbyPredikat2023)*100;
            $TotalPersenBaik2024 = ($getSMKBaik2024/$TotalSMKbyPredikat2024)*100;
            $TotalTrenPersenBaik = $TotalPersenBaik2024-$TotalPersenBaik2023;

          ?>
          <table class="table table-bordered">
            <tr>
              <td rowspan="2" align="center"><b>Provinsi</b></td>
              <td colspan="3" align="center"><b>Capaian Rapor Pendidikan dengan Predikat Baik</b></td>
            </tr>
            <tr>
              <td align="center"><b>Th 2023</b></td>
              <td align="center"><b>Th 2024</b></td>
              <td align="center"><b>Tren (Jumlah)</b></td>
            </tr>
            <tr>
              <td>Jawa Barat</td>
              <td><?php echo abs(number_format(("$PersenBaikJabar2023"),2))?> %</td>
              <td><?php echo abs(number_format(("$PersenBaikJabar2024"),2))?> %</td>
              <td><?php echo abs(number_format(("$TrenPersenBaikJabar"),2))?> %</td>
            </tr>
            <tr>
              <td>Bengkulu</td>
              <td><?php echo abs(number_format(("$PersenBaikBengkulu2023"),2))?> %</td>
              <td><?php echo abs(number_format(("$PersenBaikBengkulu2024"),2))?> %</td>
              <td><?php echo abs(number_format(("$TrenPersenBaikBengkulu"),2))?> %</td>
            </tr>
            <tr>
              <td>Lampung</td>
              <td><?php echo abs(number_format(("$PersenBaikLampung2023"),2))?> %</td>
              <td><?php echo abs(number_format(("$PersenBaikLampung2024"),2))?> %</td>
              <td><?php echo abs(number_format(("$TrenPersenBaikLampung"),2))?> %</td>
            </tr>
            <tr>
              <td><b>Total</b></td>
              <td><?php echo abs(number_format(("$TotalPersenBaik2023"),2))?> %</td>
              <td><?php echo abs(number_format(("$TotalPersenBaik2024"),2))?> %</td>
              <td><?php echo abs(number_format(("$TotalTrenPersenBaik"),2))?> %</td>
            </tr>
          </table>
        </div>
    </div>
  </div>
</div>

<div class="col-lg-12">
  <div class="card m-b-30">
      <h4 class="card-header card-title font-20 mt-0">Grafik Persentase Capaian Rapor Pendidikan di Wilayah Binaan BBPPMPV BMTI dengan Predikat Baik </h4>
      <div class="card-body">
          <p class="card-text">
              <!-- <div id="vmap" style="width: 1200px; height: 400px;"></div> 
                grafik disini-->
              <canvas id="chartProvinsiPersenBaik" style="width: 500px; height: 150px;"></canvas>
           
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
      <div class="card m-b-30">
          <h4 class="card-header card-title font-20 mt-0">Grafik Capaian Persentase Rapor Pendidikan SMK dengan Predikat Baik Tahun 2023-2024 </h4>
          <div class="card-body">
              <p class="card-text">
                  <canvas id="chartPredikatBaik" style="width: 500px; height: 300px;"></canvas>
               
          </div>
      </div>
    </div>

		<div class="col-md-6">
			<div class="card m-b-30">
			    <h4 class="card-header card-title font-20 mt-0">Grafik Capaian Perbandingan Persentase Rapor Pendidikan Berdasarkan Tahun di Wilayah Binaan BBPPMPV BMTI </h4>
			    <div class="card-body">
			        <p class="card-text">
			            <canvas id="chartPersentasePredikatBaik" style="width: 500px; height: 300px;"></canvas>
			    </div>
			</div>
		</div>
</div>

<script>
	$(document).ready(function(){
	})

	const ctx = document.getElementById('chartPredikatBaik');
	// const labels = [
	// '2023','2024'];
	new Chart(ctx, {
    type: 'bar',
    data: {
      // labels: ["2023", "2024"],
      datasets: [{
        label: ["Jumlah SMK 2023"],
        data: ["<?php echo $chartSMKBaik2023 ?>",""],
        borderColor: ['#FF6384'],
      	backgroundColor: ['#FF6384'],
        borderWidth: 1
      },
      {
        label: ["Jumlah SMK 2024"],
        data: ["<?php echo $chartSMKBaik2024 ?>"],
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
</script>

<script>
	$(document).ready(function(){
	})

	const ctx2 = document.getElementById('chartPersentasePredikatBaik');
	// const labels = [
	// '2023','2024'];
	new Chart(ctx2, {
    type: 'bar',
    data: {
      // labels: ["2023", "2024"],
      datasets: [{
        label: ["Persentase 2023"],
        data: ["<?php echo $chartSMKPersentaseBaik2023 ?>",""],
        borderColor: ['#FF6384'],
      	backgroundColor: ['#FF6384'],
        borderWidth: 1
      },
      {
        label: ["Persentase 2024"],
        data: ["<?php echo $chartSMKPersentaseBaik2024 ?>"],
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
         
</script>

<script>
	$(document).ready(function(){
	})

	const ctx3 = document.getElementById('chartProvinsiPersenBaik');
	// const labels = [
	// '2023','2024'];
	new Chart(ctx3, {
    type: 'bar',
    data: {
      labels: ["Jawa Barat", "Bengkulu", "Lampung",],
      datasets: [{
        label: ["Persentase 2023"],
        data: ["<?php echo $chartJabarPersenBaik2023 ?>", "<?php echo $chartBengkuluPersenBaik2023 ?>","<?php echo $chartLampungPersenBaik2023 ?>",""],
        borderColor: ['#FF6384','#FF6384','#FF6384'],
      	backgroundColor: ['#FF6384','#FF6384','#FF6384'],
        borderWidth: 1
      },
      {
      	label: ["Persentase 2024"],
        data: ["<?php echo $chartJabarPersenBaik2024 ?>", "<?php echo $chartBengkuluPersenBaik2024 ?>","<?php echo $chartLampungPersenBaik2024 ?>"],
        borderColor: ['#4919f7','#4919f7','#4919f7'],
      	backgroundColor: ['#4919f7','#4919f7','#4919f7'],
        borderWidth: 1
      }
      // ,{
      //   label: ["Lampung"],
      //   data: ["<?php echo $chartLampungPersenBaik2023 ?>", ],
      //   borderColor: ['#ff6384','#4919f7'],
      //   backgroundColor: ['#ff6384','#4919f7'],
      //   borderWidth: 1
      // }
      ]
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
         
</script>