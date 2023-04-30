<?php
/* @var $this LaporanController */

$this->breadcrumbs=array(
	'Laporan',
);
?>
<!-- <h1><?php echo $this->id . '/' . $this->action->id; ?></h1> -->

<div>
  <canvas id="chart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const chart = document.getElementById('chart');
  new Chart(chart, {
    type: 'bar',
    data: {
      labels:  Object.values(<?= json_encode($regions) ?>),
      datasets: [
				{
					label: 'Pegawai',
					data: Object.values(<?= json_encode($employees) ?>),
					borderWidth: 1
				},
				{
					label: 'Pasien',
					data: Object.values(<?= json_encode($patients) ?>),
					borderWidth: 1
				}
			]
    },
    options: {
			responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>