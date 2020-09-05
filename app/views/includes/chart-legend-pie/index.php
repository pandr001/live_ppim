<?php 
  if ($this->url[0]!='pos' && $this->url[0]!='expense') {
    if ($data['pie'][0]['Amount']==0 && $data['pie'][0]['Amount']==0) {
      echo '<span class="badge bg-red">NO DATA</span>';
    }
    elseif ($this->url[0] == 'ap' || $this->url[0] == 'ar') {
      foreach ($data['pie'] as $k => $val) {
        if ($k==0) { 
          echo '<span class="badge bg-orange">₱ '.number_format($val['Amount'],2).'</span>';
          echo ' <span class="badge bg-gray"><i>= '.number_format(($val['Amount']/($val['Amount']+$data['pie'][$k+1]['Amount']))*100,2).'%</i></span>';
        }
        elseif ($k==1){
          echo '<span class="badge bg-red">₱ '.number_format($val['Amount'],2).'</span>';
          echo ' <span class="badge bg-gray"><i>= '.number_format(($val['Amount']/($val['Amount']+$data['pie'][$k-1]['Amount']))*100,2).'%</i></span>';
        }
        echo '<br>';
      }
    }
    elseif ($this->url[0]=='po') {
      foreach ($data['pie'] as $k => $val) {
        if ($k==0) { 
          echo '<span class="badge bg-yellow">₱ '.number_format($val['Amount'],2).'</span>';
          echo ' <span class="badge bg-gray"><i>= '.number_format(($val['Amount']/($val['Amount']+$data['pie'][$k+1]['Amount']))*100,2).'%</i></span>';
        }
        elseif ($k==1){
          echo '<span class="badge bg-green">₱ '.number_format($val['Amount'],2).'</span>';
          echo ' <span class="badge bg-gray"><i>= '.number_format(($val['Amount']/($val['Amount']+$data['pie'][$k-1]['Amount']))*100,2).'%</i></span>';
        }
        echo '<br>';
      }
    }
    elseif ($this->url[0] == 'inventory') {
      echo '<span class="badge bg-green">'.number_format($data['b'][0]).'</span>';
          echo ' <span class="badge bg-gray"><i>= '.number_format(($data['b'][0]/($data['b'][0]+$data['c'][0]+$data['d'][0]))*100,2).'%</i></span><br>';
       echo '<span class="badge bg-orange">'.number_format($data['c'][0]).'</span>';
          echo ' <span class="badge bg-gray"><i>= '.number_format(($data['c'][0]/($data['b'][0]+$data['c'][0]+$data['d'][0]))*100,2).'%</i></span><br>';
      echo '<span class="badge bg-red">'.number_format($data['d'][0]).'</span>';
          echo ' <span class="badge bg-gray"><i>= '.number_format(($data['d'][0]/($data['b'][0]+$data['c'][0]+$data['d'][0]))*100,2).'%</i></span><br>';
    }
  }
  elseif ($this->url[0] == 'pos'){
    if (!$data['top'] && $data['key']==1) {
      echo '<span class="badge bg-red">NO DATA AVAILABLE</span>';
    }
    if (!$data['ccs'] && $data['key']==3) {
      echo '<span class="badge bg-red">NO DATA AVAILABLE</span>';
    }
    if (!$data['discount'] && $data['key']==5) {
      echo '<span class="badge bg-red">NO DATA AVAILABLE</span>';
    }
    elseif ($data['top']) {
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
  }
  elseif ($this->url[0] == 'expense'){
    if (!$data['top'] && $data['key']==1) {
      echo '<span class="badge bg-red">NO DATA AVAILABLE</span>';
    }
    elseif ($data['top']) {
      foreach ($data['top'] as $k => $val) {
        if (!isset($val['Balance'])) {
          echo '<span class="badge bg-red">NO DATA</span>';
        }
        else{
          echo '<span class="badge" style="background:#'.$data['pieColor'][$k].';">'.($k+1).'.'.$val['ExpenseName'].'</span>';
          echo ' <span class="badge">₱ '.number_format($val['Balance'],2).'</span>';
          echo '<br>';
        }
      }
    }
  }
?>