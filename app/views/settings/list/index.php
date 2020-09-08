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
                      <?=add_button('page/settings_add','Settings');?>
                    </div>
                </div>
                <div class="box-body">
                  <div class="">
                    <table id="table1" class="table table-bordered table-striped">

                        <thead>
                          <tr>
                            <th>Action</th>
                            <?php foreach ($data['th'] as $val) {
                                echo '<th>'.$val.'</th>';
                            } ?>

                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data['list'] as $k => $val) { ?>
                          <tr>
                            <td data-order=''>
                                <?php
                                    echo update_button('page/settings_edit',$val['ID']);
                                    //echo delete_button('page/settings_delete',$val['ID']); 
                                ?>
                            </td>
                            <td><?=ucwords($val['Name']);?></td>
                            <td><?=$this->dynamic_name('tsettingtype',$val['ID_Settingtype']);?></td>
                            <td><?=$val['StartValue'];?></td>
                            <td><?=$val['EndValue'];?></td>
                            
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