<?php
  if ($this->url[0]=='pos' && $data['fetch']['BranchCode']=='000') {
    $this->view('includes/page-scripts-pos-bar-all',$data);
  }elseif ($this->url[0]=='pos' && $data['fetch']['BranchCode']!='000') {
    $this->view('includes/page-scripts-pos-bar',$data);
  }
?>
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
          value    : <?=$value['QtySold']?>,
          color    : '#<?=$color[$key]?>',
          highlight: 'gray',
          label    : '<?=$value['ProductName']?>'
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
    //vat
    <?php
      print "var vx =".$data['vat']['VatExemptSale'].";";
      print "var vs =".$data['vat']['VatableSale'].";";
    ?>
    var bar = new Morris.Bar({
      element: 'barChart2',
      resize: true,
      <?php
        if ($data['vat']) {
          echo"
            data: [
              {y: 'Vat VS. Non-Vat', a: vx, b: vs},
            ]
          ";
        } 
        elseif (!$data['vat']) {
          echo"
            data: [
              {y: 'No Data Available', a: vx, b: vs},
            ]
          ";
        }
      ?>
      ,
      barColors: ['#00a65a', '#f56954'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Vat Exempt Sales', 'Vatables Sales'],
      hideHover: 'auto'
    });
    //product-category
    var data = {
      <?php
        if ($data['topCategory']) {
          echo"y: 'Product Category',";
        } 
        else{
          echo"y: 'No Data Available',";
        }
        foreach ($data['topCategory'] as $key=> $val) {
          print "value".$key.":".$val['QtySold'].", name".$key.":'".$val['Category']."',";
        }
      ?>
    };
    var bar = new Morris.Bar({
      element: 'barChart3',
      resize: true,
      data: [ data ],
      barColors: [
        '#f56954', 
        '#00a65a', 
        '#f39c12', 
        '#00c0ef', 
        '#3c8dbc', 
        '#d4af37', 
        '#2b908f', 
        '#6cb45f', 
        '#ff00ff', 
        '#9C27B0'
      ],
      xkey: 'y',
      ykeys: Object.keys(data).filter(i=>i.indexOf('value')>=0),
      labels: Object.keys(data).filter(i=>i.indexOf('name')>=0).map(i=>data[i]),
      hideHover: 'auto'
    });
    //cash-credit-sales
    <?php
      print "var cash =".$data['ccs']['Cash'].";";
      print "var credit =".$data['ccs']['Credit'].";";
    ?>
    var donut = new Morris.Donut({
      element: 'pieChart2',
      resize: true,
      colors: ["#00a65a","#f56954"],
       <?php
        if ($data['ccs']['Cash']==0 && $data['ccs']['Credit']==0 ) {
          echo 'data: [
              {label: "No Data Available", value: cash}
          ]';
        }
        else{
          echo '
            data: [
              {label: "Cash", value: cash},
              {label: "Credit", value: credit}
            ]
          ';
        }
      ?>
      ,
      hideHover: 'auto'
    });
    //discount
    <?php
      print "var a=".$data['discount']['SeniorDiscount'].";";
      print "var b =".$data['discount']['PWDDiscount'].";";
      print "var c =".$data['discount']['RegularDiscount'].";";
    ?>
    var donut = new Morris.Donut({
      element: 'pieChart3',
      resize: true,
      colors: ['#2b908f','#6cb45f','#d4af37'],
      <?php
        if ($data['discount']['SeniorDiscount']==0 && $data['discount']['PWDDiscount']==0 && $data['discount']['RegularDiscount']==0 ) {
          echo 'data: [
              {label: "No Data Available", value: a}
          ]';
        }
        else{
          echo '
            data: [
              {label: "Senior", value: a},
              {label: "PWD", value: b},
              {label: "Regular", value: c}
            ]
          ';
        }
      ?>
      ,
      hideHover: 'auto'
    });
    
  })
</script>