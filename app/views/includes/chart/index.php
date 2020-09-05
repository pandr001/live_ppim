<?php foreach ($data['chart'] as $key => $value) { ?>
  <div class="<?=$value['rowSize'];?>">
    <div class="<?=$value['color'];?>">
      <div class="box-header">
        <h3 class="box-title">
          <i class="<?=$value['icon'];?>"></i> <?=$value['title'];?>
          <?php 
            if($value['id']=='barChart' && $this->url[0]=='pos' && $data['fetch']['BranchCode']=='000'){
              echo ' <span class="badge bg-blue">V1</span>';
              echo ' <span class="badge bg-green">V2</span>';
              echo ' <span class="badge bg-orange">V3</span>';
              echo ' <span class="badge bg-red">V4</span>';
            }
            elseif($value['id']=='barChart' && $this->url[0] == 'expense' && $data['fetch']['BranchCode']=='000') {
              echo ' <span class="badge bg-aqua">HEAD OFFICE</span>';
              echo ' <span class="badge bg-blue">V1</span>';
              echo ' <span class="badge bg-green">V2</span>';
              echo ' <span class="badge bg-orange">V3</span>';
              echo ' <span class="badge bg-red">V4</span>';
            }
          ?>
        </h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="row"> 
          <div class="<?=$value['col_1'];?>">
            <?php 
              if ($this->url[0]!='inventory') {
                if ($key<2) {
                  echo '
                    <div class="chart">
                      <canvas id="'.$value['id'].'" style="height:'.$data['chartHeight'].'px"></canvas>
                    </div>
                  ';
                }if ($key>1) {
                  echo '
                    <div class="chart" id="'.$value['id'].'" style="height:'.$data['chartHeight'].'px">
                    </div>
                  ';
                } 
              }
              elseif ($this->url[0]=='inventory') {
                if ($key==0) {
                  echo '
                    <div class="chart">
                      <canvas id="'.$value['id'].'" style="height:'.$data['chartHeight'].'px"></canvas>
                    </div>
                  ';
                }else{
                  echo '
                    <div class="chart" id="'.$value['id'].'" style="height:'.$data['chartHeight'].'px">
                    </div>
                  ';
                } 
              }
            ?>
          </div>
          <?php if ($value['col_1']!='col-md-12')  { ?>
            <div class="<?=$value['col_2'];?>">
              <ul class="chart-legend clearfix">
                <li>
                  <?php
                    $data['key']=$key;
                    if ($key==0 || $key==2 || $key==4) {
                      $this->view('includes/chart-legend-bar',$data);
                    }
                    elseif ($key==1 || $key==3 || $key==5) {
                      $this->view('includes/chart-legend-pie',$data);
                    }
                  ?>
                </li>
              </ul>
            </div>
          <?php } ?> 
        </div>
      </div>
    </div>
  </div>
<?php } ?> 
<!-- for dynamic conversion -->