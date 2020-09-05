<?php foreach ($data['layout']['small_box'] as $key => $value) { ?>
  <div class="col-lg-3 col-md-6">
    <div class="small-box <?=$value['color'];?>">
      <div class="inner">
        <h2><b><?=$value['val'];?></b>
        <p><b><?=$value['name'];?></b></p>
      </div>
      <div class="icon">
        <i class="<?=$value['icon'];?>" style="color:white; opacity: 0.5;"></i>
      </div>
      <a href="<?=$value['url'];?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
<?php } ?> 