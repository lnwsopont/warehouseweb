<div style="margin-bottom: 150px;">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="<?=$id?>"></div>

<style>
    #<?=$id?> {
	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto;
        margin-top: 50px
}
</style>
<script>
    Highcharts.chart('<?=$id?>', {

    title: {
        text: 'Parcel Quantity In-Out'
    },

    subtitle: {
        text: 'Details'
    },

    yAxis: {
        title: {
            text: 'Number of Parcels'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 1
        }
    },

    series: [{
        name: 'Parcel In',
        data: [<?= implode(",", $listin) ?>]
    }, {
        name: 'Parcel Out',
        data: [<?= implode(",", $listout) ?>]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 1
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
    </script>
</div>