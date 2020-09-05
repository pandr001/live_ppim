<section id="list" class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <?=$this->view('includes/alert',$data);?>
            <div class="<?=$data['layout']['list_color'];?>" id="<?=$data['layout']['list_id'];?>">
                <div class="<?=$data['layout']['list_table-type'];?>">
                    <div class="col-xs-9">
                      <!-- <?=$this->view('includes/date-range',$data);?> -->
                    </div>
                    <div class="col-xs-3">
                      <?=add_button('page/release_add','Release');?>
                    </div>
                </div>
                <div class="box-body">
                  <div class="<?=$data['list_col-size'];?>">
                    <table id="table1" class="table table-bordered table-striped">

                        <thead>
                          <tr>
                            <?php foreach ($data['th'] as $val) {
                                echo '<th>'.$val.'</th>';
                            } ?>

                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data['list'] as $k => $val) { ?>
                          <tr>
                            <td data-order='<?=$val['Released_Date'];?>'><?=ucwords($val['Name']);?></td>
                            <td><?=ucwords($val['Version']);?></td>
                            <td><?=ucwords($val['Description']);?></td>
                            <td><?=normal_date($val['Released_Date']);?></td>
                            
                          </tr>
                        <?php } ?>
                        </tbody>

                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>