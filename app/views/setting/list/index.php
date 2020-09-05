<section id="list" class="content container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <?=$this->view('includes/alert',$data);?>
            <div class="<?=$data['list_color'];?>" id="<?=$data['list_id'];?>">
                <div class="<?=$data['list_table-type'];?>">
                    <div class="col-xs-9">
                      <?=$this->view('includes/date-range',$data);?>
                    </div>
                    <div class="col-xs-3">
                      <?=$this->view('includes/add-button',$data);?>
                    </div>
                </div>
                <div class="box-body">
                  <div class="<?=$data['list_col-size'];?>">
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
                            <td data-order='<?=$val['SaleDate'];?>'>
                                <?php
                                    echo update_button('page/job_edit',$val['ID']);
                                    // echo delete_button('page/job_delete',$val['ID']); - only for admin or super_admin
                                ?>
                            </td>
                            <td><?=ucwords($val['FirstName']).' '.ucwords($val['LastName']);?></td>
                            <td><?=$val['EmailAdd'];?></td>
                            <td><?=$val['MobileNumber'];?></td>
                            <td><?=$val['StreetAddress'];?></td>

                            <td><?=$val['NumberOfPanels'];?></td>
                            <td><?=$this->dynamic_name('trooftype',$val['ID_RoofType']);?></td>
                            <td><?=$val['Metre'];?></td>
                            <td><?=$val['RoofHeight'];?></td>

                            <td><?=$val['TiltFrame'];?></td>
                            <td><?=$val['SplitArray'];?></td>
                            <td><?=$val['MainSwitch'];?></td>
                            <td><?=$val['SwitchBoardUpgrade'];?></td>

                            <td><?=$val['Nmi'];?></td>
                            <td><?=ucwords($val['AdditionalNotes']);?></td>
                            <td><?=$val['ID_Contractor'];?></td>
                            <td><?=$val['ID_Installer'];?></td>
                            <td><?=$val['MeterNumber'];?></td>
                            <td><?=$this->dynamic_name('tjobtype',$val['ID_JobType']);?></td>
                            <td><?=ucwords($val['Description']);?></td>
                            <td><?=normal_date($val['SaleDate']);?></td>
                            <td><?=normal_date($val['InstallationDate']);?></td>

                            <td><?=$this->dynamic_name('tjobstage',$val['ID_Jobstage']);?></td>
                            <td><?=$this->dynamic_name('tpriority',$val['ID_Priority']);?></td>

                            
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