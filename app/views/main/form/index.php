<form class="form-horizontal" method="post">
  <div class="card-body">
    <div class="form-group row">
      <div class="col-sm-3">
        <b>Select Branch</b>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-2">
        <select id="BranchCode" class="form-control select2" name="BranchCode" style="width: 100%;" required>
          <option value="<?=isset($data['fetch']['BranchCode']) ? $data['fetch']['BranchCode'] : ''; ?>" disabled selected>Select</option>
          <?php foreach ($data['branch'] as $key => $value) {
            if ($key == $data['fetch']['BranchCode']){
              $selected = "selected=\"selected\""; }
            else {
              $selected = ($data['fetch']['BranchCode']==$key) ? 'selected':'';
            }
            echo '<option value="'.$key.'" '.$selected.'>'.$value.'</option>';
          } ?>
        </select>
      </div>
      <div class="col-sm-1">
        <button type="submit" class="btn btn-success" name="submit">GO</button>
      </div>
    </div>
  </div>
</form>