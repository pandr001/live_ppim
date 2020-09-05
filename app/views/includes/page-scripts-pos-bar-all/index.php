<script>
  $(function () {
    //per-branch-sales
    var barChartCanvas  = $('#barChart').get(0).getContext('2d')
    var barChart        = new Chart(barChartCanvas)
    <?php
      for ($i=0; $i<12; $i++) { 
        print "var a".$i."=".$data['loop'][$i]['Balance'].";";
        print "var b".$i."=".$data['loop1'][$i]['Balance'].";";
        print "var c".$i."=".$data['loop2'][$i]['Balance'].";";
        print "var d".$i."=".$data['loop3'][$i]['Balance'].";";
      }
    ?>
    var barChartData = 
    {
      labels  : ['JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'],
      datasets: [
        {
          label               : 'V1',
          backgroundColor     : 'teal',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : true,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [a0,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11]
        },
        {
          label               : 'V2',
          backgroundColor     : 'teal',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : true,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [b0,b1,b2,b3,b4,b5,b6,b7,b8,b9,b10,b11]
        },
        {
          label               : 'V3',
          backgroundColor     : 'teal',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : true,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [c0,c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,c11]
        },
        {
          label               : 'V4',
          backgroundColor     : 'teal',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : true,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [d0,d1,d2,d3,d4,d5,d6,d7,d8,d9,d10,d11]
        }
      ]
    }
    barChartData.datasets[0].fillColor   = '#3c8dbc'
    barChartData.datasets[0].strokeColor = '#3c8dbc'
    barChartData.datasets[0].pointColor  = '#3c8dbc'
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    barChartData.datasets[2].fillColor   = '#f39c12'
    barChartData.datasets[2].strokeColor = '#f39c12'
    barChartData.datasets[2].pointColor  = '#f39c12'
    barChartData.datasets[3].fillColor   = '#f56954'
    barChartData.datasets[3].strokeColor = '#f56954'
    barChartData.datasets[3].pointColor  = '#f56954'

    barChartData.datasets[0].label  = 'V1'
    barChartData.datasets[1].label  = 'V2'
    barChartData.datasets[2].label  = 'V3'
    barChartData.datasets[3].label  = 'V4'

    var barChartOptions                  = {
      scaleBeginAtZero        : true,
      scaleShowGridLines      : true,
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      scaleGridLineWidth      : 1,
      scaleShowHorizontalLines: true,
      scaleShowVerticalLines  : true,
      barShowStroke           : true,
      barStrokeWidth          : 1,
      barValueSpacing         : 2,
      barDatasetSpacing       : 1,
      legendTemplate          : 'A',
      responsive              : true,
      maintainAspectRatio     : true
    }
    barChartOptions.datasetFill = true
    barChart.Bar(barChartData, barChartOptions)
  })
</script>