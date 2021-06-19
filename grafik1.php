<div id="monitoring"></div>
<?php $ambil = $koneksi->query("SELECT * FROM sensor") ?>
<?php
$arus = array();
$waktu = array();
while ($pecah = $ambil->fetch_assoc()) {
    $arus[] = floatval($angka = number_format($pecah['arus_pv'] * $pecah['tegangan_pv'] / 1000, 2));
    $waktu[] = $pecah['time'];
}
?>
<script src="highcharts.js"></script>
<script src="exporting.js"></script>
<script src="export_data.js"></script>
<script src="accessibility.js"></script>
<script type="text/javascript">
    Highcharts.chart('monitoring', {
        chart: {
            type: 'areaspline'
        },
        title: {
            text: 'Monitoring Daya Pada Battery'
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 20,
            y: 0,
            floating: true,
            borderWidth: 1,
            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#ffff'
        },
        xAxis: {
            categories: <?= json_encode($waktu); ?>,
            plotBands: [{ // visualize the weekend
                from: -2,
                to: 6.5,
                color: 'rgba(255, 255, 255, .1)'
            }]
        },
        yAxis: {
            title: {
                text: 'Daya (Watt)'
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: 'Watt)'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            areaspline: {
                fillOpacity: 0.5
            }
        },
        series: [{
            name: 'Daya Baterai',
            data: <?= json_encode($arus); ?>

        }]



    });
</script>