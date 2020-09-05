<?=$this->view('includes/header',$data);?>
<section class="content container-fluid">
  <div class="row">
    <div class="col-xs-1"></div>
    <div class="col-xs-10">
      <div class="<?=$data['list_color'];?>" id="<?=$data['list_id'];?>">
        <div class="<?=$data['list_table-type'];?>">
          <h3 class="box-title"> <?=$data['small_title'];?></h3>
          <form method="post">
            <button class="pull-right btn-log" type="submit" name="add" title="Create New Job">
              <i class="fa fa-plus-circle fa-2x"></i>
            </button>
          </form>
        </div>
        <div class="box-body">
          <div class="<?=$data['list_col-size'];?>">
            <table id="table1" class="table table-bordered table-striped">