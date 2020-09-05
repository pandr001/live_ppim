<?=$this->view('user/header',$data);?>

  <div class="form-group has-feedback">
    <input type="password" class="form-control is" placeholder="New Password" name="new_pass" required value="<?=isset($_POST['new_pass']) ? $_POST['new_pass']:'';?>">
  </div>

  <div class="form-group has-feedback">
    <input type="password" class="form-control is" placeholder="Confirm Password" name="confirm_pass" required value="<?=isset($_POST['confirm_pass']) ? $_POST['confirm_pass']:'';?>">
  </div>
  
<?=$this->view('user/footer',$data);?>