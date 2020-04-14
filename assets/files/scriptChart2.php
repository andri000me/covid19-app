<script type="text/javascript">
    // Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Live Indonesia Data Corona Virus <?= date("d F Y") ?>'
    },
    subtitle: {
        text: 'Statistik Kasus Corona Virus <?= date("d F Y") ?> '
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total percent Indonesia Corona Virus'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:,1f}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    series: [
        {
            name: "Browsers",
            colorByPoint: true,
            data: [
                {
                    name: "Positif Corona Virus",
                    y: <?= $jsonUrl['Indonesia']['confirmed'] ?>,
                    drilldown: "Positif Corona Virus"
                },
                {
                    name: "Sembuh Dari Corona Virus",
                    y: <?= $jsonUrl['Indonesia']['recovered'] ?>,
                    drilldown: "Sembuh Dari Corona Virus"
                },
                {
                    name: "Meninggal Dari Corona Virus",
                    y: <?= $jsonUrl['Indonesia']['deaths'] ?>,
                    drilldown: "Meninggal Dari Corona Virus"
                },
            ]
        }
    ],
});
</script>