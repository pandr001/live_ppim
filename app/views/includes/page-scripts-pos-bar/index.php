<script>
  $(function () {
    //bar
    var barChartCanvas  = $('#barChart').get(0).getContext('2d')
    var barChart        = new Chart(barChartCanvas)
    <?php
      for ($i=0; $i<12; $i++) { 
        print "var a".$i."=".$data['loop'][$i]['Balance'].";";
      }
    ?>
    var barType = {
      type:'horizontalBar'
    }
    var barChartData = 
    {
      labels  : ['JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'],
      datasets: [
        {
          label               : 'Data',
          backgroundColor     : 'teal',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : true,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [a0,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11]
        }
      ]
    }
    barChartData.datasets[0].fillColor   = '#2b908f'
    barChartData.datasets[0].strokeColor = '#2b908f'
    barChartData.datasets[0].pointColor  = '#2b908f'
    var barChartOptions                  = {
      scaleBeginAtZero        : true,
      scaleShowGridLines      : true,
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      scaleGridLineWidth      : 1,
      scaleShowHorizontalLines: true,
      scaleShowVerticalLines  : true,
      barShowStroke           : true,
      barStrokeWidth          : 2,
      barValueSpacing         : 5,
      barDatasetSpacing       : 1,
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = true
    barChart.Bar(barChartData, barChartOptions)
  })
</script>