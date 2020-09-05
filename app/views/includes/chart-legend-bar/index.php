<?php 
  if ($this->url[0]!='inventory' && $this->url[0]!='pos' ) {
    foreach ($data['loop'] as $k => $val) {
      echo '<span class="badge bg-blue">'.return_month($k+1).'</span>';
      echo val($val['Balance']);
      if ($val['Balance']>0) { 
        if ($this->url[0]=='ap') {
          echo $this->view_data_ap($data['func'],$k+1);
        }
        elseif ($this->url[0]=='ar') {
          echo $this->view_data_ar($data['func'],$k+1);
        }
      }
      else{
        echo '<span class="badge bg-red">NO DATA</span>';
      }
      echo "<br>";
    }
  }
  elseif($this->url[0] == 'pos') {
    if (!$data['vat'] && $data['key']==2) {
      echo '<span class="badge bg-red">NO DATA AVAILABLE</span>';
    }
    if (!$data['topCategory'] && $data['key']==4) {
      echo '<span class="badge bg-red">NO DATA AVAILABLE</span>';
    }
  }
?>