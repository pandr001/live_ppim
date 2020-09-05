<section class="content container-fluid">
  <div class="row">
    <div class="<?=$data['list_row-size'];?>">
      <div class="<?=$data['list_color'];?>" id="<?=$data['list_id'];?>">
        <div class="<?=$data['list_table-type'];?>">
          <h3 class="box-title"><i class="<?=$data['list_icon'];?>"></i> <?=$data['small_title'];?></h3>
          <?php
            //php code here
          ?>
        </div>
        <div class="box-body">
          <div class="<?=$data['list_col-size'];?>">
            <table id="table1" class="table table-bordered table-striped">
              <thead>
              <tr><?=$data['list']['table-head'];?>
              </tr>
              </thead>
              <tbody>
              <?=$data['list']['table-data'];?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>