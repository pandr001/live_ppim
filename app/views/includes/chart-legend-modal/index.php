<div id="chartLegend" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Legend</h4>
      </div>
      <div class="modal-body">
        <?php foreach ($data['loop'] as $k => $val) {
            echo return_month($k+1).' ';
            echo val($val['Balance']);
            if ($val['Balance']>0) { 
              if ($this->url[1]=='ap') {
                echo $this->view_data_ap($data['func'],$value['title'],$k);
              }
              elseif ($this->url[1]=='ar') {
                echo $this->view_data_ar($data['func'],$value['title'],$k);
              }
            }
            else{
              echo ' <span class="badge bg-red">NO DATA</span>';
            }
            echo "<br>";
        }?>
      </div>
      <div class="modal-footer">
        <a class="btn btn-danger" title="" tooltip href="">
      Close</a>
      </div>
    </div>
  </div>
</div>