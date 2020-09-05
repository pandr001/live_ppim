<?php 
  if (!($data['top'])) {
    echo '<span class="badge bg-red">NO DATA AVAILABLE</span>';
  }
  else{
    foreach ($data['top'] as $k => $val) {
      if (!isset($val['QtySold'])) {
        echo '<span class="badge bg-red">NO DATA</span>';
      }
      else{
        echo '<span class="badge" style="background:#'.$data['pieColor'][$k].';">'.($k+1).'.'.$val['ProductName'].'</span>';
        echo '<span class="badge">₱ '.number_format($val['QtySold'],2).'</span>';
        echo '<span class="badge bg-gray"><i>- '.$val['Category'].'</i></span>';
        echo '<br>';
      }
    }
  }
?>