<script>
  $(function () {
    //top10
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      <?php 
        $color = pieColor();
        foreach ($data['top'] as $key => $value) { ?>
        {
          value    : <?=$value['Balance']?>,
          color    : '#<?=$color[$key]?>',
          highlight: 'gray',
          label    : '<?=$value['ExpenseName']?>'
        },
      <?php } ?>
    ]
    var pieOptions     = {
      segmentShowStroke    : true,
      segmentStrokeColor   : '#fff',
      segmentStrokeWidth   : 2,
      percentageInnerCutout: 50, 
      animationSteps       : 100,
      animationEasing      : 'easeOutBounce',
      animateRotate        : true,
      animateScale         : false,
      responsive           : true,
      maintainAspectRatio  : true,
      legendTemplate       : 'A'
    }
    pieChart.Doughnut(PieData, pieOptions)
  })
</script>