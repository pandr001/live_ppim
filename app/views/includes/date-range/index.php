<br>
<form method="post" class="form-horizontal">
  <div class="form-group">
    <label class="col-sm-2 control-label">Date Range</label>
    <div class="col-sm-4">
      <input type="date" name="date_from" class="form-control date" required value="<?=isset($_POST['date_from']) ? $_POST['date_from'] : $data['date-range']['start']; ?>">
    </div>
    <div class="col-sm-4">
      <input type="date" name="date_to" class="form-control date" required value="<?=isset($_POST['date_to']) ? $_POST['date_to'] : $data['date-range']['end']; ?>">
    </div>
    <div class="col-sm-2">
    	<button type="go" name="date-range-filter" class="btn btn-success btn-log"> GO</button>
    </div>
  </div>
</form>